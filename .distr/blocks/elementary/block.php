{% from './data.php' import data as data %}
<section class="elementary lazy" id="elementary">
    <div class="container elementary__container">
        <h2 class="title elementary__title">About the Python Elementary course</h2>
        <div class="elementary__block">
            {% for item in data %}
            <div class="elementary__item">
                <div class="elementary__item-aside">
                    <img data-src="img/elementary/pic-{{ item.id }}.png" alt="icon" class="lazy">
                </div>
                <div class="elementary__item-main">
                    <p class="elementary__item-title">{{ item.title | safe }}</p>
                    {% if item.text %}
                    <p class="elementary__item-text">{{ item.text | safe }}</p>
                    {% endif %}
                </div>
            </div>
            {% endfor %}
        </div>
    </div>
</section>
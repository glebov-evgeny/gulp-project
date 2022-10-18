{% from './data.php' import data as data %}
<section class="course lazy" id="course">
    <div class="container course__container">
        <h2 class="title course__title">Course syllabus</h2>
        <div class="course__block">
            {% for item in data %}
            <div class="course__item">
                <div class="course__item-aside">
                    <p class="course__item-id">{{ item.id | safe }}</p>
                </div>
                <div class="course__item-main">
                    <p class="course__item-title">{{ item.title | safe }}</p>
                    {% if item.text %}
                    <p class="course__item-text">{{ item.text | safe }}</p>
                    {% endif %}
                </div>
            </div>
            {% endfor %}
        </div>
    </div>
</section>
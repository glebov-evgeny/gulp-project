{% from './data.php' import data as data %}
<section class="faq lazy" id="faq">
    <div class="container faq__container">
        <h2 class="title faq__title">Faq</h2>

        <div class="faq__block">
            {% for item in data %}
            <div class="faq__item">
                <div class="faq__item-top">
                    <p class="faq__item-title">{{ item.title | safe }}</p>
                    <svg class="faq__item-arrow" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.5 9.0918L12.5 15.0918L6.5 9.0918" stroke="#A0A8B1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                
                <div class="faq__item-bottom">
                    <p class="faq__item-text">{{ item.text | safe }}</p>
                </div>
            </div>
            {% endfor %}
        </div>
    </div>
</section>
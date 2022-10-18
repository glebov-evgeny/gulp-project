{% macro form(form, form_class='form_horisontal', title_class='', button_class='', 
    title='Submit an application to get more information about Python Elementary', 
    button='Buy',
    subtitle='',
    add_fields, exclude_fields, select, actionTicket) %}
<form action="<?=$action?>&form={{ form }}" class="form {{form_class}}">
    <div class="form__wrapper">
        {% if title.length %}
        <h3 class="form__title {{ title_class }}">{{ title | safe }}</h3>
        {% endif %}

        {% if subtitle.length %}
        <p class="form__subtitle">{{ subtitle | safe }}</p>
        {% endif %}

        <div class="form__items">
            {% if not exclude_fields.name %}
            {{ form_item( 'name', 'text', 'form__item-01', 'First name', true ) }}
            {% endif %}

            {% if not exclude_fields.phone %}
            {{ form_item( 'phone', 'text', 'form__item-02', 'Phone', true ) }}
            {% endif %}

            {% if not exclude_fields.email %}
            {{ form_item( 'email', 'email', 'form__item-03', 'Email', true ) }}
            {% endif %}

            {% if add_fields.length %}
            {% for item in add_fields %}
            {{ form_item( item.name, item.type, item.class, item.placeholder, item.required, item.value ) }}
            {% endfor %}
            {% endif %}


            <button class="form__input-btn form__item-04 {{button_class}}" type="submit">{{ button | safe }}</button>

            <div class="form__more">
                <label class="form__footer">
                    <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                        <div class="form__footer-checkbox-icon lazy"></div>
                    </div>
                    <div class="form__footer-text">By clicking the button, I accept the terms of the <a href="#privacy" class="fancybox form__more-link">privacy policy</a> and agree to receive newsletters</div>
                </label>

            </div>

        </div>

    </div>
</form>
{% endmacro %}


{% macro form_item(name, type, class, placeholder, required, value) %}
<div class="form__item {{ class }} {{ 'd-none' if type == 'hidden' }}">
    {% if type == 'textarea' %}
    <textarea name="{{ name }}" placeholder="{{ placeholder }}" class="form__input form__input_textarea" {{ 'required' if required }}></textarea>
    {% else %}
    <input name="{{ name }}" type="{{ type }}"  placeholder="{{ placeholder }}" class="form__input {{ class }}" {{ 'min=1' if type == 'number' }} {{ 'required' if required }} value="{{ value | safe }}">
    {% endif %}
</div><!-- form__item -->
{% endmacro %}
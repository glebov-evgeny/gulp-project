{% if formPay == true  %}
    <section class="formblock _pay {{ yellow }}" id="">
        <div class="container">
            {% set linkPay = [{name: 'link', type: 'hidden', value: ' <?= $linkPay ?>'}] %}
            {{ form.form('form-payment',
                title='<span class="form__title-big">25%</span> discount if you pay online <br>
                <span class="form__title-small"><span class="form__title-nmb">$99</span> with discount /<span class="form__title-br"></span> <span class="form__title-nmb">$124</span> without discount</span>',
                subtitle='Tuition includes: Video lessons, mentor support, creating your own project', 
                button='buy',
                button_class = '_buy',add_fields=linkPay) }}
        </div>
    </section>
{% else %}
    <section class="formblock" id="">
        <div class="container">
            {{ form.form('form-registration') }}
        </div>
    </section>
{% endif %}
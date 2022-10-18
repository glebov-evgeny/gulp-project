{% extends "default.php" %}

{% block meta %}
  <title><?= $title ?></title>
  <meta property="og:title" content="<?= $title ?>">
  <meta name="description" content="<?= $description ?>">
  <meta property="og:description" content="<?= $description ?>">
{% endblock %}

{% block blocks %}
    {% set IS_MAIN = true %}
    {% include 'header/block.php' %}
    <main class="main__wrapper">
        {% include 'main/block.php' %}
        {% include 'promo/block.php' %}
        {#<!-- {% include 'formblock/block.php' %} -->#}

        {% set yellow = '--yellow'%}
        {% set formPay = true %}
        {% include 'formblock/block.php' %}
        {% set formPay = false %}
        {% set yellow = false %}

        {% include 'why/block.php' %}
        {% include 'about/block.php' %}
        {% include 'course/block.php' %}
        {% include 'finish/block.php' %}
        {#<!-- {% include 'formblock/block.php' %} -->#}
        {% include 'elementary/block.php' %}
        {% include 'author/block.php' %}

        {% set formPay = true %}
        {% include 'formblock/block.php' %}
        {% set formPay = false %}
        
        {% include 'faq/block.php' %}
        {% set class = '_outro' %}
        {% include 'main/block.php' %}  
    </main>  
    {% include 'footer/block.php' %}    
    <a href="#popup-reg" class="footer__btn" data-fancybox><?=$btn?></a>

{% endblock %}

{% block popups %}
    {% include 'popups/block.php' %}
{% endblock %}

{% block js %}
    <script src="js/script.main.js"></script>
{% endblock %}

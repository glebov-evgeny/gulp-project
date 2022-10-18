{% extends "default.php" %}

{% block meta %}
<?php 
    $title = 'Python Elementary | Спасибо';
?>
  <title><?= $title ?></title>
  <meta property="og:title" content="<?= $title ?>">
  <meta name="description" content="<?= $description ?>">
  <meta property="og:description" content="<?= $description ?>">
{% endblock %}

{% block blocks %}
    {% set IS_MAIN = false %}
    {% set class = '_clear' %}
    {% include 'header/block.php' %} 
    {% include 'thanks/block.php' %} 
    {% include 'footer/block.php' %} 
{% endblock %}

{% block popups %}
    {% include 'popups/block.php' %}
{% endblock %}

{% block js %}
    <script src="js/script.thanks.js"></script>
{% endblock %}
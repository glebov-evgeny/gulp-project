<footer class="footer {{class}}">
    <div class="container footer__flex">
        <div  class="footer__content">
            <div class="footer__logos">
                <a href="<?=$BASE_HREF?>" class="footer__logo">
                    <img src="img/header/logo.svg" alt="logo-01" class="footer__logo-pic">
                </a>
            </div>
            <nav class="footer__nav">
                {% if IS_MAIN == false %} 
                    <a href="<?=$BASE_HREF?>#why" class="footer__nav-link" target="_blank">Why Python</a>
                    <a href="<?=$BASE_HREF?>#about" class="footer__nav-link" target="_blank">About the Course</a>
                    <a href="<?=$BASE_HREF?>#course" class="footer__nav-link" target="_blank">Training Process</a>
                {% else %}
                    <a href="#why" class="footer__nav-link scroll">Why Python</a>
                    <a href="#about" class="footer__nav-link scroll">About the Course</a>
                    <a href="#course" class="footer__nav-link scroll">Training Process</a>
                {% endif %}
            </nav>
        </div>
        <p class="footer__link">&copy;&nbsp;<?= date('Y') ?>&nbsp;Synergy. All rights reserved.</p>
        <a href="#privacy" class="fancybox footer__link">Privacy Policy</a>
    </div>
</footer>
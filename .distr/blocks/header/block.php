<header class="header {{class}}" id="header">
    <div class="container header__container">

        <div class="header__logos">
            <a href="<?=$BASE_HREF?>" target="_blank" class="header__logo">
                <img src="img/header/logo.svg" alt="logo-01" class="header__logo-pic">
            </a>
        </div>

        <nav class="header__nav">
            {% if IS_MAIN == false %} 
            <a href="<?=$BASE_HREF?>#why" class="header__nav-link" target="_blank">Why Python</a>
            <a href="<?=$BASE_HREF?>#about" class="header__nav-link" target="_blank">About the Course</a>
            <a href="<?=$BASE_HREF?>#course" class="header__nav-link" target="_blank">Training Process</a>
            {% else %}
            <a href="#why" class="header__nav-link scroll">Why Python</a>
            <a href="#about" class="header__nav-link scroll">About the Course</a>
            <a href="#course" class="header__nav-link scroll">Training Process</a>
            <!-- <a href="#popup-reg" class="header__nav-link-btn" data-fancybox>Submit</a> -->
            {% endif %}
        </nav>

        <a href="mailto:<?=$mail?>" class="header__mail"><?=$mail?></a>

        <div class="header__menu">
            <svg class="ham hamRotate hamR" viewBox="0 0 100 100" width="35" onclick="this.classList.toggle('active')">
                <path class="line top" d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
                <path class="line middle" d="m 70,50 h -40" />
                <path class="line bottom" d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
            </svg>
        </div>

        <div class="header__contacts">
            {% if IS_MAIN == false %} 
            <a href="<?=$BASE_HREF?>" class="header__btn" target="_blank">Go Back</a>
            {% else %}
            <a href="#popup-reg" class="header__btn" data-fancybox>Get details</a>
            {% endif %}
        </div>
    </div>
</header>
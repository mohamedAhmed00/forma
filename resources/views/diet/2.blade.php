@include('diet.template.head')
<body class="pb pb--big" data-page="steps">
<div id="header-image"
     style="background-image: url({{ asset('/diet/img/kF4SUJTR5ptv3EAeDZJvRYSontSyc8eLB1TX5qEL.png') }})"
     class="o-minintro--decoration o-minintro">
    <div class="o-minintro__title m-title">
        <svg class="m-title__icon a-icon">
            <use xlink:href="/diet/img/sprite.svg#icon-step-2"></use>
        </svg>
        <div class="m-title__title">Physical activity</div>
    </div>
    <div class="o-minintro__decoration"></div>
</div>
<div class="o-questions">
    <div class="o-questions__nav">
        <div class="o-questions__back m-back">
            <a href="index.html" class="m-back__step a-step--completed a-step js-step">
                <div class="a-step__effect">
                    <svg class="a-step__effect-arrow a-icon">
                        <use xlink:href="/diet/img/sprite.svg#icon-icon-arrow"></use>
                    </svg>
                    <svg class="a-step__effect-arrow a-icon">
                        <use xlink:href="/diet/img/sprite.svg#icon-icon-arrow"></use>
                    </svg>
                </div>
                <svg class="a-step__icon a-icon">
                    <use xlink:href="/diet/img/sprite.svg#icon-step-1"></use>
                </svg>
                <div class="a-step__text">Gender</div>
            </a>
            <a href="index.html" class="m-back__bbutton a-bbutton">
                <svg class="a-bbutton__icon a-icon">
                    <use xlink:href="/diet/img/sprite.svg#icon-back"></use>
                </svg>
                <div class="a-bbutton__text">back</div>
            </a>
        </div>
        <div class="o-questions__help-btn js-help-btn a-bbutton" data-open="help" data-close="close"
             data-icon-open-url="//diet/img/sprite.svg#icon-help"
             data-icon-close-url="//diet/img/sprite.svg#icon-cancel">
            <svg class="a-bbutton__icon a-icon">
                <use xlink:href="/diet/img/sprite.svg#icon-help"></use>
            </svg>
            <div class="a-bbutton__text">help</div>
        </div>
    </div>
    <div class="o-questions__content">
        <a href="{{ url('diet2/ALMOST_NO_PHYSICAL_ACTIVITY') }}">
            <div data-href="/diet2/ALMOST_NO_PHYSICAL_ACTIVITY" class="m-test-buttons__button a-button--type-3 a-button js-radio dietAnswer" data-key="236" data-value="231" style="margin-bottom: 25px">
                <div class="a-button__text">ALMOST NO PHYSICAL ACTIVITY</div>
            </div>
        </a>
        <a href="{{ url('diet2/I_OFTEN_GO_FOR_A_WALK') }}">
            <div data-href="/diet2/I_OFTEN_GO_FOR_A_WALK" class="m-test-buttons__button a-button--type-3 a-button js-radio dietAnswer" data-key="236" data-value="232" style="margin-bottom: 25px">
                <div class="a-button__text">I OFTEN GO FOR A WALK</div>
            </div>
        </a>
        <a href="{{ url('diet2/I_EXERCISE_1_-_2_TIMES_A_WEEK') }}">
            <div data-href="/diet2/I_EXERCISE_1_-_2_TIMES_A_WEEK" class="m-test-buttons__button a-button--type-3 a-button js-radio dietAnswer" data-key="236" data-value="233" style="margin-bottom: 25px">
                <div class="a-button__text">I EXERCISE 1 - 2 TIMES A WEEK</div>
            </div>
        </a>
        <a href="{{ url('diet2/I_EXERCISE_3_-_5_TIMES_A_WEEK') }}">
            <div data-href="/diet2/I_EXERCISE_3_-_5_TIMES_A_WEEK" class="m-test-buttons__button a-button--type-3 a-button js-radio dietAnswer" data-key="236" data-value="234" style="margin-bottom: 25px">
                <div class="a-button__text">I EXERCISE 3 - 5 TIMES A WEEK</div>
            </div>
        </a>
        <a href="{{ url('diet2/I_EXERCISE_5_-_7_TIMES_A_WEEK') }}">
            <div data-href="/diet2/I_EXERCISE_5_-_7_TIMES_A_WEEK" class="m-test-buttons__button a-button--type-3 a-button js-radio dietAnswer" data-key="236" data-value="235" style="margin-bottom: 25px">
                <div class="a-button__text">I EXERCISE 5 - 7 TIMES A WEEK</div>
            </div>
        </a>
    </div>
    <div class="o-questions__help-wrap">
        <div class="o-questions__help m-help js-help"><a href="#" class="m-help__close js-step-help-close">
                <div class="m-help__close-text">Close</div>
                <svg class="m-help__close-icon a-icon">
                    <use xlink:href="/diet/img/sprite.svg#icon-cancel"></use>
                </svg>
            </a>
            <svg class="m-help__icon a-icon">
                <use xlink:href="/diet/img/sprite.svg#icon-help"></use>
            </svg>
            <div class="m-help__text">Your level of physical activity is the single most important factor which
                determines the amount of food in your meal program. Please select the answer most closely corresponding
                to your lifestyle in order to achieve your target weight.
            </div>
        </div>
    </div>
</div>
<div class="m-steps-bg"></div>
<div class="m-steps">
    <div class="m-steps__step-line a-step-line">
        <div style="width: 10%" data-step="2" data-steps="10" class="a-step-line__frontline js-step-line">
            <div class="a-step-line__frontline-text js-step-text"><span
                        class="js-step-line-text">10</span><span>%</span></div>
        </div>
    </div>
    <div class="m-steps__steps js-steps">
        <a href="index.html" class="m-steps__step js-step a-step
                      a-step--completed
                                 a-step--active
                      ">
            <div class="a-step__effect">
                <svg class="a-step__effect-arrow a-icon">
                    <use xlink:href="/diet/img/sprite.svg#icon-icon-arrow"></use>
                </svg>
                <svg class="a-step__effect-arrow a-icon">
                    <use xlink:href="/diet/img/sprite.svg#icon-icon-arrow"></use>
                </svg>
            </div>
            <svg class="a-step__icon a-icon">
                <use xlink:href="/diet/img/sprite.svg#icon-step-1"></use>
            </svg>
            <div class="a-step__text">Gender</div>
        </a>
        <a href="2.html" class="m-steps__step js-step a-step
                                 ">
            <div class="a-step__effect">
                <svg class="a-step__effect-arrow a-icon">
                    <use xlink:href="/diet/img/sprite.svg#icon-icon-arrow"></use>
                </svg>
                <svg class="a-step__effect-arrow a-icon">
                    <use xlink:href="/diet/img/sprite.svg#icon-icon-arrow"></use>
                </svg>
            </div>
            <svg class="a-step__icon a-icon">
                <use xlink:href="/diet/img/sprite.svg#icon-step-2"></use>
            </svg>
            <div class="a-step__text">Physical activity</div>
        </a>
        <a href="3.html" class="m-steps__step js-step a-step
                                 ">
            <div class="a-step__effect">
                <svg class="a-step__effect-arrow a-icon">
                    <use xlink:href="/diet/img/sprite.svg#icon-icon-arrow"></use>
                </svg>
                <svg class="a-step__effect-arrow a-icon">
                    <use xlink:href="/diet/img/sprite.svg#icon-icon-arrow"></use>
                </svg>
            </div>
            <svg class="a-step__icon a-icon">
                <use xlink:href="/diet/img/sprite.svg#icon-step-3"></use>
            </svg>
            <div class="a-step__text">meat</div>
        </a>
        <a href="4.html" class="m-steps__step js-step a-step
                                 ">
            <div class="a-step__effect">
                <svg class="a-step__effect-arrow a-icon">
                    <use xlink:href="/diet/img/sprite.svg#icon-icon-arrow"></use>
                </svg>
                <svg class="a-step__effect-arrow a-icon">
                    <use xlink:href="/diet/img/sprite.svg#icon-icon-arrow"></use>
                </svg>
            </div>
            <svg class="a-step__icon a-icon">
                <use xlink:href="/diet/img/sprite.svg#icon-step-4"></use>
            </svg>
            <div class="a-step__text">veggies</div>
        </a>
        <a href="5.html" class="m-steps__step js-step a-step
                                 ">
            <div class="a-step__effect">
                <svg class="a-step__effect-arrow a-icon">
                    <use xlink:href="/diet/img/sprite.svg#icon-icon-arrow"></use>
                </svg>
                <svg class="a-step__effect-arrow a-icon">
                    <use xlink:href="/diet/img/sprite.svg#icon-icon-arrow"></use>
                </svg>
            </div>
            <svg class="a-step__icon a-icon">
                <use xlink:href="/diet/img/sprite.svg#icon-step-5"></use>
            </svg>
            <div class="a-step__text">fruits</div>
        </a>
        <a href="6.html" class="m-steps__step js-step a-step
                                 ">
            <div class="a-step__effect">
                <svg class="a-step__effect-arrow a-icon">
                    <use xlink:href="/diet/img/sprite.svg#icon-icon-arrow"></use>
                </svg>
                <svg class="a-step__effect-arrow a-icon">
                    <use xlink:href="/diet/img/sprite.svg#icon-icon-arrow"></use>
                </svg>
            </div>
            <svg class="a-step__icon a-icon">
                <use xlink:href="/diet/img/sprite.svg#icon-step-6"></use>
            </svg>
            <div class="a-step__text">products</div>
        </a>
        <a href="7.html" class="m-steps__step js-step a-step
                                 ">
            <div class="a-step__effect">
                <svg class="a-step__effect-arrow a-icon">
                    <use xlink:href="/diet/img/sprite.svg#icon-icon-arrow"></use>
                </svg>
                <svg class="a-step__effect-arrow a-icon">
                    <use xlink:href="/diet/img/sprite.svg#icon-icon-arrow"></use>
                </svg>
            </div>
            <svg class="a-step__icon a-icon">
                <use xlink:href="/diet/img/sprite.svg#icon-step-7"></use>
            </svg>
            <div class="a-step__text">everyday</div>
        </a>
        <a href="8.html" class="m-steps__step js-step a-step
                                 ">
            <div class="a-step__effect">
                <svg class="a-step__effect-arrow a-icon">
                    <use xlink:href="/diet/img/sprite.svg#icon-icon-arrow"></use>
                </svg>
                <svg class="a-step__effect-arrow a-icon">
                    <use xlink:href="/diet/img/sprite.svg#icon-icon-arrow"></use>
                </svg>
            </div>
            <svg class="a-step__icon a-icon">
                <use xlink:href="/diet/img/sprite.svg#icon-step-8"></use>
            </svg>
            <div class="a-step__text">bad habits</div>
        </a>
        <a href="10.html" class="m-steps__step js-step a-step
                                 ">
            <div class="a-step__effect">
                <svg class="a-step__effect-arrow a-icon">
                    <use xlink:href="/diet/img/sprite.svg#icon-icon-arrow"></use>
                </svg>
                <svg class="a-step__effect-arrow a-icon">
                    <use xlink:href="/diet/img/sprite.svg#icon-icon-arrow"></use>
                </svg>
            </div>
            <svg class="a-step__icon a-icon">
                <use xlink:href="/diet/img/sprite.svg#icon-step-10"></use>
            </svg>
            <div class="a-step__text">Measurements</div>
        </a>
        <a href="11.html" class="m-steps__step js-step a-step
                                 ">
            <div class="a-step__effect">
                <svg class="a-step__effect-arrow a-icon">
                    <use xlink:href="/diet/img/sprite.svg#icon-icon-arrow"></use>
                </svg>
                <svg class="a-step__effect-arrow a-icon">
                    <use xlink:href="/diet/img/sprite.svg#icon-icon-arrow"></use>
                </svg>
            </div>
            <svg class="a-step__icon a-icon">
                <use xlink:href="/diet/img/sprite.svg#icon-logo"></use>
            </svg>
            <div class="a-step__text">Terms and Conditions</div>
        </a>
    </div>
</div>
</body>
</html>

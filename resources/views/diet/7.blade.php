@include('diet.template.head')

<body class="pb pb--big" data-page="steps">
<div id="header-image"
     style="background-image: url({{ asset('/diet/img/kF4SUJTR5ptv3EAeDZJvRYSontSyc8eLB1TX5qEL.png') }})"
     class="o-minintro--decoration o-minintro">
    <div class="o-minintro__title m-title">
        <svg class="m-title__icon a-icon">
            <use xlink:href="/diet/img/sprite.svg#icon-step-7"></use>
        </svg>
        <div class="m-title__title">DESCRIBE A TYPICAL DAY FOR YOU</div>
    </div>
    <div class="o-minintro__decoration"></div>
</div>
<div class="o-questions">
    <div class="o-questions__nav">
        <div class="o-questions__back m-back">
            <a href="6.html" class="m-back__step a-step--completed a-step js-step">
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
            <a href="6.html" class="m-back__bbutton a-bbutton">
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
        <a href="{{ url('diet7/AT_THE_OFFICE') }}">
            <div data-href="/diet7/AT_THE_OFFICE" class="m-test-buttons__button a-button--type-3 a-button js-radio dietAnswer" data-key="242" data-value="236" style="margin-bottom: 25px">
                <div class="a-button__text">AT THE OFFICE</div>
            </div>
        </a>
        <a href="{{ url('diet7/AT_THE_OFFICE,_BUT_I_GO_OUT_ON_A_REGULAR_BASIS') }}">
            <div data-href="/diet7/AT_THE_OFFICE,_BUT_I_GO_OUT_ON_A_REGULAR_BASIS" class="m-test-buttons__button a-button--type-3 a-button js-radio dietAnswer" data-key="242" data-value="237" style="margin-bottom: 25px">
                <div class="a-button__text">AT THE OFFICE, BUT I GO OUT ON A REGULAR BASIS</div>
            </div>
        </a>
        <a href="{{ url('diet7/I_SPEND_THE_BETTER_PART_OF_THE_DAY_ON_FOOT') }}">
            <div data-href="/diet7/I_SPEND_THE_BETTER_PART_OF_THE_DAY_ON_FOOT" class="m-test-buttons__button a-button--type-3 a-button js-radio dietAnswer" data-key="242" data-value="238" style="margin-bottom: 25px">
                <div class="a-button__text">I SPEND THE BETTER PART OF THE DAY ON FOOT</div>
            </div>
        </a>
        <a href="{{ url('diet7/MANUAL_LABOR') }}">
            <div data-href="/diet7/MANUAL_LABOR" class="m-test-buttons__button a-button--type-3 a-button js-radio dietAnswer" data-key="242" data-value="239" style="margin-bottom: 25px">
                <div class="a-button__text">MANUAL LABOR</div>
            </div>
        </a>
        <a href="{{ url('diet7/I_MOSTLY_STAY_AT_HOME') }}">
            <div data-href="/diet7/I_MOSTLY_STAY_AT_HOME" class="m-test-buttons__button a-button--type-3 a-button js-radio dietAnswer" data-key="242" data-value="240" style="margin-bottom: 25px">
                <div class="a-button__text">I MOSTLY STAY AT HOME</div>
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
            <div class="m-help__text">Your lifestyle has a significant impact on the amount of food included in your
                personalized meal program. If you can not find the exact answer choose the one that most closely
                corresponds to your daily life.
            </div>
        </div>
    </div>
</div>
<div class="m-steps-bg"></div>
<div class="m-steps">
    <div class="m-steps__step-line a-step-line">
        <div style="width: 60%" data-step="7" data-steps="10" class="a-step-line__frontline js-step-line">
            <div class="a-step-line__frontline-text js-step-text"><span
                        class="js-step-line-text">60</span><span>%</span></div>
        </div>
    </div>
    <div class="m-steps__steps js-steps">
        <a href="index.html" class="m-steps__step js-step a-step
                      a-step--completed
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
                      a-step--completed
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
                      a-step--completed
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
                      a-step--completed
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
                      a-step--completed
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

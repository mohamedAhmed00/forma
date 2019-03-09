@include('diet.template.head')

<body class="pb pb--big" data-page="steps">

<div id="header-image" style="background-image: url({{ asset('/diet/img/kF4SUJTR5ptv3EAeDZJvRYSontSyc8eLB1TX5qEL.png') }})" class="o-minintro--decoration o-minintro">
    <div class="o-minintro__title m-title">
        <svg class="m-title__icon a-icon">
            <use xlink:href="/diet/img/sprite.svg#icon-step-10"></use>
        </svg>
        <div class="m-title__title">MEASUREMENTS</div>
    </div>
    <div class="o-minintro__decoration"></div>
</div><div class="o-questions">
    <div class="o-questions__nav">
        <div class="o-questions__back m-back">
            <a href="8.html" class="m-back__step a-step--completed a-step js-step">
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
            <a href="8.html" class="m-back__bbutton a-bbutton">
                <svg class="a-bbutton__icon a-icon">
                    <use xlink:href="/diet/img/sprite.svg#icon-back"></use>
                </svg>
                <div class="a-bbutton__text">back</div>
            </a>
        </div>
        <div class="o-questions__help-btn js-help-btn a-bbutton" data-open="help" data-close="close"
             data-icon-open-url="//diet/img/sprite.svg#icon-help" data-icon-close-url="//diet/img/sprite.svg#icon-cancel">
            <svg class="a-bbutton__icon a-icon">
                <use xlink:href="/diet/img/sprite.svg#icon-help"></use>
            </svg>
            <div class="a-bbutton__text">help</div>
        </div>
    </div>
    <div class="o-questions__content">
        <form action="{{ url('diet9') }}" method="post" id="metric-form" class="o-questions__test-inputs m-test-inputs dietMove measurements">
            {{ csrf_field() }}
            <div class="m-test-inputs__tabby js-tabs">
                <div class="m-test-inputs__tabs">
                    <div data-tab="1" data-measurements="metric"
                         class="m-test-inputs__tab a-tab--active a-tab js-tab">
                        metric
                    </div>
                    <div data-tab="2" data-measurements="imperial"
                         class="m-test-inputs__tab  a-tab js-tab">
                        imperial
                    </div>
                </div>
                <div class="m-test-inputs__contents row">
                    <div data-tab="1" class="m-test-inputs__content js-tab-content">
                        <div class=" col-xs-12   m-test-inputs__col">
                            <div class="m-test-inputs__input a-input">
                                <input type="number" pattern="[0-9]*"
                                       placeholder="Age"
                                       name="product[]"
                                       class="a-input__input a-input__input--icon measurement-age"
                                       data-key="244.197"
                                       data-measuring_in="years"
                                       data-measurement="metric"
                                >
                                <svg class="a-input__icon a-icon">
                                    <use xlink:href="/diet/img/sprite.svg#icon-calendar-2"></use>
                                </svg>
                                <label class="a-input__label">years</label>
                            </div>
                        </div>
                        <div class=" col-xs-12   m-test-inputs__col">
                            <div class="m-test-inputs__input a-input">
                                <input type="number" pattern="[0-9]*"
                                       placeholder="Height (CM)"
                                       name="product[]"
                                       class="a-input__input a-input__input--icon "
                                       data-key="244.194"
                                       data-measuring_in="cm"
                                       data-measurement="metric"
                                >
                                <svg class="a-input__icon a-icon">
                                    <use xlink:href="/diet/img/sprite.svg#icon-lineman"></use>
                                </svg>
                                <label class="a-input__label">cm</label>
                            </div>
                        </div>
                        <div class=" col-xs-12   m-test-inputs__col">
                            <div class="m-test-inputs__input a-input">
                                <input type="number" pattern="[0-9]*"
                                       placeholder="Weight (KG)"
                                       name="product[]"
                                       class="a-input__input a-input__input--icon "
                                       data-key="244.192"
                                       data-measuring_in="kg"
                                       data-measurement="metric"
                                >
                                <svg class="a-input__icon a-icon">
                                    <use xlink:href="/diet/img/sprite.svg#icon-weighter-2"></use>
                                </svg>
                                <label class="a-input__label">kg</label>
                            </div>
                        </div>
                        <div class=" col-xs-12   m-test-inputs__col">
                            <div class="m-test-inputs__input a-input">
                                <input type="number" pattern="[0-9]*"
                                       placeholder="Target weight (KG)"
                                       name="product[]"
                                       class="a-input__input a-input__input--icon "
                                       data-key="244.193"
                                       data-measuring_in="kg"
                                       data-measurement="metric"
                                >
                                <svg class="a-input__icon a-icon">
                                    <use xlink:href="/diet/img/sprite.svg#icon-weighter-3"></use>
                                </svg>
                                <label class="a-input__label">kg</label>
                            </div>
                        </div>
                    </div>

                    <div data-tab="2" class="m-test-inputs__content js-tab-content">
                        <div class=" col-xs-12   m-test-inputs__col">
                            <div class="m-test-inputs__input a-input">
                                <input type="number" pattern="[0-9]*"
                                       placeholder="Age"
                                       name="product[]"
                                       class="a-input__input a-input__input--icon measurement-age"
                                       data-key="244.191"
                                       data-measuring_in="years"
                                       data-measurement="imperial"
                                >
                                <svg class="a-input__icon a-icon">
                                    <use xlink:href="/diet/img/sprite.svg#icon-calendar-2"></use>
                                </svg>
                                <label class="a-input__label">years</label>
                            </div>
                        </div>
                        <div class="col-xs-6   m-test-inputs__col">
                            <div class="m-test-inputs__input a-input">
                                <input type="number" pattern="[0-9]*"
                                       placeholder="ft"
                                       name="product[]"
                                       class="a-input__input a-input__input--icon "
                                       data-key="244.190"
                                       data-measuring_in="ft"
                                       data-measurement="imperial"
                                >
                                <svg class="a-input__icon a-icon">
                                    <use xlink:href="/diet/img/sprite.svg#icon-lineman"></use>
                                </svg>
                                <label class="a-input__label">ft</label>
                            </div>
                        </div>
                        <div class="col-xs-6   m-test-inputs__col">
                            <div class="m-test-inputs__input a-input">
                                <input type="number" pattern="[0-9]*"
                                       placeholder="inch"
                                       name="product[]"
                                       class="a-input__input a-input__input--icon "
                                       data-key="244.195"
                                       data-measuring_in="inch"
                                       data-measurement="imperial"
                                >
                                <svg class="a-input__icon a-icon">
                                    <use xlink:href="/diet/img/sprite.svg#icon-lineman"></use>
                                </svg>
                                <label class="a-input__label">inch</label>
                            </div>
                        </div>
                        <div class=" col-xs-12   m-test-inputs__col">
                            <div class="m-test-inputs__input a-input">
                                <input type="number" pattern="[0-9]*"
                                       placeholder="Weight (lb)"
                                       name="product[]"
                                       class="a-input__input a-input__input--icon "
                                       data-key="244.196"
                                       data-measuring_in="lb"
                                       data-measurement="imperial"
                                >
                                <svg class="a-input__icon a-icon">
                                    <use xlink:href="/diet/img/sprite.svg#icon-weighter-2"></use>
                                </svg>
                                <label class="a-input__label">lb</label>
                            </div>
                        </div>
                        <div class=" col-xs-12   m-test-inputs__col">
                            <div class="m-test-inputs__input a-input">
                                <input type="number" pattern="[0-9]*"
                                       placeholder="Target weight (lb)"
                                       name="product[]"
                                       class="a-input__input a-input__input--icon "
                                       data-key="244.198"
                                       data-measuring_in="lb"
                                       data-measurement="imperial"
                                >
                                <svg class="a-input__icon a-icon">
                                    <use xlink:href="/diet/img/sprite.svg#icon-weighter-3"></use>
                                </svg>
                                <label class="a-input__label">lb</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button id="measurements-button" class="m-test-inputs__button a-button a-button--input">Continue</button>
        </form>
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
            <div class="m-help__text">This meal program is individual and takes your body measurements into consideration.</div>
        </div>
    </div>
</div>
<div class="m-steps-bg"></div>
<div class="m-steps">
    <div class="m-steps__step-line a-step-line">
        <div style="width: 80%" data-step="9" data-steps="10" class="a-step-line__frontline js-step-line">
            <div class="a-step-line__frontline-text js-step-text"><span class="js-step-line-text">80</span><span>%</span></div>
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
                <use xlink:href="/diet/img/sprite.svg#icon-step-7"></use>
            </svg>
            <div class="a-step__text">everyday</div>
        </a>
        <a href="8.html" class="m-steps__step js-step a-step
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

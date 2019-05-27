@include('diet.template.head')
<body class="pb pb--big" data-page="steps">
<div id="header-image" style="background-image: url({{ asset('/diet/img/kF4SUJTR5ptv3EAeDZJvRYSontSyc8eLB1TX5qEL.png') }});height: 200px"
     class="o-minintro--decoration o-minintro">
    <div class="o-minintro__title m-title">
        <svg class="m-title__icon a-icon">
            <use xlink:href="/diet/img/sprite.svg#icon-step-3"></use>
        </svg>
        <div class="m-title__title">meat</div>
    </div>
    <div class="o-minintro__decoration"></div>
</div>
<div class="o-questions">
    <div class="o-questions__nav">
        <div class="o-questions__back m-back">
            <a href="2.html" class="m-back__step a-step--completed a-step js-step">
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
            <a href="2.html" class="m-back__bbutton a-bbutton">
                <svg class="a-bbutton__icon a-icon">
                    <use xlink:href="/diet/img/sprite.svg#icon-back"></use>
                </svg>
                <div class="a-bbutton__text">back</div>
            </a>
        </div>
        <div class="o-questions__help-btn js-help-btn a-bbutton" data-open="help" data-close="close"
             data-icon-open-url="/diet//img/sprite.svg#icon-help" data-icon-close-url="/img/sprite.svg#icon-cancel">
            <svg class="a-bbutton__icon a-icon">
                <use xlink:href="/diet/img/sprite.svg#icon-help"></use>
            </svg>
            <div class="a-bbutton__text">help</div>
        </div>
    </div>
    <div class="o-questions__content">
        <div data-href="/4" class="o-questions__test-checkboxes m-test-checkboxes dietMove">
            <div class="m-test-checkboxes__title">
                <svg class="a-icon include">
                    <use xlink:href="/diet/img/sprite.svg#icon-check"></use>
                </svg>
                Include / Exclude
                <svg class="a-icon exclude">
                    <use xlink:href="/diet/img/sprite.svg#icon-close-button"></use>
                </svg>
                <div class="m-title__subtitle">Please click to INCLUDE products you like:</div>
            </div>
            <form action="{{ url('diet3') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-sm-4 col-xs-6 m-test-checkboxes__bcheckbox-col">
                        <div class="m-test-checkboxes__bcheckbox a-bcheckbox">
                            <input type="checkbox" id="product519" name="product[]"
                                   class="a-bcheckbox__checkbox" data-key="238.519"
                                   data-value="1" value="chicken" />
                            <label for="product519" class="a-bcheckbox__label">
                                <div class="a-bcheckbox__status">
                                    <svg class="a-bcheckbox__status-on a-icon">
                                        <use xlink:href="/diet/img/sprite.svg#icon-check"></use>
                                    </svg>
                                    <svg class="a-bcheckbox__status-off a-icon">
                                        <use xlink:href="/diet/img/sprite.svg#icon-close-button"></use>
                                    </svg>
                                </div>
                                <svg class="a-bcheckbox__icon a-icon">
                                    <use xlink:href="/diet/img/sprite.svg#icon-chicken"></use>
                                </svg>
                                <div class="a-bcheckbox__text">chicken</div>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 m-test-checkboxes__bcheckbox-col">
                        <div class="m-test-checkboxes__bcheckbox a-bcheckbox">
                            <input type="checkbox" id="product520" name="product[]"
                                   class="a-bcheckbox__checkbox" data-key="238.520"
                                   data-value="1" value="beef"/>
                            <label for="product520" class="a-bcheckbox__label">
                                <div class="a-bcheckbox__status">
                                    <svg class="a-bcheckbox__status-on a-icon">
                                        <use xlink:href="/diet/img/sprite.svg#icon-check"></use>
                                    </svg>
                                    <svg class="a-bcheckbox__status-off a-icon">
                                        <use xlink:href="/diet/img/sprite.svg#icon-close-button"></use>
                                    </svg>
                                </div>
                                <svg class="a-bcheckbox__icon a-icon">
                                    <use xlink:href="/diet/img/sprite.svg#icon-beef"></use>
                                </svg>
                                <div class="a-bcheckbox__text">beef</div>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 m-test-checkboxes__bcheckbox-col">
                        <div class="m-test-checkboxes__bcheckbox a-bcheckbox">
                            <input type="checkbox" id="product521" name="product[]"
                                   class="a-bcheckbox__checkbox" data-key="238.521"
                                   data-value="1" value="fish"/>
                            <label for="product521" class="a-bcheckbox__label">
                                <div class="a-bcheckbox__status">
                                    <svg class="a-bcheckbox__status-on a-icon">
                                        <use xlink:href="/diet/img/sprite.svg#icon-check"></use>
                                    </svg>
                                    <svg class="a-bcheckbox__status-off a-icon">
                                        <use xlink:href="/diet/img/sprite.svg#icon-close-button"></use>
                                    </svg>
                                </div>
                                <svg class="a-bcheckbox__icon a-icon">
                                    <use xlink:href="/diet/img/sprite.svg#icon-fish"></use>
                                </svg>
                                <div class="a-bcheckbox__text">fish</div>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 m-test-checkboxes__bcheckbox-col">
                        <div class="m-test-checkboxes__bcheckbox a-bcheckbox">
                            <input type="checkbox" id="product522" name="product[]"
                                   class="a-bcheckbox__checkbox" data-key="238.522"
                                   data-value="1" value="turkey"/>
                            <label for="product522" class="a-bcheckbox__label">
                                <div class="a-bcheckbox__status">
                                    <svg class="a-bcheckbox__status-on a-icon">
                                        <use xlink:href="/diet/img/sprite.svg#icon-check"></use>
                                    </svg>
                                    <svg class="a-bcheckbox__status-off a-icon">
                                        <use xlink:href="/diet/img/sprite.svg#icon-close-button"></use>
                                    </svg>
                                </div>
                                <svg class="a-bcheckbox__icon a-icon">
                                    <use xlink:href="/diet/img/sprite.svg#icon-turkey"></use>
                                </svg>
                                <div class="a-bcheckbox__text">turkey</div>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 m-test-checkboxes__bcheckbox-col">
                        <div class="m-test-checkboxes__bcheckbox a-bcheckbox">
                            <input type="checkbox" id="product523" name="product[]"
                                   class="a-bcheckbox__checkbox" data-key="238.523"
                                   data-value="1" value="pork"/>
                            <label for="product523" class="a-bcheckbox__label">
                                <div class="a-bcheckbox__status">
                                    <svg class="a-bcheckbox__status-on a-icon">
                                        <use xlink:href="/diet/img/sprite.svg#icon-check"></use>
                                    </svg>
                                    <svg class="a-bcheckbox__status-off a-icon">
                                        <use xlink:href="/diet/img/sprite.svg#icon-close-button"></use>
                                    </svg>
                                </div>
                                <svg class="a-bcheckbox__icon a-icon">
                                    <use xlink:href="/diet/img/sprite.svg#icon-pork"></use>
                                </svg>
                                <div class="a-bcheckbox__text">pork</div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="m-test-checkboxes__continue">
                    <button class="m-test-checkboxes__button a-button a-button--input" type="submit">
                        Continue
                    </button>
                </div>
            </form>
        </div>
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
            <div class="m-help__text">We recommend you to exclude only the food that you are allergic to, should not eat
                due to a medical condition or a dietary restriction, or foods that you absolutely hate. The more
                products you include, the more diverse and effective your diet will be.
            </div>
        </div>
    </div>
</div>

<div class="m-steps-bg"></div>
<div class="m-steps">
    <div class="m-steps__step-line a-step-line">
        <div style="width: 20%" data-step="3" data-steps="10" class="a-step-line__frontline js-step-line">
            <div class="a-step-line__frontline-text js-step-text"><span
                        class="js-step-line-text">20</span><span>%</span></div>
        </div>
    </div>
    <div class="m-steps__steps js-steps">
        <a href="{{ url('diets') }}" class="m-steps__step js-step a-step a-step--completed ">
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
        <a href="{{ url('diets') }}" class="m-steps__step js-step a-step a-step--completed a-step--active">
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
            <div class="a-step__text">Gender</div>
        </a>
        <a href="3.html" class="m-steps__step js-step a-step">
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
        <a href="4.html" class="m-steps__step js-step a-step">
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
        <a href="5.html" class="m-steps__step js-step a-step">
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
        <a href="6.html" class="m-steps__step js-step a-step">
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
        <a href="7.html" class="m-steps__step js-step a-step">
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
        <a href="8.html" class="m-steps__step js-step a-step">
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
        <a href="10.html" class="m-steps__step js-step a-step">
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
        <a href="11.html" class="m-steps__step js-step a-step">
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

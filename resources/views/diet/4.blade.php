@include('diet.template.head')
<body class="pb pb--big" data-page="steps">
<div id="header-image" style="background-image: url({{ asset('/diet/img/kF4SUJTR5ptv3EAeDZJvRYSontSyc8eLB1TX5qEL.png') }});height: 150px" class="o-minintro--decoration o-minintro">
    <div class="o-minintro__title m-title">
        <svg class="m-title__icon a-icon">
        <use xlink:href="/diet/img/sprite.svg#icon-step-4"></use>
        </svg>
        <div class="m-title__title">veggies</div></div>
    <div class="o-minintro__decoration"></div>
</div>
<div class="o-questions">
    <div class="o-questions__nav">
    <div class="o-questions__back m-back">
        <a href="3.html" class="m-back__step a-step--completed a-step js-step">
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
        <a href="3.html" class="m-back__bbutton a-bbutton">
            <svg class="a-bbutton__icon a-icon">
            <use xlink:href="/diet/img/sprite.svg#icon-back"></use>
            </svg>
            <div class="a-bbutton__text">back</div>
        </a>
    </div>
        <div class="o-questions__help-btn js-help-btn a-bbutton" data-open="help" data-close="close"
         data-icon-open-url="/diet/img/sprite.svg#icon-help" data-icon-close-url="/img/sprite.svg#icon-cancel">
        <svg class="a-bbutton__icon a-icon">
        <use xlink:href="img/sprite.svg#icon-help"></use>
        </svg>
        <div class="a-bbutton__text">help</div>
    </div>
    </div>
    <div class="o-questions__content">
        <div data-href="/5" class="o-questions__test-checkboxes m-test-checkboxes dietMove">
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
            <form action="{{ url('diet4') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-sm-4 col-xs-6 m-test-checkboxes__bcheckbox-col">
                        <div class="m-test-checkboxes__bcheckbox a-bcheckbox">
                            <input type="checkbox" id="product524" name="product[]"
                                   class="a-bcheckbox__checkbox" data-key="239.524"
                                   data-value="1" value="potato"/>
                            <label for="product524" class="a-bcheckbox__label">
                                <div class="a-bcheckbox__status">
                                    <svg class="a-bcheckbox__status-on a-icon">
                                        <use xlink:href="/diet/img/sprite.svg#icon-check"></use>
                                    </svg>
                                    <svg class="a-bcheckbox__status-off a-icon">
                                        <use xlink:href="/diet/img/sprite.svg#icon-close-button"></use>
                                    </svg>
                                </div>
                                <svg class="a-bcheckbox__icon a-icon">
                                    <use xlink:href="/diet/img/sprite.svg#icon-potatoe"></use>
                                </svg>
                                <div class="a-bcheckbox__text">potato</div>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 m-test-checkboxes__bcheckbox-col">
                        <div class="m-test-checkboxes__bcheckbox a-bcheckbox">
                            <input type="checkbox" id="product525" name="product[]"
                                   class="a-bcheckbox__checkbox" data-key="239.525"
                                   data-value="1" value="rice"/>
                            <label for="product525" class="a-bcheckbox__label">
                                <div class="a-bcheckbox__status">
                                    <svg class="a-bcheckbox__status-on a-icon">
                                        <use xlink:href="/diet/img/sprite.svg#icon-check"></use>
                                    </svg>
                                    <svg class="a-bcheckbox__status-off a-icon">
                                        <use xlink:href="/diet/img/sprite.svg#icon-close-button"></use>
                                    </svg>
                                </div>
                                <svg class="a-bcheckbox__icon a-icon">
                                    <use xlink:href="/diet/img/sprite.svg#icon-rice"></use>
                                </svg>
                                <div class="a-bcheckbox__text">rice</div>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 m-test-checkboxes__bcheckbox-col">
                        <div class="m-test-checkboxes__bcheckbox a-bcheckbox">
                            <input type="checkbox" id="product526" name="product[]"
                                   class="a-bcheckbox__checkbox" data-key="239.526"
                                   data-value="1" value="black beans"/>
                            <label for="product526" class="a-bcheckbox__label">
                                <div class="a-bcheckbox__status">
                                    <svg class="a-bcheckbox__status-on a-icon">
                                        <use xlink:href="/diet/img/sprite.svg#icon-check"></use>
                                    </svg>
                                    <svg class="a-bcheckbox__status-off a-icon">
                                        <use xlink:href="/diet/img/sprite.svg#icon-close-button"></use>
                                    </svg>
                                </div>
                                <svg class="a-bcheckbox__icon a-icon">
                                    <use xlink:href="/diet/img/sprite.svg#icon-beans"></use>
                                </svg>
                                <div class="a-bcheckbox__text">black beans</div>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 m-test-checkboxes__bcheckbox-col">
                        <div class="m-test-checkboxes__bcheckbox a-bcheckbox">
                            <input type="checkbox" id="product527" name="product[]"
                                   class="a-bcheckbox__checkbox" data-key="239.527"
                                   data-value="1" value="rolled oats"/>
                            <label for="product527" class="a-bcheckbox__label">
                                <div class="a-bcheckbox__status">
                                    <svg class="a-bcheckbox__status-on a-icon">
                                        <use xlink:href="/diet/img/sprite.svg#icon-check"></use>
                                    </svg>
                                    <svg class="a-bcheckbox__status-off a-icon">
                                        <use xlink:href="/diet/img/sprite.svg#icon-close-button"></use>
                                    </svg>
                                </div>
                                <svg class="a-bcheckbox__icon a-icon">
                                    <use xlink:href="/diet/img/sprite.svg#icon-oats"></use>
                                </svg>
                                <div class="a-bcheckbox__text">rolled oats</div>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 m-test-checkboxes__bcheckbox-col">
                        <div class="m-test-checkboxes__bcheckbox a-bcheckbox">
                            <input type="checkbox" id="product528" name="product[]"
                                   class="a-bcheckbox__checkbox" data-key="239.528"
                                   data-value="1" value="quinoa"/>
                            <label for="product528" class="a-bcheckbox__label">
                                <div class="a-bcheckbox__status">
                                    <svg class="a-bcheckbox__status-on a-icon">
                                        <use xlink:href="/diet/img/sprite.svg#icon-check"></use>
                                    </svg>
                                    <svg class="a-bcheckbox__status-off a-icon">
                                        <use xlink:href="/diet/img/sprite.svg#icon-close-button"></use>
                                    </svg>
                                </div>
                                <svg class="a-bcheckbox__icon a-icon">
                                    <use xlink:href="/diet/img/sprite.svg#icon-quinoa"></use>
                                </svg>
                                <div class="a-bcheckbox__text">quinoa</div>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 m-test-checkboxes__bcheckbox-col">
                        <div class="m-test-checkboxes__bcheckbox a-bcheckbox">
                            <input type="checkbox" id="product529" name="product[]"
                                   class="a-bcheckbox__checkbox" data-key="239.529"
                                   data-value="1" value="sweet potato"/>
                            <label for="product529" class="a-bcheckbox__label">
                                <div class="a-bcheckbox__status">
                                    <svg class="a-bcheckbox__status-on a-icon">
                                        <use xlink:href="/diet/img/sprite.svg#icon-check"></use>
                                    </svg>
                                    <svg class="a-bcheckbox__status-off a-icon">
                                        <use xlink:href="/diet/img/sprite.svg#icon-close-button"></use>
                                    </svg>
                                </div>
                                <svg class="a-bcheckbox__icon a-icon">
                                    <use xlink:href="/diet/img/sprite.svg#icon-sweet-potatoe"></use>
                                </svg>
                                <div class="a-bcheckbox__text">sweet potato</div>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 m-test-checkboxes__bcheckbox-col">
                        <div class="m-test-checkboxes__bcheckbox a-bcheckbox">
                            <input type="checkbox" id="product530" name="product[]"
                                   class="a-bcheckbox__checkbox" data-key="239.530"
                                   data-value="1" value="cauliflower"/>
                            <label for="product530" class="a-bcheckbox__label">
                                <div class="a-bcheckbox__status">
                                    <svg class="a-bcheckbox__status-on a-icon">
                                        <use xlink:href="/diet/img/sprite.svg#icon-check"></use>
                                    </svg>
                                    <svg class="a-bcheckbox__status-off a-icon">
                                        <use xlink:href="/diet/img/sprite.svg#icon-close-button"></use>
                                    </svg>
                                </div>
                                <svg class="a-bcheckbox__icon a-icon">
                                    <use xlink:href="/diet/img/sprite.svg#icon-cauliflower"></use>
                                </svg>
                                <div class="a-bcheckbox__text">cauliflower</div>
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
        <div class="m-help__text">If you want to exclude a product, click on the &quot;EXCLUDE&quot; column. Note that if the product is not essential to a recipe, it may appear in it ‒ you can exclude or substitute that product. Also mind that it’s good to have at least one of the listed products included for a well-balanced diet.</div>
    </div>
</div>
</div>

<div class="m-steps-bg"></div>
<div class="m-steps">
    <div class="m-steps__step-line a-step-line">
        <div style="width: 30%" data-step="4" data-steps="10" class="a-step-line__frontline js-step-line">
            <div class="a-step-line__frontline-text js-step-text"><span class="js-step-line-text">30</span><span>%</span></div>
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
                <use xlink:href="/diet/img/sprite.svg#icon-step-2"></use>
            </svg>
            <div class="a-step__text">Physical activity</div>
        </a>
                <a href="3.html" class="m-steps__step js-step a-step
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

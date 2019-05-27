@include('diet.template.head')

<body class="pb pb--big" data-page="steps">
<div id="header-image" style="background-image: url({{ asset('/diet/img/kF4SUJTR5ptv3EAeDZJvRYSontSyc8eLB1TX5qEL.png') }})" class="o-minintro--decoration o-minintro">
    <div class="o-minintro__title m-title">
        <svg class="m-title__icon a-icon">
            <use xlink:href="/diet/img/sprite.svg#icon-step-8"></use>
        </svg>
        <div class="m-title__title">WHICH OF THE FOLLOWING IS TRUE FOR YOU</div>
    </div>
    <div class="o-minintro__decoration"></div>
</div><div class="o-questions">
    <div class="o-questions__nav">
        <div class="o-questions__back m-back">
            <a href="7.html" class="m-back__step a-step--completed a-step js-step">
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
            <a href="7.html" class="m-back__bbutton a-bbutton">
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
        <div data-href="/10" class="o-questions__test-checkboxes m-test-checkboxes dietMove">
            <form action="{{ url('diet8') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-xs-12 m-test-checkboxes__bcheckbox-col">
                        <div class="m-test-checkboxes__bcheckbox a-bcheckbox--no-icon a-bcheckbox">
                            <input type="checkbox" id="checkbox-106" name="product[]" class="a-bcheckbox__checkbox" data-key="243.106" data-value="1" value="I DO NOT GET ENOUGH SLEEP">
                            <label for="checkbox-106" class="a-bcheckbox__label">
                                <div class="a-bcheckbox__status">
                                    <svg class="a-bcheckbox__status-on a-icon">
                                        <use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="/diet/img/sprite.svg#icon-check"></use>
                                    </svg>
                                    <svg class="a-bcheckbox__status-off a-icon">
                                        <use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="/diet/img/sprite.svg#icon-close-button"></use>
                                    </svg>
                                </div>
                                <div class="a-bcheckbox__text">I DO NOT GET ENOUGH SLEEP</div>
                            </label>
                        </div>
                        <div class="m-test-checkboxes__bcheckbox a-bcheckbox--no-icon a-bcheckbox">
                            <input type="checkbox" id="checkbox-107" name="product[]" class="a-bcheckbox__checkbox" data-key="243.107" data-value="1" value="I EAT LATE AT NIGHT">
                            <label for="checkbox-107" class="a-bcheckbox__label">
                                <div class="a-bcheckbox__status">
                                    <svg class="a-bcheckbox__status-on a-icon">
                                        <use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="/diet/img/sprite.svg#icon-check"></use>
                                    </svg>
                                    <svg class="a-bcheckbox__status-off a-icon">
                                        <use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="/diet/img/sprite.svg#icon-close-button"></use>
                                    </svg>
                                </div>
                                <div class="a-bcheckbox__text">I EAT LATE AT NIGHT</div>
                            </label>
                        </div>
                        <div class="m-test-checkboxes__bcheckbox a-bcheckbox--no-icon a-bcheckbox">
                            <input type="checkbox" id="checkbox-108" name="product[]" class="a-bcheckbox__checkbox" data-key="243.108" data-value="1" value="I CONSUME A LOT OF SALT">
                            <label for="checkbox-108" class="a-bcheckbox__label">
                                <div class="a-bcheckbox__status">
                                    <svg class="a-bcheckbox__status-on a-icon">
                                        <use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="/diet/img/sprite.svg#icon-check"></use>
                                    </svg>
                                    <svg class="a-bcheckbox__status-off a-icon">
                                        <use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="/diet/img/sprite.svg#icon-close-button"></use>
                                    </svg>
                                </div>
                                <div class="a-bcheckbox__text">I CONSUME A LOT OF SALT</div>
                            </label>
                        </div>
                        <div class="m-test-checkboxes__bcheckbox a-bcheckbox--no-icon a-bcheckbox">
                            <input type="checkbox" id="checkbox-109" name="product[]" class="a-bcheckbox__checkbox" data-key="243.109" data-value="1" value="I CANNOT GIVE UP EATING SWEETS">
                            <label for="checkbox-109" class="a-bcheckbox__label">
                                <div class="a-bcheckbox__status">
                                    <svg class="a-bcheckbox__status-on a-icon">
                                        <use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="/diet/img/sprite.svg#icon-check"></use>
                                    </svg>
                                    <svg class="a-bcheckbox__status-off a-icon">
                                        <use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="/diet/img/sprite.svg#icon-close-button"></use>
                                    </svg>
                                </div>
                                <div class="a-bcheckbox__text">I CANNOT GIVE UP EATING SWEETS</div>
                            </label>
                        </div>
                        <div class="m-test-checkboxes__bcheckbox a-bcheckbox--no-icon a-bcheckbox">
                            <input type="checkbox" id="checkbox-110" name="product[]" class="a-bcheckbox__checkbox" data-key="243.110" data-value="1" value="I LOVE SOFT DRINKS">
                            <label for="checkbox-110" class="a-bcheckbox__label">
                                <div class="a-bcheckbox__status">
                                    <svg class="a-bcheckbox__status-on a-icon">
                                        <use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="/diet/img/sprite.svg#icon-check"></use>
                                    </svg>
                                    <svg class="a-bcheckbox__status-off a-icon">
                                        <use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="/diet/img/sprite.svg#icon-close-button"></use>
                                    </svg>
                                </div>
                                <div class="a-bcheckbox__text">I LOVE SOFT DRINKS</div>
                            </label>
                        </div>
                        <div class="m-test-checkboxes__bcheckbox a-bcheckbox--no-icon a-bcheckbox clearAll">
                            <input type="checkbox" id="checkbox-6" checked name="product[]" class="a-bcheckbox__checkbox" data-key="243.0" data-value="1" value="None of the above" />
                            <label for="checkbox-6" class="a-bcheckbox__label">
                                <div class="a-bcheckbox__status">
                                    <svg class="a-bcheckbox__status-on a-icon">
                                        <use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="/diet/img/sprite.svg#icon-check"></use>
                                    </svg>
                                    <svg class="a-bcheckbox__status-off a-icon">
                                        <use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="/diet/img/sprite.svg#icon-close-button"></use>
                                    </svg>
                                </div>
                                <div class="a-bcheckbox__text">None of the above</div>
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
            <div class="m-help__text">To make sure that you achieve your objective, it is necessary to take your harmful habits into consideration. This should help you follow your diet.</div>
        </div>
    </div>
</div>
<div class="m-steps-bg"></div>
<div class="m-steps">
    <div class="m-steps__step-line a-step-line">
        <div style="width: 70%" data-step="8" data-steps="10" class="a-step-line__frontline js-step-line">
            <div class="a-step-line__frontline-text js-step-text"><span class="js-step-line-text">70</span><span>%</span></div>
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

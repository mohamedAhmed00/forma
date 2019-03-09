@include('diet.template.head')
<body data-page="steps-finish" class="men-theme">
<div id="get-plan" class="o-get-plan js-secured-parent" style="background: url({{ asset('diet/img/kF4SUJTR5ptv3EAeDZJvRYSontSyc8eLB1TX5qEL.png') }});background-size: 100% 100%">
    <div class="woman-overlay"></div>
    <img src="" style="width: 50%;height: 100%; top: -41px;" class="o-get-plan__lazar-bg"
         alt="">
    <div class="o-get-plan__content container-fluid">
        <div class="o-get-plan__title title title--centered">GET YOUR PERSONALIZED 90-DAY<span
                    class="highlighted"> Meal Plan</span>!
        </div>

        <div class="o-get-plan__buy-plan m-buy-plan">
            <div class="m-buy-plan__top">
                <div class="m-buy-plan__item m-buy-plan__price">
                    <div class="m-buy-plan__price-new">
                        <div class="m-buy-plan__price-number highlighted" style="margin-bottom: 50px">300</div>
                        <div class="m-buy-plan__price-cent highlighted"></div>
                        <div class="m-buy-plan__price-cur">L.E</div>
                    </div>
                </div>
                <div class="m-buy-plan__item m-buy-plan__buttons js-buy-buttons">
                    <div class="alert-danger ">
                        <h2 id="error_payment" class="hidden">
                            Payment failed. Please try again.
                        </h2>
                    </div>

                    <a href="{{ url('delevery') }}"
                       class="m-buy-plan__button a-button--type-2 a-button paymentType" data-id="payment"
                       data-special="braintree">
                        <div class="a-button__text">Cash On Delivery</div>
                        <svg class="a-button__icon a-icon">
                            <use xlink:href="/diet/img/sprite.svg#icon-debit-card"></use>
                        </svg>
                    </a>
                    <a href="contact-info/paypal-old.html"
                       class="m-buy-plan__button a-button--type-2 a-button paymentType" data-id="payment"
                       data-special="paypal-old">
                        <div class="a-button__text">PAY VIA PAYPAL</div>
                        <svg class="a-button__icon a-icon">
                            <use xlink:href="/diet/img/sprite.svg#icon-paypal-logo"></use>
                        </svg>
                    </a>
                    {{--<a href="#get-plan" class="m-jumbotron__button js-goto-buy a-button">--}}
                        {{--<div class="a-button__text">GET IT NOW</div>--}}
                        {{--<svg class="a-button__icon a-icon">--}}
                            {{--<use xlink:href="/diet/img/sprite.svg#icon-download"></use>--}}
                        {{--</svg>--}}
                    {{--</a>--}}
                </div>
            </div>
            <div class="m-buy-plan__details">
                <div class="m-buy-plan__detail">ONE-TIME PAYMENT</div>
                <div class="m-buy-plan__detail">NO hidden fees, NO subscription</div>
                <div class="m-buy-plan__detail">LIFETIME ACCESS TO YOUR MEAL PLAN</div>
            </div>
        </div>
    </div>
</div>
<div class="o-adventages">
    <div class="woman-overlay"></div>
    <div class="container-fluid">
        <div class="o-adventages__items row">
            <div class="o-adventages__item col-lg-2 col-xs-4">
                <div class="o-adventages__adventage m-adventage">
                    <svg class="m-adventage__icon a-icon">
                        <use xlink:href="/diet/img/sprite.svg#icon-weighter"></use>
                    </svg>
                    <div class="m-adventage__text">Portion sizes have been calculated specifically for you</div>
                </div>
            </div>
            <div class="o-adventages__item col-lg-2 col-xs-4">
                <div class="o-adventages__adventage m-adventage">
                    <svg class="m-adventage__icon a-icon">
                        <use xlink:href="/diet/img/sprite.svg#icon-calendar"></use>
                    </svg>
                    <div class="m-adventage__text">The most popular 90-Day meal plan</div>
                </div>
            </div>
            <div class="o-adventages__item col-lg-2 col-xs-4">
                <div class="o-adventages__adventage m-adventage">
                    <svg class="m-adventage__icon a-icon">
                        <use xlink:href="/diet/img/sprite.svg#icon-cookbook"></use>
                    </svg>
                    <div class="m-adventage__text">Easy recipes for preparing the meals</div>
                </div>
            </div>
            <div class="o-adventages__item col-lg-2 col-xs-4">
                <div class="o-adventages__adventage m-adventage">
                    <svg class="m-adventage__icon a-icon">
                        <use xlink:href="/diet/img/sprite.svg#icon-timer"></use>
                    </svg>
                    <div class="m-adventage__text">You will get your personalized meal plan IMMEDIATELY</div>
                </div>
            </div>
            <div class="o-adventages__item col-lg-2 col-xs-4">
                <div class="o-adventages__adventage m-adventage">
                    <svg class="m-adventage__icon a-icon">
                        <use xlink:href="/diet/img/sprite.svg#icon-checked"></use>
                    </svg>
                    <div class="m-adventage__text">One-time payment, NO hidden fees, NO subscription</div>
                </div>
            </div>
            <div class="o-adventages__item col-lg-2 col-xs-4">
                <div class="o-adventages__adventage m-adventage">
                    <svg class="m-adventage__icon a-icon">
                        <use xlink:href="/diet/img/sprite.svg#icon-exchange"></use>
                    </svg>
                    <div class="m-adventage__text">Lifetime access to your personalized Meal Plan</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="o-profile-summary" style="padding: 0;">
    <div class="o-profile-summary__content container-fluid">
        <div class="o-profile-summary__head">
            <div class="o-profile-summary__title title">YOUR PROFILE SUMMARY</div>
            <div class="o-profile-summary__summary-info m-summary-info">
                <div class="m-summary-info__item">
                    <svg class="m-summary-info__icon a-icon">
                        <use xlink:href="/diet/img/sprite.svg#icon-calendar-2"></use>
                    </svg>
                    <div class="m-summary-info__content">
                        <div id="years" class="m-summary-info__title"></div>
                        <div id="years-text" class="m-summary-info__subtitle"></div>
                    </div>
                </div>
                <div class="m-summary-info__item">
                    <svg class="m-summary-info__icon a-icon">
                        <use xlink:href="/diet/img/sprite.svg#icon-lineman"></use>
                    </svg>
                    <div class="m-summary-info__content">
                        <div id="fp-height" class="m-summary-info__title"></div>
                        <div id="fp-height-text" class="m-summary-info__subtitle"></div>
                    </div>
                </div>
                <div id="last-measurement" class="m-summary-info__item">
                    <svg class="m-summary-info__icon a-icon">
                        <use xlink:href="/diet/img/sprite.svg#icon-weighter-2"></use>
                    </svg>
                    <div class="m-summary-info__content">
                        <div id="u-weight" class="m-summary-info__title"></div>
                        <div id="u-weight-text" class="m-summary-info__subtitle"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="o-profile-summary__items">
            <div class="o-profile-summary__item">
                <div class="o-profile-summary__summary m-summary js-summary">
                    <a href="#" data-open="help" data-close="close" data-icon-open-url="/diet/img/sprite.svg#icon-help"
                       data-icon-close-url="/diet/img/sprite.svg#icon-cancel" class="m-summary__help js-summary-help">
                        <svg class="m-summary__help-icon js-summary-help-icon a-icon">
                            <use xlink:href="/diet/img/sprite.svg#icon-help"></use>
                        </svg>
                        <div class="m-summary__help-text js-summary-help-text">help</div>
                    </a>
                    <div class="m-summary__content">
                        <div class="m-summary__title">BMI</div>
                        <div class="svg-graph-1">
                            <div class="svg-graph-1__info">
                                <div class="svg-graph-1__title js-svg-graph-1-title">
                                    <div id="bmi" class="svg-graph-1__title-number"></div>
                                    <div id="bmi-sup" class="svg-graph-1__title-sup"></div>
                                </div>
                                <div class="svg-graph-1__subtitle">Your BMI</div>
                            </div>
                            <svg id="graph-1" data-percent="50" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 358.8 281"
                                 style="enable-background:new 0 0 358.8 281" xml:space="preserve">
                            <style type="text/css">
                                .graph-1-st0 {
                                    fill: none;
                                    stroke: #393939;
                                    stroke-width: 12;
                                    stroke-linecap: round;
                                    stroke-miterlimit: 10;
                                }

                                .graph-1-st1 {
                                    fill: none;
                                    stroke: url(#colored_1_);
                                    stroke-width: 12;
                                    stroke-linecap: round;
                                    stroke-miterlimit: 10;
                                }

                                .graph-1-st2 {
                                    filter: url(#dropshadow);
                                }

                                .graph-1-st3 {
                                    fill: #FFFFFF;
                                }
                            </style>
                                <filter id="dropshadow" height="130%">
                                    <fegaussianblur in="SourceAlpha" stddeviation="0.5"></fegaussianblur>
                                    <feoffset dx="0" dy="0" result="offsetblur"></feoffset>
                                    <femerge>
                                        <femergenode></femergenode>
                                        <femergenode in="SourceGraphic"></femergenode>
                                    </femerge>
                                </filter>
                                <path id="gray"
                                      d="M43.3,252.4c-12-21.9-18.8-47-18.8-73.7c0-85,68.9-154,154-154s154,68.9,154,154      c0,26.6-6.7,51.6-18.6,73.4"
                                      class="graph-1-st0"></path>
                                <lineargradient id="colored_1_" gradientunits="userSpaceOnUse" x1="79.6219"
                                                y1="237.9198" x2="78.6219" y2="237.9198"
                                                gradienttransform="matrix(308 0 0 -227.7 -24191.0117 54312.9062)">
                                    <stop offset="0" style="stop-color:#C31400"></stop>
                                    <stop offset="0.25" style="stop-color:#F3AD04"></stop>
                                    <stop offset="0.5" style="stop-color:#739B28"></stop>
                                    <stop offset="0.75" style="stop-color:#369569"></stop>
                                    <stop offset="1" style="stop-color:#0189CA"></stop>
                                </lineargradient>
                                <path id="colored"
                                      d="M43.3,252.4c-12-21.9-18.8-47-18.8-73.7c0-85,68.9-154,154-154s154,68.9,154,154      c0,26.6-6.7,51.6-18.6,73.4"
                                      class="graph-1-st1"></path>
                                <g class="graph-1-st2">
                                    <circle cx="40" cy="250" r="15" class="graph-1-st3 circle"></circle>
                                </g>
                            </svg>
                            <script>document.getElementById('graph-1').setAttribute('data-percent', getAnswersData('bmi') * 2.5);</script>
                        </div>
                        <div class="m-summary__subtitle"><span>Your weight is : </span>
                            <span id="bmi-text-1" class="js-svg-graph-1-title hidden-bmi">Seriously low weight</span>
                            <span id="bmi-text-2" class="js-svg-graph-1-title hidden-bmi">Underweight</span>
                            <span id="bmi-text-3" class="js-svg-graph-1-title hidden-bmi">Normal</span>
                            <span id="bmi-text-4" class="js-svg-graph-1-title hidden-bmi">Overweight</span>
                            <span id="bmi-text-5" class="js-svg-graph-1-title hidden-bmi">Obesity type  |</span>
                            <span id="bmi-text-6" class="js-svg-graph-1-title hidden-bmi">Obesity type  ||</span>
                            <span id="bmi-text-7" class="js-svg-graph-1-title hidden-bmi">Obesity type  |||</span>
                        </div>
                    </div>
                    <div class="m-summary__help-content js-summary-content">
                        <div class="m-summary__help-content-inner">
                            <svg class="m-summary__help-content-icon a-icon">
                                <use xlink:href="/diet/img/sprite.svg#icon-help"></use>
                            </svg>
                            <div class="m-summary__help-content-text">Body Mass Index (BMI) is an established measure
                                utilized by physicians and health experts to determine weight status (i.e. underweight,
                                overweight or within a healthy weight range).
                            </div>
                            <ul class="m-summary__help-content-list">
                                <li></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="o-profile-summary__item">
                <div class="o-profile-summary__summary m-summary js-summary">
                    <a href="#" data-open="help" data-close="close" data-icon-open-url="//diet/img/sprite.svg#icon-help"
                       data-icon-close-url="//diet/img/sprite.svg#icon-cancel" class="m-summary__help js-summary-help">
                        <svg class="m-summary__help-icon js-summary-help-icon a-icon">
                            <use xlink:href="/diet/img/sprite.svg#icon-help"></use>
                        </svg>
                        <div class="m-summary__help-text js-summary-help-text">Help</div>
                    </a>
                    <div class="m-summary__content">
                        <div class="m-summary__title">Metabolic Age</div>
                        <div class="svg-graph-3">
                            <div class="svg-graph-3__ages">
                                <div class="svg-graph-3__age">18-30</div>
                                <div class="svg-graph-3__age">31-45</div>
                                <div class="svg-graph-3__age">46-64</div>
                                <div class="svg-graph-3__age">65+</div>
                            </div>
                            <svg id="graph-3" data-age="" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 401.9 193.2"
                                 style="enable-background:new 0 0 401.9 193.2" xml:space="preserve">
                            <script>document.getElementById('graph-3').setAttribute('data-age', getAnswersData('metabolic_age'));</script>
                                <style type="text/css">.graph-3-man {
                                        fill: #393939;
                                    }</style>
                                <path d="M356.9,31.2c-6,0-10.9-4.8-10.9-10.7s4.9-10.7,10.9-10.7s10.9,4.8,10.9,10.7S362.9,31.2,356.9,31.2L356.9,31.2z      "
                                      class="graph-3-man graph-3-man4"></path>
                                <path d="M400.5,157c-0.8,0-1.4-0.6-1.4-1.4V96c0-1.5-1.1-2.2-2.2-2.2s-2.2,0.8-2.2,2.2v0.4c0,0.7-0.6,1.3-1.4,1.3      s-1.4-0.6-1.4-1.3V96l0,0c0-3.2,2.5-4.9,5-4.9l0,0l0,0l0,0l0,0c2.5,0.1,5,1.7,5,4.9l0,0v59.7C401.8,156.4,401.2,157,400.5,157      L400.5,157z"
                                      class="graph-3-man graph-3-man4"></path>
                                <path d="M399.6,89.2c-2.4,2.3-6.4,2.1-9.1-0.5L376,74.6l0,0V51.8h-2.2v97c0,4.5-3.4,8.2-7.6,8.2s-7.6-3.7-7.6-8.2V99.2      h-2l0,0h-1.5v26.1v23.5c0,4.5-3.4,8.2-7.6,8.2s-7.6-3.7-7.6-8.2V91.9c0-0.1,0-0.1,0-0.2V51.9h-2.2v20.6l0,0v15.9      c0,3.6-2.7,6.6-6.1,6.6s-6.1-2.9-6.1-6.6V68.5l0,0V46.9c0-0.5,0.1-1,0.2-1.5c1-6.8,6.6-12.1,13.6-12.8h0.5h8.6      c1.1,3.5,4.4,6.1,8.2,6.1c3.9,0,7.2-2.6,8.2-6.1h8.8h0.9c6.5,0.8,11.6,5.7,12.5,12c0.1,0.5,0.2,1,0.2,1.5v23l11.6,11.3      C401.8,82.9,402,86.8,399.6,89.2L399.6,89.2z"
                                      class="graph-3-man graph-3-man4"></path>
                                <path d="M253,22c-6.2,0-11.2-4.9-11.2-11s5-11,11.2-11c6.2,0,11.2,4.9,11.2,11S259.2,22,253,22L253,22z"
                                      class="graph-3-man graph-3-man3"></path>
                                <path d="M283,38c-1-6.4-6.4-11.4-13.1-11.8c0,0-1.1,0-1.3,0h-31.2c-0.2,0-1.3,0-1.3,0C229.4,26.6,224,31.6,223,38      c-0.1,0.5-0.2,0.9-0.2,1.4v28.2v18.5c0,3.3,2.5,6.1,5.6,6.1s5.6-2.7,5.6-6.1v-7.2V43.7h2.6v36.9v14.9v53.6c0,4.4,3.3,7.9,7.3,7.9      s7.3-3.5,7.3-7.9V95.5h1.9l0,0h1.4v53.6c0,4.4,3.3,7.9,7.3,7.9s7.3-3.5,7.3-7.9V94.2v-5.7c0-0.1,0-0.1,0-0.2V43.7l0,0l0,0h2.7V86      c0,3.3,2.5,6.1,5.6,6.1s5.6-2.7,5.6-6.1V39.4C283.1,38.9,283.1,38.4,283,38z M253,27.3c1.2,0,2.1,1,2.1,2.1c0,1.2-1,2.1-2.1,2.1      c-1.2,0-2.1-1-2.1-2.1C250.9,28.2,251.8,27.3,253,27.3z M256.3,58.4l-3.3,3.7l-3.3-3.7l0,0l0,0l2.9-25.4h0.9L256.3,58.4L256.3,58.4      L256.3,58.4z"
                                      class="graph-3-man graph-3-man3"></path>
                                <path d="M275.8,97.2v-2.1c0-0.5,0.4-1,1-1h1.4c0.5,0,1,0.4,1,1v2.1H275.8L275.8,97.2z"
                                      class="graph-3-man graph-3-man3"></path>
                                <path d="M273.9,100.8L273.9,100.8L273.9,100.8L273.9,100.8L273.9,100.8z"
                                      class="graph-3-man graph-3-man3"></path>
                                <path d="M284.4,134.2l-2-0.8l-2,0.8h-1l-2-0.8l-2,0.8h-1v-32l0,0c0.2-1.8,1.7-3.2,3.6-3.2s3.4,1.4,3.6,3.3l3.9,32h-1.1      V134.2z"
                                      class="graph-3-man graph-3-man3"></path>
                                <path d="M150.5,22c-6.2,0-11.2-4.9-11.2-11s5-11,11.2-11s11.2,4.9,11.2,11S156.7,22,150.5,22L150.5,22z"
                                      class="graph-3-man graph-3-man2"></path>
                                <path d="M175,92.1c-3.1,0-5.6-2.7-5.6-6.1V43.7h-2.7l0,0l0,0v44.6c0,0.1,0,0.1,0,0.2v5.7v54.9c0,4.4-3.3,7.9-7.3,7.9      s-7.3-3.5-7.3-7.9V95.5h-1.4l0,0h-1.9v53.6c0,4.4-3.3,7.9-7.3,7.9s-7.3-3.5-7.3-7.9V95.5V80.6V43.7h-2.6v35.1V86      c0,3.3-2.5,6.1-5.6,6.1c-3.1,0-5.6-2.7-5.6-6.1V67.5V39.4c0-0.5,0.1-1,0.2-1.4c1-6.4,6.4-11.4,13.1-11.8c0,0,1.1,0,1.3,0h31.2      c0.2,0,1.3,0,1.3,0c6.7,0.4,12.1,5.4,13.1,11.8c0.1,0.5,0.2,0.9,0.2,1.4V86C180.6,89.4,178.1,92.1,175,92.1L175,92.1z"
                                      class="graph-3-man graph-3-man2"></path>
                                <path d="M55.6,22c-6.2,0-11.2-4.9-11.2-11s5-11,11.2-11s11.2,4.9,11.2,11C66.8,17.1,61.8,22,55.6,22L55.6,22z"
                                      class="graph-3-man graph-3-man1"></path>
                                <path d="M107.1,13.5l-5.1,5L71.9,48.1v40.2c0,0.1,0,0.1,0,0.2v5.7v54.9c0,4.4-3.3,7.9-7.3,7.9s-7.3-3.5-7.3-7.9V95.5      h-1.4l0,0H54v53.6c0,4.4-3.3,7.9-7.3,7.9s-7.3-3.5-7.3-7.9V95.5V80.6V50.5L7,18.5l-5.1-5c-2.4-2.3-2.6-6-0.4-8.3      C3.7,3,7.4,3.1,9.8,5.4L23,18.3l16.6,16.3v-0.2h0.3c2.1-4.6,6.6-8,12-8.3c0,0,1.1,0,1.3,0h5.2c0.2,0,1.3,0,1.3,0      c4.9,0.3,9.2,3.1,11.4,7.1l15.1-14.9L99.4,5.4c2.4-2.3,6.1-2.4,8.3-0.2C109.7,7.5,109.5,11.2,107.1,13.5L107.1,13.5z"
                                      class="graph-3-man graph-3-man1"></path>
                            </svg>
                        </div>
                        <div class="m-summary__subtitle"><span>Your Metabolic Age : </span><span id="metabolic-age"
                                                                                                 class="highlighted highlighted--lime"></span>
                        </div>
                    </div>
                    <div class="m-summary__help-content js-summary-content">
                        <div class="m-summary__help-content-inner">
                            <svg class="m-summary__help-content-icon a-icon">
                                <use xlink:href="/diet/img/sprite.svg#icon-help"></use>
                            </svg>
                            <div class="m-summary__help-content-text"></div>
                            <ul class="m-summary__help-content-list">
                                <li>The metabolic age is an indicator for the age of your body. If it is higher than
                                    your actual age, your metabolism is slower than it should be. In this case you need
                                    to go on a calorie-restricting meal plan and increase your level of physical
                                    activity in order to increase your physiological processes. If your metabolic age is
                                    lower or equal to your actual age, your body feels well and you should keep up the
                                    good work.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="o-profile-summary__item">
                <div class="o-profile-summary__summary m-summary js-summary">
                    <a href="#" data-open="help" data-close="close" data-icon-open-url="//diet/img/sprite.svg#icon-help"
                       data-icon-close-url="//diet/img/sprite.svg#icon-cancel" class="m-summary__help js-summary-help">
                        <svg class="m-summary__help-icon js-summary-help-icon a-icon">
                            <use xlink:href="/diet/img/sprite.svg#icon-help"></use>
                        </svg>
                        <div class="m-summary__help-text js-summary-help-text">Help</div>
                    </a>
                    <div class="m-summary__content">
                        <div class="m-summary__title">Calories</div>
                        <div class="svg-graph-2">
                            <div class="svg-graph-2__from js-svg-graph-2-from">
                                <div class="svg-graph-2__from-title">
                                    <script>document.write(getAnswersData('calories_from'));</script>
                                </div>
                                <div class="svg-graph-2__from-subtitle">Cal</div>
                            </div>
                            <div class="svg-graph-2__to js-svg-graph-2-to">
                                <div class="svg-graph-2__to-title">
                                    <script>document.write(getAnswersData('calories_to'));</script>
                                </div>
                                <div class="svg-graph-2__to-subtitle">Cal</div>
                            </div>
                            <div class="svg-graph-2__maxmin">
                                <div class="svg-graph-2__min">1000 Cal</div>
                                <div class="svg-graph-2__max">5000 Cal</div>
                            </div>
                            <svg id="graph-2" data-from="10" data-to="50" version="1.1"
                                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                 y="0px" viewbox="0 0 467.2 118.1" style="enable-background:new 0 0 467.2 118.1"
                                 xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #393939;
                                }

                                .line {
                                    fill: #FDCA00;
                                }

                                .st2 {
                                    opacity: 0.5;
                                    fill: #FDCA00;
                                }

                                .gradient {
                                    opacity: 0.3;
                                    fill: url(#grad);
                                }

                                .st4 {
                                    fill: #6E6E6E;
                                }

                                .dots-1,
                                .dots-2 {
                                    fill: #FDCA00;
                                }
                            </style>
                                <path d="M167.2.9h1v4h-1V36.9 M298.2,42.9h1v4h-1V42.9 M298.2,48.9h1v4h-1V48.9 M298.2,54.9h1v4h-1V54.9 M298.2,60.9      h1v4h-1V60.9 M298.2,66.9h1v4h-1V66.9 M298.2,72.9h1v4h-1V72.9 M298.2,78.9h1v4h-1V78.9 M298.2,84.9h1v3h-1V84.9"
                                      class="dots-1"></path>
                                <path d="M167.2,36.9h1v4h-1V36.9 M167.2,42.9h1v4h-1V42.9 M167.2,48.9h1v4h-1V48.9 M167.2,54.9h1v4h-1V54.9 M167.2,60.9      h1v4h-1V60.9 M167.2,66.9h1v4h-1V66.9 M167.2,72.9h1v4h-1V72.9 M167.2,78.9h1v4h-1V78.9 M167.2,84.9h1v3h-1V84.9"
                                      class="dots-2"></path>
                                <polygon points="0,82.9 467.2,82.9 467.2,92.9 0,92.9 " class="st0"></polygon>
                                <polygon points="167.2,82.9 299.2,82.9 299.2,92.9 167.2,92.9 " class="line"></polygon>
                                <lineargradient id="grad" x1="0" x2="0" y1="0" y2="1">
                                    <stop offset="0%" stop-color="#FDCA00" stop-opacity="0"></stop>
                                    <stop offset="100%" stop-color="#FDCA00"></stop>
                                </lineargradient>
                                <polygon points="167.2,10.9 299.2,10.9 299.2,87.9 167.2,87.9 "
                                         class="gradient"></polygon>
                            </svg>
                        </div>
                        <div class="m-summary__subtitle"><span>Recommended Calories : </span><span
                                    class="highlighted highlighted--gold"><script>document.write(getAnswersData('calories'));</script> Cal </span>
                        </div>
                    </div>
                    <div class="m-summary__help-content js-summary-content">
                        <div class="m-summary__help-content-inner">
                            <svg class="m-summary__help-content-icon a-icon">
                                <use xlink:href="/diet/img/sprite.svg#icon-help"></use>
                            </svg>
                            <div class="m-summary__help-content-text">Calories are within a recommended range of +/-100
                                as it is practically impossible to track them exactly.
                            </div>
                            <ul class="m-summary__help-content-list">
                                <li>While following a calorie-restricted meal plan, the calories you consume must not
                                    fall below this value. Your daily calories are calculated based on your target
                                    weight, your current measurements, your physical activity and your lifestyle.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="o-profile-summary__item">
                <div class="o-profile-summary__summary m-summary js-summary">
                    <a href="#" data-open="help" data-close="close" data-icon-open-url="//diet/img/sprite.svg#icon-help"
                       data-icon-close-url="//diet/img/sprite.svg#icon-cancel" class="m-summary__help js-summary-help">
                        <svg class="m-summary__help-icon js-summary-help-icon a-icon">
                            <use xlink:href="/diet/img/sprite.svg#icon-help"></use>
                        </svg>
                        <div class="m-summary__help-text js-summary-help-text">Help</div>
                    </a>
                    <div class="m-summary__content">
                        <div class="m-summary__title">Water</div>
                        <div class="svg-graph-4">
                            <div class="svg-graph-4__liters">
                                <div class="svg-graph-4__liters-from">0L</div>
                                <div class="svg-graph-4__liters-to">5L</div>
                            </div>
                            <div class="svg-graph-4__water">
                                <script>document.write(toDecimal(getAnswersData('recommended_water')));</script>
                                L
                            </div>
                            <svg id="graph-4" data-percent="50" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 157 215"
                                 style="enable-background:new 0 0 157 215" xml:space="preserve">
                            <style type="text/css">
                                .dash-line {
                                    fill: #393939;
                                }

                                .back-svg {
                                    clip-path: url(#clip-svg-2);
                                    fill: #393939;
                                }

                                .front-svg {
                                    clip-path: url(#clip-svg-2);
                                    fill: #479AFF;
                                }
                            </style>
                                <path d="M75.8,214v1h-4v-1H75.8 M69.8,214v1h-4v-1H69.8 M63.8,214v1h-4v-1H63.8 M57.8,214v1h-4v-1H57.8 M51.8,214v1h-4      v-1H51.8 M45.8,214v1h-4v-1H45.8 M39.8,214v1h-4v-1H39.8 M33.8,214v1h-4v-1H33.8 M27.8,214v1h-4v-1H27.8 M21.8,214v1h-4v-1H21.8"
                                      class="dash-line"></path>
                                <path d="M75.8,0v1h-4V0H75.8 M69.8,0v1h-4V0H69.8 M63.8,0v1h-4V0H63.8 M57.8,0v1h-4V0H57.8 M51.8,0v1h-4V0H51.8 M45.8,0      v1h-4V0H45.8 M39.8,0v1h-4V0H39.8 M33.8,0v1h-4V0H33.8 M27.8,0v1h-4V0H27.8 M21.8,0v1h-4V0H21.8"
                                      class="dash-line"></path>
                                <g>
                                    <defs>
                                        <path id="clip-svg-1"
                                              d="M78.3,0C78.2,0,78,0,77.9,0c-1.2,0.1-2.4,0.8-3.1,1.7c0,0-18.5,21.9-37.1,49.9C19.1,79.5,0,113,0,139.2          C0,181.3,35.3,215,78.5,215c43.2,0,78.5-33.7,78.5-75.8c0-26.3-19.1-59.7-37.6-87.7C100.8,23.7,82.3,1.7,82.3,1.7          C81.3,0.6,79.8-0.1,78.3,0L78.3,0L78.3,0z"></path>
                                    </defs>
                                    <clippath id="clip-svg-2">
                                        <use xlink:href="#clip-svg-1" style="overflow:visible"></use>
                                    </clippath>
                                    <rect x="-8.8" y="0" width="172" height="215" class="back-svg"></rect>
                                    <rect x="-8.8" y="138" width="172" height="215" class="front-svg"></rect>
                                </g>
                            </svg>
                            <script>document.getElementById('graph-4').setAttribute('data-percent', Math.min(100, getAnswersData('recommended_water') * 20));</script>
                        </div>
                        <div class="m-summary__subtitle"><span>Recommended Water : </span><span><script>document.write(toDecimal(getAnswersData('recommended_water')));</script> L</span>
                        </div>
                    </div>
                    <div class="m-summary__help-content js-summary-content">
                        <div class="m-summary__help-content-inner">
                            <svg class="m-summary__help-content-icon a-icon">
                                <use xlink:href="/diet/img/sprite.svg#icon-help"></use>
                            </svg>
                            <div class="m-summary__help-content-text">Recommended water intake per day</div>
                            <ul class="m-summary__help-content-list">
                                <li>It may look excessive to you but it has been scientifically proven that water
                                    consumption should be this quantity.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="o-profile-summary__item hidden">
                <div class="o-profile-summary__summary m-summary js-summary">
                    <a href="#" data-open="help" data-close="close" data-icon-open-url="//diet/img/sprite.svg#icon-help"
                       data-icon-close-url="//diet/img/sprite.svg#icon-cancel" class="m-summary__help js-summary-help">
                        <svg class="m-summary__help-icon js-summary-help-icon a-icon">
                            <use xlink:href="/diet/img/sprite.svg#icon-help"></use>
                        </svg>
                        <div class="m-summary__help-text js-summary-help-text">Help</div>
                    </a>
                    <div class="m-summary__content">
                        <div class="m-summary__title">Ideal Weight</div>
                        <div class="svg-graph-5">
                            <div class="svg-graph-5__content">
                                <div class="svg-graph-5__title highlighted--lime">
                                    <script>document.write(getAnswersData('ideal_weight_from'));</script>
                                    -
                                    <script>document.write(getAnswersData('ideal_weight_to'));</script>
                                </div>
                                <div class="svg-graph-5__subtitle">Weight Range</div>
                            </div>
                            <svg id="graph-5" data-from="0" data-to="100" version="1.1"
                                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                 y="0px" viewbox="0 0 321.5 241" style="enable-background:new 0 0 321.5 241"
                                 xml:space="preserve">
                            <style type="text/css">
                                #colored-graph-5 {
                                    fill: none;
                                    stroke: #7ceb10;
                                    stroke-width: 12;
                                    stroke-linecap: round;
                                    stroke-miterlimit: 1;
                                    stroke-dashoffset: 1000;
                                    stroke-dasharray: 250
                                }

                                .graph-5-st0 {
                                    fill: none;
                                    stroke: #393939;
                                    stroke-width: 12;
                                    stroke-linecap: round;
                                    stroke-miterlimit: 10;
                                }
                            </style>
                                <path d="M25.5,235.1c-12-21.9-18.8-47-18.8-73.7c0-85,68.9-154,154-154s154,68.9,154,154      c0,26.6-6.7,51.6-18.6,73.4"
                                      class="graph-5-st0"></path>
                                <path id="colored-graph-5"
                                      d="M25.5,235.1c-12-21.9-18.8-47-18.8-73.7c0-85,68.9-154,154-154s154,68.9,154,154      c0,26.6-6.7,51.6-18.6,73.4"
                                      class="graph-5-st0"></path>
                            </svg>
                            <script>
                                document.getElementById('graph-5').setAttribute('data-from', getAnswersData('ideal_weight_from'));
                                document.getElementById('graph-5').setAttribute('data-to', getAnswersData('ideal_weight_to'));
                            </script>
                        </div>
                        <div class="m-summary__subtitle">
                            <span>Recommended Weight:</span><br/>
                            <span class="highlighted highlighted--lime">From
                                <script>document.write(getAnswersData('ideal_weight_from'));</script>
                                To
                                <script>document.write(getAnswersData('ideal_weight_to'));</script>
                            </span>
                            <script>
                                var measurements = getAnswers().measurements,
                                    measurement = '';

                                if (measurements) {
                                    var measurement = measurements[Object.keys(measurements)[0]].name;

                                    if (measurement === 'imperial') {
                                        document.write("Pounds");
                                    } else {
                                        document.write("Kilograms");
                                    }
                                }
                            </script>
                        </div>
                    </div>
                    <div class="m-summary__help-content js-summary-content">
                        <div class="m-summary__help-content-inner">
                            <svg class="m-summary__help-content-icon a-icon">
                                <use xlink:href="/diet/img/sprite.svg#icon-help"></use>
                            </svg>
                            <div class="m-summary__help-content-text">Ideal weight</div>
                            <ul class="m-summary__help-content-list">
                                <li>This is the weight that other people of the same height and at the same age consider
                                    perfect.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="o-profile-summary__item" style="padding: 0 10px 0 0">
                <div class="o-profile-summary__summary m-summary js-summary">
                    <a href="#" data-open="help" data-close="close" data-icon-open-url="//diet/img/sprite.svg#icon-help"
                       data-icon-close-url="//diet/img/sprite.svg#icon-cancel" class="m-summary__help js-summary-help">
                        <svg class="m-summary__help-icon js-summary-help-icon a-icon">
                            <use xlink:href="/diet/img/sprite.svg#icon-help"></use>
                        </svg>
                        <div class="m-summary__help-text js-summary-help-text">Help</div>
                    </a>
                    <div class="m-summary__content">
                        <div class="m-summary__title">Achievable Weight</div>
                        <div class="m-summary__image">
                            <div class="m-summary__image-title highlighted">
                                <script>document.write(toDecimal(getAnswersData('achievable_weight')));</script>
                            </div>
                            <div class="m-summary__image-subtitle">
                                <script>
                                    if (measurement === 'imperial') {
                                        document.write("Pounds");
                                    } else {
                                        document.write("Kilograms");
                                    }
                                </script>
                            </div>
                        </div>
                        <div class="m-summary__subtitle">
                            <span>Achievable weight for the FIRST 30 DAYS of your 90-DAY Meal Plan:</span><br/>
                            <span class="highlighted highlighted--lime">
                                <script>document.write(toDecimal(getAnswersData('achievable_weight')));</script>
                            </span>
                            <script>
                                if (measurement === 'imperial') {
                                    document.write("Pounds");
                                } else {
                                    document.write("Kilograms");
                                }
                            </script>
                        </div>
                    </div>
                    <div class="m-summary__help-content js-summary-content">
                        <div class="m-summary__help-content-inner">
                            <svg class="m-summary__help-content-icon a-icon">
                                <use xlink:href="/diet/img/sprite.svg#icon-help"></use>
                            </svg>
                            <div class="m-summary__help-content-text">Achievable weight</div>
                            <ul class="m-summary__help-content-list">
                                <li>The weight you can achieve for the first 30 days of your 90-DAY Meal Plan without
                                    putting your health at risk. The results may vary.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

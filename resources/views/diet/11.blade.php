@include('diet.template.head')
<body data-page="steps-finish" class="men-theme">
<div id="header-image" style="background-image: url({{ asset('/diet/img/kF4SUJTR5ptv3EAeDZJvRYSontSyc8eLB1TX5qEL.png') }})" class="o-minintro--decoration o-minintro">
    <div class="o-minintro__title m-title">
        <svg class="m-title__icon a-icon">
            <use xlink:href="/diet/img/sprite.svg#icon-logo"></use>
        </svg>
        <div class="m-title__title">PROCESSING MEAL PLAN</div>
    </div>
    <div class="o-minintro__decoration"></div>
</div><div class="o-questions">
    <div class="o-questions__nav">
        <div class="o-questions__back m-back">
            <a href="10.html" class="m-back__step a-step--completed a-step js-step">
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
            <a href="10.html" class="m-back__bbutton a-bbutton">
                <svg class="a-bbutton__icon a-icon">
                    <use xlink:href="/diet/img/sprite.svg#icon-back"></use>
                </svg>
                <div class="a-bbutton__text">back</div>
            </a>
        </div>
    </div>
    <div class="o-questions__content">
        <div class="m-test-finish">
            <div data-href="/final" data-key="246" data-value="246" id="processing" class="m-progress m-test-finish__progress-circle">
                <div class="m-progress__circle-wrap" data-text-error="LoaderTextError">
                    <svg width="200" height="200" viewBox="0 0 120 120" class="m-progress__circle">
                        <circle cx="60" cy="60" r="54" stroke-width="6" class="m-progress__meter"></circle>
                        <circle cx="60" cy="60" r="54" stroke-width="6" class="m-progress__value" style="stroke-dasharray: 339.292; stroke-dashoffset: 0;"></circle>
                    </svg>
                    <div class="m-progress__status">
                        <span class="m-progress__status-count js-progress-status">100</span>
                        <span class="m-progress__status-percent">%</span>
                    </div>
                </div>
                <div data-loading-texts="[{ &quot;text&quot;: &quot;Processing entered data...&quot;, &quot;percent&quot;: 0}, { &quot;text&quot;: &quot;Calculating the dietary profile...&quot;, &quot;percent&quot;: 20 }, { &quot;text&quot;: &quot;Calculating the amount of food...&quot;, &quot;percent&quot;: 40 }, { &quot;text&quot;: &quot;Selection of suitable recipes...&quot;, &quot;percent&quot;: 60 }, { &quot;text&quot;: &quot;Your personalized meal plan is ready!&quot;, &quot;percent&quot;: 70 }, { &quot;text&quot;: &quot;Your personalized meal plan is ready!&quot;, &quot;percent&quot;: 90 }, { &quot;text&quot;: &quot;Your personalized meal plan is ready!&quot;, &quot;percent&quot;: 100 }]" class="m-progress__text js-progress-text">Your personalized meal plan is ready!</div>
            </div>
        </div>
    </div>
</div>

<div id="generateDiet"></div>

</body></html>
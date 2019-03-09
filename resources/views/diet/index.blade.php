@include('diet.template.head')
<body class="pb" data-page="steps">
<div class="o-head o-head--steps o-head--no-padding">
    <div class="woman-overlay"></div>
    <div class="o-head__container">
        <div class="o-head__image of-hidden">
            <img src="{{ asset('/diet/img/kF4SUJTR5ptv3EAeDZJvRYSontSyc8eLB1TX5qEL.png') }}" alt="">
        </div>
        <?php
            if(!empty(\request()->session()->get('message')))
            {
                echo "<script>alert('". \request()->session()->get('message') ."')</script>";
            }
        ?>
        <div class="o-head__content">
            <form action="#" class="o-head__gender m-gender">
                <div class="m-gender__title">
                    <div class="m-gender__title-row">Select</div>
                    <div class="m-gender__title-row">Your</div>
                    <div class="m-gender__title-row">Gender</div>
                </div>
                <div class="m-gender__genders">
                    <div data-href="/2" class="bodyClass dietAnswer m-gender__gender" data-key="237" data-value="43" data-body-class-value="men-theme">
                        <div data-gender="male" for="step-01-man" class=" js-gender-man js-gender-radio a-gender ">
                            <a href="{{ url('diet1/male') }}">
                                <div class="a-gender__effect js-gender-effect">
                                    <div class="a-gender__effect-inner"></div>
                                </div>
                                <svg class="a-gender__icon a-gender__icon--main a-icon" style="margin-left: 60px">
                                    <use xlink:href="/diet/img/sprite.svg#icon-icon-man"></use>
                                </svg>
                                <svg class="a-gender__icon a-gender__icon--hover a-icon" style="margin-left: 70px">
                                    <use xlink:href="/diet/img/sprite.svg#icon-check"></use>
                                </svg>
                                <div class="a-gender__text">Male</div>
                            </a>
                        </div>
                    </div>
                    <div class="m-gender__or">or</div>
                    <div data-href="/2" class="bodyClass dietAnswer m-gender__gender" data-key="237" data-value="44" data-body-class-value="woman-theme">
                        <a href="{{ url('diet1/female') }}">
                            <div data-gender="female" for="step-01-woman" class=" js-gender-woman js-gender-radio a-gender a-gender--woman">
                                <div class="a-gender__effect js-gender-effect a-gender__effect--woman">
                                    <div class="a-gender__effect-inner"></div>
                                </div>
                                <svg class="a-gender__icon a-gender__icon--main a-icon">
                                    <use xlink:href="/diet/img/sprite.svg#icon-icon-woman"></use>
                                </svg>
                                <svg class="a-gender__icon a-gender__icon--hover a-icon">
                                    <use xlink:href="/diet/img/sprite.svg#icon-check"></use>
                                </svg>
                                <div class="a-gender__text">Female</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="m-gender__online-wrap"></div>
            </form>
        </div>
    </div>
</div>
<div class="m-steps-bg"></div>
<div class="m-steps">
    <div class="m-steps__step-line a-step-line">
        <div style="width: 0%" data-step="1" data-steps="10" class="a-step-line__frontline js-step-line">
            <div class="a-step-line__frontline-text js-step-text"><span class="js-step-line-text">0</span><span>%</span>
            </div>
        </div>
    </div>
    <div class="m-steps__steps js-steps">
        <a href="index.html" class="m-steps__step js-step a-step
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
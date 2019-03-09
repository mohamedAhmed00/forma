@include('diet.template.head')


<body data-page="card-details">

<div id="email-form">
    <div class="o-head-mobile o-head--darken">
        <div style="background-image: url({{ asset('/diet/img/kF4SUJTR5ptv3EAeDZJvRYSontSyc8eLB1TX5qEL.png') }});background-size: 100% 100%;"
             class="o-head-mobile__image"></div>
        <div class="o-head-mobile__title m-title">
            <svg class="m-title__icon a-icon">
                <use xlink:href="{{ asset('/diet/img/sprite.svg#icon-plane') }}"></use>
            </svg>
            <div class="m-title__title">Complate Your Order</div>
            <div class="m-title__subtitle">Enter Your Data : And Choose the Doctor</div>
        </div>
    </div>
    <div class="o-head o-head--smaller-image o-head--type-2 o-head--darken o-head--no-padding">
        <div class="woman-overlay"></div>
        <div class="o-head__container">
            <div class="o-head__image"><img style="width: 100%" src="{{ asset('/diet/img/kF4SUJTR5ptv3EAeDZJvRYSontSyc8eLB1TX5qEL.png') }}" alt=""></div>
            <div class="o-head__content js-secured-parent js-head-content">
                <div class="o-head__title m-title">
                    <svg class="m-title__icon a-icon">
                        <use xlink:href="{{ asset('diet/img/sprite.svg#icon-cards') }}"></use>
                    </svg>
                    <div class="m-title__title">Complate Your Order</div>
                    <div class="m-title__subtitle">Enter Your Data : And Choose the Doctor</div>
                </div>
                <form id="emailfill" action="{{ url('send/delevery') }}" method="post" class="o-head__emailfill js-content-to-move m-emailfill patch" novalidate="novalidate">
                    @csrf
                    <div class="row-group">
                        <div class="m-emailfill__input a-input">
                            <input placeholder="Full Name" name="name" type="text" class="a-input__input a-input__input--format js-input" required>
                        </div>
                    </div>
                    <div class="row-group">
                        <div class="m-emailfill__input a-input">
                            <input placeholder="phone number" name="phone" type="number" class="a-input__input a-input__input--format js-input"  required>
                        </div>
                    </div>
                    <div class="row-group">
                        <div class="m-emailfill__input a-input">
                            <input placeholder="E-mail" name="email" type="email" class="a-input__input a-input__input--format js-input" id="js-save-email" required>
                        </div>
                    </div>
                    <div class="row-group">
                        <div class="m-emailfill__input a-input">
                            <select placeholder="Choose Doctor" name="doctor" class="a-input__input a-input__input--format js-input" required>
                                <option value="" disabled>Choose Doctor</option>
                                @foreach($doctor as $doc)
                                    <option value="{{ $doc->id }}">{{ $doc->activity_type_name }} - {{ $doc->email }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row-group">
                        <input type="submit" value="Continue" id="email-form-submit" class="m-emailfill__button a-button a-button--input">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
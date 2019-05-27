@extends('master')
@section('content')
    @php
        $page = '';
        $first = $activity->Activities()->first();
    @endphp
<section class="activities link-activity">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ol class="breadcrumb bg-white float-right">
                    <li class="breadcrumb-item active text-success" aria-current="page">{{ $activity->activity_type_name }}</li>
                    <li class="breadcrumb-item"><a href="{{ url('activity/'.$first->id) }}" class="link">{{ $first->activites_type }}</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/') }}" class="link">Home</a></li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h1 class="h1 text-center text-uppercase font-weight-bold py-5 head"><span class="pb-1">{{ $activity->activity_type_name }}</span>
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 text-center">
                <figure class="figure border-success">
                    <a href="https://adminhome.forma-eg.com/{{ $activity->img_main }}">
                        <img data-src="{{ url(!empty($activity->img_main) ? 'https://adminhome.forma-eg.com/'.$activity->img_main : asset('imgs/not_found.png'))  }}" class="figure-img img-fluid lozad" alt="{{ $activity->activity_type_name }}">
                    </a>
                </figure>
            </div>
            <div class="col-md-8 mt-4 mb-5">
                <div class="review">
                    <?php
                    $rating = rand(4,5);
                    ?>
                        @for($i=0;$i < 5 ;$i++)
                            @if($i >= $rating)
                                <i class="far fa-star"></i>
                            @else
                                <i class="fas fa-star"></i>
                            @endif
                        @endfor
                </div>
                <a href="https://maps.google.com/maps?q={{$activity->placeLat . ',' . $activity->placelong }}">
                    <h4 class="h4 text-left font-weight-normal my-3">
                        ADDRESS : {{ $activity->address }}
                    </h4>
                </a>
                @if(!empty($activity->mobile))
                    <a href="tel:{{$activity->mobile}}">
                        <h4 class="h4 text-left font-weight-normal my-3">MOBILE : {{$activity->mobile}}</h4>
                    </a>
                @endif
                @if(!empty($activity->email))
                    <a href="mailto:{{$activity->email}}">
                        <h4 class="h4 text-left font-weight-normal my-3">Email : {{$activity->email}}</h4>
                    </a>
                @endif
                @if(!empty($activity->landline))
                    <a href="tel:{{$activity->landline}}">
                        <h4 class="h4 text-left font-weight-normal my-3">landline : {{$activity->landline}}</h4>
                    </a>
                @endif


                @if(!empty($activity->working_details))
                    <h4 class="h4 text-left font-weight-normal my-3">WORKING DETAILS : {{$activity->working_details}}</h4>
                @endif

                @if(!empty($activity->working_days))
                    <h4 class="h4 text-left font-weight-normal my-3">WORKING DAYS PER WEEK : {{$activity->working_days}} DAY</h4>
                @endif
                <div class="font-awesome-collection py-4 mb-5">
                    @if(!empty($activity->facebook))<a href="{{ $activity->facebook }}" class="text-success mx-2"><i class="fab fa-facebook-f"></i></a> @endif
                    @if(!empty($activity->twitter))<a href="{{ $activity->twitter }}" class="text-success mx-2"><i class="fab fa-twitter"></i></a> @endif
                    @if(!empty($activity->instagram))<a href="{{ $activity->instagram }}" class="text-success mx-2"><i class="fab fa-instagram"></i></a> @endif
                    @if(!empty($activity->website))<a href="{{ $activity->website }}" class="text-success mx-2"><i class="fab fa-internet-explorer"></i></a> @endif
                </div>

                <h4 class="h4 text-left font-weight-normal my-3">ABOUT {{ $activity->activity_type_name }}</h4>
                <p class="lead font-weight-light mb-5">
                     {!!   $activity->info !!}
                </p>
            </div>
        </div>
    </div>
</section>
@endsection
@extends('master')
@section('content')
    @php
        $page = '';
    @endphp
    <section class="activities">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <h1 class="h1 text-center text-uppercase font-weight-bold py-5 head">
                        <img style="width:100px;height: 100px;" class="mr-4 img-thumbnail lozad"
                             data-src="{{ url(!empty($activityData->web_img2) ? 'https://adminhome.forma-eg.com/'.$activityData->web_img2 : asset('imgs/not_found.png'))  }}" alt="">
                        <span class="pb-1">{{ $activityData->activites_type }}</span>
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <form  action="{{ url(Request::path()) }}" method="post" class="woocommerce-widget-layered-nav-dropdown">
                        {{ csrf_field() }}
                    <h2 class="h2 text-left text-uppercase font-weight-bold">Search</h2>
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control border-success my-4 text-success"
                           placeholder="Search for activity">
                    <h6 class="h6 text-left text-uppercase font-weight-bold">FITNESS SERVICES</h6>
                    <div class="form-group">
                        <ul class="list-unstyled">
                            @foreach($services as $service)
                            <li class="my-3">
                                <span class="float-left">{{ $service->name }}</span>
                                <input class="float-right" name="service[]" value="{{ $service->id }}" type="checkbox">
                            </li>
                            <br>
                            @endforeach
                        </ul>
                    </div>
                    <div>
                        <h6 class="h6 text-left text-uppercase font-weight-bold">Choose the Location</h6>
                        <select class="form-control my-4 border-success" name="location">
                            <option class="border-success" value="">Choose the Location</option>
                            @foreach($location as $loc)
                            <option class="border-success" value="{{$loc->id}}">{{$loc->locations}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="text-center mb-4">
                        <button class="btn btn-success">Search</button>
                    </div>
                    </form>
                </div>
                <div class="col-md-9">
                    <div class="row mb-4">
                        @forelse($activities as $activity)
                            <?php
                            $activity->rating = rand(4,5);
                            ?>
                            <div class="col-md-4 col-xl-3 mb-4">
                            <div class="card border-success">
                                <div class="single-activity ">
                                    <div class="">
                                        <a href="{{ url('single/activity/'.$activity->id) }}">
                                            <img data-src="{{ 'https://adminhome.forma-eg.com/'.$activity->img_main }}" class="lozad card-img-top" alt="{{ $activity->activity_type_name }}">
                                        </a>
                                        <div class="name w-100">
                                            <a href="{{ url('single/activity/'.$activity->id) }}"
                                               class="text-center text-uppercase font-weight-bold d-block py-2">{{ $activity->activity_type_name }}</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h6 class="h6 card-title"><a href="{{ url('single/activity/'.$activity->id) }}" class="link">{{ $activity->activity_type_name }}</a>
                                    </h6>
                                    <h6 class="h6">{{ $activity->Location->locations }}</h6>
                                    <div class="review">
                                        @for($i=0;$i < 5 ;$i++)
                                            @if($i >= $activity->rating)
                                                <i class="far fa-star"></i>
                                            @else
                                                <i class="fas fa-star"></i>
                                            @endif
                                        @endfor
                                    </div>
                                    <a href="{{ url('single/activity/'.$activity->id) }}" class="float-right link"><i class="fas fa-search-plus"></i>
                                        View</a>
                                </div>
                            </div>
                        </div>
                        @empty
                            <h4 class="h4 text-center">Sorry , no fitness found in this activity . . . Try Again</h4>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
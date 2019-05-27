@extends('master')
@section('content')
    @php
        $page = 'about';
        $category = $news->Category;
        $newsData = $news->getData();
        $newsDataVideo = $newsData->where('type','Video')->first();
        $newsDataGif = $newsData->where('type','Gif')->first();
        $newsDataImage = $newsData->where('type','Image')->first();
    @endphp
    @if($news->post_lang == 'Ar')
        <style>
            #text * ,.card-title,.li_current,.title-data
            {
                font-family: 'Ubuntu' !important;
            }
        </style>
    @endif
    <section class="activities">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ol class="breadcrumb bg-white float-right">
                        <li class="breadcrumb-item active text-success li_current" aria-current="page">{!! strip_tags($news->posttitle) !!}</li>
                        <li class="breadcrumb-item"><a href="{{ url('subcategory/'.$category->id) }}" class="link">{{ $category->newscmscategoy }}</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('/') }}" class="link">Home</a></li>
                    </ol>
                </div>
                <div class="col-12">
                    <h3 class="h3 text-center text-uppercase font-weight-bold py-5 title-data"><span class="pb-1">{!! strip_tags($news->posttitle) !!}</span></h3>
                </div>
            </div>
            <div class="row mb-4">
                <div class="card w-100 border-success">
                    @if(!empty($newsDataVideo))
                        <iframe class="youtube_iframe" src="https://www.youtube.com/embed/{{$newsDataVideo->data}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    @elseif(!empty($newsDataGif))
                        <img data-src="{{ (!empty($newsDataGif->data))? url('https://adminhome.forma-eg.com/'.$newsDataGif->data)  : asset('imgs/not_found.png') }}"
                             class="card-img-top lozad" alt="{!! strip_tags($news->posttitle) !!}">
                    @else
                        <img data-src="{{ (!empty($news->post_image))? url('https://adminhome.forma-eg.com/'.$news->post_image)  : asset('imgs/not_found.png') }}"
                             class="card-img-top lozad" alt="{!! strip_tags($news->posttitle) !!}">
                    @endif
                    <div class="card-body">
                        <h3 class="card-title text-center">{!! strip_tags($news->posttitle) !!}</h3>
                        <h6 class="h6 card-text">{{ $news->post_startdate }}</h6>
                        <div id="text">
                            {!! str_replace(['\r','\n','\\'],'',$news->fulldescription) !!}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
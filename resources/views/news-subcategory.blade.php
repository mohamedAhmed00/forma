@extends('master')
@section('content')
    @php
        $page = 'about';
        $category = $subcategory->Category;
    @endphp
<section class="activities">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <ol class="breadcrumb bg-white float-right">
                    <li class="breadcrumb-item active text-success" aria-current="page">{!! strip_tags($subcategory->newscmssubcategoy) !!}</li>
                    <li class="breadcrumb-item"><a href="{{ url('subcategory/'.$category->id) }}" class="link">{{ $category->newscmscategoy }}</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/') }}" class="link">Home</a></li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h1 class="h1 text-center text-uppercase font-weight-bold py-5 head"><span class="pb-1">{!! strip_tags($subcategory->newscmssubcategoy) !!}</span></h1>
            </div>
        </div>
            @foreach($subcategory->getnews->chunk(4) as $chunck)
                <div class="row">
                    @foreach($chunck as $news)
                        @php
                            $newsData = $news->getData->first();
                        @endphp
                    @if($news->post_lang == 'Ar')
                            <style>
                                .new_link
                                {
                                    font-family: 'Ubuntu' !important;
                                }
                            </style>
                        @endif
                        <div class="col-md-3 mb-4">
                <div class="activity border-success border">
                    @if(!empty($newsData) AND $newsData->type == 'Video')
                        <iframe class="youtube_iframe_subcategory" src="https://www.youtube.com/embed/{{$newsData->data}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    @else
                        <a href="{{ url('singlenews/'.$news->id) }}">
                            <img class="img-fluid lozad" data-src="{{ url(!empty($news->post_image) ? 'https://adminhome.forma-eg.com/'.$news->post_image : asset('imgs/not_found.png'))  }}" alt="">
                        </a>
                    @endif
                    <div class="name d-block">
                        <a class="text-center text-uppercase font-weight-bold d-block py-2 new_link" href="{{ url('singlenews/'.$news->id) }}">{!! strip_tags($news->posttitle) !!}</a>
                    </div>
                </div>
            </div>
                    @endforeach
                </div>
        @endforeach
    </div>
</section>
@endsection
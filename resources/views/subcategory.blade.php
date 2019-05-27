@extends('master')
@section('content')
    @php
        $page = '';
    @endphp
    <section class="activities">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="h1 text-center text-uppercase font-weight-bold py-5 head"><span class="pb-1">{!! substr($category->newscmscategoy,0,50) !!}</span></h1>
            </div>
        </div>
        <div class="row">
            @foreach($category->SubCategory as $subcategory)
                <div class="col-md-3 mb-4">
                    <div class="activity border-success border">
                        <a href="{{ url('newssubcategory/'.$subcategory->id) }}">
                            <img class="img-fluid lozad"
                                 data-src="{{ (!empty($subcategory->newscmsimage_sub_resized))? url('https://adminhome.forma-eg.com/'.$subcategory->newscmsimage_sub_resized)  : asset('imgs/not_found.png') }}"
                                 alt="">
                        </a>
                        <div class="name d-block">
                            <a class="text-center text-uppercase font-weight-bold d-block py-2" href="{{ url('newssubcategory/'.$subcategory->id) }}">{!! strip_tags($subcategory->newscmssubcategoy) !!}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
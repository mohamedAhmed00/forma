@extends('master')
@section('content')
    @php
        $page = 'membership';
    @endphp
    <section class="membership">
        <div class="container">
            <div class="row mb-4">
                <div class="col-sm-12 mb-4">
                    <div class="title">
                        <h1 class="h1 text-center text-uppercase font-weight-bold d-block mb-4">Membership</h1>
                    </div>
                    <div class="row">
                        @foreach($memberships as $membership)
                            <div class="col-md-4 mb-3">
                                <div class="card w-100 border-success text-center px-0 mx-0">
                                    <div class="card-body px-0 mx-0">
                                        <h5 class="card-title text-center">{{ $membership->membership_name }}</h5>
                                        <div class="bg-success py-3">
                                            <h2 class="text-center text-uppercase font-weight-bold d-block text-white text-line">{{ $membership->membership_price }}
                                                L.E</h2>
                                            <h2 class="text-center text-uppercase font-weight-bold d-block text-white">{{ $membership->membership_discount }}
                                                L.E</h2>
                                        </div>
                                        <p class="card-text my-3 ">
                                            {!! $membership->membership_desc !!}
                                        </p>
                                        <a href="tel:01555550889"
                                           class="btn btn-success text-center text-uppercase font-weight-bold text-white py-2 px-4">Call
                                            us</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
    </section>
@endsection
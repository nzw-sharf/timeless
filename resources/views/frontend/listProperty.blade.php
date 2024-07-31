@extends('frontend.layout.master')
@if ($pagemeta)
    @section('title', $pagemeta->meta_title)
    @section('pageDescription', $pagemeta->meta_description)
    @section('pageKeyword', $pagemeta->meta_keywords)
@else
    @section('title',  'List Your Property | '.$name)
    @section('pageDescription', $website_description)
    @section('pageKeyword', $website_keyword)
@endif
@section('content')
    
<section class="mainBanner justify-content-center" style="background-image:url('{{asset('frontend/assets/images/banner/contactBg.webp')}}');min-height:80vh;">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="row">
                    <div class="col-12 col-lg-12 col-md-12">
                        <div class="bannerHead text-center text-white">
                            <h5>Sell With<span> Us</span></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section >
    <div class="container py-5">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="row">
                    <div class="col-12 col-lg-12 col-md-12">
                        <div class="secHeadNew text-center py-4">
                            <h5>List<span> With Us!</span></h5>
                        </div>
                    </div>
                    <div class="col-12 col-lg-12">
                        @include('frontend.layout.listForm')
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container-fluid ">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-12 col-md-12">
                        <div class="secHeadNew text-center py-4">
                            <h5>Our <span>Process</span></h5>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <div class="container pt-3 pb-5">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="owl-carousel owl-theme" id="processSlide">
                    <div class="item">
                        <div class="card p-2 p-lg-4 p-md-3 shadow">
                            <div class="card-body">
                                <div class="processRound shadow mb-3">
                                    1
                                </div>
                                <div>
                                    <h5 class="fw-bold  text-primary">Property Appraisal</h5>
                                    <p class="card-text text-sec">Some quick example text to build on the card title and
                                        make up the bulk of the card's content.Some quick example text to build on the
                                        card
                                        title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card p-2 p-lg-4 p-md-3 shadow">
                            <div class="card-body">
                                <div class="processRound shadow mb-3">
                                    2
                                </div>
                                <div>
                                    <h5 class="fw-bold  text-primary">Marketing Preperation</h5>
                                    <p class="card-text text-sec">Some quick example text to build on the card title and
                                        make up the bulk of the card's content.Some quick example text to build on the
                                        card
                                        title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card p-2 p-lg-4 p-md-3 shadow">
                            <div class="card-body">
                                <div class="processRound shadow mb-3">
                                    3
                                </div>
                                <div>
                                    <h5 class="fw-bold  text-primary">Professional Photography & Listing</h5>
                                    <p class="card-text text-sec">Some quick example text to build on the card title and
                                        make up the bulk of the card's content.Some quick example text to build on the
                                        card
                                        title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card p-2 p-lg-4 p-md-3 shadow">
                            <div class="card-body">
                                <div class="processRound shadow mb-3">
                                    4
                                </div>
                                <div>
                                    <h5 class="fw-bold  text-primary">Property Appraisal</h5>
                                    <p class="card-text text-sec">Some quick example text to build on the card title and
                                        make up the bulk of the card's content.Some quick example text to build on the
                                        card
                                        title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

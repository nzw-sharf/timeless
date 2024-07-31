@extends('frontend.layout.master')

@if ($pagemeta)
@section('title', $pagemeta->meta_title)
@section('pageDescription', $pagemeta->meta_description)
@section('pageKeyword', $pagemeta->meta_keywords)
@else
@section('title', 'Dubai Area Guides | '.$name)
@section('pageDescription', $website_description)
@section('pageKeyword', $website_keyword)
@endif
@section('content')
<section class="mainBanner"
    style="background-image:url('{{asset('frontend/assets/images/banner/homeBg5.webp')}}');min-height:80vh;">
    <div class="overlayBG"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-12 col-md-12">
                        <div class="bannerHead text-center text-white">
                            <h5>Get to know the city with our  <span> Area Guides</span></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="">
    <div class="container py-5">
        <div class="row">
            <div class="col-12 col-lg-12 col-md-12">
                <div class="secHead pb-4" data-aos="fade-right">
                    <h5>Discover<span>Dubai</span></h5>

                    <p class="text-sec"> Everything you need to know about living in Dubai's top communities.
                        Our local area guides provide detailed information about living options, schools,
                        shopping and other activities
                    </p>
                </div>
            </div>
            <div class="col-12 col-lg-12">
                <div class="row">
                    @foreach ($communities as $comm)
                    <div class="col-12 col-lg-3 col-md-4">
                        <a href="{{ url('area/' . $comm->slug) }}">
                            <div class="card border-0 mb-3">
                                <div class="propCont p-relative">
                                    <img src="{{$comm->mainIMage}}" class="card-img-top rounded-0 propIMg"
                                        alt="{{  $comm->name }}" />
                                    <div class="commuDetOverlay">
                                        <h5 class="card-title mb-0">{{ $comm->name }}</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-12 col-lg-12">
                <div class="d-flex justify-content-center py-4">
                    {{ $communities->links() }}
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
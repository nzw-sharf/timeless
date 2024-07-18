@extends('frontend.layout.master')

@if ($pagemeta)
@section('title', $pagemeta->meta_title)
@section('pageDescription', $pagemeta->meta_description)
@section('pageKeyword', $pagemeta->meta_keywords)
@else
@section('title', 'About Us | '.$name)
@section('pageDescription', $website_description)
@section('pageKeyword', $website_keyword)
@endif
@section('content')
<section class="mainBanner justify-content-center" style="background-image:url('{{asset('frontend/assets/images/banner/aboutus.webp')}}');min-height:80vh;">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="row">
                    <div class="col-12 col-lg-12 col-md-12">
                        <div class="bannerHead text-center text-white">
                            <h5>About<span> Timeless Properties</span></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bgDubai">
    <div class="container py-5">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="row">
                    <div class="col-12 col-lg-12">
                        <div class="secHead mb-4 text-center">
                            <h5>Our <span>Story</span></h5>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 my-auto">
                        <div>

                            <div class="pe-0 pe-md-3 pe-lg-5">
                                <p class="text-sec">Welcome to Timeless Properties, where we redefine luxury and convenience in the Dubai real estate market. With a legacy of over 25 years, we specialize in offering exclusive properties that are unavailable through any other agency in the region, thanks to our loyal network of sellers. Our expansive network extends beyond borders, connecting you with esteemed buyers, sellers, and influential figures worldwide. At Timeless Properties, we prioritize your experience, ensuring each step of your real estate journey is effortless and unforgettable. From initial consultation to closing, our expert team provides personalized guidance and support, guaranteeing a seamless transaction tailored to your unique preferences and requirements. Discover the unparalleled service and opportunities that await you with Timeless Properties.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6">
                        <div class="aboutImg">
                            <img src="{{asset('frontend/assets/images/about.webp')}}" alt="{{  $name }}"
                                srcset="{{asset('frontend/assets/images/about.webp')}}" class="img-fluid">
                        </div>
                        <div class="aboutImg2">
                            <img src="{{asset('frontend/assets/images/about.webp')}}" alt="{{  $name }}"
                                srcset="{{asset('frontend/assets/images/about.webp')}}" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container-fluid py-5">
        <div class="row">
            <div class="col-12 col-lg-12 col-md-12">
                <div class="secHead pb-4  text-center">
                    <h5>Our<span>Management</span></h5>
                </div>
            </div>
            <div class="col-12 col-lg-12">
                <div id="managementSlide" class="owl-carousel owl-theme">
                    @for ($i = 1; $i < 5; $i++) <div class="item my-auto">
                        <div class="card border-0 mb-3">
                            <div class="propCont p-relative">
                                <a href="http://"><img
                                        src="{{ asset('frontend/assets/images/community/' . $i . '.webp') }}"
                                        class="card-img-top rounded-0 propIMg" alt="{{ $name }}"></a>
                                <div class="managDetOverlay">
                                    <h5 class="card-title mb-0">Name Here</h5>
                                    <p class="text-sec mb-0">Designation</p>
                                </div>
                            </div>
                        </div>
                </div>
                @endfor
                @for ($i = 1; $i < 5; $i++) <div class="item my-auto">
                    <div class="card border-0 mb-3">
                        <div class="propCont p-relative">
                            <a href="http://"><img src="{{ asset('frontend/assets/images/community/' . $i . '.webp') }}"
                                    class="card-img-top rounded-0 propIMg" alt="{{ $name }}"></a>
                            <div class="managDetOverlay">
                                <h5 class="card-title mb-0">Name Here</h5>
                                <p class="text-sec mb-0">Designation</p>
                            </div>
                        </div>
                    </div>
            </div>
            @endfor
        </div>
    </div>
    </div>
    </div>
</section>
<section>
    <div class="container py-5">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="row">
                    <div class="col-12 col-lg-12 col-md-12">
                        <div class="secHead text-center">
                            <h5>Our<span>Agents</span></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid pb-5">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div id="agentSlide" class="owl-carousel owl-theme">
                    @foreach ($agents as $agent)
                    @if ($agent->email != 'info@timeless-properties.com')
                    <div class="item my-auto">
                            <div class="card border-0 mb-3">
                                <div class="propCont p-relative">
                                    <a href="http://"><img
                                            src="{{$agent->image ? $agent->image : $agent->avatar}}"
                                            class="card-img-top rounded-0 propIMg" alt="{{ $name }}"></a>
                                    <div class="propDetOverlay rounded-0">
                                        <h5 class="card-title mb-0">{{  $agent->name }}</h5>
                                        <p class="text-sec mb-0">Property Consultant</p>
                                    </div>
                                </div>
                            </div>
                    </div>
                    
                    @endif
                   
                    @endforeach
            </div>

        </div>
    </div>
    </div>
</section>
@endsection
@extends('frontend.layout.master')

@if ($pagemeta)
    @section('title', $pagemeta->meta_title)
    @section('pageDescription', $pagemeta->meta_description)
    @section('pageKeyword', $pagemeta->meta_keywords)
@else
    @section('title',  'About Us | '.$name)
    @section('pageDescription', $website_description)
    @section('pageKeyword', $website_keyword)
@endif
@section('content')
<section class="mainBanner justify-content-center" style="">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="row">
                    <div class="col-12 col-lg-12 col-md-12">
                        <div class="bannerHead text-center text-white">
                            <h5>About<span> Us</span></h5>
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
                                <p class="text-sec">We are a boutique luxury real estate firm, connecting discerning
                                    clients to the most desirable homes. We offer a bespoke service
                                    that is built on the highest levels of attention to detail & discretion.
                                    We meticulously select brokers who have demonstrated exceptional
                                    success in the luxury market to position our brand as a leader in
                                    luxury real estate. With a proven track record selling off market, our
                                    team ensure you receive the highest level of expert advice & deliver
                                    tailored solutions.</p>
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
            <div class="col-12 col-lg-12">
                <div class="row">
                    <div class="col-12 col-lg-12 col-md-12">
                        <div class="secHead pb-4  text-center">
                            <h5>Our<span>Management</span></h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12">
                    <div id="managementSlide" class="owl-carousel owl-theme">
                        @for ($i = 1; $i < 5; $i++)
                            <div class="item my-auto">
                                <div class="card border-0 mb-3">
                                    <div class="propCont p-relative">
                                        <a href="http://"><img
                                                src="{{ asset('frontend/assets/images/community/' . $i . '.webp') }}"
                                                class="card-img-top rounded-0" alt="{{ $name }}"></a>
                                        <div class="managDetOverlay">
                                           <h5 class="card-title mb-0">Name Here</h5>
                                                <p class="text-sec mb-0">Designation</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                        @for ($i = 1; $i < 5; $i++)
                            <div class="item my-auto">
                                <div class="card border-0 mb-3">
                                    <div class="propCont p-relative">
                                        <a href="http://"><img
                                                src="{{ asset('frontend/assets/images/community/' . $i . '.webp') }}"
                                                class="card-img-top rounded-0" alt="{{ $name }}"></a>
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
                <div id="partnerSlide" class="owl-carousel owl-theme">
                    @for ($i=1;$i<7;$i++) <div class="item">
                        <div class="partnerImg">
                            <img src="{{asset('frontend/assets/images/testimonial.webp')}}" class="img-fluid"
                                alt="{{  $name }}">
                        </div>
                </div>
                @endfor
            </div>

        </div>
    </div>
    </div>
</section>
@endsection

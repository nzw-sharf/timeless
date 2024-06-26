@extends('frontend.layout.master')

@if ($pagemeta)
    @section('title', $pagemeta->meta_title)
    @section('pageDescription', $pagemeta->meta_description)
    @section('pageKeyword', $pagemeta->meta_keywords)
@else
    @section('title', 'Home | ' . $name)
    @section('pageDescription', $website_description)
    @section('pageKeyword', $website_keyword)
@endif
@section('content')

<section class="mainBanner">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="row">
                    <div class="col-12 col-lg-12 col-md-12">
                        <div class="bannerHead text-center text-white">
                            <h5>Lorem Ipsum is simply <span>Dummy Text</span></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row py-5">
            <div class="col-12 col-lg-12">
                <div class="searchDiv">
                        @include('frontend.layout.search')    
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
                    <div class="col-12 col-lg-6 col-md-6 my-auto">
                        <div>
                            <div class="sectionHead">
                                <h5>Lorem Ipsum is simply</br> <span>Dummy Text</span></h5>
                            </div>
                            <div class="pe-0 pe-md-3 pe-lg-5">
                                <p class="text-sec">when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6">
                        <div  class="aboutImg">
                           <img src="{{asset('frontend/assets/images/blog-no-image.webp')}}" alt="" srcset="{{asset('frontend/assets/images/blog-no-image.webp')}}" class="img-fluid">
                        </div>
                        <div class="text-center pt-4">
                            <p class="text-sec">For Luxury Living &nbsp; <button type="submit" class="btn btn-primary">GET IN TOUCH</button></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5 bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="row text-center">
                    <div class="col-12 col-lg-4 col-md-4 my-auto">
                        <div class="text-white sectionHead">
                            <h5 class="fw-bold">100+</h5>
                            <p class="text-sec mb-0">Lorem Ipsum is simply</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-md-4 my-auto">
                        <div class="text-white sectionHead">
                            <h5 class="fw-bold">100+</h5>
                            <p class="text-sec mb-0">Lorem Ipsum is simply</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-md-4 my-auto">
                        <div class="text-white sectionHead">
                            <h5 class="fw-bold">100+</h5>
                            <p class="text-sec mb-0">Lorem Ipsum is simply</p>
                        </div>
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
                    <div class="col-12 col-lg-6 col-md-6">
                        <div class="secHead pe-0 pe-md-3 pe-lg-5">
                            <h5>Lorem Ipsum is simply Ipsum is simply<span>Dummy Text</span></h5>
                        </div>
                        <div class="bgVilla">
                            <div class="">
                                <h4 class="fw-bold">3000+ <span class="text-sec fw-normal">sq. ft.</span></h4>
                                <h4 class="fw-bold">5 <span class="text-sec fw-normal">Bedrooms</span></h4>
                                <h4 class="fw-bold">2 <span class="text-sec fw-normal">Kitchens</span></h4>
                                <p class="text-sec">when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 my-auto">
                        <div class="p-relative">
                        <div class="bgVilla2">
                            <img src="{{asset('frontend/assets/images/blog-no-image.webp')}}" alt="" srcset="{{asset('frontend/assets/images/blog-no-image.webp')}}" class="img-fluid">
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="row">
                    <div class="col-12 col-lg-12 col-md-12">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

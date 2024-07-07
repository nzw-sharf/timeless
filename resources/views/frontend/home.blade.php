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

<section class="homeBanner mainBanner">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="row">
                    <div class="col-12 col-lg-12 col-md-12">
                        <div class="bannerHead text-center text-white">
                            <h5>Your Gateway to <span>Timeless Luxury</span></h5>
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
                                <h5>Timeless
                                    Properties</br> <span>Luxury Real Estate</span></h5>
                            </div>
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
                        <div class="text-center pt-4">
                            <p class="text-sec">For Luxury Living &nbsp; <button type="submit"
                                    class="btn btn-primary">GET IN TOUCH</button></p>
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
                        <div class="text-white sectionHead py-3">
                            <h5 class="fw-bold">2B AED</h5>
                            <p class="text-sec mb-0"> in Sales Revenue in the UAE alone.</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-md-4 my-auto">
                        <div class="text-white sectionHead py-3">
                            <h5 class="fw-bold">15,000+</h5>
                            <p class="text-sec mb-0"> HNWI's in our Network that are ready for business.</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-md-4 my-auto">
                        <div class="text-white sectionHead py-3">
                            <h5 class="fw-bold">25+</h5>
                            <p class="text-sec mb-0"> Years of Global Real Estate Experience.</p>
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
                <div class="row g-0">
                    <div class="col-12 col-lg-6 col-md-6 my-auto">
                        <div class="secHead pe-0 pe-md-3 pe-lg-5 pb-4 ps-3">
                            <h5>Discover Our Most
                                Luxurious <span>Villa Retreat!</span></h5>
                        </div>
                        <div class="bgVilla">
                            <div class="">
                                <h4 class="fw-bold">3000+ <span class="text-sec fw-normal">sq. ft.</span></h4>
                                <h4 class="fw-bold">5 <span class="text-sec fw-normal">Bedrooms</span></h4>
                                <h4 class="fw-bold">2 <span class="text-sec fw-normal">Kitchens</span></h4>
                                <p class="text-sec">Other facilities: Swimming pool, Backyard, Terrace
                                    garden, Front Patio, Living room, Driveway</p>
                            </div>
                        </div>
                        <div class="text-start pt-4 px-3">
                            <p class="text-sec"><button type="submit" class="btn btn-primary">GET IN DETAILS</button>
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 p-relative my-auto">
                        <div class="bgVilla2"></div>
                        <div class="d-flex flex-column justify-content-center py-5  h-100">
                            <img src="{{asset('frontend/assets/images/about2.webp')}}" alt="{{  $name }}"
                                srcset="{{asset('frontend/assets/images/about2.webp')}}" class="img-fluid rounded-4">
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
                        <div class="secHead pb-4">
                            <h5>Featured<span>Properties</span></h5>
                            <p class="text-sec">Discover the epitome of luxury living with Timeless Properties' featured listings. Our exclusive portfolio showcases the finest residences in Dubai, meticulously curated to meet the highest standards of elegance and sophistication. Each property reflects our commitment to excellence, offering unparalleled comfort and style for discerning buyers. Explore these exceptional homes and find your perfect sanctuary with Timeless Properties.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @for ($i=1;$i<4;$i++) 
                        <div class="col-12 col-lg-4 col-md-4 col-xl-3">
                            <div class="card border-0 mb-3">
                                <div class="propCont p-relative">
                                    <a href="http://"><img src="{{asset('frontend/assets/images/properties/p'.$i.'.webp')}}"
                                            class="card-img-top" alt="{{  $name }}"></a>
                                    <div class="propDetOverlay">
                                        <a href="http://">
                                            <h5 class="card-title mb-0">Card title</h5>
                                        </a>
                                        <div class="d-flex justify-content-between">
                                            <div class="my-auto">
                                                <p class="mb-0 text-sec">$ 0000000</p>
                                            </div>
                                            <div class="my-auto">
                                                <a class="btn btn-outline" href="">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="d-flex justify-content-between p-2">
                                    <div class="pe-1">
                                        <img src="{{asset('frontend/assets/images/icons/bed.svg')}}"
                                            alt="{{  $name }}" width="25" height="25"> <span class="align-middle">3</span>
                                    </div>
                                    <div class="px-1">
                                        <img src="{{asset('frontend/assets/images/icons/bath.svg')}}"
                                            alt="{{  $name }}" width="25" height="25"> <span class="align-middle">3</span>
                                    </div>
                                    <div class="ps-1">
                                        <img src="{{asset('frontend/assets/images/icons/area.svg')}}"
                                            alt="{{  $name }}" width="25" height="25"> <span class="align-middle">3</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                    @for ($i=1;$i<4;$i++) 
                        <div class="col-12 col-lg-4 col-md-4 col-xl-3">
                            <div class="card border-0 mb-3">
                                <div class="propCont p-relative">
                                    <a href="http://"><img src="{{asset('frontend/assets/images/properties/p'.$i.'.webp')}}"
                                            class="card-img-top" alt="{{  $name }}"></a>
                                    <div class="propDetOverlay">
                                        <a href="http://">
                                            <h5 class="card-title mb-0">Card title</h5>
                                        </a>
                                        <div class="d-flex justify-content-between">
                                            <div class="my-auto">
                                                <p class="mb-0 text-sec">$ 0000000</p>
                                            </div>
                                            <div class="my-auto">
                                                <a class="btn btn-outline" href="">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="d-flex justify-content-between p-2">
                                    <div class="pe-1">
                                        <img src="{{asset('frontend/assets/images/icons/bed.svg')}}"
                                            alt="{{  $name }}" width="25" height="25"> <span class="align-middle">3</span>
                                    </div>
                                    <div class="px-1">
                                        <img src="{{asset('frontend/assets/images/icons/bath.svg')}}"
                                            alt="{{  $name }}" width="25" height="25"> <span class="align-middle">3</span>
                                    </div>
                                    <div class="ps-1">
                                        <img src="{{asset('frontend/assets/images/icons/area.svg')}}"
                                            alt="{{  $name }}" width="25" height="25"> <span class="align-middle">3</span>
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
                        <div class="secHead pb-4">
                            <h5>Discover<span>Dubai</span></h5>
                            <p class="text-sec">Get to know the city with our Area Guides!</p>

                            <p class="text-sec"> Everything you need to know about living in Dubai's top communities. 
                                Our local area guides provide detailed information about living options, schools, shopping and other activities
                                </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @for ($i=1;$i<4;$i++) <div class="col-12 col-lg-4 col-md-4 col-xl-3">
                        <div class="card border-0 mb-3">
                            <div class="propCont p-relative">
                                <a href="http://"><img src="{{asset('frontend/assets/images/community/'.$i.'.webp')}}"
                                        class="card-img-top" alt="{{  $name }}"></a>
                                <div class="propDetOverlay">
                                    <a href="http://">
                                        <h5 class="card-title mb-0">Card title</h5>
                                    </a>
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
<section class="bg-primary text-white">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="row">
                    <div class="col-12 col-lg-6 col-md-6 my-auto">
                        <div class="py-5">
                            <div class="sectionHead">
                                <h5>Founder & Director</br> <span>Adam Farani</span></h5>
                            </div>
                            <div class="pe-0 pe-md-3 pe-lg-5">
                                <p class="text-sec">With Timeless Properties, you have discovered an agency with over 25 years of unparalleled excellence in the real estate industry. Under the visionary leadership of CEO & Founder Adam Farani, an esteemed and award-winning pioneer in Dubai's real estate market, our company offers an unmatched level of service, expertise, and discretion. Whether you are buying or selling, experience the pinnacle of luxury and professionalism with Timeless Properties.</p>
                            </div>
                            <div class=" pt-4">
                                <button type="submit" class="btn btn-white">GET IN TOUCH</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 mt-auto">
                        <div class="">
                            <img src="{{asset('frontend/assets/images/ceo.webp')}}" alt="{{  $name }}"
                                srcset="{{asset('frontend/assets/images/ceo.webp')}}" class="img-fluid">
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
                    <div class="col-12 col-lg-12 col-md-12">
                        <div class="secHead text-center">
                            <h5>Our<span>Partners</span></h5>
                            <p class="text-sec">when an unknown printer took a galley of type and scrambled it to
                                make a type specimen book. It has survived not only five centuries.when an unknown
                                printer took a galley of type and scrambled it to
                                make a type specimen book. It has survived not only five centuries.when an unknown
                                printer took a galley of type and scrambled it to
                                make a type specimen book. It has survived not only five centuries</p>
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
                    @for ($i=1;$i<5;$i++) <div class="item">
                        <div class="partnerImg">
                            <img src="{{asset('frontend/assets/images/partners/'.$i.'.webp')}}" class="img-fluid"
                                alt="{{  $name }}">
                        </div>
                </div>
                @endfor
                    @for ($i=5;$i<7;$i++) <div class="item">
                        <div class="partnerImg">
                            <img src="{{asset('frontend/assets/images/partners/'.$i.'.png')}}" class="img-fluid"
                                alt="{{  $name }}">
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
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-12 col-md-12">
                        <div class="secHead text-center">
                            <h5>Lorem Ipsum<span>Dummy Text</span></h5>
                        </div>
                    </div>
                    <div class="col-12 col-lg-10 col-md-11">
                        <div id="clientSlide" class="owl-carousel owl-theme">
                            @for ($i=0;$i<5;$i++) 
                            <div class="item">
                                <div class="row">
                                    <div class="col-12 col-lg-6 col-md-6 my-auto">
                                        <div class="testiImg py-3">
                                            <img src="{{asset('frontend/assets/images/testimonial.webp')}}"
                                                class="img-fluid rounded-circle" alt="{{  $name }}">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 my-auto">
                                        <div class="testiDesc p-3 p-lg-5 p-md-4 pb-2 pb-lg-2 pb-md-2">
                                            <div class="quote1"><img
                                                    src="{{asset('frontend/assets/images/icons/quote.png')}}"
                                                    class="img-fluid" alt="{{  $name }}"></div>
                                            <div class="secHead">

                                                <p class="text-sec mb-5">when an unknown printer took a galley of type
                                                    and scrambled it to
                                                    make a type specimen book. It has survived not only five
                                                    centuries.when an unknown printer took a galley of type and
                                                    scrambled it to
                                                    make a type specimen book. It has survived not only</p>
                                                <p class="text-sec fs-italic fw-bold">- Example Name</p>
                                            </div>
                                            <div class="quote2"><img
                                                    src="{{asset('frontend/assets/images/icons/quote.png')}}"
                                                    class="img-fluid" alt="{{  $name }}"></div>
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
    </div>
</section>
<section>
    <div class="container py-5">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="row">
                    <div class="col-12 col-lg-12 col-md-12">
                        <div class="secHead pb-4">
                            <h5>Blogs</h5>
                        </div>
                    </div>
                    <div class="col-12 col-lg-7 col-md-6">
                        <div class="card blogCard border-0">
                            <a href="{{url('media/1')}}"><img src="{{asset('frontend/assets/images/blogs/blog1.webp')}}" class="card-img-top"
                                alt="{{$name}}"></a>
                            <div class="card-body rounded-bottom bg-secondary">
                                <a href="{{url('media/1')}}"><h5 class="card-title fw-bold  text-primary">Card title</h5></a>
                                <p class="card-text text-sec">Some quick example text to build on the card title and
                                    make up the bulk of the card's content.Some quick example text to build on the card
                                    title and make up the bulk of the card's content.</p>
                                <a href="{{url('media/1')}}" class="fw-bold text-primary">Read More...</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5 col-md-6">
                        <div class="card mb-4 blogCardSide border-0">
                            <div class="row g-0 h-100">
                                <div class="col-md-5">
                                    <a href="{{url('media/1')}}">
                                    <img src="{{asset('frontend/assets/images/blogs/blog2.webp')}}"
                                        class="img-fluid rounded-start" alt="{{$name}}">
                                    </a>
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body d-flex h-100 bg-secondary rounded-end">
                                        <div class=" my-auto">
                                            <a href="{{url('media/1')}}"><h5 class="card-title fw-bold  text-primary">Card title</h5></a>
                                            <p class="card-text text-sec">Some quick example text to build on the
                                                card title and make up the bulk of the card's content.</p>
                                            <a href="{{url('media/1')}}" class="fw-bold text-primary">Read More...</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card blogCardSide border-0">
                            <div class="row g-0 h-100">
                                <div class="col-md-5">
                                    <a href="{{url('media/1')}}">
                                    <img src="{{asset('frontend/assets/images/blogs/blog3.webp')}}"
                                        class="img-fluid rounded-start" alt="{{$name}}">
                                    </a>
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body d-flex h-100 bg-secondary rounded-end">
                                        <div class=" my-auto">
                                            <a href="{{url('media/1')}}"><h5 class="card-title fw-bold  text-primary">Card title</h5></a>
                                            <p class="card-text text-sec">Some quick example text to build on the
                                                card title and make up the bulk of the card's content.</p>
                                            <a href="{{url('media/1')}}" class="fw-bold text-primary">Read More...</a>
                                        </div>
                                    </div>
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
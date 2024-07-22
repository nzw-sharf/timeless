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

<section class="homeBanner mainBanner2 ">
     <div id="carouselExampleControls" class="carousel slide homeCarousel" data-bs-ride="carousel">
       
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('frontend/assets/images/banner/homeBg1.webp')}}" class="d-block w-100"
                    alt="timeless properties">
                <div class="carousel-caption ">
                    <div class="bannerHead text-center text-white">
                        <h5>Your Gateway to <span>Timeless Luxury</span></h5>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('frontend/assets/images/banner/homeBg2.webp')}}" class="d-block w-100"
                    alt="timeless properties">
                    <div class="carousel-caption ">
                        <div class="bannerHead text-center text-white">
                            <h5>Your Gateway to <span>Timeless Luxury</span></h5>
                        </div>
                    </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('frontend/assets/images/banner/homeBg3.webp')}}" class="d-block w-100"
                    alt="timeless properties">
                    <div class="carousel-caption ">
                        <div class="bannerHead text-center text-white">
                            <h5>Your Gateway to <span>Timeless Luxury</span></h5>
                        </div>
                    </div>
            </div>
        </div>
        <div class="searchBottom">
            <div class="container">
                <div class="row py-5">
                    <div class="col-12 col-lg-12">
                        <div class="searchDiv">
                            @include('frontend.layout.search')
                        </div>
                    </div>
                </div>
            </div>
          </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
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
                                <h5>Luxury Real Estate</br> <span>Timeless
                                    Properties</span></h5>
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
<section class="py-5 bg-primary" id="counter">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="row text-center">
                    <div class="col-12 col-lg-4 col-md-4">
                        <div class="text-white sectionHeadNew py-3">
                            <h5 class="fw-bold"><span class="counter"
                                data-count="2">0</span>Billion AED</h5>
                            <p class="text-sec mb-0"> in Sales Revenue in the UAE alone</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-md-4">
                        <div class="text-white sectionHeadNew py-3">
                            <h5 class="fw-bold"><span class="counter"
                                data-count="15000">0</span>+</h5>
                            <p class="text-sec mb-0"> HNWI's in our Network that are ready for business</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-md-4">
                        <div class="text-white sectionHeadNew py-3">
                            <h5 class="fw-bold"><span class="counter"
                                data-count="25">0</span>+</h5>
                            <p class="text-sec mb-0"> Years of Global Real Estate Experience</p>
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
                                Luxurious <br><span>Villa Retreat!</span></h5>
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
                            <p class="text-sec"><button type="submit" class="btn btn-primary">GET  DETAILS</button>
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
@if (count($properties) > 0)
<section>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="row">
                    <div class="col-12 col-lg-12 col-md-12">
                        <div class="secHead pb-4">
                            <h5>Featured<span>Properties</span></h5>
                            <p class="text-sec">Discover the epitome of luxury living with Timeless Properties' featured
                                listings. Our exclusive portfolio showcases the finest residences in Dubai, meticulously
                                curated to meet the highest standards of elegance and sophistication. Each property
                                reflects our commitment to excellence, offering unparalleled comfort and style for
                                discerning buyers. Explore these exceptional homes and find your perfect sanctuary with
                                Timeless Properties.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($properties as $prop)
                    <div class="col-12 col-lg-4 col-md-4 col-xl-3">
                        <div class="card border-0 mb-3">
                            <div class="propCont p-relative">
                                <a href="{{ url('project/' . $prop['propertyId']) }}"><img src="{{$prop['photos'][0]}}"
                                        class="card-img-top propIMg" alt="{{$prop['title']}}"></a>
                                <div class="propDetOverlay">
                                    <a href="{{ url('project/' . $prop['propertyId']) }}">
                                        <h5 class="card-title">{{$prop['title']}}</h5>
                                    </a>
                                    <div class="d-flex justify-content-between">
                                        <div class="my-auto">
                                            <p class="mb-0 text-sec">AED {{$prop['price']}}</p>
                                        </div>
                                        <div class="my-auto">
                                            <a class="btn btn-outline"
                                                href="{{ url('project/' . $prop['propertyId']) }}">Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="d-flex justify-content-between p-2">
                                <div class="pe-1">
                                    <img src="{{asset('frontend/assets/images/icons/bed.svg')}}" alt="{{  $name }}"
                                        width="20" class="img-fluid"> <span class="align-middle">
                                        &nbsp;{{$prop['newParam']['bedroomMin'] . '-' .$prop['newParam']['bedroomMax']
                                        }}</span>
                                </div>
                                {{-- <div class="px-2">
                                    <img src="{{asset('frontend/assets/images/icons/bath.svg')}}" alt="{{  $name }}"
                                        width="20" class="img-fluid"> <span class="align-middle"> &nbsp;3</span>
                                </div> --}}
                                <div class="ps-1">
                                    <img src="{{asset('frontend/assets/images/icons/area.svg')}}" alt="{{  $name }}"
                                        width="20" class="img-fluid"> <span class="align-middle">
                                        &nbsp;{{$prop['newParam']['minSize'] . '-'. $prop['newParam']['maxSize'].'
                                        Sq.Ft.'}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>


            </div>
        </div>
    </div>
    </div>
</section>
@endif

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
                                Our local area guides provide detailed information about living options, schools,
                                shopping and other activities
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-12 col-md-12">
                        <div id="areaguideSlide" class="owl-carousel owl-theme">
                            @foreach ($communities as $comm)
                            <div class="item">
                                <div class="card border-0 mb-3">
                                    <div class="propCont p-relative">
                                        <a href="{{ url('area/' . $comm->slug) }}"><img src="{{$comm->mainImage}}"
                                                class="card-img-top propIMg" alt="{{$comm->name}}"></a>
                                        <div class="propDetOverlay">
                                            <a href="{{ url('area/' . $comm->slug) }}">
                                                <h5 class="card-title mb-0">{{$comm->name}}</h5>
                                            </a>
                                        </div>
                                    </div>
        
                                </div>
                            </div>
                            @endforeach
        
                        </div>
                    </div>
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
                                <p class="text-sec">With Timeless Properties, you have discovered an agency with over 25
                                    years of unparalleled excellence in the real estate industry. Under the visionary
                                    leadership of CEO & Founder Adam Farani, an esteemed and award-winning pioneer in
                                    Dubai's real estate market, our company offers an unmatched level of service,
                                    expertise, and discretion. Whether you are buying or selling, experience the
                                    pinnacle of luxury and professionalism with Timeless Properties.</p>
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
                    @foreach ($developers as $dev)
                    <div class="item h-100 my-auto d-flex flex-column justify-content-center">
                        <div class="partnerImg mx-auto text-center">
                            <img src="{{$dev['logoUrl']}}" class="img-fluid" alt="{{$dev['name']}}">
                            <p class="text-sec">{{$dev['name']}}</p>
                        </div>
                    </div>
                    @endforeach
                    {{-- @for ($i=1;$i<7;$i++) <div class="item">
                        <div class="partnerImg">
                            <img src="{{asset('frontend/assets/images/partners/'.$i.'.webp')}}" class="img-fluid"
                                alt="{{  $name }}">
                        </div>
                </div>
                @endfor --}}
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
                            <h5>What Our<span>Clients Say</span></h5>
                        </div>
                    </div>
                    <div class="col-12 col-lg-12 col-md-12">
                        <div id="clientSlide" class="owl-carousel owl-theme">
                            @foreach ($testimonials as $testi)
                            <div class="item">
                                <div class="row">
                                    <div class="col-12 col-lg-3 col-md-3 my-auto">
                                        <div class="testiImg py-3">
                                            <img src="{{asset('frontend/assets/images/testimonial.webp')}}"
                                                class="img-fluid rounded-circle" alt="{{  $name }}">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-9 col-md-9 my-auto">
                                        <div class="testiDesc p-3 p-lg-5 p-md-4 pb-2 pb-lg-2 pb-md-2">
                                            <div class="quote1"><img
                                                    src="{{asset('frontend/assets/images/icons/quote.png')}}"
                                                    class="img-fluid" alt="{{  $name }}"></div>
                                            <div class="secHead">

                                                <p class="text-sec mb-5">{{$testi->feedback}}</p>
                                                <p class="text-sec fs-italic fw-bold">- {{$testi->client_name}}</p>
                                            </div>
                                            <div class="quote2"><img
                                                    src="{{asset('frontend/assets/images/icons/quote.png')}}"
                                                    class="img-fluid" alt="{{  $name }}"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            @endforeach

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
                    @foreach ($blogs as $blog)
                    @if ($loop->first)
                    <div class="col-12 col-lg-7 col-md-6">
                        <div class="card blogCard border-0">
                            <a href="{{ url('media/' . $blog->slug) }}"><img src="{{$blog->mainImage}}"
                                    class="card-img-top" alt="{{$blog->title}}"></a>
                            <div class="card-body rounded-bottom bg-secondary">
                                <a href="{{ url('media/' . $blog->slug) }}">
                                    <h5 class="card-title fw-bold  text-primary">{{ substr(strip_tags($blog->title), 0,
                                        50) }}</h5>
                                </a>
                                <p class="card-text text-sec">{!! substr(strip_tags($blog->content), 0, 200) . '...' !!}
                                </p>
                                <a href="{{ url('media/' . $blog->slug) }}" class="fw-bold text-primary">Read
                                    More...</a>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    <div class="col-12 col-lg-5 col-md-6">
                        @foreach ($blogs as $blog)
                        @if (!$loop->first)
                        <div class="card mb-4 blogCardSide border-0">
                            <div class="row g-0 h-100">
                                <div class="col-md-5">
                                    <a href="{{ url('media/' . $blog->slug) }}">
                                        <img src="{{$blog->mainImage}}" class="img-fluid rounded-start"
                                            alt="{{$blog->title}}">
                                    </a>
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body d-flex h-100 bg-secondary rounded-end">
                                        <div class=" my-auto">
                                            <a href="{{ url('media/' . $blog->slug) }}">
                                                <h5 class="card-title fw-bold  text-primary">{{
                                                    substr(strip_tags($blog->title), 0, 50) }}</h5>
                                            </a>
                                            <p class="card-text text-sec">{!! substr(strip_tags($blog->content), 0, 100)
                                                . '...' !!}</p>
                                            <a href="{{ url('media/' . $blog->slug) }}"
                                                class="fw-bold text-primary">Read More...</a>
                                        </div>
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
    </div>
</section>

@endsection
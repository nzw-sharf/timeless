@extends('frontend.layout.master')

@if ($pagemeta)
@section('title', $pagemeta->meta_title)
@section('pageDescription', $pagemeta->meta_description)
@section('pageKeyword', $pagemeta->meta_keywords)
@else
@section('title', 'Properties | '.$name)
@section('pageDescription', $website_description)
@section('pageKeyword', $website_keyword)
@endif
@section('content')
<section class="mainBanner justify-content-center" style="min-height:80vh;">
    <div class="overlayBG"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-12 col-md-12">
                        <div class="bannerHead text-center text-white">
                            <h5>Find your most ideal investment opportunity with <span> Timeless Properties</span></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@if (count($exclusive) > 0)
<section>
    <div class="container">
        <div class="row p-relative">
            <div class="col-12 col-lg-12">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-12 col-md-12">
                        <div class="secHead py-4">
                            <h5>Exclusive<span>Listings</span></h5>
                        </div>
                    </div>

                    <div class="col-12 col-lg-10 col-md-11">
                        <div class="bgBlog1" style="right: -50%;"></div>
                        <div id="exclusiveSlide" class="owl-carousel owl-theme pb-5">
                            @foreach ($exclusive as $exclu)
                            <div class="item">
                                <div class="card border-0 mb-3">
                                    <div class="propCont p-relative">
                                        <a href="{{ url('property/' . $exclu['propertyId']) }}"><img
                                                src="{{$exclu['photos'][0]}}" class="card-img-top propIMg"
                                                alt="{{$exclu['title']}}"></a>
                                        <div class="propDetOverlay">
                                            <div class="border-bottom">
                                                <a href="{{ url('property/' . $exclu['propertyId']) }}">
                                                    <h5 class="card-title text-uppercase">{{$exclu['title']}}</h5>
                                                </a>
                                            </div>
                                            <div class="d-flex justify-content-start pt-2">
                                                <div class="pe-2">
                                                    <img src="{{asset('frontend/assets/images/icons/bed.svg')}}"
                                                        alt="{{$exclu['title']}}" class="img-fluid filterInverse"
                                                        width="20">
                                                    <span class="align-middle">&nbsp; {{$exclu['bedRooms']== 0 ? 'TBA' : $exclu['bedRooms'] }}</span>
                                                </div>
                                                {{-- <div class="px-2">
                                                    <img src="{{asset('frontend/assets/images/icons/bath.svg')}}"
                                                        alt="{{$exclu['title']}}" width="20"
                                                        class="img-fluid filterInverse">
                                                    <span class="align-middle">&nbsp; 3</span>
                                                </div> --}}
                                                <div class="ps-2">
                                                    <img src="{{asset('frontend/assets/images/icons/area.svg')}}"
                                                        alt="{{$exclu['title']}}" width="20"
                                                        class="img-fluid filterInverse">
                                                    <span class="align-middle">&nbsp; {{$exclu['size'].'
                                                        Sq.Ft.'}}</span>
                                                </div>
                                            </div>
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
    </div>
</section>
@endif

<section>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="row">
                    <div class="col-12 col-lg-12 col-md-12">
                        <div class="secHead pb-4">
                            <h5>Property<span>Listings</span></h5>
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
                    @if(count($properties) > 0)
                    @foreach ($properties as $prop)
                    <div class="col-12 col-lg-4 col-md-4 col-xl-4">
                        <div class="card border-0 mb-3">
                            <div class="propCont p-relative">
                                <a href="{{ url('property/' . $prop['propertyId']) }}"><img
                                        src="{{$prop['photos'][0]}}"
                                        class="card-img-top propIMg" alt="{{$prop['title']}}"></a>
                                <div class="propDetOverlay">
                                    <a href="{{ url('property/' . $prop['propertyId']) }}">
                                        <h5 class="card-title">{{$prop['title']}}</h5>
                                    </a>
                                    <div class="d-flex justify-content-between">
                                        <div class="my-auto">
                                            <p class="mb-0 text-sec">AED {{number_format($prop['price'])}}</p>
                                        </div>
                                        <div class="my-auto">
                                            <a class="btn btn-outline"
                                                href="{{ url('property/' . $prop['propertyId']) }}">Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="d-flex justify-content-between p-3">
                                <div class="pe-1">
                                    <img src="{{asset('frontend/assets/images/icons/bed.svg')}}"
                                        alt="{{$prop['title']}}" width="25" height="25"> <span
                                        class="align-middle">&nbsp;{{$prop['bedRooms'] == 0 ? 'TBA' : $prop['bedRooms'] }}</span>
                                </div>
                                {{-- <div class="px-1">
                                    <img src="{{asset('frontend/assets/images/icons/bath.svg')}}"
                                        alt="{{$prop['title']}}" width="25" height="25"> <span
                                        class="align-middle">3</span>
                                </div> --}}
                                <div class="ps-1">
                                    <img src="{{asset('frontend/assets/images/icons/area.svg')}}"
                                        alt="{{$prop['title']}}" width="25" height="25"> <span
                                        class="align-middle">&nbsp;{{$prop['size'].' Sq.Ft.'}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <div class="col-12 col-lg-12 col-md-12 col-xl-12">
                        <div class="text-center py-4">
                            <p class="text-sec">No Property Found</p>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-12 col-md-12">
                        <div class="secHeadNew text-center py-4">
                            <h5>List<span> With Us!</span></h5>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <div class="container pt-3 pb-5">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="formCont">
                    <form action="" method="post" class="listingForm">
                        @csrf
                        <div class="row ">
                            <div class="col-12 col-lg-6 col-md-6">
                                <label for="">Information</label>
                                <div class="row">
                                    <div class="col-12">
                                        <input type="text" class="form-control" placeholder="I'm a..." name="purpose"
                                            required>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <input type="text" class="form-control" placeholder="First name" name="fname"
                                            required>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <input type="text" class="form-control" placeholder="Last name" name="lname">
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <input type="email" class="form-control" placeholder="Email Address"
                                            name="email" required>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <input type="telephone" class="form-control" placeholder="Mobile" name="phone"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 col-md-6">
                                <label for="">Property</label>
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <select name="property_type" id="property_type" class="form-control" required>
                                            <option value="" hidden>Property Type</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <input type="text" class="form-control" placeholder="Location" name="location"
                                            required>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <input type="text" class="form-control" placeholder="Asking Price" name="price">
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <input type="text" class="form-control" placeholder="Property Size(sq.ft.)"
                                            name="area">
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <input type="text" class="form-control" placeholder="Number of Beds"
                                            name="beds">
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <input type="text" class="form-control" placeholder="Number of Baths"
                                            name="baths">
                                    </div>

                                </div>
                            </div>
                            <div class="col-12 col-lg-12 col-md-12">
                                <label for="">Additional Message or Requests</label>
                                <textarea name="message" id="message" rows="3" class="form-control"
                                    placeholder=""></textarea>
                            </div>
                            <div class="col-12 col-lg-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-primary my-3">SUBMIT</button>
                            </div>

                        </div>
                    </form>
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
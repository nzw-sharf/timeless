@extends('frontend.layout.master')
@section('title', $property['name'])
@section('pageDescription', $website_description)

@section('pageKeyword', $website_keyword)
@section('navbarType','navBarWhite')
@section('content')

{{-- search & breadcrumps --}}
<section class="mt-5 mb-3">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12 col-md-12">
                <div class="row">
                    <div class="col-12 col-lg-12 col-md-12">
                        <div class="d-flex justify-content-start">
                            <ul class="breadcrumbBlue ps-0">
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ route('properties') }}">Properties</a></li>
                                <li><a>{{ $property['name'] }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Property Gallery --}}
@if (count($property['photos']) > 0)

<section class="mb-3 mt-3">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12 col-md-12">
                <div class="d-block d-lg-none d-md-none">
                    <div class="">
                        <div class="owl-carousel owl-theme" id="propGallery">
                            @foreach ($property['photos'] as $key=>$imgs)
                            <div class="item">
                                <div class="">
                                    <center>
                                        <a href="{{ 'https://dataapi.pixxicrm.ae/'.$imgs }}" class="text-decoration-none"
                                            data-toggle="lightbox" data-gallery="feat2-gallery">
                                            <img src="{{ 'https://dataapi.pixxicrm.ae/'.$imgs }}" alt="{{ $property['name'] }}"
                                                class="img-fluid rounded-3">
                                        </a>
                                    </center>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        
                    </div>
                </div>
                <div class="d-none d-lg-block d-md-block">
                    <div class="gallerContentSingle">
                        <div class="gallery-img">
                            @foreach ($property['photos'] as $key => $imgs)
                            @if ($loop->first)
                            <div class="firstImg">
                                <a href="{{ 'https://dataapi.pixxicrm.ae/'.$imgs }}" class="text-decoration-none" data-toggle="lightbox"
                                    data-gallery="feat-gallery">
                                    <img src="{{ 'https://dataapi.pixxicrm.ae/'.$imgs }}" alt="{{ $property['name'] }}"
                                        class="img-fluid rounded-3">
                                </a>
                                <div class="image_count_content">
                                    <div class="me-3">
                                        <a href="{{ 'https://dataapi.pixxicrm.ae/'.$imgs }}" class="text-decoration-none text-black"
                                            data-toggle="lightbox" data-gallery="feat-gallery">
                                            <i class="bi bi-camera2 me-2 fs-18 lh-sm"><span
                                                    class="image_count ms-2 fs-14">Show
                                                    {{ count($property['photos']) }} photos</span></i>

                                        </a>
                                    </div>
                                    <div>
                                        <a data-bs-toggle="modal" data-bs-target="#viewMap"
                                            class="text-decoration-none cursor-pointer text-black">
                                            <i class="bi bi-geo-alt fs-18 lh-sm"><span
                                                    class="image_count ms-2 fs-14">View on map</span></i>

                                        </a>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if ($key == 1)
                            <div class="sideImg">
                                <a href="{{ 'https://dataapi.pixxicrm.ae/'.$imgs }}" class="text-decoration-none" data-toggle="lightbox"
                                    data-gallery="feat-gallery">
                                    <img src="{{ 'https://dataapi.pixxicrm.ae/'.$imgs }}" alt="{{ $property['name'] }}"
                                        class="img-fluid rounded-3">
                                </a>
                            </div>
                            @endif
                            @if ($key == 2)
                            <div class="sideImg">
                                <a href="{{ 'https://dataapi.pixxicrm.ae/'.$imgs }}" class="text-decoration-none" data-toggle="lightbox"
                                    data-gallery="feat-gallery">
                                    <img src="{{ 'https://dataapi.pixxicrm.ae/'.$imgs }}" alt="{{ $property['name'] }}"
                                        class="img-fluid rounded-3">
                                </a>
                            </div>
                            @endif
                            @if ($key != 1 && $key != 2 && !$loop->first)
                            <div class="d-none">
                                <?php for($i=1; $i<=8; $i++){ ?>
                                <a href="{{ 'https://dataapi.pixxicrm.ae/'.$imgs }}" class="text-decoration-none" data-toggle="lightbox"
                                    data-gallery="feat-gallery">
                                </a>
                                <?php } ?>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
{{-- Property Details --}}
<section class="my-3">
    <div class="container">
        <div class="row g-3">
            <div class="col-12 col-lg-8 col-md-12">
                <div class="d-flex justify-content-between py-3 border-bottom">
                    <div>
                        <div class="secHead text-center text-md-start text-lg-start mb-3">
                            <h5 class="text-primary mb-1">{{ $property['name'] }} {{ $property['rootCommunityName'] ? ' -
                                '.$property['rootCommunityName'] : '' }}</h5>
                            <h6 class="mb-1 fw-bold">{{ $property['propertyId'] }}</h6>
                            <small>{{ ($property['communityName'] ? $property['communityName'].' - ' : '') . ($property['regionName'] ? $property['regionName'] : '')}}</small>
                        </div>
                        <div>
                            <ul
                                class="list-unstyled text-center text-md-start text-lg-start propListSmall fs-18 lh-1 my-2">
                                @php 
                                $accomodation = implode(", ",$property['houseType']);
                                @endphp
                               
                                <li class="d-inline"><small class="pe-1 pe-md-3 pe-lg-3"><i class="fa fa-home"
                                            aria-hidden="true"></i>
                                        {{ $accomodation }} </small>
                                </li>
                                <li class="d-inline"><small class="pe-1 pe-md-3 pe-lg-3"><i class="fa fa-bed"
                                            aria-hidden="true"></i>
                                        {{ $property['bedRoomNum'] != 0 ? $property['bedRoomNum'] : 'TBA' }} </small>
                                </li>
                                {{-- <li class="d-inline"><small class="px-1 px-md-3 px-lg-3"><i class="fa fa-bath"
                                            aria-hidden="true"></i>
                                        {{ $property->bathrooms > 0 ? $property->bathrooms : '' }}
                                    </small>
                                </li> --}}
                                <li class="d-inline"><small class="px-1 px-md-3 px-lg-3"><i
                                            class="bi bi-arrows-fullscreen"></i>
                                        {{ $property['size'] > 0 ? $property['size'] : '' }}
                                        SQ.FT</small></li>
                                <li class="d-inline"><small class="px-1 px-md-3 px-lg-3"><i class="bi bi-tag"></i>
                                        AED 
                                        {{ number_format($property['price']) }}</small>
                                </li>
                            </ul>
                        </div>
                    </div>



                </div>
                <div class="py-4 border-bottom">
                    <h6 class="text-primary">Description</h6>
                    <div class="propDesc">
                        <span class="textLessProp d-block">
                            {!! substr(nl2br((preg_replace('/(<\s*\/?\s*\b(div)\b[^>]*\/?\s*>)/i', '',
                                $property['description']))), 0, 440).'...'
                                !!}
                        </span>
                        <span class="textExtraProp d-none">
                            {!! nl2br((preg_replace('/(<\s*\/?\s*\b(div)\b[^>]*\/?\s*>)/i', '',
                                $property['description']))) !!}
                        </span>
                    </div>
                    @if(strlen($property['description']) >= 400)

                    <div>
                        <a class="text-primary readMorePropBtn cursor-pointer text-decoration-underline">View All Details</a>
                        <a class="text-primary readLessPropBtn cursor-pointer  d-none  text-decoration-underline">View
                            Less</a>
                    </div>

                    @endif

                    {{-- <div class="py-2">

                        @if ($property->qrcode)
                        <img src="{{ $property->qrcode }}" alt="{{ $property->name }}" class="img-fluid" width="100px">
                        @endif
                    </div> --}}
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-12">
                <div class="bg-lightBlue p-4 rounded-3">
                    <div class="row g-2 border-bottom pb-3">
                        <div class="col-7 col-lg-8 my-auto">
                            <div class="agentDesc">
                                <h5 class="text-primary text-capitalize mb-0">
                                    {{ $property['agentName'] ? $property['agentName'] : 'Timeless' }}</h5>
                               
                            </div>
                        </div>
                        @if ($property['agentAvatar'])
                        <div class="col-5 col-lg-4 my-auto">
                            <div class="agntImage">
                                <center><img src="{{ 'https://dataapi.pixxicrm.ae/'.$property['agentAvatar'] }}" alt="{{ $property['agentName'] }}"
                                        class="img-fluid rounded-circle agentImageSingle">
                                </center>
                            </div>
                        </div>
                        @endif
                    </div>

                    <div class="row g-1">
                        <div class="col-12 col-lg-12">
                            <div class="pt-3">
                                <div class="d-flex">
                                    <div class="my-auto me-3"><i class="bi bi-clock fs-18"></i></div>
                                    <div class="my-auto fs-14">Arrange a Viewing, 24/7</div>
                                </div>
                                <div class="d-flex">
                                    <div class="my-auto me-3"><i class="bi bi-calendar fs-18"></i></div>
                                    <div class="my-auto fs-14">Choose a Date & Time</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-lg-4  col-md-4 my-auto">
                            <div class="d-none d-lg-block d-md-block mt-3">
                                <a href="#" onclick="event.preventDefault();" title="Contact Number"
                                    data-bs-toggle="popover" data-bs-placement="left" data-bs-trigger="hover focus"
                                    data-bs-content="{{ $property['agentPhone']}}"
                                    class="btn btn-primary w-100 rounded-2 text-decoration-none"><i
                                        class="fa fa-phone"></i></a>
                            </div>
                            <div class="d-block d-lg-none d-md-none mt-3">
                                <a href="tel:{{ $property['agentPhone'] }}"
                                    class="btn btn-primary w-100 rounded-2 text-decoration-none"><i
                                        class="fa fa-phone"></i></a>
                            </div>
                        </div>
                        <div class="col-4 col-lg-4 col-md-4  col-md-4  my-auto">
                            <div class="d-none d-lg-block d-md-block mt-3">
                                <a href="mailto:{{ $property['agentEmail'] }}"
                                    class="btn btn-primary    w-100 rounded-2 text-decoration-none"><i
                                        class="fa fa-envelope"></i></a>
                            </div>
                            <div class="d-block d-lg-none d-md-none mt-3">
                                <a href="mailto:{{ $property['agentEmail'] }}"
                                    class="btn btn-primary    w-100 rounded-2 text-decoration-none"><i
                                        class="fa fa-envelope"></i></a>
                            </div>
                        </div>
                        <div class="col-4 col-lg-4 col-md-4  my-auto">
                            <div class="d-none d-lg-block d-md-block mt-3">
                                <a href="https://wa.me/{{ $whatsapp_number }}?text=Hi {{ $property['agentName']}}, I got your number from the website, I am Inquiring for {{ $property['name'] }}"
                                    target="_blank" class="btn btn-success  w-100 rounded-2 text-decoration-none"><i
                                        class="fa fa-whatsapp"></i></a>
                            </div>
                            <div class="d-block d-lg-none d-md-none mt-3">
                                <a href="https://wa.me/{{ $whatsapp_number }}?text=Hi {{ $property['agentName']}}, I got your number from the website, I am Inquiring for {{ $property['name'] }}"
                                    target="_blank" class="btn btn-success  w-100 rounded-2 text-decoration-none"><i
                                        class="fa fa-whatsapp"></i></a>
                            </div>
                        </div>
                        <div class="col-12 col-lg-12 col-md-12  my-auto">
                            <div class="mt-3 mb-4">
                                <button data-bs-toggle="modal" data-bs-target="#bookView"
                                    propertyUrl="{{ url('property' . '/' . $property['propertyId']) }}"
                                    class="btn btn-primary  w-100 rounded-2 bookViewingBtn"><i
                                        class="fa fa-calendar"></i> Book A Viewing</button>
                            </div>
                        </div>

                        <div class="col-12 col-lg-12 col-md-12  my-auto">
                            <div class="mt-4">
                                @php
                                   $geoCode = explode(',',$property['communityLocation'])
                                @endphp
                                <iframe
                                    src="https://maps.google.com/maps?q={{ $geoCode[0] }},{{ $geoCode[1] }}&z=17&ie=UTF8&iwloc=&output=embed"
                                    width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <div class="">
                                <a data-bs-toggle="modal" data-bs-target="#viewMap"
                                    class="btn btn-primary rounded-bottom rounded-0  w-100 cursor-pointer  text-decoration-none">View
                                    Location Map</a>
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- Mortgage Calculator --}}
@if($property['propertyType'] != 'RENT')
@if($property['price'] != 0)

<section class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12 col-md-12">
                <div class="secHead text-start mb-3">
                    <h5 class="text-primary mb-0">Mortgage <span>Calculator</span> </h5>
                        <small>Get an estimation of how much you will pay</small>
                </div>
            </div>
            <div class="col-12 col-lg-9 col-md-12">
                <div class="bg-secondary p-2 p-lg-4 p-md-4 rounded-3">
                    <div class="row">
                        <div class="col-12 col-lg-7 col-md-7 my-auto borderEnd">
                            <div class="p-2 p-lg-4 p-md-4">
                                <form action="" method="post">
                                    <div class="row">
                                        <div class="col-12 col-lg-6 my-auto">
                                            <label for="" class="fs-14 mb-2">Property
                                                Price(AED)</label>
                                            <input type="text" class="form-control border-0 form-control-lg  fs-14 mb-3"
                                                onkeyup="formatCurrency(this)" name="prop_price" id="prop_price"
                                                maxlength="11" value="{{ number_format($property['price']) }}" readonly>
                                        </div>
                                        <div class="col-12 col-lg-6 my-auto">
                                            <label for="" class="fs-14 mb-2">Down
                                                Payment(AED)</label>
                                            <div class="input-group input-group-solid flex-nowrap">
                                                <input type="text"
                                                    class="form-control w-100 mb-3  fs-14 border-0 border-end"
                                                    id="downpayment" onkeyup="formatCurrency(this)" name="downpayment"
                                                    value="{{number_format((20 / 100) * $property['price'])}}"
                                                    style="border-right:0px;">
                                                <div class="input-group-addon">
                                                    <input type="number"
                                                        class="bg-white form-control   border-0 ps-1 pe-0 rounded-0  mb-3 custom-range"
                                                        min="20" step="1" name="down_pay" max="80" id="down_pay"
                                                        value="20">
                                                </div>
                                                <div class="input-group-addon">
                                                    <span
                                                        class=" form-control bg-white ps-0 rounded-0 rounded-end border-0 mb-3 fs-16">%</span>
                                                </div>

                                            </div>
                                            <small class="feedback text-danger fs-12"></small>
                                        </div>
                                        <div class="col-12 col-lg-6 my-auto">
                                            <label for="" class="fs-14 mb-2">Loan Duration</label>
                                            <div class="input-group">
                                                <input type="number"
                                                    class="form-control border-0 form-control-lg  fs-14 mb-3"
                                                    id="loan_duration" name="loan_duration" value="25" min="1" max="25"
                                                    style="border-right:0px;">
                                                <div class="input-group-text bg-white  border-0 ps-0 mb-3">
                                                    <span class="fs-14">Years</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6 my-auto">
                                            <label for="" class="fs-14 mb-2">Interest Rate</label>
                                            <div class="input-group">
                                                <input type="number"
                                                    class="form-control border-0 form-control-lg  fs-14 mb-3"
                                                    name="rate" id="rate" value="4.99" style="border-right:0px;">
                                                <div class="input-group-text bg-white  border-0 ps-0 mb-3">
                                                    <span class="fs-14">%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-12 col-lg-5 col-md-5 my-auto">
                            <div class="p-2 p-lg-4 p-md-4">
                                <div class=" mb-3">
                                    <p class="mb-0">Monthly Repayments</p>
                                    <h3 class="text-primary">AED <span class="prop_price">12,000</span> </h3>
                                    <small class="fs-12">*Estimated initial monthly payments based on a AED
                                        1,000,000 purchase price with a 4.8% fixed interest rate.</small>
                                </div>
                                <div>
                                    <button type="submit" data-bs-toggle="modal" data-bs-target="#mortgageConsultation"
                                        class="btn btn-md w-100 btn-primary">Get
                                        Consultation</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
@endif

{{-- Related Properties --}}
@if (count($similarProperty) > 0)
<section class="my-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-12 col-md-12">
                <div class="row">
                    <div class="col-12 col-lg-12 col-md-12">
                        <div class="secHead text-start mb-3">
                            <h5 class="text-primary">Other properties which may <span>interest you</span></h5>
                        </div>
                    </div>
                    <div class="col-12 col-lg-12 col-md-12">
                        <div class="py-3 px-1">
                            <div class="owl-carousel owl-theme" id="similarListing">
                                @foreach ($similarProperty as $prop)
                                <div class="item">
                                    <div class="card border-0 mb-3">
                                        <div class="propCont p-relative">
                                            <a href="{{ url('property/' . $prop['propertyId']) }}"><img src="{{$prop['photos'][0]}}"
                                                    class="card-img-top propIMg" alt="{{$prop['title']}}"></a>
                                            <div class="propDetOverlay">
                                                <a href="{{ url('property/' . $prop['propertyId']) }}">
                                                    <h5 class="card-title mb-0">{{$prop['title']}}</h5>
                                                </a>
                                                <div class="d-flex justify-content-between">
                                                    <div class="my-auto">
                                                        <p class="mb-0 text-sec">AED {{number_format($prop['price'])}}</p>
                                                    </div>
                                                    <div class="my-auto">
                                                        <a class="btn btn-outline" href="{{ url('property/' . $prop['propertyId']) }}">Details</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
            
            
                                        <div class="d-flex justify-content-between p-2">
                                            <div class="pe-1">
                                                <img src="{{asset('frontend/assets/images/icons/bed.svg')}}"
                                                    alt="Timeless" width="20" class="img-fluid Icons"> <span class="align-middle"> &nbsp;{{$prop['bedRooms'] }}</span>
                                            </div>
                                            {{-- <div class="px-2">
                                                <img src="{{asset('frontend/assets/images/icons/bath.svg')}}"
                                                    alt="Timeless" width="20" class="img-fluid"> <span class="align-middle"> &nbsp;3</span>
                                            </div> --}}
                                            <div class="ps-1">
                                                <img src="{{asset('frontend/assets/images/icons/area.svg')}}"
                                                    alt="Timeless" width="20" class="img-fluid Icons"> <span class="align-middle"> &nbsp;{{$prop['size'].' Sq.Ft.'}}</span>
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

<!-- View Map-->
<div class="modal fade" id="viewMap" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content bg-primary">
            <div class="modal-header border-0 bg-primaryLight justify-content-center">
                <button type="button" class="bg-transparent border-0" data-bs-dismiss="modal" aria-label="Close"><i
                        class="bi bi-x-circle text-white fa-2x"></i></button>
            </div>
            <div class="modal-body d-flex flex-column justify-content-center">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-12 col-md-12">
                        <div class="">
                            @php
                                   $geoCode = explode(',',$property['communityLocation'])
                                @endphp
                                <iframe
                                    src="https://maps.google.com/maps?q={{ $geoCode[0] }},{{ $geoCode[1] }}&z=17&ie=UTF8&iwloc=&output=embed"
                                    width="100%" height="800px" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
<!-- Mortgage Consultation-->
<div class="modal fade" id="mortgageConsultation" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-primary">
            <div class="modal-header pb-0 border-0 bg-primary justify-content-end">
                <button type="button" class="bg-transparent border-0" data-bs-dismiss="modal" aria-label="Close"><i
                        class="bi bi-x-circle text-white fa-2x"></i></button>
            </div>
            <div class="modal-body d-flex flex-column justify-content-center">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-12 col-md-12">
                        <div class="secHead text-center mb-3">
                            <h5 class="text-white">Get Free <span> Consultation</span></h5>
                        </div>
                    </div>
                    <div class="col-12 col-lg-12 col-md-12">
                        @php
                        
                        $url = url('property' . '/' . $property['propertyId']);

                        @endphp
                        <div class="modalViewFormCont p-3">
                            <form action="" id="modalViewForm" method="post">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-12">
                                        <label for="name" class="form-label">Full Name*</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Full Name*" required>
                                        <input type="hidden" class="form-control" id="formName" name="formName"
                                            value="Mortgage Consultation">
                                        <input type="hidden" class="form-control" id="propName" name="propName"
                                            value="{{ $url }}">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email*</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Email*" required>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="mobile" class="form-label">Mobile*</label>
                                        <input id="fullNumber5" type="hidden" name="fullNumber">
                                        <input type="tel" class="form-control contField" id="telephone5" name="phone"
                                            placeholder="Mobile*" required>

                                    </div>
                                    <div class="col-md-12">
                                        <label for="date" class="form-label">Message</label>
                                        <textarea name="message" id="message" rows="4"
                                            class="form-control contField rounded-3"></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="d-grid ">
                                            <button type="submit" class="btn btn-white text-uppercase">Submit
                                                Details</button>
                                        </div>
                                      
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Book Viewing modal -->
<div class="modal fade" id="bookView" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-primary">
            <div class="modal-header pb-0 border-0 bg-primary justify-content-end">
                <button type="button" class="bg-transparent border-0" data-bs-dismiss="modal" aria-label="Close"><i
                        class="bi bi-x-circle text-white fa-2x"></i></button>
            </div>
            <div class="modal-body d-flex flex-column justify-content-center">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-12 col-md-12">
                        <div class="secHead text-center mb-3">
                            <h5 class="text-white">Arrange a <span> viewing</span></h5>
                        </div>
                    </div>
                    <div class="col-12 col-lg-12 col-md-12">
                        <div class="modalViewFormCont p-3">
                            <form action="" id="modalViewForm" method="post">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-12">
                                        <label for="name" class="form-label">Full Name*</label>
                                        <input type="text" class="form-control" id="name" name="nameCon2"
                                            placeholder="Full Name*" required>
                                        <input type="hidden" class="form-control" id="formName" name="formFrom"
                                            value="Book A Viewing Properties" required>
                                        <input type="hidden" class="form-control" id="propName2" name="propName"
                                            value="" required>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email*</label>
                                        <input type="email" class="form-control" id="email" name="emailCon2" required
                                            placeholder="Email*">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="mobile" class="form-label">Mobile*</label>
                                        <input id="fullNumber" type="hidden" name="fullNumber">
                                        <input type="tel" onkeyup="numbersOnly(this)" class="form-control contField"
                                            id="telephone" name="phone" placeholder="Mobile*" required>

                                    </div>
                                    <div class="col-md-6">
                                        <label for="date" class="form-label">Prefered Date*</label>
                                        <input type="date" class="form-control" id="date" name="ths_date"
                                            placeholder="Prefered Date*" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="time" class="form-label">Prefered Time*</label>
                                        <input type="time" class="form-control" id="time" name="ths_time"
                                            placeholder="Prefered Time*" required>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="d-grid ">
                                            <button type="submit" class="btn btn-white text-uppercase">Submit
                                                Details</button>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
    $(document).on('click', '.bookViewingBtn', function() {
            var formName = $(this).attr("propertyUrl");
            $("#propName2").val(formName);
        });
</script>
<script>
    $(document).ready(function() {
            var cat = "<?php echo $property['propertyType']; ?>"
            var price = "<?php echo $property['price']; ?>"
           
            if(cat != 'RENT'){
                if(price != "0"){
                  
                    calculate();
                }
            }
        });
        function formatNumber(n) {
            // format number 1000000 to 1,234,567
            return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }

        function formatCurrency(input) {
            var input_val = input.value;
            // don't validate empty input
            if (input_val === "") {
                return;
            }

            var original_len = input_val.length;

            // initial caret position
            var caret_pos = input.selectionStart;

            // check for decimal
            if (input_val.indexOf(".") >= 0) {
                // get position of first decimal
                // this prevents multiple decimals from
                // being entered
                var decimal_pos = input_val.indexOf(".");

                // split number by decimal point
                var left_side = input_val.substring(0, decimal_pos);
                var right_side = input_val.substring(decimal_pos);

                // add commas to left side of number
                left_side = formatNumber(left_side);

                // validate right side
                right_side = formatNumber(right_side);



                // Limit decimal to only 2 digits
                right_side = right_side.substring(0, 2);

                // join number by .
                input_val = left_side + "." + right_side;
            } else {
                // no decimal entered
                // add commas to number
                // remove all non-digits
                input_val = formatNumber(input_val);
                input_val = input_val;

            }

            // send updated string to input
            input.value = input_val;

            // put caret back in the right position
            var updated_len = input_val.length;
            caret_pos = updated_len - original_len + caret_pos;
            input.setSelectionRange(caret_pos, caret_pos);
        }

        function formatDown(input) {
            var input_val = input;
            // don't validate empty input
            if (input_val === "") {
                return;
            }

            // no decimal entered
            // add commas to number
            // remove all non-digits
            input_val = formatNumber(input_val);
            input_val = input_val;;

            return input_val;
        }
        $("#prop_price").on("input", function() {
            var price = parseInt($(this).val().replace(/,/g, ''));

            if (isNaN(price)) {
                var down = 0;
                var perc = 20;
            } else if (price > 0 && price < 50000000) {
                var down2 = (20 / 100) * price;
                var downpay = down2;
                var perc = 20;
                var down = formatDown(down2.toString());
            } else {

                var down1 = (30 / 100) * price;
                var downpay = down1;
                var perc = 30;
                var down = formatDown(down1.toString());
            }
            // alert("hi");

            $("#downpayment").val(down);
            $("#down_pay").attr("min", perc);
            $("#down_pay").val(perc);
            calculate();
        });
        $("#rate").on("input", function() {
            var perc = $(this).val();
            calculate();
        });

        $(document).on('input ', '#loan_duration', function() {
            var newval = $(this).val();
            calculate();
        });
        $(document).on('input ', '#down_pay', function() {

            var newval = $(this).val();
            var price = parseInt($("#prop_price").val().replace(/,/g, ''));
            var down2 = (newval / 100) * price;
            var downpay = down2;
            var down = formatDown(down2.toString());
            $("#downpayment").val(down);
            calculate();
        });
        $(document).on('input', '#downpayment', function() {
            var newPerc = parseInt($(this).val().replace(/,/g, ''));

            var priceNew = parseInt($("#prop_price").val().replace(/,/g, ''));
            minPrice = (20 / 100) * priceNew;
            maxPrice = (80 / 100) * priceNew;

            if(newPerc < maxPrice && newPerc > minPrice){
                alert("hi");
                var perc = (newPerc/priceNew ) * 100;
                $("#down_pay").val(perc);
                calculate();
            }else{
            //    $(".feedback").html("Downpayment should be between 20% to 80% of price");
            }

        });
        

        function calculate() {

            //Look up the input and output elements in the document
            var price = parseInt($("#prop_price").val().replace(/,/g, ''));
            var rate = $("#rate").val();

            var downPay =  parseInt($("#downpayment").val().replace(/,/g, ''));

            var term = $("#loan_duration").val();

            var amountBorrowed = price - downPay;
            var pmt = calculateMortgage(amountBorrowed, rate, term);
            $(".prop_price").html(pmt);
            // var priceMonth = ((price - downPay)  * ( Math.pow(rate *(1 + rate), month) ) )/ ( (Math.pow(1 + rate,month) ) - 1 );

        }

        function calculateMortgage(p, r, n) {
            r = percentToDecimal(r);
            n = yearsToMonths(n);
            var pmt = (r * p) / (1 - (Math.pow((1 + r), (-n))));
            return parseFloat(pmt.toFixed(2));
        }

        function percentToDecimal(percent) {
            return (percent / 12) / 100;
        }

        function yearsToMonths(year) {
            return year * 12;
        }
</script>

<script>
    (g=>{var h,a,k,p="The Google Maps JavaScript API",c="google",l="importLibrary",q="__ib__",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement("script"));e.set("libraries",[...r]+"");for(k in g)e.set(k.replace(/[A-Z]/g,t=>"_"+t[0].toLowerCase()),g[k]);e.set("callback",c+".maps."+q);a.src=`https://maps.${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+" could not load."));a.nonce=m.querySelector("script[nonce]")?.nonce||"";m.head.append(a)}));d[l]?console.warn(p+" only loads once. Ignoring:",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})
        ({key: "AIzaSyChuU-X16agmkNHRIw5mqaFTcsMsSlASBs", v: "weekly"});
</script>

@endsection
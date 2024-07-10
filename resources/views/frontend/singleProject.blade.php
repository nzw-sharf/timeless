@extends('frontend.layout.master')

@section('title', $project['name'])

@section('pageDescription', $website_description)

@section('pageKeyword', $website_keyword)

@section('content')
{{-- main banner --}}
<section class="mainBanner justify-content-center"
    style="background:url('{{ 'https://dataapi.pixxicrm.ae/'.$project['photos'][0] }}');min-height:90vh !important;">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12">
                <h1 class="bannerHeading  text-white text-center mb-0">{{ $project['name'] }}</h1>
            </div>
            <div class="col-12 col-lg-12">
                <div class="position-bottom">
                    <div class="d-flex justify-content-center px-3 mt-3 pb-3">
                        <ul class="breadcrumb">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="">Project</a></li>
                            <li><a>{{ $project['name'] }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- About --}}
<section class="bg-secondary py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-12 col-md-12">
                <div class="row g-3">

                    <div class="col-12 col-lg-12 col-md-12">
                        <div>
                            <div class="secHead text-start mb-3">
                                <h5 class="text-primary">Pinnacle of Modern Living at {{ $project['regionName'] }} by
                                    <span>Timeless Properties</span>
                                </h5>
                            </div>
                            <div class="d-block d-md-none d-lg-none">
                                <div class="mb-3">
                                    <div class="owl-carousel owl-theme justify-content-center" id="projDetailSlide">
                                        @if ($project['price'])
                                        <div class="item">
                                            <div class="d-flex justify-content-center h-100">
                                                <div class="my-auto me-3">
                                                    <center>
                                                        <img src="{{ asset('frontend/assets/images/icons/wallet.png') }}"
                                                            alt="Unique Properties Logo "
                                                            class="img-fluid amenityImg50">
                                                    </center>
                                                </div>
                                                <div class="text-primary my-auto">
                                                    <h6 class="fw-bold mb-0">AED {{ $project['price'] }}</h6>
                                                    <p class="fs-12 text-secondary mb-0">Starting Price</p>
                                                </div>
                                            </div>

                                        </div>
                                        @endif
                                        @if ($project['newParameter']['handoverTime'])
                                        <div class="item">
                                            <div class="d-flex justify-content-center h-100">
                                                <div class="my-auto me-3">
                                                    <center>
                                                        <img src="{{ asset('frontend/assets/images/icons/home.png') }}"
                                                            alt="Unique Properties Logo "
                                                            class="img-fluid amenityImg50">
                                                    </center>
                                                </div>
                                                <div class="text-primary  my-auto">
                                                    <h6 class="fw-bold mb-0">{{ date('M Y',
                                                        strtotime($project['newParameter']['handoverTime'])) }}</h6>
                                                    <p class="fs-12 text-secondary mb-0">Completion Date</p>
                                                </div>
                                            </div>

                                        </div>
                                        @endif
                                        @if ($project['newParameter']['minSize'] || $project['newParameter']['maxSize'])
                                        <div class="item">
                                            <div class="d-flex justify-content-center h-100">
                                                <div class="my-auto me-3">
                                                    <center>
                                                        <img src="{{ asset('frontend/assets/images/icons/plot.png') }}"
                                                            alt="Unique Properties Logo "
                                                            class="img-fluid amenityImg50">
                                                    </center>
                                                </div>
                                                <div class="text-primary  my-auto">
                                                    <h6 class="fw-bold mb-0">
                                                        {{ $project['newParameter']['minSize'].
                                                        '-'.$project['newParameter']['maxSize'] }} Sq.Ft.

                                                    </h6>
                                                    <p class="fs-12 text-secondary mb-0">Total Area</p>
                                                </div>
                                            </div>

                                        </div>
                                        @endif
                                        @if ($project['houseType'])
                                        <div class="item">
                                            <div class="d-flex justify-content-center h-100">
                                                <div class="my-auto me-3">
                                                    <center>
                                                        <img src="{{ asset('frontend/assets/images/icons/apartment.png') }}"
                                                            alt="Unique Properties Logo "
                                                            class="img-fluid amenityImg50">
                                                    </center>
                                                </div>
                                                <div class="text-primary  my-auto">
                                                    <h6 class="fw-bold mb-0">
                                                        {{ implode(", ",$project['houseType']) }}</h6>
                                                    <p class="fs-12 text-secondary mb-0">Property Type</p>
                                                </div>
                                            </div>

                                        </div>
                                        @endif
                                        @if ($project['regionName'])
                                        <div class="item">
                                            <div class="d-flex justify-content-center h-100">
                                                <div class="my-auto me-3">
                                                    <center>
                                                        <img src="{{ asset('frontend/assets/images/icons/map.png') }}"
                                                            alt="Unique Properties Logo "
                                                            class="img-fluid amenityImg50">
                                                    </center>
                                                </div>
                                                <div class="text-primary  my-auto">
                                                    <h6 class="fw-bold mb-0">{{ $project['regionName'] }}</h6>
                                                    <p class="fs-12 text-secondary mb-0">Location</p>
                                                </div>
                                            </div>

                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="d-grid gap-3 d-none d-md-flex d-lg-flex pt-3 flex-wrap">
                                <button class="btn btn-primary btnRegisterDownload rounded-pill px-3"
                                    data-bs-toggle="modal" data-bs-target="#modalView"
                                    propertyUrl="{{ url('project' . '/' . $project['propertyId']) }}"  formName="Download Brochure"
                                    type="button">Download
                                    Brochure</button>

                                <button id="floorplan" class="btn btn-primary btnRegisterDownload rounded-pill px-3"
                                    data-bs-toggle="modal" data-bs-target="#modalView"
                                    propertyUrl="{{ url('project' . '/' . $project['propertyId']) }}" formName="Download Floor Plan"
                                    type="button">Download
                                    Floor Plan </button>

                                <button class="btn btn-primary btnModal  rounded-pill px-3" data-bs-toggle="modal"
                                    data-bs-target="#modalView"
                                    propertyUrl="{{ url('project' . '/' . $project['propertyId']) }}"
                                    formName="Enquire Now" type="button">Enquire Now</button>
                            </div>
                            {{-- <div class="d-grid gap-3 d-none d-md-flex d-lg-flex pt-3">

                            </div> --}}
                        </div>
                    </div>
                    <div class="col-12 col-lg-12 col-md-12">
                        <div class="mb-3">
                            <div class="my-auto">
                                <h5 class="mb-0 text-primary">Off-Plan property launched by
                                    {{ $project['developerName'] }}
                                </h5>
                                <h6 class="mb-0 text-primary">
                                    @if($project['price'])
                                    Starting Price: AED {{ $project['price'] }}
                                    @else

                                    @endif
                                </h6>
                            </div>
                        </div>
                        <div>
                            <div class="propDesc d-none d-md-block d-lg-block">
                                <div class="textLessProp d-block">

                                    {!! substr(strip_tags($project['description']), 0, 500) !!}
                                </div>
                                <div class="textExtraProp d-none">
                                    {!! $project['description'] !!}
                                </div>
                                @if(strlen(strip_tags($project['description'])) >= 600)
                                <a class="text-primary readMorePropBtn cursor-pointer">Read More</a>
                                <a class="text-primary readLessPropBtn cursor-pointer  d-none">Read
                                    Less</a>
                                @endif
                            </div>
                            <div class="propDesc d-block d-md-none d-lg-none">
                                <div class="textLessProp d-block">
                                    {!! substr(strip_tags($project['description']), 0, 300) !!}
                                </div>
                                <div class="textExtraProp d-none">
                                    {!! $project['description'] !!}
                                </div>
                                @if(strlen(strip_tags($project['description'])) >= 300)
                                <a class="text-primary readMorePropBtn cursor-pointer">Read More</a>
                                <a class="text-primary readLessPropBtn cursor-pointer  d-none">Read
                                    Less</a>
                                @endif
                            </div>
                        </div>
                        <div class="d-grid gap-3 d-flex flex-wrap d-md-none d-lg-none pt-3">

                            <button class="btn btn-primary rounded-pill btnRegisterDownload px-3"
                                propertyUrl="{{ url('project' . '/' . $project['propertyId']) }}" data-bs-toggle="modal"
                                data-bs-target="#modalView" formName="Download Brochure" type="button">Download
                                Brochure</button>

                            <button id="floorplan" class="btn btn-primary rounded-pill btnRegisterDownload px-3"
                                propertyUrl="{{ url('project' . '/' . $project['propertyId']) }}" data-bs-toggle="modal"
                                data-bs-target="#modalView" formName="Download Floor Plan" type="button">Download
                                Floor Plan </button>

                            <button class="btn btn-primary  rounded-pill btnModal px-3"
                                propertyUrl="{{ url('project' . '/' . $project['propertyId']) }}" data-bs-toggle="modal"
                                data-bs-target="#modalView" formName="Enquire Now" type="button">Enquire Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Project Detail --}}

<section class="mb-5 bg-secondary d-none d-md-block d-lg-block py-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-12 col-md-12">
                <div class="row">
                    <div class="col-12 col-lg-12 col-md-12">
                        <div class="pb-5 swiperProDet">
                            <div class="owl-carousel owl-theme justify-content-center" id="projDetailSlide">
                                @if ($project['price'])
                                <div class="item">
                                    <div class="d-flex justify-content-center">
                                        <div class="my-auto me-3">
                                            <center>
                                                <img src="{{ asset('frontend/assets/images/icons/wallet.png') }}"
                                                    alt="Unique Properties Logo " class="img-fluid amenityImg50">
                                            </center>
                                        </div>
                                        <div class="text-primary  my-auto">
                                            <h6 class="fw-bold mb-0">AED {{ $project['price'] }}</h6>
                                            <p class="fs-12 text-secondary mb-0">Starting Price</p>
                                        </div>
                                    </div>

                                </div>
                                @endif
                                @if ($project['newParameter']['handoverTime'])
                                <div class="item">
                                    <div class="d-flex justify-content-center">
                                        <div class="my-auto me-3">
                                            <center>
                                                <img src="{{ asset('frontend/assets/images/icons/home.png') }}"
                                                    alt="Unique Properties Logo " class="img-fluid amenityImg50">
                                            </center>
                                        </div>
                                        <div class="text-primary  my-auto">
                                            <h6 class="fw-bold mb-0">{{ date('M Y',
                                                strtotime($project['newParameter']['handoverTime'])) }}</h6>
                                            <p class="fs-12 text-secondary mb-0">Completion Date</p>
                                        </div>
                                    </div>

                                </div>
                                @endif
                                @if ($project['newParameter']['minSize'] || $project['newParameter']['maxSize'])
                                <div class="item">
                                    <div class="d-flex justify-content-center">
                                        <div class="my-auto me-3">
                                            <center>
                                                <img src="{{ asset('frontend/assets/images/icons/plot.png') }}"
                                                    alt="Unique Properties Logo " class="img-fluid amenityImg50">
                                            </center>
                                        </div>
                                        <div class="text-primary  my-auto">
                                            <h6 class="fw-bold mb-0">{{ $project['newParameter']['minSize'] .'-'.
                                                $project['newParameter']['maxSize'] }}
                                                Sq.Ft.</h6>
                                            <p class="fs-12 text-secondary mb-0">Total Area</p>
                                        </div>
                                    </div>

                                </div>
                                @endif
                                @if ($project['houseType'])
                                <div class="item">
                                    <div class="d-flex justify-content-center">
                                        <div class="my-auto me-3">
                                            <center>
                                                <img src="{{ asset('frontend/assets/images/icons/apartment.png') }}"
                                                    alt="Unique Properties Logo " class="img-fluid amenityImg50">
                                            </center>
                                        </div>
                                        <div class="text-primary  my-auto">
                                            <h6 class="fw-bold mb-0">
                                                {{ implode(", ",$project['houseType']) }}</h6>
                                            <p class="fs-12 text-secondary mb-0">Property Type</p>
                                        </div>
                                    </div>

                                </div>
                                @endif
                                @if ($project['regionName'])
                                <div class="item">
                                    <div class="d-flex justify-content-center">
                                        <div class="my-auto me-3">
                                            <center>
                                                <img src="{{ asset('frontend/assets/images/icons/map.png') }}"
                                                    alt="Unique Properties Logo " class="img-fluid amenityImg50">
                                            </center>
                                        </div>
                                        <div class="text-primary  my-auto">
                                            <h6 class="fw-bold mb-0">{{ $project['regionName'] }}</h6>
                                            <p class="fs-12 text-secondary mb-0">Location</p>
                                        </div>
                                    </div>

                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Features --}}
@if ($project['newParameter']['amenities'] != null)
<section class="my-5">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-12 col-lg-12 col-md-12 my-auto">


                <div class="mb-3">
                    <div class="my-auto">
                        <h5 class="mb-0 text-primary">Amenities</h5>
                    </div>
                </div>
                <div>
                    <div class="py-3 px-1 amenitySlider">
                        <div class="owl-carousel owl-theme" id="AmenitySlide">
                            @php
                                $allAmenity = explode(',',$project['newParameter']['amenities']);
                            @endphp
                            @foreach ($allAmenity as $ameni)
                            @foreach ($amenities as $item)
                            @if ($item['code'] == $ameni)
                            <div class="item h-auto my-3">
                                <div
                                    class="shadow text-center w-100 h-100 d-flex flex-column justify-content-center p-2 rounded-3">
                                    {{-- <div class="mb-1">
                                        <center>
                                            <img src="{{ $ameni->image ? $ameni->image : asset('frontend/assets/images/icons/home.png') }}"
                                                alt="{{ $ameni->name }}" class="img-fluid amenityImg">
                                        </center>
                                    </div> --}}
                                    <div class="text-primary my-auto">
                                        <p class="fs-12 text-primary  fw-semibold mb-0">
                                            {{ $item['label'] }}</p>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach

                            @endforeach
                        </div>
                        
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endif
{{-- Locations --}}
<section class="my-5" id="location">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-12 col-md-12">
                <div class="row  justify-content-center">
                    @if ($project['newParameter']['position'])
                    <div class="col-12 col-lg-12 col-md-12">
                        <div class="secHead text-center mb-3">
                            <h2 class="text-primary">Location</h2>
                        </div>
                    </div>
                    @php
                                   $geoCode = explode(',',$project['newParameter']['position'])
                                @endphp
                    @if (count($project['photos']) > 0)
                    <div class="col-12 col-lg-6 col-md-6">
                        <div>
                            
                            <div>
                                <iframe
                                    src="https://maps.google.com/maps?q={{ $geoCode[0] }},{{ $geoCode[1] }}&z=17&ie=UTF8&iwloc=&output=embed"
                                    width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="col-12 col-lg-12 col-md-12">
                        <div>
                            <div>
                                <iframe
                                    src="https://maps.google.com/maps?q={{ $geoCode[0] }},{{ $geoCode[1] }}&z=17&ie=UTF8&iwloc=&output=embed"
                                    width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endif
                    @if (count($project['photos']) > 0)
                    <div class="col-12 col-lg-6 col-md-6">
                        <div class="owl-carousel owl-theme justify-content-center" id="exclusiveSlide">
                            @foreach ($project['photos'] as $key => $imgs)
                            <div class="item">

                                <a href="{{'https://dataapi.pixxicrm.ae/'. $imgs }}" data-toggle="lightbox"
                                    data-gallery="example-gallery">
                                    <img src="{{ 'https://dataapi.pixxicrm.ae/'.$imgs }}" class="img-fluid projectiMGS rounded-3"
                                        alt="{{ $project['name'] }}">
                                </a>

                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Gallery --}}
@if (count($project['newParameter']['style']) > 0)
<section class="my-5" id="gallery">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-12 col-md-12">
                <div class="row">
                    <div class="col-12 col-lg-12 col-md-12">
                        <div class="secHead text-center mb-3">
                            <h2 class="text-primary">{{ $project['name'] }}</h2>
                        </div>
                    </div>
                    <div class="col-12 col-lg-12 col-md-12  my-auto">
                        <div class="">
                            <ul class="nav latestTabs galleryTab justify-content-center nav-pills mb-3" id="pills-tab"
                                role="tablist">
                                @foreach ($project['newParameter']['style'] as $key => $floorplan2)
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link " id="floor{{$key}}TabBtn" data-bs-toggle="pill"
                                        data-bs-target="#floor{{$key}}Tab" type="button" role="tab"
                                        aria-controls="floor{{$key}}Tab" aria-selected="true">{{$floorplan2['name']}}</button>
                                </li>
                                @endforeach
                                
                            </ul>
                        </div>
                        <div>
                            <div class="tab-content galleryTabContent" id="pills-tabContent">

                                @foreach ($project['newParameter']['style'] as $key => $floorplan)
                                <div class="tab-pane  fade" id="floor{{$key}}Tab" role="tabpanel"
                                    aria-labelledby="floor{{$key}}TabBtn" tabindex="0">
                                    <div class="pt-3">
                                        <div class="row">
                                            <div class="col-12 col-lg-4 col-md-4 ">
                                               <div class="p-4 bg-secondary">
                                                <div class="my-auto">
                                                    <p class="text-sec"><i class="fa fa-home"></i> {{ $floorplan['title'] }}</p>
                                                </div>
                                                <div class="my-auto">
                                                    <p class="text-sec"><i class="bi bi-tag"></i> AED {{ $floorplan['price'] }}</p>
                                                </div>
                                                <div class="my-auto">
                                                    <p class="text-sec"><i
                                                        class="bi bi-arrows-fullscreen"></i> {{ $floorplan['area'] }} Sq.Ft.</p>
                                                </div>
                                               </div>
                                            </div>
                                            <div class="col-12 col-lg-8 col-md-8">
                                                <div>
                                                    <center><img src="{{ 'https://dataapi.pixxicrm.ae/'.$floorplan['imgUrl'][0] }}" class="img-fluid rounded-3"
                                                                alt="{{ $floorplan['name'] }}" width="50%"></center>
                                                                <div class="d-flex justify-content-between">
                                                                   
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
    </div>
</section>
@endif
{{-- Payment Plan --}}
@if (($project['newParameter']['paymentPlan']) != '')
<section class="my-5 " id="payment">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-12 col-md-12">
                <div class="row g-3 justify-content-center payFull">
                    <div class="col-12 col-lg-12 col-md-12">
                        <div class="secHead text-center mb-3">
                            <h5 class="text-primary">Payment Plan</h5>
                        </div>
                    </div>
                    @php
                    $res = preg_replace( '/[^A-Za-z0-9\-]/','',"{\"one\":\"10\",\"two\":\"35\",\"three\":\"5\",\"four\":\"50\"}");  
$rep = str_replace(['one','two','three','four'],' ',$res);
$payment = explode(' ',$rep);
                                @endphp
                                
                    @foreach ($payment as $key => $pay)
                   
                    @if($key != 0)
                    @if ($pay != 0)
                    <div class="col-4 col-lg-3 col-md-3 my-auto payPlan">
                        <div class="text-center py-3">
                            <h2 class="text-primary fw-semibold mb-0">{{ $pay }}%</h2>
                            {{-- <p class="text-primary fw-semibold">{{ $pay->name }}</p> --}}
                        </div>
                    </div>
                    @endif
                    
                    @endif
                    @endforeach
                    <div class="col-12 col-lg-12 col-md-12">
                        <div class="text-center">
                            <button class="btn btn-primary btnRegisterDownload px-3"
                                propertyUrl="{{ url('project' . '/' . $project['propertyId']) }}"  formName="Download Payment Plan"
                                data-bs-toggle="modal" data-bs-target="#modalView" type="button">Download
                                Full Payment Plan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif


{{-- Related Properties --}}
@if (count($similarProjects) > 0)
<section class="mt-5 bg-lightBlue py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-12 col-md-12">
                <div class="row">
                    <div class="col-12 col-lg-12 col-md-12">
                        <div class="secHead text-center mb-3">
                            <h5 class="text-primary">Other <span> Projects</span></h5>
                        </div>
                    </div>
                    <div class="col-12 col-lg-12 col-md-12">
                        <div class="">
                            <div class="owl-carousel owl-theme" id="similarListing">
                                @foreach ($similarProjects as $prop)
                                <div class="item">
                                    <div class="card border-0 mb-3">
                                        <div class="propCont p-relative">
                                            <a href="{{ url('project/' . $prop['propertyId']) }}"><img src="{{$prop['photos'][0]}}"
                                                    class="card-img-top propIMg" alt="{{$prop['title']}}"></a>
                                            <div class="propDetOverlay">
                                                <a href="{{ url('project/' . $prop['propertyId']) }}">
                                                    <h5 class="card-title mb-0">{{$prop['title']}}</h5>
                                                </a>
                                                <div class="d-flex justify-content-between">
                                                    <div class="my-auto">
                                                        <p class="mb-0 text-sec">AED {{$prop['price']}}</p>
                                                    </div>
                                                    <div class="my-auto">
                                                        <a class="btn btn-outline" href="{{ url('project/' . $prop['propertyId']) }}">Details</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
            
            
                                        <div class="d-flex justify-content-between p-2">
                                            <div class="pe-1">
                                                <img src="{{asset('frontend/assets/images/icons/bed.svg')}}"
                                                    alt="{{  $name }}" width="20" class="img-fluid Icons"> <span class="align-middle"> &nbsp;{{$prop['newParam']['bedroomMin'] . '-' .$prop['newParam']['bedroomMax'] }}</span>
                                            </div>
                                            {{-- <div class="px-2">
                                                <img src="{{asset('frontend/assets/images/icons/bath.svg')}}"
                                                    alt="{{  $name }}" width="20" class="img-fluid"> <span class="align-middle"> &nbsp;3</span>
                                            </div> --}}
                                            <div class="ps-1">
                                                <img src="{{asset('frontend/assets/images/icons/area.svg')}}"
                                                    alt="{{  $name }}" width="20" class="img-fluid Icons"> <span class="align-middle"> &nbsp;{{$prop['newParam']['minSize'] . '-'. $prop['newParam']['maxSize'].' Sq.Ft.'}}</span>
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

<!-- Pre Register modal -->
<div class="modal fade" id="modalView" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-primary">
            <div class="modal-header border-0 bg-primary justify-content-end pb-0">
                <button type="button" class="bg-transparent border-0" data-bs-dismiss="modal" aria-label="Close"><i
                        class="bi bi-x-circle text-white fa-2x"></i></button>
            </div>
            <div class="modal-body d-flex flex-column justify-content-center">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-12 col-md-12">
                        <div class="secHead text-center mb-3">
                            <h2 class="text-white formName">PRE-BOOK NOW</h2>
                        </div>
                    </div>
                    <div class="col-12 col-lg-12 col-md-12">
                        <div class="modalViewFormCont p-3 pb-5">
                            <form action="" id="modalViewForm" method="post">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-12">
                                        <label for="name" class="form-label">Full Name*</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Full Name*" required>
                                        <input type="hidden" class="form-control" id="formName" name="formName" value=""
                                            required>
                                        <input type="hidden" class="form-control" id="fileUrl" name="fileUrl" value="">
                                        <input type="hidden" class="form-control" id="propName" name="propName" value=""
                                            required>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email*</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Email*" required>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="mobile" class="form-label">Mobile*</label>
                                        <input id="fullNumber" type="hidden" name="fullNumber">
                                        <input type="tel" class="form-control contField" id="telephone" name="phone"
                                            placeholder="Mobile*" required>

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
    $(document).ready(function() {
        $(".galleryTab li:first .nav-link").addClass("active");
        $(".galleryTabContent .tab-pane:first").addClass("active show");
    });
</script>
<script>
    $(document).on('click', '.btnModal', function() {
        //alert('check');
        var propName = $(this).attr("propertyUrl");
        var formName = $(this).attr("formName");
        $("#propName").val(propName);
        $("#formName").val(formName);
        $(".formName").html(formName);
    });
    $(document).on('click', '.btnRegisterDownload', function() {
        //alert('check');
        var propUrl = $(this).attr("propertyUrl");
        var formName = $(this).attr("formName");
        $("#propName").val(propUrl);
        $("#formName").val(formName);
        $(".formName").html(formName);
    });
</script>


@endsection
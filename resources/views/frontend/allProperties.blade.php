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
<section class="mainBanner3 " style="{{$pagemeta ? ($pagemeta->bannerImage ? 'background-image:url('.$pagemeta->bannerImage.');' : ''): ''}}">
    <div class="overlayBG"></div>
    <div class="container z-index-3">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-6 col-md-6 my-auto">
                        <div class="bannerHead text-center text-md-start py-3">
                            <h5>Find your most ideal investment opportunity with  Timeless Properties</h5>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 my-auto">
                        <div class="">
                            <ul class="list-unstyled listPropertySel mb-0">
                                <li class="d-inline"><a href="{{route('off-plan')}}" class="">Off-Plan</a></li>
                                <li class="d-inline"><a href="{{route('buy')}}" class="">Ready</a></li>
                                <li class="d-inline"><a href="{{route('rent')}}" class="">Rent</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container py-5">
        <div class="row p-relative">
            <div class="col-12 col-lg-12">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-12 col-md-12">
                        <div class="secHead text-center">
                            <h4>Off-Plan | Ready | Rent </h4>
                                <p class="text-sec">For those seeking to indulge in an extraordinary lifestyle, explore our curated collection of luxury properties</p>
                        </div>
                    </div>

                   
                </div>

            </div>
        </div>
    </div>
    </div>
</section>
@if (count($sellProperties) > 0)
<section>
    <div class="container">
        <div class="row p-relative py-3">
            <div class="col-12 col-lg-12">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-6 col-md-6 my-auto order-1 order-md-1 order-lg-1">
                        <div class="secHead py-3">
                            <h4>Properties to Buy</h4>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 my-auto order-3 order-md-2 order-lg-2">
                        <div class="py-3 text-center text-md-end text-lg-end">
                            <a href="{{route('buy')}}" class="text-primary">View More &nbsp; <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-12 col-lg-12 col-md-12 order-2 order-md-3 order-lg-3">
                        <div class="bgBlog1" style="right: -50%;"></div>
                        <div id="exclusiveSlide" class="owl-carousel owl-theme py-3">
                            @foreach ($sellProperties as $sell)
                            <div class="item">
                                <div class="card border-0 mb-3">
                                    <div class="propCont p-relative">
                                        <a href="{{ url('property/' . $sell['propertyId']) }}"><img
                                                src="{{$sell['photos'][0]}}" class="card-img-top propIMg"
                                                alt="{{$sell['title']}}"></a>
                                        <div class="propDetOverlay">
                                            <div class="border-bottom">
                                                <a href="{{ url('property/' . $sell['propertyId']) }}">
                                                    <h5 class="card-title text-uppercase">{{$sell['title']}}</h5>
                                                </a>
                                            </div>
                                            <div class="d-flex justify-content-start pt-2">
                                                <div class="pe-2">
                                                    <img src="{{asset('frontend/assets/images/icons/bed.svg')}}"
                                                        alt="{{$sell['title']}}" class="img-fluid filterInverse"
                                                        width="20">
                                                    <span class="align-middle">&nbsp; {{$sell['bedRooms']== 0 ? 'TBA' : $sell['bedRooms'] }}</span>
                                                </div>
                                                <div class="px-2">
                                                    <img src="{{asset('frontend/assets/images/icons/bath.svg')}}"
                                                        alt="{{$sell['title']}}" width="20"
                                                        class="img-fluid filterInverse">
                                                    <span class="align-middle">&nbsp; 3</span>
                                                </div>
                                                <div class="ps-2">
                                                    <img src="{{asset('frontend/assets/images/icons/area.svg')}}"
                                                        alt="{{$sell['title']}}" width="20"
                                                        class="img-fluid filterInverse">
                                                    <span class="align-middle text-white">&nbsp; {{$sell['size'].'
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
@if (count($rentProperties) > 0)
<section>
    <div class="container">
        <div class="row p-relative py-3">
            <div class="col-12 col-lg-12">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-6 col-md-6 my-auto order-1 order-md-1 order-lg-1">
                        <div class="secHead  py-3">
                            <h4>Properties for Rent</h4>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 my-auto order-3 order-md-2 order-lg-2">
                        <div class=" py-3 text-center text-md-end text-lg-end">
                            <a href="{{route('rent')}}" class="text-primary">View More &nbsp; <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-12 col-lg-12 col-md-12 order-2 order-md-3 order-lg-3">
                        <div class="bgBlog1" style="left: -50%;"></div>
                        <div id="exclusiveSlide2" class="owl-carousel owl-theme  py-3">
                            @foreach ($rentProperties as $rent)
                            <div class="item">
                                <div class="card border-0 mb-3">
                                    <div class="propCont p-relative">
                                        <a href="{{ url('property/' . $rent['propertyId']) }}"><img
                                                src="{{$rent['photos'][0]}}" class="card-img-top propIMg"
                                                alt="{{$rent['title']}}"></a>
                                        <div class="propDetOverlay">
                                            <div class="border-bottom">
                                                <a href="{{ url('property/' . $rent['propertyId']) }}">
                                                    <h5 class="card-title text-uppercase">{{$rent['title']}}</h5>
                                                </a>
                                            </div>
                                            <div class="d-flex justify-content-start pt-2">
                                                <div class="pe-2">
                                                    <img src="{{asset('frontend/assets/images/icons/bed.svg')}}"
                                                        alt="{{$rent['title']}}" class="img-fluid filterInverse"
                                                        width="20">
                                                    <span class="align-middle">&nbsp; {{$rent['bedRooms']== 0 ? 'TBA' : $rent['bedRooms'] }}</span>
                                                </div>
                                                <div class="px-2">
                                                    <img src="{{asset('frontend/assets/images/icons/bath.svg')}}"
                                                        alt="{{$rent['title']}}" width="20"
                                                        class="img-fluid filterInverse">
                                                    <span class="align-middle">&nbsp; 3</span>
                                                </div>
                                                <div class="ps-2">
                                                    <img src="{{asset('frontend/assets/images/icons/area.svg')}}"
                                                        alt="{{$rent['title']}}" width="20"
                                                        class="img-fluid filterInverse">
                                                    <span class="align-middle text-white">&nbsp; {{$rent['size'].'
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
@if(count($newProperties) > 0)
<section>
    <div class="container">
        <div class="row p-relative py-3">
            <div class="col-12 col-lg-12">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-6 col-md-6 my-auto order-1 order-md-1 order-lg-1">
                        <div class="secHead py-3">
                            <h4>New Off-Plan Projects</h4>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 my-auto order-3 order-md-2 order-lg-2">
                        <div class=" py-3 text-center text-md-end text-lg-end">
                            <a href="{{route('off-plan')}}" class="text-primary">View More &nbsp; <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-12 col-lg-12 col-md-12  order-2 order-md-3 order-lg-3">
                        <div class="bgBlog1" style="right: -50%;"></div>
                        <div id="exclusiveSlide3" class="owl-carousel owl-theme py-3">
                            @foreach ($newProperties as $new)
                            <div class="item">
                                <div class="card border-0 mb-3">
                                    <div class="propCont p-relative">
                                        <a href="{{ url('project/' . $new['propertyId']) }}"><img
                                                src="{{$new['photos'][0]}}" class="card-img-top propIMg"
                                                alt="{{$new['title']}}"></a>
                                        <div class="propDetOverlay">
                                            <div class="border-bottom">
                                                <a href="{{ url('project/' . $new['propertyId']) }}">
                                                    <h5 class="card-title text-uppercase">{{$new['title']}}</h5>
                                                </a>
                                            </div>
                                            <div class="d-flex justify-content-start pt-2">
                                                <div class="pe-2">
                                                    <img src="{{asset('frontend/assets/images/icons/bed.svg')}}"
                                                        alt="{{$new['title']}}" class="img-fluid filterInverse"
                                                        width="20">
                                                    <span class="align-middle">&nbsp; {{$new['newParam']['bedroomMin'] . '-' .$new['newParam']['bedroomMax'] }}</span>
                                                </div>
                                                {{-- <div class="px-2">
                                                    <img src="{{asset('frontend/assets/images/icons/bath.svg')}}"
                                                        alt="{{$new['title']}}" width="20"
                                                        class="img-fluid filterInverse">
                                                    <span class="align-middle">&nbsp; 3</span>
                                                </div> --}}
                                                <div class="ps-2">
                                                    <img src="{{asset('frontend/assets/images/icons/area.svg')}}"
                                                        alt="{{$new['title']}}" width="20"
                                                        class="img-fluid filterInverse">
                                                    <span class="align-middle text-white">&nbsp; {{$new['newParam']['minSize'] . '-'. $new['newParam']['maxSize'].' Sq.Ft.'}}</span>
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
@endsection
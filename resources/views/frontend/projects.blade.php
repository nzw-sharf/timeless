@extends('frontend.layout.master')

@if ($pagemeta)
@section('title', $pagemeta->meta_title)
@section('pageDescription', $pagemeta->meta_description)
@section('pageKeyword', $pagemeta->meta_keywords)
@else
@section('title', 'Projects | '.$name)
@section('pageDescription', $website_description)
@section('pageKeyword', $website_keyword)
@endif
@section('content')
<section class="mainBanner3" >
    <div class="overlayBG"></div>
    <div class="container z-index-3">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="row">
                    <div class="col-12 col-lg-7 col-md-7">
                        <div class="bannerHead py-3">
                            <h5>Find your most ideal investment opportunity with Timeless Properties</h5>
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
                            <h4>Off Plan Developments</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @if(count($projects) > 0)
                    @foreach ($projects as $prop)
                    <div class="col-12 col-lg-4 col-md-4 col-xl-4">
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
                                            <p class="mb-0 text-sec">AED {{number_format($prop['price'])}}</p>
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
                                        alt="{{  $name }}" width="20" class="img-fluid"> <span class="align-middle"> &nbsp;{{$prop['newParam']['bedroomMin'] . '-' .$prop['newParam']['bedroomMax'] }}</span>
                                </div>
                                {{-- <div class="px-2">
                                    <img src="{{asset('frontend/assets/images/icons/bath.svg')}}"
                                        alt="{{  $name }}" width="20" class="img-fluid"> <span class="align-middle"> &nbsp;3</span>
                                </div> --}}
                                <div class="ps-1">
                                    <img src="{{asset('frontend/assets/images/icons/area.svg')}}"
                                        alt="{{  $name }}" width="20" class="img-fluid"> <span class="align-middle text-black"> &nbsp;{{$prop['newParam']['minSize'] . '-'. $prop['newParam']['maxSize'].' Sq.Ft.'}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <div class="col-12 col-lg-12 col-md-12 col-xl-12">
                        <div class="text-center py-4">
                            <p class="text-sec">No Projects Found</p>
                        </div>
                    </div>
                    @endif
                </div>
                <div class="row">
                    <div class="col-12 col-lg-12 col-md-12">
                       <div class="py-5 justify-content-center">
                        {{  $projects->appends(request()->input())->links() }}
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

@endsection
@extends('frontend.layout.master')
@if ($community->meta_title != '')
    @section('title', $community->meta_title)
@else
    @section('title', $community->name)
@endif
@if ($community->meta_description != '')
    @section('pageDescription', $community->meta_description)
@else
    @section('pageDescription', $website_description)
@endif
@if ($community->meta_keyword != '')
    @section('pageKeyword', $community->meta_keyword)
@else
    @section('pageKeyword', $website_keyword)
@endif
@section('navbarType','navBarWhite')
@section('content')
<section class="bgDubai">
    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="row">
                    <div class="col-12 col-lg-6 col-md-6 my-auto">
                        <div>
                            
                            <div class="pe-0 pe-md-3 pe-lg-5 py-3">
                                <div class="sectionHead">
                                    <h5>Your Guide to Living in <span>{{$community->name}}</span></h5>
                                </div>
                               <div class="d-flex">
                                <div>
                                    <a href="{{route('list-your-property')}}"
                                    class="btn btn-primary me-3">List Your Property</a>
                                </div>
                                <div>
                                    <a href="{{url('projects'.'?community='.$community->id)}}"
                                        class="btn  btn-outline-dark2">Find a Property</a>
                                </div>
                               </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6">
                        <div class="aboutImg">
                            <img src="{{$community->mainImage}}" alt="{{$community->name}}"
                                srcset="{{$community->mainImage}}" class="img-fluid">
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bgDubai my-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="communityDesc">
                    
                    {!! $community->description !!}
                    {{-- <h5>
                        Residential options in {{$community->name}}
                    </h5>
                    <p class="text-para">
                        Hornes in Al Barsha 3 primarily consist of villas. The villas in Al Barsha 3 come in three to six-bedroom units and range from the average size of 4,000 sq. ft. to 18,000 sq. ft. These villas typically feature:
                    </p>  --}}
                </div>
            </div>
        </div>
    </div>
</section>
<section >
    <div class="container py-5">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="row ">
                    <div class="col-12 col-lg-12 col-md-12 my-auto">
                        <div>
                            
                            <div class="text-center">
                                <div class="sectionHead">
                                    <h5>Find Your Next Property in <br/><span>{{$community->name}}</span></h5>
                                </div>
                               <div class="text-center">
                                <a href="{{url('projects'.'?community='.$community->id)}}"
                                    class="btn btn-primary">Find a Property</a>
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
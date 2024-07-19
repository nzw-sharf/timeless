@extends('frontend.layout.master')

@if ($pagemeta)
@section('title', $pagemeta->meta_title)
@section('pageDescription', $pagemeta->meta_description)
@section('pageKeyword', $pagemeta->meta_keywords)
@else
@section('title', 'Media | '.$name)
@section('pageDescription', $website_description)
@section('pageKeyword', $website_keyword)
@endif
@section('content')
<section class="mainBanner" style="min-height:80vh;">
<div class="overlayBG"></div>
</section>
<section class="bgGradient pb-5">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-12 col-lg-4 col-md-4 my-auto">
                <div class="p-3 p-lg-5 p-md-4 m-auto w-fit-content h-100">
                    <div>
                        <div class="sectionHead lineAfter">
                            <h5>The Latest</br> <span> News & Views</span></h5>
                        </div>
                        <div class="text-start pt-4">
                            <p class="text-sec">Lorem ipsum doler it simit, lorem
                                ipsum haoe audieos doler.</p>
                            {{-- <p class="text-sec"><button type="button" class="btn btn-primary">Read More</button>
                            </p> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-8 col-md-8 my-auto">
                <div class="my-auto">
                    <div id="blogSlide" class="owl-carousel owl-centered">
                        @foreach ($latestBlog as $latest)
                        <div class="item mt-auto">
                            <div class="blogCardNew ">
                                <div class="propCont p-relative">
                                    <a href="{{ url('media/' . $latest->slug) }}"><img src="{{$latest->mainImage}}"
                                            class="card-img-top propIMg" alt="{{$latest->title}}"></a>
                                </div>
                                <div class="py-3 blogSubtitle">
                                    <p class="text-sec mb-0 fw-bold">
                                        {{$latest->title}}
                                    </p>
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
<section class="">
    <div class="container py-5">
        <div class="row">
            <div class="col-12 col-lg-12 col-md-12">
                @foreach ($blogs as $key=>$blog)
                @if (($key+1) % 2 != 0)
                <div class="row my-5 p-relative">
                    <div class="col-12 col-lg-5 col-md-6 my-auto py-4">
                        <a href="{{ url('media/' . $blog->slug) }}"><img src="{{$blog->mainImage}}" class="img-fluid rounded-5 blogImgMain"
                            alt="{{$blog->title}}" ></a>
                    </div>
                    <div class="col-12 col-lg-7 col-md-6 my-auto">
                        <div class="bgBlog1"></div>
                        <div class="p-2 p-lg-5 p-md-4 h-100 ">
                            <a href="{{ url('media/' . $blog->slug) }}"><h5 class="fw-bold  text-primary">{{ substr(strip_tags($blog->title), 0, 50) }}</h5></a>
                            <p class="card-text text-sec">{!! substr(strip_tags($blog->content), 0, 200) . '...' !!}</p>
                            <a href="{{ url('media/' . $blog->slug) }}" class="fw-bold btn btn-primary">Read More...</a>
                        </div>
                    </div>
                </div>
              @else
              <div class="row my-5 p-relative colRev"> 
                <div class="col-12 col-lg-7 col-md-6 my-auto">
                    <div class="bgBlog2"></div>
                    <div class="p-2 p-lg-5 p-md-4 h-100 ">
                        <a href="{{ url('media/' . $blog->slug) }}"><h5 class="fw-bold  text-primary">{{ substr(strip_tags($blog->title), 0, 50) }}</h5></a>
                        <p class="card-text text-sec">{!! substr(strip_tags($blog->content), 0, 200) . '...' !!}</p>
                        <a href="{{ url('media/' . $blog->slug) }}" class="fw-bold btn btn-primary">Read More...</a>
                    </div>
                </div>
                <div class="col-12 col-lg-5 col-md-6 my-auto py-4">
                    <a href="{{ url('media/' . $blog->slug) }}"><img src="{{$blog->mainImage}}" class="img-fluid rounded-5 blogImgMain"
                        alt="{{$blog->title}}" ></a>
                </div>
                
            </div>
              @endif
                @endforeach
            </div>
            <div class="col-12 col-lg-12">
                <div class="d-flex justify-content-center">
                    {{ $blogs->links() }}
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid py-5">
        <div class="row">
            <div class="col-12 col-lg-12 col-md-12">
                <div class="secHead text-center mb-5">
                    <h5>Featured <span>Publications</span></h5>
                </div>
            </div>
            <div class="col-12 col-lg-12">
                <div id="partnerSlide" class="owl-carousel owl-theme">
                    <div class="item my-auto">
                        <div class="partnerImg">
                            <img src="{{asset('frontend/assets/images/publications/arabian-business.png')}}" class="img-fluid"
                                alt="{{  $name }}">
                        </div>
                    </div>
                    <div class="item my-auto">
                        <div class="partnerImg">
                            <img src="{{asset('frontend/assets/images/publications/national.svg')}}" class="img-fluid"
                                alt="{{  $name }}">
                        </div>
                    </div>
                    <div class="item my-auto">
                        <div class="partnerImg">
                            <img src="{{asset('frontend/assets/images/publications/emirates.png')}}" class="img-fluid"
                                alt="{{  $name }}">
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
            <div class="col-12 col-lg-12 col-md-12">
                <div class="secHead pb-4  text-center">
                    <h5>Area<span>Guide</span></h5>
                </div>
            </div>
            <div class="col-12 col-lg-12">
                <div id="areaguideSlide" class="owl-carousel owl-theme">
                    @foreach ($communities as $comm)
                    <div class="item">
                        <div class="card border-0 mb-3">
                            <div class="propCont p-relative">
                                <a href="{{ url('area/' . $comm->slug) }}"><img src="{{$comm->mainIMage}}"
                                        class="card-img-top rounded-0 propIMg" alt="{{  $comm->name }}" /></a>
                                <div class="commuDetOverlay">
                                    <a href="{{ url('area/' . $comm->slug) }}">
                                        <h5 class="card-title mb-0">{{  $comm->name }}</h5>
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
</section>
@endsection
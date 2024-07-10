@extends('frontend.layout.master')
@if ($blog->meta_title != '')
    @section('title', $blog->meta_title)
@else
    @section('title', $blog->title)
@endif
@if ($blog->meta_description != '')
    @section('pageDescription', $blog->meta_description)
@else
    @section('pageDescription', $website_description)
@endif
@if ($blog->meta_keyword != '')
    @section('pageKeyword', $blog->meta_keyword)
@else
    @section('pageKeyword', $website_keyword)
@endif
@section('navbarType','navBarWhite')
@section('content')
<section>
    <div class="container py-5">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="row">
                    <div class="col-12 col-lg-7 col-md-6">
                        <div>
                            <div class="secHead">
                                <h6 class="fw-bold mb-4">{{$blog->title}}</h6>
                            </div>
                            <div>
                                <p class="text-sec mb-4"><span class="fw-bold">PUBLISHED ON</span> &nbsp; &nbsp; <span class="fst-italic"> {{ date('d-m-Y', strtotime($blog->publish_at)) }}</span></p>
                            </div>
                            <div>
                                <img src="{{$blog->mainImage}}" alt="{{$blog->title}}" srcset="{{$blog->mainImage}}" class="img-fluid">
                            </div>
                            <div class="blogDesc py-4">
                                <div class="text-sec">{!! $blog->content !!}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5 col-md-6">
                        <div class="secHead">
                            <h6 class="mb-4">Read <span>More</span></h6>
                        </div>
                        @foreach ($latestBlogs as $key => $latest)
                        <div class="p-3  blogMoreDiv @if(($key+1) % 2 == 0) bg-secondary @endif">
                            <div>
                               <a href="{{ url('media/' . $latest->slug) }}" class="text-primary"> <p class="text-sec">{!! substr(strip_tags($latest->content), 0, 120) . '...' !!}</p></a>
                                    <p class="text-sec mb-0">PUBLISHED ON &nbsp; &nbsp; <span class="fst-italic"> {{ date('d-m-Y', strtotime($latest->publish_at)) }}</span></p>
                            </div>
                        </div>
                        @endforeach
                        

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@extends('frontend.layout.master')
{{-- @if ($article->meta_title != '')
    @section('title', $article->meta_title)
@else
    @section('title', $article->title)
@endif
@if ($article->meta_description != '')
    @section('pageDescription', $article->meta_description)
@else
    @section('pageDescription', $website_description)
@endif
@if ($article->meta_keyword != '')
    @section('pageKeyword', $article->meta_keyword)
@else
    @section('pageKeyword', $website_keyword)
@endif --}}
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
                                <h6 class="fw-bold mb-4">when an unknown printer took a galley of type and scrambled it to
                                    make a type specimen book.</h6>
                            </div>
                            <div>
                                <p class="text-sec mb-4"><span class="fw-bold">POSTED BY</span> &nbsp; &nbsp; <span class="fst-italic"> 12/13/2024</span></p>
                            </div>
                            <div>
                                <img src="{{asset('frontend/assets/images/blogs/blog1.webp')}}" alt="{{$name}}" srcset="{{asset('frontend/assets/images/blogs/blog1.webp')}}" class="img-fluid">
                            </div>
                            <div class="blogDesc py-4">
                                <p class="text-sec">when an unknown printer took a galley of type and scrambled it to
                                    make a type specimen book. It has survived not only five centuries.when an unknown
                                    printer took a galley of type and scrambled it to
                                    make a type specimen book. It has survived not only five centuries.when an unknown
                                    printer took a galley of type and scrambled it to
                                    make a type specimen book. It has survived not only five centuries</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5 col-md-6">
                        <div class="secHead">
                            <h6 class="mb-4">Read <span>More</span></h6>
                        </div>
                        @for ($i=0;$i<4;$i++)
                        <div class="p-3  blogMoreDiv @if($i % 2 == 0) bg-secondary @endif">
                            <div>
                                <p class="text-sec">when an unknown printer took a galley of type and scrambled it to
                                    make a type specimen book. It has survived not only five centuries.</p>
                                    <p class="text-sec mb-0">POSTED BY &nbsp; &nbsp; <span class="fst-italic"> 12/13/2024</span></p>
                            </div>
                        </div>
                        @endfor
                        

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

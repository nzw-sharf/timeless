@extends('frontend.layout.master')

@if ($pagemeta)
    @section('title', $pagemeta->meta_title)
    @section('pageDescription', $pagemeta->meta_description)
    @section('pageKeyword', $pagemeta->meta_keywords)
@else
    @section('title',  'About Us | '.$name)
    @section('pageDescription', $website_description)
    @section('pageKeyword', $website_keyword)
@endif
@section('content')
<section class="mainBanner justify-content-center" style="">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="row">
                    <div class="col-12 col-lg-12 col-md-12">
                        <div class="bannerHead text-center text-white">
                            <h5><span>About Us</span></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

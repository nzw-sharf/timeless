@extends('frontend.layout.master')
@if ($pagemeta)
    @section('title', $pagemeta->meta_title)
    @section('pageDescription', $pagemeta->meta_description)
    @section('pageKeyword', $pagemeta->meta_keywords)
@else
    @section('title',  'Thank You | '.$name)
    @section('pageDescription', $website_description)
    @section('pageKeyword', $website_keyword)
@endif
@section('navbarType','navBarWhite')
@section('content')
   {{-- search & breadcrumps --}}
<section class="my-5 ">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12 col-md-12">
                <div class="row">
                    <div class="col-12 col-lg-12 col-md-12">
                        <div class="secHead text-center mb-3">
                            <h5 class="text-primary">{{Session::get('msg');}}</h2>
                        </div>
                        <div class="text-center">
                            <a href="{{ url('/') }}"
                                class="btn btn-primary px-3">Back To Home</a>
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

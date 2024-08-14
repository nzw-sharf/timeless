@extends('frontend.layout.master')
@if ($pagemeta)
    @section('title', $pagemeta->meta_title)
    @section('pageDescription', $pagemeta->meta_description)
    @section('pageKeyword', $pagemeta->meta_keywords)
@else
    @section('title',  'Contact Us | '.$name)
    @section('pageDescription', $website_description)
    @section('pageKeyword', $website_keyword)
@endif
@section('content')
    
<section class="mainBanner justify-content-center" style="background-image:url('{{asset('frontend/assets/images/banner/contactBg.webp')}}');min-height:80vh;">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="row">
                    <div class="col-12 col-lg-12 col-md-12">
                        <div class="bannerHead text-center text-white">
                            <h5>Join Our<span> Team</span></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section  class="my-5">
    <div class="container ">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-8 col-md-10 my-auto">
                        
                        <div class="" data-aos="fade-up">
                            <div class="text-center">
                                <h5 class="fw-bold">Submit Your deatils</h5>
                                <p class="text-sec">Are you ready to join the UAE's leading real estate company? 
                                    </p>
                            </div>
                            <div class="contactForm" data-aos="fade-up">
                                <form action="{{route('careerForm')}}" id="modalViewForm" method="post">
                                    @csrf
                                    <div class="row g-3">
                                        <div class="col-md-12">
                                            <label for="name" class="form-label">Full Name*</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                 required>
                                            <input type="hidden" class="form-control" id="formName" name="formName"
                                                value="Career Form">
                                        </div>
        
                                        <div class="col-md-6">
                                            <label for="email" class="form-label">Email*</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                 required>
                                        </div>
        
                                        <div class="col-md-6">
                                            <label for="mobile" class="form-label">Phone Number*</label>
                                            <input id="fullNumber" type="hidden" name="fullNumber">
                                            <input type="tel" onkeyup="numbersOnly(this)" class="form-control contField" id="telephone" name="phone"
                                                 required>
        
                                        </div>
                                        <div class="col-md-12">
                                            <label for="cv" class="form-label">Upload CV*</label>
                                            <input type="file" class="form-control contField" id="cv" name="cv"
                                                 required>
        
                                        </div>
                                        <div class="col-md-12">
                                            <label for="date" class="form-label">Cover Letter</label>
                                            <textarea name="message" id="message" rows="4"
                                                class="form-control contField rounded-3"></textarea>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="text-end">
                                                <button type="submit" class="btn btn-primary text-uppercase">Submit
                                                    Details</button>
                                            </div>
                                            <div class="text-center pt-2 fs-11">By submitting this form, you consent to the collection and use of your personal information as outlined in our Privacy Policy.</div>
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
</section>
{{-- Location --}}
<section class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="row">
                    
                    <div class="col-12 col-lg-12 col-md-12 my-auto">

                        <div class="">
                            <iframe src="https://maps.google.com/maps?q={{ isset($address_latitude) ? $address_latitude : '' }},{{ isset($address_longitude) ? $address_longitude : '' }}&z=17&ie=UTF8&iwloc=&output=embed" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

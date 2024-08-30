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
    
<section class="mainBanner justify-content-center" style="background-image:url('{{asset('frontend/assets/images/banner/contactBg.webp')}}');">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="row">
                    <div class="col-12 col-lg-12 col-md-12">
                        {{-- <div class="bannerHead text-center text-white">
                            <h5>Get in<span> Touch</span></h5>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section  class="py-5">
    <div class="container ">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10 col-md-10 my-auto">
                        <div>
                            <div class="secHead mb-5 text-center">
                                <h5 class="mb-3">Contact Us</h5>
                                <p class="text-sec">We are a boutique luxury real estate firm, connecting discerning
                                    clients to the most desirable homes. We offer a bespoke service
                                    that is built on the highest levels of attention to detail & discretion.
                                    </p>
                            </div>
                            <div class="contactForm pb-3">
                                <form action="{{route('contactForm')}}" id="modalViewForm" method="post">
                                    @csrf
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            {{-- <label for="name" class="form-label">Full Name*</label> --}}
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Full Name*"
                                                 required>
                                            <input type="hidden" class="form-control" id="formName" name="formName"
                                                value="Contact Us Form">
                                        </div>
        
                                        <div class="col-md-6">
                                            {{-- <label for="email" class="form-label">Email*</label> --}}
                                            <input type="email" class="form-control" id="email" name="email"  placeholder="Email*"
                                                 required>
                                        </div>
        
                                        <div class="col-md-6">
                                            {{-- <label for="mobile" class="form-label">Phone Number*</label> --}}
                                            <input id="fullNumber" type="hidden" name="fullNumber">
                                            <input type="tel" onkeyup="numbersOnly(this)" class="form-control contField" id="telephone"  placeholder="Phone Number*" name="phone"
                                                 required>
        
                                        </div>
                                        <div class="col-md-6">
                                            {{-- <label for="email" class="form-label">Subject</label> --}}
                                            <input type="text" class="form-control" id="subject"  placeholder="Subject" name="subject" />
                                        </div>
                                        <div class="col-md-12">
                                            {{-- <label for="date" class="form-label">Message</label> --}}
                                            <textarea name="message" id="message" rows="2"  placeholder="Message"
                                                class="form-control contField"></textarea>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary text-uppercase">Submit
                                                    Details</button>
                                            </div>
                                            <div class="fs-14 pt-1 text-center">By submitting this form, you consent to the collection and use of your personal information as outlined in our Privacy Policy.</div>
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

@endsection

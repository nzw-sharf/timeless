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
                            <h5>Get in<span> Touch</span></h5>
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
                <div class="row">
                    <div class="col-12 col-lg-5 col-md-5 my-auto">
                        <div>
                            <div class="secHead mb-3">
                                <h5>Get In <span>Touch</span></h5>
                            </div>
                            <div class="">
                                <h6>Send a message</h6>
                                <p class="text-sec">We are a boutique luxury real estate firm, connecting discerning
                                    clients to the most desirable homes. We offer a bespoke service
                                    that is built on the highest levels of attention to detail & discretion.
                                    </p>
                            </div>
                            <div class="contactForm pb-3">
                                <form action="{{route('contactForm')}}" id="modalViewForm" method="post">
                                    @csrf
                                    <div class="row g-3">
                                        <div class="col-md-12">
                                            <label for="name" class="form-label">Full Name*</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                 required>
                                            <input type="hidden" class="form-control" id="formName" name="formName"
                                                value="Contact Us Form">
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
                                            <label for="date" class="form-label">Message</label>
                                            <textarea name="message" id="message" rows="4"
                                                class="form-control contField"></textarea>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="">
                                                <button type="submit" class="btn btn-primary text-uppercase">Submit
                                                    Details</button>
                                            </div>
                                          
                                        </div>
        
                                    </div>
                                </form>
                               </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 offset-md-1 offset-lg-1">
                        <ul class="list-unstyled">
                            <li class="text-sec mb-3">
                                <p class="text-para fw-bold mb-1">Call Us</p>
                                <a class="navbar-brand text-sec" href="tel:+{{$contact_number ? $contact_number :'' }}"> <img src="{{asset('frontend/assets/images/icons/phone.png')}}"
                                    alt="{{  $name }}" width="30" class="img-fluid"> &nbsp;<span class="align-middle">{{$contact_number ? $contact_number :'0000000000' }}</span></a>
                            </li>
                            <li class="text-sec mb-3">
                                <p class="text-para fw-bold mb-1">Visit Us</p>
                                <img src="{{asset('frontend/assets/images/icons/gps.png')}}"
                                    alt="{{  $name }}" width="30" class="img-fluid"> &nbsp;<span class="align-middle">{{$address ? $address :'The Opus by Zaha Hadid Office C103 • Business Bay • Dubai' }}</span>
                            </li>
                            <li class="text-sec mb-3">
                                <p class="text-para fw-bold mb-1">Email Us</p>
                               <a  class="navbar-brand text-sec" href="mailto:+{{$email ? $email :'' }}"><img src="{{asset('frontend/assets/images/icons/email.png')}}"
                                alt="{{  $name }}" width="30" class="img-fluid"> &nbsp;<span class="align-middle">{{$email ? $email :'info@company.com' }}</span></a>
                            </li>
                        </ul>
                        <div class="py-3">
                            <img src="{{asset('frontend/assets/images/contact.webp')}}" alt="timeless" class="img-fluid" width="85%">
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

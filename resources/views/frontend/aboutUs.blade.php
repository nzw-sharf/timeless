@extends('frontend.layout.master')

@if ($pagemeta)
@section('title', $pagemeta->meta_title)
@section('pageDescription', $pagemeta->meta_description)
@section('pageKeyword', $pagemeta->meta_keywords)
@else
@section('title', 'About Us | '.$name)
@section('pageDescription', $website_description)
@section('pageKeyword', $website_keyword)
@endif
@section('content')
<section class="mainBanner3 justify-content-end pb-5"
    style="background-image:url('{{asset('frontend/assets/images/banner/aboutus.webp')}}');">
    <div class="overlayBG"></div>
    <div class="container z-index-3">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="row">
                    <div class="col-12 col-lg-12 col-md-12">
                        <div class="bannerHead pb-5" data-aos="fade-up">
                            <h5>About Timeless Properties</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bgDubai">
    <div class="container py-5">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="row">
                    <div class="col-12 col-lg-12">
                        <div class="secHead mb-4 text-center" data-aos="fade-up">
                            <h5>Our <span>Story</span></h5>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6">
                        <div>

                            <div class="p-0 p-md-3 p-lg-5" data-aos="fade-right">
                                <p class="text-sec">Welcome to Timeless Properties, where we redefine luxury and
                                    convenience in the Dubai real estate market. With a legacy of over 25 years, we
                                    specialize in offering exclusive properties that are unavailable through any other
                                    agency in the region, thanks to our loyal network of sellers. Our expansive network
                                    extends beyond borders, connecting you with esteemed buyers, sellers, and
                                    influential figures worldwide. At Timeless Properties, we prioritize your
                                    experience, ensuring each step of your real estate journey is effortless and
                                    unforgettable. From initial consultation to closing, our expert team provides
                                    personalized guidance and support, guaranteeing a seamless transaction tailored to
                                    your unique preferences and requirements. Discover the unparalleled service and
                                    opportunities that await you with Timeless Properties.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6">
                        <div class="aboutImg" data-aos="fade-left">
                            <img src="{{asset('frontend/assets/images/aboutNew.webp')}}" alt="{{  $name }}"
                                srcset="{{asset('frontend/assets/images/aboutNew.webp')}}" class="img-fluid">
                        </div>
                        {{-- <div class="aboutImg2">
                            <img src="{{asset('frontend/assets/images/about.webp')}}" alt="{{  $name }}"
                                srcset="{{asset('frontend/assets/images/about.webp')}}" class="img-fluid">
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <section>
    <div class="container-fluid py-5">
        <div class="row">
            <div class="col-12 col-lg-12 col-md-12">
                <div class="secHead pb-4  text-center" data-aos="fade-up">
                    <h5>Our<span>Management</span></h5>
                </div>
            </div>
            <div class="col-12 col-lg-12">
                <div id="managementSlide" class="owl-carousel owl-theme">
                    @for ($i = 1; $i < 5; $i++) <div class="item my-auto">
                        <div class="card border-0 mb-3">
                            <div class="propCont p-relative">
                                <a href="http://"><img
                                        src="{{ asset('frontend/assets/images/community/' . $i . '.webp') }}"
                                        class="card-img-top rounded-0 propIMg" alt="{{ $name }}"></a>
                                <div class="managDetOverlay">
                                    <h5 class="card-title mb-0">Name Here</h5>
                                    <p class="text-sec mb-0">Designation</p>
                                </div>
                            </div>
                        </div>
                </div>
                @endfor
                @for ($i = 1; $i < 5; $i++) <div class="item my-auto">
                    <div class="card border-0 mb-3">
                        <div class="propCont p-relative">
                            <a href="http://"><img src="{{ asset('frontend/assets/images/community/' . $i . '.webp') }}"
                                    class="card-img-top rounded-0 propIMg" alt="{{ $name }}"></a>
                            <div class="managDetOverlay">
                                <h5 class="card-title mb-0">Name Here</h5>
                                <p class="text-sec mb-0">Designation</p>
                            </div>
                        </div>
                    </div>
            </div>
            @endfor
        </div>
    </div>
    </div>
    </div>
</section> --}}
<section>
    <div class="container py-5">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="row">
                    <div class="col-12 col-lg-12 col-md-12">
                        <div class="secHead text-center" data-aos="fade-up">
                            <h5>Our<span>Team</span></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container pb-5">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div id="agentSlide" class="owl-carousel owl-theme">
                    @foreach ($agents as $agent)
                    @if ($agent->email != 'info@timeless-properties.com')
                    {{-- <div class="item my-auto">
                        <a class="text-decoration-none teamDeatBtn" style="cursor:pointer;" teamId="{{ $agent->id }}">
                            <div class="card border-0 mb-3">

                                <div class="propCont agentContNew p-relative">
                                    <img src="{{$agent->image ? $agent->image : $agent->avatar}}"
                                        class="card-img-top rounded-0 propIMg" alt="{{ $name }}">

                                    <div class="propDetOverlay rounded-0">
                                        <a class="text-decoration-none teamDeatBtn" style="cursor:pointer;"
                                            teamId="{{ $agent->id }}">
                                            <h5 class="card-title mb-0">{{ $agent->name }}</h5>
                                        </a>
                                        <p class="text-sec mb-0">{{ $agent->designation }}</p>
                                        <div class="agentDetailCont">
                                            <div class="d-flex justify-content-between mt-2">
                                                <div class="d-flex my-auto">
                                                    <div class="my-auto pe-2">
                                                        <a
                                                            href="tel:{{ $agent->contact_number ? str_replace(' ', '', $agent->contact_number) :  str_replace(' ', '', $contact_number)}}">
                                                            <img src="{{asset('frontend/assets/images/icons/call.svg')}}"
                                                                alt="{{  $name }}" width="30" height="30">
                                                        </a>
                                                    </div>
                                                    <div class="my-auto pe-2">
                                                        <a href="{{ $agent->contact_number ? " https://wa.me/".
                                                            str_replace(' ', '', $agent->contact_number) : "https://wa.me/". str_replace(' ', '', $contact_number)}}">
                                                            <img src="{{asset('
                                                            frontend/assets/images/icons/whatsapp.svg')}}"
                                                            alt="{{  $name }}" width="22" height="22">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="d-flex my-auto">
                                                    <a class="teamDeatBtn text-white" style="cursor:pointer;"
                                                        teamId="{{ $agent->id }}">
                                                        <div class="d-flex ">
                                                            <span class="align-middle ">Find More </span> <img
                                                                src="{{asset('frontend/assets/images/icons/arrow.svg')}}"
                                                                alt="{{  $name }}" class="w-auto my-auto" width="16"
                                                                height="16">
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </a>
                    </div> --}}
                    <div class="item my-auto">
                        <div class="card border-0 mb-3 shadow-sm rounded-0">

                            <div class="propCont agentContNew">
                                <img src="{{$agent->image ? $agent->image : $agent->avatar}}"
                                    class="card-img-top rounded-0 propIMg" alt="{{ $name }}">

                                <div class="card-body">
                                    <h5 class="card-title mb-0">{{ $agent->name }}</h5>
                                    <p class="text-sec mb-0 text-primary">{{ $agent->designation }}</p>

                                    <div class="">
                                        <div>
                                            <p class="mb-0">Area Specialization : {{$agent->communities ? $agent->communities->implode('name', ',') : ''}}</p>
                                        </div>
                                        <div>
                                            <p class="mb-0">Nationality : {{$agent->nationality ? $agent->nationality : ''}}</p>
                                        </div>
                                        <div>
                                            <p class="mb-0">Language : {{$agent->languages ? $agent->languages->implode('name', ',') : ''}}</p>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="p-1">
                                    <div class="row g-1">
                                        
                                        <div class="col-4 col-lg-4 my-auto">
                                            <div class="mt-1">
                                                <a href="mailto:{{$agent->email ? $agent->email : $email}}"
                                                    class="btn btn-primary btn-sm  w-100 fs-11  rounded-0 text-decoration-none"><i
                                                        class="fa fa-envelope"></i> E-mail</a>
                                            </div>
                                        </div>
                                        <div class="col-4 col-lg-4 my-auto">
                                            <div class="mt-1">
                                                <a href="{{$agent->contact_number ? "https://wa.me/". str_replace(' ', '', $agent->contact_number) : "https://wa.me/". str_replace(' ', '', $contact_number)}}" target="_blank"
                                                    class="btn btn-primary btn-sm  w-100  fs-11 rounded-0 text-decoration-none"><i
                                                        class="fa fa-whatsapp"></i> WhatsApp</a>
                                            </div>
                                        </div>
                                        <div class="col-4 col-lg-4 my-auto">
                                            <div class="mt-1">
                                                <a href="{{$agent->linkedin ? $agent->linkedin : $linkedin}}"
                                                    class="btn btn-primary rounded-0 btn-sm  fs-=11 w-100 text-decoration-none"><i
                                                        class="fa fa-linkedin"></i> Linkedin</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    @endif

                    @endforeach
                </div>

            </div>
        </div>
    </div>
</section>

<section id="careers">
    <div class="container py-5">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-8 col-md-10 my-auto">
                        <div class="secHead mb-4 text-center" data-aos="fade-up">
                            <h5>Join Our <span>Team</span></h5>
                        </div>
                        <div class="shadow p-2 p-md-5 rounded-3" data-aos="fade-up">
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
                                            <input type="text" class="form-control" id="name" name="name" required>
                                            <input type="hidden" class="form-control" id="formName" name="formName"
                                                value="Career Form">
                                        </div>

                                        <div class="col-md-6">
                                            <label for="email" class="form-label">Email*</label>
                                            <input type="email" class="form-control" id="email" name="email" required>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="mobile" class="form-label">Phone Number*</label>
                                            <input id="fullNumber" type="hidden" name="fullNumber">
                                            <input type="tel" onkeyup="numbersOnly(this)" class="form-control contField"
                                                id="telephone" name="phone" required>

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
                                            <div class="text-center pt-2 fs-11">By submitting this form, you consent to
                                                the collection and use of your personal information as outlined in our
                                                Privacy Policy.</div>
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

<div class="modal fade" id="agentFull" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content bgLight border">
            <div class="modal-header justify-content-center border-0 p-relative">
                <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-0">
                <div class="teamDetails">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
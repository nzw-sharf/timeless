<footer class="py-5 footerBg bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="row text-white">
                    <div class="col-12 col-lg-12 col-md-12">
                        <div class="text-center mx-auto pb-5">
                            <div class="pb-5">
                                <a class="navbar-brand" href="{{url('/')}}">
                                    <img src="@if($logo) {{  $logo }} @else {{asset('frontend/assets/images/logo.png')}} @endif"
                                        alt="{{  $name }}" width="140" class="img-fluid">
                                </a>
                            </div>
                            <div class="">
                                <ul class="list-unstyled">
                                    <li class="d-inline px-2">
                                        <a class="navbar-brand" href="{{ $instagram ? $instagram : ''}}">
                                            <img src="{{asset('frontend/assets/images/icons/instagram.svg')}}"
                                                alt="{{  $name }}" width="27" height="27">
                                        </a>
                                    </li>
                                    <li class="d-inline px-2">
                                        <a class="navbar-brand" href="{{ $whatsapp ? $whatsapp : ($whatsapp_number ? 'https://api.whatsapp.com/send/?phone='.$whatsapp_number : '')}}">
                                            <img src="{{asset('frontend/assets/images/icons/whatsapp.svg')}}"
                                                alt="{{  $name }}" width="27" height="27">
                                        </a>
                                    </li>
                                    <li class="d-inline px-2">
                                        <a class="navbar-brand" href="{{ $twitter ? $twitter : ''}}">
                                            <img src="{{asset('frontend/assets/images/icons/twitter.svg')}}"
                                                alt="{{  $name }}" width="27" height="27">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-md-4 ">
                        <div class="footHead">
                            <div>
                                <h6>THE OFFICE</h6>
                            <p class="text-sec">The Opus by Zaha Hadid
                                Office C103 • Business Bay • Dubai</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-md-4 ">
                        <div class="footHead">
                            <h6 class="">THE PROPERTIES</h6>
                            <ul class="footList list-unstyled  ps-0">
                                <li class="list-unstyled">
                                    <a class="navbar-brand text-sec" href="">
                                        Buy
                                    </a>
                                </li>
                                <li class="list-dot">
                                    <a class="navbar-brand text-sec" href="">
                                        Sell
                                    </a>
                                </li>
                                <li class="list-dot">
                                    <a class="navbar-brand text-sec" href="">
                                        Rent
                                    </a>
                                </li>
                                <li class="list-bar">
                                    <a class="navbar-brand text-sec" href="">
                                        Private Listing
                                    </a>
                                </li>
                                <li class="d-block">
                                    <a class="navbar-brand text-sec" href="">
                                        New Developments
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-md-4 ">
                        <div class="footHead">
                            <h6>CONTACT DETAILS</h6>
                            <ul class="list-unstyled ps-0">
                                <li class="text-sec">
                                    <span class="text-secondary">Phone: </span> <a class="navbar-brand text-sec" href="tel:+{{$contact_number ? $contact_number :'' }}">{{$contact_number ? $contact_number :'0000000000' }}</a>
                                </li>
                                <li class="text-sec">
                                    <span class="text-secondary">Email: </span> <a  class="navbar-brand text-sec" href="mailto:+{{$email ? $email :'' }}">{{$email ? $email :'info@company.com' }}</a>
                                </li>
                                <li class="text-sec">
                                    <span class="text-secondary">WhatsApp: </span> <a  class="navbar-brand text-sec" href="{{ $whatsapp ? $whatsapp : ($whatsapp_number ? 'https://api.whatsapp.com/send/?phone='.$whatsapp_number : '')}}">{{ $whatsapp_number ? $whatsapp_number : '000000000000'}}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
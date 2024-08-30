<header>
    {{-- Desktop Nav  --}}
    <nav class="navbar navbar-expand-lg mainNav @yield('navbarType')">
        <div class="container py-3">
            <a class="navbar-brand" href="{{url('/')}}">
                <img src="@if($logo) {{  $logo }} @else {{asset('frontend/assets/images/logo.png')}} @endif" alt="{{  $name }}" width="130" class="img-fluid invertIcon">

            </a>
          
          <div class="d-flex rowRev">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link {{ request()->route()->named('main') ? 'active' : '' }}" href="{{url('/')}}">Home</a>
                  </li>
                  {{-- <li class="nav-item">
                    <a class="nav-link {{ request()->route()->named('properties') ? 'active' : '' }}" href="{{route('properties')}}">Properties</a>
                  </li> --}}
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->route()->named('properties') ? 'active' : '' }}" href="{{route('properties')}}"  role="button" aria-expanded="false">
                      Properties
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item {{request()->route()->named('off-plan') ? 'active' : '' }}" href="{{route('off-plan')}}">Off-Plan</a></li>
                      <li><a class="dropdown-item {{ request()->route()->named('buy') ? 'active' : '' }}" href="{{route('buy')}}">Ready</a></li>
                      <li><a class="dropdown-item {{ request()->route()->named('rent') ? 'active' : '' }}"  href="{{route('rent')}}">Rent</a></li>
                    </ul>
                  </li>
          
                  <li class="nav-item">
                    <a class="nav-link {{ request()->route()->named('about-us') ? 'active' : '' }}" href="{{route('about-us')}}">Our Team</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{ request()->route()->named('contact-us') ? 'active' : '' }}" href="{{route('contact-us')}}">Contact Us</a>
                  </li>
                </ul>
              </div>
              <div class="my-auto ms-3">
                    <ul class="list-unstyled mb-0">
                        <li class="d-inline">
                            <a class="navbar-brand" href="mailto:{{ $email ? $email : ''}}">
                                <img src="{{asset('frontend/assets/images/icons/email.svg')}}" alt="{{  $name }}" class="invertIcon" width="27" height="27">
                            </a>
                        </li>
                        <li class="d-inline">
                            <a class="navbar-brand" href="{{ $whatsapp ? $whatsapp : ($whatsapp_number ? 'https://api.whatsapp.com/send/?phone='.$whatsapp_number : '')}}">
                                <img src="{{asset('frontend/assets/images/icons/whatsapp.webp')}}" alt="{{  $name }}" width="30" height="30">
                            </a>
                        </li>
                        <li class="d-inline">
                            <a class="navbar-brand" href="{{ $whatsapp ? $whatsapp : ($whatsapp_number ? 'https://t.me/+'.$whatsapp_number : '')}}">
                                <img src="{{asset('frontend/assets/images/icons/telegram.png')}}" alt="{{  $name }}" width="30" height="30">
                            </a>
                        </li>
                    </ul>
              </div>
          </div>
        </div>
      </nav>
    {{-- Mobile Nav --}}
</header>

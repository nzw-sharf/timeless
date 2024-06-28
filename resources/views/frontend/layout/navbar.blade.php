<header>
    {{-- Desktop Nav  --}}
    <nav class="navbar navbar-expand-lg mainNav">
        <div class="container py-3">
            <a class="navbar-brand" href="{{url('/')}}">
                <img src="@if($logo) {{  $logo }} @else https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo.svg @endif" alt="{{  $name }}" width="30" height="24">
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
                  <li class="nav-item">
                    <a class="nav-link {{ request()->route()->named('properties') ? 'active' : '' }}" href="#">Properties</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{ request()->route()->named('media') ? 'active' : '' }}" href="#">Media</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{ request()->route()->named('about-us') ? 'active' : '' }}" href="{{route('about-us')}}">About Us</a>
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
                                <img src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo.svg" alt="{{  $name }}" width="30" height="24">
                            </a>
                        </li>
                        <li class="d-inline">
                            <a class="navbar-brand" href="{{ $whatsapp ? $whatsapp : ($whatsapp_number ? 'https://api.whatsapp.com/send/?phone='.$whatsapp_number : '')}}">
                                <img src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo.svg" alt="{{  $name }}" width="30" height="24">
                            </a>
                        </li>
                    </ul>
              </div>
          </div>
        </div>
      </nav>
    {{-- Mobile Nav --}}
</header>

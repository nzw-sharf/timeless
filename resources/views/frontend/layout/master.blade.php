<!doctype html>

<html lang="en">
@include('frontend.layout.header')

<body>
    @include('frontend.layout.navbar')

    <main>
        @yield('content')

    </main>
    @include('frontend.layout.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    {{-- country code --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/intlTelInput.min.js"
        integrity="sha512-+gShyB8GWoOiXNwOlBaYXdLTiZt10Iy6xjACGadpqMs20aJOoh+PJt3bwUVA6Cefe7yF7vblX6QwyXZiVwTWGg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        {{-- Lightbox --}}
<script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js" defer></script>
    <script>
        $(document).ready(function() {
            
        toastr.options.timeOut = 10000;
        toastr.options.closeButton = true;
        @if (Session::has('error'))
            toastr.error('{{ Session::get('error') }}');
        @elseif (Session::has('success'))
            toastr.success('{{ Session::get('success') }}');
        @endif
    });

    function numbersOnly(input) {
        var regex = /[^0-9+]/g;
        input.value = input.value.replace(regex, "");
    }

    function lettersOnly(input) {
        var regex = /[^a-zA-Z0-9-|,?.'& !:/()]/g;
        input.value = input.value.replace(regex, "");
    }

    var input = document.querySelector("#telephone");

    intlTelInput(input, {
        autoHideDialCode: true,
        autoPlaceholder: "ON",
        dropdownContainer: document.body,
        formatOnDisplay: true,
        hiddenInput: "full_number",
        initialCountry: "auto",
        nationalMode: true,
        placeholderNumberType: "MOBILE",
        preferredCountries: ['UAE'],
        separateDialCode: true,
        geoIpLookup: function(success, failure) {
            $.get("https://ipinfo.io", function() {}, "jsonp").always(function(resp) {
                var countryCode = (resp && resp.country) ? resp.country : "";
                success(countryCode);
            });
        },
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.js"
    });
    var iti = window.intlTelInputGlobals.getInstance(input);

    input.addEventListener('input', function() {
        var fullNumber = iti.getNumber();

        $("#fullNumber").val(fullNumber);
    });
    $(".readMorePropBtn").click(function(e) {
        e.preventDefault();
        $(".textLessProp").removeClass("d-block").addClass("d-none");
        $(".textExtraProp").removeClass("d-none").addClass("d-content");
        $(this).removeClass("d-block").addClass("d-none");
        $(".readLessPropBtn").removeClass("d-none").addClass("d-block");
    });

    $(".readLessPropBtn").click(function(e) {
        e.preventDefault();
        $(".textExtraProp").removeClass("d-content").addClass("d-none");
        $(".textLessProp").removeClass("d-none").addClass("d-block");
        $(".readMorePropBtn").removeClass("d-none").addClass("d-block");
        $(this).removeClass("d-block").addClass("d-none");
    });
    </script>
    <script>
        $('#partnerSlide').owlCarousel({
           
            loop:true,
            
            margin:30,
            autoplay:true,
            autoplayTimeout:4000,
            autoplayHoverPause:true,
            responsiveClass:true,
            nav:false,
            dots: false,
            responsive:{
                0:{
                    items:2,
                },
                600:{
                    items:3,
                },
                1000:{
                    items:4,
                }
            }
        });
        $('#clientSlide').owlCarousel({
           
            loop:true,
            
            margin:30,
            autoplay:false,
            autoplayTimeout:3000,
            autoplayHoverPause:true,
            responsiveClass:true,
            nav:false,
            dots: false,
            responsive:{
                0:{
                    items:1,
                },
                600:{
                    items:1,
                },
                1000:{
                    items:1,
                }
            }
        })
        $('#propGallery').owlCarousel({
           
            loop:true,
            
            margin:10,
            autoplay:false,
            autoplayTimeout:3000,
            autoplayHoverPause:true,
            responsiveClass:true,
            nav:false,
            dots: false,
            responsive:{
                0:{
                    items:1,
                },
                600:{
                    items:1,
                },
                1000:{
                    items:1,
                }
            }
        })
        $('#blogSlide').owlCarousel({
           
            loop:true,
            margin:20,
            autoplay:true,
            autoplayTimeout:3000,
            autoplayHoverPause:true,
            responsiveClass:true,
            nav:false,
            center: true,
            dots: false,
            responsive:{
                0:{
                    items:1,
                },
                600:{
                    items:2,
                },
                1000:{
                    items:3,
                }
            }
        })
        $('#areaguideSlide').owlCarousel({
            center: true,
            loop:false,
            margin:20,
            nav:true,
            dots:false,
            responsive:{
                0:{
                    items:1,
                },
                600:{
                    items:2,
                },
                1000:{
                    items:4,
                }
            }
        })
        $('#similarListing').owlCarousel({
            center: false,
            loop:true,
            margin:20,
            autoplay:true,
            autoplayTimeout:3000,
            autoplayHoverPause:true,
            responsiveClass:true,
            nav:false,
            dots:false,
            responsive:{
                0:{
                    items:1,
                },
                600:{
                    items:2,
                },
                1000:{
                    items:3,
                }
            }
        })
        $('#managementSlide').owlCarousel({
            center: false,
            loop:false,
            margin:20,
            nav:true,
            dots:false,
            responsive:{
                0:{
                    items:1,
                },
                600:{
                    items:2,
                },
                1000:{
                    items:4,
                }
            }
        })
        $('#processSlide').owlCarousel({
            center: false,
            loop:false,
            margin:30,
            nav:true,
            dots:false,
            responsive:{
                0:{
                    items:1,
                },
                600:{
                    items:2,
                },
                1000:{
                    items:3,
                }
            }
        })
        $('#AmenitySlide').owlCarousel({
            center: false,
            loop:true,
            margin:20,
            nav:true,
            dots:false,
            responsive:{
                0:{
                    items:2,
                },
                600:{
                    items:3,
                },
                1000:{
                    items:5,
                }
            }
        })
        $('#exclusiveSlide').owlCarousel({
            center: false,
            loop:false,
            margin:30,
            nav:true,
            dots:false,
            items:1
        })
        $('#projDetailSlide').owlCarousel({
            center: false,
            loop:true,
            margin:30,
            autoplay:true,
            autoplayTimeout:3000,
            autoplayHoverPause:true,
            responsiveClass:true,
            nav:false,
            dots:false,
            responsive:{
                0:{
                    items:2,
                },
                600:{
                    items:3,
                },
                1000:{
                    items:4,
                }
            }
        })
        $('#category').on('change', function() {
            
            let val= this.value ;
            if(val == "NEW"){
                $('#searchForm').attr('action','{{route('projects')}}');
            }});
    </script>
</body>

</html>
<!doctype html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
<head >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Storat</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    @livewireStyles
</head>

<style>
    .hero-slides {
        display: flex;
        transition: transform 1s ease-in-out;
    }

    .hero-slide {
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
    }
</style>


    <body>
        @include('frontend.partials.header')

        <main>
            @yield('content')
        </main>

        @include('frontend.partials.footer')

        @yield('scripts')
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                let currentIndex = 0;
                const images = document.querySelectorAll(".vision-slide-img");
                const contents = document.querySelectorAll(".vision-slide-content");
                const totalSlides = images.length;

                function showSlide(index) {
                    images.forEach((img, i) => {
                        img.classList.toggle("hidden", i !== index);
                    });
                    contents.forEach((content, i) => {
                        content.classList.toggle("hidden", i !== index);
                    });
                }

                document.getElementById("vision-prev").addEventListener("click", () => {
                    currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
                    showSlide(currentIndex);
                });

                document.getElementById("vision-next").addEventListener("click", () => {
                    currentIndex = (currentIndex + 1) % totalSlides;
                    showSlide(currentIndex);
                });

                // Optional autoplay
                // setInterval(() => {
                //     currentIndex = (currentIndex + 1) % totalSlides;
                //     showSlide(currentIndex);
                // }, 5000);
            });
        </script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const heroSlider = document.getElementById('heroSlider');
                const slides = heroSlider.querySelector('.hero-slides');
                const slideItems = heroSlider.querySelectorAll('.hero-slide');
                let currentIndex = 0;
                let totalSlides = slideItems.length;

                if (totalSlides > 1) {
                    setInterval(function() {
                        currentIndex = (currentIndex + 1) % totalSlides;
                        slides.style.transform = `translateX(-${100 * currentIndex}%)`;
                    }, 7000);
                }
            });
        </script>

        <script>
            $('#contactForm').on('submit', function(e) {
                e.preventDefault();

                $.ajax({
                    url: "{{ route('contact.store') }}",
                    type: "POST",
                    data: $(this).serialize(),
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if(response.success) {
                            Toastify({
                                text: response.message,
                                duration: 3000,
                                close: true,
                                gravity: "top",
                                position: "right",
                                backgroundColor: "#0F548E",
                            }).showToast();

                            $('#contactForm')[0].reset();
                        }
                    },
                    error: function(xhr) {
                        Toastify({
                            text: "Something went wrong!",
                            duration: 3000,
                            close: true,
                            gravity: "top",
                            position: "right",
                            backgroundColor: "red",
                        }).showToast();
                    }
                });
            });
        </script>

        <script>
            new Swiper(".clients-swiper", {
                loop: true,
                slidesPerView: 4,
                spaceBetween: 20,
                speed: 3000,
                autoplay: {
                    delay: 0,
                    disableOnInteraction: false,
                },
                freeMode: true,
                freeModeMomentum: false
            });
        </script>
        @livewireScripts

        <script>
            document.addEventListener('livewire:init', () => {
                Livewire.on('language-changed', () => {
                    window.location.reload();
                });
            });
        </script>
    </body>
</html>

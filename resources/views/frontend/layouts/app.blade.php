<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Storat</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
            // Slides
            const slides = [
                {
                    img: "images/img_9.png",
                    title: "Our Vision",
                    p1: "Forecast and trends are uniform and projecting exponential growth in companies and individuals choosing to work more virtually yet professionally. They call it the work-life balance…",
                    p2: "STORAT Real Estate Consultancy Co. provides the best services at a fraction of the traditional cost. All services are customized to the client and budget—there’s no one-size-fits-all."
                },
                {
                    img: "images/img_12.png",
                    title: "Our Mission",
                    p1: "We deliver tailored real estate solutions that maximize value while keeping processes simple, transparent, and efficient for every stakeholder.",
                    p2: "From advisory to execution, our team partners with clients end-to-end, aligning each decision with measurable outcomes."
                },
                {
                    img: "images/img_13.png",
                    title: "Our Promise",
                    p1: "Precision, credibility, and speed—powered by a team that understands your priorities and market dynamics.",
                    p2: "We adapt to change quickly and keep you ahead with data-driven decisions and proactive communication."
                }
            ];

            // DOM nodes
            const imgEl   = document.getElementById('vision-img');
            const titleEl = document.getElementById('vision-title');
            const p1El    = document.getElementById('vision-p1');
            const p2El    = document.getElementById('vision-p2');

            const prevBtn = document.getElementById('vision-prev');
            const nextBtn = document.getElementById('vision-next');

            // Tailwind class sets for prev button
            const prevGray = ['bg-gray-300/70', 'hover:bg-gray-300'];
            const prevBlue = ['bg-[#0F548E]', 'hover:bg-[#0c446f]'];

            let idx = 0;

            function setPrevButtonState() {
                // If we're on the FIRST slide, prev is gray; otherwise it's blue
                const shouldBeBlue = idx !== 0;

                prevBtn.classList.remove(...prevGray, ...prevBlue);
                prevBtn.classList.add(...(shouldBeBlue ? prevBlue : prevGray));
            }

            function render(i) {
                const s = slides[i];
                imgEl.src = s.img;       // image stays within SAME-size box via object-contain
                imgEl.alt = s.title;
                titleEl.textContent = s.title;
                p1El.textContent = s.p1;
                p2El.textContent = s.p2;

                setPrevButtonState();
            }

            prevBtn.addEventListener('click', () => {
                // move back (wrap allowed)
                idx = (idx - 1 + slides.length) % slides.length;
                render(idx);
            });

            nextBtn.addEventListener('click', () => {
                // move forward
                idx = (idx + 1) % slides.length;
                render(idx);
            });

            // Initial render
            render(idx);
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
    </body>
</html>

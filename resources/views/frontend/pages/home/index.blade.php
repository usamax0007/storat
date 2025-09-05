@extends('frontend.layouts.app')
@section('content')
    <section class="bg-[#e9f3fa] py-10 px-4 lg:px-20">
        <div class=" mx-auto">
            <div class="relative rounded-xl overflow-hidden bg-cover bg-center h-[420px] md:min-h-screen" id="heroSlider">
                <div class="absolute inset-0 bg-black/40"></div>
                @if($heroSections->count() > 1)
                    <div class="hero-slides flex transition-transform duration-1000 h-full">
                        @foreach($heroSections as $index => $heroSection)
                            <div class="hero-slide w-full flex-shrink-0 bg-cover h-full" style="background-image: url('{{ asset('assets/'.$heroSection->image) }}');">
                                <!-- Text Overlay -->
                                <div class="relative h-full flex items-center pt-24">
                                    <div class="px-8 md:px-16 text-white max-w-lg">
                                        <p class="text-sm md:text-2xl mb-3">{{$heroSection->title_en}}</p>
                                        <h1 class="text-4xl md:text-6xl font-bold leading-[1.05] md:leading-[1.15]">
                                            {{$heroSection->description_en}} <br>
                                        </h1>
                                        <a href="{{$heroSection->button_link}}"  class="mt-10 inline-flex items-center w-52 gap-4 px-6 py-3 bg-white text-[#0F548E] font-semibold rounded-md shadow hover:bg-gray-100 transition">
                                            <span>{{$heroSection->button_text_en}}</span>
                                            <svg width="25" height="24" class="ml-2" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.2773 4.02734L20.6297 12L12.2773 19.9727" stroke="#0F548E" stroke-width="2.48849" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M20.6291 12L4.37109 12" stroke="#0F548E" stroke-width="2.48849" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="relative h-full flex items-center pt-24 h-full bg-cover" style="background-image: url('{{ asset('assets/'.$heroSections->first()->image) }}');">
                        <div class="px-8 md:px-16 text-white max-w-lg">
                            <p class="text-sm md:text-2xl mb-3">{{$heroSections->first()->title_en}}</p>
                            <h1 class="text-4xl md:text-6xl font-bold leading-[1.05] md:leading-[1.15]">
                                {{$heroSections->first()->description_en}} <br>
                            </h1>
                            <a href="{{$heroSections->first()->button_link}}"  class="mt-10 inline-flex items-center w-52 gap-4 px-6 py-3 bg-white text-[#0F548E] font-semibold rounded-md shadow hover:bg-gray-100 transition">
                                <span>{{$heroSections->first()->button_text_en}}</span>
                                <svg width="25" height="24" class="ml-2" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.2773 4.02734L20.6297 12L12.2773 19.9727" stroke="#0F548E" stroke-width="2.48849" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M20.6291 12L4.37109 12" stroke="#0F548E" stroke-width="2.48849" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                @endif
            </div>
    </section>
    <!-- About / Intro Section -->
    <section class="bg-white py-8 md:py-16">
        <div class="mx-auto px-4 lg:px-20">
            <div class="grid md:grid-cols-2 gap-10 lg:gap-16 items-start">

                <!-- Left: Text -->
                <div class="space-y-5 mt-10 md:pt-20">
                    <h2 class="text-4xl md:text-6xl font-bold tracking-tight text-black">
                        STORAT
                    </h2>

                    <p class="text-2xl md:text-4xl font-semibold text-gray-900">
                        Real Estate Consultancy Co.
                    </p>

                    <div class="space-y-4 text-[13px] md:text-[15px] leading-relaxed text-[#62636C]">
                        <p>
                            Put your Real Estate needs in our hands and lets be your Property Department,
                            nowadays having your Property Department becoming an old school, the growth of
                            telecommuting Laptops, Smartphone and other movers means testimony to the idea
                            that more and more people are leaving the tradition offices behind, currently
                            work is something you do, and no longer a location.
                        </p>
                        <p>
                            Forecast and trends are uniform and projecting exponential growth in companies and
                            individual choosing to work more virtually yet professionally, they call it the work
                            life balance, and STORAT Real Estate Consultancy Co. leading the Real Estate
                            Consultancy with economic shift by choices available nowhere else.
                        </p>
                        <p>
                            STORAT Real Estate Consultancy Co. is a professional Real Estate office provides you
                            the best services but it’s all fraction on the tradition cost, all the services are
                            customized to the client by the client, and according to their budget, there is no
                            one size fits all.
                        </p>
                        <p>
                            Our services and application are across every element at commercial Real Estate
                            industry whether its Large corporates, professional, small business, office personal,
                            Retail in all segments, it works better and it cost less it’s really that simple.
                        </p>
                        <p>
                            Your timing is good too, knowledge is power, and knowledge is stronger with high
                            credibility to deliver it to you.
                        </p>
                    </div>
                </div>

                <!-- Right: Image -->
                <div class="md:pl-4">
                    <div class="rounded-xl overflow-hidden ring-1 ring-black/10 shadow-sm bg-gray-100">
                        <!-- Replace with your image -->
                        <img
                            src="images/img_1.png"
                            alt="Modern building"
                            class="w-full h-[420px] md:h-[800px] object-cover fit-content"
                        />
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Services Section -->
    <section class="bg-[#e9f3fa] py-20">
        <div class="mx-auto px-4 px-10 lg:px-20">
            <h2 class="text-3xl md:text-6xl font-bold text-center text-black mb-28">
                Our Services
            </h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-x-12 gap-y-28">
                @foreach($services as $service)
                    <div class="relative bg-white rounded-xl shadow-md pt-28 pb-10 px-8 text-center">
                        <div class="absolute -top-20 left-1/2 -translate-x-1/2">
                            <div class="w-36 h-36 rounded-full bg-[#0F548E] grid place-items-center shadow-md">
                                <img src="{{ asset('assets/'.$service->image) }}" alt="{{ $service->title_en }}" class="w-24 h-24">
                            </div>
                        </div>
                        <h3 class="text-3xl font-bold text-black leading-tight mt-6">
                            <a href="{{ route('service.show', $service->id) }}">
                                {{$service->title_en}}
                            </a>

                        </h3>
                        <p class="mt-5 text-[22px] text-gray-600 leading-[1.4]">
                            {{$service->sub_title_en}}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Vision Section -->
    <section class="bg-white py-12 md:py-20">
        <div class="mx-auto px-4 lg:px-20">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center" id="vision-slider">

                <!-- Left: Image (fixed size) -->
                <div class="relative">
                    <div class="w-full h-[520px] md:h-[640px] lg:h-[760px] rounded-2xl shadow overflow-hidden flex items-center justify-center bg-white">
                        <img
                            id="vision-img"
                            src="images/img_9.png"
                            alt="Slide image"
                            class="w-full w-full h-[520px] md:h-[640px] lg:h-[760px]  rounded-2xl"
                        />
                    </div>
                </div>


                <!-- Right: Card -->
                <div class="relative">
                    <div
                        class="bg-white rounded-2xl shadow-xl ring-1 ring-black/5
                 p-6 sm:p-8 md:p-10 lg:p-12
                 lg:-ml-24 lg:-mt-8"
                    >
                        <h2 id="vision-title" class="text-4xl md:text-6xl font-bold text-black mb-5">
                            Our Vision
                        </h2>

                        <div class="space-y-4 text-gray-600 leading-relaxed md:text-[15px]">
                            <p id="vision-p1">
                                Forecast and trends are uniform and projecting exponential growth in companies and
                                individual choosing to work more virtually yet professionally…
                            </p>
                            <p id="vision-p2">
                                STORAT Real Estate Consultancy Co. is a professional Real Estate office provides you the
                                best services but it’s all Fraction on the tradition cost…
                            </p>
                        </div>

                        <!-- Controls -->
                        <div class="mt-8 flex items-center gap-4 justify-end">
                            <button id="vision-prev"
                                    class="w-12 h-12 rounded-[12px] bg-gray-300/70 hover:bg-gray-300 transition inline-flex items-center justify-center"
                                    aria-label="Previous slide">
                                <svg class="w-6 h-6 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
                                </svg>
                            </button>
                            <button id="vision-next"
                                    class="w-12 h-12 rounded-[12px] bg-[#0F548E] hover:bg-[#0c446f] transition inline-flex items-center justify-center"
                                    aria-label="Next slide">
                                <svg class="w-6 h-6 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Latest Projects -->
    <section class="bg-[#e9f3fa] py-16 md:py-20">
        <div class="mx-auto">
            <h2 class="text-4xl md:text-6xl lg:text-6xl font-bold text-center text-black tracking-tight">
                Latest Projects
            </h2>
            <div class="mt-10 md:mt-12  grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8 justify-items-center">
                <!-- Card 1 -->
                <a href="#" class="group block">
                    <div class="rounded-2xl overflow-hidden shadow-sm bg-white">
                        <img src="images/img_10.png" alt="Project 1"
                             class="h-[340px] md:h-[450px] w-full object-cover transition-transform duration-300 group-hover:scale-[1.02]">
                    </div>
                </a>

                <!-- Card 2 -->
                <a href="#" class="group block">
                    <div class="rounded-2xl overflow-hidden shadow-sm bg-white">
                        <img src="images/img_11.png" alt="Project 2"
                             class="h-[340px] md:h-[450px] w-full object-cover transition-transform duration-300 group-hover:scale-[1.02]">
                    </div>
                </a>

                <!-- Card 3 -->
                <a href="#" class="group block">
                    <div class="rounded-2xl overflow-hidden shadow-sm bg-white">
                        <img src="images/img_12.png" alt="Project 3"
                             class="h-[340px] md:h-[450px] w-full object-cover transition-transform duration-300 group-hover:scale-[1.02]">
                    </div>
                </a>
                <!-- Card 1 -->
                <a href="#" class="group block">
                    <div class="rounded-2xl overflow-hidden shadow-sm bg-white">
                        <img src="images/img_13.png" alt="Project 1"
                             class="h-[340px] md:h-[450px] w-full object-cover transition-transform duration-300 group-hover:scale-[1.02]">
                    </div>
                </a>

                <!-- Card 2 -->
                <a href="#" class="group block">
                    <div class="rounded-2xl overflow-hidden shadow-sm bg-white">
                        <img src="images/img_14.png" alt="Project 2"
                             class="h-[340px] md:h-[450px] w-full object-cover transition-transform duration-300 group-hover:scale-[1.02]">
                    </div>
                </a>

                <!-- Card 3 -->
                <a href="#" class="group block">
                    <div class="rounded-2xl overflow-hidden shadow-sm bg-white">
                        <img src="images/img_15.png" alt="Project 3"
                             class="h-[340px] md:h-[450px] w-full object-cover transition-transform duration-300 group-hover:scale-[1.02]">
                    </div>
                </a>
                <!-- Card 1 -->
                <a href="#" class="group block">
                    <div class="rounded-2xl overflow-hidden shadow-sm bg-white">
                        <img src="images/img_16.png" alt="Project 1"
                             class="h-[340px] md:h-[450px] w-full object-cover transition-transform duration-300 group-hover:scale-[1.02]">
                    </div>
                </a>

                <!-- Card 2 -->
                <a href="#" class="group block">
                    <div class="rounded-2xl overflow-hidden shadow-sm bg-white">
                        <img src="images/img_17.png" alt="Project 2"
                             class="h-[340px] md:h-[450px] w-full object-cover transition-transform duration-300 group-hover:scale-[1.02]">
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!-- Our Impact -->
    <section class="bg-white py-16 md:py-24">
        <div class="max-w-7xl mx-auto px-4 md:px-20">
            <div class="grid items-center gap-10 lg:gap-14 lg:grid-cols-2">

                <!-- Left: Copy -->
                <div>
                    <h2 class="text-4xl md:text-6xl font-bold tracking-tight text-black">
                        Our Impact
                    </h2>
                    <p class="mt-6 text-[17px] md:text-[18px] leading-relaxed text-[#62636C] max-w-xl">
                        Trust STORAT Real Estate Consultancy Co. to handle your property needs. In a world shifting
                        towards virtual work, we lead with unique choices, aligning with the trend of remote
                        professionalism. Experience the impact of innovation in real estate with us.
                    </p>
                </div>

                <!-- Right: Image with decorative shapes -->
                <div class="relative">
                    <!-- Yellow top-left tab -->
                    <div class="hidden lg:block absolute -top-4 -left-4 w-36 h-36 rounded-xl bg-[#F0D000]"></div>
                    <div class="hidden lg:block absolute -bottom-4 -right-4 w-52 h-52 rounded-2xl bg-[#0F548E]"></div>

                    <!-- Image card -->
                    <div class="relative rounded-3xl overflow-hidden shadow-md">
                        <img
                            src="images/img_18.png"
                            alt="Impact"
                            class="w-full h-[300px] md:h-[500px] object-cover"
                        />
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Our Partners -->
    <section class="bg-white py-16">
        <div class="text-center">

            <!-- Heading -->
            <h2 class="text-4xl md:text-6xl font-bold text-black mb-12">
                Our Partners
            </h2>

            <!-- Logos -->
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-10 md:gap-16 place-items-center">
                <img src="images/img_19.png" alt="Partner 1" class="h-20 md:h-24 object-contain">
                <img src="images/img_20.png" alt="Partner 2" class="h-20 md:h-24 object-contain">
                <img src="images/img_21.png" alt="Partner 3" class="h-20 md:h-24 object-contain">
                <img src="images/img_22.png" alt="Partner 4" class="h-20 md:h-24 object-contain">
                <img src="images/img_19.png" alt="Partner 5" class="h-20 md:h-24 object-contain">
            </div>

        </div>
    </section>
    <!-- Contact Section -->
    <section class="bg-[#e9f3fa] py-16">
        <div class="mx-auto px-4 md:px-20 text-center">
            <!-- Heading -->
            <h2 class="text-3xl md:text-5xl font-bold text-black leading-snug mb-12">
                Get professional and specialist real estate<br class="hidden md:block"> advice
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <!-- Card 1: Call Us -->
                <div class="bg-white rounded-xl border border-[#0F548E] py-4 px-8 text-left shadow-sm">
                    <!-- Icon -->
                    <div class="w-10 h-10 rounded-lg bg-[#F4F7FA] flex items-center justify-center mb-8">
                        <!-- Phone Icon -->
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" y="0.5" width="39" height="39" rx="9.5" fill="#FDFDFE"/>
                            <rect x="0.5" y="0.5" width="39" height="39" rx="9.5" stroke="#CDCED7"/>
                            <path d="M28.0002 18.999H30.0002C30.0002 13.869 26.1272 10 20.9902 10V12C25.0522 12 28.0002 14.943 28.0002 18.999Z" fill="black"/>
                            <path d="M21.0003 15.9983C23.1033 15.9983 24.0003 16.8953 24.0003 18.9983H26.0003C26.0003 15.7733 24.2253 13.9983 21.0003 13.9983V15.9983ZM24.4223 21.4413C24.2301 21.2666 23.9776 21.1735 23.7181 21.1815C23.4585 21.1895 23.2123 21.2981 23.0313 21.4843L20.6383 23.9453C20.0623 23.8353 18.9043 23.4743 17.7123 22.2853C16.5203 21.0923 16.1593 19.9313 16.0523 19.3593L18.5113 16.9653C18.6977 16.7844 18.8064 16.5381 18.8144 16.2785C18.8225 16.0189 18.7292 15.7663 18.5543 15.5743L14.8593 11.5113C14.6843 11.3186 14.4412 11.2018 14.1814 11.1855C13.9217 11.1693 13.6659 11.2549 13.4683 11.4243L11.2983 13.2853C11.1254 13.4588 11.0222 13.6897 11.0083 13.9343C10.9933 14.1843 10.7073 20.1063 15.2993 24.7003C19.3053 28.7053 24.3233 28.9983 25.7053 28.9983C25.9073 28.9983 26.0313 28.9923 26.0643 28.9903C26.3088 28.9766 26.5396 28.8729 26.7123 28.6993L28.5723 26.5283C28.7417 26.3308 28.8276 26.0751 28.8115 25.8153C28.7954 25.5556 28.6788 25.3124 28.4863 25.1373L24.4223 21.4413Z" fill="black"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Call Us</h3>
                    <p class="text-black text-lg underline font-bold">+965 5122 0400</p>
                </div>

                <!-- Card 2: Email Us -->
                <div class="bg-white rounded-xl border border-[#0F548E] py-4 px-8 text-left shadow-sm">
                    <!-- Icon -->
                    <div class="w-10 h-10 rounded-lg bg-[#F4F7FA] flex items-center justify-center mb-8">
                        <!-- Email Icon -->
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" y="0.5" width="39" height="39" rx="9.5" fill="#FDFDFE"/>
                            <rect x="0.5" y="0.5" width="39" height="39" rx="9.5" stroke="#CDCED7"/>
                            <path d="M26 11H9V23H12V26L16 23H26V11Z" stroke="#1E1F24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M26 11H24V23H26V11Z" fill="#1E1F24"/>
                            <path d="M14.5 15.5H20.5" stroke="#1E1F24" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M14.5 18.5H20.5" stroke="#1E1F24" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M25.67 14H31V26H28V29L24 26H18" stroke="#1E1F24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                    </div>
                    <h3 class="text-2xl font-bold mb-4">Email Us</h3>
                    <p class="text-black text-lg underline font-bold">info@storat-re.com</p>
                </div>

                <!-- Card 3: Follow Us -->
                <div class="bg-white rounded-xl border border-[#0F548E] py-4 px-8 text-left shadow-sm">
                    <!-- Icon -->
                    <div class="w-10 h-10 rounded-lg bg-[#F4F7FA] flex items-center justify-center mb-8">
                        <!-- Chat Icon -->
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" y="0.5" width="39" height="39" rx="9.5" fill="white"/>
                            <rect x="0.5" y="0.5" width="39" height="39" rx="9.5" stroke="#CDCED7"/>
                            <path d="M12.017 25.841C12.1727 25.9973 12.292 26.186 12.3664 26.3937C12.4408 26.6014 12.4685 26.8229 12.4475 27.0425C12.3421 28.0589 12.1422 29.0632 11.8505 30.0425C13.943 29.558 15.221 28.997 15.8015 28.703C16.1308 28.5362 16.5099 28.4967 16.8665 28.592C17.8887 28.8645 18.9421 29.0017 20 29C25.994 29 30.5 24.7895 30.5 20C30.5 15.212 25.994 11 20 11C14.006 11 9.5 15.212 9.5 20C9.5 22.202 10.4255 24.245 12.017 25.841ZM11.2775 31.6985C10.9221 31.769 10.5656 31.8335 10.208 31.892C9.908 31.94 9.68 31.628 9.7985 31.349C9.93169 31.0349 10.0538 30.7162 10.1645 30.3935L10.169 30.3785C10.541 29.2985 10.844 28.0565 10.955 26.9C9.1145 25.055 8 22.64 8 20C8 14.201 13.373 9.5 20 9.5C26.627 9.5 32 14.201 32 20C32 25.799 26.627 30.5 20 30.5C18.8115 30.5016 17.6279 30.3473 16.4795 30.041C15.6995 30.4355 14.021 31.154 11.2775 31.6985Z" fill="black"/>
                            <path d="M18.599 18.1402C18.3068 17.6852 17.8749 17.3373 17.368 17.1488C16.8611 16.9603 16.3068 16.9414 15.7883 17.095C15.2698 17.2486 14.8151 17.5662 14.4927 18.0003C14.1702 18.4344 13.9973 18.9615 14 19.5022C14.0003 19.95 14.1208 20.3895 14.349 20.7748C14.5772 21.1601 14.9046 21.4771 15.2972 21.6926C15.6897 21.9081 16.1329 22.0143 16.5805 21.9999C17.0281 21.9856 17.4636 21.8514 17.8415 21.6112C17.645 22.1947 17.279 22.8172 16.676 23.4412C16.5607 23.5606 16.4974 23.7209 16.5002 23.8868C16.5016 23.969 16.5192 24.0501 16.5519 24.1255C16.5847 24.2009 16.6319 24.2691 16.691 24.3262C16.7501 24.3833 16.8199 24.4283 16.8964 24.4584C16.9728 24.4886 17.0545 24.5034 17.1366 24.502C17.3026 24.4992 17.4607 24.4306 17.576 24.3112C19.805 22.0012 19.5155 19.4902 18.599 18.1432V18.1402ZM24.599 18.1402C24.3068 17.6852 23.8749 17.3373 23.368 17.1488C22.8612 16.9603 22.3068 16.9414 21.7883 17.095C21.2698 17.2486 20.8151 17.5662 20.4927 18.0003C20.1702 18.4344 19.9973 18.9615 20 19.5022C20.0003 19.95 20.1208 20.3895 20.349 20.7748C20.5772 21.1601 20.9046 21.4771 21.2972 21.6926C21.6897 21.9081 22.1329 22.0143 22.5805 21.9999C23.0281 21.9856 23.4636 21.8514 23.8415 21.6112C23.645 22.1947 23.279 22.8172 22.676 23.4412C22.6189 23.5003 22.574 23.5701 22.5438 23.6465C22.5137 23.723 22.4988 23.8046 22.5002 23.8868C22.5016 23.969 22.5192 24.0501 22.5519 24.1255C22.5847 24.2009 22.6319 24.2691 22.691 24.3262C22.7501 24.3833 22.8199 24.4283 22.8964 24.4584C22.9728 24.4886 23.0545 24.5034 23.1366 24.502C23.2188 24.5006 23.2999 24.483 23.3753 24.4503C23.4507 24.4176 23.5189 24.3703 23.576 24.3112C25.805 22.0012 25.5155 19.4902 24.599 18.1432V18.1402Z" fill="black"/>
                        </svg>

                    </div>
                    <h3 class="text-2xl font-bold mb-4">Follow Us</h3>
                    <div class="flex items-center gap-4">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_456_27073)">
                                <path d="M20.5 4H11.5C7.3585 4 4 7.3585 4 11.5V20.5C4 24.6415 7.3585 28 11.5 28H20.5C24.6415 28 28 24.6415 28 20.5V11.5C28 7.3585 24.6415 4 20.5 4ZM25.75 20.5C25.75 23.395 23.395 25.75 20.5 25.75H11.5C8.605 25.75 6.25 23.395 6.25 20.5V11.5C6.25 8.605 8.605 6.25 11.5 6.25H20.5C23.395 6.25 25.75 8.605 25.75 11.5V20.5Z" fill="black"/>
                                <path d="M16 10C12.6865 10 10 12.6865 10 16C10 19.3135 12.6865 22 16 22C19.3135 22 22 19.3135 22 16C22 12.6865 19.3135 10 16 10ZM16 19.75C13.933 19.75 12.25 18.067 12.25 16C12.25 13.9315 13.933 12.25 16 12.25C18.067 12.25 19.75 13.9315 19.75 16C19.75 18.067 18.067 19.75 16 19.75Z" fill="black"/>
                                <path d="M22.4499 10.349C22.8914 10.349 23.2494 9.99105 23.2494 9.5495C23.2494 9.10795 22.8914 8.75 22.4499 8.75C22.0083 8.75 21.6504 9.10795 21.6504 9.5495C21.6504 9.99105 22.0083 10.349 22.4499 10.349Z" fill="black"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_456_27073">
                                    <rect width="24" height="24" fill="white" transform="translate(4 4)"/>
                                </clipPath>
                            </defs>
                        </svg>

                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.5 8.25V5.25C13.5 4.422 14.172 3.75 15 3.75H16.5V0H13.5C11.0145 0 9 2.0145 9 4.5V8.25H6V12H9V24H13.5V12H16.5L18 8.25H13.5Z" fill="black"/>
                        </svg>

                    </div>
                </div>

            </div>

        </div>

        <!-- Get a Quote -->
        <div class="mx-auto px-4 md:px-20 mt-10">
            <!-- Outer card -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-4 md:p-8 lg:p-10">
                <div class="grid lg:grid-cols-2 gap-10 items-center">

                    <!-- Left: Form card -->
                    <div>
                        <form class="rounded-xl border border-gray-300 p-5 md:p-6 lg:p-8">
                            <!-- Full Name -->
                            <label for="full-name" class="block text-sm font-semibold text-gray-800">Full Name</label>
                            <input id="full-name" type="text" placeholder="Enter name"
                                   class="mt-2 w-full rounded-lg border border-gray-300 h-11 px-4 text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-[#0F548E]/30 focus:border-[#0F548E]" />

                            <!-- Email -->
                            <label for="email" class="block text-sm font-semibold text-gray-800 mt-5">Email</label>
                            <input id="email" type="email" placeholder="Enter mail"
                                   class="mt-2 w-full rounded-lg border border-gray-300 h-11 px-4 text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-[#0F548E]/30 focus:border-[#0F548E]" />

                            <!-- Select -->
                            <label for="service" class="block text-sm font-semibold text-gray-800 mt-5">Real Estate Development</label>
                            <div class="relative mt-2">
                                <select id="service"
                                        class="w-full appearance-none rounded-lg border border-gray-300 h-11 pl-4 pr-10 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-[#0F548E]/30 focus:border-[#0F548E]">
                                    <option>real estate</option>
                                    <option>leasing</option>
                                    <option>property valuation</option>
                                    <option>consultancy</option>
                                </select>
                                <!-- Chevron -->
                                <svg class="pointer-events-none absolute right-3 top-1/2 -translate-y-1/2 h-4 w-4 text-gray-500"
                                     viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                          d="M10 12a1 1 0 0 1-.707-.293l-4-4a1 1 0 1 1 1.414-1.414L10 9.586l3.293-3.293a1 1 0 1 1 1.414 1.414l-4 4A1 1 0 0 1 10 12z"
                                          clip-rule="evenodd" />
                                </svg>
                            </div>

                            <!-- Button -->
                            <button type="submit"
                                    class="mt-6 w-full h-11 rounded-lg bg-[#0F548E] text-white font-semibold inline-flex items-center justify-center hover:bg-[#0c446f] transition">
                                Get A Quote
                                <svg class="ml-2 h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                                </svg>
                            </button>
                        </form>
                    </div>

                    <!-- Right: Illustration -->
                    <div class="flex justify-center lg:justify-end">
                        <img src="images/img_23.png" alt="Support agent"
                             class="w-full md:w-[450px] h-auto object-contain" />
                    </div>

                </div>
            </div>
        </div>

    </section>

@endsection

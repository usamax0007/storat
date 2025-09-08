@extends('frontend.layouts.app')
@section('content')
    <section class="bg-[#e9f3fa]">
        <div class="mx-auto">
            <div class="relative overflow-hidden bg-cover bg-center h-[920px] md:min-h-screen" id="heroSlider">
                <div class="absolute inset-0 bg-black/40"></div>

                @if($heroSections->count() > 1)
                    <div class="hero-slides flex transition-transform duration-1000 h-full">
                        @foreach($heroSections as $index => $heroSection)
                            <div class="hero-slide w-full flex-shrink-0 bg-cover h-full"
                                 style="background-image: url('{{ asset('storage/'.$heroSection->image) }}');">

                                <!-- Text Overlay -->
                                <div class="relative h-full flex items-center pt-16 md:pt-24">
                                    <div class="px-4 sm:px-8 md:px-16 text-white max-w-lg">
                                        <p class="text-xs sm:text-base md:text-2xl mb-2 md:mb-3">{{$heroSection->title_en}}</p>
                                        <h1 class="text-2xl sm:text-3xl md:text-6xl font-bold leading-tight md:leading-[1.15]">
                                            {{$heroSection->description_en}} <br>
                                        </h1>
                                        <a href="{{$heroSection->button_link}}"
                                           class="mt-6 md:mt-10 inline-flex items-center w-40 sm:w-52 gap-2 sm:gap-4 px-4 sm:px-6 py-2 sm:py-3 bg-white text-[#0F548E] font-semibold rounded-md shadow hover:bg-gray-100 transition">
                                            <span class="text-sm sm:text-base">{{$heroSection->button_text_en}}</span>
                                            <svg width="22" height="22" class="ml-1 sm:ml-2" viewBox="0 0 25 24" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.2773 4.02734L20.6297 12L12.2773 19.9727"
                                                      stroke="#0F548E" stroke-width="2" stroke-linecap="round"
                                                      stroke-linejoin="round"/>
                                                <path d="M20.6291 12L4.37109 12" stroke="#0F548E" stroke-width="2"
                                                      stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>

                                <!-- White Info Box -->
                                <div class="absolute bottom-6 sm:bottom-12 md:bottom-[206px] right-4 sm:right-6 md:right-8
                                        bg-white rounded-2xl shadow-lg p-4 sm:p-6 grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6 w-[90%] sm:w-auto">

                                    <!-- Renters -->
                                    <div class="flex flex-col items-start gap-2 sm:gap-3">
                                        <div class="w-10 h-10 sm:w-12 sm:h-12 flex items-center justify-center rounded-full bg-[#e9f3fa]">
                                            <img src="{{ asset('storage/' .$heroSections->rent_icon) }}" alt="">
                                        </div>
                                        <div>
                                            <p class="text-base sm:text-lg font-bold text-[#0F548E]">{{$heroSections->rent_heading_en}}</p>
                                            <p class="text-xs sm:text-sm text-black">{{$heroSections->rent_sub_heading_en}}</p>
                                        </div>
                                    </div>

                                    <!-- Properties -->
                                    <div class="flex flex-col items-start gap-2 sm:gap-3">
                                        <div class="w-10 h-10 sm:w-12 sm:h-12 flex items-center justify-center rounded-full bg-[#e9f3fa]">
                                            <img src="{{ asset('storage/' .$heroSections->properties_icon) }}" alt="">
                                        </div>
                                        <div>
                                            <p class="text-base sm:text-lg font-bold text-[#0F548E]">{{$heroSections->properties_heading_en}}</p>
                                            <p class="text-xs sm:text-sm text-black">{{$heroSections->properties_sub_heading_en}}</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="relative h-full flex items-center pt-16 md:pt-24 h-full bg-cover"
                         style="background-image: url('{{ asset('storage/'.$heroSections->first()->image) }}');">
                        <div class="px-4 sm:px-8 md:px-16 text-white max-w-lg">
                            <p class="text-xs sm:text-base md:text-2xl mb-2 md:mb-3">{{$heroSections->first()->title_en}}</p>
                            <h1 class="text-2xl sm:text-3xl md:text-6xl font-bold leading-tight md:leading-[1.15]">
                                {{$heroSections->first()->description_en}} <br>
                            </h1>
                            <a href="{{$heroSections->first()->button_link}}"
                               class="mt-6 md:mt-10 inline-flex items-center w-40 sm:w-52 gap-2 sm:gap-4 px-4 sm:px-6 py-2 sm:py-3 bg-white text-[#0F548E] font-semibold rounded-md shadow hover:bg-gray-100 transition">
                                <span class="text-sm sm:text-base">{{$heroSections->first()->button_text_en}}</span>
                                <svg width="22" height="22" class="ml-1 sm:ml-2" viewBox="0 0 25 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.2773 4.02734L20.6297 12L12.2773 19.9727" stroke="#0F548E"
                                          stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M20.6291 12L4.37109 12" stroke="#0F548E" stroke-width="2"
                                          stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </div>

                        <!-- White Info Box (Single Image) -->
                        <div class="absolute bottom-6 sm:bottom-12 md:bottom-[206px] right-4 sm:right-6 md:right-8
                                bg-white rounded-2xl shadow-lg p-4 sm:p-6 grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6 w-[90%] sm:w-auto">

                            <!-- Renters -->
                            <div class="flex flex-col items-start gap-2 sm:gap-3">
                                <div class="w-10 h-10 sm:w-12 sm:h-12 flex items-center justify-center rounded-full bg-[#e9f3fa]">
                                    <img src="{{ asset('storage/' .$heroSections->first()->rent_icon) }}" alt="">
                                </div>
                                <div>
                                    <p class="text-base sm:text-lg font-bold text-[#0F548E]">{{$heroSections->first()->rent_heading_en}}</p>
                                    <p class="text-xs sm:text-sm text-black">{{$heroSections->first()->rent_sub_heading_en}}</p>
                                </div>
                            </div>

                            <!-- Properties -->
                            <div class="flex flex-col items-start gap-2 sm:gap-3">
                                <div class="w-10 h-10 sm:w-12 sm:h-12 flex items-center justify-center rounded-full bg-[#e9f3fa]">
                                    <img src="{{ asset('storage/' .$heroSections->first()->properties_icon) }}" alt="">
                                </div>
                                <div>
                                    <p class="text-base sm:text-lg font-bold text-[#0F548E]">{{$heroSections->first()->properties_heading_en}}</p>
                                    <p class="text-xs sm:text-sm text-black">{{$heroSections->first()->properties_sub_heading_en}}</p>
                                </div>
                            </div>

                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>


    <!-- About / Intro Section -->
    <section class="bg-white py-12 md:py-20">
        <div class="max-w-full mx-auto px-4 lg:px-12">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <!-- Left Images -->
                <div class="relative pr-10">
                    <!-- Main big image -->
                    <img src="{{ asset('storage/' . $about->image_main) }}"
                         alt="House"
                         class="w-[470px] h-[420px] md:h-[520px] object-cover">


                    <!-- Small overlapping image -->
                    <div class="absolute bottom-[-100px] left-[180px] md:left-[384px] w-[220px] md:w-[260px] rounded-xl overflow-hidden shadow-lg border-4 border-white">
                        <img src="{{ asset('storage/' . $about->image_inner) }}"
                             alt="Modern building"
                             class="w-full h-[200px] md:h-[240px] object-cover">
                    </div>
                </div>

                <!-- Right Content -->
                <div class="space-y-5 mt-12 md:mt-0">
                    <h2 class="text-4xl md:text-5xl font-extrabold text-black tracking-tight">
                        {{ $about->title_en }}
                    </h2>
                    <p class="text-xl md:text-2xl font-semibold text-gray-900">
                        {{ $about->subtitle_en }}
                    </p>
                    <div class="space-y-4 text-[14px] md:text-[16px] leading-relaxed text-[#62636C]">
                        <p>{!! nl2br(e($about->description_en)) !!}</p>

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
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-x-12 gap-y-10">
                @foreach($services as $service)
                    <div class="bg-white rounded-xl shadow p-6">
                        <!-- Icon -->
                        <div class="w-[120px] h-[120px] rounded-lg bg-blue-50 flex items-center justify-center p-6">
                            <img src="{{ asset('storage/'.$service->icon) }}"
                                 alt="{{ $service->title_en }}"
                                 class="w-[50%] h-[50%]">
                        </div>

                        <!-- Title -->
                        <h3 class="mt-4 text-[32px] font-bold text-black">
                            <a href="{{ route('service.show', $service->id) }}">
                                {{ $service->title_en }}
                            </a>
                        </h3>

                        <!-- Subtitle -->
                        <p class="mt-2 text-[#7B7A7A] text-[20px] leading-relaxed">
                            {{ $service->sub_title_en }}
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
    <section class="bg-blue-50 py-12 px-4">
        <div class="max-w-5xl mx-auto text-center">
            <h2 class="text-3xl sm:text-3xl md:text-5xl font-bold mb-8">
                Get professional and specialist real estate advice
            </h2>
            <div class="bg-white border border-blue-200 rounded-lg shadow-sm grid grid-cols-1 md:grid-cols-3 items-center text-center py-4 px-6 mb-8 sm:max-w-3xl md:max-w-5xl mx-auto gap-6">
                <a href="tel:+96551220400"
                   class="flex items-center space-x-2 text-[#0F548E] font-semibold hover:underline">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.83332 4.66654C10.5858 4.66654 11.3333 5.41404 11.3333 7.16654H13C13 4.47904 11.5208 2.99987 8.83332 2.99987V4.66654ZM11.685 9.20237C11.5249 9.05683 11.3144 8.97921 11.0982 8.9859C10.8819 8.99259 10.6767 9.08305 10.5258 9.23821L8.53166 11.289C8.05166 11.1974 7.08666 10.8965 6.09332 9.90571C5.09999 8.91154 4.79916 7.94404 4.70999 7.46737L6.75916 5.47237C6.9145 5.32165 7.0051 5.11639 7.01179 4.90005C7.01848 4.6837 6.94073 4.47324 6.79499 4.31321L3.71582 0.927374C3.57003 0.766838 3.36739 0.66946 3.15095 0.655923C2.93451 0.642386 2.72132 0.713756 2.55666 0.854874L0.748324 2.40571C0.60425 2.5503 0.518257 2.74275 0.506657 2.94654C0.494157 3.15487 0.255824 8.08987 4.08249 11.9182C7.42082 15.2557 11.6025 15.4999 12.7542 15.4999C12.9225 15.4999 13.0258 15.4949 13.0533 15.4932C13.2571 15.4818 13.4494 15.3954 13.5933 15.2507L15.1433 13.4415C15.2845 13.277 15.3561 13.0639 15.3427 12.8474C15.3293 12.631 15.2321 12.4283 15.0717 12.2824L11.685 9.20237Z" fill="#0F548E"/>
                    </svg>
                    <span>+965 5122 0400</span>
                </a>
                <a href="mailto:info@storat-re.com"
                   class="flex items-center justify-center space-x-2 text-[#0F548E] font-semibold hover:underline">
                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.25 4.375H3.625V11.875H5.5V13.75L8 11.875H14.25V4.375Z" stroke="#0F548E" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M14.25 4.375H13V11.875H14.25V4.375Z" fill="#0F548E"/>
                        <path d="M7.0625 7.1875H10.8125" stroke="#0F548E" stroke-width="0.625" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M7.0625 9.0625H10.8125" stroke="#0F548E" stroke-width="0.625" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M14.0438 6.25H17.375V13.75H15.5V15.625L13 13.75H9.25" stroke="#0F548E" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span>info@storat-re.com</span>
                </a>
                <div class="flex justify-center md:justify-end space-x-4 text-[#0F548E]">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.5 0H7.5C3.3585 0 0 3.3585 0 7.5V16.5C0 20.6415 3.3585 24 7.5 24H16.5C20.6415 24 24 20.6415 24 16.5V7.5C24 3.3585 20.6415 0 16.5 0ZM21.75 16.5C21.75 19.395 19.395 21.75 16.5 21.75H7.5C4.605 21.75 2.25 19.395 2.25 16.5V7.5C2.25 4.605 4.605 2.25 7.5 2.25H16.5C19.395 2.25 21.75 4.605 21.75 7.5V16.5Z" fill="#0F548E"/>
                        <path d="M12 6C8.6865 6 6 8.6865 6 12C6 15.3135 8.6865 18 12 18C15.3135 18 18 15.3135 18 12C18 8.6865 15.3135 6 12 6ZM12 15.75C9.933 15.75 8.25 14.067 8.25 12C8.25 9.9315 9.933 8.25 12 8.25C14.067 8.25 15.75 9.9315 15.75 12C15.75 14.067 14.067 15.75 12 15.75Z" fill="#0F548E"/>
                        <path d="M18.4504 6.34949C18.8919 6.34949 19.2499 5.99154 19.2499 5.54999C19.2499 5.10844 18.8919 4.75049 18.4504 4.75049C18.0088 4.75049 17.6509 5.10844 17.6509 5.54999C17.6509 5.99154 18.0088 6.34949 18.4504 6.34949Z" fill="#0F548E"/>
                    </svg>
                    <a href="#" class="hover:text-blue-900">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.5 8.25V5.25C13.5 4.422 14.172 3.75 15 3.75H16.5V0H13.5C11.0145 0 9 2.0145 9 4.5V8.25H6V12H9V24H13.5V12H16.5L18 8.25H13.5Z" fill="#0F548E"/>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="bg-white border rounded-xl shadow p-6 mx-auto sm:max-w-3xl md:max-w-5xl">
                <form id="contactForm" class="space-y-4">
                    <div>
                        <label class="block text-sm font-semibold text-left">Full Name</label>
                        <input type="text" name="name" placeholder="Enter name" class="w-full border rounded-lg px-4 py-2 mt-1 focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-left">Email</label>
                        <input type="email" name="email" placeholder="Enter mail" class="w-full border rounded-lg px-4 py-2 mt-1 focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-left">Real Estate Development</label>
                        <select name="development_type" class="w-full border rounded-lg px-4 py-2 mt-1 focus:ring-2 focus:ring-blue-500">
                            <option value="real estate">real estate</option>
                            <option value="commercial">commercial</option>
                            <option value="residential">residential</option>
                        </select>
                    </div>
                    <button type="submit" class="w-full bg-[#0F548E] text-white font-semibold p-3 gap-3 rounded-lg hover:bg-blue-900 flex justify-center items-center">
                        Get A Quote
                    </button>
                </form>
            </div>
        </div>
    </section>

@endsection

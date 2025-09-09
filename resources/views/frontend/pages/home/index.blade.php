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
                                        <p class="text-xs sm:text-base md:text-2xl mb-2 md:mb-3">{{ app()->getLocale() === 'en' ? $heroSection->title_en : $heroSection->title_ar}}</p>
                                        <h1 class="text-2xl sm:text-3xl md:text-6xl font-bold leading-tight md:leading-[1.15]">
                                            {{app()->getLocale() === 'en' ?$heroSection->description_en:$heroSection->description_ar}} <br>
                                        </h1>
                                        <a href="{{$heroSection->button_link}}"
                                           class="mt-6 md:mt-10 inline-flex items-center w-40 sm:w-52 gap-2 sm:gap-4 px-4 sm:px-6 py-2 sm:py-3 bg-white text-[#0F548E] font-semibold rounded-md shadow hover:bg-gray-100 transition">
                                            <span class="text-sm sm:text-base">{{app()->getLocale() === 'en' ? $heroSection->button_text_en:$heroSection->button_text_ar}}</span>
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
                                <div class="absolute bottom-6 sm:bottom-12 md:bottom-[206px]
                            end-4 sm:end-6 md:end-8 bg-white rounded-2xl shadow-lg p-4 sm:p-6 grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6 w-[90%] sm:w-auto">

                                    <!-- Renters -->
                                    <div class="flex flex-col items-start gap-2 sm:gap-3">
                                        <div class="w-10 h-10 sm:w-12 sm:h-12 flex items-center justify-center rounded-full bg-[#e9f3fa]">
                                            <img src="{{ asset('storage/' .$heroSections->rent_icon) }}" alt="">
                                        </div>
                                        <div>
                                            <p class="text-base sm:text-lg font-bold text-[#0F548E]">{{app()->getLocale() === 'en' ? $heroSections->rent_heading_en : $heroSections->rent_heading_ar}}</p>
                                            <p class="text-xs sm:text-sm text-black">{{app()->getLocale() === 'en' ? $heroSections->rent_sub_heading_en : $heroSections->rent_sub_heading_ar}}</p>
                                        </div>
                                    </div>

                                    <!-- Properties -->
                                    <div class="flex flex-col items-start gap-2 sm:gap-3">
                                        <div class="w-10 h-10 sm:w-12 sm:h-12 flex items-center justify-center rounded-full bg-[#e9f3fa]">
                                            <img src="{{ asset('storage/' .$heroSections->properties_icon) }}" alt="">
                                        </div>
                                        <div>
                                            <p class="text-base sm:text-lg font-bold text-[#0F548E]">{{ app()->getLocale() === 'en' ? $heroSections->properties_heading_en : $heroSections->properties_heading_ar}}</p>
                                            <p class="text-xs sm:text-sm text-black">{{app()->getLocale() === 'en' ? $heroSections->properties_sub_heading_en : $heroSections->properties_sub_heading_ar}}</p>
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
                            <p class="text-xs sm:text-base md:text-2xl mb-2 md:mb-3">{{ app()->getLocale() === 'en' ? $heroSections->first()->title_en : $heroSections->first()->title_ar }}</p>
                            <h1 class="text-2xl sm:text-3xl md:text-6xl font-bold leading-tight md:leading-[1.15]">
                                {{app()->getLocale() === 'en' ? $heroSections->first()->description_en : $heroSections->first()->description_ar}} <br>
                            </h1>
                            <a href="{{ $heroSections->first()->button_link}}"
                               class="mt-6 md:mt-10 inline-flex items-center w-40 sm:w-52 gap-2 sm:gap-4 px-4 sm:px-6 py-2 sm:py-3 bg-white text-[#0F548E] font-semibold rounded-md shadow hover:bg-gray-100 transition">
                                <span class="text-sm sm:text-base">{{ app()->getLocale() === 'en' ? $heroSections->first()->button_text_en : $heroSections->first()->button_text_ar}}</span>
                                <svg width="22" height="22" class="ml-1 sm:ml-2 rtl:rotate-180" viewBox="0 0 25 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.2773 4.02734L20.6297 12L12.2773 19.9727" stroke="#0F548E"
                                          stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M20.6291 12L4.37109 12" stroke="#0F548E" stroke-width="2"
                                          stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </div>

                        <!-- White Info Box (Single Image) -->
                        <div class="absolute bottom-6 sm:bottom-12 md:bottom-[206px]
                            end-4 sm:end-6 md:end-8 bg-white rounded-2xl shadow-lg p-4 sm:p-6 grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6 w-[90%] sm:w-auto">

                            <!-- Renters -->
                            <div class="flex flex-col items-start gap-2 sm:gap-3">
                                <div class="w-10 h-10 sm:w-12 sm:h-12 flex items-center justify-center rounded-full bg-[#e9f3fa]">
                                    <img src="{{ asset('storage/' .$heroSections->first()->rent_icon) }}" alt="">
                                </div>
                                <div>
                                    <p class="text-base sm:text-lg font-bold text-[#0F548E]">
                                        {{app()->getLocale() === 'en' ? $heroSections->first()->rent_heading_en : $heroSections->first()->rent_heading_ar}}
                                    </p>
                                    <p class="text-xs sm:text-sm text-black">
                                        {{app()->getLocale() === 'en' ? $heroSections->first()->rent_sub_heading_en : $heroSections->first()->rent_sub_heading_ar}}
                                    </p>
                                </div>
                            </div>

                            <!-- Properties -->
                            <div class="flex flex-col items-start gap-2 sm:gap-3">
                                <div class="w-10 h-10 sm:w-12 sm:h-12 flex items-center justify-center rounded-full bg-[#e9f3fa]">
                                    <img src="{{ asset('storage/' .$heroSections->first()->properties_icon) }}" alt="">
                                </div>
                                <div>
                                    <p class="text-base sm:text-lg font-bold text-[#0F548E]">
                                        {{app()->getLocale() === 'en' ? $heroSections->first()->properties_heading_en : $heroSections->first()->properties_heading_ar}}
                                    </p>
                                    <p class="text-xs sm:text-sm text-black">
                                        {{app()->getLocale() === 'en' ? $heroSections->first()->properties_sub_heading_en : $heroSections->first()->properties_sub_heading_ar}}
                                    </p>
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
        <div class="max-w-7xl mx-auto px-4 lg:px-12">
            <div class="grid md:grid-cols-2 gap-8 md:gap-12 items-start md:items-center">

                <!-- Left Images -->
                <div class="relative flex justify-center md:justify-start">
                    <!-- Main big image -->
                    <img src="{{ asset('storage/' . $about->image_main) }}"
                         alt="House"
                         class="w-full max-w-[470px] h-[260px] sm:h-[360px] md:h-[520px] object-cover rounded-lg shadow-md">

                    <!-- Small overlapping image -->
                    <div class="absolute -bottom-10 sm:-bottom-12 md:-bottom-16 right-2 sm:right-6 md:-right-12
                            w-32 sm:w-44 md:w-60 rounded-xl overflow-hidden shadow-lg border-4 border-white">
                        <img src="{{ asset('storage/' . $about->image_inner) }}"
                             alt="Modern building"
                             class="w-full h-[120px] sm:h-[160px] md:h-[220px] object-cover">
                    </div>
                </div>

                <!-- Right Content -->
                <div class="space-y-6 mt-16 md:mt-0 text-center md:text-left">
                    <h2 class="text-2xl sm:text-4xl md:text-5xl rtl:text-right font-extrabold text-black tracking-tight leading-snug">
                        {{ app()->getLocale() === 'en' ? $about->title_en : $about->title_ar }}
                    </h2>
                    <p class="text-base sm:text-xl md:text-2xl rtl:text-right font-semibold text-gray-900">
                        {{ app()->getLocale() === 'en' ? $about->subtitle_en : $about->subtitle_ar }}
                    </p>
                    <div class="space-y-4 text-sm rtl:text-right leading-relaxed text-[#62636C]">
                        <p>{!! nl2br(e(app()->getLocale() === 'en' ? $about->description_en : $about->description_ar)) !!}</p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- Services Section -->
    <section class="bg-[#e9f3fa] py-20">
        <div class="mx-auto px-4 px-10 lg:px-20">
            <h2 class="text-3xl md:text-6xl font-bold text-center text-black mb-28">
                {{ __('our_services') }}
            </h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-x-12 gap-y-10">
                @foreach($services as $service)
                    <div class="bg-white rounded-xl shadow p-6">
                        <!-- Icon -->
                        <div class="w-[120px] h-[120px] rounded-lg bg-blue-50 flex items-center justify-center p-6">
                            <img src="{{ asset('storage/'.$service->icon) }}"
                                 alt="{{app()->getLocale() === 'en' ? $service->title_en : $service->title_ar}}"
                                 class="w-[50%] h-[50%]">
                        </div>

                        <!-- Title -->
                        <h3 class="mt-4 text-[32px] font-bold text-black">
                            <a href="{{ route('service.show', $service->slug) }}">
                                {{app()->getLocale() === 'en' ? $service->title_en : $service->title_ar}}
                            </a>
                        </h3>

                        <!-- Subtitle -->
                        <p class="mt-2 text-[#7B7A7A] text-[20px] leading-relaxed">
                            {{app()->getLocale() === 'en' ? $service->sub_title_en : $service->sub_title_ar}}
                        </p>
                    </div>

                @endforeach
            </div>
        </div>
    </section>
    <!-- Vision Section -->
    <section class="relative w-full h-[600px] md:h-[700px] bg-gray-900 overflow-hidden" id="vision-slider">

        @foreach($visions as $index => $vision)
            <!-- Slide -->
            <div class="absolute inset-0 transition-opacity duration-700
                @if($index === 0) opacity-100 @else opacity-0 @endif"
                 data-slide="{{ $index }}">

                <!-- Background Image with Overlay -->
                <div class="w-full h-full bg-cover bg-center relative"
                     style="background-image: url('{{ asset('storage/'.$vision->image) }}')">
                    <div class="absolute inset-0 bg-black/50"></div>

                    <!-- Content -->
                    <div class="relative z-10 flex flex-col items-center justify-center text-center h-full px-6">
                        <h2 class="text-3xl md:text-6xl font-bold text-white mb-6">
                            {{ app()->getLocale() === 'en' ? $vision->title_en : $vision->title_ar }}
                        </h2>
                        <div class="max-w-4xl text-white text-base md:text-lg leading-relaxed space-y-4">
                            {!! nl2br(e(app()->getLocale() === 'en' ? $vision->description_en : $vision->description_ar)) !!}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach


        <!-- Controls -->
        <div class="absolute inset-0 flex items-center justify-between px-6 z-20">
            <button id="vision-prev"
                    class="hidden lg:block rtl:rotate-180"
                    aria-label="Previous slide">
                <svg width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M38.174 0.332031H15.8273C6.12065 0.332031 0.333984 6.1187 0.333984 15.8254V38.1454C0.333984 47.8787 6.12065 53.6654 15.8273 53.6654H38.1473C47.854 53.6654 53.6407 47.8787 53.6407 38.172V15.8254C53.6673 6.1187 47.8807 0.332031 38.174 0.332031ZM43.0007 28.9987H15.8273L23.854 37.0254C24.6273 37.7987 24.6273 39.0787 23.854 39.852C23.454 40.252 22.9473 40.4387 22.4407 40.4387C21.934 40.4387 21.4273 40.252 21.0273 39.852L9.58732 28.412C9.21398 28.0387 9.00065 27.532 9.00065 26.9987C9.00065 26.4654 9.21398 25.9587 9.58732 25.5854L21.0273 14.1454C21.8007 13.372 23.0807 13.372 23.854 14.1454C24.6273 14.9187 24.6273 16.1987 23.854 16.972L15.8273 24.9987H43.0007C44.094 24.9987 45.0007 25.9054 45.0007 26.9987C45.0007 28.092 44.094 28.9987 43.0007 28.9987Z" fill="#CCCFD3"/>
                </svg>

            </button>
            <button id="vision-next"
                    class="hidden lg:block rtl:rotate-180"
                    aria-label="Next slide">
                <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M43.174 5.33203H20.8273C11.1207 5.33203 5.33398 11.1187 5.33398 20.8254V43.1454C5.33398 52.8787 11.1207 58.6654 20.8273 58.6654H43.1473C52.854 58.6654 58.6407 52.8787 58.6407 43.172V20.8254C58.6673 11.1187 52.8807 5.33203 43.174 5.33203ZM49.414 33.412L37.974 44.852C37.574 45.252 37.0673 45.4387 36.5607 45.4387C36.054 45.4387 35.5473 45.252 35.1473 44.852C34.374 44.0787 34.374 42.7987 35.1473 42.0254L43.174 33.9987H16.0007C14.9073 33.9987 14.0007 33.092 14.0007 31.9987C14.0007 30.9054 14.9073 29.9987 16.0007 29.9987H43.174L35.1473 21.972C34.374 21.1987 34.374 19.9187 35.1473 19.1454C35.9207 18.372 37.2007 18.372 37.974 19.1454L49.414 30.5854C49.7873 30.9587 50.0007 31.4654 50.0007 31.9987C50.0007 32.532 49.7873 33.0387 49.414 33.412Z" fill="#0F548E"/>
                </svg>
            </button>
        </div>

    </section>

    <!-- Latest Projects -->
    <section class="bg-[#e9f3fa] py-16 md:py-20">
        <div class="mx-auto">
            <h2 class="text-4xl md:text-6xl lg:text-6xl font-bold text-center text-black tracking-tight">
                {{ __('latest_projects') }}
            </h2>
            <div class="relative mt-10 md:mt-12 overflow-hidden">
                <div id="slider" class="flex transition-transform duration-500 ease-in-out">
                    @foreach($projects as $project)
                        <div class="min-w-full md:min-w-[50%] lg:min-w-[33.3333%] p-2">
                            <a href="#" class="group block">
                                <div class="rounded-2xl overflow-hidden shadow-sm bg-white">
                                    <img src="{{ asset('storage/' .$project->image) }}" alt="Project"
                                         class="h-[340px] md:h-[450px] w-full object-cover transition-transform duration-300 group-hover:scale-[1.02]">
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="flex justify-center mt-6 space-x-2">
                    @foreach($projects as $index => $project)
                        <button class="dot w-3 h-3 rounded-full bg-gray-400" data-index="{{ $index }}"></button>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-16" id="clients">
        <div class="mx-auto px-6">
            <h2 class="text-2xl md:text-[56px] font-bold text-center pb-20">{{ __('our_partners') }}</h2>

            <div class="swiper clients-swiper flex overflow-hidden"> <!-- ✅ added overflow-hidden -->
                <div class="swiper-wrapper items-center flex transition-transform duration-300 ease-in-out">
                    @foreach($partners as $partner)
                        <div class="swiper-slide flex flex-col items-center gap-2">
                            <img src="{{ asset('storage/' . $partner->image) }}"
                                 alt="{{app()->getLocale() === 'en' ? $partner->name_en : $partner->name_ar}}"
                                 class="h-[125px] md:h-[125px] w-[250px] object-contain">
                            <span class="text-black text-sm md:text-base font-semibold">
                            {{app()->getLocale() === 'en' ? $partner->name_en : $partner->name_ar}}
                        </span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="bg-[#E9F3FA] py-12 px-4">
        <div class="max-w-5xl mx-auto text-center">
            <h2 class="text-3xl sm:text-3xl md:text-5xl font-bold mb-8">
                {{ __('form_heading') }}
            </h2>
            <div class="bg-white border border-blue-200 rounded-lg shadow-sm grid grid-cols-1 md:grid-cols-3 items-center text-center py-4 px-6 mb-8 sm:max-w-3xl md:max-w-5xl mx-auto gap-6">
                <a href="tel:{{ $cmsSettings->phone1 }}"
                   class="flex items-center space-x-2 text-[#0F548E] font-semibold hover:underline">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.83332 4.66654C10.5858 4.66654 11.3333 5.41404 11.3333 7.16654H13C13 4.47904 11.5208 2.99987 8.83332 2.99987V4.66654ZM11.685 9.20237C11.5249 9.05683 11.3144 8.97921 11.0982 8.9859C10.8819 8.99259 10.6767 9.08305 10.5258 9.23821L8.53166 11.289C8.05166 11.1974 7.08666 10.8965 6.09332 9.90571C5.09999 8.91154 4.79916 7.94404 4.70999 7.46737L6.75916 5.47237C6.9145 5.32165 7.0051 5.11639 7.01179 4.90005C7.01848 4.6837 6.94073 4.47324 6.79499 4.31321L3.71582 0.927374C3.57003 0.766838 3.36739 0.66946 3.15095 0.655923C2.93451 0.642386 2.72132 0.713756 2.55666 0.854874L0.748324 2.40571C0.60425 2.5503 0.518257 2.74275 0.506657 2.94654C0.494157 3.15487 0.255824 8.08987 4.08249 11.9182C7.42082 15.2557 11.6025 15.4999 12.7542 15.4999C12.9225 15.4999 13.0258 15.4949 13.0533 15.4932C13.2571 15.4818 13.4494 15.3954 13.5933 15.2507L15.1433 13.4415C15.2845 13.277 15.3561 13.0639 15.3427 12.8474C15.3293 12.631 15.2321 12.4283 15.0717 12.2824L11.685 9.20237Z" fill="#0F548E"/>
                    </svg>
                    <span>{{ $cmsSettings->phone1 }}</span>
                </a>
                <a href="mailto:{{ $cmsSettings->email1 }}"
                   class="flex items-center justify-center space-x-2 text-[#0F548E] font-semibold hover:underline">
                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.25 4.375H3.625V11.875H5.5V13.75L8 11.875H14.25V4.375Z" stroke="#0F548E" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M14.25 4.375H13V11.875H14.25V4.375Z" fill="#0F548E"/>
                        <path d="M7.0625 7.1875H10.8125" stroke="#0F548E" stroke-width="0.625" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M7.0625 9.0625H10.8125" stroke="#0F548E" stroke-width="0.625" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M14.0438 6.25H17.375V13.75H15.5V15.625L13 13.75H9.25" stroke="#0F548E" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span>{{ $cmsSettings->email1 }}</span>
                </a>
                <div class="flex justify-center md:justify-end space-x-4 text-[#0F548E]">
                    <a href="{{ $cmsSettings->instagram }}">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.5 0H7.5C3.3585 0 0 3.3585 0 7.5V16.5C0 20.6415 3.3585 24 7.5 24H16.5C20.6415 24 24 20.6415 24 16.5V7.5C24 3.3585 20.6415 0 16.5 0ZM21.75 16.5C21.75 19.395 19.395 21.75 16.5 21.75H7.5C4.605 21.75 2.25 19.395 2.25 16.5V7.5C2.25 4.605 4.605 2.25 7.5 2.25H16.5C19.395 2.25 21.75 4.605 21.75 7.5V16.5Z" fill="#0F548E"/>
                        <path d="M12 6C8.6865 6 6 8.6865 6 12C6 15.3135 8.6865 18 12 18C15.3135 18 18 15.3135 18 12C18 8.6865 15.3135 6 12 6ZM12 15.75C9.933 15.75 8.25 14.067 8.25 12C8.25 9.9315 9.933 8.25 12 8.25C14.067 8.25 15.75 9.9315 15.75 12C15.75 14.067 14.067 15.75 12 15.75Z" fill="#0F548E"/>
                        <path d="M18.4504 6.34949C18.8919 6.34949 19.2499 5.99154 19.2499 5.54999C19.2499 5.10844 18.8919 4.75049 18.4504 4.75049C18.0088 4.75049 17.6509 5.10844 17.6509 5.54999C17.6509 5.99154 18.0088 6.34949 18.4504 6.34949Z" fill="#0F548E"/>
                    </svg>
                    </a>
                    <a href="{{ $cmsSettings->facebook }}" class="hover:text-blue-900">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.5 8.25V5.25C13.5 4.422 14.172 3.75 15 3.75H16.5V0H13.5C11.0145 0 9 2.0145 9 4.5V8.25H6V12H9V24H13.5V12H16.5L18 8.25H13.5Z" fill="#0F548E"/>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="bg-white border rounded-xl shadow p-6 mx-auto sm:max-w-3xl md:max-w-5xl">
                <form id="contactForm" class="space-y-4">
                    <div>
                        <label class="block text-sm font-semibold text-left">{{ __('full_name') }}</label>
                        <input type="text" name="name" placeholder="{{ __('full_name') }}" class="w-full border rounded-lg px-4 py-2 mt-1 focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-left">{{ __('email') }}</label>
                        <input type="email" name="email" placeholder="{{ __('email') }}" class="w-full border rounded-lg px-4 py-2 mt-1 focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-left">{{ __('real_estate_development') }}</label>
                        <select name="development_type" class="w-full border rounded-lg px-4 py-2 mt-1 focus:ring-2 focus:ring-blue-500">
                            <option value="">{{ __('select_below') }}</option>
                            <option value="real_estate">{{ __('real_estate') }}</option>
                            <option value="commercial">{{ __('commercial') }}</option>
                            <option value="residential">{{ __('residential') }}</option>
                        </select>
                    </div>
                    <button type="submit" class="w-full bg-[#0F548E] text-white font-semibold p-3 gap-3 rounded-lg hover:bg-blue-900 flex justify-center items-center">
                        {{ __('get_a_quote') }}
                    </button>
                </form>
            </div>
        </div>
    </section>


    <script>
        const slider = document.getElementById('slider');
        const dots = document.querySelectorAll('.dot');
        let currentIndex = 0;
        const totalSlides = dots.length;

        function updateSlider(index) {
            let perView = window.innerWidth >= 1024 ? 3 : window.innerWidth >= 768 ? 2 : 1;
            slider.style.transform = `translateX(-${index * (100 / perView)}%)`;

            dots.forEach(dot => dot.classList.remove('bg-blue-500'));
            dots[index].classList.add('bg-blue-500');
        }

        dots.forEach(dot => {
            dot.addEventListener('click', () => {
                currentIndex = parseInt(dot.dataset.index);
                updateSlider(currentIndex);
            });
        });

        updateSlider(currentIndex);

        window.addEventListener('resize', () => updateSlider(currentIndex));
    </script>








    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const sliderSection = document.querySelector('#clients');
            const slider = sliderSection.querySelector('.swiper-wrapper'); // only inside #clients
            const dots = sliderSection.querySelectorAll('.dot');
            let currentIndex = 0;
            const totalSlides = slider.children.length;

            function updateSlider(index) {
                let perView = window.innerWidth >= 1024 ? 3 : window.innerWidth >= 768 ? 2 : 1;
                slider.style.transform = `translateX(-${index * (100 / perView)}%)`;
                slider.style.transition = "transform 0.4s ease"; // smooth slide

                if (dots.length) {
                    dots.forEach(dot => dot.classList.remove('bg-blue-500'));
                    if (dots[index]) dots[index].classList.add('bg-blue-500');
                }
            }

            if (dots.length) {
                dots.forEach(dot => {
                    dot.addEventListener('click', () => {
                        currentIndex = parseInt(dot.dataset.index);
                        updateSlider(currentIndex);
                    });
                });
            }

            updateSlider(currentIndex);
            window.addEventListener('resize', () => updateSlider(currentIndex));
        });
    </script>

@endsection



@extends('frontend.layouts.app')
@section('content')
    <section class="bg-[#B7D6EF]">
        <div class="mx-auto">
            <div class="relative bg-[url('{{asset('assets/'. $service->image)}}')] bg-cover bg-center h-[320px] md:h-[460px] lg:h-[560px] xl:h-[640px]">
                <div class="absolute inset-0 bg-black/45"></div>
                <div class="relative h-full flex flex-col justify-center px-6 md:px-12 lg:px-20 text-center items-center">
                    <h1 class="text-white font-bold leading-tight text-3xl sm:text-4xl md:text-6xl">
                        {{$service->title_en}}
                    </h1>

                    <nav aria-label="Breadcrumb" class="mt-6 md:mt-8">
                        <ol class="flex flex-wrap items-center gap-3 text-white/90 text-lg md:text-3xl">
                            <li>
                                <a href="#" class="hover:text-white/100">Home</a>
                            </li>
                            <li class="text-white">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.8496 33.2008L25.7163 22.3341C26.9996 21.0508 26.9996 18.9508 25.7163 17.6674L14.8496 6.80078" stroke="white" stroke-width="2.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </li>
                            <li>
                                <a href="#l" class="hover:text-white/100">Services</a>
                            </li>
                            <li class="text-white">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.8496 33.2008L25.7163 22.3341C26.9996 21.0508 26.9996 18.9508 25.7163 17.6674L14.8496 6.80078" stroke="white" stroke-width="2.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </li>
                            <li class="text-white/95">
                                {{$service->title_en}}
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white py-16">
        <div class="px-4 lg:px-20">
            <h2 class="text-4xl md:text-6xl font-bold text-gray-800 mb-8">
                {{$service->title_en}}
            </h2>
            <div class="space-y-8 text-gray-600 text-base md:text-lg leading-relaxed">
                <p>
                    {{$service->description_en}}
                </p>
            </div>
        </div>
    </section>
@endsection

@extends('layouts.LandingBase')

@section('content')
    <section class="section">

        <div class="container">
            <section class="section py-10" id="home">
                <div class="container">
                    <div class="lg:flex justify-center">
                        <div class="lg:w-2/3 mx-2">
                            <div class="text-center">
                                <h1
                                    class="text-4xl font-semibold leading-[50px] tracking-wide text-transparent bg-clip-text bg-gradient-to-l from-pink-400 to-blue-600 mb-10">
                                    ArticleWeb Is One Of Best Web Design & Development Company
                                </h1>
                                <p class="text-base text-gray-400">We create digital assets and we're focused on Web
                                    Technologies and Design,
                                    based on London, United Kingdom. We build creative & professional themes.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="flex justify-center">
                <div class="w-full filters-group-wrap mb-3">
                    <div class="flex justify-center mb-5">
                        <ul class="filter-options flex flex-wrap gap-4 justify-center">
                            <li class="active" data-group="all"><a href="javascript:void(0)">All</a></li>
                            <li data-group="android"><a href="javascript:void(0)">Android</a></li>
                            <li data-group="mockup"><a href="javascript:void(0)">Mockup</a></li>
                            <li data-group="personal"><a href="javascript:void(0)">Web</a></li>
                            <li data-group="design"><a href="javascript:void(0)">Design</a></li>
                        </ul>
                    </div>
                </div>
                <!--end /div-->
            </div>
            <!--end /div-->

            <div id="grid" class="md:flex justify-center">
                <div class="md:w-1/3 p-3 picture-item" data-groups='["mockup"]'>
                    <div class="relative block overflow-hidden rounded group transition-all duration-500">
                        <img src="assets/images/works/img1.jpg"
                            class="rounded transition-all duration-500 group-hover:scale-105" alt="work-image" />
                        <a href="javascript:void(0)"
                            class="absolute inset-3 flex items-end cursor-pointer rounded bg-white p-3 opacity-0 transition-all duration-500 group-hover:opacity-80">
                            <div>
                                <p class="text-sm text-gray-400">Media, Icons</p>
                                <h6 class="text-base text-black font-medium">Open Imagination</h6>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="md:w-1/3 p-3 picture-item" data-groups='["android"]'>
                    <div class="relative block overflow-hidden rounded group transition-all duration-500">
                        <img src="assets/images/works/img2.jpg"
                            class="rounded transition-all duration-500 group-hover:scale-105" alt="work-image" />
                        <a href="javascript:void(0)"
                            class="absolute inset-3 flex items-end cursor-pointer rounded bg-white p-3 opacity-0 transition-all duration-500 group-hover:opacity-80">
                            <div>
                                <p class="text-sm text-gray-400">Illustrations</p>
                                <h6 class="text-base text-black font-medium">Locked Steel Gate</h6>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="md:w-1/3 p-3 picture-item" data-groups='["mockup"]'>
                    <div class="relative block overflow-hidden rounded group transition-all duration-500">
                        <img src="assets/images/works/img3.jpg"
                            class="rounded transition-all duration-500 group-hover:scale-105" alt="work-image" />
                        <a href="javascript:void(0)"
                            class="absolute inset-3 flex items-end cursor-pointer rounded bg-white p-3 opacity-0 transition-all duration-500 group-hover:opacity-80">
                            <div>
                                <p class="text-sm text-gray-400">Graphics, UI Elements</p>
                                <h6 class="text-base text-black font-medium">Mac Sunglasses</h6>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="md:w-1/3 p-3 picture-item" data-groups='["android"]'>
                    <div class="relative block overflow-hidden rounded group transition-all duration-500">
                        <img src="assets/images/works/img4.jpg"
                            class="rounded transition-all duration-500 group-hover:scale-105" alt="work-image" />
                        <a href="javascript:void(0)"
                            class="absolute inset-3 flex items-end cursor-pointer rounded bg-white p-3 opacity-0 transition-all duration-500 group-hover:opacity-80">
                            <div>
                                <p class="text-sm text-gray-400">Icons, Illustrations</p>
                                <h6 class="text-base text-black font-medium">Morning Dew</h6>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="md:w-1/3 p-3 picture-item" data-groups='["android"]'>
                    <div class="relative block overflow-hidden rounded group transition-all duration-500">
                        <img src="assets/images/works/img5.jpg"
                            class="rounded transition-all duration-500 group-hover:scale-105" alt="work-image" />
                        <a href="javascript:void(0)"
                            class="absolute inset-3 flex items-end cursor-pointer rounded bg-white p-3 opacity-0 transition-all duration-500 group-hover:opacity-80">
                            <div>
                                <p class="text-sm text-gray-400">UI Elements, Media</p>
                                <h6 class="text-base text-black font-medium">Console Activity</h6>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="md:w-1/3 p-3 picture-item" data-groups='["personal"]'>
                    <div class="relative block overflow-hidden rounded group transition-all duration-500">
                        <img src="assets/images/works/img6.jpg"
                            class="rounded transition-all duration-500 group-hover:scale-105" alt="work-image" />
                        <a href="javascript:void(0)"
                            class="absolute inset-3 flex items-end cursor-pointer rounded bg-white p-3 opacity-0 transition-all duration-500 group-hover:opacity-80">
                            <div>
                                <p class="text-sm text-gray-400">Graphics</p>
                                <h6 class="text-base text-black font-medium">Sunset Bulb Glow</h6>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="md:w-1/3 p-3 picture-item" data-groups='["design"]'>
                    <div class="relative block overflow-hidden rounded group transition-all duration-500">
                        <img src="assets/images/works/img8.jpg"
                            class="rounded transition-all duration-500 group-hover:scale-105" alt="work-image" />
                        <a href="javascript:void(0)"
                            class="absolute inset-3 flex items-end cursor-pointer rounded bg-white p-3 opacity-0 transition-all duration-500 group-hover:opacity-80">
                            <div>
                                <p class="text-sm text-gray-400">UI Elements, Media</p>
                                <h6 class="text-base text-black font-medium">Console Activity</h6>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="md:w-1/3 p-3 picture-item" data-groups='["mockup"]'>
                    <div class="relative block overflow-hidden rounded group transition-all duration-500">
                        <img src="assets/images/works/img7.jpg"
                            class="rounded transition-all duration-500 group-hover:scale-105" alt="work-image" />
                        <a href="javascript:void(0)"
                            class="absolute inset-3 flex items-end cursor-pointer rounded bg-white p-3 opacity-0 transition-all duration-500 group-hover:opacity-80">
                            <div>
                                <p class="text-sm text-gray-400">Illustrations, Graphics</p>
                                <h6 class="text-base text-black font-medium">Shake It!</h6>
                            </div>
                        </a>
                    </div>
                </div>


                <div class="md:w-1/3 p-3 picture-item" data-groups='["personal"]'>
                    <div class="relative block overflow-hidden rounded group transition-all duration-500">
                        <img src="assets/images/works/img9.jpg"
                            class="rounded transition-all duration-500 group-hover:scale-105" alt="work-image" />
                        <a href="javascript:void(0)"
                            class="absolute inset-3 flex items-end cursor-pointer rounded bg-white p-3 opacity-0 transition-all duration-500 group-hover:opacity-80">
                            <div>
                                <p class="text-sm text-gray-400">Graphics</p>
                                <h6 class="text-base text-black font-medium">Sunset Bulb Glow</h6>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="md:w-1/3 p-3 picture-item" data-groups='["personal"]'>
                    <div class="relative block overflow-hidden rounded group transition-all duration-500">
                        <img src="assets/images/works/img10.jpg"
                            class="rounded transition-all duration-500 group-hover:scale-105" alt="work-image" />
                        <a href="javascript:void(0)"
                            class="absolute inset-3 flex items-end cursor-pointer rounded bg-white p-3 opacity-0 transition-all duration-500 group-hover:opacity-80">
                            <div>
                                <p class="text-sm text-gray-400">Graphics</p>
                                <h6 class="text-base text-black font-medium">Sunset Bulb Glow</h6>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="md:w-1/3 p-3 picture-item" data-groups='["android"]'>
                    <div class="relative block overflow-hidden rounded group transition-all duration-500">
                        <img src="assets/images/works/img11.jpg"
                            class="rounded transition-all duration-500 group-hover:scale-105" alt="work-image" />
                        <a href="javascript:void(0)"
                            class="absolute inset-3 flex items-end cursor-pointer rounded bg-white p-3 opacity-0 transition-all duration-500 group-hover:opacity-80">
                            <div>
                                <p class="text-sm text-gray-400">UI Elements, Media</p>
                                <h6 class="text-base text-black font-medium">Console Activity</h6>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="md:w-1/3 p-3 picture-item" data-groups='["mockup"]'>
                    <div class="relative block overflow-hidden rounded group transition-all duration-500">
                        <img src="assets/images/works/img12.jpg"
                            class="rounded transition-all duration-500 group-hover:scale-105" alt="work-image" />
                        <a href="javascript:void(0)"
                            class="absolute inset-3 flex items-end cursor-pointer rounded bg-white p-3 opacity-0 transition-all duration-500 group-hover:opacity-80">
                            <div>
                                <p class="text-sm text-gray-400">Illustrations, Graphics</p>
                                <h6 class="text-base text-black font-medium">Shake It!</h6>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="md:w-1/3 p-3 picture-item" data-groups='["design"]'>
                    <div class="relative block overflow-hidden rounded group transition-all duration-500">
                        <img src="assets/images/works/img13.jpg"
                            class="rounded transition-all duration-500 group-hover:scale-105" alt="work-image" />
                        <a href="javascript:void(0)"
                            class="absolute inset-3 flex items-end cursor-pointer rounded bg-white p-3 opacity-0 transition-all duration-500 group-hover:opacity-80">
                            <div>
                                <p class="text-sm text-gray-400">Illustrations, Graphics</p>
                                <h6 class="text-base text-black font-medium">Shake It!</h6>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!--end /div-->
            <div class="flex justify-center mt-8">
                <a href="work.html" class="py-4 px-7 rounded text-sm font-medium bg-blue-500 text-white">More Works <i
                        class="mdi mdi-arrow-right ms-1"></i></a>
            </div>
        </div>
    </section>

    <section class="section py-10">
        <div class="container">
            <div class="grid lg:grid-cols-3 gap-8 text-center">
                <div>
                    <div class="p-5">
                        <div class="text-5xl text-blue-500">
                            <i class="pe-7s-leaf"></i>
                        </div>
                        <h4 class="uppercase text-base my-3">Branding</h4>

                        <p class="text-muted">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                            eu fugiat nulla pariatur. Excepteur sint occaecat.</p>
                    </div>
                </div>

                <div>
                    <div class="p-5">
                        <div class="text-5xl text-blue-500">
                            <i class="pe-7s-helm"></i>
                        </div>
                        <h4 class="uppercase text-base my-3">Highly customizable</h4>

                        <p class="text-muted">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                            eu fugiat nulla pariatur. Excepteur sint occaecat.</p>
                    </div>
                </div>

                <div>
                    <div class="p-5">
                        <div class="text-5xl text-blue-500">
                            <i class="pe-7s-airplay"></i>
                        </div>
                        <h4 class="uppercase text-base my-3">Responsive design</h4>

                        <p class="text-muted">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                            eu fugiat nulla pariatur. Excepteur sint occaecat.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

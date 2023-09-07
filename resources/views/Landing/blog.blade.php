@extends('layouts.landingbase')

@section('content')
    <section class="section py-10">
        <div class="container">
            <div class="flex flex-row">
                <div class="lg:w-9/12 flex">
                    <div>
                        <h4
                            class="text-4xl font-semibold leading-[50px] tracking-wide text-transparent bg-clip-text bg-gradient-to-l from-pink-400 to-blue-600 underline decoration-blue-400 underline-offset-4 mb-5">
                            News and Stories
                        </h4>

                        <div class="flex bg-transparent border items-center pr-4 mb-4">
                            <!-- search input -->
                            <input type="search"
                                class="border-0 focus:border-0 focus:ring-0 text-black bg-transparent w-full"
                                placeholder="Search">
                            <button type="submit" class="text-xl text-black">
                                <span class="icofont-search-1"></span>
                            </button>
                        </div>

                    </div>
                </div>
            </div>

            <div class="grid lg:grid-cols-3 gap-6">
                <div class="col-span-2">
                    <div class="prose max-w-full">
                        @forelse ($data as $post)
                            <article class="mb-10">
                                <div class="w-10">
                                    <a href="{{ route('Detail-Blog' , ['slug' => $post->slug])}}">
                                        <img  class="w-full rounded"
                                            src="{{ asset('storage/' . $post->image) }}">
                                    </a>
                                </div>
                                <div>
                                    <h2><a href="">{{ $post->title }}</a>
                                    </h2>
                                    <div class="flex space-x-6">
                                        <div><i class="icofont-ui-calendar"></i>{{ $post->created_at->format('M d, Y') }}
                                        </div>
                                        <div><i class="icofont-user-alt-5"></i> {{ $post->user->name }}
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <p>{!! Str::limit(strip_tags($post->content), $limit = 200, $end = '...') !!}</p>
                                </div>
                                <a href="{{ route('Detail-Blog' , ['slug' => $post->slug])}}">Read More <i class="mdi mdi-arrow-right"></i></a>
                            </article>
                        @empty
                            <div class="no-data text-center">
                                No Data
                            </div>
                        @endforelse
                    </div>

                    <!-- Pagination-->
                    <div class="flex mt-6">
                        <a href="#"
                            class="flex items-centzer justify-center px-4 py-2 mx-1 text-gray-500 capitalize bg-white border rounded cursor-not-allowed">
                            <i class="icofont-rounded-left"></i>
                        </a>

                        <a href="#"
                            class="hidden px-4 py-2 mx-1 transition-colors duration-200 transform border rounded sm:inline bg-gray-600 text-white">
                            1
                        </a>

                        <a href="#"
                            class="hidden px-4 py-2 mx-1 text-gray-700 transition-colors duration-200 transform bg-white border rounded sm:inline hover:bg-gray-600 hover:text-white">
                            2
                        </a>

                        <a href="#"
                            class="hidden px-4 py-2 mx-1 text-gray-700 transition-colors duration-200 transform bg-white border rounded sm:inline hover:bg-gray-600 hover:text-white">
                            3
                        </a>

                        <a href="#"
                            class="hidden px-4 py-2 mx-1 text-gray-700 transition-colors duration-200 transform bg-white border rounded sm:inline hover:bg-gray-600 hover:text-white">
                            4
                        </a>

                        <a href="#"
                            class="hidden px-4 py-2 mx-1 text-gray-700 transition-colors duration-200 transform bg-white border rounded sm:inline hover:bg-gray-600 hover:text-white">
                            5
                        </a>

                        <a href="#"
                            class="flex items-center justify-center px-4 py-2 mx-1 text-gray-700 transition-colors duration-200 transform bg-white border rounded hover:bg-gray-600 hover:text-white">
                            <i class="icofont-rounded-right"></i>
                        </a>
                    </div>
                    <!-- Pagination end-->

                </div>

            </div>

        </div>
    </section>
@endsection

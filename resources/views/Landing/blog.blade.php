@extends('layouts.landingbase')

@section('content')
    <section class="section py-8">
        <div class="container">
            <div class="grid lg:grid-cols-3 gap-8">
                <div class="col-span-2">
                    <div class="prose max-w-full">
                        @forelse ($data as $post)
                            <article class="mb-10">
                                <div class="w-10">
                                    <a href="{{ route('Detail-Blog', ['slug' => $post->slug]) }}">
                                        <img class="w-full  rounded" src="{{ asset('storage/' . $post->image) }}">
                                    </a>
                                </div>
                                <div>
                                    <h2><a
                                            href="{{ route('Detail-Blog', ['slug' => $post->slug]) }}">{{ $post->title }}</a>
                                    </h2>
                                    <div class="flex space-x-3">
                                        <div><i class="icofont-ui-calendar"></i>{{ $post->created_at->format('M d, Y') }}
                                        </div>
                                        <div><i class="icofont-user-alt-5"></i> {{ $post->user->name }}
                                        </div>
                                    </div>
                                </div>
                                <div>

                                    <p>{!! Str::limit(strip_tags($post->content), $limit = 200, $end = '...') !!}</p>
                                </div>
                                <a href="{{ route('Detail-Blog', ['slug' => $post->slug]) }}">Read More <i
                                        class="mdi mdi-arrow-right"></i></a>
                            </article>
                        @empty
                            <div class="no-data text-center">
                                No Data
                            </div>
                        @endforelse
                    </div>

                    <!-- Pagination-->
                    <div class="flex mt-6">
                        @if ($data->onFirstPage())
                            <a href="#"
                                class="flex items-centzer justify-center px-4 py-2 mx-1 text-gray-500 capitalize bg-white border rounded cursor-not-allowed">
                                <i class="icofont-rounded-left"></i>
                            </a>
                        @else
                            <a href="{{ $data->previousPageUrl() }}"
                                class="flex items-centzer justify-center px-4 py-2 mx-1 text-gray-500 capitalize bg-white border rounded cursor-not-allowed">
                                <i class="icofont-rounded-left"></i>
                            </a>
                        @endif

                        @foreach ($data->getUrlRange(1, $data->lastPage()) as $page => $url)
                            <a href="{{ $url }}"
                                class="hidden px-4 py-2 mx-1 transition-colors duration-200 transform border rounded sm:inline {{ $data->currentPage() == $page ? ' bg-gray-600' : 'text-gray-700' }}  text-white">
                                {{ $page }}
                            </a>
                        @endforeach

                        @if ($data->hasMorePages())
                            <a href="{{ $data->nextPageUrl() }}"
                                class="flex items-center justify-center px-4 py-2 mx-1 text-gray-700 transition-colors duration-200 transform bg-white border rounded hover:bg-gray-600 hover:text-white">
                                <i class="icofont-rounded-right"></i>
                            </a>
                        @else
                            <a href="#"
                                class="flex items-center justify-center px-4 py-2 mx-1 text-gray-700 transition-colors duration-200 transform bg-white border rounded hover:bg-gray-600 hover:text-white">
                                <i class="icofont-rounded-right"></i>
                            </a>
                        @endif
                    </div>
                    <!-- Pagination end-->

                </div>

                <div class="col-span-1">
                    <div class="flex flex-col ">
                        <h4
                            class="text-4xl font-semibold leading-[50px] tracking-wide text-transparent bg-clip-text bg-gradient-to-l from-pink-400 to-blue-600 underline decoration-blue-400 underline-offset-4 mb-5">
                            News and Stories
                        </h4>
                        <form action="{{ route('Blog') }}" method="GET">
                            <div class="flex bg-transparent border items-center pr-4 mb-4">
                                <input type="search"
                                    class="border-0 focus:border-0 focus:ring-0 text-black bg-transparent w-full"
                                    placeholder="Search" name="search" value="{{ request('search') }}">
                                <button type="submit" class="text-xl text-black">
                                    <span class="icofont-search-1"></span>
                                </button>
                            </div>

                        </form>
                    </div>
                </div>

            </div>

        </div>

    </section>
@endsection

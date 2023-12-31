@extends('layouts.base')

@section('content')


    <section class="breadcrumb lg:flex items-start">
        <div>
            <h1>Blog</h1>
            <ul>
                <li><a href="#no-link">Pages</a></li>
                <li class="divider la la-arrow-right"></li>
                <li><a href="#no-link">Blog</a></li>
                <li class="divider la la-arrow-right"></li>
                <li>List - Card Rows</li>
            </ul>
        </div>
        <div class="flex flex-wrap gap-2 items-center ltr:ml-auto rtl:mr-auto mt-5 lg:mt-0">
            <form class="flex flex-auto" action="{{ route('List-Article') }}" method="GET">
                <label class="form-control-addon-within rounded-full">
                    <input class="form-control border-none" name="search" placeholder="Search" value="{{ request('search') }}">
                    <button class="text-gray-300 dark:text-gray-700 text-xl leading-none la la-search ltr:mr-4 rtl:ml-4"></button>
                </label>
            </form>

            <div class="flex gap-x-2">
                <a href="{{ route('Form') }}" class="btn btn_primary uppercase">Add New</a>
            </div>
        </div>
    </section>

    <div class="flex flex-col gap-y-5">
        @forelse ($data as $post)
            <div class="card card_row card_hoverable">
                <div>
                    <div class="image">
                        <div class="aspect-w-4 aspect-h-3">
                            <img src="{{ asset('storage/' . $post->image) }}">
                        </div>
                    </div>
                </div>
                <div class="header">
                    <h5>{{ $post->title }}</h5>
                    <p>{!! Str::limit(strip_tags($post->content), $limit = 100, $end = '...') !!} </p>
                </div>
                <div class="body">
                    <h6 class="uppercase">Author</h6>
                    <p>{{ $post->user->name }}</p>
                    <h6 class="mt-4 uppercase lg:mt-auto">Date Created</h6>
                    <p>{{ $post->created_at->format('M d, Y') }}</p>
                </div>
                <div class="actions">
                    <div class="dropdown ltr:-ml-3 rtl:-mr-3 lg:ltr:ml-auto lg:rtl:mr-auto">
                        <a class="btn btn-icon btn_outlined btn_secondary mt-auto ltr:ml-auto rtl:mr-auto lg:ltr:ml-0 lg:rtl:mr-0"
                            href="#">
                            <span class="la la-eye"></span>
                        </a>
                    </div>
                    <a class="btn btn-icon btn_outlined btn_secondary mt-auto ltr:ml-auto rtl:mr-auto lg:ltr:ml-0 lg:rtl:mr-0"
                        href="/Admin/Edit/{{ $post->slug }}">
                        <span class="la la-pen-fancy"></span>
                    </a>
                    <a class="btn btn-icon btn_outlined btn_danger ltr:ml-2 rtl:mr-2 lg:mt-2 lg:ltr:ml-0 lg:rtl:mr-0"
                        onclick="confirmDelete('{{ $post->slug }}')" href="javascript:void(0);">
                        <span class="la la-trash-alt"></span>
                    </a>

                </div>
            </div>
        @empty
            <div class="card card_row card_hoverable flex items-center justify-center p-3 text-center">
                <h3 class="text-center">No Data</h3>
            </div>
        @endforelse
    </div>

    <div class="mt-5">
        <!-- Pagination -->
        <div class="card lg:flex">
            <nav class="flex flex-wrap gap-2 p-5">
                {{-- Previous Page Link --}}
                @if ($data->onFirstPage())
                    <a class="btn btn_outlined btn_secondary disabled" href="#">Previous</a>
                @else
                    <a class="btn btn_primary" href="{{ $data->previousPageUrl() }}">Previous</a>
                @endif
                {{-- Numeric Page Links --}}
                @foreach ($data->getUrlRange(1, $data->lastPage()) as $page => $url)
                    <a class="btn {{ $data->currentPage() == $page ? ' btn_primary' : ' btn_secondary btn_outlined' }}"
                        href="{{ $url }}">{{ $page }}</a>
                @endforeach
                {{-- Next Page Link --}}
                @if ($data->hasMorePages())
                    <a class="btn btn_primary" href="{{ $data->nextPageUrl() }}">Next</a>
                @else
                    <a class="btn btn_outlined btn_secondary disabled" href="#">Next</a>
                @endif
            </nav>
            <div class="flex items-center ltr:ml-auto rtl:mr-auto p-5 border-t lg:border-t-0 border-divider">
                Displaying {{ $data->firstItem() }}-{{ $data->lastItem() }} of {{ $data->total() }} items
            </div>
        </div>
    </div>


@endsection

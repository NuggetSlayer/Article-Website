@extends('layouts.base')

@section('content')
    <!-- Breadcrumb -->
    <section class="breadcrumb">
        <h1>Dashboard</h1>
        <ul>
            <li><a href="#no-link">Login</a></li>
            <li class="divider la la-arrow-right"></li>
            <li>Dashboard</li>
        </ul>
    </section>

    <div class="grid lg:grid-cols-2 gap-5">

        <!-- Summaries -->
        <div class="grid sm:grid-cols-3 gap-5">
            <div
                class="card px-4 py-8 flex justify-center items-center text-center lg:transform hover:scale-110 hover:shadow-lg transition-transform duration-200">
                <div>
                    <span class="text-primary text-5xl leading-none la la-book"></span>
                    <p class="mt-2">Total Article</p>
                    <div class="text-primary mt-5 text-3xl leading-none">{{ $article }}</div>
                </div>
            </div>
            <div
                class="card px-4 py-8 flex justify-center items-center text-center lg:transform hover:scale-110 hover:shadow-lg transition-transform duration-200">
                <div>
                    <span class="text-primary text-5xl leading-none la la-user"></span>
                    <p class="mt-2">Total User</p>
                    <div class="text-primary mt-5 text-3xl leading-none">{{ $user }}</div>
                </div>
            </div>
        </div>

    </div>
@endsection

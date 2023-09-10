@extends('layouts.landingbase')
@section('content')
    <!-- shuffle portfolio -->
    <section class="section">
        <div class="container">
            <div class="flex flex-col justify-center align-middle items-center">
                <div class="w-full flex justify-center mt-16">
                    <div class="text-3xl text-black text-center border-b-[3px] border-black">{{ $data->title }}</div>
                </div>
                    <img src="{{ asset('storage/' . $data->image) }}" alt="about-img" class="border rounded p-1 bg-gray-50">
            </div>
        </div>
    </section>


    <section class="section py-10">
        <div class="container">
            <div class="flex justify-center">
                <div class="lg:w-2/3 text-center">
                    <div class="block justify-center mt-2">
                        <h1 class="text-4xl"><i class="pe-7s-chat"></i></h1>
                        <h4 class="font-light italic text-base">{{ $data->content }}</h4>
                        <img src="{{ asset('assets/images/user-1.png')}}" class="h-16 w-16 mx-auto rounded-full mt-4 mb-2.5"
                            alt="testimonials-user">
                        <p>{{ $data->user->name }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@extends('layouts.landingbase')
@section('content')
    <!-- shuffle portfolio -->
    <section class="section">
        <div class="container">
            <div class="flex flex-col justify-center align-middle items-center">
                <div class="w-full flex justify-center mt-16">
                    <div class="text-3xl text-black text-center border-b-[3px] border-black">{{ $data->title }}</div>
                </div>
                    <img src="{{ asset('storage/' . $data->image) }}" alt="about-img" class="border w-64 rounded p-1 bg-gray-50">
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
                        <img src="{{ asset('storage/' . $data->image) }}" class="h-16 w-16 mx-auto rounded-full mt-4 mb-2.5"
                            alt="testimonials-user">
                        <p>Theme User - Web Designer</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="section py-10">
        <div class="container">
            <div class="flex">
                <div class="w-full flex justify-center">
                    <div class="text-4xl text-black border-b-[3px] border-black">Meet the Team</div>
                </div>
            </div>
            <div class="grid lg:grid-cols-3 gap-4 mt-14">
                <div class="text-center p-8">
                    <img src="assets/images/team/team-1.jpg" class="rounded mb-4" alt="">
                    <h4 class="text-lg font-medium mb-1">Johan De Jager</h4>
                    <h6 class="text-xs text-gray-400">CEO/Founder</h6>
                </div>
                <div class="text-center p-8">
                    <img src="assets/images/team/team-2.jpg" class="rounded mb-4" alt="">
                    <h4 class="text-lg font-medium mb-1">Andrew Sparks</h4>
                    <h6 class="text-xs text-gray-400">CTO/Co-Founder</h6>
                </div>
                <div class="text-center p-8">
                    <img src="assets/images/team/team-3.jpg" class="rounded mb-4" alt="">
                    <h4 class="text-lg font-medium mb-1">David Downs</h4>
                    <h6 class="text-xs text-gray-400">Web Designer</h6>
                </div>
            </div>
        </div>
    </section>
@endsection

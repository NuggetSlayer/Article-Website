<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Responsive Tailwind CSS landing template" name="description">
    <meta content="Myrathemes" name="author">
    <link href="{{ asset('assets/images/favicon.ico') }}" rel="shortcut icon">
    <title>ArticleWeb - Empower Your Knowledge</title>
    <link href="{{ asset('assets/css/pe-icon-7-stroke.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/icofont.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/tailwind.css') }}" rel="stylesheet">

</head>

<body class="bg-[url('../images/bg-pattern.png')] bg-no-repeat">
    <div class="flex flex-col">
        <nav class="border-b py-8 md:border-b-0" id="nav" role="navigation">
            <div class="md:flex-no-wrap container flex flex-wrap items-center">
                <a class="flex uppercase text-xl" href="">
                    <i class="icofont-deer-head text-black text-[42px]"></i>
                </a>
                <div class="ml-auto md:hidden">
                    <button class="flex items-center rounded" onclick="menuToggle()" type="button">
                        <i class="pe-7s-menu text-3xl"></i>
                    </button>
                </div>
                <div class="h-0 w-full opacity-0 transition-all duration-300 ease-out md:flex md:w-auto md:flex-grow md:items-center md:opacity-100 md:transition-none"
                    id="menu">
                    <ul class="ml-auto mt-5 flex flex-col duration-300 ease-out sm:transition-none md:mt-0 md:flex-row"
                        id="ulMenu">
                        <li>
                            <a class="font-secondary block p-3 text-sm font-medium uppercase {{ Route::currentRouteName() == 'Home' ? 'text-blue-500' : 'text-black/70' }} lg:px-6"
                                href="{{ route('Home') }}" title="Home">Home</a>
                        </li>
                        <li>
                            <a class="font-secondary block p-3 text-sm font-medium uppercase {{ Route::currentRouteName() == 'about' ? 'text-blue-500' : 'text-black/70' }} hover:text-blue-500 lg:px-6"
                                href="#" title="About">About</a>
                        </li>
                        <li>
                            <a class="font-secondary block p-3 text-sm font-medium uppercase {{ Route::currentRouteName() == 'service' ? 'text-blue-500' : 'text-black/70' }} hover:text-blue-500 lg:px-6"
                                href="#" title="Service">Service</a>
                        </li>
                        <li>
                            <a class="font-secondary block p-3 text-sm font-medium uppercase {{ Route::currentRouteName() == 'work' ? 'text-blue-500' : 'text-black/70' }} hover:text-blue-500 lg:px-6"
                                href="#" title="Work">Work</a>
                        </li>
                        <li>
                            <a class="font-secondary block p-3 text-sm font-medium uppercase {{ Route::currentRouteName() == 'Blog' ? 'text-blue-500' : 'text-black/70' }} hover:text-blue-500 lg:px-6"
                                href="{{ route('Blog') }}" title="Blog">Blog</a>
                        </li>
                        <li>
                            <a class="font-secondary block p-3 text-sm font-medium uppercase {{ Route::currentRouteName() == 'contact' ? 'text-blue-500' : 'text-black/70' }} hover:text-blue-500 lg:px-6"
                                href="#" title="Contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- Section End -->
    @yield('content')
    <footer class="border-t py-8">
        <div class="container">
            <div class="flex">
                <div class="w-full">
                    <div class="text-center">
                        <a class="text-6xl text-black" href="index.html"><i class="icofont-deer-head"></i></a>
                        <h4 class="mt-2 text-lg font-bold uppercase">ArticleWeb</h4>

                        <ul class="mt-8 flex justify-center gap-3">
                            <li>
                                <a class="flex h-11 w-11 items-center justify-center rounded bg-gray-100 text-lg text-black transition-all hover:bg-blue-500 hover:text-white"
                                    href="javascript:void(0)"> <i class="icofont-dribble"></i> </a>
                            </li>
                            <li>
                                <a class="flex h-11 w-11 items-center justify-center rounded bg-gray-100 text-lg text-black transition-all hover:bg-blue-500 hover:text-white"
                                    href="javascript:void(0)"> <i class="icofont-facebook"></i> </a>
                            </li>
                            <li>
                                <a class="flex h-11 w-11 items-center justify-center rounded bg-gray-100 text-lg text-black transition-all hover:bg-blue-500 hover:text-white"
                                    href="javascript:void(0)"> <i class="icofont-skype"></i> </a>
                            </li>
                            <li>
                                <a class="flex h-11 w-11 items-center justify-center rounded bg-gray-100 text-lg text-black transition-all hover:bg-blue-500 hover:text-white"
                                    href="javascript:void(0)"> <i class="icofont-twitter"></i> </a>
                            </li>
                            <li>
                                <a class="flex h-11 w-11 items-center justify-center rounded bg-gray-100 text-lg text-black transition-all hover:bg-blue-500 hover:text-white"
                                    href="javascript:void(0)"> <i class="icofont-whatsapp"></i> </a>
                            </li>
                        </ul>

                        <p class="text-muted mt-8"> ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                        </p>

                    </div>
                </div>
            </div>
            <!-- end row -->

        </div>
    </footer>

    <!-- Shuffle JS -->
    <script src="{{ asset('assets/js/shuffle.min.js') }}"></script>
    <script src="{{ asset('assets/js/gallery.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>

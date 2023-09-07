<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />
    <title>{{ Route::currentRouteName() }} - BisaBlog</title>
    <!-- Generics -->
    <link href="{{ asset('assets/images/favicon/favicon-32.png') }}" rel="icon" sizes="32x32">
    <link href="{{ asset('assets/images/favicon/favicon-128.png') }}" rel="icon" sizes="128x128">
    <link href="{{ asset('assets/images/favicon/favicon-192.png') }}" rel="icon" sizes="192x192">
    <!-- Android -->
    <link href="{{ asset('assets/images/favicon/favicon-196.png') }}" rel="shortcut icon" sizes="196x196">
    <!-- iOS -->
    <link href="{{ asset('assets/images/favicon/favicon-152.png') }}" rel="apple-touch-icon" sizes="152x152">
    <link href="{{ asset('assets/images/favicon/favicon-167.png') }}" rel="apple-touch-icon" sizes="167x167">
    <link href="{{ asset('assets/images/favicon/favicon-180.png') }}" rel="apple-touch-icon" sizes="180x180">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    @yield('css')
</head>

<body>

    <!-- Top Bar -->
    <header class="top-bar">

        <!-- Menu Toggler -->
        <button class="menu-toggler la la-bars" data-toggle="menu"></button>

        <!-- Brand -->
        <span class="brand">Yeti</span>

        <!-- Search -->
        <form class="hidden md:block ltr:ml-10 rtl:mr-10">
            <label class="form-control-addon-within rounded-full">
                <input class="form-control border-none" placeholder="Search">
                <button
                    class="text-gray-300 dark:text-gray-700 text-xl leading-none la la-search ltr:mr-4 rtl:ml-4"></button>
            </label>
        </form>

        <!-- Right -->
        <div class="flex items-center ltr:ml-auto rtl:mr-auto">

            <!-- Dark Mode -->
            <label class="switch switch_outlined" data-toggle="tooltip" data-tippy-content="Toggle Dark Mode">
                <input id="darkModeToggler" type="checkbox">
                <span></span>
            </label>

            <!-- Fullscreen -->
            <button id="fullScreenToggler"
                class="hidden lg:inline-block ltr:ml-3 rtl:mr-3 px-2 text-2xl leading-none la la-expand-arrows-alt"
                data-toggle="tooltip" data-tippy-content="Fullscreen"></button>

            <!-- Apps -->

            <!-- User Menu -->
            <div class="dropdown">
                <button class="flex items-center ltr:ml-4 rtl:mr-4" data-toggle="custom-dropdown-menu"
                    data-tippy-arrow="true" data-tippy-placement="bottom-end">
                    <span class="avatar">JD</span>
                </button>
                <div class="custom-dropdown-menu w-64">
                    <div class="p-5">
                        <h5 class="uppercase">John Doe</h5>
                        <p>Editor</p>
                    </div>
                    <hr>
                    <div class="p-5">
                        <a href="#no-link" class="flex items-center text-normal hover:text-primary">
                            <span class="la la-user-circle text-2xl leading-none ltr:mr-2 rtl:ml-2"></span>
                            View Profile
                        </a>
                        <a href="#no-link" class="flex items-center text-normal hover:text-primary mt-5">
                            <span class="la la-key text-2xl leading-none ltr:mr-2 rtl:ml-2"></span>
                            Change Password
                        </a>
                    </div>
                    <hr>
                    <div class="p-5">
                        <a href="#no-link" class="flex items-center text-normal hover:text-primary">
                            <span class="la la-power-off text-2xl leading-none ltr:mr-2 rtl:ml-2"></span>
                            Logout
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Menu Bar -->
    <aside class="menu-bar menu-sticky">
        <div class="menu-items">
            <div class="menu-header hidden">
                <a href="https://yeti.yetithemes.net/" class="flex items-center mx-8 mt-8">
                    <span class="avatar w-16 h-16">JD</span>
                    <div class="ltr:ml-4 rtl:mr-4 ltr:text-left rtl:text-right">
                        <h5>John Doe</h5>
                        <p class="mt-2">Editor</p>
                    </div>
                </a>
                <hr class="mx-8 my-4">
            </div>
            <a href="{{ route('Dashboard') }}" class="link {{ Route::currentRouteName() == 'Admin' ? 'active' : '' }}">
                <span class="icon la la-laptop"></span>
                <span class="title">Dashboard</span>
            </a>
            <a href="{{ route('List-Article') }}"
                class="link {{ Route::currentRouteName() == 'List-Article' ? 'active' : '' }}"
                data-toggle="tooltip-menu" data-tippy-content="Blank Page">
                <span class="icon la la-book"></span>
                <span class="title">Articles</span>
            </a>
        </div>
    </aside>

    <!-- Workspace -->
    <main class="workspace">

        @yield('content')

        <footer class="mt-auto">
            <div class="footer">
                <span class='uppercase'>&copy; 2022 Yeti Themes</span>
                <nav>
                    <a href="mailto:Yeti Themes<info@yetithemes.net>?subject=Support">Support</a>
                    <span class="divider">|</span>
                    <a href="http://yeti.yetithemes.net/docs" target="_blank" rel="noreferrer">Docs</a>
                </nav>
            </div>
        </footer>

    </main>

    <!-- Scripts -->
    @yield('js')
    <script src="{{ asset('../assets/js/vendor.js') }}"></script>
    <script src="{{ asset('../assets/js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        
        @if (session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: '{{ session('success') }}',
            });
        @endif

        function confirmDelete(postSlug) {
            Swal.fire({
                title: 'Delete Post',
                text: 'Are you sure you want to delete this post?',
                icon: 'error',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it',
                cancelButtonText: 'No, cancel',
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "{{ url('/Admin/Delete/') }}/" + postSlug;
                }
            });
        }

    </script>

</body>


<!-- Mirrored from yeti.yetithemes.net/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Aug 2023 17:02:15 GMT -->

</html>

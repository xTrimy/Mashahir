<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>@yield('title')</title>
</head>
<body dir="rtl" class="bg-gray-100 overflow-x-hidden">
    <div class="w-full bg-white  h-20 shadow-md px-4 md:px-8 lg:px-12 xl:px-20 2xl:px-52 flex justify-between">
        <div class="flex items-center h-full">
            <div class="cursor-pointer h-8 w-8 text-curious-blue text-3xl lg:text-4xl flex justify-start items-center">
                <i class="las la-bars"></i>
            </div>
            <div class="w-12 h-12 md:h-18 md:w-18 xl:w-64">
                <img class="w-full h-full object-contain object-center" src="{{ asset('image/UNESCO_logo_white.png') }}" alt="">
            </div>
            <div class="lg:mr-2 text-curious-blue text-base">
                <div class="flex items-center">
                    <div class="hidden lg:block md:mr-5 lg:mr-9">
                        <i class="fas fa-folder-open text-xl ml-2"></i>
                        أعلاناتي
                    </div>
                    <div class="hidden md:block md:mr-5 lg:mr-9">
                        <i class="fas fa-cubes text-xl ml-2"></i>
                        التصنيفات
                    </div>
                    <div class="hidden lg:block md:mr-5 lg:mr-9">
                        <i class="fas fa-user text-xl ml-2"></i>
                        أبحث عن خدمة
                    </div>
                </div>
            </div>
        </div>
        <div class="flex items-center h-full text-curious-blue flex-row-reverse text-lg lg:text-xl">
            <button class="group mr-2 relative h-full hover:bg-gray-200 px-4 focus:bg-gray-200">
                <div class="group w-14 h-14 bg-white rounded-full overflow-hidden">
                    <img src="{{ asset(Auth::user()->image ?? "avatars/images/default.png") }}" class="w-full h-full object-cover object-center" alt="">
                </div>

                <div class="absolute top-full z-20 left-0 w-48 bg-white group-hover:block group-focus:block hidden text-black text-base">
                    <div class="w-6 overflow-hidden inline-block absolute left-8 bottom-full">
                        <div class=" h-3 w-6 bg-white rotate-45 transform origin-bottom-left"></div>
                    </div>
                    <a href="/profile/{{$user->username}}" class="block w-full bg-white hover:bg-gray-200 text-right px-4 py-2 border-b">
                            <i class="las la-user text-lg ml-2"></i>
                            {{$user->username}}
                    </a>
                    <a href="{{ route('dashboard.credit') }}" class="block w-full bg-white hover:bg-gray-200 text-right px-4 py-2 border-b">
                        <i class="las la-dollar-sign text-lg ml-2"></i>
                        الرصيد
                    </a>
                    <a href="{{ route('dashboard.edit-profile') }}" class="block w-full bg-white hover:bg-gray-200 text-right px-4 py-2 border-b">
                        <i class="las la-cog text-lg ml-2"></i>
                        الإعدادات
                    </a>
                    <a href="{{ route('logout') }}" class="block w-full bg-white hover:bg-gray-200 text-right px-4 py-2 border-b">
                        <i class="las la-sign-out-alt text-lg ml-2"></i>
                        خروج
                    </a>
                </div>
               </button>
            <div class="mr-6 lg:mr-8">
                <i class="fas fa-bell"></i>
            </div>
            <div class="mr-6 lg:mr-8">
                <i class="fas fa-envelope"></i>
            </div>
            <div class="mr-6 lg:mr-8 sm:block hidden">
                <i class="fas fa-shopping-cart"></i>
            </div>
            <div class="mr-6 lg:mr-8 sm:block hidden">
                <i class="fas fa-globe"></i>
            </div>
        </div>
    </div>
    <div class="w-full relative min-h-screen flex">
        <div id="dashboard-side" class="fixed z-20 transform transition-transform translate-x-full lg:translate-x-0 lg:sticky shadow-xl top-0 right-0 bg-white h-screen">
            <div id="dashboard-menu-button" class="lg:hidden cursor-pointer absolute top-24 right-full w-12 h-10 bg-white border-l-2 border-curious-blue text-curious-blue flex justify-center items-center">
                <i class="las la-bars text-2xl"></i>
            </div>
            <div class="w-36 h-full px-4">
                <div class="w-full h-28 text-center shadow-md rounded flex justify-center items-center flex-col">
                    <div class="w-full h-16 flex justify-center items-center text-curious-blue">
                        <i class="las la-tachometer-alt text-3xl lg:text-4xl"></i>
                    </div>
                    الرئيسية
                </div>
                <div class="w-full h-18 text-sm lg:text-base lg:h-28 text-center rounded text-gray-400 flex justify-center items-center flex-col">
                    <div class="w-full h-16 flex justify-center items-center ">
                        <i class="las la-shopping-cart text-3xl lg:text-4xl"></i>
                    </div>
                    الطلبات
                </div>
                <div class="w-full h-18 text-sm lg:text-base lg:h-28 text-center rounded text-gray-400 flex justify-center items-center flex-col">
                    <div class="w-full h-16 flex justify-center items-center ">
                        <i class="las la-dollar-sign text-3xl lg:text-4xl"></i>
                    </div>
                    الرصيد
                </div>
                <div class="w-full h-18 text-sm lg:text-base lg:h-28 text-center rounded text-gray-400 flex justify-center items-center flex-col">
                    <div class="w-full h-16 flex justify-center items-center ">
                        <i class="las la-calendar text-3xl lg:text-4xl"></i>
                    </div>
                    التقويم
                </div>
                <div class="w-full h-18 text-sm lg:text-base lg:h-28 text-center rounded text-gray-400 flex justify-center items-center flex-col">
                    <div class="w-full h-16 flex justify-center items-center ">
                        <i class="las la-bell text-3xl lg:text-4xl"></i>
                    </div>
                    الاشعارات الهامة
                </div>
                <div class="lg:absolute bottom-4 w-full h-18 lg:h-28 text-center rounded text-gray-400 flex justify-center items-center flex-col">
                    <div class="w-full h-16 flex justify-center items-center ">
                        <i class="las la-sign-out-alt text-3xl lg:text-4xl"></i>
                    </div>
                    تسجيل الخروج
                </div>
            </div>
        </div>
        <div class="px-2 lg:pr-12 lg:pl-24 py-12 mt-8 w-full overflow-x-hidden">
        @if($requestInfo->username)
        <a href="{{route('dashboard.main')}}"><div class="rounded-full bg-blue-200 table text-curious-blue py-2 px-12 mb-2">العودة للرئيسية</div></a>
        @endif
        <h1 class="text-3xl lg:text-5xl font-extrabold mb-8">لوحة التحكم @if($requestInfo->username) ({{$profile->name}}) @endif</h1>
        @yield('content')
</div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        var dahsboard_menu_button = document.getElementById('dashboard-menu-button');
        dahsboard_menu_button.addEventListener('click',function(){
            let parent = this.parentElement;
            parent.classList.toggle('translate-x-full');
        });
    </script>
</body>
</html>

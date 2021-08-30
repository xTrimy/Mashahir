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
    <div class="w-full bg-curious-blue h-20 shadow-lg px-4 md:px-8 lg:px-12 xl:px-20 2xl:px-52 flex justify-between">
        <div class="flex items-center h-full">
            <div class="cursor-pointer h-8 w-8 text-white text-3xl lg:text-4xl flex justify-start items-center">
                <i class="las la-bars"></i>
            </div>
            <a href="{{ route('home') }}" class="w-12 h-12 md:h-18 md:w-18 xl:w-64">
                <img class="w-full h-full object-contain object-center" src="{{ asset('image/UNESCO_logo_white.png') }}" alt="">
            </a>
            <div class="lg:mr-2 text-white text-base h-full">
                <div class="flex items-center h-full">
                    <a href="#" class="hidden lg:flex md:mr-5 lg:mr-6 hover:bg-curious-blue-200 h-full items-center lg:px-4 px-1 ">
                        <i class="fas fa-folder-open text-xl ml-2"></i>
                        أعلاناتي
                    </a>
                    <a href="#" class="hidden md:flex md:mr-5 lg:mr-6 hover:bg-curious-blue-200 h-full items-center lg:px-4 px-1 ">
                        <i class="fas fa-cubes text-xl ml-2"></i>
                        التصنيفات
                    </a>
                    <a href="/celebrities" class="hidden lg:flex md:mr-5 lg:mr-6 hover:bg-curious-blue-200 h-full items-center lg:px-4 px-1 ">
                        <i class="fas fa-user text-xl ml-2"></i>
                        أبحث عن خدمة
                    </a>
                </div>
            </div>
        </div>
        @auth
           <div class="flex items-center h-full text-white flex-row-reverse text-lg lg:text-xl">
               <button class="group mr-2 relative h-full hover:bg-curious-blue-200 px-4 focus:bg-curious-blue-200">
                <div class="group w-14 h-14 bg-white rounded-full overflow-hidden">
                    <img src="{{ asset($user->image ?? "avatars/images/default.png") }}" class="w-full h-full object-cover object-center" alt="">
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
        @endauth
        @guest
            <div class="flex h-full items-center">
                <a href="{{ route('signin') }}" class="transition-colors text-white flex items-center py-2 px-4 border border-white mr-2 hover:bg-white hover:text-curious-blue">
                    <i class="fas fa-sign-in-alt text-xl ml-2"></i>
                    دخول
                </a>
                <a href="{{ route('signup') }}" class="transition-colors text-white flex items-center py-2 px-4 border border-white mr-2 hover:bg-white hover:text-curious-blue">
                    <i class="fas fa-user-plus text-xl ml-2"></i>
                    تسجيل
                </a>
            </div>
        @endguest

    </div>
    <link rel="stylesheet" href="{{ asset('js/app.js') }}">
    <div class="w-full">
        @yield('before-contents')
    </div>
    <div class="md:wrapper pt-4 px-4 md:px-8 lg:px-12 xl:px-20 2xl:px-52 mt-10 min-h-screen">

        @yield('contents')

    </div>
    <div class="w-full py-12 bg-gray-800 text-gray-400 flex px-4 md:px-8 lg:px-12 xl:px-20 2xl:px-52 justify-between font-bold flex-wrap lg:flex-nowrap ">
        <div class="w-full lg:w-72 mb-12 lg:mb-0">
            <div class="w-full h-16 mb-4">
                <img src="{{ asset('image/UNESCO_logo_white.png') }}" class="object-contain object-right w-full h-full" alt="">
            </div>
            <p class="w-full">
                هذا النص هو مثال لنص يمكن أن يستبدلفي نفس
                المساحة، لقد تم توليد هذا النص من مولد النص العربى،
                حيث يمكنك أن تولد مثل هذا النص أو العديد من
                النصوص الأخرى إضافة إلى زيادة عدد الحروف التى
            </p>
        </div>
            <div class="flex flex-col h-full ml-12  lg:w-auto w-full">
                <p class="text-lg mb-4"> حول موقع مشاهير </p>
                <p class="text-lg mb-4"> كيف يعمل الموقع </p>
                <p class="text-lg mb-4"> الأسئلة الشائعة </p>
                <p class="text-lg mb-4"> إعرف كيف نضمن حقوقك </p>
            </div>
            <div class="flex flex-col h-full ml-12 lg:w-auto w-full">
                <p class="text-lg mb-4"> التصنيفات </p>
                <p class="text-lg mb-4"> بيان الخصوصية </p>
                <p class="text-lg mb-4"> شروط الأستخدام </p>
                <p class="text-lg mb-4"> دعم ومساعدة </p>
            </div>
            <div class="flex flex-col h-full ml-12 lg:w-auto w-full mb-12 lg:mb-0">
                <p class="text-lg mb-4"> وكلاء الأعلانات </p>
                <p class="text-lg mb-4"> جميع المشاهير </p>
                <p class="text-lg mb-4"> مدونة مشاهير </p>
            </div>
            <div class="ml-12 w-full lg:w-auto mb-12 lg:mb-0">
                <h1>تابع مشاهير على</h1>
                <div class="flex text-3xl items-center font-normal">
                    <a href="#"><i class="lab la-twitter ml-2"></i> </a>
                    <a href="#"><i class="lab la-instagram ml-2"></i> </a>
                    <a href="#"><i class="lab la-facebook-f text-2xl ml-2"></i> </a>
                </div>
            </div>
            <div>
                <h1>وسائل الدفع المتاحة</h1>
                <div class="flex text-3xl items-center font-normal mt-1">
                    <i class="fab fa-cc-paypal ml-2"></i>
                    <i class="fab fa-cc-mastercard ml-2"></i>
                    <i class="fab fa-cc-visa ml-2"></i>
                </div>
            </div>
    </div>
</body>
</html>

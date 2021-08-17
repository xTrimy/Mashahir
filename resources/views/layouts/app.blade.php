<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <title>@yield('title')</title>
</head>
<body dir="rtl" class="bg-gray-100 overflow-x-hidden">
    <div class="w-full bg-curious-blue h-20 shadow-lg px-4 md:px-12 lg:px-20 xl:px-52 flex justify-between">
        <div class="flex items-center h-full">
            <div class="cursor-pointer h-8 w-8 text-white text-3xl lg:text-4xl flex justify-start items-center">
                <i class="las la-bars"></i>
            </div>
            <div class="w-12 h-12 md:h-18 md:w-18 xl:w-64">
                <img class="w-full h-full object-contain object-center" src="{{ asset('image/UNESCO_logo_white.png') }}" alt="">
            </div>
            <div class="lg:mr-2 text-white text-base">
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
        <div class="flex items-center h-full text-white flex-row-reverse text-lg lg:text-xl">
            <div class="w-14 h-14 bg-white rounded-full mr-8 overflow-hidden">
                <img src="{{ asset('image/placeholders/face-2.jpg') }}" class="w-full h-full object-cover object-center" alt="">
            </div>
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
    <link rel="stylesheet" href="{{ asset('js/app.js') }}">
    <div class="w-full">
        @yield('before-contents')
    </div>
    <div class="md:wrapper pt-4 px-4 md:px-12 lg:px-20 xl:px-52 mt-10 min-h-screen">
        
        @yield('contents')

    </div>
    <div class="w-full py-12 bg-gray-800 text-gray-400 flex px-4 md:px-12 lg:px-20 xl:px-52 justify-between font-bold flex-wrap lg:flex-nowrap ">
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <title>الرئيسية</title>
</head>
<body dir="rtl">
    <div class="w-full bg-blue-500 h-24 shadow-lg px-36 flex justify-between">
        <div class="flex items-center h-full">
            <div class="cursor-pointer h-12 w-12 text-white text-5xl flex justify-center items-center">
                <i class="las la-bars"></i>
            </div>
            <div class="h-20 w-64">
                <img class="w-full h-full object-contain object-center" src="{{ asset('image/UNESCO_logo_white.png') }}" alt="">
            </div>
            <div class="lg:mr-2 text-white text-xl">
                <div class="flex items-center">
                    <div class="md:mr-5 lg:mr-9">
                        <i class="fas fa-folder-open text-2xl ml-2"></i>
                        أعلاناتي
                    </div>
                    <div class="md:mr-5 lg:mr-9">
                        <i class="fas fa-cubes text-2xl ml-2"></i>
                        التصنيفات
                    </div>
                    <div class="md:mr-5 lg:mr-9">
                        <i class="fas fa-user text-2xl ml-2"></i>
                        أبحث عن خدمة
                    </div>
                </div>
            </div>
        </div>
        <div class="flex items-center h-full text-white flex-row-reverse text-2xl">
            <div class="w-14 h-14 bg-white rounded-full mr-8"></div>
            <div class="mr-8">
                <i class="fas fa-bell"></i>
            </div>
            <div class="mr-8">
                <i class="fas fa-envelope"></i>
            </div>
            <div class="mr-8">
                <i class="fas fa-shopping-cart"></i>
            </div>
            <div class="mr-8">
                <i class="fas fa-globe"></i>
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="{{ asset('js/app.js') }}">
</body>
</html>
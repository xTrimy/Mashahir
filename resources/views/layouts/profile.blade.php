@extends('layouts.app')

@section('title')
    ملفي
@endsection
@section('before-contents')
<div class="w-full h-80  bg-black">
    <img class="w-full h-full object-cover opacity-30" src="{{ asset('image/placeholders/photo-1519944518895-f08a12d6dfd5.jpg') }}" alt="">
</div>
@endsection

@section('contents')

<div class="flex flex-wrap lg:flex-nowrap relative z-10 justify-center lg:justify-start -mt-14 ">
    <div class="flex-initial">
        <div class="w-80 shadow-lg mb-8 -mt-10">
            <div class="w-full p-4 bg-white border-0 border-b border-solid">
                <div class="w-full h-64 bg-black">
                    <img src="{{ asset('image/placeholders/face-3.jpg') }}" class="w-full h-full object-center object-cover" alt="">
                </div>
                <div class="mt-4">
                    <p class="text-xl text-black">حلا الترك</p>
                    <div class="mt-5 flex">
                        <form method="POST" action="" class="flex">
                            @csrf
                            <input type="hidden" name="user_id" value="">
                            <button type="submit" class="cursor-pointer text-center border-2 border-curious-blue bg-white text-white transition-colors px-5 py-2 text-lg font-bold"> 
                                <i class="fas fa-star text-curious-blue"></i>
                            </button>
                        </form>
                        <div class="p-1"></div>
                        <div class="flex-1 text-center bg-curious-blue text-white px-8 py-2 text-lg font-bold cursor-pointer">طلب تواصل</div>
                    </div>
                </div>
            </div>
            <div class="w-full break-words p-4 bg-white border-0 border-b border-solid mb-5">
                <div class="mb-3 flex">
                    <p class="text-base text-black flex-1">البلد</p>
                    <p class="text-lg text-black font-semibold flex-1 text-left">البحرين</p>
                </div>
                <div class="mb-3 flex">
                    <p class="text-base text-black flex-1">عدد المشاهدات</p>
                    <p class="text-lg text-black font-semibold flex-1 text-left">+ 65,000</p>
                </div>
                <div class="mb-3 flex">
                    <p class="text-base text-black flex-1">معدل التوظيف</p>
                    <p class="text-lg text-black font-semibold flex-1 text-left">20%</p>
                </div>
                <div class="mb-3 flex">
                    <p class="text-base text-black flex-1">الاعلانات المكتملة</p>
                    <p class="text-lg text-black font-semibold flex-1 text-left">25</p>
                </div>
                <div class="mb-3 flex">
                    <p class="text-base text-black flex-1">اعلانات قيد التنفيذ</p>
                    <p class="text-lg text-black font-semibold flex-1 text-left">2</p>
                </div>
                <hr class="mb-5">
                <div class="mb-3 flex">
                    <p class="text-base text-black flex-1">اخر تواجد</p>
                    <p class="text-lg text-black font-semibold flex-1 text-left">منذ 4 أيام</p>
                </div>
            </div>
            
        </div>
        <div class="w-full break-words p-4 bg-white border-0 border-b border-solid mb-5 shadow-lg">
            <div class="mb-3 flex">
                <p class="text-base text-black font-bold flex-1">التصريحات والاعتمادات</p>
            </div>
            <hr class="my-5">
            <div class="mb-3 flex">
                <p class="text-base text-black flex-1">الهوية الشخصية</p>
                <p class="text-lg text-black font-semibold text-left"><i class="fas fa-check text-curious-blue"></i></p>
            </div>
            <div class="mb-3 flex">
                <p class="text-base text-black flex-1">اعتماد الجهات التنظيمية</p>
                <p class="text-lg text-black font-semibold text-left"><i class="fas fa-check text-curious-blue"></i></p>
            </div>
            <hr class="my-5">
            <div class="mb-3 flex">
                <p class="text-base text-black flex-1">ضريبة القيمة المضافة</p>
                <p class="text-lg text-black font-semibold text-left"><i class="fas fa-check text-curious-blue"></i></p>
            </div>
            <div class="mb-3 flex">
                <p class="text-base text-black flex-1">معروف</p>
                <p class="text-lg text-black font-semibold text-left"><i class="fas fa-check text-curious-blue"></i></p>
            </div>
        </div>
    </div>
    <div class="flex-auto mr-6 w-full md:w-auto">
        <div class="w-full">
            <h1 class="text-3xl text-black font-bold">
                @yield('profile-title')
            </h1>
            <div class="overflow-x-scroll md:overflow-x-auto">
            @yield('profile-nav')
            </div>
            @yield('profile-data')
        </div>
    </div>
</div>

@endsection
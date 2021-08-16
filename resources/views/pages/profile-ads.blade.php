@extends('layouts.profile')

@section('title')
    ملفي
@endsection

@section('profile-nav')
<div class="font-semibold flex w-full my-4 border-0 border-b pb-2 uppercase border-solid">
    <div class="text-xl px-4 text-gray-400">
        <a href="">الخدمات</a>
    </div>
    <div class="text-xl px-4 text-gray-400">
        <a href="">عني</a>
    </div>
    <div class="text-xl pl-4 border-0 border-b-4 border-curious-blue border-solid -mb-2.5 font-bold">
        <a href="">الاعلانات</a>
    </div>
    <div class="text-xl px-4 text-gray-400 ">
        <a href="">الأخبار</a>
    </div>
    <div class="text-xl px-4 text-gray-400">
        <a href="">الوكيل</a>
    </div>
    <div class="text-center bg-curious-blue text-white px-4 py-1 text-lg font-bold cursor-pointer absolute left-0 mr-1">مشاركة <i class="fas fa-external-link-alt"></i></div>
</div>
@endsection

@section('profile-data')
    <div class="bg-white p-2 border-solid border border-blueGray-light mb-5">
        <div class="w-full p-1 md-p-4 mb-4 bg-white flex items-center justify-between">
            <div class="flex items-center">
                <div class="w-24 h-24 mr-2 md:ml-10">
                    <img class="w-full h-full object-cover" src="{{ asset('image/placeholders/face-3.jpg') }}"/>
                </div>
                <div>
                    <b class="text-sm md:text-xl">إعلان لمجلة سيدتي</b>
                    <div class="flex">
                        <p class="mt-0 md:mt-2 text-xs md:text-base text-gray-400"> <i class="fas fa-cubes"></i> أزياء وموضة </p>
                        <p class="mt-0 md:mt-2 text-xs md:text-base text-gray-400 mr-5"> <i class="far fa-clock"></i> 7/3/2021</p>
                        <p class="mt-0 md:mt-2 text-xs md:text-base text-gray-400 mr-5"> <i class="far fa-eye"></i> 7858</p>
                    </div>
                </div>
            </div>
            
            <a href=""><button class="w-36 md:w-52 px-1 md:px-10 font-bold py-5 md:py-3 md:text-sm border-none bg-curious-blue text-white cursor-pointer">
                مشاهدة
            </button></a>
        </div>
    </div>
@endsection

@section('profile-title')
        
@endsection
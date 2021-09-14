@extends('layouts.dashboard')
@section('page')
ads
@endsection
@section('title')
تعديل الملف | لوحة التحكم
@endsection
@section('content')
            <h1 class="text-3xl lg:text-5xl font-extrabold mb-8">إدارة الملف </h1>

            <div class="w-full mt-8 flex flex-wrap lg:flex-nowrap">
                <x-profile-settings-navbar page="ads" />

                <div class="lg:mr-8 flex-1 h-full ">
                    <div class="flex items-center shadow-lg bg-white px-12 mb-7 rounded-md justify-between">
                        <div class="flex">
                            <div class="font-bold flex text-curious-blue border-b-4 border-curious-blue h-20 items-center ml-8 cursor-pointer px-3"> <p> مراجعة عامة  </p></div>
                            <div class="font-bold flex h-20 items-center cursor-pointer px-3"> <p> اضافة عمل جديد </p></div>
                        </div>
                        <div>
                            <i class="fas fa-ellipsis-h text-3xl text-gray-500 cursor-pointer"></i>
                        </div>
                    </div>
                    <div class="flex items-center shadow-lg bg-white py-4 px-12 rounded-md justify-between">
                        <div class="flex items-center">
                            <div class="w-24 h-24 mr-2 md:ml-10">
                                <img class="w-full h-full object-cover rounded" src="{{ asset('image/placeholders/face-3.jpg') }}"/>
                            </div>
                            <div>
                                <b class="text-sm md:text-xl font-medium">إعلان لمجلة سيدتي</b>
                                <div class="flex">
                                    <p class="mt-0 md:mt-2 text-xs md:text-base text-gray-400"> <i class="fas fa-cubes"></i> أزياء وموضة </p>
                                    <p class="mt-0 md:mt-2 text-xs md:text-base text-gray-400 mr-5"> <i class="fas fa-arrow-left"></i> مجلة سيدتي </p>
                                    <p class="mt-0 md:mt-2 text-xs md:text-base text-gray-400 mr-5"> <i class="far fa-clock"></i> 7/3/2021</p>
                                    <p class="mt-0 md:mt-2 text-xs md:text-base text-gray-400 mr-5"> <i class="far fa-eye"></i> 7858</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="flex-1 text-center bg-white text-curious-blue border-4 border-curious-blue px-8 py-2 text-lg font-semibold cursor-pointer ml-5"> مشاهدة </div>
                            <div class="flex-1 text-center bg-curious-blue text-white px-8 py-2 text-lg font-semibold cursor-pointer"> تعديل </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

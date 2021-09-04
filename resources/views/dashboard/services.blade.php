@extends('layouts.dashboard')
@section('title')
تعديل الملف | لوحة التحكم
@endsection
@section('content')
            <h1 class="text-3xl lg:text-5xl font-extrabold mb-8">إدارة الملف </h1>

            <div class="w-full mt-8 flex">
                <x-profile-settings-navbar page="services" />

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
                    <x-service-form />

                </div>
            </div>
        </div>
@endsection

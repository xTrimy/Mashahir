@extends('layouts.dashboard')
@section('title')
أضافة خدمة  | لوحة التحكم
@endsection
@section('content')
        <div class="px-2 lg:pr-12 lg:pl-24 py-12 mt-8 w-full overflow-x-hidden">
            <h1 class="text-3xl lg:text-5xl font-extrabold mb-8">إدارة الملف </h1>

            <div class="w-full mt-8 flex">
                <x-profile-settings-navbar page="services" />

                <div class="lg:mr-8 flex-1 h-full ">
                    <div class="flex items-center shadow-lg bg-white px-12 mb-7 rounded-md justify-between">
                        <div class="flex">
                            <a href="{{ route('dashboard.services.main') }}"><div class="font-bold flex h-20 items-center cursor-pointer px-3"> <p> مراجعة عامة </p></div></a>
                            <a href="{{ route('dashboard.services.add') }}"><div class="font-bold flex text-curious-blue border-b-4 border-curious-blue h-20 items-center ml-8 cursor-pointer px-3"> <p> اضافة خدمة جديدة </p></div></a>
                        </div>
                        <div>
                            <i class="fas fa-ellipsis-h text-3xl text-gray-500 cursor-pointer"></i>
                        </div>
                    </div>
                    <x-service-form id="{{ $service->id ?? null }}" />
                </div>
            </div>
        </div>
@endsection

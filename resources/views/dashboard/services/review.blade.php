@extends('layouts.dashboard')
@section('title')
مراجعة عامة للخدمات  | لوحة التحكم
@endsection
@section('content')
            <h1 class="text-3xl lg:text-5xl font-extrabold mb-8">إدارة الملف </h1>

            <div class="w-full mt-8 flex flex-wrap lg:flex-nowrap">

                <x-profile-settings-navbar page="services" />

                <div class="lg:mr-8 flex-1 h-full ">
                    <div class="flex items-center shadow-lg bg-white px-12 mb-7 rounded-md justify-between">
                        <div class="flex">
                            <a href="{{ route('dashboard.services.main') }}"><div class="font-bold flex text-curious-blue border-b-4 border-curious-blue h-20 items-center cursor-pointer px-3"> <p> مراجعة عامة </p></div></a>
                            <a href="{{ route('dashboard.services.add') }}"><div class="font-bold flex  h-20 items-center ml-8 cursor-pointer px-3"> <p> اضافة خدمة جديدة </p></div></a>
                        </div>
                        <div>
                            <i class="fas fa-ellipsis-h text-3xl text-gray-500 cursor-pointer"></i>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-2 xl:grid-cols-3 gap-4">
                        @foreach ($services as $service)
                            <div class="bg-white w-full h-72 p-3 border-solid border mb-5">
                                <div class="w-full h-3/5 md:ml-10">
                                    <img class="w-full h-full object-cover" src="{{ asset($service->images->first()->image ?? "default.png") }}"/>
                                </div>
                                <div class="text-l text-center my-3"><b>{{ $service->name }}</b></div>
                                <a href="{{ route('dashboard.services.edit',$service->id) }}"><div class=" bg-curious-blue text-white w-8/12 cursor-pointer m-auto py-2 text-center font-bold">تعديل</div></a>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
@endsection

@extends('layouts.dashboard')
@section('title')
مراجعة عامة للخدمات  | لوحة التحكم
@endsection
@section('content')
        <div class="px-2 lg:pr-12 lg:pl-24 py-12 mt-8 w-full overflow-x-hidden">
            <h1 class="text-3xl lg:text-5xl font-extrabold mb-8">إدارة الملف </h1>
            
            <div class="w-full mt-8 flex">
                <div class="w-60">
                    <div class="w-full bg-white shadow-md rounded text-lg">
                        <div class="w-full py-6 px-8 text-gray-400 border-b">
                            <i class="fas fa-pen ml-4 text-2xl"></i>
                            <span>تعديل الملف</span>
                        </div>
                        <div class="w-full py-6 px-8 text-gray-400 border-b">
                            <i class="fas fa-shopping-cart ml-4 text-2xl"></i>
                            <span>الطلبات الواردة</span>
                        </div>
                        <div class="w-full py-6 px-8 text-gray-400 border-b">
                            <i class="fas fa-calendar-alt ml-4 text-2xl"></i>
                            <span>التقويم</span>
                        </div>
                        <div class="w-full py-6 px-8 text-gray-400 border-b">
                            <i class="fas fa-cubes ml-4 text-2xl"></i>
                            <span>الإعلانات</span>
                        </div>
                        <div class="w-full py-6 px-8 font-bold text-curious-blue  border-b">
                            <i class="far fa-paper-plane ml-4 text-2xl"></i>
                            <span>الخدمات</span>
                        </div>
                        <div class="w-full py-6 px-8 text-gray-400 border-b">
                            <i class="fas fa-comment ml-4 text-2xl relative">
                                <div class="w-2 h-2 bg-rose-500 absolute top-1/2 transform -translate-x-1/2 left-0 rounded-full">
                                    <div class="w-2 h-2 bg-rose-500 absolute rounded-full animate-ping"></div>
                                </div>
                            </i>
                            <span>الاشعارات الهامة</span>
                        </div>
                    </div>
                    
                </div>
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
                    <div class="flex flex-wrap justify-between">
                        @foreach ($services as $service)
                            <div class="bg-white w-3/12 h-72 p-3 border-solid border mb-5 mx-4">
                                <div class="w-full h-3/5 md:ml-10">
                                    <img class="w-full h-full object-cover" src="{{ asset($service->image ?? "default.png") }}"/>
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
   
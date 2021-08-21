@extends('layouts.dashboard')
@section('title')
 المهام | لوحة التحكم
@endsection
@section('content')
        <div class="px-2 lg:pr-12 lg:pl-24 py-12 mt-8 w-full overflow-x-hidden">
            <h1 class="text-3xl lg:text-5xl font-extrabold mb-8">لوحة التحكم</h1>
            <div class="w-full border-blue-200 border-b px-4 text-lg lg:text-2xl flex overflow-x-auto">
                <div class=" px-4 mx-2 whitespace-nowrap">نظرة عامة</div>
                <div class="font-bold border-b-2 border-curious-blue pb-4 px-4 mx-2">المهام</div>
                <div class=" px-4 mx-2">المشاهير</div>
                <div class=" px-4 mx-2">الرصيد</div>
                <div class=" px-4 mx-2">اعدادات</div>
            </div>
            <div class="w-full mt-8">
                <div class="mt-4w-full flex py-4 px-8 border-r-16 border-rose-600 rounded-lg shadow-md bg-white flex-wrap md:flex-nowrap">
                    <div class="w-20 h-20 rounded-full bg-black ml-4 overflow-hidden">
                        <img src="{{ asset('image/placeholders/face-2.jpg') }}" class="w-full h-full object-center object-cover" alt="">
                    </div>
                    <div class="flex flex-col h-full justify-between mt-4 md:mt-0 w-full md:w-auto">
                        <h1 class="text-2xl whitespace-wrap">
                            طلب إعلان لمجلة سيدتي
                        </h1>
                        <div class="flex text-gray-400 text-base md:text-lg flex-wrap">
                            <span class="ml-6 mt-4">
                                <i class="fas fa-user"></i>
                                Saidaty
                            </span>
                            <span class="ml-6 mt-4">
                                <i class="fas fa-dollar-sign"></i>
                                450
                            </span>
                            <span class="ml-6 mt-4 text-rose-600">
                                <i class="fas fa-info-circle"></i>
                                جاري التنفيذ
                            </span>
                            <span class="ml-6 mt-4">
                                <i class="fas fa-clock"></i>
                                منذ ساعة واحدة
                            </span>
                        </div>
                    </div>
                </div>
                
            </div>
            </div>
@endsection
   
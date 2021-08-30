@extends('layouts.dashboard')
@section('title')
المشاهير | لوحة التحكم
@endsection
@section('content')
        <div class="px-2 lg:pr-12 lg:pl-24 py-12 mt-8 w-full overflow-x-hidden">
            <h1 class="text-3xl lg:text-5xl font-extrabold mb-8">لوحة التحكم</h1>
            <x-dashboard-nav-bar page="requests"/>

            <div class="flex items-center shadow-lg bg-white px-12 my-7 rounded-md justify-between">
                <div class="flex">
                    <div class="flex">
                        <div class="flex ml-8 items-center my-4">
                            <input type="checkbox" name="color" id="" class="form-checkbox rounded border-2 border-curious-blue text-curious-blue ml-2">
                            <p class="text-black">بانتظار الموافقة</p>
                        </div>

                        <div class="flex ml-8 items-center my-4">
                            <input type="checkbox" name="color" id="" class="form-checkbox rounded border-2 border-curious-blue text-curious-blue ml-2">
                            <p class="text-black">جاري تنفيذها</p>
                        </div>

                        <div class="flex ml-8 items-center my-4">
                            <input type="checkbox" name="color" id="" class="form-checkbox rounded border-2 border-curious-blue text-curious-blue ml-2">
                            <p class="text-black">بانتظار الاستلام</p>
                        </div>

                        <div class="flex ml-8 items-center my-4">
                            <input type="checkbox" name="color" id="" class="form-checkbox rounded border-2 border-curious-blue text-curious-blue ml-2">
                            <p class="text-black">تم تسليمها</p>
                        </div>

                        <div class="flex ml-8 items-center my-4">
                            <input type="checkbox" name="color" id="" class="form-checkbox rounded border-2 border-curious-blue text-curious-blue ml-2">
                            <p class="text-black">ملغية</p>
                        </div>
                    </div>
                </div>
                <div>
                    <i class="fas fa-ellipsis-h text-3xl text-gray-500 cursor-pointer"></i>
                </div>
            </div>

            <div class="w-full mt-8 bg-white shadow-lg px-12 py-4 rounded-md border-r-12 border-pink-700">
                <div class="flex items-center">
                    <div class="w-20 h-20 mr-2 md:ml-10 relative">
                        <img class="w-full h-full object-cover rounded-full" src="{{ asset('image/placeholders/face-3.jpg') }}"/>
                        <img class="w-3/6 h-2/4 object-cover rounded-full absolute bottom-0 right-0" src="{{ asset('image/placeholders/face-4.jpg') }}"/>
                    </div>
                    <div>
                        <b class="text-sm md:text-xl font-medium">إعلان دعائي لمجلة سيدتي </b>
                        <div class="flex">
                            <p class="mt-0 md:mt-2 text-xs md:text-base text-gray-400"> <i class="fas fa-user"></i> حلا الترك </p>
                            <p class="mt-0 md:mt-2 text-xs md:text-base text-gray-400 mr-5"> <i class="fas fa-user ml-1"></i> Ibrahim Ashraf</p>
                            <p class="mt-0 md:mt-2 text-xs md:text-base text-gray-400 mr-5"> <i class="fas fa-dollar-sign ml-1"></i> 780.00</p>
                            <p class="mt-0 md:mt-2 text-xs md:text-base text-pink-700 mr-5"> <i class="fas fa-exclamation-circle ml-1"></i> جاري التنفيذ </p>
                            <p class="mt-0 md:mt-2 text-xs md:text-base text-gray-400 mr-5"> <i class="fas fa-clock ml-1"></i> منذ يوم وساعة </p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
@endsection
   
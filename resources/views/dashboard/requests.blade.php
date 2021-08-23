@extends('layouts.dashboard')
@section('title')
المشاهير | لوحة التحكم
@endsection
@section('content')
        <div class="px-2 lg:pr-12 lg:pl-24 py-12 mt-8 w-full overflow-x-hidden">
            <h1 class="text-3xl lg:text-5xl font-extrabold mb-8">لوحة التحكم</h1>
            <div class="w-full border-blue-200 border-b px-4 text-lg lg:text-2xl flex overflow-x-auto">
                <div class=" px-4 mx-2 whitespace-nowrap">نظرة عامة</div>
                <div class=" font-bold border-b-2 border-curious-blue pb-4  px-4 mx-2">الطلبات</div>
                <div class=" px-4 mx-2">الاعلانات</div>
                <div class="px-4 mx-2">المشاهير</div>
                <div class="px-4 mx-2">التنبيهات</div>
                <div class=" px-4 mx-2">التقويم</div>
                
                <div class=" px-4 mx-2">المعاملات المالية</div>
            </div>
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

            <div class="w-full mt-8 bg-white shadow-lg px-12 py-8 rounded-sm">
                
            </div>
            
        </div>
@endsection
   
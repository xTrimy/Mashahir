@extends('layouts.dashboard')
@section('title')
المشاهير | لوحة التحكم
@endsection
@section('content')
        <div class="px-2 lg:pr-12 lg:pl-24 py-12 mt-8 w-full overflow-x-hidden">
            <h1 class="text-3xl lg:text-5xl font-extrabold mb-8">لوحة التحكم</h1>
            <div class="w-full border-blue-200 border-b px-4 text-lg lg:text-2xl flex overflow-x-auto">
                <div class=" px-4 mx-2 whitespace-nowrap">نظرة عامة</div>
                <div class=" px-4 mx-2">الطلبات</div>
                <div class=" px-4 mx-2">الاعلانات</div>
                <div class="px-4 mx-2">المشاهير</div>
                <div class="font-bold border-b-2 border-curious-blue pb-4  px-4 mx-2">التنبيهات</div>
                <div class=" px-4 mx-2">التقويم</div>
                
                <div class=" px-4 mx-2">المعاملات المالية</div>
            </div>
            <div class="w-full mt-8 bg-white shadow-lg px-12 py-8 rounded-sm">
                <p class="mb-2 font-semibold text-gray-800">إختر وجهة الرسالة</p>
                <select name="title" id="" class="w-full border border-black outline-none p-2 mb-3 rounded-sm">
                    <option value="كل المستخدمين" selected>كل المستخدمين</option>
                </select>
                
                <p class="mb-2 font-semibold text-gray-800">عنوان التنبيه</p>
                <input type="text" name="subject" class="w-full  border-blue-200 border outline-none p-2 mb-3 rounded-sm  bg-blue-50" placeholder=" أدخل عنوان الرسالة">

                <p class="mb-2 font-semibold text-gray-800">نص الرسالة</p>
                <textarea name="message" id="" cols="30" rows="6" class="w-full border-blue-200 border outline-none p-2 mb-3 rounded-sm bg-blue-50" placeholder="أدخل نص الرسالة"></textarea>
                <div class="flex">
                    <div class="flex ml-5">
                        <div class="text-curious-blue border border-curious-blue py-2 px-6 cursor-pointer"><i class="fas fa-trash"></i></div>
                        <div class="text-curious-blue border border-curious-blue py-2 px-6 cursor-pointer"><i class="fas fa-exclamation-circle"></i></div>
                        <div class="text-curious-blue border border-curious-blue py-2 px-6 cursor-pointer"><i class="fas fa-download"></i></div>
                    </div>
                    <div class="flex">
                        <button class="text-curious-blue border border-curious-blue py-2 px-6 cursor-pointer dropdown relative group">
                            <i class="fas fa-arrow-down"></i> <i class="fas fa-tag"></i> 
                            <div class="dropdown-menu absolute hidden text-gray-700 pt-4 bg-white shadow-lg p-5 rounded-lg mt-8 group-focus:block group-hover:block">
                                <div class="flex">
                                    <div class="flex ml-4">
                                        <input type="checkbox" name="color" id="" class="form-checkbox rounded border-2 border-curious-blue text-curious-blue">
                                        <div class=" bg-curious-blue p-2 rounded-md mr-2"></div>
                                    </div>
                                    <div class="flex ml-4">
                                        <input type="checkbox" name="color" id="" class="form-checkbox rounded border-2 border-curious-blue text-curious-blue">
                                        <div class=" bg-red-700 p-2 rounded-md mr-2"></div>
                                    </div>
                                    <div class="flex ml-4">
                                        <input type="checkbox" name="color" id="" class="form-checkbox rounded border-2 border-curious-blue text-curious-blue">
                                        <div class=" bg-yellow-400 p-2 rounded-md mr-2"></div>
                                    </div>
                                    <div class="flex ml-4">
                                        <input type="checkbox" name="color" id="" class="form-checkbox rounded border-2 border-curious-blue text-curious-blue">
                                        <div class=" bg-green-500 p-2 rounded-md mr-2"></div>
                                    </div>
                                </div>
                            </div>
                        </button>
                        <div class="text-curious-blue border border-curious-blue py-2 px-6 cursor-pointer">
                            <i class="fas fa-arrow-down"></i> <i class="fas fa-folder"></i>
                        </div>
                        
                    </div>
                    
                </div>
                <div class="w-full mt-8 flex justify-between">
                    <div class="table px-12 py-2 bg-curious-blue text-white text-lg cursor-pointer"> أرسل  </div>
                    <div class="table px-12 py-2 bg-white text-red-800 border-2 border-red-700 text-lg font-bold cursor-pointer">الغاء</div>
                </div>
            </div>
            
        </div>
@endsection
   
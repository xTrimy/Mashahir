@extends('layouts.dashboard')
@section('title')
المشاهير | لوحة التحكم
@endsection
@section('content')
        <div class="px-2 lg:pr-12 lg:pl-24 py-12 mt-8 w-full overflow-x-hidden">
            <h1 class="text-3xl lg:text-5xl font-extrabold mb-8">لوحة التحكم</h1>
            <div class="w-full border-blue-200 border-b px-4 text-lg lg:text-2xl flex overflow-x-auto">
                <div class=" px-4 mx-2 whitespace-nowrap">نظرة عامة</div>
                <div class=" px-4 mx-2">المهام</div>
                <div class="px-4 mx-2">المشاهير</div>
                <div class="font-bold border-b-2 border-curious-blue pb-4  px-4 mx-2">الرصيد</div>
                <div class=" px-4 mx-2">اعدادات</div>
            </div>
            <div class="w-full mt-8">
                <div class="flex justify-between">
                    <h2 class="text-2xl">الرصيد</h2>
                    <a class="text-blue-600" href="#">عرض الجميع</a>
                </div>
                <div class="grid gap-4 grid-cols-1 xl:grid-cols-2 2xl:grid-cols-3 grid-rows-3 xl:grid-rows-2 2xl:grid-rows-1 w-full mt-4">
                    <div class="w-full h-full bg-white rounded-lg shadow-lg py-4 px-4 lg:px-8">
                        <div class="flex justify-between">
                            <div class="text-base font-bold mr-2">أرباح يمكن سحبها</div>
                            <div class="w-8 h-8 lg:w-12 lg:h-12 bg-green-100 rounded-full flex justify-center items-center">
                                <i class="las la-check-circle text-green-500 text-3xl"></i>
                            </div>
                        </div>
                        <div class="text-3xl lg:text-5xl lg:-mt-4 text-curious-blue">$3910</div>
                    </div>
                    <div class="w-full h-full bg-white rounded-lg shadow-lg py-4 px-4 lg:px-8">
                        <div class="flex justify-between">
                            <div class="text-base font-bold mr-2">رصيد معلق</div>
                            <div class="w-8 h-8 lg:w-12 lg:h-12 bg-yellow-100 rounded-full flex justify-center items-center">
                                <i class="las la-pause-circle text-yellow-500 text-3xl"></i>
                            </div>
                        </div>
                        <div class="text-3xl lg:text-5xl lg:-mt-4 text-curious-blue">$1577</div>
                    </div>
                    <div class="w-full h-full bg-white rounded-lg shadow-lg py-4 px-4 lg:px-8">
                        <div class="flex justify-between">
                            <div class="text-base font-bold mr-2">أرباح يمكن سحبها</div>
                            <div class="w-8 h-8 lg:w-12 lg:h-12 bg-blue-100 rounded-full flex justify-center items-center">
                                <i class="las la-chart-pie text-blue-500 text-3xl"></i>
                            </div>
                        </div>
                        <div class="text-3xl lg:text-5xl lg:-mt-4 text-curious-blue">$5487</div>
                    </div>
                </div>
            </div>
            <div class="w-full mt-8">
                <h2 class="text-2xl">المعاملات المالية</h2>
                <div class="relative w-full px-4 lg:px-8 py-4 shadow-md bg-white mt-4 flex justify-between items-center rounded-lg">
                    <div class="w-full flex flex-wrap text-lg">
                        <label class="ml-4 w-full lg:w-auto mt-2 lg:mt-0">
                            <input type="checkbox" checked class="form-checkbox rounded border-2 border-curious-blue text-curious-blue">
                            <span class="mr-1">إيداع</span>
                        </label>
                        <label class="ml-4 w-full lg:w-auto mt-2 lg:mt-0">
                            <input type="checkbox" checked class="form-checkbox rounded border-2 border-curious-blue text-curious-blue">
                            <span class="mr-1">رسوم</span>
                        </label>
                        <label class="ml-4 w-full lg:w-auto mt-2 lg:mt-0">
                            <input type="checkbox" checked class="form-checkbox rounded border-2 border-curious-blue text-curious-blue">
                            <span class="mr-1">إنهاء مشروع</span>
                        </label>
                        <label class="ml-4 w-full lg:w-auto mt-2 lg:mt-0">
                            <input type="checkbox" checked class="form-checkbox rounded border-2 border-curious-blue text-curious-blue">
                            <span class="mr-1">إعادة مال</span>
                        </label>
                        <label class="ml-4 w-full lg:w-auto mt-2 lg:mt-0">
                            <input type="checkbox" checked class="form-checkbox rounded border-2 border-curious-blue text-curious-blue">
                            <span class="mr-1">تصحيح صفقة</span>
                        </label>
                    </div>
                    <div class="absolute top-4 left-4 text-xl text-gray-500">
                        <i class="fas fa-ellipsis-h"></i>
                    </div>
                </div>
                <div class="relative w-full pr-4 pl-4 md:pl-24 lg:pr-8 shadow-md bg-white py-8 lg:py-4 mt-4 rounded-md flex items-center flex-wrap md:flex-nowrap">
                    <div class="text-3xl text-curious-blue ml-4 mb-4 ">
                        $255.00+
                    </div>
                    <div>
                        <div class="text-base md:text-xl font-semibold">
                            <span>الربح من إكمال مشروع</span>
                            <a href="#"><span class="text-curious-blue">طلب إعلان دعائي لمجموعة أندية وادي دجلة في مصر</span></a>
                        </div>
                        <div class="text-gray-400 mt-4 text-sm md:text-base">
                            <span>
                                <i class="fas fa-clock"></i>
                                <span>منذ يوم وساعتين</span>
                            </span>
                        </div>
                    </div>
                    <div class="absolute top-0 left-0 lg:top-1/2 lg:left-4 py-1 px-4 transform lg:-translate-y-1/2 bg-blue-100 text-curious-blue font-semibold">
                        <i class="fas fa-file-invoice ml-4"></i>
                        إيصال

                    </div>
                </div>
            </div> 
        </div>
@endsection
   
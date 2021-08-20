@extends('layouts.dashboard')
@section('title')
نظرة عامة | لوحة التحكم
@endsection
@section('content')
        <div class="pr-12 pl-24 py-12 mt-8 w-full">
            <h1 class="text-5xl font-extrabold mb-8">لوحة التحكم</h1>
            <div class="w-full border-blue-200 border-b px-4 text-2xl flex">
                <div class="font-bold border-b-2 border-curious-blue pb-4 px-4 mx-2">نظرة عامة</div>
                <div class=" px-4 mx-2">المهام</div>
                <div class=" px-4 mx-2">المشاهير</div>
                <div class=" px-4 mx-2">الرصيد</div>
                <div class=" px-4 mx-2">اعدادات</div>
            </div>
            <div class="flex mt-4">
                <div class="w-96">
                    <div class="flex justify-between items-center">
                        <h2 class="text-2xl">المشاهير</h2>
                        <a href="" class="text-blue-600 text-sm">عرض المزيد</a>
                    </div>
                    <div class="w-full">
                        <div class="w-full flex mt-4 shadow-lg py-4 px-8 rounded-md bg-white justify-between items-center">
                            <div class="flex items-center">
                                <div class="w-10 h-10  bg-black rounded-full overflow-hidden ml-4">
                                    <img src="{{ asset('image/placeholders/face-1.jpg') }}" class="w-full h-full object-cover object-center" alt="">
                                </div>
                                <span class="text-lg">حلا الترك</span>
                            </div>
                            <div class="py-1 px-8 text-sm bg-blue-50 text-blue-600 rounded-full">إدارة</div>
                        </div>
                        <div class="w-full flex mt-4 shadow-lg py-4 px-8 rounded-md bg-white justify-between items-center">
                            <div class="flex items-center">
                                <div class="w-10 h-10  bg-black rounded-full overflow-hidden ml-4">
                                    <img src="{{ asset('image/placeholders/face-3.jpg') }}" class="w-full h-full object-cover object-center" alt="">
                                </div>
                                <span class="text-lg">وائل كفوري</span>
                            </div>
                            <div class="py-1 px-8 text-sm bg-blue-50 text-blue-600 rounded-full">إدارة</div>
                        </div>
                        <div class="w-full flex mt-4 shadow-lg py-4 px-8 rounded-md bg-white justify-between items-center">
                            <div class="flex items-center">
                                <div class="w-10 h-10  bg-black rounded-full overflow-hidden ml-4">
                                    <img src="{{ asset('image/placeholders/face-4.jpg') }}" class="w-full h-full object-cover object-center" alt="">
                                </div>
                                <span class="text-lg">ناصر القصبي</span>
                            </div>
                            <div class="py-1 px-8 text-sm bg-blue-50 text-blue-600 rounded-full">إدارة</div>
                        </div>
                        <div class="w-full flex mt-4 shadow-lg py-4 px-8 rounded-md bg-white justify-between items-center">
                            <div class="flex items-center">
                                <div class="w-10 h-10  bg-black rounded-full overflow-hidden ml-4">
                                    <img src="{{ asset('image/placeholders/face-2.jpg') }}" class="w-full h-full object-cover object-center" alt="">
                                </div>
                                <span class="text-lg">ناصر القصبي</span>
                            </div>
                            <div class="py-1 px-8 text-sm bg-blue-50 text-blue-600 rounded-full">إدارة</div>
                        </div>
                    </div>
                    <div class="flex justify-between items-center mt-8">
                        <h2 class="text-2xl">المهام</h2>
                        <a href="" class="text-blue-600 text-sm">عرض المزيد</a>
                    </div>
                    <div class="w-full">
                        <div class="w-full flex mt-4 shadow-lg py-8 px-4 border-r-16 border-rose-600 rounded-md bg-white justify-between items-center">
                            <div class="flex items-center">
                                <div class="relative">
                                    <div class="relative w-14 h-14  bg-black rounded-full overflow-hidden ml-4">
                                    <img src="{{ asset('image/placeholders/face-2.jpg') }}" class="w-full h-full object-cover object-center" alt="">
                                </div>
                                <div class="absolute bottom-0 right-0 transform translate-x-2 translate-y-2 w-8 h-8 rounded-full overflow-hidden">
                                        <img src="{{ asset('image/placeholders/face-4.jpg') }}" class="w-full h-full object-cover object-center" alt="">
                                    </div>
                                </div>
                                <div class="flex flex-col justify-between h-full">
                                    <span class="text-xl mb-2">طلب اعلان دعائي لمجلة سيدتي</span>
                                    <div class="flex text-sm text-gray-400">
                                        <span class="ml-4">
                                            <i class="fas fa-user ml-1"></i>
                                            <span>Sayidaty</span>
                                        </span>
                                        <span class="ml-4">
                                            <i class="fas fa-dollar-sign ml-1"></i>
                                            <span>450.00</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full flex mt-4 shadow-lg py-8 px-4 border-r-16 border-rose-600 rounded-md bg-white justify-between items-center">
                            <div class="flex items-center">
                                <div class="relative">
                                    <div class="relative w-14 h-14  bg-black rounded-full overflow-hidden ml-4">
                                    <img src="{{ asset('image/placeholders/face-2.jpg') }}" class="w-full h-full object-cover object-center" alt="">
                                </div>
                                <div class="absolute bottom-0 right-0 transform translate-x-2 translate-y-2 w-8 h-8 rounded-full overflow-hidden">
                                        <img src="{{ asset('image/placeholders/face-4.jpg') }}" class="w-full h-full object-cover object-center" alt="">
                                    </div>
                                </div>
                                <div class="flex flex-col justify-between h-full">
                                    <span class="text-xl mb-2">طلب اعلان دعائي لمجلة سيدتي</span>
                                    <div class="flex text-sm text-gray-400">
                                        <span class="ml-4">
                                            <i class="fas fa-user ml-1"></i>
                                            <span>Sayidaty</span>
                                        </span>
                                        <span class="ml-4">
                                            <i class="fas fa-dollar-sign ml-1"></i>
                                            <span>450.00</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex-1 mr-8">
                    <div class="flex justify-between">
                        <h2 class="text-2xl">الرصيد</h2>
                        <a class="text-blue-600" href="#">عرض الجميع</a>
                    </div>
                    <div class="grid gap-4 grid-cols-1 xl:grid-cols-2 2xl:grid-cols-3 grid-rows-3 xl:grid-rows-2 2xl:grid-rows-1 w-full mt-4">
                        <div class="w-full h-full bg-white rounded-lg shadow-lg py-4 px-8">
                            <div class="flex justify-between">
                                <div class="text-base font-bold mr-2">أرباح يمكن سحبها</div>
                                <div class="w-12 h-12 bg-green-100 rounded-full flex justify-center items-center">
                                    <i class="las la-check-circle text-green-500 text-3xl"></i>
                                </div>
                            </div>
                            <div class="text-5xl -mt-4 text-curious-blue">$3910</div>
                        </div>
                        <div class="w-full h-full bg-white rounded-lg shadow-lg py-4 px-8">
                            <div class="flex justify-between">
                                <div class="text-base font-bold mr-2">رصيد معلق</div>
                                <div class="w-12 h-12 bg-yellow-100 rounded-full flex justify-center items-center">
                                    <i class="las la-pause-circle text-yellow-500 text-3xl"></i>
                                </div>
                            </div>
                            <div class="text-5xl -mt-4 text-curious-blue">$1577</div>
                        </div>
                        <div class="w-full h-full bg-white rounded-lg shadow-lg py-4 px-8">
                            <div class="flex justify-between">
                                <div class="text-base font-bold mr-2">أرباح يمكن سحبها</div>
                                <div class="w-12 h-12 bg-blue-100 rounded-full flex justify-center items-center">
                                    <i class="las la-chart-pie text-blue-500 text-3xl"></i>
                                </div>
                            </div>
                            <div class="text-5xl -mt-4 text-curious-blue">$5487</div>
                        </div>
                    </div>
                    <div class="w-full mt-6">
                        <h2 class="text-2xl mb-4">التقويم</h2>
                        <div id="calendar"></div>
                    </div>
                </div>
            </div>
            </div>
@endsection
   
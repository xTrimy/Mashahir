@extends('layouts.dashboard')
@section('title')
تعديل الملف | لوحة التحكم
@endsection
@section('content')
        <div class="px-2 lg:pr-12 lg:pl-24 py-12 mt-8 w-full overflow-x-hidden">
            <h1 class="text-3xl lg:text-5xl font-extrabold mb-8">إدارة الملف </h1>
            
            <div class="w-full mt-8 flex">
                <div class="w-60">
                    <div class="w-full bg-white shadow-md rounded text-lg">
                        <div class="w-full py-6 px-8 font-bold text-curious-blue border-b">
                            <i class="fas fa-pen ml-4 text-2xl"></i>
                            <span>تعديل الملف</span>
                        </div>
                        <div class="w-full py-6 px-8 text-gray-400 border-b">
                            <i class="fas fa-shopping-cart ml-4 text-2xl"></i>
                            <span>تعديل الملف</span>
                        </div>
                        <div class="w-full py-6 px-8 text-gray-400 border-b">
                            <i class="fas fa-calendar-alt ml-4 text-2xl"></i>
                            <span>التقويم</span>
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
                <div class="lg:mr-8 flex-1 bg-white shadow-lg rounded-md py-8 px-12">
                    <div class="flex items-center">
                        <div class="relative cursor-pointer">
                            <div class="w-36 h-36 bg-blue-300 rounded-full overflow-hidden relative">
                                <img src="{{ asset('image/placeholders/face-2.jpg') }}" class="w-full h-full object-cover object-center" alt="">
                            </div>
                            <div class="absolute bottom-0 left-0 transform border-2 border-white w-10 h-10 bg-curious-blue rounded-full
                            flex justify-center items-center text-white text-sm">
                                <i class="fas fa-pen"></i>
                            </div>
                        </div>
                        
                        <div class="mr-8 text-4xl">
                            {{ Auth::user()->name }}
                        </div>
                    </div>
                    <form method="POST" class="mt-8">
                        @csrf
                        <label >
                            <div class="text-lg">الأسم</div>
                            <input type="text" class="form-input w-full border border-curious-blue  mt-2 rounded mb-4" value="{{ Auth::user()->name }}">
                        </label>
                        <label >
                            <div class="text-lg">أسم المستخدم</div>
                            <input type="text" class="form-input w-full border border-curious-blue  mt-2 rounded mb-2" value="{{ Auth::user()->username }}">
                        </label>
                        <div class="text-base font-bold text-gray-400">
                            قم بتعديل هذا الأسم ليظهر في رابط الملف، مثال 
                            <span class="mr-1">mashhour.net/<span id="username-link">AliAbdallah</span> </span>
                        </div>
                        <hr class="mt-8">
                        <h2 class="text-xl font-bold mt-4 text-gray-600 mb-8">
                            وسائل التواصل
                        </h2>
                        <div class="flex mb-2">
                            <div class="w-18 py-2 px-6 bg-curious-blue relative text-white rounded">
                                <i class="fab fa-twitter text-xl"></i>
                                <div class="absolute top-1/2 transform -translate-y-1/2 right-2">
                                    <i class="fas fa-caret-down"></i>
                                </div>
                            </div>
                            <input type="text" class="form-input w-full border border-curious-blue rounded mr-2">
                        </div>
                        <div class="flex mb-2">
                            <div class="w-18 py-2 px-6 bg-curious-blue relative text-white rounded">
                                <i class="fab fa-instagram text-xl"></i>
                                <div class="absolute top-1/2 transform -translate-y-1/2 right-2">
                                    <i class="fas fa-caret-down"></i>
                                </div>
                            </div>
                            <input type="text" class="form-input w-full border border-curious-blue rounded mr-2">
                        </div>
                        <div class="flex mb-2">
                            <div class="w-18 py-2 px-6 bg-blue-300 relative text-white rounded">
                                <i class="fas fa-plus text-xl"></i>
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
   
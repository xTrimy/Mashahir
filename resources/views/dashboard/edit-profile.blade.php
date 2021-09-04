@extends('layouts.dashboard')
@section('title')
تعديل الملف | لوحة التحكم
@endsection
@section('content')
            <h1 class="text-3xl lg:text-5xl font-extrabold mb-8">إدارة الملف </h1>

            <div class="w-full mt-8 flex flex-wrap lg:flex-nowrap">
                <x-profile-settings-navbar page="edit-profile" />
                <div class="lg:mr-8 flex-1 bg-white shadow-lg rounded-md py-8 px-2 lg:px-12">
                    @if($errors->any())
                        {!! implode('', $errors->all('<div class="text-red-500">:message</div>')) !!}
                    @endif
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
                            {{ $profile->name }}
                        </div>
                    </div>
                    <form method="POST" class="mt-8" enctype="multipart/form-data">
                        @csrf
                        <label >
                            <div class="text-lg">الأسم</div>
                            <input type="text" name="name" class="form-input w-full border border-curious-blue  mt-2 rounded mb-4" value="{{ $profile->name }}">
                        </label>
                        <label >
                            <div class="text-lg">أسم المستخدم</div>
                            <input type="text" name="username" class="form-input w-full border border-curious-blue  mt-2 rounded mb-2" value="{{ $profile->username }}">
                        </label>
                        <div class="text-base font-bold text-gray-400">
                            قم بتعديل هذا الأسم ليظهر في رابط الملف، مثال
                            <span class="mr-1">mashhour.net/<span id="username-link">AliAbdallah</span> </span>
                        </div>
                        <hr class="mt-8">
                        <h2 class="text-xl font-bold mt-4 text-gray-600 mb-8">
                             معلومات إضافية
                        </h2>
                        <label >
                            <div class="text-lg">البلد</div>
                            <input type="text" name="location" class="form-input w-full border border-curious-blue  mt-2 rounded mb-2" value="{{ $profile->user_info->location ?? ""}}">
                        </label>
                        <label >
                            <div class="text-lg">عني</div>
                            <textarea name="description" id="" cols="30" rows="6" class="form-input w-full border border-curious-blue  mt-2 rounded mb-2">{{ $profile->user_info->description ?? ""}}</textarea>
                        </label>
                        <label >
                            <div class="text-lg">عدد المشاهدات</div>
                            <input type="text" name="viewers" class="form-input w-full border border-curious-blue  mt-2 rounded mb-2" value="{{ $profile->user_info->viewers ?? ""}}">
                        </label>
                        <label >
                            <div class="text-lg">ضريبة القيمة المضافة</div>
                            <input type="file" name="vat" class="form-input w-full border border-curious-blue  mt-2 rounded mb-2" >
                        </label>
                        <label >
                            <div class="text-lg">رابط معروف</div>
                            <input type="text" name="maroof_url" class="form-input w-full border border-curious-blue  mt-2 rounded mb-2" value="{{ $profile->user_info->maroof_url ?? ""}}">
                        </label>
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
                        <button class="text-center bg-curious-blue text-white px-8 py-2 text-lg font-semibold cursor-pointer">حفظ</button>
                    </form>
                </div>
            </div>
        </div>
@endsection

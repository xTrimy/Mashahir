@extends('layouts.dashboard')
@section('title')
أضافة عمل جديد  | لوحة التحكم
@endsection
@section('content')
        <div class="px-2 lg:pr-12 lg:pl-24 py-12 mt-8 w-full overflow-x-hidden">
            <h1 class="text-3xl lg:text-5xl font-extrabold mb-8">إدارة الملف </h1>
            
            <div class="w-full mt-8 flex flex-wrap lg:flex-nowrap">
                <x-profile-settings-navbar page="ads" />

                <div class="lg:mr-8 flex-1 h-full ">
                    <div class="flex items-center shadow-lg bg-white px-12 mb-7 rounded-md justify-between">
                        <div class="flex">
                            <a href="{{ route('dashboard.ads.main') }}"><div class="font-bold flex h-20 items-center ml-8 cursor-pointer px-3"> <p> مراجعة عامة  </p></div></a>
                            <a href="{{ route('dashboard.ads.add') }}"><div class="font-bold flex text-curious-blue border-b-4 border-curious-blue h-20 items-center cursor-pointer px-3"> <p> اضافة عمل جديد </p></div></a>
                        </div>
                        <div>
                            <i class="fas fa-ellipsis-h text-3xl text-gray-500 cursor-pointer"></i>
                        </div>
                    </div>
                    <form class="flex items-center py-4 rounded-md" method="POST" enctype="multipart/form-data">
                       
                        @csrf
                        @isset($ad)
                            <input type="hidden" name="ad_id" value="{{ $ad->id }}">
                        @endisset 
                        <div class="flex w-full flex-wrap">
                            @if(Session::has('success'))
                            <div class="w-full py-2 bg-green-200 text-green-500 px-4">
                                {{ Session::get('success') }}
                            </div>
                            @endif
                            <div class="w-full lg:w-auto lg:flex-1 p-3 md:p-4 lg:p-8 bg-white lg:ml-4 mb-4 shadow-lg rounded-md">
                                @if($errors->any())
                                    {!! implode('', $errors->all('<div class="text-red-500">:message</div>')) !!}
                                @endif
                                    <div class="py-8 ">
                                        <p class="mb-2 font-semibold text-gray-800">العنوان</p>
                                        <input required type="text" name="name" class="w-full  border-blue-200 border-2 outline-none p-2 mb-3 rounded-sm" value="{{ old('name') ?? $ad->name ?? "" }}">

                                        <p class="mb-2 font-semibold text-gray-800">التصنيف</p>
                                        <select required name="category" id="" class="w-full  border-blue-200 border-2 outline-none p-2 mb-3 rounded-sm">
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}" {{ (old('category') == $category->id ? "selected":($ad && $ad->category_id == $category->id)?"selected":"") }}>{{ $category->name }}</option>
                                            @endforeach
                                        </select>

                                        <p class="mb-2 font-semibold text-gray-800">وصف العمل</p>
                                        <textarea  name="description" id="" cols="30" rows="6" class="w-full border-blue-200 border-2 outline-none p-2 mb-3 rounded-sm">{{ old('description') ?? $ad->description ?? "" }}</textarea>

                                        <p class="mb-2 font-semibold text-gray-800">تاريخ التنفيذ</p>
                                        <input type="date" required name="date" class="w-full  border-blue-200 border-2 outline-none p-2 mb-3 rounded-sm" value="{{ old('date') ?? $ad->date ?? "" }}">

                                        <p class="mb-2 font-semibold text-gray-800">صورة/فيديو</p>
                                        <input type="file"  name="media" class="w-full  border-blue-200 border-2 outline-none p-2 mb-3 rounded-sm" value="">
                                        @isset($ad)
                                            @if($ad->video)
                                                <video src="{{ asset($ad->video) }}"></video>
                                            @endif
                                            @if($ad->image)
                                                <img src="{{ asset($ad->image) }}" />
                                            @endif
                                        @endisset
                                    </div>
                                    <hr>
                                    <div class="w-full mt-8 flex justify-between">
                                        <button type="submit" class="table px-12 py-2 bg-curious-blue text-white text-lg cursor-pointer"> حفظ  </button>
                                    </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
   
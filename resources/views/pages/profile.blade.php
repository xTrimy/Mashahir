@extends('layouts.profile')

@section('title')
    ملفي
@endsection

@section('profile-nav')
<div class="font-semibold flex  w-full my-4 border-0 border-b pb-2 uppercase border-solid justify-between">
    <div class="flex">
        <div class="text-lg px-4 ">
            <a href="">الخدمات</a>
        </div>
        <div class="text-lg text-center px-4 border-0 border-b-2 border-curious-blue border-solid -mb-2.5 font-bold">
            <a href="">عني</a>
        </div>
        <div class="text-lg px-4 ">
            <a href="">الاعلانات</a>
        </div>
        <div class="text-lg px-4  ">
            <a href="">الأخبار</a>
        </div>
        <div class="text-lg px-4 ">
            <a href="">الوكيل</a>
        </div>
    </div>

    <div class="text-center font-normal bg-curious-blue text-white pl-4 pr-8 py-1 text-lg cursor-pointer  left-0 mr-1">
        مشاركة
        <i class="las la-link text-2xl mr-4"></i>
    </div>
</div>
@endsection

@section('profile-data')
    <div class="bg-white px-12 py-8 border-solid border border-blueGray-light mb-5">
        <div class="text-xl"><b>عن {{$name}}</b></div>

        <p>{{ $user_info->description ?? "N/A"}}</p>
    </div>

@endsection

@section('profile-title')

@endsection

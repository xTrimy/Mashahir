@extends('layouts.profile')

@section('title')
    ملفي
@endsection

@section('profile-nav')
<div class="font-semibold flex  w-full my-4 border-0 border-b pb-2 uppercase border-solid justify-between">
    <div class="flex">
        <div class="text-lg text-center px-4 border-0 border-b-2 border-curious-blue border-solid -mb-2.5 font-bold">
            <a href="">الخدمات</a>
        </div>
        <div class="text-lg px-4 ">
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
    <div class="flex flex-wrap justify-between">
        <div class="bg-white w-3/12 h-72 p-3 border-solid border mb-5 mx-4">
            <div class="w-full h-3/5 md:ml-10">
                <img class="w-full h-full object-cover" src="{{ asset('image/placeholders/face-3.jpg') }}"/>
            </div>
            <div class="text-l text-center my-3"><b>اعلن على تويتر مع حلا الترك</b></div>
            <div class=" bg-curious-blue text-white w-8/12 cursor-pointer m-auto py-2 text-center font-bold">طلب اعلان</div>
        </div>

        <div class="bg-white w-3/12 h-72 p-3 border-solid border mb-5 mx-4">
            <div class="w-full h-3/5 md:ml-10">
                <img class="w-full h-full object-cover" src="{{ asset('image/placeholders/face-3.jpg') }}"/>
            </div>
            <div class="text-l text-center my-3"><b>اعلن على تويتر مع حلا الترك</b></div>
            <div class=" bg-curious-blue text-white w-8/12 cursor-pointer m-auto py-2 text-center font-bold">طلب اعلان</div>
        </div>

        <div class="bg-white w-3/12 h-72 p-3 border-solid border mb-5 mx-4">
            <div class="w-full h-3/5 md:ml-10">
                <img class="w-full h-full object-cover" src="{{ asset('image/placeholders/face-3.jpg') }}"/>
            </div>
            <div class="text-l text-center my-3"><b>اعلن على تويتر مع حلا الترك</b></div>
            <div class=" bg-curious-blue text-white w-8/12 cursor-pointer m-auto py-2 text-center font-bold">طلب اعلان</div>
        </div>

        <div class="bg-white w-3/12 h-72 p-3 border-solid border mb-5 mx-4">
            <div class="w-full h-3/5 md:ml-10">
                <img class="w-full h-full object-cover" src="{{ asset('image/placeholders/face-3.jpg') }}"/>
            </div>
            <div class="text-l text-center my-3"><b>اعلن على تويتر مع حلا الترك</b></div>
            <div class=" bg-curious-blue text-white w-8/12 cursor-pointer m-auto py-2 text-center font-bold">طلب اعلان</div>
        </div>
    </div>
    
    
@endsection

@section('profile-title')
        
@endsection
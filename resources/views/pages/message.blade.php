@extends('layouts.app')

@section('contents')
    <div class="w-full py-12 px-8 bg-white">
        <div class="flex items-center mb-8">
            <div class="w-24 h-24 rounded-full overflow-hidden">
                <img src="{{ asset('image/placeholders/face-1.jpg') }}" class="w-full h-full object-cover object-center" alt="">
            </div>
            <h1 class="text-3xl mr-8">طلب تواصل مع حلا الترك</h1>
        </div>
        <div class="w-full">
            <form method="POST" class="w-full">
                @csrf
                <label>
                    <p class="text-lg mb-2">عنوان الطلب</p>
                    <input type="text" placeholder="أدخل عنوان الرسالة" class="w-full border-2 border-blue-200 bg-blue-50 outline-none focus:ring-1 ring-curious-blue py-2 px-4">
                </label>
                <label>
                    <p class="text-lg mb-2 mt-4">نص الرسالة</p>
                    <textarea placeholder="أدخل نص الرسالة" class="w-full border-2 border-blue-200 bg-blue-50 outline-none focus:ring-1 ring-curious-blue py-2 px-4" name="" id="" cols="30" rows="10"></textarea>
                </label>
                <div class="flex">
                    <div class="table pl-8 pr-2 py-2 border-2 border-curious-blue text-curious-blue hover:bg-curious-blue hover:text-white cursor-pointer ml-2">
                        <span class="ml-6">
                            <i class="las la-paperclip text-xl"></i>
                        </span>
                        <span>أرفق ملف</span>
                    </div>
                    <div class="table pl-8 pr-2 py-2 border-2 border-curious-blue text-curious-blue hover:bg-curious-blue hover:text-white cursor-pointer ml-2">
                        <span class="ml-4">
                            <i class="las la-microphone text-xl"></i>
                        </span>
                        <span>أضف رسالة صوتية</span>
                    </div>
                </div>
                    <button type="submit" class="mt-4 text-2xl text-white py-2 px-24 outline-none bg-curious-blue focus:ring-2 border border-white ring-curious-blue">
                        أرسل
                    </button>
            </form>
        </div>
    </div>
@endsection
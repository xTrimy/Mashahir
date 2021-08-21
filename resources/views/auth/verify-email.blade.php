@extends('layouts.app')

@section('title')
تسجيل الدخول    
@endsection

@section('contents')
    <div class=" bg-white shadow w-full lg:w-3/5 m-auto p-12 py-24">
        <h1 class="text-5xl mb-8 font-bold text-center text-gray-500">
            <i class="las la-check-circle text-green-500"></i>
            تم تسجيل البيانات بنجاح</h1>
        <h2 class="text-2xl font-extrabold text-center">
            برجاء تأكيد البريد الألكتروني الخاص بك من خلال الضغط على الرابط الذي تم ارساله الى بريدك
        </h2>
        <a href="{{ route('verification.send') }}" class=" block text-center text-curious-blue mt-8 underline">
            إرسال رابط آخر
        </a>
    </div>
@endsection
@extends('layouts.app')

@section('title')
تسجيل الدخول    
@endsection

@section('contents')
    <div class=" bg-white shadow w-3/5 m-auto p-5 py-12">
        <h1 class="text-5xl mb-8 font-bold text-center text-curious-blue">تسجيل </h1>
        <form method="POST">
            @csrf
            <input type="hidden" name="type" value="{{ $type->slug }}">
            <p class="mb-2 font-semibold">نوع الحساب<span class="text-red-500">*</span></p>
            <input type="text" readonly class="w-full  border-blue-200 bg-gray-100 cursor-not-allowed border-2 outline-none p-2 mb-3 rounded-sm" name="type" value="{{ $type->name }}">
            <p class="mb-2 font-semibold">الأسم الكامل<span class="text-red-500">*</span></p>
            <input type="text" value="{{ old('name') }}" name="name" class="w-full  border-blue-200 border-2 outline-none p-2 mb-3 rounded-sm">
            @error('name')
            <div class="text-red-500 text-sm mb-8">
                {{ $message }}
            </div>
            @enderror
            <p class="mb-2 font-semibold">اسم المستخدم <span class="text-red-500">*</span></p>
            <input type="text" value="{{ old('username') }}" name="username" class="w-full  border-blue-200 border-2 outline-none p-2 mb-3 rounded-sm">
            @error('username')
            <div class="text-red-500 text-sm mb-8">
                {{ $message }}
            </div>
            @enderror
            <p class="mb-2 font-semibold">البريد الألكتروني<span class="text-red-500">*</span></p>
            <input type="text" value="{{ old('email') }}" name="email" class="w-full  border-blue-200 border-2 outline-none p-2 mb-3 rounded-sm">
            @error('email')
            <div class="text-red-500 text-sm mb-8">
                {{ $message }}
            </div>
            @enderror
            <p class="mb-2 font-semibold">رقم الهاتف<span class="text-red-500">*</span></p>
            <input type="text" value="{{ old('phone') }}" name="phone" class="w-full  border-blue-200 border-2 outline-none p-2 mb-3 rounded-sm">
            @error('phone')
            <div class="text-red-500 text-sm mb-8">
                {{ $message }}
            </div>
            @enderror
            <p class="mb-2 font-semibold">كلمة المرور <span class="text-red-500">*</span></p>
            <input type="password" name="password" class="w-full  border-blue-200 border-2 outline-none p-2 mb-3 rounded-sm">
            @error('password')
            <div class="text-red-500 text-sm mb-8">
                {{ $message }}
            </div>
            @enderror
            <p class="mb-2 font-semibold"> تأكيد كلمة المرور <span class="text-red-500">*</span></p>
            <input type="password" name="password_confirmation" class="w-full  border-blue-200 border-2 outline-none p-2 mb-3 rounded-sm">
            @error('password_confirmation')
            <div class="text-red-500 text-sm mb-8">
                {{ $message }}
            </div>
            @enderror
            <button type="submit" class="w-full bg-curious-blue text-white font-semibold py-3 mt-7 px-3 relative" >
                التالي <i class="las text-3xl la-arrow-left absolute top-1/2 left-4 transform -translate-y-1/2"></i>
            </button>
        </form>

        <hr class="my-10">
        <p class="text-center mb-5">بالنقر على التالي، فإنك تقر بأنك قد قرأت وقبلت <a href="" class="text-curious-blue">شروط الخدمة وسياسة الخصوصية.</a></p>
    </div>
@endsection
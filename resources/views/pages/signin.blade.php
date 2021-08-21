@extends('layouts.app')

@section('title')
تسجيل الدخول    
@endsection

@section('contents')
    <div class=" bg-white shadow w-3/5 m-auto p-5 py-12">
        <h1 class="text-5xl mb-8 font-bold text-center text-curious-blue">تسجيل الدخول</h1>
        <form method="POST">
            @csrf
            @error('credentials')
                <div class="text-red-500">
                    {{ $message }}
                </div>
            @enderror
            <p class="mb-2 font-semibold">اسم المستخدم او البريد الألكتروني</p>
            <input type="text" name="username" class="w-full  border-blue-200 border-2 outline-none p-2 mb-3 rounded-sm">

            <p class="mb-2 font-semibold">كلمة المرور</p>
            <input type="password" name="password" class="w-full  border-blue-200 border-2 outline-none p-2 mb-3 rounded-sm">

            <button type="submit" class="w-full bg-curious-blue text-white font-semibold py-3 mt-7 px-3 relative" >
                التالي <i class="las text-3xl la-arrow-left absolute top-1/2 left-4 transform -translate-y-1/2"></i>
            </button>
        </form>

        <p class="text-center mt-4">او قم بالتسجيل من خلال موقعنا من <a href="" class="text-curious-blue">هنا</a></p>
        <hr class="my-10">
        <p class="text-center mb-5">بالنقر على التالي، فإنك تقر بأنك قد قرأت وقبلت <a href="" class="text-curious-blue">شروط الخدمة وسياسة الخصوصية.</a></p>
    </div>
@endsection
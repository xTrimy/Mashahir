@extends('layouts.app')

@section('title')
    تسجيل مستخدم جديد
@endsection

@section('contents')
    <div class=" w-3/5 bg-white shadow p-4 m-auto">
        <h1 class="text-3xl font-bold text-center text-blue-600">تسجيل مستخدم جديد</h1>
        <p class="mb-3">أختر نوع المستخدم الذي تريد تسجيله</p>
        <div class="flex items-center flex-wrap justify-between">
            <div class="flex border-2 rounded-lg border-blue-500 p-2 w-2/5 mb-5">
                <div class="flex w-3/5">
                    <input type="radio" name="type" class=" rounded-lg border-blue-500">
                    مشهور     
                </div>
                <div class="bg-blue-500 rounded-lg py-2 px-6 text-white mx-4 flex-1 text-center cursor-pointer">  متابعة  <i class="fas fa-arrow-left"></i></div>
            </div>
            <div class="flex border-2 rounded-lg border-blue-500 p-2 w-2/5 mb-5">
                <div class="flex w-3/5">
                    <input type="radio" name="type" class=" rounded-lg border-blue-500">
                        وكيل اعلاني     
                </div>
                <div class="bg-blue-500 rounded-lg py-2 px-6 text-white mx-4 flex-1 text-center cursor-pointer">متابعة  <i class="fas fa-arrow-left"></i></div>
            </div>
            <div class="flex border-2 rounded-lg border-blue-500 p-2 w-2/5 mb-5">
                <div class="flex w-3/5">
                    <input type="radio" name="type" class=" rounded-lg border-blue-500">
                    عميل    
                </div>
                <div class="bg-blue-500 rounded-lg py-2 px-6 text-white mx-4 flex-1 text-center cursor-pointer">متابعة  <i class="fas fa-arrow-left"></i></div>
            </div>
            <div class="flex border-2 rounded-lg border-gray-400 p-2 w-2/5 mb-5">
                <div class="flex w-3/5">
                    <input type="radio" name="type" class=" rounded-lg border-grey-500">
                    مسوق الكتروني    
                </div>
                <div class="bg-gray-400 bg rounded-lg py-2 px-6 text-white mx-4 flex-1 text-center cursor-pointer">متابعة  <i class="fas fa-arrow-left"></i></div>
            </div>
        </div>
    </div>
@endsection

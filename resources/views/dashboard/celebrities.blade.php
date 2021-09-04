@extends('layouts.dashboard')
@section('title')
المشاهير | لوحة التحكم
@endsection
@section('content')
            <x-dashboard-nav-bar page="celebrities" ></x-dashboard-nav-bar>
            <div class="w-full mt-8">
                <div class="items-center justify-center sm:justify-between mt-4 w-full flex py-4 px-8 rounded-md shadow-lg bg-white flex-wrap sm:flex-nowrap">
                    <div class="flex items-center flex-wrap w-full sm:w-auto justify-center sm:justify-start">
                        <div class="w-12 h-12 rounded-full bg-black sm:ml-4 overflow-hidden">
                            <img src="{{ asset('image/placeholders/face-2.jpg') }}" class="w-full h-full object-center object-cover" alt="">
                        </div>
                        <div class="flex flex-col h-full justify-between mt-4 sm:mt-0 w-full sm:w-auto text-center sm:text-right">
                            <h1 class="text-xl whitespace-wrap">
                                حلا الترك
                            </h1>
                        </div>
                    </div>
                    <div class="py-1 px-8 text-sm bg-blue-50 text-blue-600 rounded-full mt-2">إدارة</div>
                </div>
            </div>
            </div>
@endsection

@extends('layouts.app')

@section('title')
    وكلاء الأعلانات
@endsection

@section('contents')
<h1 class="text-4xl font-bold border-r-8 py-2 pr-4 border-curious-blue"> وكلاء الأعلانات</h1>

<div class="w-full flex my-12 ">
    <div class="flex-1 flex flex-wrap justify-around">
            @forelse ($agencies as $agency)
            <div class="w-72 px-4 py-6 bg-white mb-8">
                <a href="{{ route('profile',$agency->username) }}"><div class="w-full h-48 bg-black">
                    <img src="{{ asset($agency->image ?? "avatars/images/default.png") }}" class="w-full h-full object-cover object-center" alt="">
                </div></a>
                <div class="text-center">
                    <p class="text-lg mt-4">{{ $agency->name }}</p>
                    @if (Auth::check() && Auth::user()->hasRole('celebrity'))
                        <a href="{{ route('agency-request',$agency->id) }}"><div class="table py-2 px-12 bg-curious-blue mx-auto mt-4 text-white">طلب توكيل</div></a>
                    @endif
                </div>
            </div>
            @empty
            <div>
                <div class="text-lg text-gray-500">لا يوجد وكلاء في الوقت الحالي
                    <span>-</span>
                    <span class="text-curious-blue underline"><a href="{{ route('home') }}">العودة للرئيسية</a></span>
                </div>

            </div>
            @endforelse
            
            <div class="w-72 p-8 mb-8"></div>
            <div class="w-72 p-8 mb-8"></div>
    </div>
</div>
@endsection
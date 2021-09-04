@extends('layouts.dashboard')
@section('title')
الأشعارات الهامة  | لوحة التحكم
@endsection
@section('content')
            <h1 class="text-3xl lg:text-5xl font-extrabold mb-8">إدارة الملف </h1>
            <div class="hidden bg-curious-blue bg-curious-green bg-curious-red bg-curious-yellow"></div>
            <div class="w-full mt-8 flex flex-wrap lg:flex-nowrap">
                <x-profile-settings-navbar page="notifications" />
                <div class="lg:mr-8 flex-1 h-full ">
                    @foreach ($notifications as $notification)
                        <div class="items-center shadow-lg bg-white px-4 md:px-8 lg:px-12 py-5 mb-7 rounded-sm justify-between border-r-12 border-curious-{{$notification['notification']['color']}}">
                            <div class="flex justify-between flex-wrap">
                                <div>
                                    <p class="mb-2 font-semibold text-gray-800">{{$notification['notification']['subject']}}</p>
                                    <div class="flex items-center text-gray-400">
                                        <i class="fas fa-clock ml-2"></i>
                                        {{$notification->created_at->diffForHumans()}}
                                    </div>
                                </div>
                                <div>
                                <div class="px-16 py-2 bg-curious-blue text-white text-lg float-left cursor-pointer"> موافق </div>

                                </div>
                            </div>
                            <hr class="my-4">
                            <div class="text-gray-400">
                                    {{$notification['notification']['message']}}
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </div>
@endsection

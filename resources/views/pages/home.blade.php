@extends('layouts.app')
@section('title')
    الرئيسية
@endsection
@section('before-contents')
<div class="w-full  mb-12 ">
    <a href="#"><img src="{{ asset('image/placeholders/banner.jpg') }}" class="w-full h-full object-contain object-top" alt=""></a>
</div>
@endsection
@section('contents')

    <div class="w-full  py-8">
        <div class="w-full grid grid-cols-1 lg:grid-cols-2 gap-12">
            <div class="w-full bg-white pb-8">
                <a href="/celebrities/">
                    <div class="w-full h-64 bg-black mb-8 relative">
                        <div class="z-10 absolute top-0 left-0 w-full h-full flex justify-center items-center text-white text-3xl">
                            اعلانات المشاهير
                        </div>
                        <div class="absolute top-0 left-0 bg-gray-600 opacity-60 w-full h-full"></div>
                        <img src="{{ asset('image/placeholders/photo-1519944518895-f08a12d6dfd5.jpg') }}" class="w-full h-full object-cover object-center" alt="">
                    </div>
                </a>
                <div class="w-full px-8 grid grid-cols-1 md:grid-cols-2 gap-8">
                    @foreach ($celebrities as $user)
                        <div class="w-full">
                            <div class="w-full h-56 bg-black">
                                <img src="{{ asset($user->image ?? "avatars/images/default.png") }}" class="w-full h-full object-center object-cover" alt="">
                            </div>
                            <div class="text-center">
                                <p class="text-xl mt-4">{{ $user->name }}</p>
                                <a href="{{ route('profile.services',$user->username) }}"><div class="table py-2 px-12 bg-curious-blue mx-auto mt-4 text-white">طلب أعلان</div></a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <a href="{{ route('search') }}?type[]=celebrity"><div class="table py-2 px-12 border-curious-blue border-2 mt-8 mx-auto text-curious-blue hover:bg-curious-blue hover:text-white transition-colors">
                    عرض الجميع</div></a>
            </div>
            <div class="w-full bg-white pb-8">
                <div class="w-full h-64 bg-black mb-8 relative">
                    <div class="z-10 absolute top-0 left-0 w-full h-full flex justify-center items-center text-white text-3xl">
                        تسويق الكتروني
                    </div>
                    <div class="absolute top-0 left-0 bg-gray-600 opacity-60 w-full h-full"></div>
                    <img src="{{ asset('image/placeholders/r0_0_4996_3286_w1200_h678_fmax.jpg') }}" class="w-full h-full object-cover object-center" alt="">
                </div>
                <div class="w-full px-8 grid grid-cols-1 md:grid-cols-2 gap-8">
                    @foreach ($digital_marketers as $user)
                        <div class="w-full">
                            <div class="w-full h-56 bg-black">
                                <img src="{{ asset($user->image ?? "avatars/images/default.png") }} " class="w-full h-full object-center object-cover" alt="">
                            </div>
                            <div class="text-center">
                                <p class="text-xl mt-4">{{ $user->name }}</p>
                                <a href="{{ route('profile.services',$user->username) }}"><div class="table py-2 px-12 bg-curious-blue mx-auto mt-4 text-white">طلب أعلان</div></a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <a href="{{ route('search') }}?type[]=digital+marketer"><div class="table py-2 px-12 border-curious-blue border-2 mt-8 mx-auto text-curious-blue hover:bg-curious-blue hover:text-white transition-colors">
                    عرض الجميع</div></a>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('before-contents')
<div class="w-full py-12 bg-white px-4 md:px-8 lg:px-12 xl:px-20 2xl:px-52">
    <div class="flex justify-between flex-wrap">
        <div class="flex items-center mb-8 ">
            <div class="hidden md:block w-20 h-20 bg-black rounded-full ml-4 overflow-hidden">
                <img src="{{ asset($service->user->image ?? "avatars/images/default.png" ) }}" class="w-full h-full object-center object-cover" alt="">
            </div>
            <div class="flex flex-col justify-between h-full">
                <h1 class="text-2xl mb-4">
                    {{ $service->name }}
                </h1>
                <div class="flex text-gray-400 text-sm flex-wrap">
                    <p class="ml-4 w-full sm:w-auto">
                        <i class="fas fa-user"></i>
                        <span class="mr-1">{{ $service->user->name }}</span>
                    </p>
                    <p class="ml-4 w-full sm:w-auto">
                        <i class="fas fa-cubes"></i>
                        <a href="#"><span class="mr-1">{{ $service->category->name }}</span></a>
                    </p>
                    <p class="ml-4 w-full sm:w-auto">
                        <i class="fas fa-clock"></i>
                        <span class="mr-1">اخر تفاعل:  {{ $time_ago->diffForHumans() }}</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="flex h-full">
            <div class=" bg-curious-blue px-8 py-2 text-white flex items-center ">
                <span>أشتري الخدمة</span>
                <i class="fas fa-shopping-cart mr-4"></i>
            </div>
        </div>

    </div>
    
</div>
@endsection

@section('contents')
    <div class="flex w-full xl:px-12 2xl:px-52 flex-wrap">
        <div class="w-full lg:w-auto lg:flex-1 p-3 md:p-4 lg:p-8 bg-white lg:ml-4 mb-4">
            <div class="w-full h-96">
                <div class="w-full h-full">
                    <img src="{{ asset('image/placeholders/banner.jpg') }}" class="object-contain object-center w-full h-full" alt="">
                </div>
            </div>
                <div class="py-8 ">
                    <p>
                        {{ $service->description }}
                    </p>
                </div>
                <hr>
                <div class="w-full mt-8">
                    <h1 class="text-xl font-bold text-gray-600">
                        أضافة تطويرات للخدمة
                    </h1>
                    <ul class="mt-4">
                        @forelse ($service->upgrades as $upgrade)
                            <li class="mb-4">
                                <div class="flex sm:justify-between flex-wrap">
                                    <label class="">
                                        <input type="checkbox" class="form-checkbox border-curious-blue border-2 text-lg text-curious-blue rounded">
                                        <span class="mr-4">{{ $upgrade->title }}</span>
                                    </label>
                                    <div class="">
                                        <div class="text-lg mr-2 sm:mr-0">+{{ $upgrade->price }}$</div>
                                        <div class="text-lg mr-2 sm:mr-0">+{{ $upgrade->duration }} أيام</div>

                                    </div>
                                </div>
                            </li>
                        @empty
                            <p class="text-sm text-gray-400">لا يوجد تطويرات للخدمة في الوقت الحالي.</p>
                        @endforelse
                        
                    </ul>
                </div>
                <hr>
                <div class="w-full mt-8">
                    <div class="table mx-auto px-12 py-4 bg-curious-blue text-white text-lg"> طلب الخدمة </div>
                </div>
        </div>
        <div class="w-full lg:w-64 mb-4 text-curious-blue-900">
            <div class="w-full bg-white py-8">
                <h2 class="text-xl text-center mb-8">تقييم الخدمة</h2>
                <hr>
                <div class="px-8 mt-8 font-bold">
                    <div class="relative group flex w-full justify-center flex-row-reverse text-2xl text-yellow-400">
                        <div class="absolute opacity-60 transition-all text-sm hidden group-hover:block -right-4 px-4 py-1 bg-black text-white">
                            3.5
                        </div>
                        <i class="las la-star"></i>
                        <i class="las la-star"></i>
                        <i class="las la-star"></i>
                        <i class="las la-star-half-alt"></i>
                        <i class="lar la-star"></i>
                    </div>
                    <div class="flex justify-center mt-4 ">
                        <div class="ml-4">
                            <i class="fas fa-thumbs-up"></i>
                            <span class="">60%</span>
                        </div>
                        <div>
                            <i class="fas fa-thumbs-down"></i>
                            <span class="">40%</span>
                        </div>
                    </div>
                    <div class="w-full mt-8 text-center lg:text-right text-sm">
                        <div class="mb-6">
                            <i class="fas fa-share ml-2"></i>
                            <span>معدل سرعة الرد 48 دقيقة</span>
                        </div>
                        <div class="mb-6">
                            <i class="fas fa-shopping-cart ml-2"></i>
                            <span>54 اشتروا هذه الخدمة</span>
                        </div>
                        <div class="mb-6">
                            <i class="fas fa-suitcase ml-2"></i>
                            <span>3 طلبات جاري تنفيذها</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
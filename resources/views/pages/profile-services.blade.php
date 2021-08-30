@extends('layouts.profile')

@section('title')
    ملف {{$profile->name}}
@endsection

@section('profile-nav')
<div class="font-semibold flex  w-full my-4 border-0 border-b pb-2 uppercase border-solid justify-between">
    <x-profile-nav-bar page="services" :profile="$profile" />
</div>
@endsection

@section('profile-data')
    <div class="flex flex-wrap justify-between">
        @if(!$profile->services->isEmpty())
            @foreach ($profile->services as $service )
                <div class="bg-white w-3/12 h-72 p-3 border-solid border mb-5 mx-4">
                    <div class="w-full h-3/5 md:ml-10">
                        <img class="w-full h-full object-cover" src="{{ asset('image/placeholders/face-3.jpg') }}"/>
                    </div>
                    <div class="text-l text-center my-3"><b>{{$service['name']}}</b></div>
                    <a href="/service/{{$service['id']}}">
                        <div class=" bg-curious-blue text-white w-8/12 cursor-pointer m-auto py-2 text-center font-bold">طلب اعلان</div>
                    </a>
                </div>
            @endforeach
        @else
            لا يوجد عند {{$profile->name}} خدمات حاليًا
        @endif
    </div>


@endsection

@section('profile-title')

@endsection

@extends('layouts.profile')

@section('title')
    ملف {{$profile->name}}
@endsection

@section('profile-nav')
<div class="font-semibold flex  w-full my-4 border-0 border-b pb-2 uppercase border-solid justify-between">
    <x-profile-nav-bar page="agent" :profile="$profile" />
</div>
@endsection

@section('profile-data')
    <div class="bg-white p-2 border-solid border border-blueGray-light mb-5">
        @if($profile->agency)
            <div class="w-full p-1 md-p-4 mb-4 bg-white flex items-center justify-between">
                <div class="flex items-center">
                    <div class="w-24 h-24 rounded-full mr-2 md:ml-10">
                        <img class="w-full h-full rounded-full object-cover" src="{{ $profile->agency['agent']['image'] ?? asset('avatars/images/default.png') }}"/>
                    </div>
                    <div>
                        <b class="text-sm md:text-xl">{{$profile->agency['agent']['name']}}</b>
                    </div>
                </div>

                <a href="{{route('profile', $profile->agency['agent']['username'] )}}"><button class="w-36 md:w-52 px-1 md:px-10 font-bold py-5 md:py-3 md:text-sm border-none bg-curious-blue text-white cursor-pointer">
                    عرض الملف الشخصي
                </button></a>
            </div>
        @else
            ليس لديه اي وكيل
        @endif
    </div>
@endsection

@section('profile-title')

@endsection

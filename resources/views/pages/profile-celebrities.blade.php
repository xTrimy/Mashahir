@extends('layouts.profile')

@section('title')
    ملف {{$profile->name}}
@endsection

@section('profile-nav')
<div class="font-semibold flex  w-full my-4 border-0 border-b pb-2 uppercase border-solid justify-between">
    <x-profile-nav-bar page="celebrities" :profile="$profile" />
</div>
@endsection

@section('profile-data')
    <div class="bg-white p-2 border-solid border border-blueGray-light mb-5">
        @if($profile->celebrities)
            @foreach ($profile->celebrities as $celebrity)
                <div class="w-full p-1 md-p-4 mb-4 bg-white flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="w-24 h-24 rounded-full mr-2 md:ml-10">
                            <img class="w-full h-full rounded-full object-cover" src="{{ $celebrity['celebrity']['image'] ?? asset('avatars/images/default.png') }}"/>
                        </div>
                        <div>
                            <b class="text-sm md:text-xl">{{$celebrity['celebrity']['name']}}</b>
                        </div>
                    </div>

                    <a href="{{route('profile', $celebrity['celebrity']['username'] )}}"><button class="w-36 md:w-52 px-1 md:px-10 font-bold py-5 md:py-3 md:text-sm border-none bg-curious-blue text-white cursor-pointer">
                        عرض الملف الشخصي
                    </button></a>
                </div>
            @endforeach
        @else
            ليس لديه اي مشهور
        @endif
    </div>
@endsection

@section('profile-title')

@endsection

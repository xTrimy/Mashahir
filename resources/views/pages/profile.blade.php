@extends('layouts.profile')

@section('title')
    ملفي
@endsection

@section('profile-nav')
<div class="font-semibold flex  w-full my-4 border-0 border-b pb-2 uppercase border-solid justify-between">
    <x-profile-nav-bar page="main" :profile="$profile" />
</div>
@endsection

@section('profile-data')
    <div class="bg-white px-12 py-8 border-solid border border-blueGray-light mb-5">
        <div class="text-xl"><b>عن {{$profile->name}}</b></div>

        <p>{{ $profile->user_info['description'] ?? "N/A"}}</p>
    </div>

@endsection

@section('profile-title')

@endsection

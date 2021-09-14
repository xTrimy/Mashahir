@extends('layouts.dashboard')
@section('page')
tasks
@endsection
@section('title')
 المهام | لوحة التحكم
@endsection
@section('content')
            <x-dashboard-nav-bar page="tasks"/>

            <div class="w-full mt-8">
                @if($tasks)
                    @foreach ($tasks as $task)
                        <a href="/messages/{{$task->ticket->id}}">
                            <div class="mt-4w-full flex py-4 px-8 border-r-16 border-rose-600 rounded-lg shadow-md bg-white flex-wrap md:flex-nowrap">
                                <div class="w-20 h-20 rounded-full bg-black ml-4 overflow-hidden">
                                    <img src="{{ asset('image/placeholders/face-2.jpg') }}" class="w-full h-full object-center object-cover" alt="">
                                </div>
                                <div class="flex flex-col h-full justify-between mt-4 md:mt-0 w-full md:w-auto">
                                    <h1 class="text-2xl whitespace-wrap">
                                        {{$task->service->name}}
                                    </h1>
                                    <div class="flex text-gray-400 text-base md:text-lg flex-wrap">
                                        <span class="ml-6 mt-4">
                                            <i class="fas fa-user"></i>
                                            {{$task->service->user->username}}
                                        </span>
                                        <span class="ml-6 mt-4">
                                            <i class="fas fa-dollar-sign"></i>
                                            450
                                        </span>
                                        <span class="ml-6 mt-4 text-rose-600">
                                            <i class="fas fa-info-circle"></i>
                                            جاري التنفيذ
                                        </span>
                                        <span class="ml-6 mt-4">
                                            <i class="fas fa-clock"></i>
                                            {{$task->created_at->diffForHumans()}}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                @else
                    لا يوجد مهام حاليًا
                @endif
            </div>
            </div>
@endsection

@extends('layouts.app')

@section('before-contents')
<div class="w-full py-12 bg-white px-4 md:px-8 lg:px-12 xl:px-20 2xl:px-52">
    <div class="flex justify-between flex-wrap">
        <div class="flex items-center mb-8 ">
            <div class="hidden md:block w-20 h-20 bg-black rounded-full ml-4 overflow-hidden">
                <img src="{{ asset($nextUser->image ?? 'avatars/images/default.png') }} " class="w-full h-full object-center object-cover" alt="">
            </div>
            <div class="flex flex-col justify-between h-full">
                <h1 class="text-2xl mb-4">
                    {{$ticket->subject}}
                </h1>
                <div class="flex text-gray-400 text-sm">
                    <p class="ml-4">
                        <i class="fas fa-user"></i>
                        <span class="mr-1">{{$nextUser->name}}</span>
                    </p>
                    <p class="ml-4">
                        <i class="fas fa-clock"></i>
                        <span class="mr-1">اخر تفاعل: {{$messages[count($messages) - 1]->created_at->diffForHumans()}}</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="flex h-full">
            <div class=" bg-curious-blue px-8 py-2 text-white flex items-center ">
                <span>أبلاغ عن مشكلة</span>
                <i class="las la-life-ring text-2xl mr-2"></i>
            </div>
        </div>

    </div>

</div>
@endsection

@section('contents')
<div class="w-full bg-white">
    @foreach ($messages as  $message)
        <div class="w-full px-8 py-12">
            <div class="flex">
                <div class="w-16 h-16 bg-black rounded-full overflow-hidden">
                    <img src="{{ asset($message->user->image ?? 'avatars/images/default.png') }}" class="w-full h-full object-cover object-center" alt="">
                </div>
                <div class="flex flex-col justify-around mr-4">
                    <h2 class="text-xl">{{$message->user->name}} </h2>
                    <span class="text-sm text-gray-400">
                        <i class="fas fa-clock ml-1"></i>
                        <span>{{$message->created_at->diffForHumans()}}</span>
                    </span>
                </div>
            </div>
            <div class="text-lg mt-4">
                {{$message->message}}
            </div>
        </div>
    <hr>

    @endforeach
    <div class="w-full py-12 px-8">
        <form method="POST" class="w-full">
            @csrf
            <input hidden value="{{$date}}">
            <label>
                <textarea class="w-full border-2 border-blue-200 bg-blue-50 outline-none focus:ring-1 ring-curious-blue py-2 px-4" name="" id="" cols="30" rows="10"></textarea>
            </label>
            <div class="flex">
                <div class="table pl-8 pr-2 py-2 border-2 border-curious-blue text-curious-blue hover:bg-curious-blue hover:text-white cursor-pointer ml-2">
                    <span class="ml-6">
                        <i class="las la-paperclip text-xl"></i>
                    </span>
                    <span>أرفق ملف</span>
                </div>
                <div class="table pl-8 pr-2 py-2 border-2 border-curious-blue text-curious-blue hover:bg-curious-blue hover:text-white cursor-pointer ml-2">
                    <span class="ml-4">
                        <i class="las la-microphone text-xl"></i>
                    </span>
                    <span>أضف رسالة صوتية</span>
                </div>
            </div>
                <button type="submit" class="mt-4 text-2xl text-white py-2 px-24 outline-none bg-curious-blue focus:ring-2 border border-white ring-curious-blue">
                    أرسل
                </button>
        </form>
    </div>
</div>
@endsection

@extends('layouts.dashboard')
@section('page')
requests
@endsection
@section('title')
المشاهير | لوحة التحكم
@endsection
@section('content')
            <x-dashboard-nav-bar page="requests"/>
            <div class="flex items-center shadow-lg bg-white px-12 my-7 rounded-md justify-between">
                <div class="flex">
                    <div class="flex">
                        <div class="flex ml-8 items-center my-4">
                            <input type="checkbox" name="color" id="" class="form-checkbox rounded border-2 border-curious-blue text-curious-blue ml-2">
                            <p class="text-black">بانتظار الموافقة</p>
                        </div>

                        <div class="flex ml-8 items-center my-4">
                            <input type="checkbox" name="color" id="" class="form-checkbox rounded border-2 border-curious-blue text-curious-blue ml-2">
                            <p class="text-black">جاري تنفيذها</p>
                        </div>

                        <div class="flex ml-8 items-center my-4">
                            <input type="checkbox" name="color" id="" class="form-checkbox rounded border-2 border-curious-blue text-curious-blue ml-2">
                            <p class="text-black">بانتظار الاستلام</p>
                        </div>

                        <div class="flex ml-8 items-center my-4">
                            <input type="checkbox" name="color" id="" class="form-checkbox rounded border-2 border-curious-blue text-curious-blue ml-2">
                            <p class="text-black">تم تسليمها</p>
                        </div>

                        <div class="flex ml-8 items-center my-4">
                            <input type="checkbox" name="color" id="" class="form-checkbox rounded border-2 border-curious-blue text-curious-blue ml-2">
                            <p class="text-black">ملغية</p>
                        </div>
                    </div>
                </div>
                <div>
                    <i class="fas fa-ellipsis-h text-3xl text-gray-500 cursor-pointer"></i>
                </div>
            </div>

            @foreach ($requests as $request)
            <a href="{{ route('ticket',$request->ticket->id) }}"><div class="w-full mt-8 bg-white shadow-lg px-12 py-4 rounded-md border-r-12 border-pink-700">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">

                    <div class="w-20 h-20 mr-2 md:ml-10 relative">
                        <img class="w-full h-full object-cover rounded-full" src="{{ asset('image/placeholders/face-3.jpg') }}"/>
                        <img class="w-3/6 h-2/4 object-cover rounded-full absolute bottom-0 right-0" src="{{ asset('image/placeholders/face-4.jpg') }}"/>
                    </div>
                    <div>
                        <b class="text-sm md:text-xl font-medium">{{ $request->ticket->subject ?? '' }}</b>
                        <div class="flex">
                            <p class="mt-0 md:mt-2 text-xs md:text-base text-gray-400"> <i class="fas fa-user"></i> {{ $request->ticket->sender->username ?? '' }} </p>
                            {{-- <p class="mt-0 md:mt-2 text-xs md:text-base text-gray-400 mr-5"> <i class="fas fa-user ml-1"></i> Ibrahim Ashraf </p> --}}
                            <p class="mt-0 md:mt-2 text-xs md:text-base text-gray-400 mr-5"> <i class="fas fa-dollar-sign ml-1"></i> {{ $request->price }}</p>
                            <p class="mt-0 md:mt-2 text-xs md:text-base mr-5
                        @if($request->agreed_at)
                         text-rose-500
                         @elseif($request->declined_at)
                         text-black
                         @else
                         text-yellow-500
                        @endif
                         ">
                            <i class="fas fa-info-circle"></i>
                            <span class="mr-1">
                                @if($request->agreed_at)
                                جاري التنفيذ
                                @elseif($request->declined_at)
                                تم رفض الطلب
                                @else
                                بأنتظار الموافقة
                                @endif
                            </span>
                        </p>
                            <p class="mt-0 md:mt-2 text-xs md:text-base text-gray-400 mr-5"> <i class="fas fa-clock ml-1"></i> {{ $request->created_at->diffForHumans() }}</p>
                        </div>
                    </div>
                    </div>
                    @if($request->agreed_at == null && $request->declined_at == null && $user->hasPermissionTo('manage all celebrities'))
                    <div class="flex items-center">
                        <a href="{{ route('dashboard.accept-request',$request->id) }}"><div class="py-2 px-4 border-2 border-curious-blue text-curious-blue hover:bg-curious-blue hover:text-white transition-colors">
                            قبول الطلب
                        </div></a>
                        <a href="{{ route('dashboard.decline-request',$request->id) }}"><div class="mr-2 py-2 px-4 border-2 border-red-600 text-red-600 hover:bg-red-600 hover:text-white transition-colors">
                            رفض الطلب
                        </div></a>
                    </div>
                    @endif
                </div>
            </div></a>
            @endforeach

        </div>
@endsection

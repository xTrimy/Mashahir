@extends('layouts.app')

@section('title')
    ملفي
@endsection
@section('before-contents')

<div class="group w-full h-80  bg-black relative">
    @if($errors->any())
    <div class="z-20 w-full absolute top-0 py-2 px-8 bg-red-200 text-red-500">
        {!! implode('', $errors->all('<p>:message</p>')) !!}
    </div>
    @endif

    @if($user->id == $profile->id)
        <form method="POST" id="form-cover" action="{{ route('change-cover',$profile->username) }}" enctype='multipart/form-data'>
            @csrf
            <label class="opacity-70 lg:opacity-0 group-hover:opacity-75 w-auto h-auto px-4 md:px-12 py-2 lg:w-full lg:h-full absolute top-0 left-0 bg-black flex transition-all cursor-pointer justify-center items-center z-10 text-white text-base md:text-lg lg:text-xl">
                <input id="cover" type="file" class="hidden" name="cover">
                <div>
                    <i class="fas fa-pen ml-4"></i>
                    <span class="hover:underline">تغيير صورة الغلاف</span>
                </div>
            </label>
        </form>
        <script>
            var cover_input = document.getElementById('cover');
            var cover_form = document.getElementById('form-cover');
            cover_input.addEventListener('change',function(){
                cover_form.submit();
            });
        </script>
    @endif
    <img class="w-full h-full object-cover" src="{{ asset($profile->cover ?? "image/gradients-design.png") }}" alt="">
    <div class="flex absolute left-4 md:left-8 transform translate-y-2 lg:left-12 xl:left-20 2xl:left-52  bottom-0 z-50 text-xl text-white">
        @foreach ($profile->social_links as $social_link)
            <a href="{{ $social_link->link }}"><div class="py-4 px-4 bg-curious-blue  mr-2">
                <i class="fab fa-{{ $social_link->platform }} "></i>
            </div></a>
        @endforeach
        
    </div>
</div>
@endsection

@section('contents')

<div class="flex flex-wrap lg:flex-nowrap relative z-10 justify-center lg:justify-start -mt-14 ">
    <div class="flex-initial max-w-full">
        <div class="w-80 max-w-full shadow-lg mb-8 -mt-10">
            <div class="w-full p-4 bg-white border-0 border-b border-solid">
                <div class="w-full h-64 bg-black">
                    <img src="{{ asset($profile->image ?? "avatars/images/default.png") }}" class="w-full h-full object-center object-cover" alt="">
                </div>
                <div class="mt-4">
                    <p class="text-xl text-black">{{$profile->name}}</p>
                    @if(Auth::check() && $profile->username !== $user->username)
                        <div class="mt-5 flex">
                            <form method="POST" action="" class="flex">
                                @csrf
                                <input type="hidden" name="user_id" value="{{$profile->id}}">
                                <button type="submit" class="cursor-pointer text-center border-2 border-curious-blue bg-white text-white transition-colors px-5 py-2 text-lg font-bold">
                                    <i class="fas fa-star text-curious-blue"></i>
                                </button>
                            </form>
                            <div class="p-1"></div>
                            <a href="/messages/create/{{$profile->username}}">
                                <div class="flex-1 text-center bg-curious-blue text-white px-8 py-2 text-lg font-bold cursor-pointer">طلب تواصل</div>
                            </a>
                        </div>
                    @endif
                </div>
            </div>
            <div class="w-full break-words p-4 bg-white border-0 border-b border-solid mb-5">
                <div class="mb-3 flex">
                    <p class="text-base text-black flex-1">البلد</p>
                    <p class="text-lg text-black font-semibold flex-1 text-left">{{ $profile->country_info->country_arName ?? "N/A"}}</p>
                </div>
                <div class="mb-3 flex">
                    <p class="text-base text-black flex-1">عدد المشاهدات</p>
                    <p class="text-lg text-black font-semibold flex-1 text-left">{{ $profile->user_info['viewers'] ?? "N/A"}}</p>
                </div>
                <div class="mb-3 flex">
                    <p class="text-base text-black flex-1">معدل التوظيف</p>
                    <p class="text-lg text-black font-semibold flex-1 text-left">20%</p>
                </div>
                <div class="mb-3 flex">
                    <p class="text-base text-black flex-1">الاعلانات المكتملة</p>
                    <p class="text-lg text-black font-semibold flex-1 text-left">25</p>
                </div>
                <div class="mb-3 flex">
                    <p class="text-base text-black flex-1">اعلانات قيد التنفيذ</p>
                    <p class="text-lg text-black font-semibold flex-1 text-left">2</p>
                </div>
                <hr class="mb-5">
                <div class="mb-3 flex">
                    <p class="text-base text-black flex-1">اخر تواجد</p>
                    <p class="text-lg text-black font-semibold flex-1 text-left">منذ 4 أيام</p>
                </div>
            </div>

        </div>
        <div class="w-full break-words p-4 bg-white border-0 border-b border-solid mb-5 shadow-lg">
            <div class="mb-3 flex">
                <p class="text-base text-black font-bold flex-1">التصريحات والاعتمادات</p>
            </div>
            <hr class="my-5">
            <div class="mb-3 flex">
                <p class="text-base text-black flex-1">الهوية الشخصية</p>
                <p class="text-lg text-black font-semibold text-left"><i class="fas fa-check text-curious-blue"></i></p>
            </div>
            <div class="mb-3 flex">
                <p class="text-base text-black flex-1">اعتماد الجهات التنظيمية</p>
                <p class="text-lg text-black font-semibold text-left"><i class="fas fa-check text-curious-blue"></i></p>
            </div>
            <hr class="my-5">
            <div class="mb-3 flex">
                <p class="text-base text-black flex-1">ضريبة القيمة المضافة</p>
                <p class="text-lg text-black font-semibold text-left">
                    <i class="fas fa-check text-curious-blue"></i>
                </p>
            </div>
            <div class="mb-3 flex">
                <p class="text-base text-black flex-1">معروف</p>
                <p class="text-lg text-black font-semibold text-left">
                    <i class="fas fa-check text-curious-blue"></i>
                </p>
            </div>
        </div>
    </div>
    <div class="flex-auto mr-6 w-full md:w-auto">
        <div class="w-full">
            <h1 class="text-3xl text-black font-bold">
                @yield('profile-title')
            </h1>
            <div class="overflow-x-scroll md:overflow-x-auto">
            @yield('profile-nav')
            </div>
            @yield('profile-data')
        </div>
    </div>
</div>

@endsection

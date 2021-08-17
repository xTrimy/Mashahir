@extends('layouts.app')

@section('before-contents')
<div class="w-full py-12 bg-white px-4 md:px-12 lg:px-20 xl:px-52">
    <div class="flex justify-between flex-wrap">
        <div class="flex items-center mb-8 ">
            <div class="hidden md:block w-20 h-20 bg-black rounded-full ml-4 overflow-hidden">
                <img src="{{ asset('image/placeholders/face-1.jpg') }}" class="w-full h-full object-center object-cover" alt="">
            </div>
            <div class="flex flex-col justify-between h-full">
                <h1 class="text-2xl mb-4">
                    استفسار بخصوص: طلب اعلان لمجموعة نوادي في مصر
                </h1>
                <div class="flex text-gray-400 text-sm">
                    <p class="ml-4">
                        <i class="fas fa-user"></i>
                        <span class="mr-1">حلا الترك</span>
                    </p>
                    <p class="ml-4">
                        <i class="fas fa-clock"></i>
                        <span class="mr-1">اخر تفاعل: منذ يومان</span>
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
    <div class="w-full px-8 py-12">
        <div class="flex">
            <div class="w-16 h-16 bg-black rounded-full overflow-hidden">
                <img src="{{ asset('image/placeholders/face-3.jpg') }}" class="w-full h-full object-cover object-center" alt="">
            </div>
            <div class="flex flex-col justify-around mr-4">
                <h2 class="text-xl">ياسر إسماعيل</h2>
                <span class="text-sm text-gray-400">
                    <i class="fas fa-clock ml-1"></i>
                    <span>منذ ساعتين</span>
                </span>
            </div>
        </div>
        <div class="text-lg mt-4">
            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.
        </div>
    </div>
    <hr>
    <div class="w-full px-8 py-12">
        <div class="flex">
            <div class="w-16 h-16 bg-black rounded-full overflow-hidden">
                <img src="{{ asset('image/placeholders/face-1.jpg') }}" class="w-full h-full object-cover object-center" alt="">
            </div>
            <div class="flex flex-col justify-around mr-4">
                <h2 class="text-xl">حلا الترك </h2>
                <span class="text-sm text-gray-400">
                    <i class="fas fa-clock ml-1"></i>
                    <span>منذ ساعتين</span>
                </span>
            </div>
        </div>
        <div class="text-lg mt-4">
إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.
        </div>
    </div>
    <hr>
    <div class="w-full py-12 px-8">
<form method="POST" class="w-full">
                @csrf
                
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
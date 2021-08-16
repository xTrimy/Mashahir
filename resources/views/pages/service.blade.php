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
                    نشر حسابك على انستجرام حلا
                </h1>
                <div class="flex text-gray-400 text-sm flex-wrap">
                    <p class="ml-4 w-full sm:w-auto">
                        <i class="fas fa-user"></i>
                        <span class="mr-1">حلا الترك</span>
                    </p>
                    <p class="ml-4 w-full sm:w-auto">
                        <i class="fas fa-cubes"></i>
                        <span class="mr-1">اعلانات حسابات التواصل</span>
                    </p>
                    <p class="ml-4 w-full sm:w-auto">
                        <i class="fas fa-clock"></i>
                        <span class="mr-1">اخر تفاعل: منذ يومان</span>
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
                        هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.
ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا يليق.
هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.
                    </p>
                </div>
                <hr>
                <div class="w-full mt-8">
                    <h1 class="text-xl font-bold text-gray-600">
                        أضافة تطويرات للخدمة
                    </h1>
                    <ul class="mt-4">
                        <li class="mb-4">
                            <div class="flex sm:justify-between flex-wrap">
                                <label class="">
                                    <input type="checkbox" class="form-checkbox border-curious-blue border-2 text-lg text-curious-blue rounded">
                                    <span class="mr-4">طلب حلا في اعلان ميداني</span>
                                </label>
                                <div class="text-xl mr-2 sm:mr-0">+450$</div>
                            </div>
                        </li>
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
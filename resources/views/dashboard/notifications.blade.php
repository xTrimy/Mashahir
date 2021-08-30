@extends('layouts.dashboard')
@section('title')
الأشعارات الهامة  | لوحة التحكم
@endsection
@section('content')
        <div class="px-2 lg:pr-12 lg:pl-24 py-12 mt-8 w-full overflow-x-hidden">
            <h1 class="text-3xl lg:text-5xl font-extrabold mb-8">إدارة الملف </h1>
            
            <div class="w-full mt-8 flex flex-wrap lg:flex-nowrap">
                <x-profile-settings-navbar page="notifications" />
                <div class="lg:mr-8 flex-1 h-full ">
                    <div class="items-center shadow-lg bg-white px-4 md:px-8 lg:px-12 py-5 mb-7 rounded-sm justify-between border-r-12 border-curious-blue">
                        <div class="flex justify-between flex-wrap">
                            <div>
                                <p class="mb-2 font-semibold text-gray-800">تنويه هام موجه من الهيئة العامة للإعلام المرئي والمسموع</p>
                                <div class="flex items-center text-gray-400">
                                    <i class="fas fa-clock ml-2"></i>
                                    منذ ساعة واحدة
                                </div>
                            </div>
                            <div>
                            <div class="px-16 py-2 bg-curious-blue text-white text-lg float-left cursor-pointer"> موافق </div>

                            </div>
                        </div>
                        <hr class="my-4">
                        <div class="text-gray-400">
                            بموجب قرار من الهيئة تقرر الآتي
                            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو
                            .العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق
                            إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد
                            .النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع
                            ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث
                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection
   
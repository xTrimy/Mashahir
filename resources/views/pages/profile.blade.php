@extends('layouts.profile')

@section('title')
    ملفي
@endsection

@section('profile-nav')
<div class="font-semibold flex  w-full my-4 border-0 border-b pb-2 uppercase border-solid justify-between">
    <div class="flex">
        <div class="text-lg px-4 >
            <a href="">الخدمات</a>
        </div>
        <div class="text-lg text-center px-4 border-0 border-b-2 border-curious-blue border-solid -mb-2.5 font-bold">
            <a href="">عني</a>
        </div>
        <div class="text-lg px-4 ">
            <a href="">الاعلانات</a>
        </div>
        <div class="text-lg px-4  ">
            <a href="">الأخبار</a>
        </div>
        <div class="text-lg px-4 ">
            <a href="">الوكيل</a>
        </div>
    </div>
    
    <div class="text-center font-normal bg-curious-blue text-white pl-4 pr-8 py-1 text-lg cursor-pointer  left-0 mr-1">
        مشاركة 
        <i class="las la-link text-2xl mr-4"></i>
    </div>
</div>
@endsection

@section('profile-data')
    <div class="bg-white px-12 py-8 shadow border-solid border border-blueGray-light mb-5">
        <div class="text-xl"><b>عن حلا الترك</b></div>
        
        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا
            .النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق
            إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء
            لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية
            .لتصميم الموقع
            ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى أن يوفر على المصمم
            .عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا يليق
            هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه
            .مازال نصاً بديلاً ومؤقتاً
        </p>
    </div>
    
@endsection

@section('profile-title')
        
@endsection
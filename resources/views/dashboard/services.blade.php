@extends('layouts.dashboard')
@section('title')
تعديل الملف | لوحة التحكم
@endsection
@section('content')
        <div class="px-2 lg:pr-12 lg:pl-24 py-12 mt-8 w-full overflow-x-hidden">
            <h1 class="text-3xl lg:text-5xl font-extrabold mb-8">إدارة الملف </h1>
            
            <div class="w-full mt-8 flex">
                <div class="w-60">
                    <div class="w-full bg-white shadow-md rounded text-lg">
                        <div class="w-full py-6 px-8 text-gray-400 border-b">
                            <i class="fas fa-pen ml-4 text-2xl"></i>
                            <span>تعديل الملف</span>
                        </div>
                        <div class="w-full py-6 px-8 text-gray-400 border-b">
                            <i class="fas fa-shopping-cart ml-4 text-2xl"></i>
                            <span>الطلبات الواردة</span>
                        </div>
                        <div class="w-full py-6 px-8 text-gray-400 border-b">
                            <i class="fas fa-calendar-alt ml-4 text-2xl"></i>
                            <span>التقويم</span>
                        </div>
                        <div class="w-full py-6 px-8 text-gray-400 border-b">
                            <i class="fas fa-cubes ml-4 text-2xl"></i>
                            <span>الإعلانات</span>
                        </div>
                        <div class="w-full py-6 px-8 font-bold text-curious-blue border-b">
                            <i class="far fa-paper-plane ml-4 text-2xl"></i>
                            <span>الخدمات</span>
                        </div>
                        <div class="w-full py-6 px-8 text-gray-400 border-b">
                            <i class="fas fa-comment ml-4 text-2xl relative">
                                <div class="w-2 h-2 bg-rose-500 absolute top-1/2 transform -translate-x-1/2 left-0 rounded-full">
                                    <div class="w-2 h-2 bg-rose-500 absolute rounded-full animate-ping"></div>
                                </div>
                            </i>
                            <span>الاشعارات الهامة</span>
                        </div>
                    </div>
                    
                </div>
                <div class="lg:mr-8 flex-1 h-full ">
                    <div class="flex items-center shadow-lg bg-white px-12 mb-7 rounded-md justify-between">
                        <div class="flex">
                            <div class="font-bold flex text-curious-blue border-b-4 border-curious-blue h-20 items-center ml-8 cursor-pointer px-3"> <p> مراجعة عامة  </p></div>
                            <div class="font-bold flex h-20 items-center cursor-pointer px-3"> <p> اضافة عمل جديد </p></div>
                        </div>
                        <div>
                            <i class="fas fa-ellipsis-h text-3xl text-gray-500 cursor-pointer"></i>
                        </div>
                    </div>
                    <div class="flex items-center py-4  rounded-md">
                        <div class="flex w-full flex-wrap">
                            <div class="w-full lg:w-auto lg:flex-1 p-3 md:p-4 lg:p-8 bg-white lg:ml-4 mb-4 shadow-lg rounded-md">
                                <div class="w-full h-96">
                                    <div class="w-full h-full">
                                        <img src="{{ asset('image/placeholders/banner.jpg') }}" class="object-contain object-center w-full h-full" alt="">
                                    </div>
                                </div>
                                    <div class="py-8 ">
                                        <p class="mb-2 font-semibold text-gray-800">الإسم</p>
                                        <input type="text" name="username" class="w-full  border-blue-200 border-2 outline-none p-2 mb-3 rounded-sm" value="نشر حسابك على انستاجرام حلا">

                                        <p class="mb-2 font-semibold text-gray-800">التصنيف</p>
                                        <select name="category" id="" class="w-full  border-blue-200 border-2 outline-none p-2 mb-3 rounded-sm">
                                            <option value="دعایة على وسائل التواصل" selected>دعایة على وسائل التواصل</option>
                                        </select>

                                        <p class="mb-2 font-semibold text-gray-800">وصف الخدمة</p>
                                        <textarea name="desc" id="" cols="30" rows="6" class="w-full border-blue-200 border-2 outline-none p-2 mb-3 rounded-sm">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق. إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع. ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا يليق. هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.</textarea>
                                    
                                        <p class="mb-2 font-semibold text-gray-800">كلمات مفتاحية</p>
                                        <input type="text" name="keys" class="w-full  border-blue-200 border-2 outline-none p-2 mb-3 rounded-sm" value="انستاجرام، وسائل التواصل، اعلانات، مشاھیر، مشھور">

                                        <p class="mb-2 font-semibold text-gray-800">مدة التسليم</p>
                                        <input type="text" name="duartion" class="w-full  border-blue-200 border-2 outline-none p-2 mb-3 rounded-sm" value=" 5 أیام">

                                        <p class="mb-2 font-semibold text-gray-800">الأيام المتاحة للعمل</p>
                                        <input type="text" name="days" class="w-full  border-blue-200 border-2 outline-none p-2 mb-3 rounded-sm" value="">

                                        <p class="mb-2 font-semibold text-gray-800">تعليمات للمشتري</p>
                                        <textarea name="desc" id="" cols="30" rows="6" class="w-full border-blue-200 border-2 outline-none p-2 mb-3 rounded-sm">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق. إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع. ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا يليق. هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.</textarea>
                                    </div>
                                    <hr>
                                    <div class="py-8 mb-5">
                                        <p class="mb-2 font-semibold text-gray-800">اضافة تطويرات للخدمة</p>
                                        <input type="text" name="add" class="w-full  border-blue-200 border-2 outline-none p-2 mb-3 rounded-sm" value="طلب حلا الترك في اعلان میداني">
                                        <div class="flex">
                                            <input type="text" name="days" class="w-full  border-blue-200 border-2 outline-none p-2 mb-3 rounded-sm flex-1 ml-3" value="لن یزید من مدة التنفیذ">
                                            <input type="text" name="days" class="w-full  border-blue-200 border-2 outline-none p-2 mb-3 rounded-sm flex-1" value="$ 450">
                                        </div>
                                        <div class="table px-12 py-2 bg-curious-blue text-white text-lg float-left cursor-pointer"> اضافة تطوير جديد </div>
                                    </div>
                                    <hr>
                                    <div class="py-8">
                                        <p class="mb-2 font-semibold text-gray-800">حالة الخدمة</p>
                                        <select name="status" id="" class="w-full  border-blue-200 border-2 outline-none p-2 mb-3 rounded-sm">
                                            <option value="تعمل" selected>تعمل</option>
                                        </select>
                                    </div>
                                    <div class="w-full mt-8 flex justify-between">
                                        <div class="table px-12 py-2 bg-curious-blue text-white text-lg cursor-pointer"> حفظ التعديلات </div>
                                        <div class="table px-12 py-2 bg-white text-red-800 border-2 border-red-800 text-lg font-bold cursor-pointer">احذف هذه الخدمة</div>
                                    </div>
                            </div>
                            <div class="w-full lg:w-64 mb-4 text-curious-blue-900">
                                <div class="w-full bg-white py-8 shadow-lg rounded-md mb-8">
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
                                            <i class="las la-star"></i>
                                            <i class="las la-star"></i>
                                        </div>
                                        <div class="flex justify-center mt-4 ">
                                            <div class="ml-4">
                                                <i class="fas fa-thumbs-up"></i>
                                                <span class="">100%</span>
                                            </div>
                                            <div>
                                                <i class="fas fa-thumbs-down"></i>
                                                <span class="">0%</span>
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
                                                <span>2 طلبات جاري تنفيذها</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    

                                <div class="w-full bg-white py-8 shadow-lg rounded-md">
                                    <h2 class="text-xl text-center mb-8">شارك الخدمة</h2>
                                    <hr>
                                    <div class="px-8 mt-8 font-bold">
                                        <div class="flex mb-2">
                                            <div class="bg-curious-blue px-3 py-2 ml-1 rounded-sm">
                                                <i class="fab fa-twitter text-white"></i>
                                            </div>
                                            <div class="bg-curious-blue px-3 py-2 w-full text-center text-white rounded-sm">
                                                شارك
                                            </div>
                                        </div>
                                        
                                        <div class="flex mb-2">
                                            <div class="bg-curious-blue px-3 py-2 ml-1 rounded-sm">
                                                <i class="fab fa-facebook text-white"></i>
                                            </div>
                                            <div class="bg-curious-blue px-3 py-2 w-full text-center text-white rounded-sm">
                                                شارك
                                            </div>
                                        </div>

                                        <div class="flex mb-2">
                                            <div class="bg-curious-blue px-3 py-2 ml-1 rounded-sm">
                                                <i class="fab fa-linkedin-in text-white"></i>
                                            </div>
                                            <div class="bg-curious-blue px-3 py-2 w-full text-center text-white rounded-sm">
                                                شارك
                                            </div>
                                        </div>

                                        <div class="flex mb-2">
                                            <div class="bg-curious-blue px-3 py-2 ml-1 rounded-sm">
                                                <i class="fab fa-instagram text-white"></i>
                                            </div>
                                            <div class="bg-curious-blue px-3 py-2 w-full text-center text-white rounded-sm">
                                                شارك
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
   
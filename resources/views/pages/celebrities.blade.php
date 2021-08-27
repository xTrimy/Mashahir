@extends('layouts.app')

@section('title')
    أعلانات المشاهير
@endsection

@section('contents')
<h1 class="text-4xl font-bold border-r-8 py-2 pr-4 border-curious-blue">أعلانات المشاهير</h1>
<h2 class="text-2xl mt-2">قم بتوظيف مشهور لتنفيذ عملك بإتقان</h2>

<div class="w-full flex my-12 ">
    <section class="hidden lg:block w-96">
        <div class="w-full px-8 py-12 bg-white">
            <div class="relative overflow-hidden">
                <div class="show cat">
                    <div class="flex justify-between items-center mb-4">
                        <h1 class="text-xl font-bold">الأقسام</h1>
                        <div class="show-hide cursor-pointer w-8 h-8 bg-white border-2 border-curious-blue flex items-center justify-center text-curious-blue rounded">
                            <i class="las la-minus text-2xl"></i>
                        </div>
                    </div>
                    <ul class="text-lg group">
                        <li>
                            <div class="flex justify-between items-center">
                                <label class="cursor-pointer"><input type="checkbox" class="ml-2 form-checkbox rounded border-curious-blue border-2 text-curious-blue">  أعمال </label>
                                <div class="bg-gray-800 text-white  px-4 text-sm rounded-full">5</div>
                            </div>
                        </li>
                    </ul>
                </div>
                <script>
                    let cats =document.getElementsByClassName('cat');
                    for(let i = 0; i<cats.length; i++){
                        cats[i].getElementsByClassName('show-hide')[0].addEventListener('click',function(){
                            cats[i].querySelector('.group').classList.toggle('hidden');
                            cats[i].querySelector('.las').classList.toggle('la-plus');
                            cats[i].querySelector('.las').classList.toggle('la-minus');
                        });
                    }
                </script>
            </div>
        </div>
    </section>
    <div class="flex-1 lg:mr-8  flex flex-wrap justify-around">
            <div class="w-72 px-4 py-6 bg-white mb-8">
                <div class="w-full h-48 bg-black">
                    <img src="{{ asset('image/placeholders/face-2.jpg') }}" class="w-full h-full object-cover object-center" alt="">
                </div>
                <div class="text-center">
                    <p class="text-lg mt-4">حلا الترك</p>
                    <div class="table py-2 px-12 bg-curious-blue mx-auto mt-4 text-white">طلب أعلان</div>
                </div>
            </div>
            <div class="w-72 px-4 py-6 bg-white mb-8">
                <div class="w-full h-48 bg-black">
                    <img src="{{ asset('image/placeholders/face-3.jpg') }}" class="w-full h-full object-cover object-center" alt="">
                </div>
                <div class="text-center">
                    <p class="text-lg mt-4">حلا الترك</p>
                    <div class="table py-2 px-12 bg-curious-blue mx-auto mt-4 text-white">طلب أعلان</div>
                </div>
            </div>
            <div class="w-72 px-4 py-6 bg-white mb-8">
                <div class="w-full h-48 bg-black">
                    <img src="{{ asset('image/placeholders/face-1.jpg') }}" class="w-full h-full object-cover object-center" alt="">
                </div>
                <div class="text-center">
                    <p class="text-lg mt-4">حلا الترك</p>
                    <div class="table py-2 px-12 bg-curious-blue mx-auto mt-4 text-white">طلب أعلان</div>
                </div>
            </div>
            <div class="w-72 p-8 mb-8"></div>
            <div class="w-72 p-8 mb-8"></div>
    </div>
</div>
@endsection
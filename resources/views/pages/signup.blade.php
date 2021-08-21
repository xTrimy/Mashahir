@extends('layouts.app')

@section('title')
    تسجيل مستخدم جديد
@endsection

@section('contents')
    <div class=" w-3/5 bg-white shadow p-4 m-auto py-12">
        <h1 class="text-5xl mb-8 font-bold text-center text-curious-blue">تسجيل مستخدم جديد</h1>
        <p class="mb-3 text-lg">أختر نوع المستخدم الذي تريد تسجيله</p>
        <div class="grid w-full grid-cols-2 grid-rows-2 gap-4 items-center flex-wrap justify-between">
            <label class="cursor-pointer flex border-2 rounded-xl border-gray-400 py-3  px-4">
                <div class="flex w-3/5 items-center">
                    <input type="radio" name="type" value="celebrity" class="form-radio border-2 text-curious-blue ml-5 rounded-xl border-gray-400">
                    مشهور     
                </div>
                <a href="{{ route('signup_form','celebrity') }}" class="bg-gray-400 bg rounded-xl py-2 px-6 text-white  flex-1 text-center cursor-pointer">متابعة  <i class="fas fa-arrow-left"></i></a>
            </label>
            <label class="cursor-pointer flex border-2 rounded-xl border-gray-400 py-3 px-4">
                <div class="flex w-3/5 items-center">
                    <input type="radio" name="type" value="advertising-agency" class="form-radio border-2 text-curious-blue ml-5 rounded-xl border-gray-400">
                        وكيل اعلاني     
                </div>
                <a href="{{ route('signup_form','advertising-agency') }}" class="bg-gray-400 bg rounded-xl py-2 px-6 text-white  flex-1 text-center cursor-pointer">متابعة  <i class="fas fa-arrow-left"></i></a>
            </label>
            <label class="cursor-pointer flex border-2 rounded-xl border-gray-400 py-3  px-4">
                <div class="flex w-3/5 items-center">
                    <input type="radio" name="type" value="customer" class="form-radio border-2 text-curious-blue ml-5 rounded-xl border-gray-400">
                    عميل    
                </div>
                <a href="{{ route('signup_form','customer') }}" class="bg-gray-400 bg rounded-xl py-2 px-6 text-white  flex-1 text-center cursor-pointer">متابعة  <i class="fas fa-arrow-left"></i></a>
            </label>
            <label class="cursor-pointer flex border-2 rounded-xl border-gray-400 py-3  px-4">
                <div class="flex w-3/5 items-center">
                    <input type="radio" name="type" value="digital-marketer" class="form-radio border-2 text-curious-blue ml-5 rounded-xl border-gray-400">
                    مسوق الكتروني    
                </div>
                <a href="{{ route('signup_form','digital-marketer') }}" class="bg-gray-400 bg rounded-xl py-2 px-6 text-white  flex-1 text-center cursor-pointer">متابعة  <i class="fas fa-arrow-left"></i></a>
            </label>
        </div>
    </div>
    <script>
        var type_radios = document.querySelectorAll('input[type="radio"]');
        for(let i = 0; i < type_radios.length; i++){
            type_radios[i].addEventListener('change',function(){
                for(let j =0; j<type_radios.length; j++){
                    type_radios[j].parentElement.parentElement.classList.remove('border-curious-blue');
                    type_radios[j].parentElement.parentElement.classList.add('border-gray-400');
                    type_radios[j].parentElement.nextElementSibling.classList.remove('bg-curious-blue');
                    type_radios[j].parentElement.nextElementSibling.classList.add('bg-gray-400');
                }
                this.parentElement.parentElement.classList.add('border-curious-blue');
                this.parentElement.parentElement.classList.remove('border-gray-400');
                this.parentElement.nextElementSibling.classList.add('bg-curious-blue');
                this.parentElement.nextElementSibling.classList.remove('bg-gray-400');
            });
        }
    </script>
@endsection

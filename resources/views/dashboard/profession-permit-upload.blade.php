@extends('layouts.dashboard')
@section('page')
profession-permit
@endsection
@section('title')
تجديد تصريح مزاولة المهنة | لوحة التحكم
@endsection
@section('content')

            <div class="w-full mt-8 flex flex-wrap lg:flex-nowrap">
                <x-profile-settings-navbar page="profession-permit" />
                <div class="lg:mr-8 flex-1 bg-white shadow-lg rounded-md py-8 px-2 lg:px-12">
                    @if($errors->any())
                        {!! implode('', $errors->all('<div class="text-red-500">:message</div>')) !!}
                    @endif
                    @if(Session::has('success'))
                    <div class="p-4 bg-green-200 text-green-600">
                        {{ Session::get('success') }}
                    </div>
                    @endif
                    <form method="POST" class="mt-8" enctype="multipart/form-data">
                        @csrf

                        <label>
                            <div class="text-lg">رفع التصريح</div>
                            <input type="file" name="file" class="form-input w-full border border-curious-blue  mt-2 rounded mb-2" >
                        </label>
                        
                        <label >
                            <div class="text-lg">تاريخ انتهاء التصريح الجاري</div>
                            <input readonly type="text" name="viewers" class="bg-gray-100 form-input w-full border border-gray-300  mt-2 rounded mb-2" value="{{ $profession_permit->expiration_date ?? ""}}">
                        </label>
                        
                        
                        <button class="text-center bg-curious-blue text-white px-8 py-2 text-lg font-semibold cursor-pointer">إرسال للمراجعة</button>
                    </form>
                    
                </div>
            </div>
        </div>
   
@endsection

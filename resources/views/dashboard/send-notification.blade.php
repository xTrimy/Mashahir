@extends('layouts.dashboard')
@section('page')
notifications
@endsection
@section('title')
المشاهير | لوحة التحكم
@endsection
@section('content')
            <x-dashboard-nav-bar page="send-notification"/>

            <form method="POST" action="./send-notification">
                @csrf
                <div class="w-full mt-8 bg-white shadow-lg px-4 lg:px-12 py-8 rounded-sm">
                    <p class="mb-2 font-semibold text-gray-800">إختر وجهة الرسالة</p>
                    <select name="everyCelebrity" id="" class="w-full border border-black outline-none p-2 mb-3 rounded-sm">
                        <option value="0" selected>كل المستخدمين</option>
                    </select>

                    <p class="mb-2 font-semibold text-gray-800">عنوان التنبيه</p>
                    <input type="text" name="subject" class="w-full  border-blue-200 border outline-none p-2 mb-3 rounded-sm  bg-blue-50" placeholder=" أدخل عنوان الرسالة">
                    @error('subject')
                    <div class="text-red-500 text-sm mb-8">
                        {{ $message }}
                    </div>
                    @enderror

                    <p class="mb-2 font-semibold text-gray-800">نص الرسالة</p>
                    <textarea name="message" id="" cols="30" rows="6" class="w-full border-blue-200 border outline-none p-2 mb-3 rounded-sm bg-blue-50" placeholder="أدخل نص الرسالة"></textarea>
                    @error('message')
                    <div class="text-red-500 text-sm mb-8">
                        {{ $message }}
                    </div>
                    @enderror

                    <div class="flex flex-wrap">
                        <div class="flex ml-5 mb-4">
                            <div class="text-curious-blue border border-curious-blue py-2 px-6 cursor-pointer"><i class="fas fa-trash"></i></div>
                            <div class="text-curious-blue border border-curious-blue py-2 px-6 cursor-pointer"><i class="fas fa-exclamation-circle"></i></div>
                            <div class="text-curious-blue border border-curious-blue py-2 px-6 cursor-pointer"><i class="fas fa-download"></i></div>
                        </div>
                        <div class="flex mb-4">
                            <button class="text-curious-blue border border-curious-blue py-2 px-6 cursor-pointer dropdown relative group">
                                <i class="fas fa-arrow-down"></i> <i class="fas fa-tag"></i>
                                <div class="dropdown-menu absolute hidden text-gray-700 pt-4 bg-white shadow-lg p-5 rounded-lg mt-0 group-focus:block group-hover:block">
                                    <div class="flex">
                                        <label class="flex ml-4">
                                            <input checked type="radio" name="color" value="blue" id="" class="form-radio  border-2 border-curious-blue text-curious-blue">
                                            <div class=" bg-curious-blue p-2 rounded-md mr-2"></div>
                                        </label>
                                        <label class="flex ml-4">
                                            <input type="radio" name="color" value="red" id="" class="form-radio  border-2 border-curious-blue text-curious-blue">
                                            <div class=" bg-red-700 p-2 rounded-md mr-2"></div>
                                        </label>
                                        <label class="flex ml-4">
                                            <input type="radio" name="color" value="yellow" id="" class="form-radio  border-2 border-curious-blue text-curious-blue">
                                            <div class=" bg-yellow-400 p-2 rounded-md mr-2"></div>
                                        </label>
                                        <label class="flex ml-4">
                                            <input type="radio" name="color" value="green" id="" class="form-radio  border-2 border-curious-blue text-curious-blue">
                                            <div class=" bg-green-500 p-2 rounded-md mr-2"></div>
                                        </label>
                                    </div>
                                </div>
                            </button>
                            <div class="text-curious-blue border border-curious-blue py-2 px-6 cursor-pointer">
                                <i class="fas fa-arrow-down"></i> <i class="fas fa-folder"></i>
                            </div>

                        </div>

                    </div>
                    <div class="w-full mt-8 flex justify-between">
                        <button type="submit" class="table px-12 py-2 bg-curious-blue text-white text-lg cursor-pointer"> أرسل  </button>
                        <div class="table px-12 py-2 bg-white text-red-800 border-2 border-red-700 text-lg font-bold cursor-pointer">الغاء</div>
                    </div>
                </div>
            </form>

        </div>
@endsection

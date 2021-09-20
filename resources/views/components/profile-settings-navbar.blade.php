@php
    $selected_style = "font-bold text-curious-blue";
    $default = "text-gray-400";
@endphp

<div class="w-full lg:w-60">
    <div class="w-full bg-white shadow-md rounded text-lg mb-2">
        <a href="@if($requestInfo->username) {{route('dashboard.celebrity.edit-profile',['username'=>$requestInfo->username])}} @else {{ route('dashboard.edit-profile') }} @endif">
            <div class="w-full py-6 px-8 {{ $page == "edit-profile"?$selected_style:$default }} border-b">
                <i class="fas fa-pen ml-4 text-2xl"></i>
                <span>تعديل الملف</span>
            </div>
        </a>
        @if($user->hasPermissionTo('publish services'))
            <a href="{{ route('dashboard.requests') }}">
                <div class="w-full py-6 px-8 {{ $page == "requests"?$selected_style:$default }} border-b">
                    <i class="fas fa-shopping-cart ml-4 text-2xl"></i>
                    <span>الطلبات الواردة</span>
                </div>
            </a>
            <a href="#">
                <div class="w-full py-6 px-8 {{ $page == "calendar"?$selected_style:$default }} border-b">
                    <i class="fas fa-calendar-alt ml-4 text-2xl"></i>
                    <span>التقويم</span>
                </div>
            </a>
            <a href="{{ route('dashboard.ads.main') }}">
                <div class="w-full py-6 px-8 {{ $page == "ads"?$selected_style:$default }} border-b">
                    <i class="fas fa-cubes ml-4 text-2xl"></i>
                    <span>الإعلانات</span>
                </div>
            </a>
            <a href="{{ route('dashboard.services.main') }}">
                <div class="w-full py-6 px-8 {{ $page == "services"?$selected_style:$default }}  border-b">
                    <i class="far fa-paper-plane ml-4 text-2xl"></i>
                    <span>الخدمات</span>
                </div>
            </a>
        @endif
        @if($user->hasPermissionTo('publish services'))
        <a href="{{ route('dashboard.permit') }}">
            <div class="w-full py-6 px-8 {{ $page == "profession-permit"?$selected_style:$default }} border-b">
                <i class="fas fa-file ml-4 text-2xl"></i>
                <span>تصريح مزاولة المهنة</span>
            </div>
        </a>
        @endif
        <a href="@if($requestInfo->username) {{route('dashboard.celebrity.notifications',['username'=>$requestInfo->username])}} @else {{ route('dashboard.notifications') }} @endif">
            <div class="w-full py-6 px-8 {{ $page == "notifications"?$selected_style:$default }} border-b">
                <i class="fas fa-comment ml-4 text-2xl relative">
                    <div class="w-2 h-2 bg-rose-500 absolute top-1/2 transform -translate-x-1/2 left-0 rounded-full">
                        <div class="w-2 h-2 bg-rose-500 absolute rounded-full animate-ping"></div>
                    </div>
                </i>
                <span>الاشعارات الهامة</span>
            </div>
        </a>

    </div>
</div>

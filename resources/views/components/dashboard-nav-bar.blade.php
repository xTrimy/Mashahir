@php
    $selected_style = "font-bold border-b-2 border-curious-blue pb-4 ";
@endphp
<div class="w-full border-blue-200 border-b px-4 text-lg lg:text-2xl flex overflow-x-auto">
    <a href="@if($requestInfo->username) {{route('dashboard.celebrity.main', ['username'=>$requestInfo->username])}} @else {{ route('dashboard.main') }} @endif"> <div class="{{ $page == 'main' ?$selected_style:"" }} px-4 mx-2 whitespace-nowrap">نظرة عامة</div></a>
    @if($user->hasPermissionTo('publish services'))
    <a href="{{ route('dashboard.tasks') }}"><div class="{{ $page == 'tasks' ?$selected_style:"" }} px-4 mx-2">المهام</div></a>
    @endif
    <a href="@if($requestInfo->username) {{route('dashboard.celebrity.requests', ['username'=>$requestInfo->username])}} @else {{ route('dashboard.requests') }} @endif"><div class="{{ $page == 'requests' ?$selected_style:"" }} px-4 mx-2">الطلبات</div></a>
    @if(!$requestInfo->username)
        @if($user->hasPermissionTo('manage celebrities') || $user->hasPermissionTo('manage all celebrities'))
        <a href="{{ route('dashboard.celebrities') }}"><div class="{{ $page == 'celebrities' ?$selected_style:"" }} px-4 mx-2">المشاهير</div></a>
        @endif
        <a href="{{route('dashboard.send-notification')}}"><div class="{{ $page == 'settings' ?$selected_style:"" }} px-4 mx-2">الاشعارات الهامة</div></a>
    @endif
    <a href="@if($requestInfo->username) {{route('dashboard.celebrity.credit',['username'=>$requestInfo->username])}} @else {{ route('dashboard.credit') }} @endif"><div class="{{ $page == 'credit' ?$selected_style:"" }} px-4 mx-2">الرصيد</div></a>
    <a href="@if($requestInfo->username) {{route('dashboard.celebrity.edit-profile', ['username'=>$requestInfo->username])}} @else {{ route('dashboard.edit-profile') }} @endif"><div class="{{ $page == 'settings' ?$selected_style:"" }} px-4 mx-2">اعدادات</div></a>
</div>

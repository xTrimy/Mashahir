@php
    $selected_style = "font-bold border-b-2 border-curious-blue pb-4 ";
@endphp
<div class="w-full border-blue-200 border-b px-4 text-lg lg:text-2xl flex overflow-x-auto">
    <a href="{{ route('dashboard.main') }}"> <div class="{{ $page == 'main' ?$selected_style:"" }} px-4 mx-2 whitespace-nowrap">نظرة عامة</div></a>
    @if($user->hasPermissionTo('publish services'))
    <a href="{{ route('dashboard.tasks') }}"><div class="{{ $page == 'tasks' ?$selected_style:"" }} px-4 mx-2">المهام</div></a>
    @endif
    <a href="{{ route('dashboard.requests') }}"><div class="{{ $page == 'requests' ?$selected_style:"" }} px-4 mx-2">الطلبات</div></a>
    @if($user->hasPermissionTo('manage celebrities'))
    <a href="{{ route('dashboard.celebrities') }}"><div class="{{ $page == 'celebrities' ?$selected_style:"" }} px-4 mx-2">المشاهير</div></a>
    @endif
    <a href="{{ route('dashboard.credit') }}"><div class="{{ $page == 'credit' ?$selected_style:"" }} px-4 mx-2">الرصيد</div></a>
    <a href="{{ route('dashboard.edit-profile') }}"><div class="{{ $page == 'settings' ?$selected_style:"" }} px-4 mx-2">اعدادات</div></a>
</div>
<div class="flex">

    {{-- Shown for every role --}}
    <div class="text-lg px-4 {{ ($page=="main") ? "text-center border-0 border-b-2 border-curious-blue border-solid -mb-2.5 font-bold" : ""}}">
        <a href="{{route('profile', $profile->username)}}">عني</a>
    </div>

    {{-- Shown for celebrity & digital marketer --}}
    @if($profile->hasRole("celebrity") || $profile->hasRole("digital marketer"))
        <div class="text-lg px-4 {{ ($page=="services") ? "text-center border-0 border-b-2 border-curious-blue border-solid -mb-2.5 font-bold" : ""}}" >
            <a href="{{route('profile.services', $profile->username)}}">الخدمات</a>
        </div>
    @endif

    {{-- Shown for celebrity & digital marketer & agency --}}
    @if($profile->hasRole("celebrity") || $profile->hasRole("digital marketer") || $profile->hasRole('advertising agency'))
        <div class="text-lg px-4 {{ ($page=="ads") ? "text-center border-0 border-b-2 border-curious-blue border-solid -mb-2.5 font-bold" : ""}}">
            <a href={{route('profile.ads', $profile->username)}}>الاعلانات</a>
        </div>
    @endif

    {{-- Shown for celebrity & agencies --}}
    @if($profile->hasRole("celebrity") || $profile->hasRole("advertising agency"))
        <div class="text-lg px-4 {{ ($page=="news") ? "text-center border-0 border-b-2 border-curious-blue border-solid -mb-2.5 font-bold" : ""}}">
            <a href="">الأخبار</a>
        </div>
    @endif

    {{-- Shown for celebrity --}}
    @if($profile->hasRole("celebrity"))
        <div class="text-lg px-4 {{ ($page=="agent") ? "text-center border-0 border-b-2 border-curious-blue border-solid -mb-2.5 font-bold" : ""}}">
            <a href="{{route('profile.agent', $profile->username)}}">الوكيل</a>
        </div>
    @endif

    {{-- Shown for agency--}}
    @if($profile->hasRole("advertising agency"))
        <div class="text-lg px-4 {{ ($page=="celebrities") ? "text-center border-0 border-b-2 border-curious-blue border-solid -mb-2.5 font-bold" : ""}}">
            <a href="{{route('profile.celebrities', $profile->username)}}">المشاهير</a>
        </div>
    @endif
</div>

<div class="text-center font-normal bg-curious-blue text-white pl-4 pr-8 py-1 text-lg cursor-pointer  left-0 mr-1">
    مشاركة
    <i class="las la-link text-2xl mr-4"></i>
</div>

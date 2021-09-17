@extends('layouts.app')

@section('before-contents')
<div class="w-full py-12 bg-white px-4 md:px-8 lg:px-12 xl:px-20 2xl:px-52">
    <div class="flex justify-between flex-wrap">
        <div class="flex items-center mb-8 ">
            <div class="hidden md:block w-20 h-20 bg-black rounded-full ml-4 overflow-hidden">
                <img src="{{ asset($service->user->image ?? "avatars/images/default.png" ) }}" class="w-full h-full object-center object-cover" alt="">
            </div>
            <div class="flex flex-col justify-between h-full">
                <h1 class="text-2xl mb-4">
                    {{ $service->name }}
                </h1>
                <div class="flex text-gray-400 text-sm flex-wrap">
                    <p class="ml-4 w-full sm:w-auto">
                        <i class="fas fa-user"></i>
                        <span class="mr-1">{{ $service->user->name }}</span>
                    </p>
                    <p class="ml-4 w-full sm:w-auto">
                        <i class="fas fa-cubes"></i>
                        <a href="#"><span class="mr-1">{{ $service->category->name }}</span></a>
                    </p>
                    <p class="ml-4 w-full sm:w-auto">
                        <i class="fas fa-clock"></i>
                        <span class="mr-1">اخر تفاعل:  {{ $time_ago->diffForHumans() }}</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="flex h-full">
            <div class=" bg-curious-blue px-8 py-2 text-white flex items-center ">
                <span>أشتري الخدمة</span>
                <i class="fas fa-shopping-cart mr-4"></i>
            </div>
        </div>

    </div>
    
</div>
@endsection

@section('contents')
    <div class="flex w-full xl:px-12 2xl:px-52 flex-wrap">
        <form class="w-full lg:w-auto lg:flex-1" method="POST">
            @csrf
            <input name="service_id" value="{{ $service->id }}" type="hidden">
            
            <div class="p-3 md:p-4 lg:p-8 bg-white lg:ml-4 mb-4">
                <div dir="ltr" class="relative max-w-full mx-auto my-auto embla bg-white" id="embla">
                <div class="embla__viewport bg-white">
                    <div class="embla__container">
                        @foreach ($service->images as $image)
                            <div class="embla__slide" style="height:350px;">
                                <img class="w-full h-full object-contain" src={{ asset($image->image) }} />
                            </div>
                        @endforeach
                    </div>
                </div>
                <button class="embla__button embla__button--prev" type="button">
                    <i class="fas fa-caret-left text-5xl text-curious-blue"></i>
                </button>
                <button class="embla__button embla__button--next" type="button">
                    <i class="fas fa-caret-right text-5xl text-curious-blue"></i>
                </button>
                </div>
            
                <div class="py-8 ">
                    <p>
                        {{ $service->description }}
                    </p>
                </div>
                <hr>
                <div class="w-full mt-8">
                    <h1 class="text-xl font-bold text-gray-600">
                        أضافة تطويرات للخدمة
                    </h1>
                    <ul class="mt-4">
                        @forelse ($service->upgrades as $upgrade)
                            <li class="mb-8 md:mb-4">
                                <div class="flex sm:justify-between flex-wrap">
                                    <label class="block w-full md:w-auto">
                                        <input name="upgrade[]" value="{{ $upgrade->id }}" type="checkbox" data-price="{{ $upgrade->price }}" class="form-checkbox border-curious-blue border-2 text-lg text-curious-blue rounded">
                                        <span class="mr-1 lg:mr-4">{{ $upgrade->title }}</span>
                                    </label>
                                    <div class="block w-full md:w-auto">
                                        <div class="text-lg mr-2 sm:mr-0">+{{ $upgrade->price }}$</div>
                                        <div class="text-lg mr-2 sm:mr-0">+{{ $upgrade->duration }} أيام</div>
                                    </div>
                                </div>
                            </li>
                        @empty
                            <p class="text-sm text-gray-400">لا يوجد تطويرات للخدمة في الوقت الحالي.</p>
                        @endforelse
                        
                    </ul>
                </div>
                
            </div>
            <div class="w-full lg:w-auto lg:flex-1 p-3 md:p-4 lg:p-8 bg-white lg:ml-4 mb-4">
                @if($errors->any())
                    {!! implode('', $errors->all('<div class="text-red-500">:message</div>')) !!}
                @endif
                @if(Session::has('error'))
                <div class="text-red-500">
                    {{ Session::get('error') }}
                </div>
                @endif
                <h1 class="text-xl font-bold text-gray-600">
                    أشتري الخدمة
                </h1>
                <div class="text-center">
                    <p class="text-gray-600 mb-4">
                        سعر طلب الخدمة
                        <span>$<span class="price" id="price">{{ $service->price }}</span></span>
                    </p>
                    <label class="text-gray-700">
                        <span class='ml-2'>عدد مرات الطلب</span>
                        <select name="quantity" id="quantity" class="border border-gray-200 py-2 px-4 ">
                        @for ($i=1;$i<=10;$i++)
                            <option class="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                    </label>
                    <hr class="my-8">
                    <p class="text-xl">
                        المبلغ النهائي
                        <span>$<span class="total_price" id="total_price">0</span></span>
                    </p>
                    <hr class="my-8">
                    <div class="w-full mt-8">
                    @if($service->user->id != $user->id)
                    @if(count($tickets) > 0)
                        <p class="text-lg text-gray-600">عنوان الطلب</p>
                    <select name="ticket" required class="border border-gray-200 py-2 px-4 my-2 ">
                    <option value="" selected disabled >برجاء تحديد خيار</option>
                    @foreach ($tickets as $ticket)
                        <option value="{{ $ticket->id }}">{{ $ticket->subject }}</option>
                    @endforeach
                    </select>
                    <button type="submit" class="table mx-auto px-12 py-4 bg-curious-blue text-white text-lg"> طلب الخدمة </button>
                    @else
                        <p class="text-lg text-gray-700">برجاء مراسلة صاحب الخدمة حتى تتمكن من الطلب</p>
                    <a href="{{ route('new-ticket',$service->user->username) }}" class="table mx-auto px-12 py-4 bg-curious-blue text-white text-lg mt-4"> طلب تواصل </a>

                    @endif
                    @endif
                </div>
                </div>
            </div>
        </form>
        <input type="hidden" id="service_price" value="{{ $service->price }}">
        <script>
            var price = 0;
            var checkboxes = document.querySelectorAll('.form-checkbox');
            var service_price = document.getElementById('service_price').value;
            for(let i = 0; i < checkboxes.length; i++){
                checkboxes[i].addEventListener('change',function(){
                    if(this.checked){
                        price += parseInt(this.getAttribute('data-price'));
                    }else{
                        price -= parseInt(this.getAttribute('data-price'));
                    }
                    document.getElementById('price').innerHTML = (parseInt(price)+ parseInt(service_price));
                    document.getElementById('total_price').innerHTML = (parseInt(price)+ parseInt(service_price)) * document.getElementById('quantity').value;
                });
            }
            document.getElementById('quantity').addEventListener('change',function(){
                    document.getElementById('total_price').innerHTML = (parseInt(price)+ parseInt(service_price)) * parseInt(this.value);
            });
        </script>
        
        <div class="w-full lg:w-64 mb-4 text-curious-blue-900">
            <div class="w-full bg-white py-8">
                <h2 class="text-xl text-center mb-8">تقييم الخدمة</h2>
                <hr>
                <div class="px-8 mt-8 font-bold">
                    <div class="relative group flex w-full justify-center flex-row-reverse text-2xl text-yellow-400">
                        <div class="absolute opacity-60 transition-all text-sm hidden group-hover:block -right-4 px-4 py-1 bg-black text-white">
                            {{ $rating }}
                        </div>
                        @for($i = $rating; $i>=0;$i--)
                        @if($i < 1 && $i >= 0.4)
                        <i class="las la-star-half-alt"></i>
                        @elseif($i >= 1)
                        <i class="las la-star"></i>
                        @endif
                        @endfor

                        @for($i = $rating; $i<=4.4;$i++)
                            <i class="lar la-star"></i>
                        @endfor
                    </div>
                    <div class="flex justify-center mt-4 ">
                        <div class="ml-4">
                            <i class="fas fa-thumbs-up"></i>
                            @if(count($service->ratings)>0)
                            <span class="">{{ count($service->ratings->where('rating',1))/count($service->ratings)*100 }}%</span>
                            @else
                            <span class="">0%</span>
                            @endif
                        </div>
                        <div>
                            <i class="fas fa-thumbs-down"></i>
                            @if(count($service->ratings)>0)
                            <span class="">{{ count($service->ratings->where('rating',0))/count($service->ratings)*100 }}%</span>
                            @else
                            <span class="">0%</span>
                            @endif
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
                            <span>3 طلبات جاري تنفيذها</span>
                        </div>
                        <div class="mb-6">
                            <i class="fas fa-dollar-sign ml-2"></i>
                            <span>سعر الخدمة: ${{ $service->price }}</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    
@endsection

@section('scripts')
<script>
    new Splide( '#splide' ).mount();

</script>

@endsection
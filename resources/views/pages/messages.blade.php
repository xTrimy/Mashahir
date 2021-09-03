@extends('layouts.app')

@section('before-contents')
<div class="w-full py-12 bg-white px-4 md:px-8 lg:px-12 xl:px-20 2xl:px-52">
    <div class="flex justify-between flex-wrap">
        <div class="flex items-center mb-8 ">
            <div class="hidden md:block w-20 h-20 bg-black rounded-full ml-4 overflow-hidden">
                <img src="{{ asset($nextUser->image ?? 'avatars/images/default.png') }} " class="w-full h-full object-center object-cover" alt="">
            </div>
            <div class="flex flex-col justify-between h-full">
                <h1 class="text-2xl mb-4">
                    {{$ticket->subject}}
                </h1>
                <div class="flex text-gray-400 text-sm">
                    <p class="ml-4">
                        <i class="fas fa-user"></i>
                        <span class="mr-1">{{$nextUser->name}}</span>
                    </p>
                    <p class="ml-4">
                        <i class="fas fa-clock"></i>
                        <span class="mr-1">اخر تفاعل: {{$messages[count($messages) - 1]->created_at->diffForHumans()}}</span>
                    </p>
                    
                    @if($service)
                    <p class="ml-4 ">
                            <i class="fas fa-dollar-sign"></i>
                            <span class="mr-1"> {{ $service->price }} </span>
                        </p>
                        <p class="ml-4
                        @if($service->agreed_at)
                         text-rose-500
                         @elseif($service->declined_at)
                         text-black
                         @else
                         text-yellow-500
                        @endif
                         ">
                            <i class="fas fa-info-circle"></i>
                            <span class="mr-1"> 
                                @if($service->agreed_at)
                                جاري التنفيذ
                                @elseif($service->declined_at)
                                تم رفض الطلب
                                @else
                                بأنتظار الموافقة
                                @endif
                            </span>
                        </p>
                    @endif
                </div>
            </div>
        </div>
        <div class="flex h-full">
            <div class=" bg-curious-blue px-8 py-2 text-white flex items-center ">
                <span>أبلاغ عن مشكلة</span>
                <i class="las la-life-ring text-2xl mr-2"></i>
            </div>
            @if($ticket->purchase->service->user->id == Auth::user()->id && $ticket->finished_at == null)
            <form method="POST">
                @csrf
                <input type="hidden" name="_id" value="{{ $ticket->id }}">
                <button type="submit" class="bg-green-500 hover:bg-green-600 px-8 py-2 text-white flex items-center ">
                    <span>تسليم الخدمة</span>
                    <i class="las la-shopping-cart text-2xl mr-2"></i>
                </button>
            </form>
            @endif
            @if($ticket->purchase->service->user->id != Auth::user()->id && $ticket->finished_at != null && $ticket->purchase->finished_at == null)
            <form method="POST" action="{{ route('finish_ticket',$ticket->id) }}">
                @csrf
                <input type="hidden" name="_id" value="{{ $ticket->id }}">
                <input type="hidden" name="response" value="1">
                <button type="submit" class="bg-green-500 hover:bg-green-600 px-8 py-2 text-white flex items-center ">
                    <span>أستلام الطلب</span>
                    <i class="las la-shopping-cart text-2xl mr-2"></i>
                </button>
            </form>
            <form method="POST" action="{{ route('finish_ticket',$ticket->id) }}">
                @csrf
                <input type="hidden" name="_id" value="{{ $ticket->id }}">
                <input type="hidden" name="response" value="2">
                <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 px-8 py-2 text-white flex items-center ">
                    <span>طلب تعديلات</span>
                    <i class="las la-pen text-2xl mr-2"></i>
                </button>
            </form>
            @endif
            
        </div>

    </div>

</div>
@endsection

@section('contents')
@if(Session::has('success'))
<div class="w-full text-green-500 bg-green-200 px-8 py-4">
    {{  Session::get('success') }}
</div>
@endif
<div class="w-full bg-white">
    <div  id="messages">
    @foreach ($messages as  $message)
        <div class="w-full
        @if($message->auto_message)
         px-8 py-4 bg-gray-100
        @else
         px-8 py-12
        @endif
         ">
            <div class="flex">
                @if(!$message->auto_message)
                <div class="w-16 h-16 bg-black rounded-full overflow-hidden">
                    <img src="{{ asset($message->user->image ?? 'avatars/images/default.png') }}" class="w-full h-full object-cover object-center" alt="">
                </div>
                @endif
                <div class="flex flex-col justify-around mr-4">
                    @if(!$message->auto_message)
                        <h2 class="text-xl">{{$message->user->name}} </h2>
                        <span class="text-sm text-gray-400">
                            <i class="fas fa-clock ml-1"></i>
                            <span>{{$message->created_at->diffForHumans()}}</span>
                        </span>
                    @endif
                </div>
            </div>
            <div class="text-lg 
            @if(!$message->auto_message)
            mt-4
            @endif
            ">
                {{$message->message}}
            </div>
        </div>
    <hr>
    @endforeach
    </div>
    <div class="hidden" id="message_cloner">
        <div class="w-full px-8 py-12 message">
            <div class="flex">
                <div class="w-16 h-16 bg-black rounded-full overflow-hidden">
                    <img src="{{ asset(Auth::user()->image ?? 'avatars/images/default.png') }}" class="w-full h-full object-cover object-center" alt="">
                </div>
                <div class="flex flex-col justify-around mr-4">
                    <h2 class="text-xl">{{Auth::user()->name}} </h2>
                    <span class="text-sm text-gray-400">
                        <i class="fas fa-clock ml-1"></i>
                        <span>الآن</span>
                    </span>
                </div>
            </div>
            <div class="text-lg mt-4" id="message_container">
                
            </div>
        </div>
    <hr>
    </div>
    @if($ticket->purchase->service->user->id != Auth::user()->id 
    && $ticket->finished_at != null 
    && $ticket->purchase->finished_at != null 
    && $ticket->purchase->rating == null)
    <form method="POST" class="w-full px-8 py-4 border-b" action="{{ route('rate_service',$ticket->id) }}">
        @csrf
        <input type="hidden" name="id" value="{{ $ticket->id }}">
        <h2 class="text-xl text-center mb-4">
            تقييم الخدمة
        </h2>
        <div class="w-full flex items-center justify-center">
            <label class="cursor-pointer w-12 h-12 hover:bg-gray-100 rounded-full text-4xl flex justify-center items-center">
                <input class="hidden peer" type="radio" name="rating" value="1">
                <i class="peer-checked:text-curious-blue las la-thumbs-up"></i>
            </label>
            <label class="cursor-pointer w-12 h-12 hover:bg-gray-100 rounded-full text-4xl flex justify-center items-center">
                <input class="hidden peer" type="radio" name="rating" value="0">
                <i class="peer-checked:text-curious-blue las la-thumbs-down"></i>
            </label>
        </div>
        <button type="submit" class="mx-auto table py-4 px-12 mt-4 bg-curious-blue text-lg text-white hover:bg-curious-blue-200">
            تقييم 
        </button>
    </form>
    @endif
    <div class="w-full py-12 px-8">
        <form method="POST" class="w-full">
            @csrf
            <input hidden name="_id" id="ticket_id" value="{{$ticket->id}}">
            <input hidden name="_date" value="{{$date}}">
            <label>
                <textarea class="w-full border-2 border-blue-200 bg-blue-50 outline-none focus:ring-1 ring-curious-blue py-2 px-4" name="message" id="message" cols="30" rows="10"></textarea>
            </label>
            <div class="flex">
                <div class="table pl-8 pr-2 py-2 border-2 border-curious-blue text-curious-blue hover:bg-curious-blue hover:text-white cursor-pointer ml-2">
                    <span class="ml-6">
                        <i class="las la-paperclip text-xl"></i>
                    </span>
                    <span>أرفق ملف</span>
                </div>
                <div class="table pl-8 pr-2 py-2 border-2 border-curious-blue text-curious-blue hover:bg-curious-blue hover:text-white cursor-pointer ml-2">
                    <span class="ml-4">
                        <i class="las la-microphone text-xl"></i>
                    </span>
                    <span>أضف رسالة صوتية</span>
                </div>
            </div>
                <button id="submit" class="mt-4 text-2xl text-white py-2 px-24 outline-none bg-curious-blue focus:ring-2 border border-white ring-curious-blue">
                    أرسل
                </button>
        </form>
    </div>
</div>
<script>
    

    function sendMessage(message){
        $.ajax({
            url : "/api/messages/"+$("#ticket_id").val(),
            type: "POST",
            headers: {
                    'X-CSRF-TOKEN': $("input[name='_token']").val(),
                },
            data : {
                
                "message":message,
            },
            success: function(data, textStatus, jqXHR)
            {
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
            }
        });
    }
    let append_message = (message)=>{
        let message_clone = document.querySelector('#message_cloner .message').cloneNode(true);
        console.log(message_clone);
        message_clone.querySelector('#message_container').innerHTML = message;
        document.querySelector('#messages').appendChild(message_clone);
        document.querySelector('#messages').appendChild(document.createElement('hr'));
    }
    function updateMessages(date){
        $.ajax({
            url : "/api/messages/"+$("#ticket_id").val(),
            type: "GET",
            
            data : {
                "date":date,
            },
            success: function(data, textStatus, jqXHR)
            {
                var messages = data['Messages'];
                for(let i = 0;i < messages.length; i++){
                    append_message(messages[i].message);
                    var date = new Date(messages[i].created_at);
                    console.log(date.getFromFormat('yyyy-mm-dd hh:ii:ss'));
                    $('input[name="_date"]').val(date.getFromFormat('yyyy-mm-dd hh:ii:ss'));
                }
                console.log(data);
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                console.log(jqXHR,textStatus,errorThrown);
            }
        });
    }
    setInterval(function(){
        console.log('checked');
        updateMessages($('input[name="_date"]').val());
    },5000);
    
    var submitButton = document.getElementById('submit');
    submitButton.addEventListener('click',function(e){
        e.preventDefault();
        let message = $('#message').val();
        sendMessage(message);
        $('#message').val("");
        append_message(message);
    });

</script>
@endsection

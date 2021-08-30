@extends('layouts.app')

@section('title')
    أعلانات المشاهير
@endsection

@section('contents')
<h1 class="text-4xl font-bold border-r-8 py-2 pr-4 border-curious-blue">أعلانات المشاهير</h1>
<h2 class="text-2xl mt-2">قم بتوظيف مشهور لتنفيذ عملك بإتقان</h2>

<div class="w-full flex my-12 ">
    <section class="hidden lg:block w-96">
        <form id="form">
            <div class="w-full px-8 py-12 bg-white">
                <div class="relative overflow-hidden">
                    <div class="show cat">
                        <div class="flex justify-between items-center mb-4">
                            <h1 class="text-xl font-bold">الأقسام</h1>
                            <div class="w-8 h-8 bg-white border-2 border-curious-blue flex items-center justify-center text-curious-blue rounded">
                                <i class="las la-plus text-2xl"></i>
                            </div>
                        </div>
                    </div>
                    <ul class="text-lg group">
                        @foreach ($categories as $category)
                            <li>
                                <label class="cursor-pointer">
                                    <input name="category" value="{{$category->id}}" type="checkbox"
                                    @if (in_array($category->id, $selected_categories))
                                        checked
                                    @endif
                                    class="ml-2 form-checkbox rounded border-curious-blue border-2 text-curious-blue">
                                    {{$category->name}}
                                </label>
                            </li>
                        @endforeach
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
            <div class="w-full px-2 py-2 bg-white mt-2">
                <button class="table py-2 px-12 bg-curious-blue mx-auto text-white" type="submit">تحديث</button>
            </div>
        </form>
    </section>
    <div class="flex-1 mr-8  flex flex-wrap justify-around">
            @foreach ($celebrities as $celebrity )
                <div class="w-72 px-4 py-6 bg-white mb-8">
                    <div class="w-full h-48 bg-black">
                        <img src="{{ $celebrity->image ?? asset('avatars/images/default.png') }}" class="w-full h-full object-cover object-center" alt="">
                    </div>
                    <div class="text-center">
                        <p class="text-lg mt-4">{{$celebrity->name}}</p>
                        <a href="/profile/{{$celebrity->username}}/services">
                            <div class="table py-2 px-12 bg-curious-blue mx-auto mt-4 text-white">طلب اعلان</div>
                        </a>
                    </div>
                </div>
            @endforeach

            <div class="w-72 p-8 mb-8"></div>
            <div class="w-72 p-8 mb-8"></div>
    </div>
</div>
<script>

    let form = document.getElementById('form');
    form.addEventListener('submit', (e) => {
        e.preventDefault();
        let checkedBoxes = document.querySelectorAll("input[type=checkbox]:checked");
        let path = "/celebrities"
        if(checkedBoxes.length > 0)
        {
            path += "?category=" + Array.from(checkedBoxes).map((category) => category.value).join(',');
        }

        return window.location.href = path;

    })

</script>

@endsection


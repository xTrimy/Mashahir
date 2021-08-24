<form class="flex items-center py-4 rounded-md" method="POST">
    @csrf
    @if ($service)
    <input type="hidden" name="service_id" value="{{ $service->id }}">
    @endif
                        <div class="flex w-full flex-wrap">
                            <div class="w-full lg:w-auto lg:flex-1 p-3 md:p-4 lg:p-8 bg-white lg:ml-4 mb-4 shadow-lg rounded-md">
                                @if($errors->any())
                                    {!! implode('', $errors->all('<div class="text-red-500">:message</div>')) !!}
                                @endif
                                <div class="w-full h-96">
                                    <div class="w-full h-full">
                                        <img src="{{ asset('image/placeholders/banner.jpg') }}" class="object-contain object-center w-full h-full" alt="">
                                    </div>
                                </div>
                                    <div class="py-8 ">
                                        
                                        <p class="mb-2 font-semibold text-gray-800">الأسم</p>
                                        <input required type="text" name="name" class="w-full  border-blue-200 border-2 outline-none p-2 mb-3 rounded-sm" value="{{ old('name') ?? $service->name ?? "" }}">

                                        <p class="mb-2 font-semibold text-gray-800">التصنيف</p>
                                        <select required name="category" id="" class="w-full  border-blue-200 border-2 outline-none p-2 mb-3 rounded-sm">
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}" {{ (old('category') == $category->id ? "selected":($service->category_id == $category->id)?"selected":"") }}>{{ $category->name }}</option>
                                            @endforeach
                                        </select>

                                        <p class="mb-2 font-semibold text-gray-800">وصف الخدمة</p>
                                        <textarea required name="description" id="" cols="30" rows="6" class="w-full border-blue-200 border-2 outline-none p-2 mb-3 rounded-sm">{{ old('description') ?? $service->description ?? "" }}</textarea>
                                    
                                        <p class="mb-2 font-semibold text-gray-800">كلمات مفتاحية</p>
                                        <input type="text" name="keywords" class="w-full  border-blue-200 border-2 outline-none p-2 mb-3 rounded-sm" value="{{ old('keywords') ?? $service->keywords ?? "" }}">

                                        <p class="mb-2 font-semibold text-gray-800">مدة التسليم</p>
                                        <div class="flex  mb-3 ">
                                            <input required type="text" oninput="this.value|=0" max="30" min="1" pattern="[0-9]+" name="duration" class="w-12 h-full border-r-2 border-t-2 border-b-2 border-blue-200 outline-none p-2 rounded-sm" value="{{ old('duration') ?? $service->duration ?? "1" }}">
                                            <div class="flex-1 border-l-2 border-t-2 border-b-2 border-blue-200 text-lg flex items-center">أيام</div>
                                        </div>

                                        <p class="mb-2 font-semibold text-gray-800">الأيام المتاحة للعمل</p>
                                        <input type="text" name="days" class="w-full  border-blue-200 border-2 outline-none p-2 mb-3 rounded-sm" value="">

                                        <p class="mb-2 font-semibold text-gray-800">تعليمات للمشتري</p>
                                        <textarea required name="instructions" id="" cols="30" rows="6" class="w-full border-blue-200 border-2 outline-none p-2 mb-3 rounded-sm">{{ old('instructions') ?? $service->instructions ?? "" }}</textarea>
                                    </div>
                                    <hr>
                                    <div class="py-8 mb-5">
                                        <p class="mb-2 font-semibold text-gray-800">اضافة تطويرات للخدمة</p>
                                        <div class="w-full" id="upgrades-container">
                                            @if(old('upgrade') !== null)
                                                @foreach (old('upgrade') as $i=>$upgrade_title)
                                                <div class="w-full">
                                                    <div onclick="this.parentElement.remove()" class="remove mb-1 table py-1 text-sm float-left cursor-pointer px-4 border border-red-700 text-red-700 bg-white hover:bg-red-700 hover:text-white transition-colors">
                                                        <i class="las la-trash-alt"></i>
                                                        <span>حذف</span>
                                                    </div>
                                                    <input type="text" required name="upgrade[]" class="w-full  border-blue-200 border-2 outline-none p-2 mb-3 rounded-sm" value="{{ $upgrade_title }}">
                                                    <div class="flex">
                                                        
                                                        <select type="text" required name="upgrade_duration[]" class="w-full  border-blue-200 border-2 outline-none p-2 mb-3 rounded-sm flex-1 ml-3">
                                                            <option value="0" {{ old('upgrade_duration.'.$i) == "0"?"selected":"" }} >لن يزيد من مدة التنفيذ</option>
                                                            <option value="1" {{ old('upgrade_duration.'.$i) == "1"?"selected":"" }}>سيزيد من مدة التنفيذ يوم واحد</option>
                                                            <option value="2" {{ old('upgrade_duration.'.$i) == "2"?"selected":"" }}>سيزيد من مدة التنفيذ يومان </option>
                                                            <option value="3" {{ old('upgrade_duration.'.$i) == "3"?"selected":"" }}>سيزيد من مدة التنفيذ 3 أيام </option>
                                                            <option value="7" {{ old('upgrade_duration.'.$i) == "7"?"selected":"" }}>سيزيد من مدة التنفيذ 7 أيام </option>
                                                            <option value="10" {{ old('upgrade_duration.'.$i) == "10"?"selected":"" }}>سيزيد من مدة التنفيذ 10 أيام </option>
                                                            <option value="14" {{ old('upgrade_duration.'.$i) == "14"?"selected":"" }}>سيزيد من مدة التنفيذ 14 يوم </option>
                                                        </select>
                                                        <select type="text" required name="upgrade_price[]" class="w-full  border-blue-200 border-2 outline-none p-2 mb-3 rounded-sm flex-1">
                                                            <option value="10" {{ old('upgrade_price.'.$i) == "10"?"selected":"" }}>10$</option>
                                                            <option value="25" {{ old('upgrade_price.'.$i) == "25"?"selected":"" }}>25$</option>
                                                            <option value="50" {{ old('upgrade_price.'.$i) == "50"?"selected":"" }}>50$</option>
                                                            <option value="100" {{ old('upgrade_price.'.$i) == "100"?"selected":"" }}>100$</option>
                                                            <option value="200" {{ old('upgrade_price.'.$i) == "200"?"selected":"" }}>200$</option>
                                                            <option value="500" {{ old('upgrade_price.'.$i) == "500"?"selected":"" }}>500$</option>
                                                            <option value="1000" {{ old('upgrade_price.'.$i) == "1000"?"selected":"" }}>1000$</option>
                                                            <option value="2500" {{ old('upgrade_price.'.$i) == "2500"?"selected":"" }}>2500$</option>
                                                            <option value="5000" {{ old('upgrade_price.'.$i) == "5000"?"selected":"" }}>5000$</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                @endforeach
                                            @else
                                                @foreach ($service->upgrades as $upgrade)
                                                <div class="w-full">
                                                    <div onclick="this.parentElement.remove()" class="remove mb-1 table py-1 text-sm float-left cursor-pointer px-4 border border-red-700 text-red-700 bg-white hover:bg-red-700 hover:text-white transition-colors">
                                                        <i class="las la-trash-alt"></i>
                                                        <span>حذف</span>
                                                    </div>
                                                    <input type="text" required name="upgrade[]" class="w-full  border-blue-200 border-2 outline-none p-2 mb-3 rounded-sm" value="{{ $upgrade->title }}">
                                                    <div class="flex">
                                                        
                                                        <select type="text" required name="upgrade_duration[]" class="w-full  border-blue-200 border-2 outline-none p-2 mb-3 rounded-sm flex-1 ml-3">
                                                            <option value="0" {{ $upgrade->duration == "0"?"selected":"" }} >لن يزيد من مدة التنفيذ</option>
                                                            <option value="1" {{ $upgrade->duration == "1"?"selected":"" }}>سيزيد من مدة التنفيذ يوم واحد</option>
                                                            <option value="2" {{ $upgrade->duration == "2"?"selected":"" }}>سيزيد من مدة التنفيذ يومان </option>
                                                            <option value="3" {{ $upgrade->duration == "3"?"selected":"" }}>سيزيد من مدة التنفيذ 3 أيام </option>
                                                            <option value="7" {{ $upgrade->duration == "7"?"selected":"" }}>سيزيد من مدة التنفيذ 7 أيام </option>
                                                            <option value="10" {{ $upgrade->duration == "10"?"selected":"" }}>سيزيد من مدة التنفيذ 10 أيام </option>
                                                            <option value="14" {{ $upgrade->duration == "14"?"selected":"" }}>سيزيد من مدة التنفيذ 14 يوم </option>
                                                        </select>
                                                        <select type="text" required name="upgrade_price[]" class="w-full  border-blue-200 border-2 outline-none p-2 mb-3 rounded-sm flex-1">
                                                            <option value="10" {{ $upgrade->price == "10"?"selected":"" }}>10$</option>
                                                            <option value="25" {{ $upgrade->price == "25"?"selected":"" }}>25$</option>
                                                            <option value="50" {{ $upgrade->price == "50"?"selected":"" }}>50$</option>
                                                            <option value="100" {{ $upgrade->price == "100"?"selected":"" }}>100$</option>
                                                            <option value="200" {{ $upgrade->price == "200"?"selected":"" }}>200$</option>
                                                            <option value="500" {{ $upgrade->price == "500"?"selected":"" }}>500$</option>
                                                            <option value="1000" {{ $upgrade->price == "1000"?"selected":"" }}>1000$</option>
                                                            <option value="2500" {{ $upgrade->price == "2500"?"selected":"" }}>2500$</option>
                                                            <option value="5000" {{ $upgrade->price == "5000"?"selected":"" }}>5000$</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                @endforeach
                                            @endif                                            
                                        </div>
                                        <div class="w-full" id="upgrades-clone">
                                            <div class="remove mb-1 table py-1 text-sm float-left cursor-pointer px-4 border border-red-700 text-red-700 bg-white hover:bg-red-700 hover:text-white transition-colors">
                                                <i class="las la-trash-alt"></i>
                                                <span>حذف</span>
                                            </div>
                                            <input type="text" required name="upgrade[]" class="w-full  border-blue-200 border-2 outline-none p-2 mb-3 rounded-sm" value="">
                                            <div class="flex">
                                                <select type="text" required name="upgrade_duration[]" class="w-full  border-blue-200 border-2 outline-none p-2 mb-3 rounded-sm flex-1 ml-3">
                                                    <option value="0" selected>لن يزيد من مدة التنفيذ</option>
                                                    <option value="1" >سيزيد من مدة التنفيذ يوم واحد</option>
                                                    <option value="2" >سيزيد من مدة التنفيذ يومان </option>
                                                    <option value="3" >سيزيد من مدة التنفيذ 3 أيام </option>
                                                    <option value="7" >سيزيد من مدة التنفيذ 7 أيام </option>
                                                    <option value="10" >سيزيد من مدة التنفيذ 10 أيام </option>
                                                    <option value="14" >سيزيد من مدة التنفيذ 14 يوم </option>
                                                </select>
                                                <select type="text" required name="upgrade_price[]" class="w-full  border-blue-200 border-2 outline-none p-2 mb-3 rounded-sm flex-1">
                                                    <option value="10" selected>10$</option>
                                                    <option value="25" >25$</option>
                                                    <option value="50" >50$</option>
                                                    <option value="100" >100$</option>
                                                    <option value="200" >200$</option>
                                                    <option value="500" >500$</option>
                                                    <option value="1000" >1000$</option>
                                                    <option value="2500" >2500$</option>
                                                    <option value="5000" >5000$</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div id="upgrades-add" class="table px-12 py-2 bg-curious-blue text-white text-lg float-left cursor-pointer"> اضافة تطوير جديد </div>
                                    </div>
                                    <hr>
                                    <div class="py-8">
                                        <p class="mb-2 font-semibold text-gray-800">حالة الخدمة</p>
                                        <select name="status" id="" class="w-full  border-blue-200 border-2 outline-none p-2 mb-3 rounded-sm">
                                            <option value="1" selected>تعمل</option>
                                            <option value="0" >تعطيل</option>
                                        </select>
                                    </div>
                                    <div class="w-full mt-8 flex justify-between">
                                        {{-- <div class="table px-12 py-2 bg-curious-blue text-white text-lg cursor-pointer"> حفظ التعديلات </div> --}}
                                        <button type="submit" class="table px-12 py-2 bg-curious-blue text-white text-lg cursor-pointer"> حفظ  </button>
                                        {{-- <div class="table px-12 py-2 bg-white text-red-800 border-2 border-red-800 text-lg font-bold cursor-pointer">احذف هذه الخدمة</div> --}}
                                    </div>
                            </div>
                            <div class="w-full lg:w-64 mb-4 text-curious-blue-900">
                                <div class="w-full bg-white py-8 shadow-lg rounded-md mb-8">
                                    <h2 class="text-xl text-center mb-8">تقييم الخدمة</h2>
                                    <hr>
                                    <div class="px-8 mt-8 font-bold">
                                        <div class="relative group flex w-full justify-center flex-row-reverse text-2xl text-yellow-400">
                                            <div class="absolute opacity-60 transition-all text-sm hidden group-hover:block -right-4 px-4 py-1 bg-black text-white">
                                                3.5
                                            </div>
                                            <i class="las la-star"></i>
                                            <i class="las la-star"></i>
                                            <i class="las la-star"></i>
                                            <i class="las la-star"></i>
                                            <i class="las la-star"></i>
                                        </div>
                                        <div class="flex justify-center mt-4 ">
                                            <div class="ml-4">
                                                <i class="fas fa-thumbs-up"></i>
                                                <span class="">100%</span>
                                            </div>
                                            <div>
                                                <i class="fas fa-thumbs-down"></i>
                                                <span class="">0%</span>
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
                                                <span>2 طلبات جاري تنفيذها</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    

                                <div class="w-full bg-white py-8 shadow-lg rounded-md">
                                    <h2 class="text-xl text-center mb-8">شارك الخدمة</h2>
                                    <hr>
                                    <div class="px-8 mt-8 font-bold">
                                        <div class="flex mb-2">
                                            <div class="bg-curious-blue px-3 py-2 ml-1 rounded-sm">
                                                <i class="fab fa-twitter text-white"></i>
                                            </div>
                                            <div class="bg-curious-blue px-3 py-2 w-full text-center text-white rounded-sm">
                                                شارك
                                            </div>
                                        </div>

                                        <div class="flex mb-2">
                                            <div class="bg-curious-blue px-3 py-2 ml-1 rounded-sm">
                                                <i class="fab fa-facebook text-white"></i>
                                            </div>
                                            <div class="bg-curious-blue px-3 py-2 w-full text-center text-white rounded-sm">
                                                شارك
                                            </div>
                                        </div>

                                        <div class="flex mb-2">
                                            <div class="bg-curious-blue px-3 py-2 ml-1 rounded-sm">
                                                <i class="fab fa-linkedin-in text-white"></i>
                                            </div>
                                            <div class="bg-curious-blue px-3 py-2 w-full text-center text-white rounded-sm">
                                                شارك
                                            </div>
                                        </div>

                                        <div class="flex mb-2">
                                            <div class="bg-curious-blue px-3 py-2 ml-1 rounded-sm">
                                                <i class="fab fa-instagram text-white"></i>
                                            </div>
                                            <div class="bg-curious-blue px-3 py-2 w-full text-center text-white rounded-sm">
                                                شارك
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                    <script>
                        
                        var upgrades_element = document.getElementById('upgrades-clone');
                        var upgrades_container = document.getElementById('upgrades-container');
                        var upgrades_clone = upgrades_element.cloneNode(true);
                        var upgrades_add_button = document.getElementById('upgrades-add');
                        upgrades_element.remove();
                        console.log(upgrades_clone);
                        upgrades_add_button.addEventListener('click',function(){
                            let clone = upgrades_clone.cloneNode(true);
                            upgrades_container.appendChild(clone);
                            clone.querySelector('.remove').addEventListener('click',function(){
                                clone.remove();
                            })
                        });
                    </script>
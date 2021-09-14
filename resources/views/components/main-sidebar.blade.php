<div id="main-sidebar" class="overflow-y-auto transform translate-x-full transition-transform h-screen top-0 fixed right-0 w-64 bg-white z-50">
        <div class="w-full h-full py-24 text-right">
            <a href="#">
                <div class="py-4 border-b border-t hover:bg-gray-100 px-8">
                <i class="fas la-folder-open"></i>
                أعلاناتي 
                </div>
            </a>
            <a href="#">
                <div class="py-4 border-b border-t hover:bg-gray-100 px-8">
                <i class="fas la-shopping-cart"></i>
                المشتريات
                </div>
            </a>
            <a href="#">
                <div class="py-4 border-b border-t hover:bg-gray-100 px-8">
                <i class="fas la-cubes"></i>
                التصنيفات
                </div>
            </a>
            <a href="#">
                <div class="py-4 border-b border-t hover:bg-gray-100 px-8">
                <i class="fas la-user"></i>
                أبحث عن خدمة
                </div>
            </a>
            <a href="#">
                <div class="py-4 border-b border-t hover:bg-gray-100 px-8">
                اعلانات المشاهير
                </div>
            </a>
            <a href="#">
                <div class="py-4 border-b border-t hover:bg-gray-100 px-8">
                تسويق الكتروني
                </div>
            </a>
            <a href="#">
                <div class="py-4 border-b border-t hover:bg-gray-100 px-8">
                الدعم الفني
                </div>
            </a>
            <div class="mt-12"></div>
            <a href="{{ route('dashboard.main') }}">
                <div class="py-4 border-b border-t hover:bg-gray-100 px-8">
                <i class="fas la-user-cog"></i>
                لوحة التحكم
                </div>
            </a>
        </div>
    </div>
    <script>
        var main_sidebar = $("#main-sidebar");
        var main_sidebar_open = $("#main-sidebar-open");
        main_sidebar_open.click(function(e){
            console.log(e.target);
            if(e.target.closest('#main-sidebar')!=main_sidebar[0])
            main_sidebar.removeClass('translate-x-full')
        });

        $('body').click(function(e){
            if(e.target.closest('#main-sidebar')!=main_sidebar[0])
            if(e.target != main_sidebar && e.target != main_sidebar_open && e.target != main_sidebar_open.children()[0]){
                main_sidebar.addClass('translate-x-full');
            }
        })

    </script>
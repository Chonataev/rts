<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ URL::asset('css/dashboard.css') }}">


</head>
<body>
@include('components.loader')

<div class="admin_dashboard">
    <div class="top_menu">
        <div class="logo">
            <div class="logo_img">
                <img style="width: 1.63625rem" src="{{ URL::asset('images/icons/home-5-512.png') }}" alt="">
            </div>
            <div class="logo_text">Lyceum</div>
        </div>
        <div class="top_nav">
            <div class="top_nav_link">
                <div class="my_profile_link">
                    <a href="/profile">
                        <img class="my_profile_link_image" src="{{ URL::asset('images/icons/user.png') }}" alt="">
                    </a>
                </div>
                <div class="sing_out_link">
                    <a href="/logout">
                        <img class="my_profile_link_image" src="{{ URL::asset('images/icons/account-logout-xxl.png') }}" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="left_menu">
        <div class="navbar">
            <div class="menu_item">
                <div class="side__link_img"><img style="width: 1.63625rem" src="{{ URL::asset('images/icons/teacher-xxl.png') }}" alt=""></div>
                <a href="/admin/teachers" class="menu_link">Teachers</a>
            </div>

            <div class="menu_item">
                <div class="side__link_img"><img style="width: 1.63625rem" src="{{ URL::asset('images/icons/student-xxl.png') }}" alt=""></div>
                <a href="/admin/students" class="menu_link">Students</a>
            </div>

            <div class="menu_item">
                <div class="side__link_img"><img style="width: 1.63625rem" src="{{ URL::asset('images/icons/books-xxl.png') }}" alt=""></div>
                <a href="/admin/lessons" class="menu_link">Lessons</a>
            </div>

            <div class="menu_item">
                <div class="side__link_img"><img style="width: 1.63625rem" src="{{ URL::asset('images/icons/rating-xxl.png') }}" alt=""></div>
                <a href="/admin/grades" class="menu_link">Grades</a>
            </div>


            <div class="menu_item">
                <div class="side__link_img"><img style="width: 1.63625rem" src="{{ URL::asset('images/icons/rating-xxl.png') }}" alt=""></div>
                <a href="/admin/classes" class="menu_link">Classes</a>
            </div>

            <div class="menu_item">
                <div class="side__link_img"><img style="width: 1.63625rem" src="{{ URL::asset('images/icons/newspaper-xxl.png') }}" alt=""></div>
                <a href="/admin/news" class="menu_link">News</a>
            </div>

            <div class="menu_item">
                <div class="side__link_img"><img style="width: 1.63625rem" src="{{ URL::asset('images/icons/image-xxl.png') }}" alt=""></div>
                <a href="/admin/gallery" class="menu_link">Gallery</a>
            </div>
        </div>
    </div>

    <div style="padding-top: 4em; padding-left: 200px">

        @if($errors->any())
            <div class="error_message" style="position: absolute; float: right; width: calc(100% - 200px); padding-top: 5em">
               <div class="alert alert-danger" role="alert">
                   {{$errors->first()}}
                </div>
            </div>
        @endif
        @yield('content')
    </div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
    if($('.error_message').length){
        setTimeout(function(){
            $('.error_message').hide();
        }, 5000);
    }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"
      integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw=="
      crossorigin="anonymous" referrerpolicy="no-referrer"
/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"
        integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
</script>
</body>
</html>

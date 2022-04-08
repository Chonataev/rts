
<div class="menu">
    <div class="adapting_menu">
        <div class="burger">
            <img src="resources/images/logo.png" width="50px" alt="logo">
        </div>
        <div class="wrapper-menu">
            <div class="line-menu half start"></div>
            <div class="line-menu"></div>
            <div class="line-menu half end"></div>
        </div>
    </div>
    <div class="intoMenu">
        <div class="menuLinks">
            <img src="../../images/logo.png" width="70px" height="50px" alt="logo">
        </div>
        @if (auth()->check())
            @if (auth()->user()->isAdmin())
                <div><a class="menuLinks" href="/">Main</a></div>
                <div><a class="menuLinks" href="/about-us">About-us</a></div>
                <div><a class="menuLinks" href="/news">News</a></div>
                <div><a class="menuLinks" href="/gallery">Gallery</a></div>
                <div><a class="menuLinks" href="/info">Info</a></div>
                <div><a class="menuLinks" href="/contacts">Contacts</a></div>
                <div><a class="menuLinks" href="/profile">Profile</a></div>
                <div><a class="menuLinks" href="/dashboard">Dashboard</a></div>
                <div><a class="menuLinks" href="/logout">Logout</a></div>
            @else

                <div><a class="menuLinks" href="/">Main</a></div>
                <div><a class="menuLinks" href="/about-us">About-us</a></div>
                <div><a class="menuLinks" href="/news">News</a></div>
                <div><a class="menuLinks" href="/gallery">Gallery</a></div>
                <div><a class="menuLinks" href="/info">Info</a></div>
                <div><a class="menuLinks" href="/contacts">Contacts</a></div>
                <div><a class="menuLinks" href="/profile">Profile</a></div>
                <div><a class="menuLinks" href="/logout">Logout</a></div>
            @endif
        @else
            <div><a class="menuLinks" href="/">Main</a></div>
            <div><a class="menuLinks" href="/about-us">About-us</a></div>
            <div><a class="menuLinks" href="/news">News</a></div>
            <div><a class="menuLinks" href="/gallery">Gallery</a></div>
            <div><a class="menuLinks" href="/info">Info</a></div>
            <div><a class="menuLinks" href="/contacts">Contacts</a></div>
            <div><a class="menuLinks" href="/login">Login</a></div>
        @endif
    </div>
</div>

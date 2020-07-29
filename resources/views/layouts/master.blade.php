<html>
    <head>
        <title>librarySystem - @yield('title')</title>
    </head>
    <body>
        <div class="mainTitle">
            <h1>librarySystem</h1>
        </div>
        <div class="links">
            <a href="/">Welcome</a>
            <a href="/books">Book Store</a>
            <a href="/about">About</a>
        </div>
        <div class="header">
            @yield('subhead')
        </div>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
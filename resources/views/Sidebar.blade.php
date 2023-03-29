<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="/Sidebar.css" rel="stylesheet" />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
            crossorigin="anonymous"
        />
        <link
            href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
            rel="stylesheet"
        />
    </head>
    <body>
        <div class="sidebar">
            <div class="logo">
                <a href="/"
                    ><img src="/image/bakground/logo.png" alt=""
                /></a>
            </div>
            <ul class="nav-links">
                <li>
                    <a href="/">
                        <i class="bx bx-home-alt"></i>
                        <span class="link_name">Home</span>
                    </a>
                </li>
                <li>
                    <a href="/Cart">
                        <i class="bx bx-cart-alt"></i>
                        <span class="link_name">Cart</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bx bx-grid-alt"></i>
                        <span class="link_name">Category</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bx bx-chat"></i>
                        <span class="link_name">Forum</span>
                    </a>
                </li>
            </ul>
            @auth
            <div class="sidebar-bottom">
                <ul class="nav-links">
                    <li>
                        <a href="/logout">
                            <i class="bx bx-log-out"></i>
                            <span class="link_name">Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
            @endauth
        </div>

        <div class="content">
            @yield('content')
        </div>
    </body>
</html>

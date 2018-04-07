    <!-- Default Bootstrap Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Laravel Blog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="{{ Request::is('/') ? "active" : ""}}">
                    <a class="nav-link" href="/">Home </a>
                </li>
                <li class="{{ Request::is('blog') ? "active" : ""}}">
                    <a class="nav-link" href="/blog">Blog </a>
                </li>
                <li class="{{ Request::is('about') ? "active" : ""}}">
                    <a class="nav-link" href="/about">About </a>
                </li>
                
                <li class="{{ Request::is('contact') ? "active" : ""}}">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Account<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('posts.index') }}">Posts</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
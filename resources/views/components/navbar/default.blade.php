<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light navbar-stick-dark" data-navbar="fixed">
    <div class="container">

        <div class="navbar-left">
            <button class="navbar-toggler" type="button">&#9776;</button>
            <a class="navbar-brand" href="{{ url('/') }}">
                <img class="logo-dark" src="{{ Loyep::asset('img/logo/bootstrap-solid.png') }}" alt="logo">
                <img class="logo-light" src="{{ Loyep::asset('img/logo/bootstrap-punchout.png') }}" alt="logo">
            </a>
        </div>

        <section class="navbar-mobile">
            <nav class="nav nav-navbar ml-auto">
                <a class="nav-link active" href="{{ url('/') }}">首页</a>
                <a class="nav-link" href="{{ route('post.index') }}">归档</a>
                <a class="nav-link" href="{{ route('category.index') }}">分类</a>
                <a class="nav-link" href="{{ route('tag.index') }}">标签</a>
                <a class="nav-link" href="#">相册</a>
                <a class="nav-link" href="#">关于</a>
            </nav>
        </section>

    </div>
</nav>
<!-- /.navbar -->
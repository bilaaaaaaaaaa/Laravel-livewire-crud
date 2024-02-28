<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">{{__('Crud')}}</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">{{__('Home')}}</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{__('Post')}}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{url('post/add')}}">{{__('Tambah Post')}}</a></li>
            <li><a class="dropdown-item" href="{{url('post/list')}}">{{__('Data Post')}}</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('post/artikel')}}">{{_('Artikel')}}</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="a" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Wellcome back, {{ auth()->user()->name }}
          </a>

          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/post/dashboard"> <i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a><li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="/post/logout" method="post">
                @csrf 
                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>Logout</button>
                </form>
              </li>
          </ul>
        </li>
        @else
      <li class="nav-item justify-content-end">
        <a class="nav-link active" aria-current="page" href="{{ url('post/login')}}"><i class="bi bi-box-arrow-right"></i>{{__('Login')}}</a>
      </li>
      @endauth
      {{-- <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> --}}
    </div>
  </div>
</nav>
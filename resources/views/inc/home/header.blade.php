<header class="navbar-header">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand ml-5" href="{{ url ('/') }}">
    <img src="{{ asset ('img/wmsu.png') }}" width="37" height="37" class="d-inline-block align-center" role="img" loading="lazy" title="Western Mindanao State University">    
        {{config('app.name','Laravel')}}    
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mx-4">
            <li class="nav-item active">
                <a class="nav-link" href="{{ url ('/') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url ('/about') }}">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url ('/posts') }}">Blog</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            @include('inc.home.login_modal')
            <button type="button" class="btn btn-primary mr-3 ml-sm-0" data-toggle="modal" data-target="#modalLogin">login</button>
        </form>
  </div>
</nav> 
</header>
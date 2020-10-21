<?php 
use App\Http\Controllers\ProductController;
$cartTotal = 0;
if(Session::has('user')) {
  $cartTotal = ProductController::cartItem();
}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">(Your Name Here)</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/myorders">Orders</a>
      </li>    
    </ul>
    <ul class="navbar-nav navbar-right">
      <li>
        <a href="/cartlist">Cart({{$cartTotal}})</a>
      </li>    
    </ul>
    <form action="/search" class="form-inline navbar-form navbar-left">
      <input name="query" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <ul class="navbar-nav navbar-right">
      @if(Session::has('user'))
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{Session::get('user')['name']}}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="/logout">Log out</a>
        </div>
      </li>
      @else 
      <li><a href="/login">Login</a></li>
      <li><a href="/register">Register</a></li>
      @endif
    </ul>
  </div>
</nav>
<?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
  $total= ProductController::cartItem();
}

?>
<nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="Admin/admin">E-Comm</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="/"><i class="fa-solid fa-shop"></i> Home</a></li>
          @if(Session::has('user'))
          <li><a href="/myorders"><i class="fa-solid fa-truck"></i> Orders</a></li>
          @else
          @endif
        </ul>
        <form action="/search" class="navbar-form navbar-left">
          <div class="form-group">
            <input type="text" name="query" class="form-control search-box" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default"> <i class="fa-brands fa-searchengin"></i> Search</button>
        </form>
        <ul class="nav navbar-nav navbar-right">
          @if(Session::has('user'))
          <li><a href="/cartlist"><i class="fa-solid fa-cart-arrow-down fa-beat-fade" style="--fa-beat-fade-opacity: 0.67; --fa-beat-fade-scale: 1.075;"></i>cart({{$total}})</a></li>
          @else
          <li><a href="/login"><i class="fa-solid fa-cart-arrow-down"></i>cart({{$total}})</a></li>
          @endif
          @if(Session::has('user'))
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa-solid fa-user fa-flip" style="--fa-animation-duration: 3s;"></i> {{Session::get('user')['name']}}
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="/logout"><i class="fa-solid fa-right-from-bracket fa-shake"></i> Logout</a></li>
            </ul>
          </li>
          @else
          <li><a href="/login"><i class="fa-solid fa-right-to-bracket"></i> Login</a></li>
          @endif
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

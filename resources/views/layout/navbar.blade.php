<nav class="nav navbar-expand-md  bg-dark sticky-top">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsing">
    <span class="text-success"><i class='fa fa-arrow-circle-down'></i></span>
</button>
<a class="navbar-brand mt-1 ml-2" href="/"><img src='{{asset("img/logo.png")}}' height="40px" width="45px"></a>
    <div class="collapse navbar-collapse" id="collapsing">
          <div class=" dropdown " style="border-left:1px solid white">
            <a class="nav-link dropdown-toggle  text-success " href="#" id="navbardrop" data-toggle="dropdown">
              Gaming Gear
            </a>
            <div class="dropdown-menu bg-dark">
              <a class="dropdown-item text-success nav-link" href="/category/keyboard">KeyBoard</a>
              <a class="dropdown-item text-success nav-link" href="/category/mouse">Mouse</a>
              <a class="dropdown-item text-success nav-link" href="/category/mousepad">MousePad</a>
              <a class="dropdown-item text-success nav-link" href="/category/headphone">HeadPhone</a>
            </div>
          </div>
          <span class="nav-link text-success" style="border-left:1px solid white"><i class = "fa fa-envelope-square"></i> gaminggear@gmail.com</span>   
        <span class="nav-link text-success" style="border-left:1px solid white"><i class = "fa fa-phone"></i> +977-9861167885</span>     
    </div>
        @if(Auth::check())	
        <span class ="text-white large mt-2">
            {{ Auth::user()->username}} 
          </span>
        <a href="/logout" class="nav-link text-success">Logout</a>
        
				@else
				<a href="/login" class="nav-link text-success mt-1 mr-2" ><i class="fa fa-sign-in">&nbsp;Login</i></a>
				@endif

</nav>



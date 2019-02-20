
<nav class="navbar bg-dark p-0">
        <a class="navbar-brand ml-3" href="/adminpanel"><img src='{{asset("img/logo.png")}}' height="30px" width="40px">
        </a>
        <div class="navbar p-0 pr-1">
            <span class ="large text-white ">
                {{ Auth::user()->username}} 
            </span>
           <a class="nav-link text-white" href="/logout">Sign out</a>
        </div>
</nav>
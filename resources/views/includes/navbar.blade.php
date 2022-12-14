 <!-- Header-->
 <header id="header" class="header">
     <div class="top-left">
         <div class="navbar-header">
             <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
             <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
             <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
         </div>
     </div>
     <div class="top-right">
         <div class="header-menu">

             <div class="user-area dropdown float-right">
                 <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true"
                     aria-expanded="false">
                     <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                 </a>

                 {{-- <div class="user-menu dropdown-menu">
                     <a class="nav-link" href=""><i class="fa fa-power -off"></i>Logout</a>
                 </div> --}}

                 <form method="POST" action="{{ route('logout') }}">
                     @csrf

                     <div class="user-menu dropdown-menu">
                         <x-dropdown-link :href="route('logout')"
                             onclick="event.preventDefault(); this.closest('form').submit();">
                             {{ __('Log Out') }}
                         </x-dropdown-link>
                     </div>

                 </form>
             </div>

         </div>
     </div>
 </header>
 <!-- /#header -->

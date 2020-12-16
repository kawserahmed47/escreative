  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('dashboard')}}" class="brand-link">
      {{-- <img src="{{asset('public/backend/dist')}}/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8"> --}}
      <span class="brand-text font-weight-light">ES Creative 工業株式会社</span>
    </a>

    <!-- Sidebar -->


<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('public/backend/dist')}}/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a class="d-block"> {{ Auth::user()->name }}</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview @if($menu == 'Dashboard') menu-open @endif ">
          <a href="{{route('dashboard')}}" class="nav-link  @if($menu == 'Dashboard') active @endif">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>

              Dashboard
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
        </li>



        {{-- Slider --}}
        <li class="nav-item has-treeview @if($menu=='Slider') menu-open @endif ">

          <a href="#" class="nav-link @if($menu=='Slider') active @endif">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Slider
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>

          <ul class="nav nav-treeview">
            <li class="nav-item">
            <a href="{{url('/slider/create')}}" class="nav-link @if($submenu=='Create-Slider') active @endif ">
                <i class="far fa-circle nav-icon"></i>
                <p>Create</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{url('/slider')}}" class="nav-link @if($submenu=='View-Slider') active @endif">
                <i class="far fa-circle nav-icon"></i>
                <p>View</p>
              </a>
            </li>
          </ul>

        </li>
        

        {{-- About --}}
        <li class="nav-item has-treeview @if($menu=='About') menu-open @endif">

          <a href="#" class="nav-link @if($menu=='About') active @endif">
            <i class="nav-icon fas fa-book"></i>
            <p>
              About
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>

          <ul class="nav nav-treeview">
            {{-- <li class="nav-item">
            <a href="{{url('/about/create')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Create</p>
              </a>
            </li> --}}

            <li class="nav-item">
              <a href="{{url('/about')}}" class="nav-link @if($submenu=='View-About') active @endif">
                <i class="far fa-circle nav-icon"></i>
                <p>View</p>
              </a>
            </li>

          </ul>
          
        </li>


        
        {{-- Services --}}
        <li class="nav-item has-treeview @if($menu=='Service') menu-open @endif">

          <a href="#" class="nav-link @if($menu=='Service') active @endif">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Services
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>

          <ul class="nav nav-treeview">
            <li class="nav-item">
            <a href="{{url('/service/create')}}" class="nav-link @if($submenu=='Create-Service') active @endif">
                <i class="far fa-circle nav-icon"></i>
                <p>Create</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{url('/service')}}" class="nav-link @if($submenu=='View-Service') active @endif">
                <i class="far fa-circle nav-icon"></i>
                <p>View</p>
              </a>
            </li>
          </ul>

        </li>

      

        {{--Recent Project --}}
        <li class="nav-item has-treeview @if($menu=='Project') menu-open @endif">

            <a href="#" class="nav-link @if($menu=='Project') active @endif">
              <i class="nav-icon fas fa-book"></i>
              <p>
                 Project
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
  
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="{{url('/project/create')}}" class="nav-link @if($submenu=='Create-Project') active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create</p>
                </a>
              </li>
  
              <li class="nav-item">
              <a href="{{url('/project')}}" class="nav-link @if($submenu=='View-Project') active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View</p>
                </a>
              </li>
            </ul>
  
        </li>
  
        
        {{--Latest Blog --}}
        <li class="nav-item has-treeview @if($menu=='News') menu-open @endif">

            <a href="#" class="nav-link @if($menu=='News') active @endif">
              <i class="nav-icon fas fa-book"></i>
              <p>
                News
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
  
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="{{route('news.create')}}" class="nav-link @if($submenu=='Create-News') active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create</p>
                </a>
              </li>
  
              <li class="nav-item">
              <a href="{{url('/news')}}" class="nav-link @if($submenu=='View-News') active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View</p>
                </a>
              </li>
            </ul>
  
        </li>

        {{--Gallery--}}
        <li class="nav-item has-treeview @if($menu=='Gallery') menu-open @endif">

            <a href="#" class="nav-link @if($menu=='Gallery') active @endif">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Gallery
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
  
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="{{route('gallery.create')}}" class="nav-link @if($submenu=='Create-Gallery') active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create</p>
                </a>
              </li>
  
              <li class="nav-item">
              <a href="{{route('gallery.index')}}" class="nav-link @if($submenu=='View-Gallery') active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View</p>
                </a>
              </li>
            </ul>
  
        </li>

        {{--Testimonial --}}
        <li class="nav-item has-treeview @if($menu=='Testimonial') menu-open @endif">

          <a href="#" class="nav-link @if($menu=='Testimonial') active @endif">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Testimonial
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>

          <ul class="nav nav-treeview">
            <li class="nav-item">
            <a href="{{route('testimonial.create')}}" class="nav-link @if($submenu=='Create-Testimonial') active @endif">
                <i class="far fa-circle nav-icon"></i>
                <p>Create</p>
              </a>
            </li>

            <li class="nav-item">
            <a href="{{route('testimonial.index')}}" class="nav-link @if($submenu=='View-Testimonial') active @endif">
                <i class="far fa-circle nav-icon"></i>
                <p>View</p>
              </a>
            </li>
          </ul>

        </li>

        {{--FAQ --}}
        <li class="nav-item has-treeview @if($menu=='Faq') menu-open @endif">

          <a href="#" class="nav-link @if($menu=='Faq') active @endif">
            <i class="nav-icon fas fa-book"></i>
            <p>
              FAQ
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>

          <ul class="nav nav-treeview">
            <li class="nav-item">
            <a href="{{route('faq.create')}}" class="nav-link @if($submenu=='Create-Faq') active @endif">
                <i class="far fa-circle nav-icon"></i>
                <p>Create</p>
              </a>
            </li>

            <li class="nav-item">
            <a href="{{route('faq.index')}}" class="nav-link @if($submenu=='View-Faq') active @endif">
                <i class="far fa-circle nav-icon"></i>
                <p>View</p>
              </a>
            </li>
          </ul>

        </li>

        {{-- Message --}}
        <li class="nav-item has-treeview @if($menu=='Message') menu-open @endif">
 
          <a href="#" class="nav-link @if($menu=='Message') active @endif">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Message
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>

          <ul class="nav nav-treeview">
            <li class="nav-item">
            <a href="{{url('/quotation')}}" class="nav-link @if($submenu=='Quotation') active @endif">
                <i class="far fa-circle nav-icon"></i>
                <p>Quotaion</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{url('/contact')}}" class="nav-link @if($submenu=='Contact') active @endif">
                <i class="far fa-circle nav-icon"></i>
                <p>Contact</p>
              </a>
            </li>
          </ul>

        </li>

        {{-- Admin --}}
        <li class="nav-item has-treeview @if($menu=='Admin') menu-open @endif">

          <a href="#" class="nav-link @if($menu=='Admin') active @endif">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Admin
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>

          <ul class="nav nav-treeview">
            {{-- <li class="nav-item">
            <a href="{{ route('register') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Register</p>
              </a>
            </li> --}}

            <li class="nav-item">
              <a href="{{url('/admin')}}" class="nav-link @if($submenu=='View-Admin') active @endif">
                <i class="far fa-circle nav-icon"></i>
                <p>List</p>
              </a>
            </li>
          </ul>

        </li>
        
        
        {{-- Login/Logout --}}
        <li class="nav-item">
          {{-- <a href="#" class="nav-link">
            <i class="nav-icon far fa-circle text-info"></i>
            <p>Login/Logout</p>
          </a> --}}


          <a  class="nav-link" href="{{ route('logout') }}"
          onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
            <i class="nav-icon far fa-circle text-info"></i> {{ __('Logout') }}
          </a>

       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
           @csrf
       </form>
        </li>


      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>


    <!-- /.sidebar -->
</aside>
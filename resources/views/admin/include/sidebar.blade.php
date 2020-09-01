<div class="navbar nav_title" style="border: 0;">
  <a href="index.html" class="site_title"><i class="fa fa-user"></i> <span>ADMIN PANEL</span></a>
</div>

<div class="clearfix"></div>

<!-- menu profile quick info -->
<div class="profile clearfix">
  <div class="profile_pic">
    <img src="{{asset('public/admin_asset/images/img.jpg')}}" alt="..." class="img-circle profile_img">
  </div>
  <div class="profile_info">
    <span>Welcome,</span>
    <h2>{{{ Auth::user()->name}}}</h2>
  </div>
</div>
<!-- /menu profile quick info -->

<br />
<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
    <h3>General</h3>
    <ul class="nav side-menu">
      <li class="active"><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</span></a></li>

      <li><a><i class="fa fa-bookmark-o"></i> Categories <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{route('admin.add-category')}}">New Category</a></li>
          <li><a href="{{route('admin.category')}}">Category List</a></li>
        </ul>
      </li> 

      <li><a><i class="fa fa-cubes"></i> Product <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{route('admin.add-product')}}">New Product</a></li>
          <li><a href="{{route('admin.product')}}">Product List</a></li>
        </ul>
      </li> 

      <li><a><i class="fa fa-delicious"></i> Blog <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{route('admin.add-blog')}}">Blog Post</a></li>
          <li><a href="{{route('admin.blog')}}">Blog List</a></li>
        </ul>
      </li> 

      <li><a><i class="fa fa-newspaper-o"></i> Newslatter <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{route('admin.send-newslatter')}}">Send Offer</a></li>
          <li><a href="{{route('admin.newslatter')}}">Subscriber</a></li>
        </ul>
      </li> 
    </ul>
  </div>

  <div class="menu_section">
    <h3>Website</h3>
    <ul class="nav side-menu">
      <li><a><i class="fa fa-cogs"></i> Setting <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
            <li><a href="{{route('admin.role')}}">Role</a>

            <li><a href="{{route('admin.profile')}}">Profile Setting</a>

            <li><a href="{{route('admin.password')}}">Change Password</a>

            <li><a>Website Setting<span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="{{route('admin.slider')}}">Slider</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Service</a></li>
                <li><a href="{{route('admin.image')}}">Image Gallery</a></li>
                <li><a href="{{route('admin.video')}}">Video Gallery</a></li>
                <li><a href="{{route('admin.social')}}">Social</a></li>
                <li><a href="{{route('admin.team')}}">Team</a></li>
                <li><a href="{{route('admin.testimonial')}}">Testimonial</a></li>
                <li><a href="{{route('admin.contact')}}">Contact</a></li>
              </ul>
            </li>

            <li><a>Appearance<span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="#">Menu</a></li>
                <li><a href="#">Page Builder</a></li>
              </ul>
            </li>
        </ul>
      </li>              
    </ul>
  </div>

</div>
<!-- /sidebar menu -->

<!-- /menu footer buttons -->
<div class="sidebar-footer hidden-small">
  <a data-toggle="tooltip" data-placement="top" title="Settings">
    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
  </a>
  <a data-toggle="tooltip" data-placement="top" title="FullScreen">
    <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
  </a>
  <a data-toggle="tooltip" data-placement="top" title="Backup">
    <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>
  </a>
  <a data-toggle="tooltip" data-placement="top" title="Logout" 
   href="javascript:void" onclick="$('#logout-form').submit();">
    <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
  </a>
  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
  </form>
</div>
<!-- /menu footer buttons -->
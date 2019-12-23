<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ url($img_path) }}/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ $auth->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li><a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('admin.dashboard') }}</span></a></li>
        <li><a href="{{ route('setting.index') }}"><i class="fa fa-gears"></i> <span>{{ trans('admin.settings') }}</span></a></li>
        <li><a href="{{ route('contact.index') }}"><i class="fa fa-envelope"></i> <span>{{ trans('admin.contacts') }}</span></a></li>
        <li class=" treeview">
          <a href="#">
            <i class="fa fa-group"></i> <span>{{ trans('admin.users') }}</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="{{ route('user.index') }}"><i class="fa fa-circle-o"></i> {{ trans('admin.see') }}</a></li>
            <li><a href="{{ route('user.create') }}"><i class="fa fa-circle-o"></i> {{trans('admin.add')}}</a></li>
          </ul>
        </li>

        <li class=" treeview">
          <a href="#">
            <i class="fa fa-file"></i> <span>{{ trans('admin.pages') }}</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="{{ route('page.index') }}"><i class="fa fa-circle-o"></i> {{ trans('admin.see') }}</a></li>
            <li><a href="{{ route('page.create') }}"><i class="fa fa-circle-o"></i> {{trans('admin.add')}}</a></li>
          </ul>
        </li>

         <li class=" treeview">
          <a href="#">
            <i class="fa fa-sliders"></i> <span>{{ trans('admin.sliders') }}</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="{{ route('slider.index') }}"><i class="fa fa-circle-o"></i> {{ trans('admin.see') }}</a></li>
            <li><a href="{{ route('slider.create') }}"><i class="fa fa-circle-o"></i> {{trans('admin.add')}}</a></li>
          </ul>
        </li>

        <li class=" treeview">
          <a href="#">
            <i class="fa fa-list"></i> <span>{{ trans('admin.menus') }}</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="{{ route('menu.index') }}"><i class="fa fa-circle-o"></i> {{ trans('admin.see') }}</a></li>
            <li><a href="{{ route('menu.create') }}"><i class="fa fa-circle-o"></i> {{trans('admin.add')}}</a></li>
          </ul>
        </li>

        <li class=" treeview">
          <a href="#">
            <i class="fa fa-database"></i> <span>{{ trans('admin.categories') }}</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="{{ route('category.index') }}"><i class="fa fa-circle-o"></i> {{ trans('admin.see') }}</a></li>
            <li><a href="{{ route('category.create') }}"><i class="fa fa-circle-o"></i> {{trans('admin.add')}}</a></li>
          </ul>
        </li>

        
      
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
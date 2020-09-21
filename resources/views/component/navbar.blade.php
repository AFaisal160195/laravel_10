<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Ahmad Faisal</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      {{-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less --> --}}
      <ul class="sidebar-menu" data-widget="tree">
        <li>
            <li class="header">MAIN NAVIGATOR</li>
        </li>
        <li>
          <a href="/">
            <i class="fa fa-dashboard"></i> <span> HOME </span>
          </a>
        </li>
        {{-- <li>
            <a href="/hi"><i class="fa fa-book"></i>
                Halaman HI
            </a>
        </li> --}}
        @if (Auth::user()->role==1)
            <li>
                <a href="/karyawan"><i class="fa fa-book"></i>Karyawan</a>
            </li>
            <li>
                <a href="/department"><i class="fa fa-book"></i>Department</a>
            </li>
            <li>
                <a href="/position"><i class="fa fa-book"></i>Position</a>
            </li>
            <li>
                <a href="/employee"><i class="fa fa-book"></i>Employee</a>
            </li>
            <li>
                <a href="/inventory"><i class="fa fa-book"></i>Inventory</a>
            </li>
            <li>
                <a href="/archive"><i class="fa fa-book"></i>Archive</a>
            </li>
        @else
            <li>
                <a href="/inventory"><i class="fa fa-book"></i>Inventory</a>
            </li>
            <li>
                <a href="/archive"><i class="fa fa-book"></i>Archive</a>
            </li>
            <li>
                <li class="header">LABELS</li>
            </li>
        @endif
      </ul>
    </section>
  </aside>

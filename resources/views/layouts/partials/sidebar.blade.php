<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Auth::user()->avatar }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                </div>
            </div>
        @endif

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <!-- Optionally, you can add icons to the links -->
            <li><a href="{{ url('/') }}"><i class='fa fa-home'></i> <span>Home</span></a></li>
            <li><a href="{{ url('upload') }}"><i class="fa fa-upload" aria-hidden="true"></i> <span>Upload</span></a></li>
            <li><a href="{{ url('myvideos') }}"><i class='fa fa-video-camera'></i> <span>My Videos</span></a></li>
            
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>

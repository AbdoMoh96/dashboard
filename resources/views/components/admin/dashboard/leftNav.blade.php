<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" target="_blank" class="brand-link">
        <img
            src="{{ asset('dashboard/img/AdminLTELogo.png')  }}"
            alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3"
            style="opacity: 0.8"
        />
        <span class="brand-text font-weight-light">Vstream</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img
                    src="{{ asset('dashboard/img/avatar5.png')  }}"
                    class="img-circle elevation-2"
                    alt="User Image"
                />
            </div>
            <div class="info">
                <a href="#" class="d-block">Vstream Admin</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


                <x-admin.dashboard.items.link
                        name="Dashboard"
                        route="admin.dashboard"
                        icon="fas fa-home"/>



                <x-admin.dashboard.items.menu name="Videos" route="admin.videos*" icon="fas fa-video">

                    <x-admin.dashboard.items.link
                        name="Upload Video"
                        route="admin.dashboard"
                        icon="fas fa-upload"/>

                </x-admin.dashboard.items.menu>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <!-- dashboard -->
            <li>
                <a  @if($title == "Dashboard")
                        {{ "class='active'" }}
                    @endif
                    href="{{ URL::to('admins') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <!-- /dashboard -->
            <!-- artikel -->
            <li 
                @if($title == "Kelola Artikel" || $title == "Tambah Artikel" || $title == "Ubah Artikel" ||
                    $title == "Kelola Kategori Artikel")
                    {{ "class='active'" }}
                @endif
            ><a href="#"><i class="fa fa-book fa-fw"></i> Artikel<i class="fa arrow"></i></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a 
                             @if($title == "Tambah Artikel")
                                {{ "class='active'" }}
                            @endif
                            href="{{ route('admins.artikels.create') }}"><i class="fa fa-plus"></i> Tambah Artikel</a>
                    </li>
                    <li>
                        <a 
                            @if($title == "Kelola Artikel")
                                {{ "class='active'" }}
                            @endif
                            href="{{ route('admins.artikels.index') }}"><i class="fa fa-archive"></i> Kelola Artikel</a>
                    </li>
                    <li>
                        <a
                            @if($title == "Kelola Kategori Artikel")
                                {{ "class='active'" }}
                            @endif
                            href="{{ route('admins.kategoriartikels.index') }}"><i class="fa fa-archive"></i> Kelola Kategori Artikel</a>
                    </li>
                </ul>
            </li>
            <!-- /artikel -->
            <!-- admin -->
            <li >
                <a @if($title == "Kelola Admin" || $title == "Ubah Admin" || $title == "Tambah Admin")
                       {{ "class='active'" }}
                   @endif
                    href="{{ route('admins.users.index') }}"><i class="fa fa-user fa-fw"></i> Admin</a>
            </li>
        </ul>
    </div>
</div>
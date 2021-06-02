<li class="side-menus {{ Request::is('admin/dashboard') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('dashboard') }}">
        <i class=" fas fa-building"></i><span>Dashboard</span>
    </a>
</li>
<li class="side-menus {{ Request::is('admin/posts*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('posts.index') }}"><i class="fas fa-building"></i><span>Posts</span></a>
</li>



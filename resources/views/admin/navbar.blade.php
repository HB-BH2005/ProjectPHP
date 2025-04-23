<div class="aside">
    <div class="logo">
        <a href="{{ route('admin') }}"><span>L</span>earning</a>
    </div>
    <div class="nav-toggler">
        <span></span>
    </div>
    <ul class="nav">
        <li><a href="{{ route('admin') }}"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="{{ route('admin.users') }}"><i class="fa fa-users"></i> Users</a></li>
        <li><a href="{{ route('admin.levels.index') }}"><i class="fas fa-graduation-cap"></i> Levels</a></li>
        <li><a href="{{ route('admin.subjects') }}"><i class="fa fa-list"></i> Subjects</a></li>
        <li><a href="{{ route('admin.courses') }}"><i class="fas fa-book-open"></i> Courses</a></li>
        <li><a href="{{ route('admin.messages') }}"><i class="fa fa-comments"></i> Messages</a></li>
    </ul>
</div>

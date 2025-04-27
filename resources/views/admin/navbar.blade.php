<div class="aside">
    <div class="logo">
        <a href="{{ route('admin.home') }}"><span>L</span>earning</a>
    </div>
    <div class="nav-toggler">
        <span></span>
    </div>
    <ul class="nav">
        <li><a href="{{ route('admin.home') }}"><i class="fa fa-home"></i> Home</a></li>
         <li><a href="{{ route('admin.users.index') }}"><i class="fa fa-users"></i> Users</a></li> 
        <li><a href="{{ route('admin.levels.index') }}"><i class="fas fa-graduation-cap"></i> Levels</a></li>
        <li><a href="{{ route('admin.subjects.index') }}"><i class="fa fa-list"></i> Subjects</a></li>
        <li><a href="{{ route('admin.lessons.index') }}"><i class="fas fa-book-open"></i> Lessons</a></li>
        <li><a href="{{ route('admin.lesson_contents.index') }}"><i class="fa fa-file-alt"></i> Lessons Content</a></li>
    </ul>
</div>

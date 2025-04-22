<!-- navbar.blade.php -->
<div class="aside">
    <div class="logo">
        <a href="{{ route('home') }}"><span>L</span>earning</a>
    </div>
    <div class="nav-toggler">
        <span></span>
    </div>
    <ul class="nav">
        <li><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="{{ route('about') }}"><i class="fa fa-user"></i> About</a></li>
        
        <li><a href="{{ route('levels.index') }}"><i class="fa fa-list"></i> Levels</a></li>

        <li><a href="{{ route('My-courses') }}"><i class="fa fa-book"></i> My Courses</a></li>
        <li><a href="{{ route('contact') }}"><i class="fa fa-comments"></i> Contact</a></li>
    </ul>
</div>

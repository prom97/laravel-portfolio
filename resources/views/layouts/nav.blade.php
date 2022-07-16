{{-- <nav>
    <ul>
        <li class="{{ setActive('home') }}"><a href="{{route('home')}}">{{__('Home')}}</a></li>
        <li class="{{ setActive('about') }}"><a href="{{route('about')}}">{{__('About')}}</a></li>
        <li class="{{ setActive('projects.*') }}"><a href="{{route('projects.index')}}">{{__('Projects')}}</a></li>
        <li class="{{ setActive('contact') }}"><a href="{{route('contact')}}">{{__('Contact')}}</a></li>
    </ul>
</nav> --}}

<li class="nav-item">
    <a class="nav-link" href="#">{{__('Home')}}</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="#">{{__('About')}}</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="#">{{__('Projects')}}</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="#">{{__('Contact')}}</a>
</li>
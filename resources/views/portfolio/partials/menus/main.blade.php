<ul class="navbar-nav ml-auto">
    @foreach($items as $item)
        @if($item->children->count())
            @if($loop->last)
                @guest
                    <li style="padding-top: 6px;" class="nav-item dropdown">
                        <a class="btn-one" href="#{{ $item->title }}">{{ $item->title }}</a>
                        <ul>
                            @foreach($item->children as $subItem)
                                <li><a target="{{ $subItem->target }}" href="{{ url($subItem->link()) }}">{{ $subItem->title }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#">
                            <img src="{{ asset(Voyager::image($options->user->avatar)) }}" class="rounded-circle z-depth-0" alt="avatar image" height="25">
                            {{ Auth::user()->name }}
                        </a>
                        <ul>
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Admin</a></li>
                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </ul>
                    </li>
                @endguest
            @else
                <li class="nav-item dropdown">
                    <a class="nav-link active" href="#{{ $item->title }}">{{ $item->title }}</a>
                    <ul>
                        @foreach($item->children as $subItem)
                            <li><a target="{{ $subItem->target }}" href="{{ url($subItem->link()) }}">{{ $subItem->title }}</a></li>
                        @endforeach
                    </ul>
                </li>
            @endif
        @else
            @if($loop->last)
                @guest
                    <li style="padding-top: 6px;" class="nav-item">
                        <a class="btn-one" target="{{ $item->target }}" href="{{ url($item->link()) }}">{{ $item->title }}</a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#">
                            <img src="{{ asset(Voyager::image($options->user->avatar)) }}" class="rounded-circle z-depth-0" alt="avatar image" height="25">
                            {{ Auth::user()->name }}
                        </a>
                        <ul>
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Admin</a></li>
                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </ul>
                    </li>
                @endguest
            @else
                <li class="nav-item">
                    <a class="nav-link" target="{{ $item->target }}" href="{{ url($item->link()) }}">{{ $item->title }}</a>
                </li>
            @endif
        @endif
    @endforeach
</ul>

<div id="sidebar-wrapper">
        <ul class="sidebar-nav">

            <li class="sidebar-brand">
                <img src="{{ asset('images/logo-bevicred-white.png') }}" alt="Logo Sicoob">
            </li>
            <li class="nav-item active">
                    <a href="{{ url('/home') }}" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/novo') }}" class="nav-link">Adicionar Cliente</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                         {{ __('Logout') }}
                     </a>

                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                         @csrf
                     </form>
                </li>

        </ul>
    </div>
<nav class="navbar navbar-places bg-places">
            <div class="container-fluid">
                    <div class="navbar-header">
                      <a class="navbar-brand" href="#menu-toggle" id="menu-toggle">
                        <img alt="Brand" src="{{ asset('images/menu.png') }}">
                      </a>
                    </div>
        <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                        <a class="nav-link" href="#">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                </li>
        </ul>
    </div>
</nav>

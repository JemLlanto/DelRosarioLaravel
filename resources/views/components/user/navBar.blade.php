<nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm">
    <div class="container-fluid">
        <div class="d-flex align-items-center">
            <button class="btn btn-light d-flex py-2" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                <i class='bx bx-list-ul'></i>
            </button>
            <a class="navbar-brand" href="#">EduCheck</a>
        </div>

        <div>
            <div class="dropdown position-relative">
                <button class="btn btn-success dropdown-toggle sample" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    {{ Auth::user()->name }}
                </button>
                <div class="test">
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('profile.edit') }}"> {{ __('Profile') }}</a></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <a href="route('logout')"
                                    onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    Log out
                                </a>
                            </form>
                        </li>
                    </ul>
                </div>

            </div>

        </div>
    </div>
</nav>

{{-- Offcanvass --}}
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Educheck</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">

        <ul class="list-unstyled gap-2">
            <li><a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a></li>
            <li><a class="dropdown-item" href="{{ route('classList') }}">Classes</a></li>
            <li><a class="dropdown-item" href="#">Todo List</a></li>
        </ul>
    </div>
</div>

<header>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                @if(Auth::user())
                <a class="navbar-brand" href="{{ route('dashboard') }}">Dashboard</a>
                    @endif
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                @if(Auth::user())
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ route('account') }}">Account</a></li>
                    <li><a href="{{ route('logout') }}">Logout</a></li>
                </ul>
                    @endif

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>
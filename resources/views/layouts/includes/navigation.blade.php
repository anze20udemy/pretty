<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
            <a class="navbar-brand" href="index.php">Frizerski salon Pretty</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="{{ url('/') }}">domov</a>
                </li>
                <li>
                    <a href="{{ url('../storitve') }}">storitve</a>
                </li>
                <li>
                    <a href="{{ url('../slike') }}">slike</a>
                </li>
                <li>
                    <a href="{{ url('../mnenja') }}">mnenja</a>
                </li>
                <li>
                    <a href="{{ url('../kontakt') }}">kontakt</a>
                </li>

                {{--<li>--}}
                {{--@if($user = Auth::user())--}}

                {{--<a href="{{ url('/admin') }}"><i class="fa fa-user" ></i>{{Auth::user()->name}}</a>--}}
                {{--</li>--}}

                    {{--@endif--}}
                @if($user = Auth::user())
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{ Auth::user()->name }} <b class="caret"></b></a>
                    <ul class="dropdown-menu">

                        <li class="divider"></li>
                        <li>
                            <a href="{{route('logout')}}"><i class="fa fa-fw fa-power-off"></i> Odjavi se</a>
                        </li>
                    </ul>
                </li>
                    @else

                    <li>

                    <a href="{{ url('/admin') }}"><i class="fa fa-user" ></i></a>
                    </li>
                @endif





            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
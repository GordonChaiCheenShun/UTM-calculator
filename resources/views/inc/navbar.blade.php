<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                aria-expanded="false" aria-controls="navbar">
                <span class="sr-only"> Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/')}}">{{config('app.name','UTM_Calculator')}}</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{url('/admin')}}">Home</a></li>
                <li><a href="{{url('/list')}}">Student List</a></li>


            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="{{url('/logout')}}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Logout</a>
                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </form>
            </ul>



        </div>
        <!--/.nav-collapse -->
    </div>
</nav>
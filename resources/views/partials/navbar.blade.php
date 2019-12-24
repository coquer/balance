<nav class="navbar has-shadow" role="navigation" style="direction: rtl;">
    <div class="container">
        <div class="navbar-brand">
            <a href="{{ url('/') }}" class="navbar-item" tabindex="1" style="margin-bottom:0"><img src="{{asset('storage/icons/balance-logo.png')}}" alt=""></a>
            <div class="navbar-burger burger rtl-navbar" onclick="document.querySelector('.navbar-menu').classList.toggle('is-active'); this.classList.toggle('is-active');">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="navbar-menu">
            <div class="navbar-start rtl-navbar"></div>

            <div class="navbar-end rtl-navbar">
                @guest
                    <div class="navbar-item has-text-centered">
                        <a href="{{ route('login') }}" style="margin-bottom: 0;">התחברות</a>
                    </div>
                    <div class="navbar-item has-text-centered">
                        <a  href="{{ route('register') }}">הרשמה</a>
                    </div>
                    <div class="navbar-item has-text-centered">
                        <a  href="{{ route('budget.index') }}">התקציב שלי</a>
                    </div>
             @endguest
                @auth
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link subtitle is-5 has-text-centered" href="#" style="margin-bottom: 0;">{{ Auth::user()->name }}</a>
                        <div class="navbar-dropdown">
                            <div class="navbar-item has-text-centered">
                                <a  href="{{ route('budget.index') }}">התקציב שלי</a>
                            </div>
                            <a class="navbar-item subtitle is-5 has-text-centered" style="margin-bottom: 0;" href="{{ route('logout') }}"
                               onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                התנתקות
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                  style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </div>
                @endauth
            </div>
        </div>
    </div>
</nav>

<section class="section">
    @guest
       <h5 class="title is-5 has-text-centered"> <a href="/login">התחברו</a> או <a href="/register">הירשמו חינם</a> בכדי להתחיל</h5>
    @endguest
    <div class="tile is-ancestor">
        <div class="tile is-parent">
            <div class="card tile is-child">
                <div class="card-content">
                    <div class="level is-mobile">
                        <div class="level-item">
                            <div class="is-widget-label">
                                <h5 class="subtitle is-5 is-spaced">@lang('general.budget') לחודש {{$month}}</h5>
                                <h1 class="title is-1-mobile">{{ $globalAppBudget}}</h1>
                            </div>
                        </div>
                        <div class="level-item has-widget-icon">
                            <div class="is-widget-icon">
                                <span class="icon has-text-primary is-large"><i class="mdi mdi-chart-pie mdi-48px"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tile is-parent">
            <div class="card tile is-child">
                <div class="card-content">
                    <div class="level is-mobile">
                        <div class="level-item">
                            <div class="is-widget-label">
                                <h5 class="subtitle is-5 is-spaced">@lang('general.open-notes')</h5>
                                <h1 class="title is-1-mobile">{{$tasks ? count($tasks) : 0}}</h1>
                            </div>
                        </div>
                        <div class="level-item has-widget-icon">
                            <div class="is-widget-icon"><span class="icon has-text-info is-large"><i class="mdi mdi-note-multiple-outline mdi-48px"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tile is-parent">
            <div class="card tile is-child">
               <div class="card-content">
                    <div class="level is-mobile">
                        <div class="level-item">
                            <div class="is-widget-label">
                                <h5 class="subtitle is-5 is-spaced">@lang('general.total-paid-this-month') {{$month}}</h5>
                                <h1 class="title is-1-mobile">{{$globalAppActivity}}</h1>
                            </div>
                        </div>
                        <div class="level-item has-widget-icon">
                            <div class="is-widget-icon"><span class="icon has-text-success is-large"><i class="mdi mdi-percent-outline mdi-48px"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

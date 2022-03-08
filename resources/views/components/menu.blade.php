<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="https://sms.ir" class="brand-link">
        <span class="brand-text font-weight-light">Sms.ir</span>
    </a>

    <div class="sidebar">

        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search" wtx-context="434F2292-405C-4C20-8127-E3EADDEDA9DB">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item menu-open">
                    <a href="{{ route('smsir.send.bulk')  }}" class="nav-link  {{Route::is('smsir.send.bulk')?'active':''}}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            ارسال
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            گزارشات
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('smsir.report.received.today') }}" class="nav-link {{Route::is('smsir.report.received.today')?'active':''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>پیام های دریافتی</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('smsir.report.sent.today') }}" class="nav-link {{Route::is('smsir.report.sent.today')?'active':''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>پیام های ارسالی</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>

    </div>
</aside>

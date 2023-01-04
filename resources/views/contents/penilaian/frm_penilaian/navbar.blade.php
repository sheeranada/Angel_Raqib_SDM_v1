    <!-- Start: navbar -->
    <div class="container-fluid">
        <div class="row">
            <!-- Start: Black Navbar -->
            <nav class="navbar navbar-light navbar-expand-md fixed-top navbar-fixed-top navigation-clean-button"
                style="background: rgb(34, 34, 34);border-radius: 20;border-top-left-radius: 20;border-top-right-radius: 20;border-bottom-right-radius: 20;border-bottom-left-radius: 20;border-style: none;padding-top: 0;padding-bottom: 10px;">
                <div class="container"><button data-bs-toggle="collapse" class="navbar-toggler"
                        data-bs-target="#navcol-1" style="border-color: var(--bs-white);"><span
                            class="visually-hidden">Toggle navigation</span><span
                            class="navbar-toggler-icon"></span></button>
                    <div><a class="navbar-brand" href="/"><span>App</span> </a></div>
                    <div class="collapse navbar-collapse" id="navcol-1" style="color: rgb(255,255,255);">
                        <ul class="navbar-nav nav-right">
                            <li class="nav-item"><a class="nav-link active" href="/"
                                    style="color: rgba(224,217,217,0.9);">home </a></li>
                        </ul><!-- Start: Actions -->
                        <p class="ms-auto navbar-text actions"><a class="login text-uppercase" href=""
                                style="color: rgba(224,217,217,0.9);">{{ auth()->user()->name }}</a> <a
                                class="btn btn-light action-button" role="button" href="{{ route('logout') }}"
                                style="color: rgba(0,0,0,0.9);background: var(--bs-gray-200);border-radius: 10px;border-style: solid;border-color: rgba(0,0,0,0.9);font-size: 16px;padding: 5px 8px;">SignOut</a>
                        </p><!-- End: Actions -->
                    </div>
                </div>
            </nav><!-- End: Black Navbar -->
        </div>
    </div><!-- End: navbar -->

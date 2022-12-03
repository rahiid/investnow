<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>INVESTNOW</title>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" defer integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" defer integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Scripts -->

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('/image/favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('/image/favicon.ico')}}" type="image/x-icon">
    <!-- Favicon -->

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <!-- <link rel="stylesheet" href="css/owl.carousel.min.css"> -->
    <link rel="stylesheet" href="{{asset('/css/invest-m.css')}}">

    <!-- Styles -->

    <!-- Fonts Awesome CDN -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- Fonts Awesome CDN -->


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <!-- Fonts -->
    @yield('assets')


</head>

<body>
    <header class="header-section">

        <nav class="navbar navbar-light">
            <div class="container-fluid">

                <a class="" style="color: black" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                    <img src="/image/menu.svg" class="img-responsive menu"  alt="menu">
                  </a>



                    <div class="dropdown d-flex right-menu">
                       <a class="btn  dropdown-toggle" style="color: white" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="/image/avatar.svg" class="img-responsive"  alt="Userpic">
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                          <li><a class="dropdown-item" href="/profile-m">Profile</a></li>




                            <li><a style="color: red;" class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                            </li>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>


                        </ul>
                      </div>

            </div>
          </nav>
    </header>




    <div class="offcanvas offcanvas-start user-section" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">

        <div class="offcanvas-header" style="margin-top: 30px;">
          <h5 class="offcanvas-title" id="offcanvasExampleLabel">   </h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body">
            <div class="user-sidebar">

                <div class="profile-userpic">



                    @if(Auth::check())
                    <h5>{{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}</h5>
                    <h6>#{{{ isset(Auth::user()->name) ? Auth::user()->username : Auth::user()->email }}}</h6>
                    <p style="color: #3361FF; font-weight:700;">Balance: <span>{{{ isset(Auth::user()->name) ? Auth::user()->wallet : Auth::user()->email }}}$</span></p>
                    @else
                    <h5> Name </h5>
                    <h5> Id </h5>
                    <p style="">Balance: <span> 00$</span></p>
                    @endif


                </div>

                <div class="invest-now-button">
                    <a href="/invest-m" class="btn btn-sm">INVEST NOW</a>
                </div>

                <div class="sidebar-bottom">

                    <div class="sidebar-items" id="u1">
                        <i class="fas fa-home fa-lg"></i>

                        <a  href="/user-m" class="sidebar-links stretched-link"><h5>Home</h5></a>
                    </div>
                    <div class="sidebar-items">
                        <i class="fas fa-wallet fa-lg"></i>
                        <a href="/deposit-m" class="sidebar-links stretched-link"><h5>Deposit</h5></a>
                    </div>
                    <div class="sidebar-items">
                        <i class="fas fa-hand-holding-usd fa-lg"></i>
                        <a href="/balancetransfer-m" class="sidebar-links stretched-link"><h5>Balance Transfer</h5></a>
                    </div>
                    <div class="sidebar-items">
                        <i class="fas fa-money-check-alt fa-lg"></i>

                        <a href="/withdraw-m" class="sidebar-links stretched-link"><h5>Withdraw</h5></a>
                    </div>
                    <div class="sidebar-items">
                        <i class="fas fa-user-plus fa-lg"></i>

                        <a href="/referrer-m" class="sidebar-links stretched-link"><h5>Referrer</h5></a>
                    </div>
                    <div class="sidebar-items">
                        <i class="fas fa-sign-out-alt fa-lg"></i>
                        <a class="sidebar-links stretched-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            <h5>LogOut</h5>
                        </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                    </div>

                </div>

        </div>


        </div>
      </div>



    <div class="user-info" >
        <div class="user-inner"  id="scrollbar">
            <div class="invest" style="text-align: center; padding:0px 15px;" >
                <h5>Your Total Invested Ammount: <span>{{{ isset(Auth::user()->name) ? Auth::user()->invest : Auth::user()->email }}}$</span></span></h4>
            </div>
            <div class="invest-form">
                <form method="POST" class="invest-form-inner" name="invest-form" action="invest" onsubmit="investmoney.disabled = true; return true;">
                    @csrf

                    <h6>Want to Invest again?</h6>
                    @if(Auth::check())
                        <input type="hidden" name="userid" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="username" value="{{ Auth::user()->name }}">
                    @else
                    <input type="hidden" name="userid" value="User Not Logged In!!">
                    @endif

                    <div class="form-group">
                      <label for="exampleInputEmail1">Ammount</label>
                      <input type="number" class="form-control" name="ammount" min="1" max="{{ Auth::user()->wallet }}" required>
                    </div>


                    <button type="submit" name="investmoney" class="btn btn-primary">INVEST NOW</button>
                  </form>
            </div>

            <div class="invest-tbl">
            <table class="table table-responsive-md table-bordered">



            @if(Auth::check())
                @if (count($invest))
                <thead>
                    <tr>
                      <th scope="col">AMOUNT</th>
                      <th scope="col">STATUS</th>
                      <th scope="col">DATE</th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach ($invest as $invest)
                        <tr>
                            <td>{{$invest['ammount']}}</td>
                            <td>{{$invest['status']}}</td>
                            <td>{{ Str::limit($invest['created_at'], 10) }}</td>
                        </tr>

                    @endforeach

                  @endif

                  @else
                  <ht style="color: #7C4DFF;">No Data to Show!!!</ht>
                  @endif

                </tbody>
              </table>

            </div>

        </div>
    </div>

</body>
</html>


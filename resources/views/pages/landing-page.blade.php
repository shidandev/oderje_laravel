@extends('layouts.app')

@include('partials.nav')

@section('content')
{{-- <main class="py-4">
        @yield('content')
    </main> --}}
    <style>
    .sidebar-social {
        margin: 0;
        padding: 0;
    }
    
    .sidebar-social ul {
        margin: 0;
        padding: 5px;
    }
    

    
    .sidebar-social i {
      display: block;
      margin: 0 auto 10px auto;
        width: 32px;
        height: 32px;
        margin: 10px auto 0;
        line-height: 32px;
        text-align: center;
        font-size: 20px;
        color: #444444;
      margin-top:0;
      padding-top:5px;
    }
    .buttons { 
  width: 100%;
  table-layout: fixed;
  border-collapse: collapse;
  /* background-color: red;  */
}
.buttons button { 
  width: 100%;
}

    
    </style>
<main class="py-5">
    <div id="app" class="container-fluid">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-md-8 mt-2">
                    <a href="{{ route('landing-page') }}"><img src="http://www.oderje.com/img/oderje-logo.png"
                            class="img-fluid w-50 mt-5"></a>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-md-6">
                    <div class="input-group">
                        <input id="search_str" type="text" class="form-control" placeholder="search"
                            style="border-color:#FC9732">
                        <div class="input-group-append">
                            <button id="search-oderje" class="btn text-white" style="background:#FC9732" type="button">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                  
                        <ul>
                        <div class="grid-container mt-3 sidebar-social">
                            <table class="buttons">
                                <tr>
                           <td><button class="btn" type="button"><i class="fas fa-utensils"></i> FOODS</button>
                             {{-- <td><button class="btn" type="button"><i class="fas fa-coffee"></i> DRINKS</button> --}}
                                <td> <button class="btn" type="button"><i class="fas fa-tshirt"></i> FASHION</button>
                                    <td> <button class="btn" type="button"><i class="fas fa-mobile-alt"></i> GADJET</button>
                                        <td> <button class="btn" type="button"><i class="fas fa-heartbeat"></i> HEALTH</button>
                                            {{-- <td> <button class="btn" type="button"><i class="fas fa-tools"></i> OTHERS</button> --}}

                            </table>
                    </div>
                        </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>
@endsection

@include('partials.navbtm')

@section('extra-js')
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
@endsection

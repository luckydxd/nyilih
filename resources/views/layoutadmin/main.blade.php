@include('layoutadmin.header');
    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->
    @include('layoutadmin.navbar');

    <div class="main-container" id="container">
        <div class="overlay"></div>
        <div class="search-overlay"></div>

        @include('layoutadmin.sidebar');  
    
        {{-- @section('breadcrumb')
        <div class="page-meta">
            <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                </ol>
            </nav>
        </div>
       
        @show --}}
        
                    @yield('content') 
           

                @include('layoutadmin.footer'); 

<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    @include('layouts.partial.meta')
    
    
    <title>@yield('title', 'STIH Damarica Palopo')</title>

    @include('layouts.partial.styles')
    
    </head>
    <body>	
        <header id="header" id="home">
            @include('layouts.partial.header')
        </header><!-- #header -->

        @yield('content')
                    
        <!-- start footer Area -->		
        <footer class="footer-area section-gap">
            @include('layouts.partial.footer')
        </footer>	
        <!-- End footer Area -->	


        @include('layouts.partial.script')

        @yield('js')
    </body>
</html>
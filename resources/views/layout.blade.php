<!DOCTYPE html>
<html lang="en">
    <head>
        @include("partials._head")
    </head>

    <body>

        <div class="page-wrapper">

            @include("partials._nav")
    
            <!-- @include("partials._searchbox") -->

            @yield("hero-image-wrapper")

            <div class="main-wrapper">
                <div class="main">
                    <div class="main-inner">
                        @yield("page-title")
                        @yield("content")
                    </div>
                    <!-- /.main-inner -->
                </div>
                <!-- /.main -->
            </div>
            <!-- /.main-wrapper -->

            @include("partials._footer")

        </div> 
        <!-- /.page-wrapper -->

        @include("partials._javascript")
    </body>
</html>
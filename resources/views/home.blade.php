@extends('layout')

@section('title', 'Home')

@section('content')
    

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Feature Places
                <small>Have Fun</small>
            </h1>
        </div>
    </div>
    <!-- End Page Heading -->
    
    <!-- Projects -->
    @for ($i = 1; $i <= $projects; $i++)

        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive" src="https://placeimg.com/700/300/animals" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Project {{ $i }}</h3>
                <h4>Subheading</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
                <a class="btn btn-primary" href="#">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>    
        <hr>

    @endfor
    <!-- End Project -->

    <!-- Pagination -->
    <div class="row text-center">
        <div class="col-lg-12">
            <ul class="pagination">
                <li>
                    <a href="#">&laquo;</a>
                </li>

                @for($i = 1; $i <= $projects; $i++)

                    @if ($i === 1)
                        <li class="active">
                            <a href="#">{{$i}}</a>
                        </li>
                    @else
                        <li>
                            <a href="#">{{$i}}</a>
                        </li>
                    @endif
                @endfor
                
                <li>
                    <a href="#">&raquo;</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- End Pagination -->
@endsection    
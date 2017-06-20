@extends('layout')

@section('title', 'Show')

@section('stylesheet')
	{!! Html::style('css/file-input/fileinput.css') !!}
@endsection

@section('page-title')
<div class="listing-hero">
  	<div class="listing-hero-inner">
        <div class="container">
          	<div class="listing-hero-image" style="background-image: url({{ $place->isPictureExist() ? asset('storage/' . $place->getThumbnail()) : asset('assets/img/tmp/listing-9.jpg') }})"></div>
                <h1>
                    {{ strtoupper($place->name) }} 
                </h1>
                <span data-toggle="tooltip" data-placement="top" title="{{ $place->price->description }}">
                    @for($i = $place->price->amount; $i > 0; $i--)
                        <i class="fa fa-usd" aria-hidden="true"></i>
                    @endfor
                </span>
          		<address>
          			{{ ucwords( $place->getAddress() ) }}<br>
                	{{ ucfirst($place->city->name) }}, Cambodia
              	</address>

              	<ul class="social">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google"></i></a></li>
              	</ul>
            </div>
            <!-- /.listing-hero-image -->
        <!-- /.container -->
  	</div>
  	<!-- /.listing-hero-inner -->
</div>
<!-- /.listing-hero -->
<div class="listing-toolbar-wrapper">
  	<div class="listing-toolbar" data-spy="affix" data-offset-top="203">
        <div class="container">
          	<ul class="nav">
          	</ul>
          	<!-- /.nav -->
        </div>
        <!-- /.container -->
  	</div>
  	<!-- /.listing-toolbar -->
</div>
<!-- /.listing-toolbar-wrapper -->
@endsection

@section('content')
<div class="container">

	<div class="row">
		<div class="col-md-8 col-lg-9">
			<div class="listing-detail-section" id="listing-detail-section-description" data-title="Gallery">
				<div class="gallery">
					@foreach($place->pictures as $picture)
	                  	<div class="gallery-item" style="background-image: url({{asset('storage/' . $picture->path)}});">
	                  	</div>
	              		<!-- /.gallery-item -->
              		@endforeach
                </div>
                <!-- /.gallery -->
			</div>
            <!-- /. listing-detail-section Gallery -->
            <div class="listing-detail-section" id="listing-detail-section-opening-hours" data-title="Opening Hours">
                <h2>Opening Hours</h2>
                <table class="table table-bordered opening-hours">
                    <tbody>
                        @foreach($place->hours as $hour)
                            <tr class="{{ $hour->pivot->open === 'close' ? 'closed' : '' }}">
                                <th class="min-width center">{{ strtoupper($hour->day) }}</th>    
                                <td>
                                    @if ($hour->pivot->open === 'close')
                                        closed
                                    @else
                                        {{ $hour->pivot->open }} - {{ $hour->pivot->close }}
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.listing-detail-section opening hours-->
            <div class="listing-detail-section" id="listing-detail-section-contact-information" data-title="Contact">
                <h2>Contact Information</h2>
                <div class="box">
                      <div class="box-inner">
                        <div class="overview overview-half overview-no-margin">
                          <ul>
                            <li><strong>Country</strong><span>Cambodia</span></li>
                            <li><strong>City</strong><span>{{ $place->city->name }}</span></li>
                            <li><strong>Address</strong><span>{{ ucwords( $place->getAddress() ) }}</span></li>
                            <li><strong>E-mail</strong><span><a href="mailto:{{$place->contact->email}}">{{ $place->contact->email }}</a></span></li>
                            <li>
                                <strong>Phone</strong>
                                <span>
                                    @foreach($place->telephones as $phone)
                                        {{ $phone->number }}/
                                    @endforeach
                                </span>
                            </li>
                            <li><strong>Website</strong><span><a href="http://{{ $place->contact->website }}">{{ $place->contact->website }}</a></span></li>
                            <li><strong>Facebook</strong><span><a href="http://{{ $place->contact->facebook }}">{{ $place->contact->facebook }}</a></span></li>
                            <li>
                                <strong>Price</strong>
                                <span data-toggle="tooltip" data-placement="top" title="{{ $place->price->description }}">
                                    @for($i = $place->price->amount; $i > 0; $i--)
                                        <i class="fa fa-usd" aria-hidden="true"></i>
                                    @endfor
                                </span>
                            </li>
                          </ul>
                        </div>
                        <!-- /.overview -->
                      </div>
                      <!-- /.box-inner -->
                    </div>
                    <!-- /.box -->
            </div>
            <!-- /. listing-detail-section contact information -->
            <div class="listing-detail-section" id="listing-detail-section-map-position" data-title="Map Position">
                <h2>Map Position</h2>
                <iframe class="mb30" style="height:320px;width:100%;border:0;" src="https://www.google.com/maps/embed/v1/place?q={{ $place->latitude }},{{ $place->longitude }}&key=AIzaSyB1rhBa5RxvE6mSIBXEvCE_3DOeKj3oG3U">
                </iframe>
            </div>
            <!-- /.listing-detail-section map position-->
            <div class="listing-detail-section" id="listing-detail-section-menu" data-title="Menu">
                <h2>Menu</h2>
                <div class="filter-tabs">
                    <ul class="nav nav-tabs" role="tablist">
                        @foreach($menus as $index => $menu)
                            <li class="nav-item">
                                <a class="nav-link {{ $index > 0 ? '' : 'active' }}" href="#{{ str_replace(' ', '_', $menu->name) }}" data-toggle="tab" aria-expanded="{{ $index > 0 ? 'false' : 'true' }}">{{ ucwords($menu->name) }}</a>
                            </li>
                        @endforeach
                    </ul>
                    <!-- ./nav nav-tabs -->
                    <div class="tab-content">
                        @foreach($menus as $index => $menu)
                            <div class="tab-pane {{ $index > 0 ? '' : 'active' }}" id="{{ str_replace(' ', '_', $menu->name) }}">
                                <div class="filter filter-boxed filter-primary checkbox-light">
                                    @foreach ($place->menus()->where('menus.id', $menu->id)->get() as $menuDetail)
                                        
                                        <div class="listing-row">
                                            <div class="listing-row-inner">
                                                <a class="listing-row-image" href="#" onclick="event.preventDefault();">
                                                    <span class="listing-row-image-content" style="background-image: url({{ asset('storage/' . $menuDetail->pivot->image) }})"></span>
                                                </a>
                                                <div class="listing-row-content">
                                                    <div class="listing-row-content-header">
                                                        <h3><a href="#" onclick="event.preventDefault();">{{ strtoupper( $menuDetail->pivot->name ) }}</a></h3>
                                                        <h4>{{ ucwords( $menuDetail->pivot->description ) }}</h4>
                                                        <div class="actions">
                                                            ${{ $menuDetail->pivot->price }}
                                                        </div>
                                                        <!-- /.actions -->
                                                    </div>
                                                    <br><br>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    @endforeach
                                </div>
                            </div>
                            <!-- ./tab-pane -->
                        @endforeach
                    </div>
                    <!-- ./tab-content -->
                </div>
                <!-- ./filter-tabs -->
            </div>
            <!-- /.listing-detail-section menu-->
		</div>
		<!-- ./col-md-8 col-lg-9 -->
		<div class="col-md-4 col-lg-3">
			<div class="sidebar">
				<div class="widget">
                    <ul class="nav actions flex-column">
                        <li class="nav-item featured">
                            <a href="#" class="nav-link">
                                <i class="fa fa-file-text-o"></i> Claim Listing
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-star-o"></i> Add to Favorites
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-flag"></i> Report Listing
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" onclick="window.print(); return false;">
                                <i class="fa fa-print"></i> Print page
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-facebook"></i> Share on Facebook
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-google"></i> Share on Google+
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-twitter"></i> Share on Twitter
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-linkedin"></i> Share on LinkedIn
                            </a>
                        </li>
                    </ul>
                </div>
            	<!-- ./widget -->
			</div>
			<!-- ./sidebar -->
		</div>
		<!-- ./col-md-4 col-lg-3 -->
	</div>
	<!-- ./row -->
</div>
<!-- /.container-fluid -->
@endsection	

@section('javascript')
    <script type="text/javascript">
        $(function () {
            $('[data-toggle="tooltip"]').tooltip();
        })
    </script>
@endsection
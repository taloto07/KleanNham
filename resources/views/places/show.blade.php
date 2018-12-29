@extends('layout')

@section('title', $place->name)

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
                        <span class="listing-row-rating place-rating" data-score="{{ $place->rate() }}"></span>
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
                        @if ( !is_null($place->contact->facebook) )
                            <li><a href="http://{{$place->contact->facebook}}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        @endif
                        @if ( !is_null($place->contact->email) )
                            <li><a href="mailto:{{$place->contact->email}}"><i class="fa fa-envelope"></i></a></li>
                        @endif
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

    @if ( $errors->any() )
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-danger" role="alert">
                <strong>
                    <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                    Comment Errors!
                </strong>
            </div>
            <!-- /.alert alert-danger -->
            </div>
        </div>
    @endif
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
                            <li><strong>Website</strong><span><a href="http://{{ $place->contact->website }}" target="_blank">{{ $place->contact->website }}</a></span></li>
                            <li><strong>Facebook</strong><span><a href="http://{{ $place->contact->facebook }}" target="_blank">{{ $place->contact->facebook }}</a></span></li>
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
                <iframe class="mb30" style="height:320px;width:100%;border:0;" src="https://www.google.com/maps/embed/v1/place?q={{ $place->latitude }},{{ $place->longitude }}&key={{env('GOOGLE_MAP_KEY')}}">
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
            <div class="listing-detail-section mb80" id="listing-detail-section-reviews" data-title="Reviews">
                <div class="box">
                    <div class="box-inner">
                        <div class="box-title">
                          <h2>Recent Reviews</h2>
                        </div>
                        <!-- /.box-title -->
                        <ul class="comments">
                            @foreach ( $place->comments as $comment )
                                <li>
                                    <div class="comment">
                                        <div class="comment-author">
                                            <a href="#" style="background-image: url( {{asset('assets/img/tmp/user-3.jpg')}} );"></a>
                                        </div>
                                        <!-- /.comment-author -->
                                        <div class="comment-content">
                                            <div class="comment-meta">
                                                <div class="comment-meta-author">
                                                    {{ $comment->user->name }}
                                                </div>
                                                <!-- /.comment-meta-author -->
                                                <div class="comment-meta-date">
                                                    <span> {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s',  $comment->created_at)->format('g:i A m/d/Y') }} </span>
                                                </div>
                                            </div>
                                            <!-- /.comment -->
                                            <div class="comment-body">
                                                <div class="comment-rating" data-score="{{ $comment->rate() }}">
                                                    {{ $comment->rate() }}
                                                </div>
                                                <!-- /.comment-rating -->
                                                <p>
                                                    {{ $comment->message }}
                                                </p>
                                            </div>
                                            <!-- /.comment-body -->
                                        </div>
                                        <!-- /.comment-content -->
                                    </div>
                                    <!-- /.comment -->
                                </li>
                            @endforeach
                        </ul>
                        <hr>
                        @if (Auth::guest())
                            <h4 class="overview">
                                <a href="{{route('login')}}">Login to comment</a>
                            </h4>
                        @else
                            <h4>Create New Review</h4>
                            <form method="post" action="{{ route('comments.store', ['id' => $place->id]) }}">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group {{ $errors->has('message') ? 'has-danger' : '' }}">
                                            <label class="control-label col-form-label" for="message">Message</label>
                                            <textarea class="form-control form-control-danger" style="height: 191px;" name="message">{{old('message')}}</textarea>
                                            <div class="form-control-feedback">{{ $errors->first('message') }}</div>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.col-* -->
                                </div>
                                <!-- /.row -->
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Overall</label>
                                            <div class="rating-item rating-overall"></div>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Meal Quality</label>
                                            <div class="rating-item rating-meal-quality"></div>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Staff</label>
                                            <div class="rating-item rating-staff"></div>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Parking</label>
                                            <div class="rating-item rating-parking"></div>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Hygiene</label>
                                            <div class="rating-item rating-hygiene"></div>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Location</label>
                                            <div class="rating-item rating-location"></div>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                                <button type="submit" class="btn btn-primary pull-right">Post Comment</button>
                            </form>
                        @endif
                    </div>
                    <!-- /.box-inner -->
                </div>
                <!-- /.box-->
            </div>
            <!-- /.listing-detail-section -->
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

            var items = ['overall', 'meal_quality', 'staff', 'parking', 'hygiene', 'location'];
            
            $('div.rating-item').each(function(i){
                $(this).raty({
                    half: true,
                    starType: 'i',
                    starOn: 'fa fa-star',
                    starHalf: 'fa fa-star-half-o',
                    starOff: 'fa fa-star-o',
                    scoreName: 'rating_' + items[i],
                });
            });

            $('div.comment-rating').each(function(){
                $(this).raty({
                    half: true,
                    starType: 'i',
                    starOn: 'fa fa-star',
                    starHalf: 'fa fa-star-half-o',
                    starOff: 'fa fa-star-o',
                    score: function(){
                        return $(this).attr('data-score');
                    },
                    readOnly: true
                });
            });

            $('span.place-rating').raty({
                
                half: true,
                starType: 'i',
                starOn: 'fa fa-star',
                starHalf: 'fa fa-star-half-o',
                starOff: 'fa fa-star-o',
                score: function(){
                    return $(this).attr('data-score');
                },
                readOnly: true
                
            });
        })
    </script>
@endsection
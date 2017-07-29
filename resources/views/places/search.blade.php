@extends('layout')

@section('title', $keyword)

@section('page-title')
    @include('partials._page-title', ['title' => 'Result of ' . $keyword])
@endsection
            
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-lg-9">
          	<div class="sort-options">
            	<ul class="sort-order">
              		<li class="{{ old('sort_order') == 'asc' ? 'active' : '' }}"><a href="#" id="sortOrder" data-value="asc"><i class="fa fa-chevron-up"></i></a></li>
              		<li class="{{ old('sort_order') == 'desc' ? 'active' : '' }}"><a href="#" id="sortOrder" data-value="desc"><i class="fa fa-chevron-down"></i></a></li>
            	</ul>
            	<ul class="sort-by">
              		<li class="{{ old('sort_by') == 'name' ? 'active' : '' }}"><a href="#" id="sortBy">Name</a></li>
              		<li class="{{ old('sort_by') == 'price' ? 'active' : '' }}"><a href="#" id="sortBy">Price</a></li>
              		<li class="{{ old('sort_by') == 'date' ? 'active' : '' }}"><a href="#" id="sortBy">Date</a></li>
            	</ul>
          	</div>
          	<!-- /.sort-options -->
          	@foreach($places as $place)
	          	<div class="listing-row">
	            	<div class="listing-row-inner">
	              		<a class="listing-row-image" href="{{ route('places.show', ['place' => $place->id]) }}">
	                		<span class="listing-row-image-content" style="background-image: url({{ $place->isPictureExist() ? asset('storage/' . $place->getThumbnail()) : url('assets/img/tmp/listing-24.jpg') }})"></span>
	              		</a>
	              		<div class="listing-row-content">
	                		<div class="listing-row-content-header">
	                  			<h3><a href="{{ route('places.show', ['place' => $place->id]) }}">{{ strtoupper( $place->name ) }}</a></h3>
	                  			<h4>{{ ucwords( $place->getFullAddress() ) }}</h4>
	                  			<div class="actions">
	                    			<div class="actions-button">
				                      	<span></span>
				                      	<span></span>
				                      	<span></span>
	                    			</div>
	                    			<!-- /.actions-button -->
                            @can('update', $place)
  	                    			<ul class="actions-list">
  	                      				<li><a href="{{route('places.edit', $place->id)}}">Edit</a></li>
  	                    			</ul>
                            @endcan
	                    			<!-- /.actions-list -->
	                  			</div>
	                  			<!-- /.actions -->
	                		</div>
	                		<!-- /.listing-row-content-header -->
	                		<div class="listing-row-content-meta">
	                			<div class="listing-row-content-meta-item listing-row-content-meta-category">
	                    			<span class="listing-row-rating">
                              <div class="rating" data-score="{{ $place->rate() }}">
                                {{ $place->rate() }}
                              </div>
	                    			</span>
			                  	</div>
	                  			<div class="listing-row-content-meta-item listing-row-content-meta-rating">
	                    			<span class="listing-row-rating" data-toggle="tooltip" data-placement="top" title="{{ $place->price->description }}">
	                      				@for($i = $place->price->amount; $i > 0; $i--)
	                      					<i class="fa fa-usd" aria-hidden="true"></i>
	                      				@endfor
	                    			</span>
			                  	</div>
	                		</div>
	                		<!-- /.listing-row-meta-item -->
	                		<div class="listing-row-content-meta">
	                  			{{-- <div class="listing-row-content-meta-item listing-row-content-meta-category">
	                    			<span class="tag tag-black">$923.00</span>
	                  			</div> --}}
	                  			<!-- /.listing-row-meta-item -->
	                  			@foreach($place->tags as $tag)
		                  			<div class="listing-row-content-meta-item listing-row-content-meta-category">
		                    			<span class="tag">{{ $tag->name }}</span>
		                  			</div>
		                  			<!-- /.listing-row-meta-item -->
		                  		@endforeach
	                		</div>
	                		<!-- /.listing-row-meta-item -->
	                		{{-- <div class="listing-row-content-body">
	                  			Nulla sed tortor luctus, scelerisque velit facilisis, euismod eros. Suspendisse varius dolor sit amet velit ullamcorper, in vestibulum mi efficitur. Fusce ipsum lorem, eleifend eget urna at
	                  			<div class="listing-row-content-read-more">
	                    			<a href="listings-detail.html">Read more</a>
	                  			</div>
	                  			<!-- /.listing-row-content-read-more -->
	                		</div> --}}
	                		<!-- /.listing-row-content-body -->
	              		</div>
	              		<!-- /.listing-row-content -->
	            	</div>
	            	<!-- /.listing-row-inner -->
	          	</div>
          	@endforeach
          	<!-- /.listing-row -->
          	<ul class="pagination pull-right">
            	<li class="page-item"><a class="page-link" href="#">Previous</a></li>
            	<li class="page-item active"><a class="page-link" href="#">1</a></li>
            	<li class="page-item"><a class="page-link" href="#">2</a></li>
            	<li class="page-item"><a class="page-link" href="#">3</a></li>
            	<li class="page-item"><a class="page-link" href="#">Next</a></li>
          	</ul>
        </div>
        <!-- /.col -->
        <div class="col-md-4 col-lg-3">
          <div class="sidebar">
            <div class="widget">
              <h3 class="widgettitle">Filter Places</h3>
              <div class="filter">
                <form method="GET" action="{{route('search')}}" id="search-form">
                  <input type="hidden" name="sort_by" value="{{old('sort_by')}}" id="sort_by">
                  <input type="hidden" name="sort_order" value="{{old('sort_order')}}" id="sort_order">
                  <h2>Search criteria</h2>
                  <div class="form-group">
                    <label>Keyword</label>
                    <input type="text" class="form-control" name="keyword" value="{{old('keyword')}}" placeholder="Search by keyword ...">
                  </div>
                  <!-- /.form-group -->
                  <div class="form-group">
                    <label>City</label>
                    <select class="form-control" name="city">
                      <option value="1" select="true">Phnom Penh</option>
                    </select>
                  </div>
                  <!-- /.form-group -->
                  <div class="form-group-btn form-group-btn-placeholder-gap">
                    <button type="submit" class="btn btn-primary btn-block">Search</button>
                  </div>
                  <!-- /.form-group -->
                </form>
              </div>
              <!-- /.filter -->
            </div>
            <!-- /.widget -->
          </div>
          <!-- /.sidebbar -->
        </div>
        <!-- /.col-* -->
  	</div>
  	<!-- /.row -->
</div>
<!-- /.container-fluid -->

@endsection

@section('javascript')
    <script type="text/javascript">
        $(function () {
            $('[data-toggle="tooltip"]').tooltip();

            $('div.rating').each(function(){
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
        });
        
        $(document).ready(function(){

          $('a#sortBy').click(function(){
            var sortBy = $(this).html().toLowerCase();
            $('input#sort_by').val(sortBy);
            $('form#search-form').submit();
          });

          $('a#sortOrder').click(function(){
            var sortOrder = $(this).attr('data-value');
            $('input#sort_order').val(sortOrder);
            $('form#search-form').submit();
          });
        });
    </script>
@endsection


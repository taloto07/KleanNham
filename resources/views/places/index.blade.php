@extends('layout')

@section('title', 'Listing Row')

@section('page-title')
    @include('partials._page-title', ['title' => 'Listing Row'])
@endsection
            
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-lg-9">
          	<div class="sort-options">
            	<ul class="sort-display">
              		<li class="active"><a href="#"><i class="fa fa-th-list"></i></a></li>
              		<li><a href="#"><i class="fa fa-th-large"></i></a></li>
            	</ul>
            	<ul class="sort-order">
              		<li class="active"><a href="#"><i class="fa fa-chevron-up"></i></a></li>
              		<li><a href="#"><i class="fa fa-chevron-down"></i></a></li>
            	</ul>
            	<ul class="sort-by">
              		<li class="active"><a href="#">Title</a></li>
              		<li><a href="#">Price</a></li>
              		<li><a href="#">Date</a></li>
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
	                    			<ul class="actions-list">
	                      				<li><a href="#">Add to compare</a></li>
	                      				<li><a href="#">Add to favorites</a></li>
	                      				<li><a href="#">Report listing</a></li>
	                    			</ul>
	                    			<!-- /.actions-list -->
	                  			</div>
	                  			<!-- /.actions -->
	                		</div>
	                		<!-- /.listing-row-content-header -->
	                		<div class="listing-row-content-meta">
	                			<div class="listing-row-content-meta-item listing-row-content-meta-category">
	                    			<span class="listing-row-rating">
	                      				<i class="fa fa-star"></i>
	                      				<i class="fa fa-star"></i>
	                  					<i class="fa fa-star"></i>
	                      				<i class="fa fa-star"></i>
	                      				<i class="fa fa-star"></i>
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
              <h3 class="widgettitle">Filter Listings</h3>
              <div class="filter">
                <form method="get" action="?">
                  <h2>Search criteria</h2>
                  <div class="form-group">
                    <label>Keyword</label>
                    <input type="text" class="form-control" placeholder="Search by keyword ...">
                  </div>
                  <!-- /.form-group -->
                  <div class="form-group">
                    <label>City</label>
                    <select class="form-control">
                      <option>Location</option>
                      <option>Chicago</option>
                      <option>San Francisco</option>
                      <option>Seattle</option>
                      <option>New York</option>
                      <option>Washington</option>
                    </select>
                  </div>
                  <!-- /.form-group -->
                  <div class="form-group">
                    <label>Price Slider</label>
                    <div id="slider" class="price-slider"></div>
                  </div>
                  <!-- /.form-group -->
                  <div class="form-group">
                    <label>Amenities</label>
                    <select class="form-control">
                      <option>Air conditioning</option>
                      <option>Balcony</option>
                      <option>Bedding</option>
                      <option>Cable TV</option>
                      <option>Cleaning after exit</option>
                      <option>Cofee pot</option>
                      <option>Computer</option>
                      <option>Cot</option>
                      <option>Dishwasher</option>
                    </select>
                  </div>
                  <!-- /.form-group -->
                  <div class="row">
                    <div class="form-group col-xl-6">
                      <label>Price From</label>
                      <input type="text" class="form-control" placeholder="Min. price">
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group col-xl-6">
                      <label>Price To</label>
                      <input type="text" class="form-control" placeholder="Max. price">
                    </div>
                    <!-- /.form-group -->
                  </div>
                  <!-- /.row -->
                  <h2>Category</h2>
                  <div class="checkbox">
                    <label><input type="radio" name="form-property-type" value="rent"> Property <span class="label">78</span></label>
                  </div>
                  <!-- /.checkbox -->
                  <div class="checkbox">
                    <label><input type="radio" name="form-property-type" value="sale"> Restaurant <span class="label">54</span></label>
                  </div>
                  <!-- /.checkbox -->
                  <div class="checkbox">
                    <label><input type="radio" name="form-property-type" value="sale"> Travel <span class="label">50</span></label>
                  </div>
                  <!-- /.checkbox -->
                  <div class="checkbox">
                    <label><input type="radio" name="form-property-type" value="lease"> Food &amp; Drink <span class="label">32</span></label>
                  </div>
                  <!-- /.checkbox -->
                  <div class="checkbox">
                    <label><input type="radio" name="form-property-type" value="lease"> Events <span class="label">53</span></label>
                  </div>
                  <!-- /.checkbox -->
                  <h2>Attributes</h2>
                  <div class="checkbox">
                    <label><input type="checkbox"> Reduced <span class="label">93</span></label>
                  </div>
                  <!-- /.checkbox -->
                  <div class="checkbox">
                    <label><input type="checkbox"> Featured <span class="label">54</span></label>
                  </div>
                  <!-- /.checkbox -->
                  <div class="checkbox">
                    <label><input type="checkbox"> Verified <span class="label">22</span></label>
                  </div>
                  <!-- /.checkbox -->
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
        })
    </script>
@endsection


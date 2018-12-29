@extends('layout')

@section('title', 'Home')

@section('hero-image-wrapper')
  <div class="hero-image-wrapper">
    <div class="hero-image-src" style="background-image: url('assets/img/tmp/hero-classified.jpg');">
    </div>
    <!-- /.hero-image-src -->
    <div class="hero-image">
      <div class="hero-image-inner">
        <div class="hero-image-content">
          <div class="container">
            <div class="center">
              <h1 class="hero-image-content-title-simple float-none">Discover Best Resturants</h1>
              <p class="float-none">Find any resturants within your finger tips.</p>
              <form method="GET" action="{{route('search')}}">
                <div class="row justify-content-sm-center">
                  <div class="col-sm-4">
                    <div class="input-group">
                      <span class="input-group-addon no-border"><i class="fa fa-location-arrow"></i></span>
                      <input type="text" class="form-control no-border form-control-xl" name="keyword" placeholder="Search by keyword ...">
                    </div>
                    <!-- /.form-group -->
                  </div>
                  <!-- /.col-* -->
                  <div class="col-sm-2">
                    <button type="submit" class="btn btn-primary btn-xl">
                      <i class="fa fa-search"></i> Search
                    </button>
                  </div>
                  <!-- /.col-* -->
                </div>
                <!-- /.row -->
              </form>
            </div>
          </div>
          <!-- /.container -->
        </div>
        <!-- /.hero-image-content -->
      </div>
      <!-- /.hero-image-inner -->
      {{-- 
      <div class="hero-image-categories">
        <a href="#" class="hero-image-category">
          <i class="fa fa-commenting-o"></i>
          <strong>Clubs</strong>
        </a><!-- /.hero-image-category -->
        <a href="#" class="hero-image-category">
          <i class="fa fa-snowflake-o"></i>
          <strong>Sky Resorts</strong>
        </a><!-- /.hero-image-category -->
        <a href="#" class="hero-image-category">
          <i class="fa fa-star-o"></i>
          <strong>Bestsellers</strong>
        </a><!-- /.hero-image-category -->
        <a href="#" class="hero-image-category">
          <i class="fa fa-hourglass-o"></i>
          <strong>Coffee</strong>
        </a><!-- /.hero-image-category -->
        <a href="#" class="hero-image-category">
          <i class="fa fa-map-o"></i>
          <strong>Spots</strong>
        </a><!-- /.hero-image-category -->
        <a href="#" class="hero-image-category">
          <i class="fa fa-picture-o"></i>
          <strong>Galleries</strong>
        </a><!-- /.hero-image-category -->
        <a href="#" class="hero-image-category">
          <i class="fa fa-handshake-o"></i>
          <strong>Businesses</strong>
        </a><!-- /.hero-image-category -->
      </div>
       --}}
      <!-- /.hero-image-categories -->
    </div>
    <!-- /.hero-image -->
</div>
<!-- /.hero-image-wrapper -->
@endsection

@section('content')

<div class="container">
  <div class="content">
    <div class="page-header">
      <h2>Best Rated Locations</h2>
      <p>See the most recent listings available in directory catalogue added by our users. All listings are verified by our editors staff.</p>
    </div>
    <div class="row">
      <div class="col-sm-4">
        <a class="image-item" href="listings-detail.html">
          <span class="image-item-background" style="background-image: url('assets/img/tmp/location-1.jpg')"></span>
          <strong>Chicago</strong>
        </a><!-- /.image-item -->
      </div>
      <!-- /.col-* -->
      <div class="col-sm-4">
        <a class="image-item" href="listings-detail.html">
          <span class="image-item-background" style="background-image: url('assets/img/tmp/location-2.jpg')"></span>
          <strong>New York</strong>
        </a><!-- /.image-item -->
      </div>
      <!-- /.col-* -->
      <div class="col-sm-4">
        <a class="image-item" href="listings-detail.html">
          <span class="image-item-background" style="background-image: url('assets/img/tmp/location-3.jpg')"></span>
          <strong>Boston</strong>
        </a><!-- /.image-item -->
      </div>
      <!-- /.col-* -->
      <div class="col-sm-4">
        <a class="image-item" href="listings-detail.html">
          <span class="image-item-background" style="background-image: url('assets/img/tmp/location-4.jpg')"></span>
          <strong>Washington</strong>
        </a><!-- /.image-item -->
      </div>
      <!-- /.col-* -->
      <div class="col-sm-4">
        <a class="image-item" href="listings-detail.html">
          <span class="image-item-background" style="background-image: url('assets/img/tmp/location-5.jpg')"></span>
          <strong>Prague</strong>
        </a><!-- /.image-item -->
      </div>
      <!-- /.col-* -->
      <div class="col-sm-4">
        <a class="image-item" href="listings-detail.html">
          <span class="image-item-background" style="background-image: url('assets/img/tmp/location-6.jpg')"></span>
          <strong>Rome</strong>
        </a><!-- /.image-item -->
      </div>
      <!-- /.col-* -->
    </div>
    <!-- /.row -->
    <div class="block mb0">
      <div class="block-inner">
        <div class="page-header">
          <h2>Favorite Listing Categories</h2>
          <p>Easily assign categories &amp; tags to approved listings and then display categories with icons for better user experience.</p>
        </div>
        <div class="categories-wrapper">
          <div class="categories">
            <div class="row">
              <div class="col-md-6 col-lg-3">
                <div class="category-column">
                  <h3><i class="fa fa-diamond"></i> Automotive</h3>
                  <ul>
                    <li><a href="#">Luxury Cars <span>32</span></a></li>
                    <li><a href="#">Scooters &amp; Bikes <span>32</span></a></li>
                    <li><a href="#">Sport cars <span>32</span></a></li>
                    <li><a href="#">SUVs &amp; Pickups <span>32</span></a></li>
                    <li><a href="#">Vans &amp; Trucks <span>32</span></a></li>
                  </ul>
                </div>
                <!-- /.category-column -->
              </div>
              <!-- /.col-* -->
              <div class="col-md-6 col-lg-3">
                <div class="category-column">
                  <h3><i class="fa fa-diamond"></i> Business</h3>
                  <ul>
                    <li><a href="#">Animals &amp; Greenpeace <span>32</span></a></li>
                    <li><a href="#">Art &amp; Music <span>32</span></a></li>
                    <li><a href="#">Finance &amp; Marketing <span>32</span></a></li>
                    <li><a href="#">Food &amp; Gastronomy <span>32</span></a></li>
                    <li><a href="#">Industrial &amp; Mechanics <span>32</span></a></li>
                  </ul>
                </div>
                <!-- /.category-column -->
              </div>
              <!-- /.col-* -->
              <div class="col-md-6 col-lg-3">
                <div class="category-column">
                  <h3><i class="fa fa-diamond"></i> Education</h3>
                  <ul>
                    <li><a href="#">Courses <span>32</span></a></li>
                    <li><a href="#">Driving lessons <span>32</span></a></li>
                    <li><a href="#">Lectures <span>32</span></a></li>
                    <li><a href="#">Seminars <span>32</span></a></li>
                    <li><a href="#">Workshops <span>32</span></a></li>
                  </ul>
                </div>
                <!-- /.category-column -->
              </div>
              <!-- /.col-* -->
              <div class="col-md-6 col-lg-3">
                <div class="category-column">
                  <h3><i class="fa fa-diamond"></i> Events</h3>
                  <ul>
                    <li><a href="#">Cooking &amp; Baking <span>32</span></a></li>
                    <li><a href="#">Global problems <span>32</span></a></li>
                    <li><a href="#">Greenpeace <span>32</span></a></li>
                    <li><a href="#">IT World <span>32</span></a></li>
                    <li><a href="#">Music <span>32</span></a></li>
                  </ul>
                </div>
                <!-- /.category-column -->
              </div>
              <!-- /.col-* -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.categories -->
        </div>
        <!-- /.categories-wrapper -->
      </div>
      <!-- /.block-inner -->
    </div>
    <!-- /.block-inner -->
    <div class="carousel-fullwidth">
      <div class="carousel-fullwidth-inner">
        <div class="listing-boxes">
          <div class="row mb-30 carousel-items">
            <div class="col">
              <div class="listing-box">
                <div class="listing-box-inner">
                  <span class="listing-box-featured">Featured</span>
                  <a href="listings-detail.html" class="listing-box-image">
                    <span class="listing-box-image-content" style="background-image: url(assets/img/tmp/listing-1.jpg)"></span><!-- /.listing-box-image-content -->
                    <span class="listing-box-category tag">Education</span>
                    <span class="listing-box-rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                    </span>
                  </a><!-- /.listing-box-image -->
                  <div class="listing-box-content">
                    <h2><a href="listings-detail.html">Ideal Garden Maintenance</a></h2>
                    <h3>2813 Preston Street Wichita</h3>
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
                  <!-- /.listing-box-content -->
                  <div class="listing-box-attributes">
                    <dl>
                      <dt>Miles</dt>
                      <dd>128K</dd>
                      <dt>Engine</dt>
                      <dd>Diesel</dd>
                      <dt>Type</dt>
                      <dd>Aston Martin</dd>
                    </dl>
                  </div>
                  <!-- /.listing-box-attributes -->
                  <div class="listing-box-attributes-icons">
                    <ul>
                      <li><i class="fa fa-arrows"></i> <span>182sqft</span></li>
                      <li><i class="fa fa-shower"></i> <span>2</span></li>
                      <li><i class="fa fa-car"></i> <span>1</span></li>
                    </ul>
                  </div>
                  <!-- /.listing-box-attributes -->
                </div>
                <!-- /.listing-box-inner -->
              </div>
              <!-- /.listing-box -->
            </div>
            <div class="col">
              <div class="listing-box">
                <div class="listing-box-inner">
                  <a href="listings-detail.html" class="listing-box-image">
                    <span class="listing-box-image-content" style="background-image: url(assets/img/tmp/listing-24.jpg)"></span><!-- /.listing-box-image-content -->
                    <span class="listing-box-category tag">Business</span>
                    <span class="listing-box-rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                    </span>
                  </a><!-- /.listing-box-image -->
                  <div class="listing-box-content">
                    <h2><a href="listings-detail.html">Little Tavern</a></h2>
                    <h3>2164 Hilltop Haven Drive Newark</h3>
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
                  <!-- /.listing-box-content -->
                  <div class="listing-box-attributes">
                    <dl>
                      <dt>Miles</dt>
                      <dd>128K</dd>
                      <dt>Engine</dt>
                      <dd>Diesel</dd>
                      <dt>Type</dt>
                      <dd>Aston Martin</dd>
                    </dl>
                  </div>
                  <!-- /.listing-box-attributes -->
                  <div class="listing-box-attributes-icons">
                    <ul>
                      <li><i class="fa fa-arrows"></i> <span>182sqft</span></li>
                      <li><i class="fa fa-shower"></i> <span>2</span></li>
                      <li><i class="fa fa-car"></i> <span>1</span></li>
                    </ul>
                  </div>
                  <!-- /.listing-box-attributes -->
                </div>
                <!-- /.listing-box-inner -->
              </div>
              <!-- /.listing-box -->
            </div>
            <div class="col">
              <div class="listing-box">
                <div class="listing-box-inner">
                  <div class="listing-box-info">
                    Currently viewing <strong>8</strong> people.
                  </div>
                  <!-- /.listing-box-info -->
                  <a href="listings-detail.html" class="listing-box-image">
                    <span class="listing-box-image-content" style="background-image: url(assets/img/tmp/listing-2.jpg)"></span><!-- /.listing-box-image-content -->
                    <span class="listing-box-category tag">Gastronomy</span>
                    <span class="listing-box-rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-o"></i>
                    </span>
                  </a><!-- /.listing-box-image -->
                  <div class="listing-box-content">
                    <h2><a href="listings-detail.html">Piano Lessons For Beginners</a></h2>
                    <h3>3071 Ash Avenue Saint Louis</h3>
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
                  <!-- /.listing-box-content -->
                  <div class="listing-box-attributes">
                    <dl>
                      <dt>Miles</dt>
                      <dd>128K</dd>
                      <dt>Engine</dt>
                      <dd>Diesel</dd>
                      <dt>Type</dt>
                      <dd>Aston Martin</dd>
                    </dl>
                  </div>
                  <!-- /.listing-box-attributes -->
                  <div class="listing-box-attributes-icons">
                    <ul>
                      <li><i class="fa fa-arrows"></i> <span>182sqft</span></li>
                      <li><i class="fa fa-shower"></i> <span>2</span></li>
                      <li><i class="fa fa-car"></i> <span>1</span></li>
                    </ul>
                  </div>
                  <!-- /.listing-box-attributes -->
                </div>
                <!-- /.listing-box-inner -->
              </div>
              <!-- /.listing-box -->
            </div>
            <div class="col">
              <div class="listing-box">
                <div class="listing-box-inner">
                  <a href="listings-detail.html" class="listing-box-image">
                    <span class="listing-box-image-content" style="background-image: url(assets/img/tmp/listing-8.jpg)"></span><!-- /.listing-box-image-content -->
                    <span class="listing-box-category tag">Cooking</span>
                    <span class="listing-box-rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-o"></i>
                    </span>
                  </a><!-- /.listing-box-image -->
                  <div class="listing-box-content">
                    <h2><a href="listings-detail.html">Paris Museum</a></h2>
                    <h3>2858 Neuport Lane Norcross</h3>
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
                  <!-- /.listing-box-content -->
                  <div class="listing-box-attributes">
                    <dl>
                      <dt>Miles</dt>
                      <dd>128K</dd>
                      <dt>Engine</dt>
                      <dd>Diesel</dd>
                      <dt>Type</dt>
                      <dd>Aston Martin</dd>
                    </dl>
                  </div>
                  <!-- /.listing-box-attributes -->
                  <div class="listing-box-attributes-icons">
                    <ul>
                      <li><i class="fa fa-arrows"></i> <span>182sqft</span></li>
                      <li><i class="fa fa-shower"></i> <span>2</span></li>
                      <li><i class="fa fa-car"></i> <span>1</span></li>
                    </ul>
                  </div>
                  <!-- /.listing-box-attributes -->
                </div>
                <!-- /.listing-box-inner -->
              </div>
              <!-- /.listing-box -->
            </div>
            <div class="col">
              <div class="listing-box">
                <div class="listing-box-inner">
                  <div class="listing-box-info">
                    Most visited monthly trendsetter.
                  </div>
                  <!-- /.listing-box-info -->
                  <a href="listings-detail.html" class="listing-box-image">
                    <span class="listing-box-image-content" style="background-image: url(assets/img/tmp/listing-2.jpg)"></span><!-- /.listing-box-image-content -->
                    <span class="listing-box-category tag">Events</span>
                    <span class="listing-box-rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-o"></i>
                    </span>
                  </a><!-- /.listing-box-image -->
                  <div class="listing-box-content">
                    <h2><a href="listings-detail.html">Griff's Hamburgers</a></h2>
                    <h3>3228 Hillview Street Columbia</h3>
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
                  <!-- /.listing-box-content -->
                  <div class="listing-box-attributes">
                    <dl>
                      <dt>Miles</dt>
                      <dd>128K</dd>
                      <dt>Engine</dt>
                      <dd>Diesel</dd>
                      <dt>Type</dt>
                      <dd>Aston Martin</dd>
                    </dl>
                  </div>
                  <!-- /.listing-box-attributes -->
                  <div class="listing-box-attributes-icons">
                    <ul>
                      <li><i class="fa fa-arrows"></i> <span>182sqft</span></li>
                      <li><i class="fa fa-shower"></i> <span>2</span></li>
                      <li><i class="fa fa-car"></i> <span>1</span></li>
                    </ul>
                  </div>
                  <!-- /.listing-box-attributes -->
                </div>
                <!-- /.listing-box-inner -->
              </div>
              <!-- /.listing-box -->
            </div>
            <div class="col">
              <div class="listing-box">
                <div class="listing-box-inner">
                  <a href="listings-detail.html" class="listing-box-image">
                    <span class="listing-box-image-content" style="background-image: url(assets/img/tmp/listing-4.jpg)"></span><!-- /.listing-box-image-content -->
                    <span class="listing-box-category tag">Courses</span>
                    <span class="listing-box-rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                    </span>
                  </a><!-- /.listing-box-image -->
                  <div class="listing-box-content">
                    <h2><a href="listings-detail.html">Custom Lawn Care</a></h2>
                    <h3>2287 Maple Avenue Stockton</h3>
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
                  <!-- /.listing-box-content -->
                  <div class="listing-box-attributes">
                    <dl>
                      <dt>Miles</dt>
                      <dd>128K</dd>
                      <dt>Engine</dt>
                      <dd>Diesel</dd>
                      <dt>Type</dt>
                      <dd>Aston Martin</dd>
                    </dl>
                  </div>
                  <!-- /.listing-box-attributes -->
                  <div class="listing-box-attributes-icons">
                    <ul>
                      <li><i class="fa fa-arrows"></i> <span>182sqft</span></li>
                      <li><i class="fa fa-shower"></i> <span>2</span></li>
                      <li><i class="fa fa-car"></i> <span>1</span></li>
                    </ul>
                  </div>
                  <!-- /.listing-box-attributes -->
                </div>
                <!-- /.listing-box-inner -->
              </div>
              <!-- /.listing-box -->
            </div>
            <div class="col">
              <div class="listing-box">
                <div class="listing-box-inner">
                  <a href="listings-detail.html" class="listing-box-image">
                    <span class="listing-box-image-content" style="background-image: url(assets/img/tmp/listing-4.jpg)"></span><!-- /.listing-box-image-content -->
                    <span class="listing-box-category tag">Workshops</span>
                    <span class="listing-box-rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </span>
                  </a><!-- /.listing-box-image -->
                  <div class="listing-box-content">
                    <h2><a href="listings-detail.html">Healthy Breakfast</a></h2>
                    <h3>1148 Elk Rd Little Tucson</h3>
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
                  <!-- /.listing-box-content -->
                  <div class="listing-box-attributes">
                    <dl>
                      <dt>Miles</dt>
                      <dd>128K</dd>
                      <dt>Engine</dt>
                      <dd>Diesel</dd>
                      <dt>Type</dt>
                      <dd>Aston Martin</dd>
                    </dl>
                  </div>
                  <!-- /.listing-box-attributes -->
                  <div class="listing-box-attributes-icons">
                    <ul>
                      <li><i class="fa fa-arrows"></i> <span>182sqft</span></li>
                      <li><i class="fa fa-shower"></i> <span>2</span></li>
                      <li><i class="fa fa-car"></i> <span>1</span></li>
                    </ul>
                  </div>
                  <!-- /.listing-box-attributes -->
                </div>
                <!-- /.listing-box-inner -->
              </div>
              <!-- /.listing-box -->
            </div>
            <div class="col">
              <div class="listing-box">
                <div class="listing-box-inner">
                  <a href="listings-detail.html" class="listing-box-image">
                    <span class="listing-box-image-content" style="background-image: url(assets/img/tmp/listing-3.jpg)"></span><!-- /.listing-box-image-content -->
                    <span class="listing-box-category tag">Museum</span>
                    <span class="listing-box-rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                    </span>
                  </a><!-- /.listing-box-image -->
                  <div class="listing-box-content">
                    <h2><a href="listings-detail.html">Erb Lumber</a></h2>
                    <h3>2155 Philli Lane Mcalester</h3>
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
                  <!-- /.listing-box-content -->
                  <div class="listing-box-attributes">
                    <dl>
                      <dt>Miles</dt>
                      <dd>128K</dd>
                      <dt>Engine</dt>
                      <dd>Diesel</dd>
                      <dt>Type</dt>
                      <dd>Aston Martin</dd>
                    </dl>
                  </div>
                  <!-- /.listing-box-attributes -->
                  <div class="listing-box-attributes-icons">
                    <ul>
                      <li><i class="fa fa-arrows"></i> <span>182sqft</span></li>
                      <li><i class="fa fa-shower"></i> <span>2</span></li>
                      <li><i class="fa fa-car"></i> <span>1</span></li>
                    </ul>
                  </div>
                  <!-- /.listing-box-attributes -->
                </div>
                <!-- /.listing-box-inner -->
              </div>
              <!-- /.listing-box -->
            </div>
            <div class="col">
              <div class="listing-box">
                <div class="listing-box-inner">
                  <div class="listing-box-info">
                    <strong>120</strong> people already purchased.
                  </div>
                  <!-- /.listing-box-info -->
                  <a href="listings-detail.html" class="listing-box-image">
                    <span class="listing-box-image-content" style="background-image: url(assets/img/tmp/listing-16.jpg)"></span><!-- /.listing-box-image-content -->
                    <span class="listing-box-category tag">Health</span>
                    <span class="listing-box-rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                    </span>
                  </a><!-- /.listing-box-image -->
                  <div class="listing-box-content">
                    <h2><a href="listings-detail.html">Tower Excursion</a></h2>
                    <h3>1081 Woodside Circle Crestview</h3>
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
                  <!-- /.listing-box-content -->
                  <div class="listing-box-attributes">
                    <dl>
                      <dt>Miles</dt>
                      <dd>128K</dd>
                      <dt>Engine</dt>
                      <dd>Diesel</dd>
                      <dt>Type</dt>
                      <dd>Aston Martin</dd>
                    </dl>
                  </div>
                  <!-- /.listing-box-attributes -->
                  <div class="listing-box-attributes-icons">
                    <ul>
                      <li><i class="fa fa-arrows"></i> <span>182sqft</span></li>
                      <li><i class="fa fa-shower"></i> <span>2</span></li>
                      <li><i class="fa fa-car"></i> <span>1</span></li>
                    </ul>
                  </div>
                  <!-- /.listing-box-attributes -->
                </div>
                <!-- /.listing-box-inner -->
              </div>
              <!-- /.listing-box -->
            </div>
            <div class="col">
              <div class="listing-box">
                <div class="listing-box-inner">
                  <a href="listings-detail.html" class="listing-box-image">
                    <span class="listing-box-image-content" style="background-image: url(assets/img/tmp/listing-15.jpg)"></span><!-- /.listing-box-image-content -->
                    <span class="listing-box-category tag">Driving</span>
                    <span class="listing-box-rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                    </span>
                  </a><!-- /.listing-box-image -->
                  <div class="listing-box-content">
                    <h2><a href="listings-detail.html">Royal Hall</a></h2>
                    <h3>3690 Tecumsah Lane Cedar Rapids</h3>
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
                  <!-- /.listing-box-content -->
                  <div class="listing-box-attributes">
                    <dl>
                      <dt>Miles</dt>
                      <dd>128K</dd>
                      <dt>Engine</dt>
                      <dd>Diesel</dd>
                      <dt>Type</dt>
                      <dd>Aston Martin</dd>
                    </dl>
                  </div>
                  <!-- /.listing-box-attributes -->
                  <div class="listing-box-attributes-icons">
                    <ul>
                      <li><i class="fa fa-arrows"></i> <span>182sqft</span></li>
                      <li><i class="fa fa-shower"></i> <span>2</span></li>
                      <li><i class="fa fa-car"></i> <span>1</span></li>
                    </ul>
                  </div>
                  <!-- /.listing-box-attributes -->
                </div>
                <!-- /.listing-box-inner -->
              </div>
              <!-- /.listing-box -->
            </div>
            <div class="col">
              <div class="listing-box">
                <div class="listing-box-inner">
                  <div class="listing-box-info">
                    Great price for first <strong>10</strong> buyers.
                  </div>
                  <!-- /.listing-box-info -->
                  <a href="listings-detail.html" class="listing-box-image">
                    <span class="listing-box-image-content" style="background-image: url(assets/img/tmp/listing-20.jpg)"></span><!-- /.listing-box-image-content -->
                    <span class="listing-box-category tag">Finance</span>
                    <span class="listing-box-rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                    </span>
                  </a><!-- /.listing-box-image -->
                  <div class="listing-box-content">
                    <h2><a href="listings-detail.html">Tasty Pizza Restaurant</a></h2>
                    <h3>2653 Cost Avenue College Park</h3>
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
                  <!-- /.listing-box-content -->
                  <div class="listing-box-attributes">
                    <dl>
                      <dt>Miles</dt>
                      <dd>128K</dd>
                      <dt>Engine</dt>
                      <dd>Diesel</dd>
                      <dt>Type</dt>
                      <dd>Aston Martin</dd>
                    </dl>
                  </div>
                  <!-- /.listing-box-attributes -->
                  <div class="listing-box-attributes-icons">
                    <ul>
                      <li><i class="fa fa-arrows"></i> <span>182sqft</span></li>
                      <li><i class="fa fa-shower"></i> <span>2</span></li>
                      <li><i class="fa fa-car"></i> <span>1</span></li>
                    </ul>
                  </div>
                  <!-- /.listing-box-attributes -->
                </div>
                <!-- /.listing-box-inner -->
              </div>
              <!-- /.listing-box -->
            </div>
            <div class="col">
              <div class="listing-box">
                <div class="listing-box-inner">
                  <a href="listings-detail.html" class="listing-box-image">
                    <span class="listing-box-image-content" style="background-image: url(assets/img/tmp/listing-22.jpg)"></span><!-- /.listing-box-image-content -->
                    <span class="listing-box-category tag">Law</span>
                    <span class="listing-box-rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                    </span>
                  </a><!-- /.listing-box-image -->
                  <div class="listing-box-content">
                    <h2><a href="listings-detail.html">Freelance Office</a></h2>
                    <h3>4458 Thompson Drive Richmond</h3>
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
                  <!-- /.listing-box-content -->
                  <div class="listing-box-attributes">
                    <dl>
                      <dt>Miles</dt>
                      <dd>128K</dd>
                      <dt>Engine</dt>
                      <dd>Diesel</dd>
                      <dt>Type</dt>
                      <dd>Aston Martin</dd>
                    </dl>
                  </div>
                  <!-- /.listing-box-attributes -->
                  <div class="listing-box-attributes-icons">
                    <ul>
                      <li><i class="fa fa-arrows"></i> <span>182sqft</span></li>
                      <li><i class="fa fa-shower"></i> <span>2</span></li>
                      <li><i class="fa fa-car"></i> <span>1</span></li>
                    </ul>
                  </div>
                  <!-- /.listing-box-attributes -->
                </div>
                <!-- /.listing-box-inner -->
              </div>
              <!-- /.listing-box -->
            </div>
            <div class="col">
              <div class="listing-box">
                <div class="listing-box-inner">
                  <span class="listing-box-featured">Featured</span>
                  <a href="listings-detail.html" class="listing-box-image">
                    <span class="listing-box-image-content" style="background-image: url(assets/img/tmp/listing-13.jpg)"></span><!-- /.listing-box-image-content -->
                    <span class="listing-box-category tag">Gastronomy</span>
                    <span class="listing-box-rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-o"></i>
                    </span>
                  </a><!-- /.listing-box-image -->
                  <div class="listing-box-content">
                    <h2><a href="listings-detail.html">SUV Cars Reseller</a></h2>
                    <h3>4692 Arbutus Drive Miami Springs</h3>
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
                  <!-- /.listing-box-content -->
                  <div class="listing-box-attributes">
                    <dl>
                      <dt>Miles</dt>
                      <dd>128K</dd>
                      <dt>Engine</dt>
                      <dd>Diesel</dd>
                      <dt>Type</dt>
                      <dd>Aston Martin</dd>
                    </dl>
                  </div>
                  <!-- /.listing-box-attributes -->
                  <div class="listing-box-attributes-icons">
                    <ul>
                      <li><i class="fa fa-arrows"></i> <span>182sqft</span></li>
                      <li><i class="fa fa-shower"></i> <span>2</span></li>
                      <li><i class="fa fa-car"></i> <span>1</span></li>
                    </ul>
                  </div>
                  <!-- /.listing-box-attributes -->
                </div>
                <!-- /.listing-box-inner -->
              </div>
              <!-- /.listing-box -->
            </div>
            <div class="col">
              <div class="listing-box">
                <div class="listing-box-inner">
                  <span class="listing-box-featured">Featured</span>
                  <a href="listings-detail.html" class="listing-box-image">
                    <span class="listing-box-image-content" style="background-image: url(assets/img/tmp/listing-1.jpg)"></span><!-- /.listing-box-image-content -->
                    <span class="listing-box-category tag">Luxury Cars</span>
                    <span class="listing-box-rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                    </span>
                  </a><!-- /.listing-box-image -->
                  <div class="listing-box-content">
                    <h2><a href="listings-detail.html">Cozzy Coffee Shop</a></h2>
                    <h3>4700 Hart Country Lane Blue Ridge</h3>
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
                  <!-- /.listing-box-content -->
                  <div class="listing-box-attributes">
                    <dl>
                      <dt>Miles</dt>
                      <dd>128K</dd>
                      <dt>Engine</dt>
                      <dd>Diesel</dd>
                      <dt>Type</dt>
                      <dd>Aston Martin</dd>
                    </dl>
                  </div>
                  <!-- /.listing-box-attributes -->
                  <div class="listing-box-attributes-icons">
                    <ul>
                      <li><i class="fa fa-arrows"></i> <span>182sqft</span></li>
                      <li><i class="fa fa-shower"></i> <span>2</span></li>
                      <li><i class="fa fa-car"></i> <span>1</span></li>
                    </ul>
                  </div>
                  <!-- /.listing-box-attributes -->
                </div>
                <!-- /.listing-box-inner -->
              </div>
              <!-- /.listing-box -->
            </div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.listing-boxes -->
      </div>
      <!-- /.carousel-fullwidth-inner -->
    </div>
    <!-- /.carousel-fullwidth -->
    <div class="page-header">
      <h2>Most Robust Directory Template Ever Made</h2>
      <p>Duis eget ornare purus, feugiat consequat sem. Nullam non nisl blandit, tincidunt diam id, consequat elit. Nunc augue libero, viverra a odio</p>
    </div>
    <div class="posts-small">
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="post-small">
            <div class="post-small-image">
              <a href="#">
                <img src="assets/img/tmp/listing-1.jpg" alt="">
              </a>
            </div>
            <!-- /.post-small-image -->
            <h3><a href="#">Vestibulum suscipit mauris</a></h3>
            <div class="post-small-attribute">
              22/11/2017 18:32
            </div>
            <!-- /.post-small-attribute -->
            <p>
              Phasellus et vulputate orci, vitae mollis ligula. Etiam ut tempor tellus, eu hendrerit
            </p>
            <a href="#" class="btn btn-simple">Read Post</a>
          </div>
          <!-- /.post-small -->
        </div>
        <!-- /.col-* -->
        <div class="col-md-6 col-lg-3">
          <div class="post-small">
            <div class="post-small-image">
              <a href="#">
                <img src="assets/img/tmp/listing-2.jpg" alt="">
              </a>
            </div>
            <!-- /.post-small-image -->
            <h3><a href="#">Vestibulum suscipit mauris</a></h3>
            <div class="post-small-attribute">
              22/11/2017 18:32
            </div>
            <!-- /.post-small-attribute -->
            <p>
              Phasellus et vulputate orci, vitae mollis ligula. Etiam ut tempor tellus, eu hendrerit
            </p>
            <a href="#" class="btn btn-simple">Read Post</a>
          </div>
          <!-- /.post-small -->
        </div>
        <!-- /.col-* -->
        <div class="col-md-6 col-lg-3">
          <div class="post-small">
            <div class="post-small-image">
              <a href="#">
                <img src="assets/img/tmp/listing-3.jpg" alt="">
              </a>
            </div>
            <!-- /.post-small-image -->
            <h3><a href="#">Vestibulum suscipit mauris</a></h3>
            <div class="post-small-attribute">
              22/11/2017 18:32
            </div>
            <!-- /.post-small-attribute -->
            <p>
              Phasellus et vulputate orci, vitae mollis ligula. Etiam ut tempor tellus, eu hendrerit
            </p>
            <a href="#" class="btn btn-simple">Read Post</a>
          </div>
          <!-- /.post-small -->
        </div>
        <!-- /.col-* -->
        <div class="col-md-6 col-lg-3">
          <div class="post-small">
            <div class="post-small-image">
              <a href="#">
                <img src="assets/img/tmp/listing-4.jpg" alt="">
              </a>
            </div>
            <!-- /.post-small-image -->
            <h3><a href="#">Vestibulum suscipit mauris</a></h3>
            <div class="post-small-attribute">
              22/11/2017 18:32
            </div>
            <!-- /.post-small-attribute -->
            <p>
              Phasellus et vulputate orci, vitae mollis ligula. Etiam ut tempor tellus, eu hendrerit
            </p>
            <a href="#" class="btn btn-simple">Read Post</a>
          </div>
          <!-- /.post-small -->
        </div>
        <!-- /.col-* -->
      </div>
      <!-- /.row -->
    </div>
    <div class="page-header">
      <h2>Most Robust Directory Template Ever Made</h2>
      <p>Duis eget ornare purus, feugiat consequat sem. Nullam non nisl blandit, tincidunt diam id, consequat elit. Nunc augue libero, viverra a odio</p>
    </div>
    <div class="pricing">
      <div class="row">
        <div class="pricing-col-wrapper col-lg-4">
          <div class="pricing-col">
            <h2 class="pricing-title">Startup</h2>
            <div class="pricing-price">
              <span class="pricing-currency">$</span> <span class="pricing-value">8.90</span>
            </div>
            <!-- /.pricing-price -->
            <ul class="pricing-features">
              <li>10 Properties</li>
              <li>Up To 3 Agents</li>
              <li>Agency Management</li>
              <li>1 Year Updates</li>
              <li>Mail Support</li>
            </ul>
            <!-- /.pricing-featured -->
            <a href="#" class="pricing-btn">Select Pricing Plan</a>
          </div>
          <!-- /.pricing-col -->
        </div>
        <!-- /.pricing-col-wrapper-->
        <div class="pricing-col-wrapper col-lg-4">
          <div class="pricing-col pricing-col-light" style="background-image: url('assets/img/tmp/pricing-1.jpg');">
            <h2 class="pricing-title">Business</h2>
            <div class="pricing-price">
              <span class="pricing-currency">$</span> <span class="pricing-value">19.90</span>
            </div>
            <!-- /.pricing-price -->
            <ul class="pricing-features">
              <li>100 Properties</li>
              <li>Up To 10 Agents</li>
              <li>Agency Management</li>
              <li>2 Year Updates</li>
              <li>Mail Support</li>
            </ul>
            <!-- /.pricing-featured -->
            <a href="#" class="pricing-btn">Select Pricing Plan</a>
          </div>
          <!-- /.pricing-col -->
        </div>
        <!-- /.pricing-col-wrapper -->
        <div class="pricing-col-wrapper col-lg-4">
          <div class="pricing-col">
            <h2 class="pricing-title">Professional</h2>
            <div class="pricing-price">
              <span class="pricing-currency">$</span> <span class="pricing-value">49.90</span>
            </div>
            <!-- /.pricing-price -->
            <ul class="pricing-features">
              <li>Unlimited Properties</li>
              <li>Unlimited Agents</li>
              <li>Agency Management</li>
              <li>Updates Forever</li>
              <li>Mail Support</li>
            </ul>
            <!-- /.pricing-featured -->
            <a href="#" class="pricing-btn">Select Pricing Plan</a>
          </div>
          <!-- /.pricing-col -->
        </div>
        <!-- /.pricing-col-wrapper -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.pricing -->
    <div class="testimonials-wrapper">
      <div class="row">
        <div class="col-lg-7 push-lg-2">
          <div class="testimonials">
            <div class="testimonial-inner">
              <blockquote>
                Aenean porta sem a nulla vehicula commodo. Quisque eleifend mollis tincidunt. Phasellus purus leo, facilisis in egestas non, gravida non felis. Nullam sit amet vestibulum leo.
              </blockquote>
              <div class="testimonial-user">
                <span class="testimonial-user-avatar" style="background-image: url('assets/img/tmp/user-1.jpg');"></span>
                <span class="testimonial-user-name">
                  <strong>Barbara B. Reid</strong>
                  <span>CEO at Super Company</span>
                </span>
              </div>
              <!-- /.testimonial-user -->
            </div>
            <!-- /.testimonial-inner -->
            <div class="testimonial-inner">
              <blockquote>
                Aenean porta sem a nulla vehicula commodo. Quisque eleifend mollis tincidunt. Phasellus purus leo, facilisis in egestas non, gravida non felis. Nullam sit amet vestibulum leo.
              </blockquote>
              <div class="testimonial-user">
                <span class="testimonial-user-avatar" style="background-image: url('assets/img/tmp/user-2.jpg');"></span>
                <span class="testimonial-user-name">
                  <strong>Barbara B. Reid</strong>
                  <span>CEO at Super Company</span>
                </span>
              </div>
              <!-- /.testimonial-user -->
            </div>
            <!-- /.testimonial-inner -->
            <div class="testimonial-inner">
              <blockquote>
                Aenean porta sem a nulla vehicula commodo. Quisque eleifend mollis tincidunt. Phasellus purus leo, facilisis in egestas non, gravida non felis. Nullam sit amet vestibulum leo.
              </blockquote>
              <div class="testimonial-user">
                <span class="testimonial-user-avatar" style="background-image: url('assets/img/tmp/user-3.jpg');"></span>
                <span class="testimonial-user-name">
                  <strong>Barbara B. Reid</strong>
                  <span>CEO at Super Company</span>
                </span>
              </div>
              <!-- /.testimonial-user -->
            </div>
            <!-- /.testimonial-inner -->
            <div class="testimonial-inner">
              <blockquote>
                Aenean porta sem a nulla vehicula commodo. Quisque eleifend mollis tincidunt. Phasellus purus leo, facilisis in egestas non, gravida non felis. Nullam sit amet vestibulum leo.
              </blockquote>
              <div class="testimonial-user">
                <span class="testimonial-user-avatar" style="background-image: url('assets/img/tmp/user-4.jpg');"></span>
                <span class="testimonial-user-name">
                  <strong>Barbara B. Reid</strong>
                  <span>CEO at Super Company</span>
                </span>
              </div>
              <!-- /.testimonial-user -->
            </div>
            <!-- /.testimonial-inner -->
            <div class="testimonial-inner">
              <blockquote>
                Aenean porta sem a nulla vehicula commodo. Quisque eleifend mollis tincidunt. Phasellus purus leo, facilisis in egestas non, gravida non felis. Nullam sit amet vestibulum leo.
              </blockquote>
              <div class="testimonial-user">
                <span class="testimonial-user-avatar" style="background-image: url('assets/img/tmp/user-5.jpg');"></span>
                <span class="testimonial-user-name">
                  <strong>Barbara B. Reid</strong>
                  <span>CEO at Super Company</span>
                </span>
              </div>
              <!-- /.testimonial-user -->
            </div>
            <!-- /.testimonial-inner -->
          </div>
          <!-- /.testimonials -->
        </div>
        <!-- /.col-* -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.testimonials-wrapper  -->
    <div class="partners">
      <a href="#" class="btn btn-primary">View Project Partners</a>
      <div class="row">
        <div class="col-md-3 col-lg-2">
          <div class="partner">
            <img src="assets/img/tmp/partner-1.png" alt="">
          </div>
          <!-- /.partner -->
        </div>
        <!-- /.col-* -->
        <div class="col-md-3 col-lg-2">
          <div class="partner">
            <img src="assets/img/tmp/partner-2.png" alt="">
          </div>
          <!-- /.partner -->
        </div>
        <!-- /.col-* -->
        <div class="col-md-3 col-lg-2">
          <div class="partner">
            <img src="assets/img/tmp/partner-3.png" alt="">
          </div>
          <!-- /.partner -->
        </div>
        <!-- /.col-* -->
        <div class="col-md-3 col-lg-2">
          <div class="partner">
            <img src="assets/img/tmp/partner-4.png" alt="">
          </div>
          <!-- /.partner -->
        </div>
        <!-- /.col-* -->
        <div class="col-md-3 col-lg-2">
          <div class="partner">
            <img src="assets/img/tmp/partner-5.png" alt="">
          </div>
          <!-- /.partner -->
        </div>
        <!-- /.col-* -->
        <div class="col-md-3 col-lg-2">
          <div class="partner">
            <img src="assets/img/tmp/partner-1.png" alt="">
          </div>
          <!-- /.partner -->
        </div>
        <!-- /.col-* -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.partners -->
    <div class="cta-price">
      <h3>Get Everything<br>
         Exlusively on ThemeForest</h3>
      <h4>$19</h4>
    </div>
    <!-- /.cta-price -->
  </div>
  <!-- /.content -->
</div>
<!-- /.container -->
      

      
@endsection    
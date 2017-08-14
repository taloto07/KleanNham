<!-- jQuery -->
{{-- <script src="{{ url('js/bootstrap/jquery.js') }}"></script> --}}

<!-- Bootstrap Core JavaScript -->
{{-- <script src="{{ url('js/bootstrap/bootstrap.js') }}"></script> --}}

{{-- <script src="http://maps.googleapis.com/maps/api/js?libraries=weather,geometry,visualization,places,drawing&key=AIzaSyB1rhBa5RxvE6mSIBXEvCE_3DOeKj3oG3U" type="text/javascript"></script> --}}

{{ Html::script('assets/js/jquery.js') }}
{{ Html::script('assets/js/tether.min.js') }}
{{ Html::script('assets/js/bootstrap.min.js') }}
{{ Html::script('assets/js/chartist.min.js') }}
{{ Html::script('assets/js/google-map-richmarker.min.js') }}
{{ Html::script('assets/js/google-map-infobox.min.js') }}
{{ Html::script('assets/js/google-map-markerclusterer.js') }}
{{ Html::script('assets/js/google-map.js') }}
{{ Html::script('assets/js/jquery.trackpad-scroll-emulator.min.js') }}
{{ Html::script('assets/js/jquery.inlinesvg.min.js') }}
{{ Html::script('assets/js/jquery.affix.js') }}
{{ Html::script('assets/js/jquery.scrollTo.js') }}
{{ Html::script('assets/libraries/slick/slick.min.js') }}
{{ Html::script('assets/js/nouislider.min.js') }}
{{ Html::script('assets/js/jquery.raty.js') }}
{{ Html::script('assets/js/wNumb.js') }}
{{ Html::script('assets/js/particles.min.js') }}
{{ Html::script('assets/js/explorer.js') }}
{{ Html::script('assets/js/explorer-map-search.js') }}

{{ Html::script( mix('js/app.js') ) }}

@yield("javascript")
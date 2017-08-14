<template>
    <div class="container">
        <hr>
        <div class="col-md-12">
            <h1>Axios</h1>
            <h1 v-if="loading">Loading ...</h1>
            <div class="listing-row-place" v-for="place in places">
                <div class="listing-row-place-inner">
                    <a href="#" class="place-thumbnail-wrapper">
                        <span class="place-thumbnail" :style="{ 'background-image' : 'url(storage/' + place.pictures[0].path + ')' }"></span>
                    </a>
                    
                    <div class="listing-row-place-content">
                        <div class="listing-row-content-header">
                            <h3><a href="#">{{place.name}}</a></h3>
                            <h4>{{place.address}}, {{place.sangkat.name}}, {{place.khan.name}}, {{place.city.name}}</h4>
                            <div class="actions">
                                <div class="actions-button">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                                <!-- /.actions-button -->
                        
                                <ul class="actions-list">
                                    <li><a href="#">Edit</a></li>
                                </ul>
                        
                                <!-- /.actions-list -->
                            </div>
                        </div>
                        
                        <div class="listing-row-content-meta">
                            <div class="listing-row-content-meta-item listing-row-content-meta-category">
                                <span class="listing-row-rating">
                                    <div class="rating" data-score="2.0">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                  </div>
                                </span>
                            </div>

                            <div class="listing-row-content-meta-item listing-row-content-meta-rating">
                                <span class="listing-row-rating" data-toggle="tooltip" data-placement="top" title="hello world">
                                    <i class="fa fa-usd" aria-hidden="true"></i>
                                    <i class="fa fa-usd" aria-hidden="true"></i>
                                    <i class="fa fa-usd" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>

                        <div class="listing-row-content-meta">
                            
                            <div class="listing-row-content-meta-item listing-row-content-meta-category">
                                <span class="tag" v-for="tag in place.tags" v-text="tag.name"></span>
                            </div>
                            
                            
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        data: function() {
            return {
                places: {},
                loading: true,
            }
        },

        methods: {
            
        },

        mounted: function(){
            self = this;
            axios.get('/places')
            .then(function(response){
                setTimeout(function(){
                    self.places = response.data;
                    self.loading = false;
                }, 5000);
                
                console.log(self.places);
            })
            .catch(function(error){
                console.log(error);
            });    
            
        }
    }
</script>

<style type="text/css">
    .listing-row-rating {
      color: #E85E34;
      font-size: 20px; }

    .listing-row-content-meta-item .tag {
        margin: 2px; }

    .listing-row-content-meta {
      border-top: 1px solid rgba(0, 0, 0, 0.06);
      margin: 16px 0 0 0;
      padding: 8px 0 0 0; }
      .listing-row-content-meta::after {
        display: block;
        content: "";
        /*clear: both; */
    }

    .listing-row-content-header .actions {
        position: absolute;
        right: 0;
        top: 50%;
        transform: translateY(-50%); 
    }

    .actions {
      position: relative; }
      .actions:hover .actions-list {
        display: block; }
      .actions:hover .actions-button span {
        background-color: #323232; }

    .actions-button {
      cursor: pointer;
      position: relative;
      z-index: 9; }
      .actions-button span {
        background-color: #cbcbcb;
        border-radius: 1px;
        display: block;
        height: 4px;
        margin: 3px;
        transition: all .2s ease;
        width: 4px; }

    .actions-list {
      background-color: #323232;
      border-radius: 2px 0 2px 2px;
      display: none;
      font-size: 12px;
      list-style: none;
      margin: 0;
      padding: 0;
      position: absolute;
      right: 5px;
      top: 30px;
      z-index: 10; }
      .actions-list a {
        color: rgba(255, 255, 255, 0.9);
        display: block;
        padding: 6px 12px;
        text-decoration: none;
        white-space: nowrap; }
        .actions-list a:hover {
          color: #fff; }
      .actions-list:after {
        border: 2px solid transparent;
        border-bottom-color: #323232;
        border-right-color: #323232;
        content: '';
        display: block;
        height: 0;
        position: absolute;
        right: 0;
        top: -4px;
        width: 0; }
      .actions-list:before {
        background-color: transparent;
        content: '';
        display: block;
        height: 30px;
        left: 0;
        position: absolute;
        right: 0;
        top: -30px; }

    .listing-row-place {
        background-color: #fff;
        border-radius: 2px;
        box-shadow: 0 1px 1px rgba(50, 50, 50, 0.12);
        margin: 0 0 30px 0; 
    }

    .listing-row-place-inner {
        display: flex;
    }
        @media (max-width: 991px) {
            .listing-row-place-inner {
                flex-direction: column; } 
        }

    .place-thumbnail-wrapper {
        min-width: 240px;
        overflow: hidden;
        position: relative; }
        @media (max-width: 991px) {
            .place-thumbnail-wrapper {
                min-height: 240px; 
            } 
        }
        .place-thumbnail-wrapper:hover .place-thumbnail {
            transform: scale(1.1, 1.1); 
        }
            

    .place-thumbnail {
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        border-radius: 2px 2px 0 0;
        bottom: 0;
        display: block;
        left: 0;
        position: absolute;
        right: 0px;
        top: 0;
        transform: translateZ(0) scale(1, 1);
        transition: all 1s ease;
        -webkit-backface-visibility: hidden;
    }
        .place-thumbnail:after {
            background-color: rgba(50, 50, 50, 0.25);
            bottom: 0;
            content: '';
            display: block;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
        }

    .listing-row-place-content {
        flex-grow: 1;
        padding: 16px;
    }

    .clear {
        clear: both;
    }

    .border-line {
        border: 1px solid blue;
        margin: 0px 0px 0px 10px;
    }
</style>
webpackJsonp([1,5],{

/***/ 112:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(13);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return GlobalService; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};

var GlobalService = (function () {
    function GlobalService() {
        this.BASE_API_URL = 'http://explorer-backend.wearecodevision.com';
        this.LISTINGS_ENDPOINT = '/api/v1/listings';
        this.LISTING_ENDPOINT = '/api/v1/listings';
    }
    return GlobalService;
}());
GlobalService = __decorate([
    __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["c" /* Injectable */])()
], GlobalService);

//# sourceMappingURL=/Users/lukas/Sites/explorer_html/angular4-map/src/global.service.js.map

/***/ }),

/***/ 183:
/***/ (function(module, exports) {

function webpackEmptyContext(req) {
	throw new Error("Cannot find module '" + req + "'.");
}
webpackEmptyContext.keys = function() { return []; };
webpackEmptyContext.resolve = webpackEmptyContext;
module.exports = webpackEmptyContext;
webpackEmptyContext.id = 183;


/***/ }),

/***/ 184:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_platform_browser_dynamic__ = __webpack_require__(198);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__angular_core__ = __webpack_require__(13);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__environments_environment__ = __webpack_require__(207);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3__app_app_module__ = __webpack_require__(201);




if (__WEBPACK_IMPORTED_MODULE_2__environments_environment__["a" /* environment */].production) {
    __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_1__angular_core__["a" /* enableProdMode */])();
}
__webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_platform_browser_dynamic__["a" /* platformBrowserDynamic */])().bootstrapModule(__WEBPACK_IMPORTED_MODULE_3__app_app_module__["a" /* AppModule */]);
//# sourceMappingURL=/Users/lukas/Sites/explorer_html/angular4-map/src/main.js.map

/***/ }),

/***/ 200:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(13);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__listing_listing_service__ = __webpack_require__(50);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return AppComponent; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};


var AppComponent = (function () {
    function AppComponent(cd, listingService) {
        var _this = this;
        this.cd = cd;
        this.listings = [];
        var listing$ = listingService.getListings();
        listing$.subscribe(function (listings) { return _this.listings = listings; });
    }
    AppComponent.prototype.setListing = function (listing_id) {
        this.listing_id = listing_id;
        this.cd.detectChanges();
    };
    return AppComponent;
}());
AppComponent = __decorate([
    __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["g" /* Component */])({
        selector: 'app-root',
        template: __webpack_require__(377),
        styles: [__webpack_require__(362)],
    }),
    __metadata("design:paramtypes", [typeof (_a = typeof __WEBPACK_IMPORTED_MODULE_0__angular_core__["_0" /* ChangeDetectorRef */] !== "undefined" && __WEBPACK_IMPORTED_MODULE_0__angular_core__["_0" /* ChangeDetectorRef */]) === "function" && _a || Object, typeof (_b = typeof __WEBPACK_IMPORTED_MODULE_1__listing_listing_service__["a" /* ListingService */] !== "undefined" && __WEBPACK_IMPORTED_MODULE_1__listing_listing_service__["a" /* ListingService */]) === "function" && _b || Object])
], AppComponent);

var _a, _b;
//# sourceMappingURL=/Users/lukas/Sites/explorer_html/angular4-map/src/app.component.js.map

/***/ }),

/***/ 201:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_platform_browser_animations__ = __webpack_require__(199);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__angular_platform_browser__ = __webpack_require__(49);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__angular_core__ = __webpack_require__(13);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3__angular_forms__ = __webpack_require__(197);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_4__angular_http__ = __webpack_require__(111);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_5__listing_listing_module__ = __webpack_require__(204);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_6__map_map_module__ = __webpack_require__(206);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_7__app_component__ = __webpack_require__(200);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_8__global_service__ = __webpack_require__(112);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return AppModule; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};









var AppModule = (function () {
    function AppModule() {
    }
    return AppModule;
}());
AppModule = __decorate([
    __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_2__angular_core__["b" /* NgModule */])({
        declarations: [
            __WEBPACK_IMPORTED_MODULE_7__app_component__["a" /* AppComponent */],
        ],
        imports: [
            __WEBPACK_IMPORTED_MODULE_0__angular_platform_browser_animations__["a" /* BrowserAnimationsModule */],
            __WEBPACK_IMPORTED_MODULE_1__angular_platform_browser__["a" /* BrowserModule */],
            __WEBPACK_IMPORTED_MODULE_3__angular_forms__["a" /* FormsModule */],
            __WEBPACK_IMPORTED_MODULE_4__angular_http__["a" /* HttpModule */],
            __WEBPACK_IMPORTED_MODULE_5__listing_listing_module__["a" /* ListingModule */],
            __WEBPACK_IMPORTED_MODULE_6__map_map_module__["a" /* MapModule */]
        ],
        providers: [__WEBPACK_IMPORTED_MODULE_8__global_service__["a" /* GlobalService */]],
        bootstrap: [__WEBPACK_IMPORTED_MODULE_7__app_component__["a" /* AppComponent */]]
    })
], AppModule);

//# sourceMappingURL=/Users/lukas/Sites/explorer_html/angular4-map/src/app.module.js.map

/***/ }),

/***/ 202:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(13);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__angular_animations__ = __webpack_require__(110);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__listing_listing_service__ = __webpack_require__(50);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return ListingDetailComponent; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};



var ListingDetailComponent = (function () {
    function ListingDetailComponent(listingService) {
        this.listingService = listingService;
        this.onListingChange = new __WEBPACK_IMPORTED_MODULE_0__angular_core__["d" /* EventEmitter */]();
        this.listingService = listingService;
        this.state = 'closed';
    }
    ListingDetailComponent.prototype.ngOnInit = function () {
    };
    ListingDetailComponent.prototype.ngOnChanges = function (changes) {
        if ('listing_id' in changes) {
            if (changes.listing_id.currentValue !== undefined && changes.listing_id.currentValue !== null) {
                this.fetch();
            }
        }
    };
    ListingDetailComponent.prototype.fetch = function () {
        var _this = this;
        var listing$ = this.listingService.getListing(this.listing_id);
        listing$.subscribe(function (listing) {
            _this.listing = listing;
            _this.state = 'open';
        });
    };
    ListingDetailComponent.prototype.close = function () {
        this.listing = null;
        this.state = 'closed';
        this.onListingChange.emit(null);
    };
    return ListingDetailComponent;
}());
__decorate([
    __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["e" /* Input */])(),
    __metadata("design:type", Number)
], ListingDetailComponent.prototype, "listing_id", void 0);
__decorate([
    __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["f" /* Output */])(),
    __metadata("design:type", Object)
], ListingDetailComponent.prototype, "onListingChange", void 0);
ListingDetailComponent = __decorate([
    __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["g" /* Component */])({
        selector: 'app-listing-detail',
        template: __webpack_require__(378),
        styles: [__webpack_require__(363)],
        animations: [
            __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_1__angular_animations__["a" /* trigger */])('stateChanged', [
                __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_1__angular_animations__["b" /* state */])('closed', __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_1__angular_animations__["c" /* style */])({
                    'z-index': '99',
                    'transform': 'translateX(-100%)'
                })),
                __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_1__angular_animations__["b" /* state */])('open', __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_1__angular_animations__["c" /* style */])({
                    'z-index': '99',
                    'transform': 'translateX(0)'
                }))
            ])
        ]
    }),
    __metadata("design:paramtypes", [typeof (_a = typeof __WEBPACK_IMPORTED_MODULE_2__listing_listing_service__["a" /* ListingService */] !== "undefined" && __WEBPACK_IMPORTED_MODULE_2__listing_listing_service__["a" /* ListingService */]) === "function" && _a || Object])
], ListingDetailComponent);

var _a;
//# sourceMappingURL=/Users/lukas/Sites/explorer_html/angular4-map/src/listing-detail.component.js.map

/***/ }),

/***/ 203:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(13);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__listing_service__ = __webpack_require__(50);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return ListingComponent; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};


var ListingComponent = (function () {
    function ListingComponent() {
        this.listings = [];
        this.onListingChange = new __WEBPACK_IMPORTED_MODULE_0__angular_core__["d" /* EventEmitter */]();
    }
    ListingComponent.prototype.ngOnInit = function () {
        $('.map-results-list').TrackpadScrollEmulator();
    };
    ListingComponent.prototype.ngOnChanges = function (changes) {
    };
    ListingComponent.prototype.toggleResults = function () {
        this.compressed ? this.compressed = false : this.compressed = true;
    };
    ListingComponent.prototype.changeListing = function (listing_id) {
        if (this.listing_id !== listing_id) {
            this.listing_id = listing_id;
            this.onListingChange.emit(listing_id);
        }
    };
    ListingComponent.prototype.buildRating = function (rating) {
        var template = '';
        for (var i = 1; i < rating; i++) {
            template += '<i class="fa fa-star"></i>';
        }
        for (var i = rating; i <= 5; i++) {
            template += '<i class="fa fa-star-o"></i>';
        }
        return template;
    };
    return ListingComponent;
}());
__decorate([
    __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["e" /* Input */])(),
    __metadata("design:type", Array)
], ListingComponent.prototype, "listings", void 0);
__decorate([
    __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["e" /* Input */])(),
    __metadata("design:type", Number)
], ListingComponent.prototype, "listing_id", void 0);
__decorate([
    __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["f" /* Output */])(),
    __metadata("design:type", Object)
], ListingComponent.prototype, "onListingChange", void 0);
ListingComponent = __decorate([
    __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["g" /* Component */])({
        selector: 'app-listing',
        template: __webpack_require__(379),
        styles: [__webpack_require__(364)],
        providers: [__WEBPACK_IMPORTED_MODULE_1__listing_service__["a" /* ListingService */]]
    })
], ListingComponent);

//# sourceMappingURL=/Users/lukas/Sites/explorer_html/angular4-map/src/listing.component.js.map

/***/ }),

/***/ 204:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(13);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__angular_common__ = __webpack_require__(62);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__listing_component__ = __webpack_require__(203);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3__listing_detail_listing_detail_component__ = __webpack_require__(202);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_4__listing_service__ = __webpack_require__(50);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return ListingModule; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};




;

var ListingModule = (function () {
    function ListingModule() {
    }
    return ListingModule;
}());
ListingModule = __decorate([
    __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["b" /* NgModule */])({
        imports: [
            __WEBPACK_IMPORTED_MODULE_1__angular_common__["a" /* CommonModule */]
        ],
        declarations: [
            __WEBPACK_IMPORTED_MODULE_2__listing_component__["a" /* ListingComponent */],
            __WEBPACK_IMPORTED_MODULE_3__listing_detail_listing_detail_component__["a" /* ListingDetailComponent */]
        ],
        providers: [
            __WEBPACK_IMPORTED_MODULE_4__listing_service__["a" /* ListingService */]
        ],
        exports: [
            __WEBPACK_IMPORTED_MODULE_2__listing_component__["a" /* ListingComponent */],
            __WEBPACK_IMPORTED_MODULE_3__listing_detail_listing_detail_component__["a" /* ListingDetailComponent */]
        ]
    })
], ListingModule);

//# sourceMappingURL=/Users/lukas/Sites/explorer_html/angular4-map/src/listing.module.js.map

/***/ }),

/***/ 205:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(13);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__listing_listing_service__ = __webpack_require__(50);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return MapComponent; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};


var MapComponent = (function () {
    function MapComponent() {
        this.listings = [];
        this.listing_id = null;
        this.onListingChange = new __WEBPACK_IMPORTED_MODULE_0__angular_core__["d" /* EventEmitter */]();
        this.markers = [];
        this.zoom = 13;
    }
    MapComponent.prototype.ngOnInit = function () {
        this.map = new google.maps.Map(document.getElementById('map-object'), {
            zoom: this.zoom,
            scrollwheel: false,
            mapTypeControl: false,
            streetViewControl: false,
            zoomControl: false,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            styles: [{ "featureType": "water", "elementType": "geometry", "stylers": [{ "color": "#e9e9e9" }, { "lightness": 17 }] }, { "featureType": "landscape", "elementType": "geometry", "stylers": [{ "color": "#f5f5f5" }, { "lightness": 20 }] }, { "featureType": "road.highway", "elementType": "geometry.fill", "stylers": [{ "color": "#ffffff" }, { "lightness": 17 }] }, { "featureType": "road.highway", "elementType": "geometry.stroke", "stylers": [{ "color": "#ffffff" }, { "lightness": 29 }, { "weight": 0.2 }] }, { "featureType": "road.arterial", "elementType": "geometry", "stylers": [{ "color": "#ffffff" }, { "lightness": 18 }] }, { "featureType": "road.local", "elementType": "geometry", "stylers": [{ "color": "#ffffff" }, { "lightness": 16 }] }, { "featureType": "poi", "elementType": "geometry", "stylers": [{ "color": "#f5f5f5" }, { "lightness": 21 }] }, { "featureType": "poi.park", "elementType": "geometry", "stylers": [{ "color": "#dedede" }, { "lightness": 21 }] }, { "elementType": "labels.text.stroke", "stylers": [{ "visibility": "on" }, { "color": "#ffffff" }, { "lightness": 16 }] }, { "elementType": "labels.text.fill", "stylers": [{ "saturation": 36 }, { "color": "#333333" }, { "lightness": 40 }] }, { "elementType": "labels.icon", "stylers": [{ "visibility": "off" }] }, { "featureType": "transit", "elementType": "geometry", "stylers": [{ "color": "#f2f2f2" }, { "lightness": 19 }] }, { "featureType": "administrative", "elementType": "geometry.fill", "stylers": [{ "color": "#fefefe" }, { "lightness": 20 }] }, { "featureType": "administrative", "elementType": "geometry.stroke", "stylers": [{ "color": "#fefefe" }, { "lightness": 17 }, { "weight": 1.2 }] }]
        });
    };
    MapComponent.prototype.ngOnChanges = function (changes) {
        var _this = this;
        if ('listing_id' in changes) {
            this.listings.forEach(function (listing) {
                if (listing['id'] === _this.listing_id) {
                    _this.map.setCenter(new google.maps.LatLng(listing['latitude'], listing['longitude']));
                }
            });
        }
        if ('listings' in changes) {
            var component_1 = this;
            component_1.bound = new google.maps.LatLngBounds();
            this.markers.forEach(function (marker) {
                marker.setMap(null);
            });
            this.listings.forEach(function (listing) {
                if (listing['latitude'] && listing['longitude']) {
                    var markerCenter = new google.maps.LatLng(listing['latitude'], listing['longitude']);
                    var markerVerified = listing['is_verified'] ? '<div class="marker-verified"><i class="fa fa-check"></i></div>' : '';
                    var markerPrice = listing['price'] ? '<div class="marker-price">' + listing['name'] + '</div>' : '';
                    var markerContent = '<div class="marker">' +
                        '<div class="marker-inner">' +
                        '<span class="marker-image" style="background-image: url(' + listing['thumbnail'] + ');"></span>' +
                        '</div>' +
                        markerVerified +
                        markerPrice +
                        '</div>';
                    var marker = new RichMarker({
                        id: listing['id'],
                        data: 'Im data',
                        flat: true,
                        position: markerCenter,
                        map: _this.map,
                        shadow: 0,
                        content: markerContent
                    });
                    marker.addListener('click', function () {
                        component_1.map.setCenter(new google.maps.LatLng(listing['latitude'], listing['longitude']));
                        component_1.changeListing(listing['id']);
                    });
                    _this.markers.push(marker);
                    component_1.bound.extend(new google.maps.LatLng(listing['latitude'], listing['longitude']));
                }
            });
            if ('map' in this) {
                this.map.fitBounds(component_1.bound);
            }
            new MarkerClusterer(this.map, this.markers, { styles: [
                    {
                        url: 'assets/img/cluster.png',
                        height: 36,
                        width: 36
                    }
                ] });
        }
    };
    MapComponent.prototype.changeListing = function (listing_id) {
        this.onListingChange.emit(listing_id);
    };
    MapComponent.prototype.actionZoomIn = function () {
        this.map.setZoom(this.map.getZoom() + 1);
    };
    MapComponent.prototype.actionZoomOut = function () {
        this.map.setZoom(this.map.getZoom() - 1);
    };
    MapComponent.prototype.actionType = function (type) {
        if (type === 'HYBRID') {
            this.map.setMapTypeId(google.maps.MapTypeId.HYBRID);
        }
        else if (type === 'SATELLITE') {
            this.map.setMapTypeId(google.maps.MapTypeId.SATELLITE);
        }
        else if (type === 'TERRAIN') {
            this.map.setMapTypeId(google.maps.MapTypeId.TERRAIN);
        }
        else if (type === 'ROADMAP') {
            this.map.setMapTypeId(google.maps.MapTypeId.ROADMAP);
        }
    };
    return MapComponent;
}());
__decorate([
    __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["e" /* Input */])(),
    __metadata("design:type", Array)
], MapComponent.prototype, "listings", void 0);
__decorate([
    __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["e" /* Input */])(),
    __metadata("design:type", Number)
], MapComponent.prototype, "listing_id", void 0);
__decorate([
    __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["f" /* Output */])(),
    __metadata("design:type", Object)
], MapComponent.prototype, "onListingChange", void 0);
MapComponent = __decorate([
    __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["g" /* Component */])({
        selector: 'app-map',
        template: __webpack_require__(380),
        styles: [__webpack_require__(365)],
        providers: [__WEBPACK_IMPORTED_MODULE_1__listing_listing_service__["a" /* ListingService */]]
    }),
    __metadata("design:paramtypes", [])
], MapComponent);

//# sourceMappingURL=/Users/lukas/Sites/explorer_html/angular4-map/src/map.component.js.map

/***/ }),

/***/ 206:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(13);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__angular_common__ = __webpack_require__(62);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__map_component__ = __webpack_require__(205);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return MapModule; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};



var MapModule = (function () {
    function MapModule() {
    }
    return MapModule;
}());
MapModule = __decorate([
    __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["b" /* NgModule */])({
        imports: [
            __WEBPACK_IMPORTED_MODULE_1__angular_common__["a" /* CommonModule */]
        ],
        declarations: [
            __WEBPACK_IMPORTED_MODULE_2__map_component__["a" /* MapComponent */]
        ],
        exports: [
            __WEBPACK_IMPORTED_MODULE_2__map_component__["a" /* MapComponent */]
        ]
    })
], MapModule);

//# sourceMappingURL=/Users/lukas/Sites/explorer_html/angular4-map/src/map.module.js.map

/***/ }),

/***/ 207:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return environment; });
// The file contents for the current environment will overwrite these during build.
// The build system defaults to the dev environment which uses `environment.ts`, but if you do
// `ng build --env=prod` then `environment.prod.ts` will be used instead.
// The list of which env maps to which file can be found in `angular-cli.json`.
// The file contents for the current environment will overwrite these during build.
var environment = {
    production: false
};
//# sourceMappingURL=/Users/lukas/Sites/explorer_html/angular4-map/src/environment.js.map

/***/ }),

/***/ 362:
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(33)();
// imports


// module
exports.push([module.i, "", ""]);

// exports


/*** EXPORTS FROM exports-loader ***/
module.exports = module.exports.toString();

/***/ }),

/***/ 363:
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(33)();
// imports


// module
exports.push([module.i, "", ""]);

// exports


/*** EXPORTS FROM exports-loader ***/
module.exports = module.exports.toString();

/***/ }),

/***/ 364:
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(33)();
// imports


// module
exports.push([module.i, "", ""]);

// exports


/*** EXPORTS FROM exports-loader ***/
module.exports = module.exports.toString();

/***/ }),

/***/ 365:
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(33)();
// imports


// module
exports.push([module.i, "", ""]);

// exports


/*** EXPORTS FROM exports-loader ***/
module.exports = module.exports.toString();

/***/ }),

/***/ 377:
/***/ (function(module, exports) {

module.exports = "<div class=\"page-wrapper\">\n  <div class=\"header-wrapper\">\n    <div class=\"header\">\n      <div class=\"container-fluid\">\n        <div class=\"header-inner\">\n          <div class=\"header-logo\">\n            <a>\n              <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"32px\" height=\"32px\" viewBox=\"0 0 128 128\" version=\"1.1\" class=\"svg replaced-svg\">\n                  <defs>\n                      <path d=\"M63,86 C45.8791728,86 32,72.1208272 32,55 C32,37.8791728 45.8791728,24 63,24 C80.1208272,24 94,37.8791728 94,55 C94,72.1208272 80.1208272,86 63,86 Z M63,74 C73.4934102,74 82,65.4934102 82,55 C82,44.5065898 73.4934102,36 63,36 C52.5065898,36 44,44.5065898 44,55 C44,65.4934102 52.5065898,74 63,74 Z\" id=\"path-1\"></path>\n                      <mask id=\"mask-2\" maskContentUnits=\"userSpaceOnUse\" maskUnits=\"objectBoundingBox\" x=\"0\" y=\"0\" width=\"62\" height=\"62\" fill=\"white\">\n                          <use xlink:href=\"#path-1\"></use>\n                      </mask>\n                      <path d=\"M63,98 C39.2517558,98 20,78.7482442 20,55 C20,31.2517558 39.2517558,12 63,12 C86.7482442,12 106,31.2517558 106,55 C106,78.7482442 86.7482442,98 63,98 Z M63,74 C73.4934102,74 82,65.4934102 82,55 C82,44.5065898 73.4934102,36 63,36 C52.5065898,36 44,44.5065898 44,55 C44,65.4934102 52.5065898,74 63,74 Z\" id=\"path-3\"></path>\n                      <mask id=\"mask-4\" maskContentUnits=\"userSpaceOnUse\" maskUnits=\"objectBoundingBox\" x=\"0\" y=\"0\" width=\"86\" height=\"86\" fill=\"white\">\n                          <use xlink:href=\"#path-3\"></use>\n                      </mask>\n                  </defs>\n                  <g id=\"Page-1\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">\n                      <g id=\"logo\">\n                          <polygon id=\"Triangle-4\" fill=\"#323232\" transform=\"translate(64.505493, 118.500000) rotate(180.000000) translate(-64.505493, -118.500000) \" points=\"64.5109863 109 73.0675049 128 55.9434814 128\"></polygon>\n                          <path d=\"M63,110 C32.6243388,110 8,85.3756612 8,55 C8,24.6243388 32.6243388,0 63,0 C93.3756612,0 118,24.6243388 118,55 C118,85.3756612 93.3756612,110 63,110 Z M63,74 C73.4934102,74 82,65.4934102 82,55 C82,44.5065898 73.4934102,36 63,36 C52.5065898,36 44,44.5065898 44,55 C44,65.4934102 52.5065898,74 63,74 Z\" id=\"logo-background\" fill=\"#323232\"></path>\n                          <use id=\"Combined-Shape\" stroke-opacity=\"0.4\" stroke=\"#FFFFFF\" mask=\"url(#mask-2)\" stroke-width=\"24\" xlink:href=\"#path-1\"></use>\n                          <use id=\"Combined-Shape\" stroke-opacity=\"0.2\" stroke=\"#FFFFFF\" mask=\"url(#mask-4)\" stroke-width=\"24\" xlink:href=\"#path-3\"></use>\n                      </g>\n                  </g>\n              </svg>\n            </a>\n\n            <a class=\"header-title\">Explorer</a>\n          </div>\n        </div>\n      </div>\n    </div>\n  </div>\n\n\n\t<div class=\"main-wrapper\">\n\t\t<div class=\"main\">\n\t\t\t<div class=\"main-inner\">\n\t\t\t\t<div class=\"content\">\n\t\t\t\t\t<div class=\"map-wrapper\">\n\t\t\t\t\t\t<div class=\"map\">\n\t\t\t\t\t\t\t<div class=\"map-inner\">\n\t\t\t\t\t\t\t\t<app-listing (onListingChange)=\"setListing($event)\" [listing_id]=\"listing_id\" [listings]=\"listings\"></app-listing>\n\t\t\t\t\t\t\t\t<app-map (onListingChange)=\"setListing($event)\" [listing_id]=\"listing_id\" [listings]=\"listings\"></app-map>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t</div>\n\t</div>\n</div>\n"

/***/ }),

/***/ 378:
/***/ (function(module, exports) {

module.exports = "<div class=\"map-results-detail tse-scrollable\" [@stateChanged]=\"state\">\n  <div class=\"tse-content\">\n    <div class=\"map-results-detail-header\">\n      <h3>\n          {{ listing?.name }}\n\n          <i class=\"fa fa-close\" (click)=\"close()\"></i>\n      </h3>\n\n      <div class=\"map-results-detail-address\">\n        {{ listing?.address }}\n      </div>\n    </div><!-- .map-results-detail-header -->\n\n\n    <div class=\"map-results-detail-gallery\">\n      <img [src]=\"listing?.thumbnail\">\n\n    </div><!-- /.map-results-detail-gallery -->\n\n    <h4>Description</h4>\n\n    <p>\n      {{ listing?.description }}\n    </p>\n  </div><!-- /.tse-content -->\n</div><!-- /.map-results-detail -->\n"

/***/ }),

/***/ 379:
/***/ (function(module, exports) {

module.exports = "<div [ngClass]=\"{'compressed': compressed, 'map-results': true}\">\n\t<div class=\"map-results-inner\">\n\t\t<div class=\"map-results-list tse-scrollable\">\n\t\t\t<div class=\"tse-content\">\n\t\t\t\t<div class=\"map-results-header\">\n\t\t\t\t\t<h3>Best Spots in City</h3>\n\n\t\t\t\t\t<p>\n            Check all listings available in our catalogue. You can use map for finding the spot and displaying information.\n\t\t\t\t\t</p>\n\n\t\t\t\t\t<div class=\"map-results-count\">{{ listings.length }} items matching search query</div>\n\t\t\t\t</div>\n\n\t\t\t\t<div class=\"map-results-content clickable\">\n\t\t\t\t\t<div *ngFor=\"let listing of listings\"\n               (click)=\"changeListing(listing.id)\"\n               [ngClass]=\"{'active': listing_id === listing.id, 'listing-row-medium': true}\">\n\t\t\t\t\t\t<div class=\"listing-row-medium-inner\">\n\t\t\t\t\t\t\t<a class=\"listing-row-medium-image\" [ngStyle]=\"{'background-image': 'url(' + listing.thumbnail + ')'}\">\n\t\t\t\t\t\t\t\t<span *ngIf=\"listing.is_featured\" class=\"listing-row-medium-featured\">Featured</span><!-- /.listing-row-medium-featured -->\n\t\t\t\t\t\t\t</a>\n\n\t\t\t\t\t\t\t<div class=\"listing-row-medium-content\">\n                <a class=\"listing-row-medium-price\" href=\"#\">{{ listing.price }}</a>\n\t\t\t\t\t\t\t\t<a *ngIf=\"listing.categories\" class=\"listing-row-medium-category tag\">{{ listing.categories }}</a>\n\n\t\t\t\t\t\t\t\t<span *ngIf=\"listing.rating\" class=\"listing-row-medium-rating\">\n\t\t\t\t\t\t\t\t\t<span>({{ listing.rating }})</span>\n\n                  <b [innerHTML]=\"buildRating(listing.rating)\"></b>\n\t\t\t\t\t\t\t\t</span>\n\n\t\t\t\t\t\t\t\t<h4 class=\"listing-row-medium-title\"><a>{{ listing.name }}</a></h4>\n\n\t\t\t\t\t\t\t\t<div class=\"listing-row-medium-address\">{{ listing.address }}</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t    </div>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t</div>\n\t</div>\n\n  <app-listing-detail (onListingChange)=\"changeListing($event)\" [listing_id]=\"listing_id\"></app-listing-detail>\n\n\t<div class=\"map-results-toggle\" (click)=\"toggleResults()\">\n\t\t<i class=\"fa fa-chevron-left\"></i>\n\t</div>\n</div>\n"

/***/ }),

/***/ 380:
/***/ (function(module, exports) {

module.exports = "<div class=\"map-object\">\n\n\t<div id=\"map-object\"></div>\n\n\t<div class=\"map-toolbar\">\n\t\t<div class=\"map-toolbar-group\">\n\t\t\t<div id=\"map-toolbar-action-zoom-in\" class=\"map-toolbar-group-item\" (click)=\"actionZoomIn()\"><i class=\"fa fa-plus\"></i></div>\n\t\t\t<div id=\"map-toolbar-action-zoom-out\" class=\"map-toolbar-group-item\" (click)=\"actionZoomOut()\"><i class=\"fa fa-minus\"></i></div>\n\t\t</div>\n\n\t\t<div class=\"map-toolbar-group\">\n\t\t\t<div id=\"map-toolbar-action-roadmap\" class=\"map-toolbar-group-item\" (click)=\"actionType('ROADMAP')\">Roadmap</div>\n\t\t\t<div id=\"map-toolbar-action-satellite\" class=\"map-toolbar-group-item\" (click)=\"actionType('SATELLITE')\">Satellite</div>\n\t\t\t<div id=\"map-toolbar-action-terrain\" class=\"map-toolbar-group-item\" (click)=\"actionType('TERRAIN')\">Terrain</div>\n      <div id=\"map-toolbar-action-hybrid\" class=\"map-toolbar-group-item\" (click)=\"actionType('HYBRID')\">Hybrid</div>\n\t\t</div>\n\t</div>\n</div>\n"

/***/ }),

/***/ 50:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(13);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__angular_http__ = __webpack_require__(111);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__global_service__ = __webpack_require__(112);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3_rxjs_Rx__ = __webpack_require__(382);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3_rxjs_Rx___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_3_rxjs_Rx__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return ListingService; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};




var ListingService = (function () {
    function ListingService(globalService, http) {
        this.globalService = globalService;
        this.http = http;
    }
    ListingService.prototype.getListings = function () {
        return this.http.get(this.globalService.BASE_API_URL + this.globalService.LISTINGS_ENDPOINT).map(function (res) { return res.json(); });
    };
    ListingService.prototype.getListing = function (listing_id) {
        return this.http.get(this.globalService.BASE_API_URL + this.globalService.LISTING_ENDPOINT + '/' + listing_id).map(function (res) { return res.json(); });
    };
    return ListingService;
}());
ListingService = __decorate([
    __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["c" /* Injectable */])(),
    __metadata("design:paramtypes", [typeof (_a = typeof __WEBPACK_IMPORTED_MODULE_2__global_service__["a" /* GlobalService */] !== "undefined" && __WEBPACK_IMPORTED_MODULE_2__global_service__["a" /* GlobalService */]) === "function" && _a || Object, typeof (_b = typeof __WEBPACK_IMPORTED_MODULE_1__angular_http__["b" /* Http */] !== "undefined" && __WEBPACK_IMPORTED_MODULE_1__angular_http__["b" /* Http */]) === "function" && _b || Object])
], ListingService);

var _a, _b;
//# sourceMappingURL=/Users/lukas/Sites/explorer_html/angular4-map/src/listing.service.js.map

/***/ }),

/***/ 657:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(184);


/***/ })

},[657]);
//# sourceMappingURL=main.bundle.js.map
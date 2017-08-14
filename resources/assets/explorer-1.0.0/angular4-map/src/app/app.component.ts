import { Component, ChangeDetectorRef } from '@angular/core';
import {ListingService} from './listing/listing.service';
import {Listing} from './listing/listing';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css'],
})

export class AppComponent {
  listings: Listing[] = [];
  listing_id: number;

  constructor(private cd: ChangeDetectorRef, listingService: ListingService) {
    const listing$ = listingService.getListings();

    listing$.subscribe(
      listings => this.listings = listings
    );
  }

  setListing(listing_id: number) {
    this.listing_id = listing_id;
    this.cd.detectChanges();
  }
}

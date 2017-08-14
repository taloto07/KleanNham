import { Angular2MapPage } from './app.po';

describe('angular2-map App', function() {
  let page: Angular2MapPage;

  beforeEach(() => {
    page = new Angular2MapPage();
  });

  it('should display message saying app works', () => {
    page.navigateTo();
    expect(page.getParagraphText()).toEqual('app works!');
  });
});

Feature: Search Functionality
 As an Anonymous user
 I should be able to search for articles and recipes on the site
 @javascript @remote
  Scenario: Testing the search functionality
   Given I visited homepage
  And I search for "oatmeal" on the "homepage"
  Then I see "Give your oatmeal the ultimate makeover" on the "searchPage"
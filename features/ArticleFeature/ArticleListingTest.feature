Feature: Site has a Article List Page
        As an admin user
        I should be able to create article nodes and view them on article listing page
   @api @smoke
  Scenario: Verify Article Listing Page
    Given I am logged in as a user with the "administrator" role
    Given "article" content:
    | title | moderation_state | languagecode|
    | new article | published   | en         |
    | espanyol article | published   | es         |
    And I log out
    And I visited articleListingPage
    Then I see "new article" on the "articleListingPage"
    And I see "espanyol article" on the "articleListingPage"
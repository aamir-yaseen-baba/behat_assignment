<?php

use Behat\Behat\Context\Context;
use Drupal\DrupalExtension\Context\RawDrupalContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\Behat\Tester\Exception\PendingException;
use Page\ArticleListingPage;
use Page\Homepage;
use Page\SearchPage;
use SensioLabs\Behat\PageObjectExtension\PageObject\Page;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends RawDrupalContext implements Context{

  /**
   * Initializes context.
   *
   * Every scenario gets its own context instance.
   * You can also pass arbitrary arguments to the
   * context constructor through behat.yml.
   */
    private $homepage;
    private $searchPage;
    private $articleListingPage;

    public function __construct(Homepage $homepage, SearchPage $searchPage, ArticleListingPage $articleListingPage)
    {
        $this->homepage = $homepage;
        $this->searchPage = $searchPage;
        $this->articleListingPage = $articleListingPage;
    }

    /**
     * @Given /^(?:|I )visited (?:|the )(?P<pageName>.*?)$/
     */
    public function iVisitedThePage($pageName)
    {
        if (!isset($this->$pageName)) {
            throw new \RuntimeException(sprintf('Unrecognised page: "%s".', $pageName));
        }
        $this->$pageName->open();
    }



        /**
     * @Given /^I search for "([^"]*)" on the "([^"]*)"$/
     */public function iSearchForOnThe($text, $pageName)
    {
        $this->$pageName->iSearchFor($text);
    }
    /**
     * @Then /^I see "([^"]*)" on the "([^"]*)"$/
     */public function iSeeOnThe($text, $pageName)
    {
        $this->$pageName->containsText($text);
    }

    /**
     * @Given /^I wait (\d+) seconds$/
     */
    public function iWaitSeconds($arg1)
    {
        sleep(seconds: $arg1);
    }


}

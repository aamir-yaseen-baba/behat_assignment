<?php
namespace Page;

use SensioLabs\Behat\PageObjectExtension\PageObject\Page;

class Homepage extends Page
{
    /**
     * @var string $path
     */
    protected $path = '/';

    public function iSearchFor($args)

    {

        $this->findField('keys')->setValue($args);

        $this->findField('Search')->click();

    }
}
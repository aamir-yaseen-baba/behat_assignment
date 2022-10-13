<?php
namespace Page;

use SensioLabs\Behat\PageObjectExtension\PageObject\Page;
use Symfony\Component\Config\Definition\Exception\Exception;

class SearchPage extends Page
{
    /**
     * @var string $path
     */
    protected $path = '/search';

    public function containsText($text){
      $value =  $this->hasContent($text);

      if (!$value){
          throw new Exception("Page does not contain the Text ".$text);
      }
    }


}
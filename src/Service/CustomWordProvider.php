<?php
/**
 * Created by PhpStorm.
 * User: abdou
 * Date: 13/08/18
 * Time: 12:03
 */

namespace App\Service;


use Abdou\LoremIpsumBundle\KnpUWordProvider;

class CustomWordProvider extends KnpUWordProvider
{
    public function getWordlist(): array
    {
        $words=  parent::getWordlist(); // TODO: Change the autogenerated stub
        $words[]= "Erdeven Beach";
        return $words;
    }


}
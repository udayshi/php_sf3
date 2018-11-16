<?php
/**
 * Created by PhpStorm.
 * User: uday.shiwakoti
 * Date: 16/11/2018
 * Time: 15:22
 */

namespace AppBundle\Service;


use AppBundle\Entity\Car;

class DemoService
{
    public function helloService($name){
        return 'Car Make: '.$name;

    }
}
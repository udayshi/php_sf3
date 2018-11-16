<?php
/**
 * Created by PhpStorm.
 * User: uday.shiwakoti
 * Date: 16/11/2018
 * Time: 10:55
 */

namespace AppBundle\Menu;


use Knp\Menu\MenuFactory;

class Builder
{
    public function mainMenu(MenuFactory $factory,array $options){
            $menu=$factory->createItem('root');
            $menu->addChild('Home',['route'=>'homepage']);
            return $menu;


    }
}
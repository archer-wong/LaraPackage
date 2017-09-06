<?php
namespace ArcherWong\LaraPackage;
use Illuminate\Support\Facades\Facade;
class LaraPackage extends Facade
{
    public static function getFacadeAccessor()
    {
        //return 的字符串会在相应的provider中使用
        return 'larapackage';
    }
}

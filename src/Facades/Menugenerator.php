<?php 
namespace Farindra\Menugenerator\Facades;
use Illuminate\Support\Facades\Facade;

class Menugenerator extends Facade {
    /**
     * Return facade accessor
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'harimayco-menu';
    }
}
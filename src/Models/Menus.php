<?php

namespace Farindra\Menugenerator\Models;

use Illuminate\Database\Eloquent\Model;

class Menus extends Model
{
    protected $table = 'menus';

    public function __construct(array $attributes = [])
    {
        //parent::construct( $attributes );
        $this->table = config('menugenerator.table_prefix') . config('menugenerator.table_name_menus');
    }

    public static function byName($name)
    {
        return self::where('name', '=', $name)->first();
    }

    public function items()
    {
        return $this->hasMany('Farindra\Menugenerator\Models\MenuItems', 'menu')->with('child')->where('parent', 0)->orderBy('sort', 'ASC');
    }
}

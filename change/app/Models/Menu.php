<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','url','display_order','meta_title','meta_tags','meta_description','menu_id','submenu_id','is_footer' ];

    public function parentMenu()
    {
        return $this->belongsTo(Menu::class,'menu_id');
    }
    public function childMenu()
    {
        return $this->hasMany(Menu::class,'menu_id');
    }
    public function subMenu()
    {
        return $this->belongsTo(Menu::class,'submenu_id');
    }
}


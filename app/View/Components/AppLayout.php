<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\{Menu,SiteSetting};
use App\Http\Resources\SiteSettingResource;

class AppLayout extends Component
{
    /**
     * Create a new component instance.
     */
    public $menus;
    public $title;
    public $siteSetting = [];
    public function __construct()
    {
        $this->siteSetting = Collect(SiteSetting::all());
        $menus = Menu::where('active','=',1)->get();
        foreach($menus as $menu)
        {
            $this->menus[$menu->title] = $menu->menu_items;
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('layouts.app');
    }
}

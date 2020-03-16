<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AdminSidebar extends Component
{
    public $title;
    public $info;

    public function __construct($title = null, $info = null)
    {
        $this->title = $title;
        $this->info = $info;
    }

    public function render()
    {
        return view('components.admin-sidebar');
    }

}

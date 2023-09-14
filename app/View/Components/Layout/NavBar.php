<?php

namespace App\View\Components\Layout;

use Illuminate\View\Component;

class NavBar extends Component
{
    public array $navigationItems = [];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
        $this->navigationItems = [

            ['label'=>'Sobre Mi', 'href'=>'#about'],
            
            ['label'=>'Portafolio', 'href'=>'#portafolio'],
            
            ['label'=>'Experiencia', 'href'=>'#experience'],
            
            ['label'=>'Contacto', 'href'=>'#contact'],
             ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.layout.nav-bar');
    }
}

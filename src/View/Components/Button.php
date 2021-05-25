<?php

namespace Devaweb\BladeTailUI\View\Components;

use Devaweb\BladeTailUI\Facades\Btui;
use Devaweb\BladeTailUI\Traits\btuiBasic;
use Illuminate\View\Component;


class Button extends Component
{
    use btuiBasic;

    public $color;

    public $basic_style = [
        "inline-block", 'capitalize', 'cursor-pointer', 
         'shadow-sm','transition-all', 'duration-300', 
        'rounded', 'min-w-min'];

    public $size;

    public $sizeStyle = [
        'small' => ['px-3','py-1','text-sm'],
        'medium' => ['px-4','py-2'],
        'large' => ['px-8','py-3']
    ];

    public $style;

    public $isLight = false;


    /**
     * Create a new component instance.
     *
     * @param string $element 
     * @param string $color 
     * @param string $size 
     * 
     * @return void
     */
    public function __construct(
        $color = "",
        $size = ""
    ) {
        
        $this->color = $color;
        $this->size = $size;

        $this->setStyle();

    }

    public function setStyle()
    {   

        $c = Btui::theme($this->color)
            ->padding($this->size)
            ->add($this->basic_style);

        if ($this->color == 'white') {
            $c->add(['bg-white', 'hover:shadow', 'text-black']);
        } elseif ($this->color == 'black') {
            $c->add(['bg-black', 'hover:bg-gray-700', 'text-white' ]);
        } else {
            $c->add(['border'])
            ->bg()->border()
            ->text();
        }
    
        $this->style .= $c->get()." ";
        
        $this->style .=" ". Btui::theme($this->color, true)
            ->bg()->hover()->get();
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('dwbtui::components.button');
    }
}

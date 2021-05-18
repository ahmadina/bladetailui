<?php

/**
 * Basic Config for BladeTailUI
 * 
 * @author Deva
 * @version v.1.2.2
 */

return [

    //theme
    'theme' => 'gray',

    //default size for button , alert, form elements
    'size'  => 'small',

    //padding ---------------
    'padding'    => [
        'small'  => 'px-4 py-1 text-sm',
        'medium' => 'px-6 py-2',
        'large'  => 'px-8 py-3 text-lg'
    ],

    //used in input,select
    'formPadding' => [
        'small'   => 'px-2 py-1 text-sm',
        'medium'  => 'px-3 py-2',
        'large'   => 'px-4 py-3 text-lg'
    ],

    //color varient -------------------
    'colorVar'  => [
        'dark'  => [
            'bg'     => 600,
            'border' => 800,
            'divide' => 600,
            'text'   => 100
        ],
        'light' => [
            'bg'     => 100,
            'border' => 200,
            'divide' => 400,
            'text'   => 900
        ],
    ],

    'hoverVar'  => [
        'light' => [
            'bg'     => 200,
            'border' => 500,
            'divide' => 500,
            'text'   => 900
        ],
        'dark'  => [
            'bg'     => 900,
            'border' => 800,
            'divide' => 800,
            'text'   => 100
        ],
    ],

    'formTypes' => [

        'default' => [
            'color' => 'gray', 
            'icon' => ' fa fa-exclamation-circle '
        ],
        'success' => [
            'color' => 'green', 
            'icon' => 'fa fa-check-circle'
        ],
        'warning' => [
            'color' => 'yellow', 
            'icon' => 'fa fa-exclamation-triangle'
        ],
        'danger'  => [
            'color' => 'red', 
            'icon' => 'fa fa-close'
        ],
        'info'    => [
            'color' => 'gray',
             'icon' => 'fa fa-exclamation-circle'
        ],

    ],

    // Alert Basic Config 
    
    'alert' => [
        //defalt size - options = medium | large
        'size' => 'medium',

        //style
        'outline'     => 'flex items-center justify-between gap-2 px-2 py-2 border-l-4 rounded shadow-sm',
        'content'     => 'pl-1 pr-3 font-bold',
        'closebutton' => 'px-2 font-bold border cursor-pointer rounded' 
    ],

    //Button Extra Config 
    
    'button' => [

        //size - small | medium | large
        'size' => '', 

        'basic' => 'btn-basic shadow-sm',                                  
        
        'extra-hover-effect' => '', // Ex: hover:shadow-lg

    ],

    //-----------------------------------------------
    //input
    'input' => [

        //size
        'size' => 'medium' // small | medium | large
    ],

    //select
    'select' => [

        'size' => 'medium'
    ],

    //dropdown
    'dropdown' => [
        'size' => 'medium'
    ]
];
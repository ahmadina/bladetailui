# BladeTailUI
### Blade Tailwind UI for Laravel with Alpine JS

Perfectly comfortable with jetstream livewire stack. otherwise, you must install Alpine Js Manually!

```
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
```

[Click to know more about Alpine JS](https://github.com/alpinejs/alpine)

To install on your laravel project

``` 
composer require devaweb/bladetailui 
```


publish config file
```
php artisan vendor:publish --tag=btui
```

### fontawesome 4 icons are used in components
```
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
```


Available components
1. Alert
2. Button
3. Dropdown
4. Input
5. Select
6. loader
7. Hero
8. Navbar

***

**Usage**

## Alert

```
<x-btui-alert type="success"> Success! </x-btui-alert>
```

#### Properties

| Name     | Type    | Default | Options |
|-------   |---      |---|---|
| Text     | String  | "" | - |
| Type     | String  | Success | Primary,Success,Warning,Danger,Info |
| Closable | Boolean | False |True or False  |

***

<br/>

## Button

```
<x-btui-button color="gray"> Click It! </x-btui-button>
```

#### Properties
| Name     | Type    | Default | Options |
|-------   |---      |---|---|
| Element     | String  | Button | button,a |
| Color     | String  | white | White,Gray,Blue,Red,Green,Yellow,Purple,Pink,Indigo |
| Size | String | Small | Small,Medium,Large  |

<br>

If you want to use light color in buttons use "light" before color names 

**Ex: lightgray**

#### Dark Red Button
```
<x-btui-button color="red"> Click It! </x-btui-button>
```

#### Light Red Button
```
<x-btui-button color="lightred"> Click It! </x-btui-button>
```

<br/>

<hr/>

More components on the way! Stay connected!

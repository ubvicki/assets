<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SelectComponent extends Component
{
    public $options;
    public $label;
    public $name;
    public function render()
    {
        return view('livewire.select-component');
    }
}

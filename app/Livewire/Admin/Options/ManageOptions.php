<?php

namespace App\Livewire\Admin\Options;

use Livewire\Component;
use App\Models\Option;

class ManageOptions extends Component
{

    public $options;

    public function mount()
    {
        $this->options = Option::with('features')->get();
    }

    public function render()
    {
        return view('livewire.admin.options.manage-options');
    }
}

<?php

namespace App\Livewire\Admin\Subcategories;

use Livewire\Component;
use App\Models\Family;
use App\Models\Category;
use App\Models\Subcategory;
use Livewire\Attributes\Computed;


class SubcategoryCreate extends Component
{

    public $families;

    public function mount()
    {
        $this->families = Family::all();
    }

    public function render()
    {
        return view('livewire.admin.subcategories.subcategory-create');
    }
}

<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Address;
use GuzzleHttp\Promise\Create;
use App\Livewire\Forms\CreateAddressForm;

class ShippingAddresses extends Component
{

    public $addresses;

    public $newAddress = false;

    public CreateAddressForm $createAddress;

    public function mount()
    {
        $this->addresses = Address::where('user_id', auth()->id())->get();
    }

    public function render()
    {
        return view('livewire.shipping-addresses');
    }
}

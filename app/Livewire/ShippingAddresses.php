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
    
        $this->createAddress->receiver_info = [
            'name' => auth()->user()->name,
            'last_name' => auth()->user()->last_name,
            'document_type' => auth()->user()->document_type,
            'document_number' => auth()->user()->document_number,
            'phone' => auth()->user()->phone,
        ];
    }

    public function render()
    {
        return view('livewire.shipping-addresses');
    }
}

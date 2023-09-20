<?php

namespace App\Livewire;

use App\Livewire\Forms\ListingForm;
use Livewire\Component;

class CreateListing extends Component
{
    public ListingForm $listingForm;

    public function render()
    {
        return view('livewire.create-listing');
    }

    public function save()
    {
        $this->listingForm->store();
        session()->flash('message', 'Listing created successfully');
        return redirect('/');
    }
}
<?php

namespace App\Livewire;

use App\Livewire\Forms\ListingForm;
use App\Models\Listing;
use Livewire\Component;

class EditListing extends Component
{
    public Listing $listing;
    public ListingForm $form;

    public function render()
    {
        return view('livewire.edit-listing');
    }

    public function mount(Listing $listing)
    {
        $this->listing = $listing;
        $this->form->setListing($listing);
    }
    public function update()
    {
        if ($this->listing->user_id != auth()->id()) {
            abort(403);
        }
        //validate all the data
        $this->form->update();
        session()->flash('message', 'Listing updated successfully');
        return redirect("/");
    }
}
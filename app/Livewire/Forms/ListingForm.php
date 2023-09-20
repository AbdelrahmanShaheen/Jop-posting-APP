<?php

namespace App\Livewire\Forms;

use Illuminate\Http\Request;
use App\Models\Listing;
use Livewire\Attributes\Rule;
use Livewire\Form;

class ListingForm extends Form
{
    public Listing $listing;
    #[Rule('required')]
    public $title;
    #[Rule('required')]
    public $company;
    #[Rule('required')]
    public $location;
    #[Rule('required|email')]
    public $email;
    #[Rule('required|url')]
    public $website;
    #[Rule('required')]
    public $tags;
    #[Rule('required|min:20')]
    public $description;
    public function setListing(Listing $listing)
    {
        $this->title = $listing->title;
        $this->company = $listing->company;
        $this->location = $listing->location;
        $this->email = $listing->email;
        $this->website = $listing->website;
        $this->tags = $listing->tags;
        $this->description = $listing->description;
        $this->listing = $listing;
    }
    //create store func
    public function store()
    {
        $this->validate();
        Listing::create([
            'title' => $this->title,
            'company' => $this->company,
            'location' => $this->location,
            'email' => $this->email,
            'website' => $this->website,
            'tags' => $this->tags,
            'description' => $this->description,
            'user_id' => auth()->id()
        ]);
    }
    public function update()
    {
        $this->validate();
        Listing::find($this->listing->id)->update([
            'title' => $this->title,
            'company' => $this->company,
            'location' => $this->location,
            'email' => $this->email,
            'website' => $this->website,
            'tags' => $this->tags,
            'description' => $this->description,
        ]);
    }
}
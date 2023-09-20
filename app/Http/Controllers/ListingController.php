<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //common resources routes:
    //index, show, create, store, edit, update, destroy
    public static function index()
    {
        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(2)
        ]);
    }
    public static function show(Listing $listing)
    {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    public static function create()
    {
        return view('listings.create');
    }
    public static function edit(Listing $listing)
    {
        // dd($listing);
        return view('listings.edit', [
            'listing' => $listing
        ]);
    }

    public static function destroy(Listing $listing)
    {
        if ($listing->user_id != auth()->id()) {
            abort(403);
        }
        $listing->delete();
        return redirect('/')->with('message', 'Listing deleted successfully');
    }
    public static function manage()
    {
        return view('listings.manage', ['listings' => auth()->user()->listings()->get()]);
    }
}
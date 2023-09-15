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
        // return Listing::latest()->filter(request(['tag', 'search']))->paginate(2);
        //add buttons to paginate
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
    public static function store(Request $request)
    {
        $formData = $request->validate([
            'title' => 'required',
            'company' => 'required',
            'location' => 'required',
            'email' => 'required|email',
            'website' => 'required|url',
            'tags' => 'required',
            'description' => 'required|min:20',
        ]);
        $formData['user_id'] = auth()->id();
        Listing::create($formData);
        return redirect('/')->with('message', 'Listing was created successfully');
    }
    public static function edit(Listing $listing)
    {
        return view('listings.edit', [
            'listing' => $listing
        ]);
    }
    public static function update(Request $request, Listing $listing)
    {
        if ($listing->user_id != auth()->id()) {
            abort(403);
        }
        $formData = $request->validate([
            'title' => 'required',
            'company' => 'required',
            'location' => 'required',
            'email' => 'required|email',
            'website' => 'required|url',
            'tags' => 'required',
            'description' => 'required|min:20',
        ]);
        $listing->update($formData);
        return back()->with('message', 'Listing updated successfully');
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
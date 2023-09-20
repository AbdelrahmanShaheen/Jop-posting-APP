@extends('layouts.app')
@section('content')
  <x-card class="p-10 max-w-lg mx-auto mt-24">
    <header class="text-center">
      <h2 class="text-2xl font-bold uppercase mb-1">Create a Gig</h2>
      <p class="mb-4">Post a gig to find a developer</p>
    </header>

    <livewire:create-listing />
  </x-card>
@endsection
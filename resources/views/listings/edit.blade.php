@extends('layouts.app')
@section('content')
  <x-card class="p-10 max-w-lg mx-auto mt-24">
    <header class="text-center">
      <h2 class="text-2xl font-bold uppercase mb-1">Edit Gig</h2>
      <p class="mb-4">Edit: {{$listing->title}}</p>
    </header>

    <livewire:edit-listing :listing="$listing" />
  </x-card>
@endsection

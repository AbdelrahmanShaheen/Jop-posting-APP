@extends('layouts.app')
@section('content')
  <x-card class="p-10 max-w-lg mx-auto mt-24">
    <header class="text-center">
      <h2 class="text-2xl font-bold uppercase mb-1">Login</h2>
      <p class="mb-4">Log into your account to post gigs</p>
    </header>

    <livewire:login /> 
  </x-card>
@endsection
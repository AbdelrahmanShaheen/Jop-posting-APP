@props(['name' ,'labelValue' ,'for','type'])

<label for="{{ $for }}" class="inline-block text-lg mb-2">{{ $labelValue }}</label>
<input type="{{ $type }}" name="{{ $name }}" {{ $attributes }}>

<div>
    @error($name) <p class="text-red-500 text-xs mt-1">{{$message}}</p>@enderror
</div>
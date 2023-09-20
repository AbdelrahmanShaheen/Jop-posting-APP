<div>
    <form wire:submit="update" enctype="multipart/form-data">
        @csrf
        @method('PUT') 
        <div class="mb-6">
          <x-form.input-text 
          wire:model="form.company" 
          type="text" 
          class="border border-gray-200 rounded p-2 w-full" 
          name="form.company" value="{{ $listing->company }}" 
          for="company" 
          labelValue="Company Name"/> 
        </div>
  
        <div class="mb-6">
          <x-form.input-text 
          wire:model="form.title" 
          type="text" 
          class="border border-gray-200 rounded p-2 w-full" 
          name="form.title" value="{{ $listing->title }}"
          for="title" 
          labelValue="Job Title"
          placeholder="Example: Senior Laravel Developer" />
        </div>
  
        <div class="mb-6">
          <x-form.input-text 
          wire:model="form.location" 
          type="text" 
          class="border border-gray-200 rounded p-2 w-full" name="form.location" 
          value="{{ $listing->location }}"
          for="location" labelValue="Job Location"
          placeholder="Example: Remote, Boston MA, etc" />
        </div>
  
        <div class="mb-6">
          <x-form.input-text 
          wire:model="form.email" 
          type="text" 
          class="border border-gray-200 rounded p-2 w-full" name="form.email" 
          value="{{ $listing->email }}"
          for="email" 
          labelValue="Contact Email"
          />
        </div>
  
        <div class="mb-6">
          <x-form.input-text 
          wire:model="form.website" 
          type="text" 
          class="border border-gray-200 rounded p-2 w-full" 
          name="form.website" 
          value="{{ $listing->website }}" 
          for="website" 
          labelValue="Website/Application URL"
          />
        </div>
  
        <div class="mb-6">
          <x-form.input-text  
          wire:model="form.tags" 
          type="text" 
          class="border border-gray-200 rounded p-2 w-full" 
          name="form.tags" 
          value="{{ $listing->tags }}"
          placeholder="Example: Laravel Backend Postgres etc" 
          for="tags" labelValue="Tags (space Separated)"
            />
        </div>
  
        <div class="mb-6">
          <label for="logo" class="inline-block text-lg mb-2">
            Company Logo
          </label>
          <input 
          wire:model="form.logo" 
          type="file" 
          class="border border-gray-200 rounded p-2 w-full" 
          name="logo" />
          <img class="w-48 mr-6 mb-6"
          src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png')}}" alt="" />
  
          @error('form.logo')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="description" class="inline-block text-lg mb-2">
            Job Description
          </label>
          <textarea 
          wire:model="form.description" 
          class="border border-gray-200 rounded p-2 w-full" 
          name="description" rows="10"
          placeholder="Include tasks, requirements, salary, etc">
                {{ $listing->description }}
          </textarea>
          @error('form.description')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
            Create Gig
          </button>
  
          <a href="/" class="text-black ml-4"> Back </a>
        </div>
      </form>
</div>

<div>
    <form wire:submit="save" enctype="multipart/form-data">
        @csrf
        <div class="mb-6">
          <x-form.input-text 
          wire:model="listingForm.company" 
          type="text" 
          class="border border-gray-200 rounded p-2 w-full" 
          name="listingForm.company"  
          for="company" 
          labelValue="Company Name"/> 
        </div>
  
        <div class="mb-6">
          <x-form.input-text 
          wire:model="listingForm.title" 
          type="text" 
          class="border border-gray-200 rounded p-2 w-full" 
          name="listingForm.title" 
          for="title" 
          labelValue="Job Title"
          placeholder="Example: Senior Laravel Developer" />
        </div>
  
        <div class="mb-6">
          <x-form.input-text 
          wire:model="listingForm.location" 
          type="text" 
          class="border border-gray-200 rounded p-2 w-full" name="listingForm.location" 
          for="location" 
          labelValue="Job Location"
          placeholder="Example: Remote, Boston MA, etc" />
        </div>
  
        <div class="mb-6">
          <x-form.input-text 
          wire:model="listingForm.email" 
          type="text" 
          class="border border-gray-200 rounded p-2 w-full" 
          name="listingForm.email" 
          for="email" 
          labelValue="Contact Email"
          />
        </div>
  
        <div class="mb-6">
          <x-form.input-text 
          wire:model="listingForm.website" 
          type="text" 
          class="border border-gray-200 rounded p-2 w-full" 
          name="listingForm.website" 
          for="website" 
          labelValue="Website/Application URL"
          />
        </div>
  
        <div class="mb-6">
          <x-form.input-text  
          wire:model="listingForm.tags" 
          type="text" 
          class="border border-gray-200 rounded p-2 w-full" 
          name="listingForm.tags" 
          placeholder="Example: Laravel Backend Postgres etc" 
          for="tags" 
          labelValue="Tags (space Separated)"
            />
        </div>
        {{-- After adding file upload feature change this to use blade component--}}
        <div class="mb-6">
          <label for="logo" class="inline-block text-lg mb-2">
            Company Logo
          </label>
          <input 
          wire:model="listingForm.logo" 
          type="file" 
          class="border border-gray-200 rounded p-2 w-full" 
          name="logo"
          />
          @error('listingForm.logo')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
        {{-- ------------------------------------------------------------------------ --}}
        <div class="mb-6">
          <label for="description" class="inline-block text-lg mb-2">
            Job Description
          </label>
          <textarea 
          wire:model="listingForm.description" 
          class="border border-gray-200 rounded p-2 w-full" 
          name="description" rows="10"
          placeholder="Include tasks, requirements, salary, etc">
          </textarea>
          @error('listingForm.description')
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

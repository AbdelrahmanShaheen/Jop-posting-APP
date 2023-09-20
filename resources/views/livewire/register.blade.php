<div>
    <form wire:submit="register">
        @csrf
        <div class="mb-6">
          <x-form.input-text 
          wire:model="name"
          type="text" 
          class="border border-gray-200 rounded p-2 w-full" 
          name="name" 
          for="name" 
          labelValue="Name"
          value="{{old('name')}}" 
          />
        </div>
  
        <div class="mb-6">
          <x-form.input-text 
          wire:model="email"
          type="email" 
          class="border border-gray-200 rounded p-2 w-full" 
          name="email" 
          for="email"
          labelValue="Email"
          value="{{old('email')}}" 
          />
        </div>
  
        <div class="mb-6">
          <x-form.input-text 
          wire:model="password"
          type="password" 
          class="border border-gray-200 rounded p-2 w-full" 
          name="password"
          for="password"
          labelValue="Password"
          value="{{old('password')}}" 
          />
        </div>
  
        <div class="mb-6">
          <x-form.input-text 
          wire:model="password_confirmation"
          type="password" 
          class="border border-gray-200 rounded p-2 w-full" 
          name="password_confirmation"
          for="password2"
          labelValue="Confirm Password"
          value="{{old('password_confirmation')}}" 
          />
        </div>
  
        <div class="mb-6">
          <button type="submit" class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
            Sign Up
          </button>
        </div>
  
        <div class="mt-8">
          <p>
            Already have an account?
            <a href="/login" class="text-laravel">Login</a>
          </p>
        </div>
      </form>
</div>

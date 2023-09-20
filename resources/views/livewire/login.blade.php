<div>
    <form wire:submit="authenticate">
        @csrf
        <div class="mb-6">
          <x-form.input-text 
          wire:model="email"
          type="email" 
          class="border border-gray-200 rounded p-2 w-full" 
          name="email" 
          value="{{old('email')}}" 
          for="email"
          labelValue="Email"
          />
        </div>
  
        <div class="mb-6">
          <x-form.input-text 
          wire:model="password"
          type="password" 
          class="border border-gray-200 rounded p-2 w-full" 
          name="password"
          value="{{old('password')}}" 
          for="password"
          labelValue="Password"
          />
        </div>
  
        <div class="mb-6">
          <button type="submit" class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
            Sign In
          </button>
        </div>
  
        <div class="mt-8">
          <p>
            Don't have an account?
            <a href="/register" class="text-laravel">Register</a>
          </p>
        </div>
      </form>
</div>

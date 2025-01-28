<x-layout>
    <x-slot:heading>
        Create Job
    </x-slot:heading>
    
    <form method="POST" action="/jobs">
        @csrf

        <div class="space-y-12">
          <div class="border-b border-gray-400/10 pb-12">
            <h2 class="text-base/7 font-semibold text-gray-200">Create a new job</h2>
            <p class="mt-1 text-sm/6 text-gray-300">We just need some info from you!</p>
      
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <x-form-field>
                  <x-form-label for="title">Title</x-form-label>
                  <div class="mt-2">
                    <x-form-input name="title" id="title" placeholder="Warrior" required/>
                  </div>
                  <x-form-error name="title"/>
                </x-form-field>

               
  
                <x-form-field>
                  <x-form-label for="salary">Salary</x-form-label>
                  <div class="mt-2">
                    <x-form-input name="salary" id="salary" placeholder="50,000 Gil" required/>
                  </div>
                  <x-form-error name="salary"/>
                </x-form-field>               
  
        
                <div class="col-span-full">
                  <label for="description" class="block text-sm/6 font-medium text-gray-400">Description</label>
                  <div class="mt-2">
                    <textarea name="description" id="description" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-400 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" required></textarea>
                  </div>
                  <p class="mt-3 text-sm/6 text-gray-600">Write a few sentences about the job.</p>
                    @error('description')
                      <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
                    @enderror
                </div>
              </div>

              {{-- <div class="mt-10">
                @if ($errors->any())
                  <ul>
                    @foreach($errors->all() as $error)
                      <li class="text-red-500 italic">{{$error}}</li>
                    @endforeach
                  </ul>
                @endif
              </div> --}}
          </div>
        </div>
      
        <div class="mt-6 flex items-center justify-end gap-x-6">
          <button type="button" class="text-sm/6 font-semibold text-gray-400">Cancel</button>
          <x-form-button>Save</x-form-button>
        </div>
      </form>
      


</x-layout>
    
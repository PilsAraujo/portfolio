<x-layout>
    <x-slot:heading>
        Edit Job: {{ $job->title }}
    </x-slot:heading>
    
    <form method="POST" action="/jobs/{{$job->id}}">
        @csrf
        @method('PATCH')

        <div class="space-y-12">
          <div class="border-b border-gray-400/10 pb-12">
      
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-4">
                  <label for="title" class="block text-sm/6 font-medium text-gray-400">Job Title</label>
                  <div class="mt-2">
                    <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                      <input 
                        type="text" 
                        name="title" 
                        id="title" 
                        class="block min-w-0 grow py-1.5 pr-3 px-1 text-base text-gray-900 placeholder:text-gray-900 focus:outline-none sm:text-sm/6" 
                        placeholder="Paladin" 
                        value={{ $job->title }}
                        required>
                    </div>
                  </div>
                    @error('title')
                      <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
                    @enderror
                </div>

               
  
                <div class="sm:col-span-4">
                  <label for="salary" class="block text-sm/6 font-medium text-gray-400">Salary</label>
                  <div class="mt-2">
                    <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                         <input 
                            type="text" 
                            name="salary" 
                            id="salary" 
                            class="block min-w-0 grow py-1.5 pr-3 px-1 text-base text-gray-900 placeholder:text-gray-900 focus:outline-none sm:text-sm/6" 
                            placeholder="50,000 Gil" 
                            value={{ $job->salary }}
                            required>
                    </div>
                  </div>
                    @error('salary')
                      <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
                    @enderror
                </div>                 
  
        
                <div class="col-span-full">
                  <label for="description" class="block text-sm/6 font-medium text-gray-400">Description</label>
                  <div class="mt-2">
                    <textarea 
                        name="description" 
                        id="description" 
                        rows="3" 
                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-900 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" 
                        required>{{ $job->description }}</textarea>
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
      
        <div class="mt-6 flex items-center justify-between gap-x-6">
          <div class="flex-items-center">
            <button form="delete-form" class="text-red-500 font-bold">Delete</button>
          </div>

          <div class="flex items-center gap-x-6">
            <a href="/jobs/{{ $job->id }}" class="text-sm/6 font-semibold text-gray-400">Cancel</a>
          
            <div>
                <button type="submit" 
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Update
                </button>
              </div>
        </div>
                

        </div>
      </form>

      <form method="POST" action="/jobs/{{ $job->id }}" id="delete-form" class="hidden">
        @csrf
        @method('DELETE')
      </form> 
</x-layout>
    
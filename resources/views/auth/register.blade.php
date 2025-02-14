<x-layout>
    <x-slot:heading>
        Register
    </x-slot:heading>
    
    <form method="POST" action="/register">
        @csrf

        <div class="space-y-12">
          <div class="border-b border-gray-400/10 pb-12">
      
            <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <x-form-field>
                  <x-form-label for="name">Name</x-form-label>
                  <div class="mt-2">
                    <x-form-input name="name" id="name" :value="old(key: 'name')" required/>
                  </div>
                  <x-form-error name="name"/>
                </x-form-field>

               
  
                <x-form-field>
                  <x-form-label for="last_name">Last Name</x-form-label>
                  <div class="mt-2">
                    <x-form-input name="last_name" id="last_name" :value="old('last_name')" required/>
                  </div>
                  <x-form-error name="last_name"/>
                </x-form-field>      
                
                <x-form-field>
                    <x-form-label for="email">Email</x-form-label>
                    <div class="mt-2">
                      <x-form-input name="email" id="email" type="email" :value="old('email')" required/>
                    </div>
                    <x-form-error name="email"/>
                  </x-form-field>
                  
                <x-form-field>
                    <x-form-label for="password">Password</x-form-label>
                    <div class="mt-2">
                      <x-form-input name="password" id="password" type="password" required/>
                    </div>
                    <x-form-error name="password"/>
                  </x-form-field>    

                <x-form-field>
                    <x-form-label for="password_confirmation">Confirm Password</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="password_confirmation" id="password_confirmation" type="password" required/>
                        </div>
                    <x-form-error name="password_confirmation"/>
                </x-form-field>
                
                <x-form-field>
                  <x-form-label for="faction">Faction</x-form-label>
                  <div class="mt-2">
                    <x-form-input name="faction" id="faction" :value="old(key: 'faction')" required/>
                  </div>
                  <x-form-error name="faction"/>
                </x-form-field>

              </div>

          </div>
        </div>
      
        <div class="mt-6 flex items-center justify-end gap-x-6">
          <a href="/" class="text-sm/6 font-semibold text-gray-400">Cancel</a>
          <x-form-button>Register</x-form-button>
        </div>
      </form>
      


</x-layout>
    
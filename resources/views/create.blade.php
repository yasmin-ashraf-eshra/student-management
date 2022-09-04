{{-- <form action="/create" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name"></br>
    <label for="email">Email:</label>
    <input type="text" name="email"></br>
    <label for="password">Password:</label>
    <input type="text" name="password"></br>
    <button>Done</button>
</form> --}}


    
        
<form method="POST" action="create">
    @csrf

    <!-- Name -->
    <div>
        <x-label for="name" :value="__('Name')" />

        <x-input id="name" class="block mt-1 w-full" type="text" name="name"  />
    </div>

    <!-- Email Address -->
    <div class="mt-4">
        <x-label for="email" :value="__('Email')" />

        <x-input id="email" class="block mt-1 w-full" type="email" name="email"  />
    </div>
    
    <div class="flex items-center justify-end mt-4">
        <x-button class="ml-4">
            {{ __('Register') }}
        </x-button>
    </div>
</form>       
    
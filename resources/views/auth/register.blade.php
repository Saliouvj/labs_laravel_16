<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            {{-- <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a> --}}
            <img src="img/{{$logo->name}}" alt="" style="height: 80px" class="mb-3 mt-4">
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- ROW 1 -->
            <div class="grid grid-cols-2">
                <!-- Name -->
                <div class="mr-2">
                    <x-label for="name" :value="__('Name')" />

                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                </div>

                <!-- First name -->
                <div class="ml-2">
                    <x-label for="firstname" :value="__('First name')" />

                    <x-input id="firstname" class="block mt-1 w-full" type="text" name="firstname" :value="old('firstname')" required autofocus />
                </div>
            </div>

            <!-- ROW 2 -->
            <div class="grid grid-cols-2 mt-4">
                <!-- Email Address -->
                <div class="mr-2">
                    <x-label for="email" :value="__('Email')" />
    
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                </div>
    
                <!-- Age -->
                <div class="ml-2">
                    <x-label for="age" :value="__('Age')" />
    
                    <x-input id="age" class="block mt-1 w-full" type="number" min="16" max="100" name="age" :value="old('age')"   required autofocus />
                </div>
            </div>

            <!-- ROW 3 -->
            <div class="grid grid-cols-2 mt-4">
                <!-- Genre -->
                <div class="mr-2">
                    <x-label for="genre_id" :value="__('Genre')" />
                    
                    <select id="genre_id" class="block mt-1 w-full border-b border-gray-200 overflow-hidden shadow-sm sm:rounded-lg" name="genre_id" :value="old('genre_id')">
                        <option value="">Select a genre</option>
                        @foreach ($genres as $genre)
                            <option value="{{$genre->id}}">{{$genre->name}}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Job -->
                <div class="ml-2">
                    <x-label for="job_id" :value="__('Job')" />
                    
                    <select id="job_id" class="block mt-1 w-full border-b border-gray-200 overflow-hidden shadow-sm sm:rounded-lg" name="job_id" :value="old('job_id')">
                        <option value="">Select a job</option>
                        @foreach ($jobs as $job)
                        <option value="{{$job->id}}">{{$job->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            
            {{-- <!-- Photo -->
            <div class="mt-4">
                <x-label for="photo" :value="__('Photo')" />

                <x-input id="photo" class="block mt-1 w-full" type="file" name="photo" :value="old('photo')"  required autofocus />
            </div> --}}

            {{-- <!-- Description -->
            <div class="mt-4">
                <x-label for="description" :value="__('Description')" />

                <x-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')"  required autofocus />
            </div> --}}

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

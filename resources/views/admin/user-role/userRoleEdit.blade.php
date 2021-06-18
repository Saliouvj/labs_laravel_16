<x-app-layout>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('updateRole', $user) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <h1><b>Modifier le rôle de l'utilisateur :</b></h1>

                        <!-- Rôle -->
                        <div class="mt-4">
                            <x-label for="role_id" :value="__('Rôle')" />
                            
                            <select id="role_id" class="block mt-1 w-1/3 border-b border-gray-200 overflow-hidden shadow-sm sm:rounded-lg" name="role_id" :value="old('role_id')">
                                <option value="{{$user->role->id}}" selected>{{$user->role->name}}</option>
                                @foreach ($roles as $role)
                                    @if ($role->id != $user->role_id)
                                        <option value="{{$role->id}}">{{$role->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                        <div class="flex items-center mt-4">
            
                            <x-button type="submit">
                                {{ __('Update') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
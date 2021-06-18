<x-app-layout>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('postUpdate', $post) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <h1><b>Modifier l'article du témoignage :</b></h1>

                        
                        <!-- Title -->
                        <div class="mt-4">
                            <x-label for="title" :value="__('Title')" />
            
                            <x-input id="title" class="block mt-1 w-full" type="text" name="title" value="{{$post->title}}" required autofocus />
                        </div>

                        <!-- Text -->
                        <div class="mt-4">
                            <x-label for="text" :value="__('Text')" />

                            <textarea name="text" id="text" class="block mt-1 w-full border-b border-gray-200 overflow-hidden shadow-sm sm:rounded-lg" rows="5" cols="60" value="{{$post->text}}">{{$post->text}}</textarea>
                        </div>

                        <!-- Image -->
                        <div class="mt-4">
                            <x-label for="image" :value="__('Image')" />

                            <x-input id="image" type='file' class="mt-1 flex flex-col items-center px-2 py-4 bg-white text-purple-900 rounded-lg tracking-wide border border-blue cursor-pointer hover:text-green-500" name="image" value="{{$post->image}}" style="width: 310px" required autofocus />
                        </div>

                        <!-- Category -->
                        <div class="mt-4">
                            <x-label for="category_id" :value="__('Category')" />

                            <select id="category_id" class="block mt-1 w-full ml-1 border-b border-gray-200 overflow-hidden shadow-sm sm:rounded-lg" name="category_id" :value="old('category_id')">
                                <option value="{{$post->category->id}}" selected>{{$post->category->name}}</option>
                                @foreach ($categories as $category)
                                    @if ($category->id != $post->category_id)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                        <!-- Tags -->
                        <div class="mt-4">
                            <x-label for="taglist[]" :value="__('Tags')" />
                            <div>
                                @foreach ($tags as $tag)
                                    <div class="mt-2 ml-2">
                                        <span>
                                            <input type="checkbox" name="taglist[]" value="{{$tag->id}}" style="height: 25px; width: 25px" class="border-b border-gray-200 overflow-hidden shadow-sm sm:rounded-lg"
                                            @foreach ($tagposts as $tagpost)
                                                @if ($tagpost->tag_id == $tag->id)
                                                    checked
                                                @endif
                                            @endforeach
                                            >

                                            <label for="taglist[]" class="ml-1">{{$tag->name}}</label>
                                        </span>
                                    </div>
                                @endforeach
                            </div>
                        </div>


                        <div class="flex items-center mt-6">
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
<x-app-layout>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <div class="my-4">
                        @include('layouts.flash')
                    </div>

                    <!-- Articles à valider -->
                    <div class="mb-4">
                        <h1><b>Articles dans la corbeille :</b></h1>
                        <div>
                            @forelse ($articles as $article)
                            <div class="mt-4 w-3/5 border border-purple-700 rounded py-4 px-4">
                                <td class="px-8 py-4 whitespace-nowrap text-left text-sm font-medium">
                                    <h1 class="text-xl mb-4"><b>Titre :</b> {{$article->title}}</h1>
                                </td>
                                <td class="px-6 py-4  break-words">
                                    <img src="{{asset('img/'. $article->image)}}" alt="">
                                    <p class="text-gray-900 mt-2"><b>Image :</b> {{$article->image}}</p>
                                </td>
                                <td class="px-6 py-4 break-words">
                                    <p class="mt-4"><b>Text :</b></p>
                                    <p class="text-gray-900 mt-2">{{$article->text}}</p>
                                </td>
                                <td>
                                    <p class="text-gray-900 mt-4"><b>Catégorie :</b> {{$article->category->name}}</p>
                                </td>
                                <div class="flex mt-4">
                                    <form action={{route('recupArticle', $article->id)}} method="post">
                                        @csrf
                                        @method('PUT')
                                        <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mr-2">Récupérer</i></button>
                                    </form>
                                    <form method="post" action="{{route('deleteArticle', $article)}}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" type="submit">Delete</button>
                                    </form>
                                </div>
                            </div>
                            @empty 
                            <tr>
                                <td class="text-sm font-medium" colspan="5" >
                                    Aucun
                                </td>
                            </tr>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
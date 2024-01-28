@vite(['resources/css/app.css','resources/js/app.js'])
<x-header/>
<x-sidebar/>
@section('title')
<h2 class="text-4xl font-bold">Formulaire de Modification de Catégorie</h2>
@endsection

@section('content')

<div class="row col-md-12">
    <h3>Modification de la Categorie</h3>

    <form class="max-w-sm mx-auto border-gray-300 text-gray-900 " action="{{route('categories.update',$category->id)}}" method="POST">
        @csrf
        @method("PUT")
        <div class="mb-5">
            <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900">Nom de la Catégorie</label>
            <input value="{{$category->name}}" type="text" id="base-input" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
        </div>
        <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Description de la Catégorie</label>
        <textarea name="description" id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Décrivez la Catégorie...">
            {{$category->description}}
        </textarea>

        <button type="submit" class="mt-8 text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 shadow-lg shadow-green-500/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Mettre à jour</button>
    </form>

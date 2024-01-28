@vite(['resources/css/app.css','resources/js/app.js'])
<x-header/>
<x-sidebar/>
@section('title')
<h2 class="text-2xl font-medium ml-80 mt-2 ">Création de Citations</h2>
@section('content')

<div class="row col-md-12">


    <form class="max-w-sm mx-auto border-gray-300 text-gray-900 " action="{{route('citations.store')}}" method="POST">


        @if (Session::has('success'))

<div id="alert-3" class="ml-2 flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50" role="alert">
    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
      <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
    </svg>
    <span class="sr-only">Info</span>
    <div class="ms-3 text-sm font-medium">
      {{Session::get('success')}}
    </div>
    <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8" data-dismiss-target="#alert-3" aria-label="Close">
      <span class="sr-only">Close</span>
      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
      </svg>
    </button>
  </div>

@endif
</form>

<form class="max-w-sm mx-auto border-gray-300 text-gray-900 " action="{{route('citations.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
<div class="flex  align-items">
    <div class="mb-5">
        <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900">Titre de la Citation</label>
        <input type="text" id="base-input" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
    </div>
    <div class="ml-12">
        <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900">Nom de l'Auteur</label>
        <input type="text" id="author" name="author" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">

</div>
</div>
    {{-- <div class="mb-5">
        <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900">Image de la Citation</label>
        <input type="text" placeholder="Copier le lien de l'image Ici" id="image" name="image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
    </div> --}}


<label class="block mb-2 text-sm font-medium text-gray-900 " for="image">Charger une image</label>
<input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50  focus:outline-none   " id="image" name="image" type="file">



    <div class="mb-5">
        <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Contenu de la Citation</label>
        <textarea name="content" id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Corps de la Citation..."></textarea>
    </div>

    <div class="mb-5">
        <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900">Date de Publication</label>
        <input type="text" id="date_pub" name="date_pub" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
    </div>

    <div class="mb-5">
        <input type="checkbox" id="status" value="1" checked name="status">
        <label for="status" class="block mb-2 text-sm font-light text-gray-900">Publié</label>

    </div>


<label for="countries_multiple" class="block mb-2 text-sm font-medium text-gray-900">Choisissez la Catégorie</label>
<select  name="category_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
  <option selected>Choix de Catégorie</option>
  @foreach ($categories as $category)
  <option value="{{$category->id}}"> {{$category->name}} </option>

  @endforeach

</select>




    <button type="submit" class="mt-4 text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 shadow-lg shadow-green-500/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Ajouter</button>
</form>




<link rel="icon" type="image/png" href="img/kfc.png"/>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">


@extends('articles.layout')
@section('content')
<div class="bg-red-600 text-gray-50 text-7xl">KFC</div>
<div class="bg-red-600 text-gray-50 text-1xl">It's finger lickin' good</div><p>
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('articles.create') }}">Maak een menu aan</a><p>
            </div>
        </div>
</div><p>
<table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th class="bg-red-600 text-white" scope="col">Id</th>
      <th class="bg-red-600 text-white" scope="col">Menu</th>
      <th class="bg-red-600 text-white" scope="col">Ingrediënten</th>
      <th class="bg-red-600 text-white" scope="col">Prijs</th>
      <th class="bg-red-600 text-white" scope="col"></th>
    </tr>
  </thead>
  <tbody>
      
@foreach ($articles as $article)
    <tr>
      <th scope="row">{{ $article->id }}</th>
      <td>{{ $article->topic }} </td>
      <td>{{ $article->description }}</td>
      <td>{{ $article->categorie }}</td>
      <td>
      <form action="{{ route('articles.destroy',$article->id) }}" method="POST">
        
        

        <a class="btn btn-primary" href="{{ route('articles.edit',$article->id) }}">Edit</a>

        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger">Verwijder</button>
        </form>
      </td>
      
    </tr>
@endforeach
  </tbody>
</table>
<img src="img/menu.jpg" alt="kfc">
<img src="img/menu1.jpg" alt="kfc">
{{ $articles->links() }}

@endsection

@extends('articles.layout')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Maak menu aan</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-info" href="{{ route('articles.index') }}"> Terug</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>error!</strong> Zorg ervoor dat alle velden ingevuld zijn<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('articles.store') }}" method="POST">
@csrf
  <div class="form-group">
    <label for="topic">Menu naam</label>
    <input type="text" class="form-control"  placeholder="bijv: 20-chicken tenders" name ="topic">
  </div>
  <div class="form-group">
    <label for="description">Ingrediënten</label>
    <textarea class="form-control" rows="3"placeholer ="Enter description" name="description"></textarea>
  </div>
  <div class="form-group">
    <label for="categorie">Prijs</label>
    <input type="text" class="form-control"  placeholder="Enter Prijs" name ="categorie">
  </div>
  <button type="submit" class="btn btn-primary">Maak aan</button>
</form>

@endsection
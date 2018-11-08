@extends('layouts.app')
@section('title', 'Series')
@section('content')
<div class="content">
        <div class="title m-b-md">
            addSeries
        </div>
        
            <form class="" action="/insertserie" method="post">
                {{-- L'attribut action spécifie où envoyer les données de formulaire lorsqu'un formulaire est soumis. 
                la method post spécifie que notre formulaire va changer des données--}}
                @csrf
                <div class="form-group">
                    <label for="exampleInputSerie1">Title serie</label>
                    {{-- le label est là pour aider l'utilisateur  --}}
                    <input required placeholder="Title" type="text" class="form-control" name="title" value="">
                 </div>
                 <div class="form-group">
                    <label for="exampleInputNumber1">Year of publication</label>
                    <input required placeholder="0000" type="number" class="form-control" name="publication" value="">
                 </div>
                 <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="inputGroupSelect01">actors</label>
                    </div>
                    <select name="actors" class="custom-select" id="inputGroupSelect01">
                        @foreach ($actors as $actor)
                        {{-- je parcours ma variable actors dans laquelle je récupére la valeur actor
                        je récupére l'id de ma valeur  --}}
                            <option value="{{ $actor->id }}">
                                {{ $actor->completeName() }}
                            </option>
                        @endforeach
                    </select>
                </div>
                 <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">genres</label>
                    </div>
                    <select name="genres" class="custom-select" id="inputGroupSelect01">
                        @foreach ($genres as $genre)
                            <option value="{{ $genre->id }}">
                                {{ $genre->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <input type="submit" class="btn btn-primary" name="" value="Insert">
            </form>
        </div>
</div>
@endsection
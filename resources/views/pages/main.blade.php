@extends('layout.app')

@section('mario')
<main>
    @foreach( $comics as $elem)
    <div class="card fumetto" style="width: 18rem;">
        <img src="{{ $elem['thumb']}}" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">{{$elem['title']}}</p>
        </div>
    </div>
    @endforeach
</main>
@endsection


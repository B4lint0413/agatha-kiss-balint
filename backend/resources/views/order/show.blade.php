@extends("layouts.main")
@section("title", $title)
@section("content")
<h1 class="text-center">{{$title}}</h1>

<a class="btn btn-info d-block" href="{{route('novels.show', $novelid)}}">Részletes információk a könyvről</a>

<table class="table table-striped">
    <thead>
        <th>Rendelés azonosítója</th>
        <th>Rendelés dátuma</th>
        <th>Darabszám</th>
    </thead>
    <tbody>
        @foreach($orders as $order)
            <tr>
                <td>{{$order->id}}</td>
                <td>{{$order->date}}</td>
                <td>{{$order->piece}}</td>
            </tr>
        @endforeach
    </tbody>
</table>

<div class="alert alert-info">
<p>Eddig eladott példányszám: <b>{{$count}} darab</b></p>
</div>
@endsection
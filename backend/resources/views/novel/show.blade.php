@extends("layouts.main")
@section("title", $title)
@section("content")
<h1 class="text-center">{{$title}}</h1>

<table class="table table-striped">
    <tbody>
        <tr>
            <th>Azonosító</th>
            <td>{{$novel->id}}</td>
        </tr>
        <tr>
            <th>Kategória</th>
            @if($novel->category == "")
                <td>-</td>
            @else
                <td>{{$novel->category}}</td>
            @endif
        </tr>
        <tr>
            <th>Regény magyar címe</th>
            <td>{{$novel->hungarian_title}}</td>
        </tr>
        <tr>
            <th>Regény eredeti címe</th>
            <td>{{$novel->english_title}}</td>
        </tr>
        <tr>
            <th>Év</th>
            <td>{{$novel->year}}</td>
        </tr>
        <tr>
            <th>Ár</th>
            <td>{{number_format($novel->price, 0, ",", " ")}} Ft</td>
        </tr>
    </tbody>
</table>
<a class="btn btn-dark" href="{{route('novels.index')}}"><< Vissza a könyvekhez</a>
<a class="btn btn-info" href="{{route('orders.show', $novel->id)}}"><< Rendelések</a>
@endsection
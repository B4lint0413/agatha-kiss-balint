@extends("layouts.main")
@section("title", $title)
@section("content")
<h1 class="text-center">{{$title}}</h1>

@if(isset($categories))
<p class="text-center">
    @foreach($categories as $category)
        <span class="badge bg-success">{{$category->category}}</span>
        @if($category->category == "")
            <span class="badge bg-success">Egyéb</span>
        @endif
    @endforeach
</p>
@endif
<table class="table table-striped">
    <thead class="table-dark">
        <tr>
            <th>Kategória</th>
            <th>Regény magyar címe</th>
            @if(isset($murder))
                <th>Regény angol címe</th>
            @elseif(isset($fifties))
                <th>Évszám</th>
            @endif
            <th>Regény ára</th>
            <th>Műveletek</th>
        </tr>
    </thead>
    <tbody>
        @foreach($novels as $novel)
        <tr>
            <td>{{$novel->category}}</td>
            <td>{{$novel->hungarian_title}}</td>
            @if(isset($murder))
                <td>{{$novel->english_title}}</td>
            @elseif(isset($fifties))
                <td>{{$novel->year}}</td>
            @endif
            <td>{{number_format($novel->price, 0, ",", " ")}} Ft</td>
            <th>
                <a class="btn btn-info" href="{{route('novels.show', $novel->id)}}">Info</a>
                <a class="btn btn-secondary" href="{{route('orders.show', $novel->id)}}">Rendelések</a>
            </th>  
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
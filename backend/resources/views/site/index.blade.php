@extends("layouts.main")
@section("title", $title)
@section("content")
<div class="row">
    <div class="col-12 col-md-6">
        <h1>{{$title}}</h1>
        <p>Agatha Christie (Torquay, 1890. szeptember 15. – Wallingford, 1976. január 12.) angol írónő, „a krimi koronázatlan királynője”. Mary Westmacott álnéven romantikus regényeket is írt, de az utókor számára inkább mintegy 80 detektívregénye és nagy sikereket arató West End-i színpadi darabjai miatt emlékezetes. A Guinness Rekordok Könyve szerint William Shakespeare könyvei és a Biblia után Agatha Christie könyveit adták ki a legnagyobb példányszámban az egész világon. </p>
        <p>Színpadi darabja, az Egérfogó (1952) tartja az első előadást követően a leghosszabb időn át játszott előadás rekordját: elsőként 1952-ben mutatták be az Ambassadors Theatre-ben Londonban, és még ma is (2023) játsszák. </p>
    </div>
    <img class="col-12 col-md-6 img-thumbnail" src="{{asset('img/agatha.jpg')}}" alt="Agatha Christie">
</div>
<a href="{{route('novels.index')}}" class="btn btn-info mx-auto">Könyvek listája</a>
@endsection
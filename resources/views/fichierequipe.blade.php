
@extends("layout-test")


@section("content")
    {{ dump($bladeEquipe) }}
    <a href="{{route("home")}}">HOME</a>
    @foreach ($bladeEquipe as $team)
        <ul>

            @if (($team['chef']) === true)
                <li>Prénom : {{ $team['firstname'] }}</li>
                <li>Nom : {{ $team['lastname'] }}</li>
            @endif
        </ul>
    @endforeach


    <ul>

        <li>Nombres de pers dans l'equipe : {{ count($bladeEquipe) }}</li>

    </ul>



@endsection









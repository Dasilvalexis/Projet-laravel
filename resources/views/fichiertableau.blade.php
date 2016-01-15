
$products = [

];



{{ dump($bladeProducts) }}


{{-- Ceci est un commentaire en blade --}}

@foreach ($bladeProducts as $prod)
    <ul>
        <li>Titre : {{ $prod['title'] }}</li>
        <li>Description : {{ $prod['description'] }}</li>
        <li>Prix : {{ $prod['prix'] }}</li>
        <li>Date :  {{ $prod['date_created']->format('d m Y') }}</li>
    </ul>
@endforeach


<ul>
    @forelse ($bladeProducts as $prod)
        <li>Titre : {{ $prod['title'] }}</li>
        <li>Description : {{ $prod['description'] }}</li>
        <li>Prix : {{ $prod['prix'] }}</li>
        <li>Date :  {{ $prod['date_created']->format('d m Y') }}</li>
    @empty
        <p>Il n'y a pas de produit disponible</p>
    @endforelse
</ul>
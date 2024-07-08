<main>
    <div class="container">
        <div class="row-2 flex wrap gap-25">
            @foreach ($products as $card)
                <div class="col-33-2">
                    <div class="content position-relative">
                        <img class="main-img" src="{{ Vite::asset('resources/img/') }}{{ $card['frontImage'] }}"
                            alt="{{ $card['brand'] }} Brand'">
                        <img class="hover-img" src="{{ Vite::asset('resources/img/') }}{{ $card['backImage'] }}"
                            alt="{{ $card['brand'] }} Brand'">
                        <div class="badges">
                            @foreach ($card['badges'] as $badge)
                                @if ($badge['type'] == 'discount')
                                    <div class="discount red white-text weight-700 small-text">{{ $badge['value'] }}
                                    </div>
                                @endif
                                @if ($badge['type'] == 'tag')
                                    <div class="green sostenibilità white-text weight-700 small-text">
                                        {{ $badge['value'] }}</div>
                                @endif
                            @endforeach
                        </div>
                        @if ($card['isInFavorites'])
                            <div class="heart white redHeart">&hearts;</div>
                        @else
                            <div class="heart white">&hearts;</div>
                        @endif
                        <p>{{ $card['brand'] }}</p>
                        <h2>{{ $card['name'] }}</h2>
                        <p><span class="weight-700 red-text ">{{ $card['price'] }} &euro;</span></p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</main>

<header class="position-fixed">
    <div class="container">
        <div class="row-1 flex">
            <div class="col-33-1">
                <a class="white-text" href="">Donna</a>
                <a class="white-text margin-y-10" href="">Uomo</a>
                <a class="white-text" href="">Bambini</a>
            </div>
            <div class="col-33-1 justify-center ">
                <img class="logo-img" src="{{ Vite::asset('resources/img/boolean-logo.png') }}" alt="Logo">
            </div>
            <div class="col-33-1 justify-right">
                @foreach ($header_icons as $icon)
                    <a href=""><img class="small-image-style" src="{{ $icon['icon'] }}"
                            alt="{{ $icon['alt'] }}" /></a>
                @endforeach
            </div>
        </div>
    </div>
</header>

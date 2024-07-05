<header class="position-fixed">
        <div class="container">
            <div class="row-1 flex">
                <div class="col-33-1" v-for="opz in headerOptions">
                    <a class="white-text" href="">Donna</a>
                    <a class="white-text margin-y-10" href="">Uomo</a>
                    <a class="white-text" href="">Bambini</a>
                </div>
                <div class="col-33-1 justify-center ">
                    <img class="logo-img" src="{{ Vite::asset('resources/img/boolean-logo.png') }}" alt="Logo">
                </div>
                <div class="col-33-1 justify-right" v-for = "icons in headerIcons">
                    <a href=""><img class="small-image-style" :src="icons.source1" :alt="icons.alt1"/></a>
                    <a href=""><img class="small-image-style margin-y-10" :src="icons.source2" :alt="icons.alt2"/></a>
                    <a href=""><img class="small-image-style" :src="icons.source3" :alt="icons.alt3"/></a>
                </div>
            </div>
        </div>
    </header>
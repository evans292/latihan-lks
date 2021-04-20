<x-app-layout>
    <x-slot name="title">
        Welcome
    </x-slot>
    <x-slot name="style">
        <style>
            body {
                min-height: 300vh;
            }

            li, a, button {
                font-family: 'Montserrat', sans-serif;
                font-size: 16px;
                font-weight: 500;
                text-decoration: none;
                color: rgb(207, 226, 226);
            }

            header {
                width: 100%;
                position: fixed;
                display: flex;
                justify-content: flex-end;
                align-items: center;
                transition: all 0.5s ease 0s;
                padding: 20px 10%;
            }

            header.sticky {
                padding: 10px 10%;
                background: #24252a;
            }

            header.sticky .logo,
            header.sticky .nav-links li a {
                color: rgb(207, 226, 226);
                transition: all 0.5s ease 0s;
            }

            header.sticky button {
                border: solid 1px rgb(207, 226, 226);
                color:rgb(207, 226, 226);
            }

            header.sticky button:hover {
                background: rgb(207, 226, 226);
                color: #24252a;
            }

            header.sticky .logo:hover,
            header.sticky .nav-links li a:hover {
                color: #666977;
            }

            .logo {
                margin-right: auto;
                font-family: 'Rock Salt', sans-serif;
                font-weight: 700;
                font-size: 2rem;
                transition: all 0.5s ease 0s;
                color: rgb(207, 226, 226);
            }

            .logo-2{
                font-family: 'Rock Salt', sans-serif;
                font-weight: 700;
                font-size: 2rem;
                transition: all 0.5s ease 0s;
                color: rgb(207, 226, 226);
                text-align: center;
            }

            .logo-2:hover {
                color: #666977;
            }

            .logo:hover {
                color: #24252a;
            }

            nav {
                margin-top: 8px;
                margin-right: auto; 
            }

            .nav-links {
                display: flex;
            }

            .nav-links li {
                list-style: none;
                padding-right: 20px; 
            }

            .nav-links li a {
                transition: all 0.5s ease 0s;
            }

            .nav-links li a:hover {
                color: #24252a;
            }

            button {
                margin-right: 10px;
                border: solid 1px rgb(207, 226, 226);
                background: none;
                padding: 9px 25px;
                margin-top: 8px;
                cursor: pointer;
                outline: none;
                transition: all 0.5s ease 0s;
                border-radius: 5px;
            }

            button:hover {
                background: rgb(207, 226, 226);
                color:#24252a;
            }

            #banner {
                width: 100%;
                height: 100vh;
                background-image: url('/img/museum1.jpg');
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                background-attachment: fixed;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            .slogan {
                color: #24252a;
                font-family: 'Raleway', sans-serif;
                font-weight: 200;
                font-size: 5rem;
                background: rgb(255, 255, 255);
                padding: 10px;
            }

            .greet {
                font-family: 'Raleway', sans-serif;
                background: rgb(255, 255, 255);
                padding: 10px;
                margin-top: 8px;
            }

            .txt-type > .txt {
                border-right: solid 1px #24252a;
                animation: typeWriter 400ms steps(40) infinite normal;
            }

            #about {
                width: 100%;
                height: 100vh;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }

            .title {
                margin-top: 20vh;
                border-bottom: solid 1px #24252a;
                padding-bottom: 8px; 
            }

            .title-2 {
                color: rgb(255, 255, 255);
                border-bottom: solid 1px rgb(255, 255, 255);
                padding-bottom: 8px; 
                margin-top: 10vh;
            }

            .desc {
                text-align: center;
                padding: 10px 20px;
                line-height: 30px;
                transition: all 2s ease 0s;
                opacity: 0;
            }

            .desc.fade {
                opacity: 1;
            }

            #relics {
                width: 100%;
                height: 300vh;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                background: #24252a;
                padding-bottom: 50px; 
            }

            .relic-name {
                color: rgb(255, 255, 255);
                position: absolute;
                text-align: center;
                left: 30%;
                opacity: 0;
                transition: all 0.5s ease 0s;
            }

            .relic-group {
                display: flex;
                margin-top: 5vh;
                justify-content: space-between;
                transition: all 0.5s ease 0s;
                align-items: center;
            }

            .relic-pic {
                margin-right: 20px;
                cursor: pointer;
                position: relative;
                transition: all 0.5s ease 0s;
                border-radius: 10px; 
            }

            .relic-group:hover .relic-pic{
                opacity: 0.5;
            }

            .relic-group:hover .relic-name{
                opacity: 1;
            }

            #news {
                width: 100%;
                height: 100vh;
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            footer {
                width: 100%;
                height: 50vh;
                background: #24252a;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            .footer-desc {
                color: rgb(207, 226, 226);
            }

            .footer-text {
                margin: 10px;
                display: inline;
                color: rgb(207, 226, 226);
            }

            .name {
                color: rgb(207, 226, 226);
                margin-top: 8px;
            }

            .dropdown {
                position: relative;
                cursor: pointer;
            }

            .dropdown:hover .dropdown-item{
                display: block;
            }

            .dropdown-item {
                display: none;
                position: absolute;
                background: #24252a;
                width: 100%;
                padding: 10px;
            }

            @keyframes typeWriter {
                from {
                    border-right-color: #24252a;
                }
                to {
                    border-right-color: #c8cad6;
                }
            }
        </style>
    </x-slot>

    <header>
        <a href="#" class="logo">museum</a>
        <nav>
            <ul class="nav-links">
                <li><a href="#about">About</a></li>
                <li><a href="#relics">Relics</a></li>
                <li><a href="#news">News</a></li>
            </ul>
        </nav>
        @if (!Session::get('login'))
        <a href="{{ route('login') }}"><button>Login</button></a>
        <a href="{{ route('register') }}"><button>Register</button></a>
        @else
        <div class="dropdown">
            <span class="name">{{ session('name') }}</span>
        <div class="dropdown-item">
            <a href="{{ route('logout') }}">Logout</a>
        </div>
        </div>
        @endif

    </header>

    <section id="banner">
        <h1 class="slogan">
            Museum Of
            <span class="txt-type" data-wait="3000" data-words='["History", "Culture", "Sunda", "Sumedang"]'></span>
        </h1>
        <h2 class="greet">
            Welcome To Museum Sumedang
        </h2>
    </section>

    <section id="about">
        <h1 class="title">
            About the Museum
        </h1>
        <p class="desc">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis voluptatem, possimus facere sequi veritatis magnam vero cumque nisi aut deleniti eos, quis ea illo suscipit delectus quos cum quibusdam, laborum necessitatibus ab ipsa vitae! Obcaecati mollitia accusantium ullam quis eos. Libero, possimus ex. Aliquid velit quia eveniet consequuntur fuga adipisci vero sunt maiores labore, obcaecati totam, doloremque itaque, dolorum distinctio? Aperiam facere aliquid veritatis incidunt ipsa. Assumenda libero quasi veritatis enim aspernatur temporibus, voluptate quod hic perspiciatis rem inventore molestias totam distinctio sit fugit explicabo error mollitia quisquam reprehenderit quas voluptatibus est. Sit, reprehenderit dolor! Laboriosam adipisci corporis illo excepturi.</p>
    </section>

    <section id="relics">
        <h1 class="title-2">
            Relics
        </h1>
        <div class="relic-group">
            <img src="{{ asset('img/kereta.jpg') }}" class="relic-pic">
            <h2 class="relic-name">Kereta Kencana Naga Paksi</h2>
        </div>
        <div class="relic-group">
            <img src="{{ asset('img/mahkota.jpg') }}" class="relic-pic">
            <h2 class="relic-name">Mahkota Binokasih</h2>
        </div>
        <div class="relic-group">
            <img src="{{ asset('img/keris.jpg') }}" class="relic-pic">
            <h2 class="relic-name">Keris</h2>
        </div>
    </section>

    <section id="news">
        <h1 class="title">
            News
        </h1>
    </section>

    <footer>
        <a href="#" class="logo-2">museum</a>
        <div>
            <p class="footer-text">Jl. Prabu Geusan Ulun No.40, Regol Wetan</p>
            <p class="footer-text">0812-2128-687</p>
            <p class="footer-text">Buka ⋅ Tutup pukul 14.00</p>
            <p class="footer-text">Jawa Barat</p>
        </div>
    </footer>
</x-app-layout>
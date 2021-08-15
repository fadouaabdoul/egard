<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--icon in the the browser -->
    <link rel="icon" type="image/x-icon" href="{!! asset('asset/logo-ico.ico')  !!}" />
    <link rel="stylesheet" href="{{ mix("css/app.css") }}">
    <title>Etoile gard</title>
</head>
<header class="bg-indigo-900">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center ">
        <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0" href="#home">
            <div class="w-20 h-20 text-white p-2 bg-transparent rounded-full">
                <img alt="" src="{{ asset('asset/logo.png') }}" class=" rounded-full max-w-full h-auto align-middle border-none " />
            </div>
            <span class="ml-3 text-xl">Etoile Gard</span>
        </a>
        <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
            <a class="mr-12 hover:text-gray-900 underline " href="#home">{{__('Accueil')}}</a>
            <a class="mr-12 hover:text-gray-900 underline" href="#service">{{__('Nos Services')}}</a>
            <a class="mr-12 hover:text-gray-900 underline" href="#contact">{{__('Contact')}}</a>
            <a class="mr-12 hover:text-gray-900 underline" href="#about">{{__('Sur Nous')}}</a>
        </nav>

    </div>
</header>
<body>
<!---home section -->
<section class="text-gray-600 body-font bg-indigo-900">
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
        <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
            <h1 class="title-font  sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Etoil Gard
            </h1>
            <p class="mb-8 leading-relaxed text-gray-900 text-xl "> </p>

        </div>
        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
            <img class="object-cover object-center rounded" alt="hero" src="{{ asset('asset/secure2.png') }}" >
        </div>
    </div>
</section>
<!----features---->

<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto flex flex-wrap">
        <div class="lg:w-1/2 w-full mb-10 lg:mb-0 rounded-lg overflow-hidden">
            <img alt="feature" class="object-cover object-center h-full w-full" src="{{ asset('asset/service.png') }}">
        </div>
        <div class="flex flex-col flex-wrap lg:py-6 -mb-10 lg:w-1/2 lg:pl-12 lg:text-left text-center">
            <div class="flex flex-col mb-10 lg:items-start items-center">
                <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                        <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                    </svg>
                </div>
                <div class="flex-grow">
                    <h2 class="text-gray-900 text-lg title-font font-medium mb-3">{{ __('Nettoyage') }}</h2>
                    <p class="leading-relaxed text-base"> Service de nettoyages :
                        <br> - Nettoyage de bureaux et surfaces commerciales
                        <br> - Nettoyage des copropriétés
                        <br> - Nettoyage des vitres
                        <br> - Nettoyage des façades
                        <br> - Nettoyage fin de chantier
                        <br> - Nettoyage fin travaux ou occasionnels
                        <br> - Sortie des conteneurs (poubelles)
                        <br> - Nettoyage des cantonnements (bungalows)
                        <br> - Débarras
                        <br> - Traitement des sols.</p>

                </div>
            </div>
            <div class="flex flex-col mb-10 lg:items-start items-center">
                <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                        <circle cx="6" cy="6" r="3"></circle>
                        <circle cx="6" cy="18" r="3"></circle>
                        <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                    </svg>
                </div>
                <div class="flex-grow">
                    <h2 class="text-gray-900 text-lg title-font font-medium mb-3">{{ __('Sécurité') }}</h2>
                    <p class="leading-relaxed text-base">La sécurité d'une entité (objet, personne, entité politique, juridique, intellectuelle, écologique..., informatique) s'envisage individuellement ou collectivement, soit comme objectif (objectif de sécurité), en tant que droit (droit à la sécurité), en tant que valeur (la sécurité est la première des libertés), en tant qu'état de ce qui est sécurisé, en tant que fonction ou d'activité qui vise à sécuriser cette entité ; face à des risques et/ou à des menaces (ces deux notions n'étant pas réductibles l'une à l'autre).</p>

                </div>
            </div>
            <div class="flex flex-col mb-10 lg:items-start items-center">
                <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                        <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                </div>
                <div class="flex-grow">
                    <h2 class="text-gray-900 text-lg title-font font-medium mb-3">{{ __('Gardiennage') }}</h2>
                    <p class="leading-relaxed text-base">Le gardiennage consiste en un service de surveillance humaine (par opposition à un système de surveillance électronique) assuré par des agents de sécurité. Ces derniers ont principalement pour mission de protéger des locaux, des personnes, et des biens. Il existe différents types d’agents de sécurité ayant chacun leurs spécificités : Agent de Prévention et Sécurité (APS), agent évènementiel, agent incendie, rondier intervenant, agent cynophile (ou maître-chien).</p>

                </div>
            </div>
        </div>
    </div>
</section>
</body>
<footer>
    <div class="container px-5 py-24 mx-auto flex sm:flex-nowrap flex-wrap">
        <div class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
            <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3297.395334220051!2d-6.583333385133388!3d34.263969780548884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda759e0f570e299%3A0xdffd966dc4748afe!2sRue%20du%20Port%2C%20K%C3%A9nitra!5e0!3m2!1sfr!2sma!4v1628728737973!5m2!1sfr!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" width="600" height="450" style="filter: grayscale(1) contrast(1.2) opacity(0.4);" allowfullscreen="" loading="lazy"></iframe>
            <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
                <div class="lg:w-1/2 px-6">
                    <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">ADDRESS</h2>
                    <p class="mt-1">Kenitra Rue De Port 14000</p>
                </div>
                <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
                    <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">EMAIL</h2>
                    <a class="text-indigo-500 leading-relaxed">etoilegard@gmail.com</a>
                    <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">PHONE</h2>
                    <p class="leading-relaxed">+2126-61507549</p>
                </div>
            </div>
        </div>

            <div class="lg:w-1/3 md:w-1/2 bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
                <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Contacter Nous </h2>
                <p class="leading-relaxed mb-5 text-gray-600">Nos services sont pour vous 24/7.</p>
                <form method="POST" action="{{ route('contact.send') }}" enctype="multipart/form-data">
                    @csrf
                @if(Session::has('contact_sent'))
                    <div class="alert alert-success"  role="alert">
                        {{Session::get('contact_sent')}}
                    </div>
                @endif
                <div class="relative mb-4">
                    <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                    <input type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative mb-4">
                    <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                    <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative mb-4">
                    <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                    <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                </div>
                <button class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-900 rounded text-lg">Send</button>
                </form>
            </div>

    </div>
</footer>
</html>

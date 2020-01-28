<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/styles.css">
        <title>{{config('app.name')}}</title>

    </head>
    <body>

        <!-- Header with logo -->
        <header>
            <div id="page-title-container">
                <section id="title-border-container">
                    <h1 id="title">Lancer</h1>
                </section>
            </div>
        </header>

        <main>
            <h2>What is Lancer?</h2>
                </br>
            <p>Lancer is a completely free service for web developers and designers to connect with those looking for their services.</p>
                </br>
            <h2>Why Lancer?</h2>
                </br>
            <p>It was designed to be simple.</p>
            <p>Need Work?</p>
            <p>Lancer</p>
                </br>
            <p>Need Work Done?</p>
            <p>Lancer</p>
                </br>
            <p>...Did we mention that it's free?</p>
                </br>
            <a class="welcome-page-button" href="{{route('register')}}">Developers</a>
            <a class="welcome-page-button" href="{{route('employers.register')}}">Employers</a>
        </main>


    </body>
</html>

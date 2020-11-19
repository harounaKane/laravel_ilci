<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title> @yield('title', 'titre default') - Blog </title>
</head>
<body>

    <header class="px-5 bg-success container-fluid">
        <nav class="navbar navbar-light">
            <a class="text-dark" href="{{ url('/') }}">Home</a>
            <a class="text-dark" href="{{ url('hello') }}">Hello</a>
            <a class="text-dark" href="{{ url('batiment/B/etage/10') }}">Bâtiment</a>
        </nav>
    </header>
    <main class="container-fluid">

        <section class="row">
            <article class="col-12 col-md-8">
                @yield('content')
            </article>
            <aside class="col-12 col-md-4">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Aperiam assumenda et harum impedit iure libero, neque nesciunt nulla obcaecati odit
                pariatur ratione, repellendus sint suscipit totam ut voluptatem! Accusantium aliquid
                animi at consequuntur cupiditate mollitia officia. Libero officia quo rem veniam voluptates.
                Aliquam, ducimus facere mollitia nisi optio sed velit.
            </aside>
        </section>

    </main>
    <footer class="bg-success mt-5 container-fluid">
        &copy; - {{ date('d/m/Y') }} - ILCI
    </footer>


</body>
</html>

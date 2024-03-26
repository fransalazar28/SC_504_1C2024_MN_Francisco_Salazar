<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
    <style>
        body {
            background-color: black;
            color: white;
            font-family: Arial, sans-serif;
        }
        h1 {
            font-size: 3em;
            text-align: center;
        }
        h2 {
            font-size: 2em;
            text-align: center;
        }
        nav {
            text-align: center;
            margin-bottom: 20px;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
        }
        nav ul li {
            display: inline;
            margin-right: 20px;
        }
        nav ul li a {
            color: white;
            text-decoration: none;
        }
        nav ul li a:hover {
            color: gray;
        }
        footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: grey;
            color: white;
            text-align: center;
        }
        /* Estilos para pantallas de tamaño pequeño (menos de 600px) */
        @media only screen and (max-width: 600px) {
            h1 {
                font-size: 2em;
            }
            h2 {
                font-size: 1.5em;
            }
        }
        /* Ocultar todas las secciones por defecto */
        .section {
            display: none;
        }
        /* Mostrar la sección activa */
        .active {
            display: block;
        }
    </style>
</head>
<body>
    <?php include 'menu.php'; ?>
    <h1>PELIS YTER</h1>
    <div id="watchlist" class="section active">
        <h2>Watchlist</h2>
        <!-- Contenido de Watchlist -->
    </div>
    <div id="top-peliculas" class="section">
        <h2>Top Películas</h2>
        <!-- Contenido de Top Películas -->
    </div>
    <div id="estrenos" class="section">
        <h2>Películas de Estreno</h2>
        <!-- Contenido de Películas de Estreno -->
    </div>
    <div id="reviews" class="section">
        <h2>Reviews</h2>
        <!-- Contenido de Reviews -->
    </div>
    <footer>
        <p>Información sobre la página...</p>
    </footer>

    <script>
        function showSection(sectionId) {
            // Ocultar todas las secciones
            var sections = document.getElementsByClassName('section');
            for (var i = 0; i < sections.length; i++) {
                sections[i].classList.remove('active');
            }
            // Mostrar la sección seleccionada
            var sectionToShow = document.getElementById(sectionId);
            sectionToShow.classList.add('active');
        }
    </script>
</body>
</html>

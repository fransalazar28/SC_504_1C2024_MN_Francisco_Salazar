<nav>
    <ul>
        <li><a href="index.php" onclick="showSection('watchlist')">Watchlist</a></li>
        <li><a href="top_peliculas.php" onclick="showSection('top-peliculas')">Top Películas</a></li>
        <li><a href="estrenos.php" onclick="showSection('estrenos')">Estrenos</a></li>
        <li><a href="reviews.php" onclick="showSection('reviews')">Reviews</a></li>
    </ul>
    <div id="indicator"></div> <!-- Cuadro de indicador -->
</nav>
<style>
    /* Estilos para el indicador */
    #indicator {
        width: 100px;
        height: 5px;
        background-color: green;
        position: absolute;
        bottom: 0;
        transition: left 0.3s ease-in-out;
    }
</style>




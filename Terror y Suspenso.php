<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>TERROR Y SUSPENSO</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      background: #111;
      color: #fff;
    }

    header {
      background-color: #222;
      padding: 1rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
    }

    .logo {
      font-size: 1.5rem;
      font-weight: bold;
    }

    nav {
      display: flex;
      gap: 1rem;
    }

    nav a {
      color: white;
      text-decoration: none;
    }
    nav a:hover {
      border: solid 2px rgba(255, 136, 0, 0.76);
      border-radius: 50px;
    }
    a:focus img {
      border: solid 4px rgb(65, 2, 2);
      border-radius: 20px;
    }
    img:hover {
      border: solid 4px rgb(228, 0, 0);
      border-radius: 20px;
    }

    .menu-toggle {
      display: none;
      font-size: 1.5rem;
      cursor: pointer;
    }

    .search-container {
      padding: 1rem;
      text-align: center;
    }

    .search-container input {
      width: 80%;
      padding: 0.5rem;
      font-size: 1rem;
      border-radius: 20px;
    }
    .search-container input:hover {
      border: solid 4px rgb(228, 0, 0);
      border-radius: 20px;
    }

    .movies {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
      gap: 1rem;
      padding: 1rem;
    }

    .movie {
      background: #222;
      padding: 0.5rem;
      border-radius: 8px;
      text-align: center;
    }

    .movie img {
      width: 100%;
      border-radius: 4px;
    }

    @media (max-width: 768px) {
      nav {
        display: none;
        flex-direction: column;
        width: 100%;
      }

      nav.active {
        display: flex;
      }

      .menu-toggle {
        display: block;
      }
    }
  </style>
</head>
<body>

<header>
  <div class="logo">🎬 TERROR Y SUSPENSO</div>
  <div class="menu-toggle" onclick="toggleMenu()">☰</div>
  <nav id="nav-menu">
    <a href="Inicio.php">Inicio</a>
    <a href="Peliculas.php">Películas</a>
    <a href="Infantil.html">Infantil</a>
    <a href="Terror y Suspenso.php">Terror y Suspenso</a>
    <a href="Documentales.php">Documentales</a>
    <a href="Religion.php">Religion</a>
    <a href="Accion y Ciencia Ficcion.php">Accion y Ciencia Ficcion</a>
    <a href="Series.php">Series</a>
    <a class="logout" href="logout.php">Cerrar Sesión</a>
  </nav>
</header>

<div class="search-container">
  <input type="text" id="searchInput" placeholder="Buscar película...">
</div>

<section class="movies" id="movieList">
  <div class="movie">
    <a href="1.html"><img src="img/La noche del demonio.jpg" alt="La noche del demonio"></a>
    <h3>La noche del demonio</h3>
  </div>
  <div class="movie">
    <img src="img/2.jpg" alt="Avatar">
    <h3>Avatar</h3>
  </div>
  <div class="movie">
    <img src="https://via.placeholder.com/200x300?text=Titanic" alt="Titanic">
    <h3>Titanic</h3>
  </div>
  <div class="movie">
    <img src="https://via.placeholder.com/200x300?text=Joker" alt="Joker">
    <h3>Joker</h3>
  </div>
  <div class="movie">
    <img src="https://via.placeholder.com/200x300?text=Avengers" alt="Avengers">
    <h3>Avengers</h3>
  </div>
</section>

<script>
  function toggleMenu() {
    const nav = document.getElementById("nav-menu");
    nav.classList.toggle("active");
  }

  const searchInput = document.getElementById("searchInput");
  const movieList = document.getElementById("movieList");

  searchInput.addEventListener("keyup", () => {
    const filter = searchInput.value.toLowerCase();
    const movies = movieList.getElementsByClassName("movie");

    for (let i = 0; i < movies.length; i++) {
      const title = movies[i].getElementsByTagName("h3")[0].textContent;
      movies[i].style.display = title.toLowerCase().includes(filter) ? "" : "none";
    }
  });
</script>

</body>
</html>

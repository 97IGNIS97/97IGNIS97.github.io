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
  <title>Películas Online</title>
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
    nav a:hover {
      border: solid 2px rgba(255, 136, 0, 0.76);
      border-radius: 50px;
    }

    nav a {
      color: white;
      text-decoration: none;
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
    .search-container input:hover {
      border: solid 4px rgb(228, 0, 0);
      border-radius: 20px;
    }

    .search-container input {
      width: 80%;
      padding: 0.5rem;
      font-size: 1rem;
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
  <div class="logo">🎬 Mis Películas</div>
  <div class="menu-toggle" onclick="toggleMenu()">☰</div>
  <nav id="nav-menu">
    <a href="Inicio.php">Inicio</a>
    <a href="Peliculas.php">Películas</a>
    <a href="Infantil.php">Infantil</a>
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
    <a href="2.html"><img src="img/X-Men orígenes- Wolverine.jpg" alt="X-Men orígenes- Wolverine"></a>
    <h3>X-Men orígenes- Wolverine</h3>
  </div>
  <div class="movie">
    <a href="3.html"><img src="img/Wolverine- Inmortal.jpg" alt="Wolverine- Inmortal"></a>
    <h3>Wolverine- Inmortal</h3>
  </div>
  <div class="movie">
    <a href="4.html"><img src="img/Valeria y la ciudad.webp" alt="Valeria y la ciudad"></a>
    <h3>Valeria y la ciudad</h3>
  </div>
  <div class="movie">
    <a href="5.html"><img src="img/Una Tormenta Perfecta.webp" alt="Una Tormenta Perfecta"></a>
    <h3>Una Tormenta Perfecta</h3>
  </div>
  <div class="movie">
    <a href="6.html"><img src="img/Thor Un mundo oscuro.webp" alt="Thor Un mundo oscuro"></a>
    <h3>Thor Un mundo oscuro</h3>
  </div>
  <div class="movie">
    <a href="7.html"><img src="img/Thor Love And Thunder.webp" alt="Thor Love And Thunder"></a>
    <h3>Thor Love And Thunder</h3>
  </div>
  <div class="movie">
    <a href="8.html"><img src="img/THOR.webp" alt="THOR"></a>
    <h3>THOR</h3>
  </div>
  <div class="movie">
    <a href="9.html"><img src="img/Thor 3 RAGNAROK.webp" alt="Thor 3 RAGNAROK"></a>
    <h3>Thor 3 RAGNAROK</h3>
  </div>
  <div class="movie">
    <a href="10.html"><img src="img/Super Mario Bros 2023.webp" alt="Super Mario Bros"></a>
    <h3>Super Mario Bros</h3>
  </div>
  <div class="movie">
    <a href="11.html"><img src="img/Squealer.webp" alt="Squealer"></a>
    <h3>Squealer</h3>
  </div>
  <div class="movie">
    <a href="12.html"><img src="img/Spider-Man- lejos de casa.webp" alt="Spider-Man- lejos de casa"></a>
    <h3>Spider-Man- lejos de casa</h3>
  </div>
  <div class="movie">
    <a href="13.html"><img src="img/Spider-Man- A Traves Del Spider-Verso.webp" alt="Spider-Man- A Traves Del Spider-Verso"></a>
    <h3>Spider-Man- A Traves Del Spider-Verso</h3>
  </div>
  <div class="movie">
    <a href="14.html"><img src="img/Spider-Man Sin Camino A Casa.webp" alt="Spider-Man Sin Camino A Casa"></a>
    <h3>Spider-Man Sin Camino A Casa</h3>
  </div>
  <div class="movie">
    <a href="15.html"><img src="img/Spider Man un nuevo universo.webp" alt="Spider Man un nuevo universo"></a>
    <h3>Spider Man un nuevo universo</h3>
  </div>
  <div class="movie">
    <a href="16.html"><img src="img/Son como niños.webp" alt="Son como niños"></a>
    <h3>Son como niños</h3>
  </div>
  <div class="movie">
    <a href="17.html"><img src="img/Son como niños 2.webp" alt="Son como niños 2"></a>
    <h3>Son como niños 2</h3>
  </div>
  <div class="movie">
    <a href="18.html"><img src="img/SHAZAM.webp" alt="SHAZAM"></a>
    <h3>SHAZAM</h3>
  </div>
  <div class="movie">
    <a href="19.html"><img src="img/SAHZAM 2.webp" alt="SAHZAM 2"></a>
    <h3>SAHZAM 2</h3>
  </div>
  <div class="movie">
    <a href=".html"><img src="img/.webp" alt=""></a>
    <h3></h3>
  </div>
  <div class="movie">
    <a href=".html"><img src="img/.webp" alt=""></a>
    <h3></h3>
  </div>
  <div class="movie">
    <a href=".html"><img src="img/.webp" alt=""></a>
    <h3></h3>
  </div>
  <div class="movie">
    <a href=".html"><img src="img/.webp" alt=""></a>
    <h3></h3>
  </div>
  <div class="movie">
    <a href=".html"><img src="img/.webp" alt=""></a>
    <h3></h3>
  </div>
  <div class="movie">
    <a href=".html"><img src="img/.webp" alt=""></a>
    <h3></h3>
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

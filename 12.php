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
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Película Online</title>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      background-color: #000;
      color: #fff;
      font-family: Arial, sans-serif;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    header {
      background: #111;
      width: 100%;
      padding: 1rem;
      text-align: center;
      font-size: 1.5rem;
      font-weight: bold;
    }

    .video-container {
      position: relative;
      width: 100%;
      max-width: 1200px;
      padding-top: 56.25%; /* 16:9 Aspect Ratio */
      margin: 2rem auto;
    }

    .video-container iframe,
    .video-container video {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border: none;
      border-radius: 12px;
    }

    .controls {
      margin-top: 1rem;
      text-align: center;
    }

    .controls button {
      background-color: #ff4444;
      border: none;
      padding: 0.6rem 1rem;
      color: white;
      font-size: 1rem;
      border-radius: 8px;
      cursor: pointer;
      margin: 0 0.5rem;
      transition: background 0.3s;
    }

    .controls button:hover {
      background-color: #cc0000;
    }

    footer {
      margin-top: 2rem;
      font-size: 0.9rem;
      color: #aaa;
      padding-bottom: 2rem;
    }
  </style>
</head>
<body>

  <header>🎬 Reproductor de Películas</header>

  <div class="video-container">
    <!-- Puedes reemplazar este <video> con un <iframe> si deseas usar YouTube o Google Drive -->
    <iframe id="movie" src="https://drive.google.com/file/d/10SRCaLSMAIFwC3uCuNq3o3eZX4SIjUh_/preview">

    </iframe>

    
  </div>

  <div class="controls">
    <a href="Peliculas.html"><button><= Regresar</button></a>
    <button onclick="toggleFullScreen()">⛶ Pantalla Completa</button>
  </div>

  <footer>
    Películas Online © 2025 | Todos los derechos reservados.
  </footer>

  <script>
    const video = document.getElementById('movie');

    function playMovie() {
      video.play();
    }

    function pauseMovie() {
      video.pause();
    }

    function toggleFullScreen() {
      if (!document.fullscreenElement) {
        video.requestFullscreen().catch(err => {
          alert(`Error al entrar en pantalla completa: ${err.message}`);
        });
      } else {
        document.exitFullscreen();
      }
    }
  </script>

</body>
</html>

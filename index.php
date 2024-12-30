<?php
include "koneksi.php"; 
?>
<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Syahratu Daily</title>
    <link rel="icon" href="img/logo.png"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #000000;
            color: #ffffff; 
        }
    </style>
</head>

<body>
    
    <h1 id="page-title" class="text-center">Syahratu Daily</h1>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">Ratu Daily</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-light">
                    <li class="nav-item">
                        <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#article">Article</a></li>
                        <li class="nav-item"><a class="nav-link" href="#gallery">Gallery</a></li>
                        <li class="nav-item"><a class="nav-link" href="#schedule">Schedule</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About Me</a></li>
                        <li class="nav-item"><a class="nav-link" href="login.php" target="_blank">Login</a></li>
                        <li class="nav-item"></li>
            <li class="nav-item bg-dark me-1 rounded">
              <button id="dark-mode" type="button" class="btn btn-dark"><i class="bi bi-moon-stars-fill text-light"></i></button>
            </li>

            <li class="nav-item bg-danger rounded">
              <button id="light-mode" type="button" class="btn btn-danger"><i class="bi bi-sun-fill text-light"></i></button>
            </li>
          </ul>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="hero" class="text-center p-5 text-sm-start">
        <div class="container">
            <div class="d-sm-flex flex-sm-row-reverse align-items-center">
                <div>
                    <h1 id="hero-title" class="fw-bold display-4">Create Memories Save Memories Everyday</h1>
                    <h4 class="lead display-6">Mencatat Kegiatan sehari hari yang ada tanpa terkecuali</h4>
                    <h6>
                        <span id="tanggal"></span>
                        <span id="jam"></span>
                    </h6>
                </div>
            </div>
        </div>
    </section>
<!-- article begin -->
<section id="article" class="text-center p-5">
  <div class="container">
    <h1 class="fw-bold display-4 pb-3">article</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
      <?php
      $sql = "SELECT * FROM article ORDER BY tanggal DESC";
      $hasil = $conn->query($sql); 

      while($row = $hasil->fetch_assoc()){
      ?>
        <div class="col">
          <div class="card h-100">
            <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title"><?= $row["judul"]?></h5>
              <p class="card-text">
                <?= $row["isi"]?>
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">
                <?= $row["tanggal"]?>
              </small>
            </div>
          </div>
        </div>
        <?php
      }
      ?> 
    </div>
  </div>
</section>
<!-- article end -->

    <!-- Gallery Section -->
    <section id="gallery" class="text-center p-5">
        <div class="container">
            <h1 class="fw-bold display-4 pb-3">Gallery</h1>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <img src="c:\Users\ACER\Pictures\images (1).jpeg" class="img-fluid" alt="Gallery Image 1">
                </div>
                <div class="col-md-4 mb-4">
                    <img src="c:\Users\ACER\Pictures\lee-dohyun.jpg" class="img-fluid" alt="Gallery Image 2">
                </div>
                <div class="col-md-4 mb-4">
                    <img src="c:\Users\ACER\Pictures\ldh.jpeg" class="img-fluid" alt="Gallery Image 3">
                </div>
                <div class="col-md-4 mb-4">
                    <img src="c:\Users\ACER\Pictures\jaehyun4.jpg" class="img-fluid" alt="Gallery Image 4">
                </div>
            </div>
        </div>
    </section>

    <!-- Schedule Section -->
<section id="schedule" class="text-center p-5">
    <div class="container">
        <h1 class="fw-bold display-4 pb-3">Schedule</h1>
        <div class="row">
            <!-- Senin -->
            <div class="col-md-4 mb-4">
                <div class="card bg-dark text-white">
                    <div class="card-header">
                        <h3>Senin</h3>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item bg-dark text-white">08:00 - 10:00 - Matematika</li>
                        <li class="list-group-item bg-dark text-white">10:00 - 12:00 - Fisika</li>
                    </ul>
                </div>
            </div>
            <!-- Selasa -->
            <div class="col-md-4 mb-4">
                <div class="card bg-dark text-white">
                    <div class="card-header">
                        <h3>Selasa</h3>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item bg-dark text-white">08:00 - 10:00 - Kimia</li>
                        <li class="list-group-item bg-dark text-white">13:00 - 15:00 - Biologi</li>
                    </ul>
                </div>
            </div>
            <!-- Rabu -->
            <div class="col-md-4 mb-4">
                <div class="card bg-dark text-white">
                    <div class="card-header">
                        <h3>Rabu</h3>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item bg-dark text-white">09:00 - 11:00 - Bahasa Inggris</li>
                        <li class="list-group-item bg-dark text-white">14:00 - 16:00 - Sejarah</li>
                    </ul>
                </div>
            </div>
            <!-- Kamis -->
            <div class="col-md-4 mb-4">
                <div class="card bg-dark text-white">
                    <div class="card-header">
                        <h3>Kamis</h3>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item bg-dark text-white">08:00 - 10:00 - Komputer</li>
                        <li class="list-group-item bg-dark text-white">10:00 - 12:00 - Sosiologi</li>
                    </ul>
                </div>
            </div>
            <!-- Jumat -->
            <div class="col-md-4 mb-4">
                <div class="card bg-dark text-white">
                    <div class="card-header">
                        <h3>Jumat</h3>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item bg-dark text-white">08:00 - 10:00 - Ekonomi</li>
                        <li class="list-group-item bg-dark text-white">13:00 - 15:00 - Geografi</li>
                    </ul>
                </div>
            </div>
            <!-- Sabtu -->
            <div class="col-md-4 mb-4">
                <div class="card bg-dark text-white">
                    <div class="card-header">
                        <h3>Sabtu</h3>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item bg-dark text-white">07:00 - 09:00 - PJOK</li>
                        <li class="list-group-item bg-dark text-white">10:00 - 12:00 - Prakarya</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Section About Me -->
<section id="about" class="text-center p-5">
    <div class="container">
        <h1 class="fw-bold display-4 pb-3">About Me</h1>
        <div class="row">

        </div>
    </div>
</section>
  <style>
    .wrapper {
      background-color: navy;
    }
    .about {
      background-color: navy;
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 50px;
    }
    .img img {
      border-radius: 50%;
      height: 300px;
      width: 300px;
    }
    .about-text {
      line-height: 15px;
    }
    @media (max-width: 768px) {
      .about {
        display: grid;
        grid-template-columns: 1fr;
      }
      .about-text a {
      text-decoration: none;
      color: black;
    }
}

  </style>
  <body>
    <div class="wrapper">
      <div class="about">
        <div class="img">
          <img src="data:image/jpeg;base64,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" alt="" />
        </div>
        <div class="about-text">
          <span>A11.2023.14934</span>
          <h1>Syahratu Andhara Satriani</h1>
          <p>Prodi Teknik Informatika</p>
          <a href="https://dinus.ac.id/"><h4>Universitas Dian Nuswantoro</h4></a></h4>
          
          
        </div>
      </div>
    </div>
  </body>
</html>
</section>
    <!-- Footer -->
    <footer class="text-center p-5">
        <div>
            <a href="https://www.instagram.com/ratu.andharaa"><i class="bi bi-instagram h2 p-2 text-light"></i></a>
            <a href="https://x.com/ldh_official"><i class="bi bi-twitter-x h2 p-2 text-light"></i></a>
            <a href="https://wa.me/6281806743800"><i class="bi bi-whatsapp h2 p-2 text-light"></i></a>
        </div>
        <div>Syahratu Andhara S &copy; 2024</div>
    </footer>

    <!-- JavaScript Custom Styles -->
    <script>
        //update date and time
        function updateDateTime() {
            const now = new Date();
            const optionsDate = { year: 'numeric', month: 'long', day: 'numeric' };
            const optionsTime = { hour: '2-digit', minute: '2-digit', second: '2-digit', hour12: true };
            document.getElementById("tanggal").innerText = now.toLocaleDateString('id-ID', optionsDate);
            document.getElementById("jam").innerText = now.toLocaleTimeString('id-ID', optionsTime);
        }

        // Apply colors on load
        window.onload = function () {
            updateDateTime(); // Update date and time on page load
            setInterval(updateDateTime, 1000); // Update every second
            document.getElementById("hero").style.backgroundColor = "#1a1a1a"; // Darker background for the hero section
            document.getElementById("page-title").style.color = "#ffffff"; // White for title
            document.getElementById("hero-title").style.color = "#ffffff"; // White for hero title
            document.getElementById("hero-title").style.transition = "all 0.5s ease-in-out";
            document.getElementById("hero-title").style.transform = "scale(1.05)";
            document.getElementById("page-title").style.textShadow = "2px 2px 5px rgba(0,0,0,0.5)";
        };
    </script>
    <!--dark mode-->
    <script>
        // Dark Mode
        document.getElementById("dark-mode").onclick = function () {
            document.body.classList.add("bg-dark", "text-light");
    
            document.getElementById("hero").classList.remove("bg-danger-subtle");
            document.getElementById("hero").classList.add("bg-secondary", "text-light");
    
            document.getElementById("article").classList.add("text-light");
    
            document.getElementById("gallery").classList.remove("bg-danger-subtle");
            document.getElementById("gallery").classList.add("bg-secondary", "text-light");
    
            const cards = document.querySelectorAll(".card");
            cards.forEach(card => {
                card.classList.add("bg-secondary");
            });
    
            document.querySelector("footer").classList.add("text-light");
    
            const icons = document.querySelectorAll("footer a i");
            icons.forEach(icon => {
                icon.classList.remove("text-dark");
                icon.classList.add("text-light");
            });
        };
    
        // Light Mode 
        document.getElementById("light-mode").onclick = function () {
            document.body.classList.remove("bg-dark", "text-light");
    
            document.getElementById("hero").classList.add("bg-danger-subtle");
            document.getElementById("hero").classList.remove("bg-secondary", "text-light");
    
            document.getElementById("article").classList.remove("text-light");
    
            document.getElementById("gallery").classList.add("bg-danger-subtle");
            document.getElementById("gallery").classList.remove("bg-secondary", "text-light");
    
            const cards = document.querySelectorAll(".card");
            cards.forEach(card => {
                card.classList.remove("bg-secondary");
            });
    
            document.querySelector("footer").classList.remove("text-light");
    
            const icons = document.querySelectorAll("footer a i");
            icons.forEach(icon => {
                icon.classList.add("text-dark");
                icon.classList.remove("text-light");
            });
        };
    </script>
    
</body>

</html>
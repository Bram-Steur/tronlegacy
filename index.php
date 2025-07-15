<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Movie Page:  TRON LEGACY</title>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <?php include 'includes/header.php'; ?>

  <!-- Hero Slider -->
  <section class="hero">
    <div class="slider">
      <div class="slides fade">
        <img src="images/tron6.jpg" alt="Tron Still 6">
      </div>
      <div class="slides fade">
        <img src="images/tron1.jpg" alt="Tron Still 1">
      </div>
      <div class="slides fade">
        <img src="images/tron2.jpg" alt="Tron Still 2">
      </div>
      <div class="slides fade">
        <img src="images/tron3.jpg" alt="Tron Still 3">
      </div>
      <div class="slides fade">
        <img src="images/tron4.jpg" alt="Tron Still 4">
      </div>
      <div class="slides fade">
        <img src="images/tron5.jpg" alt="Tron Still 5">
      </div>
      <div class="tagline">
        <h1>“The Game Has Changed”</h1>
      </div>
    </div>
  </section>

  <!-- Overview Section -->
  <section class="overview">
    <img class="poster" src="images/tron-poster.jpg" alt="Tron: Legacy Poster">
    <div class="synopsis">
      <h2>Official Synopsis</h2>
      <p>
        Sam Flynn, the tech-savvy 27-year-old son of Kevin Flynn, investigates his father's disappearance
        and is pulled into the digital world of Tron. Reunited with his father and joined by the fearless
        warrior Quorra, he journeys through a visually stunning cyber universe ruled by the ruthless program CLU.
      </p>
      <nav class="nav-links">
        <a href="story.php">Click here for more</a>
      </nav>
    </div>
  </section>

  <!-- Trailer Section -->
  <section class="trailer">
    <h2>Watch the Official Trailer</h2>
    <div class="video-container">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/m9CTGwEZiPk?si=lL0TYlToCJAFxeTK" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
  </section>

  <?php include 'includes/footer.php'; ?>

  <script src="script.js"></script>
</body>
</html>

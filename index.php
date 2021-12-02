<?php
// "importo" subito l'array di dati
require_once __DIR__ . "/data/data.php";
?>

<!DOCTYPE html>
<html lang="en">

<?php
// "importo" il tag <head> della pagina (facilmente replicabile su altre pg.) pb-card
require_once __DIR__ . "/components/head.php"
?>

<body>

  <header class="bg-card container-fluid">
    <img src="assets/spotify-logo.png" alt="logo">
  </header>

  <main class="bg-main py-5">
    <div class="container">
      <div class="row row-cols-5 g-4">
        <?php
        foreach ($cdList as $cd) {

          $poster = $cd["poster"];
          $title = $cd["title"];
          $author = $cd["author"];
          $year = $cd["year"];

          echo "<div class='col'>
                  <div class='my-card bg-card card border-0 p-3 rounded-0'>
                    <img src='$poster' class='card-img-top rounded-0' alt='$title'/>
                    <div class='card-body text-center'>
                      <h5 class='text-white m-0 pb-3'>$title</h5>
                      <h6 class='text-secondary m-0'>$author</h6>
                      <p class='text-secondary m-0'>$year</p>
                    </div>
                  </div>
                </div>";
        }
        ?>
      </div>
    </div>
  </main>
</body>

</html>
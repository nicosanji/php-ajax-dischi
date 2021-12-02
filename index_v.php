<!DOCTYPE html>
<html lang="en">

<?php
require_once __DIR__ . "/components/head.php"
?>

<body>

  <header class="bg-card container-fluid">
    <img src="assets/spotify-logo.png" alt="logo">
  </header>

  <main class="bg-main py-5" id="root">
    <div class="container">
      <div class="row row-cols-5 g-4">
        <div class="col" v-for="(element, i) in arrCd" :key="i">
          <div class="my-card bg-card card border-0 p-3 rounded-0">
            <img :src="element.poster" :alt="element.title" class="card-img-top rounded-0">
            <div class="card-body text-center">
              <h5 class='text-white m-0 pb-3'>{{element.title}}</h5>
              <h6 class='text-secondary m-0'>{{element.author}}</h6>
              <p class='text-secondary m-0'>{{element.year}}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <footer>
    <script src="./scripts/script.js"></script>
  </footer>

</body>

</html>
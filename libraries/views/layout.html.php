<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>My Cave - Votre cave sur mesure</title>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link rel="stylesheet" href="assets/style/index.css">
</head>

<body>


  <?php include 'libraries/views/nav.html.php' ?>

  <div id="root"><?= $pageContent ?></div>



  <!-- ici on install le CDN de Vue.js -->
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <!-- on doit borner notre application vue dans lobby.html.php (aller la-bàs) -->

  <!-- ici on copie le cdn de axios -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js" ></script>

  <!-- ici lien vers notre fichier vue.js -->
  <script src="./assets/js/vue.js"></script>
</body>

</html>
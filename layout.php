<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title><?= $title ?></title>
</head>
<body>
   <?php  include "nav.php"    ?>  


   <div class="container py-2">

      <h1><?= $title ?></h1>

      <?= $content ?>

   </div>
   
  
</body>
</html>
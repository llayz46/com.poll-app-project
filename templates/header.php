<?php 
  require_once 'lib/config.php';
  require_once 'lib/pdo.php';

  $mainMenu = [
    'index.php' => 'Accueil',
    'sondages.php' => 'Les sondages'
  ];
?>

<!DOCTYPE html>
<html lang="fr-FR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php 
    if (isset($mainMenu[basename($_SERVER['SCRIPT_NAME'])])) { echo $mainMenu[basename($_SERVER['SCRIPT_NAME'])].HEADER_TITLE; 
    } else if (isset($pageTitle)) { 
      echo $pageTitle.HEADER_TITLE; 
    } else { 
      echo HEADER_TITLE;
    } ?>
  </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="/assets/css/override-bootstrap.css">
</head>
<body>
  
  <div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <div class="col-md-3 mb-2 mb-md-0">
        <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
          <img src="<?=PATH_ASSETS_IMAGES?>logo-pollayz.png" alt="" height="40" >
        </a>
      </div>
      <ul class="nav nav-pills">
        <?php foreach ($mainMenu as $page => $title) { ?>
          <li class="nav-item">
            <a 
              href="<?=$page?>" 
              class="nav-link <?php if (basename($_SERVER['SCRIPT_NAME']) === $page) { echo 'active'; } ?>"><?=$title?>
            </a>
          </li>
        <?php } ?>
      </ul>
      <div class="col-md-3 text-end">
        <?php if(isset($_SESSION['user'])) { ?>
          <a href="logout.php" class="btn btn-primary">Déconnexion</a>
        <?php } else { ?>
          <a href="login.php" class="btn btn-outline-primary me-2">Connexion</a>
        <?php } ?>
      </div>
    </header>

    <main>
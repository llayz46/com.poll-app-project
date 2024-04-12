<?php 
require_once 'lib/required_files.php';

require_once 'lib/poll.php';

$error404 = false;

if (isset($_GET['id'])) {
  $id = (int)$_GET['id'];
  $poll = getPoll($pdo, $id);

  if (!$poll) {
    $error404 = true;
  } else {
    $pageTitle = $poll['title'];
    $pollResults = getPollResults($pdo, $id);
    $totalUsers = getPollTotalUsers($pdo, $id);
  }

} else {
  $error404 = true;
}

require_once 'templates/header.php';

if (!$error404) {
?>

<div class="row align-items-center g-5 py-5">
  <div class="col-lg-6">
    <h1 class="display-5 fw-bold lh-1 mb-3"><?=$poll['title']?></h1>
    <p class="lead"><?=$poll['description']?></p>
  </div>

  <div class="col-10 cold-sm-8 col-lg-6">
    <h2>Résultats</h2>
    <div class="results">
      <?php foreach ($pollResults as $index => $result) { 
        if ($totalUsers) {
          $percentage = round(($result['votes'] / $totalUsers) * 100);
        } else {
          $percentage = 0;
        }        
        ?>
        <h3><?=$result['name']?></h3>
        <div class="progress" role="progressbar" aria-label="<?=$result['name']?>" aria-valuenow="<?=$percentage?>" aria-valuemin="0" aria-valuemax="100">
          <div class="progress-bar progress-bar-striped progress-color-<?=$index?>" style="width: <?=$percentage?>%"><?=$result['name']?> - <?=$percentage?>%</div>
        </div> 
      <?php } ?> 
    </div>
  </div>
</div>
<?php } else { ?>
  <h1>Erreur 404</h1>
  <p>Le sondage demandé n'existe pas.</p>
<?php } ?>

<?php require_once 'templates/footer.php'; ?>
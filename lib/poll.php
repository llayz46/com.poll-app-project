<?php

function getPolls(PDO $pdo) {
  $query = $pdo->prepare('SELECT * FROM poll');
  $query->execute();
  return $query->fetchAll(PDO::FETCH_ASSOC);
}
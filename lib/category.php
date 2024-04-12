<?php 
function getCategories(PDO $pdo): ARRAY {
  $query = $pdo->query('SELECT * FROM category');
  $query->execute();

  return $query->fetchAll(PDO::FETCH_ASSOC);
}
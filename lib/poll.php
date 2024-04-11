<?php

function getPolls(PDO $pdo, INT $limit = null): ARRAY {
  $sql = 'SELECT poll.*, category.name AS category_name FROM poll JOIN category ON category.id = poll.category_id ORDER BY poll.id DESC';

  if ($limit) {
    $sql .= ' LIMIT :limit';
  }

  $query = $pdo->prepare($sql);

  if ($limit) {
    $query-> bindValue(':limit', $limit, PDO::PARAM_INT);
  }

  $query->execute();
  return $query->fetchAll(PDO::FETCH_ASSOC);
}

function getPoll(PDO $pdo, INT $id): ARRAY|BOOL {
  $query = $pdo->prepare('SELECT * FROM poll WHERE id = :id');
  $query->bindValue(':id', $id, PDO::PARAM_INT);
  $query->execute();

  return $query->fetch(PDO::FETCH_ASSOC);
}

function getPollResults(PDO $pdo, INT $id): ARRAY {
  $query = $pdo->prepare('SELECT pi.id, pi.name, COUNT(upi.poll_item_id) AS votes FROM poll_item AS pi
                          LEFT JOIN user_poll_item AS upi ON upi.poll_item_id = pi.id
                          WHERE poll_id = :id
                          GROUP BY pi.id
                          ORDER BY votes DESC;'
  );
  $query->bindValue(':id', $id, PDO::PARAM_INT);
  $query->execute();

  return $query->fetchAll(PDO::FETCH_ASSOC);
}
<?php
$cat = $_GET['cat'] ?? "World";
$articles = [
    ["title" => "Global Summit 2025 Highlights", "desc" => "Leaders unite to solve climate issues.", "cat" => "World"],
    ["title" => "Final Match Thriller", "desc" => "Last-minute goal changes everything.", "cat" => "Sports"],
    ["title" => "New iPhone Released", "desc" => "Apple's bold steps into foldable tech.", "cat" => "Technology"],
    ["title" => "Film Festival Winners", "desc" => "Cinema meets social change.", "cat" => "Entertainment"]
];
$filtered = array_filter($articles, fn($a) => $a["cat"] === $cat);
?>

<!DOCTYPE html>
<html>
<head>
  <title><?php echo $cat; ?> News</title>
  <style>
    body { font-family: Arial; padding: 20px; background: #f9f9f9; }
    h1 { color: #cc0000; }
    .back { margin-bottom: 20px; display: inline-block; color: #cc0000; cursor: pointer; }
    .card { background: #fff; padding: 15px; margin-bottom: 10px; border-radius: 5px; box-shadow: 0 0 5px #ccc; }
  </style>
</head>
<body>

<div class="back" onclick="goBack()">← Back to Home</div>
<h1><?php echo $cat; ?> News</h1>

<?php foreach ($filtered as $index => $article): ?>
  <div class="card" onclick="goToArticle(<?php echo $index; ?>)">
    <h3><?php echo $article["title"]; ?></h3>
    <p><?php echo $article["desc"]; ?></p>
  </div>
<?php endforeach; ?>

<script>
function goBack() {
  window.location.href = 'index.php';
}
function goToArticle(id) {
  window.location.href = 'article.php?id=' + id;
}
</script>

</body>
</html>

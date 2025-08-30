<?php
$featured = "Breaking: New Innovations in AI Reshape the World!";
$categories = ["World", "Sports", "Technology", "Entertainment"];
$articles = [
    ["title" => "Global Summit 2025 Highlights", "desc" => "Leaders unite to solve climate issues.", "cat" => "World"],
    ["title" => "Final Match Thriller", "desc" => "Last-minute goal changes everything.", "cat" => "Sports"],
    ["title" => "New iPhone Released", "desc" => "Apple's bold steps into foldable tech.", "cat" => "Technology"],
    ["title" => "Film Festival Winners", "desc" => "Cinema meets social change.", "cat" => "Entertainment"]
];
?>

<!DOCTYPE html>
<html>
<head>
  <title>NewsHub - Home</title>
  <style>
    body { font-family: Arial; margin: 0; background: #f4f4f4; color: #222; }
    header { background: #cc0000; padding: 20px; color: white; }
    .featured { background: #fff; margin: 20px; padding: 20px; box-shadow: 0 0 10px #ccc; }
    .categories { display: flex; gap: 10px; margin: 20px; }
    .categories button {
      padding: 10px 15px; background: #cc0000; color: #fff; border: none; cursor: pointer;
      border-radius: 4px;
    }
    .articles { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 15px; margin: 20px; }
    .card { background: #fff; padding: 15px; border-radius: 6px; box-shadow: 0 0 8px #ddd; cursor: pointer; transition: 0.3s; }
    .card:hover { transform: scale(1.02); background: #fcfcfc; }
    @media (max-width: 600px) { .categories { flex-direction: column; } }
  </style>
</head>
<body>

<header>
  <h1>📰 NewsHub</h1>
  <p><?php echo $featured; ?></p>
</header>

<div class="categories">
  <?php foreach ($categories as $cat): ?>
    <button onclick="goToCategory('<?php echo $cat; ?>')"><?php echo $cat; ?></button>
  <?php endforeach; ?>
</div>

<div class="articles">
  <?php foreach ($articles as $index => $article): ?>
    <div class="card" onclick="goToArticle(<?php echo $index; ?>)">
      <h3><?php echo $article['title']; ?></h3>
      <p><?php echo $article['desc']; ?></p>
      <small><?php echo $article['cat']; ?></small>
    </div>
  <?php endforeach; ?>
</div>

<script>
function goToCategory(cat) {
  window.location.href = 'category.php?cat=' + encodeURIComponent(cat);
}
function goToArticle(id) {
  window.location.href = 'article.php?id=' + id;
}
</script>

</body>
</html>

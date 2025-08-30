<?php
$id = $_GET['id'] ?? 0;
$articles = [
    ["title" => "Global Summit 2025 Highlights", "desc" => "Leaders unite to solve climate issues.", "content" => "Full article on global summit and policies discussed.", "cat" => "World"],
    ["title" => "Final Match Thriller", "desc" => "Last-minute goal changes everything.", "content" => "Full match summary with highlights and reactions.", "cat" => "Sports"],
    ["title" => "New iPhone Released", "desc" => "Apple's bold steps into foldable tech.", "content" => "Apple unveils iPhone Flip with flexible OLED.", "cat" => "Technology"],
    ["title" => "Film Festival Winners", "desc" => "Cinema meets social change.", "content" => "Winners of the 2025 festival and judges’ choices.", "cat" => "Entertainment"]
];
$article = $articles[$id] ?? null;
?>

<!DOCTYPE html>
<html>
<head>
  <title><?php echo $article['title']; ?></title>
  <style>
    body { font-family: Georgia, serif; padding: 30px; background: #fffdfc; color: #222; }
    .back { margin-bottom: 20px; display: inline-block; color: #cc0000; cursor: pointer; }
    h1 { color: #cc0000; }
    .content { margin-top: 20px; line-height: 1.6; }
  </style>
</head>
<body>

<div class="back" onclick="goBack()">← Back</div>
<h1><?php echo $article['title']; ?></h1>
<small>Category: <?php echo $article['cat']; ?></small>

<div class="content">
  <p><?php echo $article['content']; ?></p>
</div>

<script>
function goBack() {
  window.history.back();
}
</script>

</body>
</html>

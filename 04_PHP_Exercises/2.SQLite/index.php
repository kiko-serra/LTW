<?php
  $db = new PDO('sqlite:news.db');
  $stmt = $db->prepare('SELECT news.*, users.*, COUNT(comments.id) AS comments
                        FROM news JOIN
                            users USING (username) LEFT JOIN
                            comments ON comments.news_id = news.id
                        GROUP BY news.id, users.username
                        ORDER BY published DESC');
  $stmt->execute();
  $articles = $stmt->fetchAll();

  ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="CSS-full/style.css" rel="stylesheet">
        <link href="CSS-full/layout.css" rel="stylesheet">
        <link href="CSS-full/responsive.css" rel="stylesheet">
        <link href="CSS-full/comments.css" rel="stylesheet">
        <link href="CSS-full/forms.css" rel="stylesheet">
        <title>News</title>
    </head>
    <body> 
    <?php
    foreach($articles as $article) { ?>
        <article>
            <header><a href="item.html"><?php echo $article['title'] ?></a></header>
            <p> <?php echo $article['introduction'] ?></p>
            <footer>
                <span> <?php echo $article['username'] ?></span>
                <span> <?php echo $tags = explode('.', $article['tags']); ?></span>
                <span> <?php echo $date = date('F j', $article['published']);?>
            </footer>
        </article>




        echo '<h1>' . $article['title'] . '</h1>';
        echo '<p>' . $article['introduction'] . '</p>';
        echo '<p>' . $date = date('F j', $article['published']);
        echo '<p>' . $tags = explode('.', $article['tags']);
    <?php } ?>
    
</body>
</html>
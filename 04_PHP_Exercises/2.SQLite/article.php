<?php 
    $stmt = $db->prepare('SELECT * FROM news JOIN users USING (username) WHERE id = :id');
    $stmt->bindParam(':id', $_GET['id']);
    $stmt->execute();
    $article = $stmt->fetch();
?>
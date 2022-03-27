<div>
  <h2><a href="article.php?id=<?php echo $id; ?>"><?php echo $title; ?></a></h2>
  <p>
    <img src="img/article_<?php echo $id; ?>.jpg" width="1024" height="518" alt="<?php echo $title; ?>">
  </p>
  <p>
    <?php echo $intro_text; ?>
  </p>
  <p>
    <a href="article.php?id=<?php echo $id; ?>">Читать дальше</a>
  </p>
</div>
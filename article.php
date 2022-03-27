<?php
require_once "start.php";
$article = getArticle($_GET["id"]);
$id = $article["id"];
$title = $article["title"];
$full_text = $article["full_text"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Расписание. Троллейбусный парк</title>
  <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
  <table id="main">
    <?php
    require_once "blocks/top.php";
    ?>

    <tr>
      <!-- Основной контент -->
      <td colspan="2">
        <hr />
        <table cellpadding="0" cellspacing="0" id="content">
          <tr>
            <td>
              <!-- 1-я ячейка -->
              <?php
              require_once "blocks/full_article.php";
              ?>
            </td>

            <td id="banners_240">
              <!-- 2-я ячейка -->
              <?php
              require_once "blocks/banners_240.php";
              ?>
            </td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <hr />
      </td>
    </tr>
    <tr>
      <?php
      require_once "blocks/footer.php";
      ?>
    </tr>
  </table>
</body>

</html>
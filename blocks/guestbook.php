<h2>Добавить отзыв</h2>
<div>
  <p>Здесь вы можете оставить свой отзыв.</p>
  <form name="guestbook" action="" method="post">
    <table>
      <tr>
        <td>Имя: </td>
        <td>
          <input type="text" name="name" />
        </td>
      </tr>
      <tr>
        <td>Комментарий: </td>
        <td>
          <textarea name="comment"></textarea>
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <input type="submit" name="button_guestbook" value="Добавить" />
        </td>
      </tr>
    </table>
  </form>
</div>

<div>
  <h2>Список отзывов:</h2>
  <?php
  if (!empty($_POST["button_guestbook"])) {
    $name = htmlspecialchars($_POST["name"]);
    $comment = htmlspecialchars($_POST["comment"]);
    if ((strlen($name) < 3) || (strlen($comment) < 3)) $success = false;
    else $success = addGuestBookComment($name, $comment);
    if (!$success) {
      $alert = "Ошибка добавления новой записи!";
      include "blocks/alert.php";
    }
  }
  
  $comments = getAllGuestBookComments();
  for ($i = 0; $i < count($comments); $i++) {
    $name = $comments[$i]["name"];
    $comment = $comments[$i]["comment"];
    include "blocks/guestbook_comment.php";
  }
  ?>
</div>
<tr>
  <td colspan="2" id="header">
    <h1>Сайт о троллейбусах</h1>
    <p>
      <img src="img/troll.png" alt="Шапка сайта" height="100px" />
    </p>
  </td>
</tr>
<tr>
  <td colspan="2">
    <hr />
  </td>
</tr>
<tr>

  <td>
    <table id="topmenu">
      <tr>
        <td>
          <p><a href="index.php">Главная</a></p>
        </td>
        <td>
          <p><a href="reg.php">Регистрация</a></p>
        </td>
        <td>
          <p><a href="articles.php">Расписание</a></p>
        </td>
        <td>
          <p><a href="guestbook.php">Отзывы</a></p>
        </td>
      </tr>
    </table>
  </td>
  <td>
    <?php
    if ($_SESSION && checkUser($_SESSION["email"], $_SESSION["password"]))
      require_once "blocks/user_panel.php";
    else
      require_once "blocks/auth_form.php";
    ?>
  </td>
</tr>
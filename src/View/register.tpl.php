<?php
/**
 *  @var array $data - массив входящих переменных
 */
?>
<?php include 'header.php'; ?>
<div style="text-align: center;">
    <h1>Регистрация</h1>
    <?php if (!empty($data)): ?>
        <div style="background-color: #ff7080;padding: 5px;margin: 15px"><?=$data['error'] ?></div>
    <?php endif; ?>
    <form action="/users/register" method="post">
        <label>Nickname <input type="text" name="nickname"  value="<?= $_POST['nickname'] ?? '' ?>"></label>
        <br><br>
        <label>Email <input type="text" name="email"  value="<?= $_POST['email'] ?? '' ?>"></label>
        <br><br>
        <label>Пароль <input type="password" name="password"  value="<?= $_POST['password'] ?? '' ?>"></label>
        <br><br>
        <input type="submit" value="Зарегистрироваться">
    </form>
</div>
<?php include 'footer.php'; ?>

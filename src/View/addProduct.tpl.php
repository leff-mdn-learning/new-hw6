<?php
/**
 * @var array $data - ошибка приложения.
 */
?>

<?php include 'header.php'; ?>

<h2>Hello, patterns.</h2>
<h4>Product!</h4>

<?php foreach ($data as $datas): ?>
    <p>
        <?= 'Название: ', $datas->getTitle(); ?><br>
        <?= 'Цена:', $datas->getPrice(); ?><br>
        <?= 'Категория: ', $datas->getCategory(); ?><br>
        <?= 'Описание: ', $datas->getDescription(); ?><br>
        <?= 'Количество: ', $datas->getQuantity(); ?>
    </p>
<?php endforeach; ?>
<?php include 'footer.php'; ?>

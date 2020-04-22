<?php
    include 'app/search.php';
?>

<?php include 'layouts/header.php' ?>
<h4>Qidiruv natijalari</h4>

<?php if (!isset($key)): ?>
    <div class="alert alert-danger text-center">
        Siz kalit yozmadingiz!
    </div>
<?php elseif (count($items) == 0): ?>
    <div class="alert alert-danger text-center">
        Natija topilmadi!
    </div>
<?php else: ?>
<html>
<head>
    <title>Search</title>
</head>
<body>
    <table class="table">
        <tbody>
            <?php
                for ($i = 0; i < count($items->data); $i++)
            ?>
            <tr>
                <td><?php echo $items[$i]['Short'] ?></td>
                <td><?php echo $items[$i]['Theme'] ?></td>
                <td><?php echo $items[$i]['View'] ?></td>
            </tr>
        </tbody>
    </table>
    <?php
        echo $pagination->createLinks($links);
    ?>
</body>
</html>
<?php endif; ?>
<div class ="clr"> 
</div>
<?php include 'layouts/footer.php' ?>
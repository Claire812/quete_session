
<?php
require 'inc/head.php';
require 'inc/data/products.php';
if (empty($_SESSION["name"])) {
    header("Location: /login.php");
}
?>
<section class="cookies container-fluid">
    <div class="row">
        <p>This is what you have in your cart for now : </p>

            <?php
            foreach ($_SESSION['cart'] as $cookie => $id)
            {
                $name = $catalog[$cookie]['name'];
                echo "$id $name <br>";
            }
            ?>

    </div>
</section>
<?php require 'inc/foot.php'; ?>

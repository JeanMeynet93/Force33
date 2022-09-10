<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/initialMenu.css">
    <title>Menu</title>
</head>

<body>
    <?php
    require 'html/header.html';
    ?>
    <div class="containerInitialMenu">
        <div class="boxMenuOption">
            <div class="boxPartenairesModuleList">
                <a class="partenairesList" href="partenairesList.php">PARTENAIRES LIST</a>
                <a class="modulesList" href="moduleList.php">MODULES LIST</a>
            </div>
            <div class="boxPolicy">
                <a class="policy" href="">POLICY</a>
            </div>
        </div>
    </div>
    <?php
    require 'html/footer.html';
    ?>

</body>

</html>
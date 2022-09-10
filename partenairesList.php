<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/formPartenaires.css">
    <title>Partenaires List</title>
</head>

<body>
    <!-- Debut Header -->
    <?php
    require 'html/header.html';
    ?>
    <!-- Fin Header -->
    <!-- Les form de chaque partenaires est contenue dans un div 
    que a ca suite est contenue dans une autre div qui 
    permet de mettre tous les form au milieu de la page
    -->
    <div class="mainContainer">
        <div class="buttonReturn">
            <a class="lienReturnBack" href="initialMenu.php">RETOUR</a>
        </div>
        <div class="containerListPartenaires">
            <div class="boxListPartenaires">
                <!-- Debut du form 
            le formulaire est divisé en trois parties : 
                haut, milieu et bas, chacune dans une division 
                du positionnement correspondant.
            !-->
                <div class="formPartenaires">
                    <div class="topPartForm">
                        <div class="photoProfilePartenaires"></div>
                        <h5 class="idPartenaires">ID:MARSEILLE_FORCE33</h5>
                    </div>
                    <div class="middlePartForm">
                        <h5 class="titleDescription">DESCRIPTION</h5>
                        <p class="paragraphForm">Lorem ipsum dolor sit amet consectetur adipisicing elit. A, maiores, omnis accusantium saepe suscipit numquam, sit dolorum mollitia dicta atque veritatis est quidem voluptate perspiciatis repellat laboriosam at animi itaque.</p>
                        <button class="buttonActive">ACTIVE</button>
                    </div>
                    <div class="bottomPartForm">
                        <a class="lienStructurePartenaires" href="marseilleStructure.php">LIST PARTENAIRES</a>
                    </div>
                </div>
                <!-- Fin du form !-->
                <!-- Debut du form !-->
                <div class="formPartenaires">
                    <div class="topPartForm">
                        <div class="photoProfilePartenaires"></div>
                        <h5 class="idPartenaires">ID:BORDEAUX_FORCE33</h5>
                    </div>
                    <div class="middlePartForm">
                        <h5 class="titleDescription">DESCRIPTION</h5>
                        <p class="paragraphForm">Lorem ipsum dolor sit amet consectetur adipisicing elit. A, maiores, omnis accusantium saepe suscipit numquam, sit dolorum mollitia dicta atque veritatis est quidem voluptate perspiciatis repellat laboriosam at animi itaque.</p>
                        <button class="buttonActive">ACTIVE</button>
                    </div>
                    <div class="bottomPartForm">
                        <a class="lienStructurePartenaires" href="bordeauxStructure.php">LIST PARTENAIRES</a>
                    </div>
                </div>
                <!-- Fin du form !-->
                <!-- Debut du form !-->
                <div class="formPartenaires">
                    <div class="topPartForm">
                        <div class="photoProfilePartenaires"></div>
                        <h5 class="idPartenaires">ID:BIARRITZ_FORCE33</h5>
                    </div>
                    <div class="middlePartForm">
                        <h5 class="titleDescription">DESCRIPTION</h5>
                        <p class="paragraphForm">Lorem ipsum dolor sit amet consectetur adipisicing elit. A, maiores, omnis accusantium saepe suscipit numquam, sit dolorum mollitia dicta atque veritatis est quidem voluptate perspiciatis repellat laboriosam at animi itaque.</p>
                        <button class="buttonActive">ACTIVE</button>
                    </div>
                    <div class="bottomPartForm">
                        <a class="lienStructurePartenaires" href="biarritzStructure.php">LIST STRUCTURE</a>
                    </div>
                </div>
                <!-- Fin du form !-->
            </div>
        </div>
    </div>
    <!-- Footer !-->
    <?php
    require 'html/footer.html';
    ?>
</body>

</html>
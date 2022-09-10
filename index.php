<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/style_logIn_form.css">
    <title>Connexion</title>
</head>

<body>
    <?php
    require 'html/header.html';
    ?>
    <div class="middleBox">
        <div class="box-content">
            <div class="box-bienvenue">
                <span class="bienvenue">BIENVENUE</span>
            </div>
            <div class="container-form">
                <form action="" method="post" class="form-logIn">
                    <div class="form-username">
                        <label class="label-logIn" for="name">USERNAME</label>
                        <input type="text" name="name" id="username" required>
                    </div>
                    <div class="form-email">
                        <label class="label-logIn" for="email">EMAIL</label>
                        <input type="email" name="email" id="email" required>
                    </div>
                    <div class="form-connexion">
                        <input id="submit-logIn" type="submit" value="CONNEXION">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
    require 'html/footer.html';
    ?>
</body>

</html>
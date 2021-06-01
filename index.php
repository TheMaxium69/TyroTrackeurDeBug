<?php include "logi.php"; ?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>TyroServ BugTrackeur</title>
    <link href="http://tyrolium.fr/Contenu/Image/Tyrolium ServerMC Sword" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="styles.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="http://tyrolium.fr/Contenu/Image/Tyrolium ServerMC Sword 3D" alt="" width="30" height="30" class="d-inline-block align-text-top">
                    TyroServ BugTracker
                </a>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search ID" aria-label="Search">
                    <button class="btn btn-outline-dark" type="submit">Search</button>
                    <button style="margin-left: 10px" class="btn btn-outline-dark">Create</button>
                </form>
            </div>
        </nav>
    </header>
    <main>
        <section id="head">
            <div style="color: white; padding: 60px; background-image: url('http://tyrolium.fr/Contenu/Image/Background9.png'); background-position: center;">
                <H2>Bienvenue dans le trackeur de bug de TyroServ</H2>
            </div>
        </section>

        <section id="list">
            <div class="list-group">
                <?php foreach($leResultatDeMaRequete as $post){ ?>


                    <a href="detail.php?postId=<?php echo $post['id'] ?>" type="button" class="list-group-item list-group-item-action"><p>#<?php echo $post['id'] ?> | <?php echo $post['title'] ?></p><p style="text-align: right"></p></a>


                <?php } ?>
            </div>
        </section>




    </main>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>



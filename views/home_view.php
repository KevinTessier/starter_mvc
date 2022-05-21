<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= ucfirst($page) ?> StarterKit MVC </title>

        <?php include 'includes/head.php' ?>

    </head>

    <body>

        <header class="header">
            <?php include 'layout/header.php' ?>
        </header>

        <main class="main">
            <div class="container">
                <h1 class="title">StarterKit MVC</h1>

                <section class="section">
                    <?php foreach ($allArticles as $index => $article) { ?>
                        <h2> <?php echo $article['title'] ?> </h2>
                        <div> <?php echo $article['firstname'] . ' ' . $article['lastname'] ?> </div>
                    <?php } ?>
                </section>
        
            </div>
        </main>
        
        <footer class="footer">
            <?php include 'layout/footer.php' ?>
        </footer>
    </body>
</html>
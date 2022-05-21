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
            <?php include 'admin/layout/header.php' ?>
        </header>
        
        <sidebar class="sidebar">
            <?php include 'admin/layout/sidebar.php' ?>
        </sidebar>

        <main class="main">
            <div class="container">
                <h1 class="title">Admin</h1>

                <section class="section">

                </section>

            </div>
        </main>

        <footer class="footer">
            <?php include 'admin/layout/footer.php' ?>
        </footer>
    </body>
</html>
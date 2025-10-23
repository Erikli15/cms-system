<!DOCTYPE html>
<html>
    <head>
        <title>Admin Dashboard</title>
        <link rel="stylesheet" href="/css/admin.css">
    </head>
    <body>
        <?php include "../app/views/templates/header.php"; ?>
        <?php include "../app/views/templates/sidebar.php"; ?>

        <main class="main-content">
            <h1>Dashboard</h1>

            <div class="stats-grid">
                <div class="stat-card">
                    <h3>Användare</h3>
                    <p><?php echo $userCount; ?></p>
                </div>
                <div class="stat-card">
                    <h3>Sidor</h3>
                    <p><?php echo $pageCount; ?>></p>
                </div>
                <div class="stat-card">
                    <h3>Produkter</h3>
                    <p><?php echo $productCount; ?></p>
                </div>
            </div>
        </main>

        <?php include "../app/views/templates/footer.php"; ?>
    </body>
</html>
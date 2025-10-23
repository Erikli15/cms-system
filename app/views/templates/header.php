<!DOCTYPE html>
<html lang="se">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo isset($pageTitle) ? $pageTitle : "CMS System"; ?></title>
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/responsive.css">
    </head>
    <body>
        <header class="header">
            <div class="container">
                <div class="logo">
                    <a href="/"><?php echo SITE_NAME; ?></a>
                </div>
                <?php include 'navigation.php'; ?>
            </div>
        </header>
    </body>
</html>
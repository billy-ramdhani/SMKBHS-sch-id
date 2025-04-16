<!-- app/Views/public/layout.php -->
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'SMK BHS' ?></title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/fontawesome.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/templatemo-edu-meeting.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/owl.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/lightbox.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/berita.css') ?>">
</head>

<body>

    <!-- Include Navbar -->
    <?= view('public/partials/navbar') ?>

    <!-- Main Content -->
    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <!-- Include Footer -->
    <?= view('public/partials/footer') ?>

</body>

</html>
<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic HTML Setup -->
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO -->
    <title>ExpenseFlow - Simple Expense Tracker</title>

    <meta
        name="description"
        content="Track your expenses, manage your budget and understand your spending with ExpenseFlow."
    >


    <!-- Bootstrap CSS -->
    <link
        rel="stylesheet"
        href="bootstrap/dist/css/bootstrap.min.css"
    >


    <!-- Bootstrap Icons -->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
>


    <!-- Custom CSS -->
    <link
        rel="stylesheet"
        href="assets/css/style.css"
    >

</head>


<body>


    <!-- Navbar -->
    <?php include 'includes/navbar.php'; ?>


    <!-- Main Content -->
    <main>

        <?php include 'includes/sections/hero.php'; ?>

        <?php include 'includes/sections/trusted.php'; ?>

        <?php include 'includes/sections/features.php'; ?>

        <?php include 'includes/sections/dashboard-preview.php'; ?>

        <?php include 'includes/sections/how-it-works.php'; ?>

        <?php include 'includes/sections/benefits.php'; ?>

        <?php include 'includes/sections/statistics.php'; ?>

        <?php include 'includes/sections/testimonials.php'; ?>

        <?php include 'includes/sections/pricing.php'; ?>

        <?php include 'includes/sections/faq.php'; ?>

        <?php include 'includes/sections/cta.php'; ?>

    </main>


    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>


    <!-- Bootstrap JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>


    <!-- Custom JavaScript -->
    <script src="assets/js/main.js"></script>

</body>

</html>
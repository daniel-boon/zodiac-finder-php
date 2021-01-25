<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300&display=swap" rel="stylesheet">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet" />
    <!-- <link href="css/star.css" rel="stylesheet" /> -->
    <title>Zodiac Finder</title>
</head>
<body>
    
<section class="main-wrapper container shadow-border">
    <h1 style="font-size: 4rem;">Find Your Zodiac Sign</h1>

    <!-- result -->
    <?php include 'result.php';?>

    <!-- input -->
    <div class="input">
        <form method="POST" id="date-form">
            <input type="date" name="date_of_birth" value="yyyy-mm-dd" required>
            <button id="submit-form" class="btn btn-dark btn-find">Find</button>
        </form>
    </div>

</section>

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
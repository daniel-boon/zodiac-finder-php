<div class="result">
    <?php 
            include 'zodiac_api.php';

            if(!empty($_GET['date_of_birth'])){
                $date_of_birth = $_GET['date_of_birth'];
                $zodiac_sign = zodiac_sign($date_of_birth);
                echo "<div class='zodiac-wrapper'>
                        <img class='img-fluid zodiac-img shadow-border' src='img/{$zodiac_sign}.jpg' alt='cannot find an image'>
                        <p class='zodiac-label'>Your sign is <span style='text-transform:uppercase'>$zodiac_sign</span></p>
                    </div>";
            }else{
                echo "<div><h1 style='animation: fadeIn 3s;'>Choose Your Date of Birth</h1></div>";
            }
    ?>
</div>
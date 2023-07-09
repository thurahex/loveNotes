<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loveNotes</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="header">
        <button class="dark-btn post"><a href="admin.php">post</a></button>
        <!-- <button class="dark-btn">
            <div class="btn-circle"></div>
        </button> -->
    </div>
    <!-- <p class="width">

    </p> -->
    <div class="container">
        <?php 
        require('conn.php');
        $sql = "SELECT * FROM `posts`";
        $posts =mysqli_query($conn,$sql);
        
        foreach ($posts as $post){
            
        
        ?>
        <div class="paper-card">
            <p class="text text-center">
                <?php echo$post['text'];?>
            </p>
            <a href="#" class="love">love</a>
        </div>
        <!-- <div class="paper-card">
            <p class="text text-left">
                အချစ်ဆိုတာ အလွန်ဆန်း
            </p>
            <a href="#" class="love">love</a>
        </div>
        <div class="paper-card">
            <p class="text text-left">
                i love you more tha n every thing ok?
            </p>
            <a href="#" class="love">love</a>
        </div> -->
    
    <?php
}
?>
</div>
    

    <script src="js/app.js"></script>
    <script src="js/index.js"></script>
</body>
</html>
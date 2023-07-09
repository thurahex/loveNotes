<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loveNotes</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
    
    require('conn.php');
    
    if(isset($_POST['submit'])){
        echo"thr";
        $text = $_POST['text'];
        echo$text;
        $sql ="INSERT INTO `posts`( `text`) VALUES ('$text')";
        if($text==""){
            
            $link="admin.php";
            header("location: $link");
            echo "please wirte something";
        }
        else{
        $insert =mysqli_query($conn,$sql);
        if($insert){
            echo"inserted";
           
        }
        }
        mysqli_free_result($insert);
        mysqli_close($conn);
    }
    ?>
    <div class="header">
    <button class="dard-btn post"><a href="index.php">home</a></button>
        <!-- <button class="dark-btn">
            <div class="btn-circle"></div>
        </button> -->
    </div>
    <!-- <p class="width">

    </p> -->
    <div class="container">
        
        <form action="admin.php" method="POST"class="form-group">
            <textarea name="text" id="text" cols="30" rows="20" value="write down your feelings" class="text-area"></textarea>
            <button type="submit" class="submit-btn" name="submit">Post</button>
        </form>
       
    </div>
    

    <script src="js/app.js"></script>
</body>
</html>
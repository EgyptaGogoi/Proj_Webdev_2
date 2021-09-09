<?php
$fullname=$_POST['fname'];
$email=$_POST['email'];
$issue=$_POST['issue'];
$comment=$_POST['comment'];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA_Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Webform_style.css">
    </head>
    <body>
        <div class="Form_container">
            <h2>Review</h2><hr>
            <div class="hi">
                <?php echo "<b>Hi </b>". $fullname ."<b> ! </b><br>"; ?>
            </div>
            <div class="email">
                <?php echo "<b>Your  Email-ID : </b>". $email ."<br>"; ?>
            </div>
            <div class="texta">
                <?php echo "<b>Your </b>". $issue ."<b>:</b>". $comment."<br>"; ?>
            </div>
            <form method="POST" action="index.php">
                <input type="hidden" name="fname" value="<?php echo $fullname?>">
                <input type="hidden" name="email" value="<?php echo $email?>">
                <input type="hidden" name="issue" value="<?php echo $issue?>">
                <input type="hidden" name="comment" value="<?php echo $comment?>">
                <div class="confirm">
                    <button type="submit" name="submit" formaction="todatabase.php">Confirm</button>
                    <button type="submit" value="reset"> Reset</button>
                </div>
            </form>
        </div>
    </body>
</html>

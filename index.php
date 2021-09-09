<?php
    $fullname='';$email='';$issue='';$comment='';
    if($_SERVER["REQUEST_METHOD"]== "POST")
    {
        $fullname=$_POST['fname'];
        $email=$_POST['email'];
        $issue=$_POST['issue'];
        $comment=$_POST['comment'];
    }
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
            <h2> Contact Us</h2><hr>
            <form method="POST" action="review.php">
                <div class="field">
                    <label for="fname">Full Name</label><br>
                    <input type="text" name="fname" placeholder="Name" size="40" value="<?php echo $fullname?>" required><br>
                </div>
                <div class="field">
                    <label for="email">Email-ID</label><br>
                    <input type="email" name="email" placeholder="abc@xyz.com" value="<?php echo $email?>" required><br>
                </div>
                <div class="field">
                    <label for="issue">User's Issue</label><br>
                    <select name="issue" size="1" value="<?php echo $issue ?>">
                        <option>--select--</option>
                        <option>Query</option>
                        <option>Feedback</option>
                        <option>Complaint</option>
                        <option>Other</option> 
                    </select><br>
                </div>
                <div class="field">
                    <label for="comment">Comment</label><br>
                    <textarea name="comment" row="56" cols="40" size="200" placeholder="Write your comment."><?php echo $issue ?></textarea><br>
                </div>
                <div class="sbutton">
                    <button type="submit" name="submit_btn">Submit</button>
                </div>
            </form>
        <div>
    </body>
<html>


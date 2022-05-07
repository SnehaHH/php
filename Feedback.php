<?php

include("Feedback_form.php");

?>

<!DOCTYPE>
<html>

<body>

    <title> Feedback form </title>
    <p> * Required Fields </p>
    <form name="feed_form" method="post">

        <label class="tags">Name</label>
        <input value="<?php if (!$name_error) {echo $name1;}    ?>" type="text" name="name" class="fname">
        <small>* <?php echo $name_error; ?> </small>
        <br>
        <label class="tags">Email</label>
        <input value="<?php  if (!$email_error) {echo $email1;}?>"  type="text" name="email" class="fname">
        <small>* <?php echo $email_error; ?> </small>
        <br>
        <label class="tags">Phone Number</label>
        <input value="<?php if (!$phone_error) {echo $phone1;} ?>" type="text" name="phone" class="fname">
        <small>* <?php echo $phone_error; ?> </small>
        <br>
        <label class="tags">Feedback</label>
        <input value="<?php if (!$fb_error) {echo $fb;} ?>" type="text" name="feedback" class="fname">
        <small>* <?php echo $fb_error; ?> </small>
        <br>
        <label class="tags">Rating</label>
        <input type="radio" value="Great!" name="rat">    
        <label> Great! </label>
        <input type="radio" value="Ok" name="rat">    
        <label> Ok. </label>
        <input type="radio" value="Meh." name="rat">    
        <label> Meh. </label>
        <br>
        <input class="tags" type="submit" value="Submit" name="add">


    </form>

    <script>
        if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
        </script>
</body>


<style>
    .fname {
        color: black;
        border-style:ridge;
    }

    .tags {
        align-content: center;
        color: #890632;
    }
</style>

</html>
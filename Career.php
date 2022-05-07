<?php

include("Career_form.php");

?>

<!DOCTYPE>
<html>

<body>

    <title> Career form </title>
    <p> * Required Fields </p>
    <form name="career_form" method="post">

        <label class="tags">Full Name</label>
        <input value="<?php if (!$name_error) {
                            echo $name1;
                        }    ?>" type="text" name="name" class="fname">
        <small>* <?php echo $name_error; ?> </small>
        <br>
        <label class="tags">Phone Number</label>
        <input value="<?php if (!$phone_error) {
                            echo $phone1;
                        } ?>" type="text" name="phone" class="fname">
        <small>* <?php echo $phone_error; ?> </small>
        <br>
        <label class="tags">Language</label>
        <select name="language" class="fname"> 
            <option value="">None</option>            
            <option value="English">English</option>
            <option value="French">French</option>
            <option value="German">German</option>
            <option value="Greek">Greek</option>
            <option value="Morse">Morse Code</option>
            <option value="Spanish">Spanish</option>
            <option value="Sigh">Sign language</option>
            <option value="Other">Other</option>
        </select>
        <small>* <?php echo $lang_error; ?> </small>
        <br>
        <label class="tags">Highest Language Qualification</label>
        <input value="<?php if (!$qua_error) {
                            echo $qua;
                        } ?>" type="text" name="quali" class="fname">
        <small>* <?php echo $qua_error; ?> </small>
        <br>
        <label class="tags">Please upload your CV</label>
        <input value="<?php if (!$cv_error) {
                            echo $cv;
                        } ?>" type="file" name="cv" class="fname">
        <small>* <?php echo $cv_error; ?> </small>
        <br>
        <br>
        <input class="tags" type="submit" value="Submit" name="add">


    </form>

    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</body>


<style>
    .fname {
        color: black;
        border-style: ridge;
    }

    .tags {
        align-content: center;
        color: #890632;
    }
</style>

</html>
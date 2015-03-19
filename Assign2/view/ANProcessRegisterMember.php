<?php
	$title = "Register Member";
	include '../view/headerinclude.php';
?>
<br>				
<section>
<div class="container">
<div style="margin-top: 100px;" class="jumbotron">
<?php
$firstName = $_POST['FirstName'];
    $lastName = $_POST['LastName'];
    
    $email = $_POST['Email'];

if (empty($firstName)) {
        echo "<h3>You must provide a first name to be registered.</h3>";
} else {
    if (empty($lastName)) {
            $msg = "You must your last name to join!";
    } else if (empty ($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $msg = "You must provide a valid email address to register.";
    } else {
            $msg = "Congratulations, $firstName! You're all signed up.";
            $file = fopen('../DataFiles/members.csv', 'a+b');
            fputcsv($file, 
                    array($firstName, $lastName, $email));

            echo "<h3>Current members are:</h3><ol>";
            rewind($file);
            while (($data = fgetcsv($file)) !== FALSE) {
                    echo "<li><a href='mailto:$data[2]'>" .
                            "$data[0] $data[1]</a></li>" ;
            }
            echo "</ol>";
            fclose($file);		

    }
    echo "<h3>$msg</h3>";	



    }
    ?>

</div>
</div>
</section>
<br>
 <?php
	
	include '../view/footerinclude.php';
?>




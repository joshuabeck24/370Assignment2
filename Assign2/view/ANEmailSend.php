<?php
	$title = "Send Mail";
	include '../view/headerinclude.php';
?>
<br>				
<section>
<div class="container">
<div style="margin-top: 100px;" class="jumbotron">
<?php
require_once 'Mail.php';
$options = array();
$options['host'] = 'ssl://smtp.gmail.com';
$options['port'] = 465;
$options['auth'] = true;
$options['username'] = 'AudioNexusNews@gmail.com';
$options['password'] = 'audionexus';
$mailer = Mail::factory('smtp', $options);

$headers = array ();
$headers['From'] = 'Audio-Nexus <AudioNexusNews@gmail.com>';
$headers['Subject'] = 'Audio-Nexus Newsletter ';
$headers['Content-type'] = 'text/html';

// $recipients is an array of addresses,$message is the html
$newsfile = fopen('../Newsletters/ANNews.html', 'r');
$newsletter = file_get_contents('../Newsletters/ANNews.html');
/*$message = "<html><head></head><body><h1>AudioNexus Monthly Artist: <a href='https://soundcloud.com/leaving-community/mistakes'> Leaving Community</a></h1>"
. " <br /><p>AudioNexus is looking for new and inspiring artists around the world. Check out the song 'Mistakes' by"
. "Leaving Community, a one-man band in California!</p></body></html>"; */
$recipients = array('michele.a.gregory@gmail.com');

echo "<h3>Sending Email To:</h3><ol>";
       $file = fopen('../DataFiles/members.csv', 'rb');
       while (($data = fgetcsv($file)) !== FALSE) {
               echo "<li>$data[0] $data[1] ($data[2])</li>" ;
               $recipients[] = $data[2];
       }
echo "</ol>";
fclose($file);	

$result = $mailer->send($recipients, $headers, $newsletter);

if (PEAR::isError($result)) {
        echo 'Error sending email.';
    } else {
        echo 'Email Sent Successfully.';
    }
    ?>

</div>
</div>
</section>
<br>
 <?php
	
	include '../view/footerinclude.php';
?>




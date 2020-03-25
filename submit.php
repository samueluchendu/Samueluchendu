<?php
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$Email = $_POST['email'];
$Gender = $_POST['gender'];
$description = $_POST['message'];


$files = fopen($firstname.rand(01, 10).'.txt', 'w');

fwrite($files, 'My First name is: ' .$firstname.',' ) ;
fwrite($files, ' My Last name is: ' .$lastname.',' );
fwrite($files, ' My Email is: ' .$Email.',');
fwrite($files, ' I am a: ' .$Gender.',' );
fwrite($files, '  My Description is: ' .$description );

fclose($files);

echo 'your file have been created';


 ?>

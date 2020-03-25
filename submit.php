<?php
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$Email = $_POST['email'];
$Gender = $_POST['gender'];
$description = $_POST['message'];


$file = fopen($firstname.rand(01, 10).'.txt', 'w');

fwrite($file, 'My First name is: ' .$firstname.',' ) ;
fwrite($file, ' My Last name is: ' .$lastname.',' );
fwrite($file, ' My Email is: ' .$Email.',');
fwrite($file, ' I am a: ' .$Gender.',' );
fwrite($file, '  My Description is: ' .$description );

fclose($file);

echo 'your file have been created';


 ?>

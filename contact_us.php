<?php
	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$subject=$_POST['subject'];
		$email=$_POST['email'];
		$contact=$_POST['contact'];
		$query=$_POST['query'];
        $email="FROM: $email"."\r\n"."CC:saarthaksharma87@gmail.com";
        $to='abhi62255@gmail.com';
        if(mail($to,$subject,$query,$email))
        {           
			echo "query send successfuly";
        }
        else
        {
			echo"plese try again";
		}
	}
?>
<?php

function is_not_null($value) {

    

    if (is_array($value)) {

      if (sizeof($value) > 0) {

        return true;

      } else {

        return false;

      }

    } else {

      if (($value != '') && (strtolower($value) != 'null') && (strlen(trim($value)) > 0)) {

        return true;

      } else {

        return false;

      }

    }

  }

function is_not_empty($array,$value){

   if(is_not_null($array)){

    $tmp_array=explode("~@~",$value);

      if (is_array($tmp_array)) {

      if (sizeof($tmp_array) > 0) {

          foreach ($tmp_array as $value) {

          if(array_key_exists($value,$array)){

              if(!is_not_null($array[$value])){

                  return false;

              }

          }else{

              return false;

              

          }    

          }

          return true;

      } else {

       return false; 

      }

    } }else{

        return false;

    }

  }

function redirect($url,$msg=""){

	if (!headers_sent($filename, $linenum)) {

	$_SESSION["msg"]=$msg;

		header('Location: '.$url);

		exit;

	} else {

	

		echo "Headers already sent in $filename on line $linenum\n" .

			  "Cannot redirect."; 

		exit;

	}

}

function show_message($admin=true){

        if(get_message()!="")

		{

            $tmp=explode("~@~",get_message());

            $msg=$tmp[0];

            $type=$tmp[1];

			echo '<div class="alert alert-'.$type.' alert-dismissable" style="width:100%;">'.

            $msg.'</td><td class="'.$type.'-right">'.

            '<button type="button" class="close" data-dismiss="alert">x</button></div>';

		}

       clear_message();}

function clear_message(){

		$_SESSION["msg"]="";}

function get_message(){

	if(is_not_empty($_SESSION,"msg"))

	{

		return $_SESSION["msg"];

	}

	else return "";}

function createResized($filename, $thumb_path, $max_dim) {

list($width, $height) = getimagesize($filename);

	

	$ratio = $width / $height;



	if( $ratio < 1) 

	{

		$new_height = $max_dim;

		$new_width = round($max_dim * $ratio);

		

	} else 	// horizontal

	{

		$new_width = $max_dim; 

		$new_height = round($max_dim / $ratio);

	}

	include_once("imageclass.php");

	$img = new Zubrag_image;

        $img->max_x     	= $new_width;

        $img->max_y        = $new_height;

	$img->cut_x        = 0;

	$img->cut_y        = 0;

	$img->quality      = 100;

	$img->save_to_file = true;

	$img->image_type   = -1;	

	$img->GenerateThumbFile($filename, $thumb_path);



}

function generateRandomString($length = 10) 
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function regstration_email($sitename,$uname,$email,$sender,$sub)
{
		$from = $sender; 
		$subject = $sub;
		$msg='';
		$msg.='<h2>'.WEBSITE_NAME.'</h2>';
		$msg.='<br> Dear <b>'.$uname.",</b><br>";		
		$msg.='<p> Thank you for your submission at '.WEBSITE_NAME.' website </p>
		<p>	We look forward to get in touch with you soon! </p>
		<br> '.SIGNATURE;
 		$message = $msg ;
		$to=$email;
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= 'From: '.WEBSITE_NAME.' <'.EMAIL_FROM.'>' . "\r\n";
		mail($to,$subject,$message,$headers);
}

function regstration_email_admin($email,$sub,$username,$pass)
{ 		$from = $email; 
		$subject = "Sign Up For ".$sub; 
 		$message='';
		$message = ' This User Has Been Sign Up From '.$sub.' Details Are <br> 
		Name: '.$username.'<br>
		User Id : ' .$email. '<br>
		Password : ' .$pass. '<br><br>
		'.SIGNATURE; 
		$to=EMAIL_FROM;
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= 'From: <'.$email.'>' . "\r\n";
		mail($to,$subject,$message,$headers);
}
?>
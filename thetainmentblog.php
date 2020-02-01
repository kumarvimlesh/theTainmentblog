<?php
    if(isset($_POST['submit']))
    {
     //$con = mysqli_connect("fdb22.awardspace.net","2861418_thetainmentblog","171210059@vk","2861418_thetainmentblog");
      
      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $areacode = $_POST['areacode'];
      $contactnum = $_POST['contactnum'];
      $emailid = $_POST['emailid'];
      $post = $_POST['post'];
      
          //$sql="insert into post (firstname,lastname,areacode,contactnum,emailid,contactby,post) values('".$firstname."','".$lastname."','".$areacode."',".$contactnum.",'".$emailid."','".$post."')";
          
         /* $query=mysqli_query($con,$sql);
          if ($query) {
            echo"sent successfuly";
           }
          else
          {
            echo"not working";
          }*/
          $to = "thetainmentblog@gmail.com";
          $subject = "website form";
          $body = $post;
          $headers = "from : .$firstname $lastname $areacode $contactnum $emailid.";
        mail($to,$subject,$body,$headers);

        if(mail($to,$subject,$body,$headers))
        {
        $user = "$emailid";
        $usersubject = "Thank You | theTainmentblog";
        $userheaders = "From: thetainmentblog@gmail.com\n";
        $usermessage = 'Thank you for contacting to theTainmentblog \n
                        Read Best Articles at https://thetainmentblog.in
                        theTainmentblog All Post : https://thetainmentblog.in/thetainmentblogpost.html';
        mail($user,$usersubject,$usermessage,$userheaders);

        echo'<h1>Thankyou!</h1>
             <h2>Your post  sent successfully</h2>';
        }
        else
        {
          echo '<h1>error while sending your post !</h1>
               <h2>Please try again!</h2>';
        }
      }
     /* $file = $_FILES['file'];
      $fileName=$_FILES['file']['name'];
      $fileTmpName = $_FILES['file']['tmp_name'];
      $fileSize = $_FILES['file']['size'];
      $fileError = $_FILES['file']['error'];
      $fileType = $_FILES['file']['type'];

      $fileExt = explode('.',$fileName);
      $fileActualExt = strtolower(end($fileExt));

      $allowed = array('jpg','jpeg','png','pdf');
      if(in_array($fileActualExt, $allowed))
      {
        if($fileError === 0)
        {
            if($fileSize < 1000000)
            {
                 $fileNameNew = uniqid('', true).".".$fileActualExt;
                 $fileDestination = 'uploads/'.$fileNameNew;
                 move_uploaded_file($fileTmpName, $fileDestination);
            }
            else
            {
                echo "your file size is too big!";
            }
        }
        else
        {
            echo "error while uploading your image";
        }
      }
      else
      {
        echo "please insert only jpg/jpeg/png/pdf format of your photo";
      }
    }
   // $sql_img = "insert into Profile Picture (img_name,image) values('".$fileNameNew."','".$file."')";
    //$query=mysqli_query($con,$sql_img);*/
  else
  {
    echo"error";
  }
    ?> 

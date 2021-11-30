<?php 
error_reporting(-1);
ini_set('display_errors', 'on');
set_error_handler("var_dump");
//للحين اشتغل على الايميل 

session_start();

$sender = 'Affaqhelpcenter@gmail.com';
$recipient = 'Affaqhelpcenter@gmail.com';

$subject = "php mail test";
$message = "php test message";
$headers = 'From:' . $sender;

if (mail($recipient, $subject, $message, $headers))
{
    echo "Message accepted";
}
else
{
    echo "Error: Message not accepted";
}



// $headers = 'From : nor@gmail.com';
if(isset($_POST['submit']) && $_POST['email'] != NULL)
{
        $email =$_POST['email'] ;
        $subject = $_POST['subject'];
        $content = $_POST['content'];
        
        $to ='Affaqhelpcenter@gmail.com';

        $text = 'الايميل : '.$email.'\r\n المحتوى:'.$content;

        mail($to,$subject,$text);
        $_SESSION['status'] = "done";
        header('Location: Main.php');  
        }
       else
           echo"faild";
       


// session_start();
// $server = 'localhost';
// $email = 'root';
// $subject ='';
// $content = '';
// $dbPort = 
// $dbname = 'affaq' ; 
 
// $con = mysqli_connect($server ,$email , $subject , $dbname,'3306',$content ) ;

// if(isset($_POST['submit'])){
 
//     if(!empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['content'])){
       
//        $email = $_POST['email'] ;
//        $subject = $_POST['subject'];
//        $content = $_POST['content'];

//        $query = "insert into comment(email , subject , content) values ('$email' , '$subject' , '$content')";

//        $run = mysqli_query($con , $query) or die(mysqli_error($con));

//        if($run){
//            $_SESSION['status'] = "done";
//           header('Location: Main.php');
//        }
//        else{
//            echo"faild";
//        }
//     }
// }
?>
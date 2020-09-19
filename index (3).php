<?php
if(isset($_POST['submit'])){
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$mname = $_POST['mname'];
$dname = $_POST['dname'];


}
         $con=mysqli_connect('localhost:3308','root');
         mysqli_select_db($con,'fname');
         $q="insert into book(firstname,lastname,mobile,comment) values('$fname','$lname',$mname,'$dname ')";
         $status=mysqli_query($con,$q);
        mysqli_close($con);
?>
<html>
<head>
<title>
CONTACT FORM</title>
<style>
body
{
    background-image:url("sonu sood.jpg");
}
h1
{   
    text-align:center;
    color:white;
    
}
.sing
{
     margin-top:400px;
    margin-left:100px;
    color:white;
   
}
.sing:hover{
    color:green;
}
.menu {
        background-color:black;
        color:white;
        text-align:center;
        height:130px;
        font-size:30px;
        padding:5px;
        position:absolute;        margin-top:650px;
        width:1500px;
        opacity:0.8;
        
        

}


.fa{
  padding: 25px;
  font-size: 35px;
  width: 30px;
  text-align: center;
  text-decoration: none;
position:relative;
   
}

/* Add a hover effect if you want */
.fa:hover {
  opacity: 0.7;
}

/* Set a specific color for each brand */

/* Facebook */
.fa-facebook {
  background: #3B5998;
  color: white;
}

/* Twitter */
.fa-twitter {
  background: #55ACEE;
  color: white;
}
.fa-instagram{
  background: pink;
  color: white;

}

</style>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">  
</head>
<body>
<p>
<?php
if($status==1)
echo"YOUR DATA SUBMITTED SUCCEEFULLY";

else

echo"YOUR DATA NOT SUBMITTED";

?>
</p>
<h1>FOR GOING TO BACK PAGE <h1><br></br>

<a href="duplicate contact form.php" class="sing">click here</a>
<footer>
<div class="menu">
<ul>
<a href="https://www.facebook.com/ActorSonuSood/" class="fa fa-facebook"></a>
<a href="https://twitter.com/SonuSood" class="fa fa-twitter"></a>
<a href="https://www.instagram.com/sonu_sood/" class="fa fa-instagram"></a>


</ul>
</div>
</footer>
</body>
</html>
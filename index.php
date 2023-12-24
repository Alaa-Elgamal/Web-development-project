<?php
$name=$_REQUEST['name'];
$age=$_REQUEST['age'];
$gender=$_REQUEST['gender'];
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];

if(isset($_POST['btntest'])){
    $host="localhost";
    $user="root";
    $password="";
    $db="alaa";

    $conn=mysqli_connect($host,$user,$password,$db);
    
    $insert="insert into customers values('$name','$age','$gender','$email','$password');

    mysqli_query($conn,$insert);

    if($conn){
        print( "Your Registration is Done");
    }
    else{
        print(" Your Registration is Failed");
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        body{background-color:palevioletred ;}
        h1{color:black;}
        p{color:aqua;} 
        div{
            border:1px solid ;
            padding-top: 50px;
            padding-right:30px;
            padding-bottom:50px;
            padding-left: 10px;
        }
        </style>

    <title>Navbar</title>
</head>
<body>
        <a href="file:///C:/Users/DELL/Desktop/cv%20QC/Account.html">Account</a> 
        <a href="file:///C:/Users/DELL/Desktop/cv%20QC/Documents.html">Documents</a>  
        <a href="file:///C:/Users/DELL/Desktop/cv%20QC/Contacts.html">Contacts</a> 
        <a href="file:///C:/Users/DELL/Desktop/cv%20QC/Help.html">Help</a> 
    <h1>Customer Service </h1> 
    <p> we need to handle with complaints of customer service </p> 
    <p>complaints of customer service such as hearing without listening and not understanding what customers needs so we need solutions to that problems </p>
    <p>we need to make Website interactive that customers use it easily and be able to write what they need to satisfy customers </p> 
    <br>
    <head> 
    <title> Registration Form</title>
    </head>
    <body>
    <form> 
<label for ="textbox1"> name:</label>
<input id ="textbox1" type="text" name="name" placeholder="Alaa" required> <br> <br>
<label for="age"> age:</label>
<input id="age" type="int" name="age" placeholder="21" required> <br> <br>
<label for="male1"> male: </label>
<input id="male1" type="radio" name="male or female" value="male"> <br> <br>
<label for ="female1"> female1:</label>
<input id="female1" type="radio" name="male or female" value="female"> <br> <br>
<label for="email1"> emale:</label> 
<input id="email1" type="text" name="email" placeholder="alaa@gmail.com" required> <br><br>
<label for="passbox1"> password:</label>
<input id ="passbox1" type="text" name="password"  id="1"> required <br> <br>
<button type="submit" name="btntest"> send</button>
</form> 
<br>
<h1> Website Form</h1>
<br>
<img src="c:\Users\DELL\Downloads\1667980499636 - Copy.jfif" width="600" height="300">
<br> 
<a href="https://WWW.google.com">google </a>
<br> 
<h1>Call to action</h1> <br>
<script>
    class customer{
        name;
        age;
        constructor(){
            let n="Alaa";
            let a=21;
            this.name=n;
            this.age=a;
        }
    }
    let obj=new customer();
    document.write(obj.name+ " "+obj.age);
    </script>
    



<html>
<head>
<title>Login Form Design</title>
</head>
<style>
#job{
    height:60%;
    width:40%;
    margin-left:20%;
    margin-top:3%;
}
</style>
<body>
    
    <div class="loginbox">
    
        <div id="job">

        <h1>Job Portal</h1>
        <h3>Enter your skills here</h3>
        <form  method="POST"   name="form" action="" >
            
            <input type="text" placeholder="Skill 1" name="s1" required><br><br>

            <input type="text" placeholder="Skill 2" name="s2" required><br><br>

            <input type="text" placeholder="Skill 3" name="s3" required><br><br>

            <input type="submit" name="submit" value="Search"><br><br><br>
       

        </form>
          </div>
        
    </div>
</body>
</head>
</html>
 
 <?php

$s1=filter_input(INPUT_POST,'s1');
$s2=filter_input(INPUT_POST,'s2');
$s3=filter_input(INPUT_POST,'s3');

$submit=filter_input(INPUT_POST,'submit');


if(!empty($submit)){

$dbservername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="data";
$conn=mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);
        
    $sql1="SELECT job FROM jobs WHERE skills LIKE '%$s1%'";
        $r1=mysqli_query($conn,$sql1);
        echo "List of  suitable job profiles for you :-<br>";
        while ($row = $r1->fetch_assoc()) {
    echo $row['job']."<br>";
}

    $sql2="SELECT job FROM jobs WHERE skills LIKE '%$s2%'";
        $r2=mysqli_query($conn,$sql2);
         while ($row = $r2->fetch_assoc()) {
    echo $row['job']."<br>";
}
    $sql3="SELECT job FROM jobs WHERE skills LIKE '%$s3%'";
        $r3=mysqli_query($conn,$sql3);
         while ($row = $r3->fetch_assoc()) {
    echo $row['job']."<br>";
}
        

}




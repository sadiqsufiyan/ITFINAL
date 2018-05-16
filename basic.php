<?php
  include ("connect.php");
   include ("sessions_admin.php");
  $msg = "";

  if (isset($_POST['btn-upload'])) {
    $target = "Circulars/".basename($_FILES['fileCircular']['name']);
    $fileCircular = $_FILES['fileCircular']['name'];
    $error = $_FILES['fileCircular']['error'];
    $title = mysqli_real_escape_string($db, $_POST['title']);
    $cirnumber = mysqli_real_escape_string($db, $_POST['cirnumber']);
    $dt = @date('Y-m-d');
   $sql = "insert into circular (fileCircular,cirnumber,title,dt) values ('$fileCircular','$cirnumber','$title','$dt')";
    mysqli_query($db, $sql);

    if (move_uploaded_file($_FILES['fileCircular']['tmp_name'],$target)) {

      $msg = "The cicular was uploaded successfully";
      echo "<script type='text/javascript'>alert('$msg');window.location.href='upload.php';</script>";

    }
    else{

      $msg = "Failed to upload the Circular";
      echo "<script type='text/javascript'>alert('$msg');window.location.href='upload.php';</script>";

    }

  }

?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Admin Home</title>
<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

html,body {
  font-family:Tangerine;
  height: 100%;
}

a {
  text-decoration: none;
}

div#header {
  width: 100%;
  height: 15%;
  background-color: white;
  margin: 0 auto;
}

.logo{
  float: left;

}

img{
  width: 80%;
  height: 100%;
}

.logo a {
  font-size: 2.3em;
  color: #fff;
}

.button {
  float: right;
  color: black;
  padding: 5px 10px;
  border-radius: 12px;
  margin-top: 1ex;
  margin-right: 20px;
  font-size: 22px;
  cursor: pointer;
  background-color: cornflowerblue;
  border: 2px black;
box-shadow: 0 8px 16px 0
rgba(0,0,0,0.2), 0 6px 20px 0
rgba(0,0,0,0.19);
}

.content {

  width:auto;
  text-align: center;
  height: 100%;
  background: #95a5a6;
  margin-left: 20px;
  padding: 5px;
  background-image: url("black.jpg");
}

.content p {
  color: #424242;
  font-size: 0.8em;
}

table{
  border: 1px solid black;
  width:100%;
  height: auto;
  padding: 2px;

}
th{
  border: 1px solid black;
  padding: 15px;
  width: 25%
}

td{
    padding: 10px;
}

#footer{
  clear: both;
  padding: 10px;
  background-color: #131313;
  text-align: right;
  color: white;
}


.navbar {
    overflow: hidden;
    background-color: #333;
    font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: orange;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}




.topnav-right {
  float: right;
background-color: orange;
  color: white;
}



</style>


</head>

<body>

    <div id="header">
        <div class="logo">
          <img src="pre.png">
        </div>

     

    </div>
<br>

<div class="navbar">
   <a href="basic.php">Home</a>
   <a href="Acircular.php">Circular</a>

   

  <div class="dropdown">
    <button class="dropbtn">Events

      <i class="fa fa-caret-down"></i>
    </button>

    <div class="dropdown-content">
      <a href="Upcmg_evnts.php">Men</a>
      <a href="Upcmg_evnts.php">Women</a>
      <a href="Upcmg_evnts.php">Group</a>
    </div>

</div>
<a href="upload.php">Upload</a>
<a href="musers.php">Manage Users</a>
<div class="topnav-right">
    <a href="logout.php">Log Out</a>
   
  </div>

</div>

        <div class="content">
          <br>  <h1><font color="#ff6600">Welcome <?php echo $_SESSION["username"];  ?></font></h1>
          
            <div>
          <br><br>
<h4><font color="#ff6600">Program Overview</font></h4>
<li>The program is designed to develop essential skills to communicate effectively, bridge barriers and enhance relationships in teams.  The participants also discover that diversity is their greatest asset and trust, cooperation and effective communication are the key to a team’s success. The activities in this program are designed to motivate the participants to pool their talents and perform to the best of their ability, both individually and as team players.</li>
<br>

<h4><font color="#ff6600">Who will benefit from this program?</font></h4>
 <li>* Team members, team managers, project leads</li>

<h4><font color="#ff6600">Key outcomes/benefits to participants:</font></h4>

 <li>* Recognize the different stages of teamwork and functioning of the team in each stage</li>
<li>*Develop skills to create win-win situations to accomplish common goals.</li>
<li>*Recognize the basic difference between a group and a team</li>
<li>*Increase the individual’s knowledge and skill levels in team building and team working skills</li>
<li>*Gain skills using methods, techniques and tools which will improve the participants</li> <li>*effectiveness as team members</li>
<li>*Recognize the factors that affect trust in their relationship with others</li>
<li>*Gain dexterity and grace in dealing with new or trying situations</li>

 
<h4><font color="#ff6600">Key modules / Course overview</font></h4>

<table width="1500">
 <tr> 
 <td>
<li>} Fundamentals of an Effective Team Player
<li>} Team and importance of teamwork
<li>} Goals, Trust, Decision making, Positive Attitude, participation and Flexibility
<li>} Conflict within teams & conflict resolution
 </td> 
 <td>

<li>} Effective communication within a team
<li>} Stages of teamwork
<li>} Creating a win-win situation
<li>} Social Styles
<li>} Flexing social styles
</td>
<td>
<li>} Transactional Analysis – me, with my team, with others
<li>} Ego states & its role in team based communication
<li>} Leveraging diversity
 </td>
<td>
 </tr> 
 </table>
<br>
<li><b>Mode: Classroom, Outdoor.<br>
Duration: 1-2 days (Outdoor mode is most ideal for this program)<b></li>


<br><br>
</div>

    <div id="footer">
     COPYRIGHT &copy; 2018
    </div>

</body>
</html>

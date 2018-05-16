<?php
  include ("connect.php");
   include ("sessions_user.php");
  $msg = "";
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Circulars</title>
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

div#container {
  height: 92%;
  width: 100%;
  margin-left: 3px;

}

.content {

  width:auto;
  text-align: center;
  height: 100%;
  background: #95a5a6;
  margin-left: 5px;
  padding: 5px;
  background-image: url("circ1.png");
  background-repeat:no-repeat;
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
   <a href="hpage.php">Home</a>
   <a href="circular.php">Circular</a>

   

  <div class="dropdown">
    <button class="dropbtn">Events

      <i class="fa fa-caret-down"></i>
    </button>

    <div class="dropdown-content">
      <a href="Events.php">Men</a>
      <a href="Events.php">Women</a>
      <a href="Events.php">Group</a>
    </div>

</div>
<a href="register.html">Register</a>
<div class="topnav-right">
    <a href="logout.php">Log Out</a>
   
  </div>

</div>
    <!--    <a class="selected"href="circular.php">Circular</a>
                </li>
		
                <li>
                <li>


        <a href="Events.php">Events</a>
                </li>



 <li>
                <li>


        <a href="https://form.jotform.me/80774812666466">Register</a>
                </li>
            </ul>

        </div> -->

        <div class="content">
          <br>
          <h2> Circulars for you..</h2>
<div>
          <br><br>


<?php
include("connect.php");
		$sql = "select * from circular order by id desc";
                 $result = mysqli_query($db, $sql); ?>
   		 <table align="center">

                  <tr>
                    <th> Title </th>
                    <th> Circular No</th>
                    <th> Uploaded on</th>
                    <th> Files</th>
                  </tr>

                  <tr>

             <?php
            while ($row = mysqli_fetch_array($result)) {

            ?>
              <td> <?php echo $row['title'] ?> </td>
              <td><?php echo $row ['cirnumber']?></td>
             <td><?php echo $row ['dt']?></td>
	     <td><a href="Circulars/<?php echo $row ['fileCircular'] ?>">View File</a></td>
            </tr>
        <?php
         }
        ?>




              </table>
            </div>


        </div>


    </div>
    <div id="footer">
     COPYRIGHT &copy; 2018
    </div>




</body>
</html>

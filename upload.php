<?php
 include ("connect.php");
 include ("sessions_admin.php");
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Upload page</title>
<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

html,body {
  font-family: 'Tangerine';
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

.button#tada {
  float: left;
  color: white;
  padding: 5px 20px;
  width: 100%;
  border-radius: 6px;
  font-size: 15px;
  cursor: pointer;
  background-color:#ff8a00;
  border: 2px solid #ff8a00;
}

.button#tadada {
  float: left;
  color: white;
  padding: 5px 20px;
  width: 100%;
  border-radius: 6px;
  font-size: 15px;
  cursor: pointer;
  background-color:#00afba;
  border: 2px solid #00afba;
}

div#container {
  height: 92%;
  width: 100%;
  margin-left: 0 auto;

}





.content {

  width:auto;
  text-align: ;
  height:100%;
  background: #95a5a6;
  margin-left: 0px;
  padding: 15px;
  background-image: url("black.jpg");
}

.content p {
  color: #424242;
  font-size: 0.8em;
}

table{
  margin-left: ;
  margin-right: ;
  width: 40%;
  height: 10%;
  border-collapse: collapse;
}
th{
  padding: 1px;
  border-bottom:3px solid #ddd;
  background-color: black;
  color: white;
}

td{

    background-color:;
    padding: 1px;
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
    background-color: #ddd;
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
          <br>  <h1>Upload Panel</h1>
          <h4>Upload files</h4> <br>
            <form method="post" action="Acircular.php" enctype="multipart/form-data" >
                    <table align="center">

                    <tr>
                      <th colspan="2"> Circulars </th>
                    </tr>

                    <tr>
                      <td> Filename: <input type="text" name="title" class="title" maxlength="25"> </td><td>Circular No: <input type="text" name="cirnumber" class="cirnumber" maxlength="25"></td><br>
                    </tr>
                    <tr>
                      <td><input type="file" name="fileCircular" /> </td><td>
<button type="submit" name="btn-upload">upload</button> </td><br>
                    </tr>

                    </table>
                    </form>

                    <br>
                            <form method="post" action="Upcmg_evnts.php" enctype="multipart/form-data">
                                    <table align="center">

                                    <tr>
                                      <th colspan="2"> Upcoming Events </th>
                                    </tr>

                                    <tr>
                                      <td> Filename: <input type="text" name="title" class="title" maxlength="25"> </td> <td>
                                       Event no: <input type="text" name="eventnumber" class="eventnumber" maxlength="25"></td><br>
                                    </tr>
                                    <tr>
                                      <td> <input type="file" name="fileEvent" /></td><td>
<button type="submit" name="btn-upload">upload</button></td>
                                      <br>
                                    </tr>

                                    </table>
                                    </form>

        </div>


    </div>
    <div id="footer">
     COPYRIGHT &copy; 2018
    </div>


</body>
</html>

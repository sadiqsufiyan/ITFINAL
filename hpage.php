
<?php
  include ("connect.php");
   include ("sessions_user.php");
  $msg = "";
?>
<html>
<head>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Homepage</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    

    <link href="style.css" rel="stylesheet">
<link href="stylesheet.css" rel="stylesheet">
 
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

#header{
  width: 100%;
  height: 16%;
margin-top: 0px;
  background-color: white;
  
}

.logo{
  float: left;
margin-top: 0px;

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
  text-align: left;
  
  height: 10%;
  background: #95a5a6;
  margin-left: 25px;
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
   <a href="hpage.php">Home</a>
   <a href="circular.php">Circular</a>

   

  <div class="dropdown">
    <button class="dropbtn">Events

      <i class="fa fa-caret-down"></i>
    </button>

    <div class="dropdown-content">
      <a href="Events.php">INDOOR</a>
      <a href="Events.php">OUTDOOR</a>
      <a href="Events.php">CHALLENGE</a>
    </div>

</div>
<a href="register.html">Register</a>
<div class="topnav-right">
    <a href="logout.php">Log Out</a>
   
  </div> 
</div> 
        <div class="content">
         <br>  <h1><font color="black"><b>Welcome <?php echo $_SESSION["username"];  ?></font></h1></b>
</div>
        

<div class="tatacard image1">
  <h1>Lorem ipsum dolor sit amet, consectetur adipiscing</h1>
  <h5>Quisque lobortis felis sem, ut hendrerit lorem tincidunt quis. Maecenas sit amet</h5>
  <hr>
</div>

<div class="iwc">
  <div class="container">
    <h1>Image with content layout 2</h1>
    <div class="row">
      <div class="col-md-8" style="padding-right: 40px">
        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
        <li>Vestibulum in sem ac dolor gravida vehicula quis sit amet massa.</li>
        <li>Phasellus sodales libero ac eros condimentum rutrum.</li>
        <li>Donec malesuada mi ut tellus vehicula, a dictum lectus ornare.</li>
        <li>Sed consectetur mauris in rutrum tempor.</li>
        <li>Donec mattis leo non faucibus dignissim.</li>
        <li>Quisque iaculis ligula ut mi pretium, vel efficitur est ullamcorper.</li>
        <li>Nam venenatis ante vel nulla commodo, ut dictum nibh interdum.</li>
        <br>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean purus tortor, lobortis non est nec, imperdiet feugiat ex. Integer quis sapien blandit, faucibus ante a, venenatis eros. Nam lobortis, dolor et ullamcorper sagittis, neque mauris aliquam felis, eu rutrum elit leo nec ex. Mauris sed congue enim. Nullam sagittis eget purus non sagittis. Vivamus at ultricies massa. Sed nec sollicitudin nisl. Fusce sit amet mi egestas, feugiat magna volutpat, lacinia leo. Sed ullamcorper sem tellus, sed mattis sem interdum at. Aenean ornare, magna sed consectetur sollicitudin.
      </div>
      <div class="col-md-4">
         <img src="img/funfact.jpg" style="float: right; height: 300px; width:400px; margin-left: 20px; margin-bottom: 20px">
      </div>
    </div>
  </div>
</div>

 <div class="quote">
        <blockquote>
      “Executives should seek coaching when they feel that a change in behavior – either for themselves or their team members – can make a significant difference in the long-term success of the organization.”<br><br>
          <small><i>Marshall Goldsmith, Top selling author &amp; world’s # 1 Business Coach</i></small>
        </blockquote>
      </div>



<div class="iwc">
  <div class="container">
    <h1>Image with content layout</h1>
    <div class="row">
      <div class="col-md-4">
        <img src="img/funfact.jpg" style="float: left; height: 300px; width:400px; margin-right: 20px; margin-bottom: 20px">
      </div>
      <div class="col-md-8" style="padding-left: 50px">
        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
        <li>Vestibulum in sem ac dolor gravida vehicula quis sit amet massa.</li>
        <li>Phasellus sodales libero ac eros condimentum rutrum.</li>
        <li>Donec malesuada mi ut tellus vehicula, a dictum lectus ornare.</li>
        <li>Sed consectetur mauris in rutrum tempor.</li>
        <li>Donec mattis leo non faucibus dignissim.</li>
        <li>Quisque iaculis ligula ut mi pretium, vel efficitur est ullamcorper.</li>
        <li>Nam venenatis ante vel nulla commodo, ut dictum nibh interdum.</li>
        <br>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean purus tortor, lobortis non est nec, imperdiet feugiat ex. Integer quis sapien blandit, faucibus ante a, venenatis eros. Nam lobortis, dolor et ullamcorper sagittis, neque mauris aliquam felis, eu rutrum elit leo nec ex. Mauris sed congue enim. Nullam sagittis eget purus non sagittis. Vivamus at ultricies massa. Sed nec sollicitudin nisl. Fusce sit amet mi egestas, feugiat magna volutpat, lacinia leo. Sed ullamcorper sem tellus, sed mattis sem interdum at. Aenean ornare, magna sed consectetur sollicitudin.
      </div>
    </div>
  </div>
</div>


  <div class="sec4">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <h3>Lorem ipsum dolor sit amet lacinia orci.</h3>
              <div class="thatimg"></div>
              <p>Curabitur ultrices, diam at mattis maximus, ante est cursus mi, at facilisis diam lectus sit amet elit. Aenean non eros nec sapien euismod efficitur. Sed eu finibus justo. Aliquam pharetra, neque in pellentesque cursus, ante turpis finibus massa, vel elementum risus nibh in odio. Duis vestibulum nisi lacinia, posuere urna nec, egestas leo.</p>
            </div>
            <div class="col-md-3">
              <h3>Lorem ipsum dolor sit amet lacinia orci.</h3>
              <div class="thatimg"></div>
              <p>Curabitur ultrices, diam at mattis maximus, ante est cursus mi, at facilisis diam lectus sit amet elit. Aenean non eros nec sapien euismod efficitur. Sed eu finibus justo. Aliquam pharetra, neque in pellentesque cursus, ante turpis finibus massa, vel elementum risus nibh in odio. Duis vestibulum nisi lacinia, posuere urna nec, egestas leo.</p>
            </div>
            <div class="col-md-3">
              <h3>Lorem ipsum dolor sit amet lacinia orci.</h3>
              <div class="thatimg"></div>
              <p>Curabitur ultrices, diam at mattis maximus, ante est cursus mi, at facilisis diam lectus sit amet elit. Aenean non eros nec sapien euismod efficitur. Sed eu finibus justo. Aliquam pharetra, neque in pellentesque cursus, ante turpis finibus massa, vel elementum risus nibh in odio. Duis vestibulum nisi lacinia, posuere urna nec, egestas leo.</p>
            </div>
            <div class="col-md-3">
              <h3>Lorem ipsum dolor sit amet lacinia orci.</h3>
              <div class="thatimg"></div>
              <p>Curabitur ultrices, diam at mattis maximus, ante est cursus mi, at facilisis diam lectus sit amet elit. Aenean non eros nec sapien euismod efficitur. Sed eu finibus justo. Aliquam pharetra, neque in pellentesque cursus, ante turpis finibus massa, vel elementum risus nibh in odio. Duis vestibulum nisi lacinia, posuere urna nec, egestas leo.</p>
            </div>
          </div>
        </div>
      </div>

<div class="sec3">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h2>Lorem ipsum dolor sit amet.</h2>
              <p>Quisque tristique lacinia orci, id iaculis metus lobortis non. Duis rutrum risus vel urna elementum sagittis. Curabitur ultrices, diam at mattis maximus, ante est cursus mi, at facilisis diam lectus sit amet elit. Aenean non eros nec sapien euismod efficitur. Sed eu finibus justo. Aliquam pharetra, neque in pellentesque cursus, ante turpis finibus massa, vel elementum risus nibh in odio. Duis vestibulum nisi lacinia, posuere urna nec, egestas leo.</p>
            </div>
            
            <div class="col-md-6 image2">
              Curabitur ultrices, diam at mattis maximus, ante est cursus mi, at facilisis diam lectus sit amet elit.
              <button>Know more</button>

            </div>
          </div>
        </div>
      </div>


<div class="obj">
        <div class="container">
          <h1>PROGRAM OBJECTIVES</h1>
          <br>
          <div class="row">
            
            <div class="col-md-3">
              <img src="img/track.jpg" style="height: 30%">
            </div>
            
            <div class="col-md-9">
          <b>In the Executive Coaching Program, coach and coachee partner to: </b><br><br>
          <li>	Focus on achieving  specific goals, in pre-agreed upon timelines, varying from 1 month, 3 month and 6 month career and leadership goals.</li>
          <li>	Use assessments to understand leadership strengths and communication style </li>
          <li>	Create a custom plan: a 'roadmap' to the goals </li>
          <li>	Discover and practice new leadership skills </li>
          <li>	Resolve situational roadblocks that may emerge along the way. </li>
<br>
        The initial objectives for a coaching engagement are based on goals that are established in the first coaching  session. 
            </div>
          </div><br><br>      
          
          <h1>KEY EXPECTATIONS &amp; BENEFITS </h1>
          <h3>Expectations </h3>
        Based on the type of engagement chosen (1 month, 3 months or 6 months), the focus is on achieving program goals, while strengthening critical leadership and communication skills: <br>
          <li>	Focus on goal achievement, using the G-R-I-P model </li>
          <li>	Discover and practice new leadership skills </li>
          <li>	Overcome personal barriers and situational roadblocks.</li>
          <h3>Benefits</h3>
        The Executive Coaching typically results in the coachees and key stakeholders in the organization reporting the following outcomes: <br>
          <li>Improved leadership skills, confidence and presence </li>
          <li>Achievement of ‘stretch’ goals, and business results </li>
          <li>Improved ability to persuade, influence and negotiate for results </li>
          <li>Greater voice and visibility </li>
          <li>Enhanced authority and credibility </li>
          <li>Greater recognition and reward for accomplishments </li>
          <li>Career advancement, including promotions, and higher level projects </li>
          <li>Enhanced organizational awareness and ease with navigating politics.</li>

          
        </div>
      </div>

 <div class="quote">
        <blockquote>
      “Executives should seek coaching when they feel that a change in behavior – either for themselves or their team members – can make a significant difference in the long-term success of the organization.”<br><br>
          <small><i>Marshall Goldsmith, Top selling author &amp; world’s # 1 Business Coach</i></small>
        </blockquote>
      </div>

 <div class="excoa">
        <div class="container">
          <h1>The Executive Coaching Program</h1><br>
                    <img src="img/brain.jpg" style="float: left; height: 150px; width:250px; margin-right: 20px; margin-bottom: 20px">
          Kaleidoscope’s executive coaching program is primarily focused on delivering  leadership development coaching, crisis management consultations, psychological assessment and organizational development programs  using neuroscience, behavior science  and industry-best-practices based techniques.
<br><br>
All services are delivered directly by Kaleidoscope in a manner consistent with the individual’s and the organization’s specific needs, resources and goals.
<br>
          <hr>
          <b>Some of the key challenges faced by executives today that are addressed through the coaching are:</b>
          <br><br>
          <table style="width: 100%; color: #fff">
            <tr>
              <td>
                <b>Self-Perception</b><br><br>
-	Self-Regard<br>
-	Self-Actualization<br>
-	Emotional Self-Awareness
              </td>
              <td>
                <b>Stress Management</b><br><br>
-	Flexibility<br>
-	Stress Tolerance<br>
-	Optimism
              </td>
              <td>

                <b>Self-Expression</b><br><br>
-	Emotional Expression<br>
-	Assertiveness<br>
-	Independence
              </td>
              <td>
                <b>Decision Making</b><br><br>
-	Problem Solving<br>
-	Reality Testing<br>
-	Impulse Control
              </td>
              <td>

                <b>Interpersonal</b><br><br>
-	Relationships<br>
-	Empathy<br>
-	Social Responsibility
              </td>
            </tr>
          </table>
        </div>
      </div>
<div class="newabout">
      <div class="newmain">
        <div class="container">
        <h1>About us</h1>
        <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sapien libero, iaculis non malesuada eu, ultricies et augue. Suspendisse imperdiet lorem nec augue aliquam, nec pulvinar risus rhoncus.</h3>
        </div>
      </div>
</div>
    
    

    <div id="footer">
     COPYRIGHT &copy; 2018
    </div>




</body>
</html>

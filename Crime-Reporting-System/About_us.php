<!DOCTYPE html>
<html>
<head>
    
	<title>About us</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="home.css">
  <style>
   body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 20px;
  background-image: url('about.jpg');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  overflow: hidden;
  color: white; /* Set body text color to white */
}


img.full-page-fixed {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1; /* Place the image behind other content */
  }


.container {
  max-width: 100%;
  margin:  0 auto;
  
}

.container1 {
  position: fixed;
    top: 50px;
    left: 0;
    width: 100%;
   height: calc(100vh - 50px);   /*Full viewport height */
    overflow-y: auto; /* Enable scrollbar when content exceeds height */
    scrollbar-width: none;
    padding-bottom: 40px; 
}

.container1::-webkit-scrollbar {
    display: none; /* Hide scrollbar in Webkit (Chrome, Safari, Opera) */
  }

/* Removed color: white; for headings */

p {
  line-height: 1.6;
  color: black; /* Set paragraph text to white */
}



    h1 {
      text-align: center;
      margin-bottom: 20px;
    }

    h2 {
      margin-top: 20px;
      margin-bottom: 5px;
      text-align: left;
      padding: 50px;
      color: white; /* Set headings to white */
    }

    p {
      text-align: center;
      line-height: 1.6;
      color: black; /* Set paragraph text to white */
    }

    .about-us-text {
      width: 400px; /* Adjust width as needed */
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px; /* Add border radius for rounded corners */
      background-color: #f5f5f5;
    }

    .team-members {
      text-align: center;
      margin-top: 30px;
    }

    .team-member {
      display: inline-block;
      width: 270px; /* Adjust width as needed */
      height: 270px; /* Adjust height as needed */
      margin: 10px;
      padding: 20px;
      background: rgba(255, 255, 255, 0.8);
      border-radius: 5px; /* Add border radius for rounded corners */
      vertical-align: top;
      text-align: left;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.2); /* Add a slight shadow effect */
      color: black; /* Set text color inside team member boxes to black */
    }

    /* CSS for the movement effect */
    .team-member:hover {
      transform: translateX(10px); /* Move the text box 10px to the right on hover */
    }

    .mentor {
      margin-top: 30px;
    }

    /* Center the UML diagrams */
    .uml-diagrams {
      text-align: center;
      margin-top: 30px;
      font-size: 24px; /* Adjust the font size as needed */
      color: white; /* Set UML diagrams text to white */
    }

    /* Style for the arrow */
    .arrow {
      color: blue;
      text-decoration: none;
      transition: transform 0.3s; /* Add a transition for smooth movement */
    }

    /* CSS for the arrow hover effect */
    .arrow:hover {
      transform: translateX(5px); /* Move the arrow 5px to the right on hover */
    }
  </style>
    
</head>
    
<body>

 <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="home.php"><b>Crime Portal</b></a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php">Home</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="userlogin.php">User Login  <i class="fa fa-user"></i></a></li>
        <li><a href="official_login.php">Official Login  <i class="fa fa-user"></i></a></li>
        <li><a href="About_us.php">About us  <i class="fa fa-user"></i></a></li>
      </ul>
    </div>
  </div>
 </nav>

 <img class="full-page-fixed" src="about.jpg" alt="Background Image">

 <div class="container1">
    <h1>About Us</h1>
    <p style="color: white;">Welcome to our Crime Data Storage and Analysis platform. We are a team of dedicated individuals committed to providing valuable insights into crime data through efficient storage and analysis techniques.</p>


    <h2>Our Team</h2>
    <div class="team-members">
      <div class="team-member">
        <h3>Vinitha</h3>
 <p>Role: Developer</p>
                <p>Vinitha is responsible for overseeing the development and implementation of our crime data storage and analysis platform. She has a background in software engineering and data analysis.</p>
            </div>
            <div class="team-member">
                <h3>Pravalika</h3>
                <p>Role: Developer</p>
                <p>Pravalika leads the development team, ensuring that our platform is robust, secure, and user-friendly. She specializes in PHP and database management.</p>
            </div>
            <div class="team-member">
                <h3>Manaswini</h3>
                <p>Role: Developer</p>
                <p>Manaswini is responsible for analyzing crime data and generating valuable insights. She has expertise in statistical analysis and data visualization.</p>
            </div>
            <div class="team-member">
                <h3>Priya</h3>
                <p>Role: Developer</p>
                <p>Priya designs the user interface and experience of our platform, ensuring that it is intuitive and visually appealing. She has a background in graphic design and user psychology.</p>
            </div>
        </div>
  <h2 class="mentor">Our Mentor</h2>
        <div class="team-members">
            <div class="team-member">
                <h3>Dr. Radhika</h3>
                <p>Role: Technical Advisor</p>
                <p>Dr. Radhika provides technical guidance and expertise, ensuring that our platform meets industry standards and best practices. She is a professor of computer science and Engineering Department with a focus on data analysis.</p>
            </div>
        </div>

        <!-- UML Diagrams with arrow -->
        <div class="uml-diagrams">
            UML Diagrams <a href="uml_diagrams.html" class="arrow">&#x2192;</a>
        </div>
    </div>
 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
 <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
</body>
</html>
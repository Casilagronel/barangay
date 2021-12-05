<html>
<head>
    <meta charset="UTF-8">
    <title>Barangay Information System</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    
    <script src="../js/jquery-1.12.3.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
  
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">

    
    <link href="../css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <link href="../js/morris/morris-0.4.3.min.css" rel="stylesheet" type="text/css" />
    
    
    <!-- <link href="../css/AdminLTE.css" rel="stylesheet" type="text/css" /> -->

    <link href="../css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="../css/select2.css" rel="stylesheet" type="text/css" />
    <script src="../js/jquery-1.12.3.js" type="text/javascript"></script>

<style>
    :root{
    --yellow:#f9d806;
    --light-yellow:#ffee80;
    --black:#130f40;
    --light-color:#666;
    --box-shadow:0 .5rem 1rem rgba(0,0,0,.1);
    --border:.1rem solid rgba(0,0,0,.1);
}

*{
    font-family: 'Poppins', sans-serif;
    margin:0; padding:0;
    box-sizing: border-box;
    outline: none; border:none;
    text-decoration: none;
    text-transform: capitalize;
    transition: .2s linear;
}

html{
    font-size: 62.5%;
    overflow-x: hidden;
    scroll-padding-top: 7rem;
    scroll-behavior: smooth;
}

section{
    padding:2rem 9%;
}
    .services .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
    gap:1.5rem;
}

.services .box-container .box{
    padding:2rem;
    border-radius: .5rem;
    box-shadow: var(--box-shadow);
    border:var(--border);
    text-align: center;
}

.services .box-container .box i{
    height:6rem;
    width:6rem;
    line-height: 6rem;
    border-radius: 50%;
    font-size: 2.5rem;
    margin-bottom: 1rem;
    background:var(--yellow);
    color:var(--black);
}

.services .box-container .box h3{
    font-size: 2.2rem;
    color:var(--black);
}

.services .box-container .box p{
    line-height: 1.8;
    padding:1rem 0;
    font-size: 1.4rem;
    color:var(--light-color);
}

.services .box-container .box:hover{
    background: var(--black);
}

.services .box-container .box:hover h3{
    color:#fff;
}

.services .box-container .box:hover p{
    color:#eee;
}
</style>



</head>
<body>
<nav class="navbar navbar" style="border-radius:0px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><img alt="Brand" src="../img/looc_logo.jpg" style="width:50px; margin-top:-15px; "></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="font-size: 18px;">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="../login.php">Admin</a></li>
        <!-- <li><a href="../pages/resident/login.php">Resident</a></li> -->
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
   
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

   
    <div class="carousel-inner">
        <br>
        <br>

      <div class="item active">
        <center><img src="../img/mission_img.png" style="width: 700px; height: 500px;"></center>
        <div class="carousel-caption">
        </div>
      </div>

      <div class="item">
        <center><img src="../img/vision_img.png" style="width: 700px; height: 500px;"></center>
        <div class="carousel-caption">
        </div>
      </div>
    
      <div class="item">
        <center><img src="../img/goals_img.png" style="width: 700px; height: 500px;"></center>
        <div class="carousel-caption">
        </div>
      </div>
      <br>
      <br>
      <br>
      <br>
      <br>
  
    </div>

    
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<br>
<br>
<br>
<br>

<section class="services" id="services">

    <center><h1 class="heading"> our <span>Barangay Officials</span> </center></h1>
    <br>
    <div class="box-container">

        <div class="box">
           
            <img src="../img/female_icon.jpg" alt="" height="100px" width="100px">
            <h3>JOCELYN M. GUEVARRA</h3>
            <p>Brgy. Captain</p>
            
        </div>

        <div class="box">
            <img src="../img/male_icon.jpg" alt="" height="100px" width="100px">
            <h3>GREGORIO A. DELA CRUZ</h3>
            <p>Committee on Human Rights, Peace and Order</p>
            
        </div>

        <div class="box">
            <img src="../img/male_icon.jpg" alt="" height="100px" width="100px">
            <h3>ANASTACIO M. DESEPIDA</h3>
            <p>Committee on Environmental Protection</p>
            
        </div>

        <div class="box">
            <img src="../img/male_icon.jpg" alt="" height="100px" width="100px">
            <h3>BENITO U. OGOT</h3>
            <p>Committee on Appropriations, Bids & Awards </p>
            
        </div>

        <div class="box">
            <img src="../img/male_icon.jpg" alt="" height="100px" width="100px">
            <h3>MEYNARDO E. ANTAZO</h3>
            <p>Committee on Sports</p>
            
        </div>

        <div class="box">
            <img src="../img/male_icon.jpg" alt="" height="100px" width="100px">
            <h3>FLORENCIO  S. VILLALUNA</h3>
            <p>Committe on Public Works Livelihood and Cooperative Celebrations</p>
            
        </div>

        <div class="box">
            <img src="../img/male_icon.jpg" alt="" height="100px" width="100px">
            <h3>ESTELITO R. DERAIN</h3>
            <p>Committee on Education</p>
        </div>

        <div class="box">
            <img src="../img/male_icon.jpg" alt="" height="100px" width="100px">
            <h3>EDISON A. BOTONES</h3>
            <p>Committee on Health</p>
        </div>

        <div class="box">
            <img src="../img/male_icon.jpg" alt="" height="100px" width="100px">
            <h3>EDILBERTO GAA</h3>
            <p>Barangay Treasurer</p>
        </div>

        <div class="box">
            <img src="../img/female_icon.jpg" alt="" height="100px" width="100px">
            <h3>TERESITA L. DELIMA</h3>
            <p>Barangay Secretary</p>
        </div>

        <div class="box">
            <img src="../img/male_icon.jpg" alt="" height="100px" width="100px">
            <h3>CYRIN JAKE VILLAFRANCA</h3>
            <p>SK Chairman</p>
        </div>

    </div>

</section>

<div class="wrapper row-offcanvas row-offcanvas-left">

<div class="breadcrumb">
    <center><img src="../img/img01.jpg" style="width: 500px; height: 300px; "></center>

    <section class="p-5 tm-container-outer tm-bg-gray">            
      <div class="container">
        <div class="row">
          <div class="col-xs-12 mx-auto tm-about-text-wrap text-center">                        
            <h2 class="text-uppercase mb-4">Welcome to <strong>Barangay Looc</strong> !</h2>
            <p class="mb-4" style="font-size: 18px; text-align: justify;">The name Looc was derived from a certain named called "Kawiliwili". 
                      During the Spanish period, many people from other places lived in Looc. 
                      When they reached the place, they fell in love with it and they stayed there for good. 
                      It was so called Looc for it was sorrounded by mountains and the sky seemed to be very near. 
                      Thus, the people compared it to a bag. Looc is a small place but it has beautiful sceneries. 
                      The people are peace-loving and happy. They lived on farming. The land is planted with corn and sugarcane. 
                      At present, Looc, being the heart of the sitios within the jurisdiction and its accesibility to the neighboring sitios made it possible for the school to be established there.</p>
                                                        
          </div>
        </div>
      </div>

    </section>
</div>

</div>

</body>


<script src="../js/alert.js" type="text/javascript"></script>
<script src="../js/bootstrap.min.js" type="text/javascript"></script>

<script src="../js/morris/raphael-2.1.0.min.js" type="text/javascript"></script>
<script src="../js/morris/morris.js" type="text/javascript"></script>
<script src="../js/select2.full.js" type="text/javascript"></script>

<script src="../js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="../js/dataTables.buttons.min.js" type="text/javascript"></script>
<script src="../js/buttons.print.min.js" type="text/javascript"></script>

<script src="../js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>


<script type="text/javascript">
  $(function() {
      $("#table").dataTable({
         "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 0,5 ] } ],"aaSorting": []
      });
  });
</script>
</html>
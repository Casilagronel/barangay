<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Brgy. Officials</title>
	<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

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
	<section class="services" id="services">

    <center><h1 class="heading"> our <span>Brgy. Officials</span> </center></h1>
    <br>
    <div class="box-container">

        <div class="box">
           
            <img src="../img/female_icon.jpg" alt="" height="100px" width="100px">
            <h3>JOCELYN M. GUEVARRA</h3>
            <p>Brgy. Captain</p>
            <!-- <a href="#" class="btn"> read more</a> -->
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
</body>
</html>
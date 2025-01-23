<?php include_once('header.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="asset/css/style.css">
    <title>FieldTech</title>
</head>
<body>
    <div class="padding">    
    <section id="Shopping Cart" class="Shopping Cart" >
        <div class="about sec">
         <div class="l-ab">
             <img src="asset/img/php.png" alt="" class="ab-img">
         </div>
         <div class="l-ab">
             <h2>About FieldTech</h2>
             <div class="u-ln"></div>
             <p>The first popular markup language was the Generalized Markup Language (GML),
                 developed by IBM in the 1960s. The International Organization for Standardization (ISO) took up the challenge of creating markup languages and produced the Standard Generalized Markup Language (SGML), mainly based on GML, in the 1980s.
                 <span id="dots">.....</span><span id="more">             

             The first popular markup language was the Generalized Markup Language (GML),
                 developed by IBM in the 1960s. The International Organization for Standardization (ISO) took up the challenge of creating markup languages and produced the Standard Generalized Markup Language (SGML), mainly based on GML, in the 1980s.            
             The first popular markup language was the Generalized Markup Language (GML),
                 developed by IBM in the 1960s. The International Organization for Standardization (ISO) took up the challenge of creating markup languages and produced the Standard Generalized Markup Language (SGML), mainly based on GML, in the 1980s.                             
             first popular markup language was the Generalized Markup Language (GML),
                 developed by IBM in the 1960s. The International Organization for Standardization (ISO) took up the challenge of creating markup languages and produced the Standard Generalized Markup Language (SGML), mainly based on GML, in the 1980s.
             The first popular markup language was the Generalized Markup Language (GML),
                 developed by IBM in the 1960s. The International Organization for Standardization (ISO) took up the challenge of creating markup languages and produced the Standard Generalized Markup Language (SGML), mainly based on GML, in the 1980s.
                </span></p>
                 <button onclick="AboutUs()" id="MoreBtn" class="g-btn">Explore more..</button>   
         </div>
      
     </section>
  </div>
</body>
<script>
    function AboutUs(){
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("MoreBtn");

    if(dots.style.display==="none"){
        dots.style.display = "inline";
        btnText.innerHTML ="Explore more..";
        moreText.style.display = "none";
    
    }else{
        dots.style.display ="none";
        btnText.innerHTML = "Less Explore";
        moreText.style.display = "inline";
    }
}
</script>
</html>
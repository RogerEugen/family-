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
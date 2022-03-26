
document
.querySelector(".search button").addEventListener("click", function(){

    var country = document.getElementById("country").value
    
    var url = "https://api.covid19api.com/dayone/country/"+ country

    fetch(url)
    .then((response) => response.json())
    .then((data) => {
        console.log(data)
        var length = data.length
        var index = length -1
        var active = document.getElementById("active")
        var recovered = document.getElementById("recovered")
        var confirmed = document.getElementById("confirmed")
        var deaths = document.getElementById("deaths")
        
        confirmed.innerHTML="";
        active.innerHTML="";
        deaths.innerHTML="";
        recovered.innerHTML="";
        

        active.append(data[index].Active)
        recovered.append(data[index].Recovered)
        confirmed.append(data[index].Confirmed)
        deaths.append(data[index].Deaths)
        
    
    })
});


let slideIndex = 0;
showSlides();
            
function showSlides() {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 6000); // Change image every 2 seconds
}




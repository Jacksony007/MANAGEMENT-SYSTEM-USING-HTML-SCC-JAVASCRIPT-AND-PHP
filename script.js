 let circularProgress = document.querySelector(".circular-progress"),
    progressValue = document.querySelector(".progress-value");

let progressStartValue = 0,    
    progressEndValue = 95,    
    speed = 100;
    
let progress = setInterval(() => {
    progressStartValue++;

    progressValue.textContent = `${progressStartValue}%`
    circularProgress.style.background = `conic-gradient(#7d2ae8 ${progressStartValue * 3.6}deg, #ededed 0deg)`

    if(progressStartValue == progressEndValue){
        clearInterval(progress);
    }    
}, speed);

// Open the default tab on page load
document.getElementById("defaultOpen").click();

// Function to open the selected tab
function openTab(evt, tabName) {
var i, tabcontent, tablinks;
tabcontent = document.getElementsByClassName("tabcontent");
for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].className = tabcontent[i].className.replace(
    " active",
    ""
    );
}
tablinks = document.getElementsByClassName("tablinks");
for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
}
document.getElementById(tabName).className += " active";
evt.currentTarget.className += " active";
}
   
$(document).ready(function(){
  $("#LinkServices").click(function() {
      window.location.replace("/Users/miles/Desktop/GitHub/VanHandelAutomotive/pages/services.html");
  });

  $("#LinkAbout").click(function() {
    window.location.replace("/Users/miles/Desktop/GitHub/VanHandelAutomotive/pages/about.html");
  });
    $("#LinkDirections").click(function() {
    window.location.replace("/Users/miles/Desktop/GitHub/VanHandelAutomotive/pages/about.html");
  });
    $("#LinkContact").click(function() {
    window.location.replace("/Users/miles/Desktop/GitHub/VanHandelAutomotive/pages/about.html");
  });
})/*end doc.ready*/;

function scrollToThis(thing){ /*input "top" for scroll to top */
  if (thing=="top"){
    thing="body";
  }
  $("html,body").animate({"scrollTop":$(thing).offset().top}, 200);
    
};
function openTeam(evt, teamName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(teamName).style.display = "block";
    evt.currentTarget.className += " active";
}
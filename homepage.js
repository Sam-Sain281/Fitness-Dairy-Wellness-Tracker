function openPage(namePage, element, color) {
    // Hide all elements with class="tabCnt" by default
    var i;
    var tabcontent;
    var tablink;

    tabcontent = document.getElementsByClassName("tabcontent");

    for(i = 0; i < tabcontent.length; i++)
        tabcontent[i].style.display = "none";
    

    // Remove background color of the tabs
    tablink = document.getElementsByClassName("tablink");

    for(i = 0; i < tablink.length; i++)
        tablink[i].style.backgroundColor = "";
    
    // Show tab content
    document = getElementById(pageName).style.display = "block";

    element.style.backgroundColor = color;
}

    document.getElementById("defaultOpen").click();


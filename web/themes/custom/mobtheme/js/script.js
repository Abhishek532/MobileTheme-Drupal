console.log("FILE");
btn=document.getElementById("mybutton");
var q={{content.field_availability}};

if (q == "Currently not available"){
    btn.style.visibility = "hidden";
}
else{
    console.log("NO");
}
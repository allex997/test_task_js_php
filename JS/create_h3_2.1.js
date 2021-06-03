$(document).ready(function(){
    $("p").after("<h3>Привет мир</h3>");
    $("h3:first").append(" !!!").css("background","green").appendTo("html");
});

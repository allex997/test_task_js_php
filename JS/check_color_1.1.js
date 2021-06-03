const arr_color = ["red", "orange", "yellow","green","blue","navy","purple"];
var index_color = 0;

var set_color = button => button.style.background = arr_color[++index_color>6 ? index_color=0 : index_color];
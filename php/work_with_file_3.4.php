<?php
function write_in_file(){
$file_data = "Увы, но: \n";
$file_data .= file_get_contents("txt_files\\1.txt");
file_put_contents("txt_files\\1.txt", $file_data);
}
//echo '$("#write_file").click(function(){' .write_in_file(). '}';
if(isset($_POST["write_file"])){ write_in_file(); }
if(isset($_POST["rename_file"])){ rename("txt_files\\2.txt", "txt_files\\new_name.txt"); }
if(isset($_POST["delete_file"])){ unlink("txt_files\\3.txt"); }
if(isset($_POST["move_file"])){ mkdir("txt_files\\new_folder", 0700);rename("txt_files\\4.txt", "txt_files\\new_folder\\4.txt"); }
if(isset($_POST["exis_file"])){ print file_exists ( "txt_files\\5.txt ") ? "5.txt существует ": "5.txt не существует "; }
?>

<?php
function write_in_file(){
$file_data = "Увы, но: \n";
$file_data .= file_get_contents("txt_files\\1.txt");
file_put_contents("txt_files\\1.txt", $file_data);
}

write_in_file();
rename("txt_files\\2.txt", "txt_files\\new_name.txt");
unlink("txt_files\\3.txt");
mkdir("txt_files\\new_folder", 0700);rename("txt_files\\4.txt", "txt_files\\new_folder\\4.txt");
print file_exists ( "txt_files\\5.txt ") ? "5.txt существует ": "5.txt не существует ";

?>
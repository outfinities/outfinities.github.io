<?php 

 

function tree($directory) 
{ 
$mydir=dir($directory); 
echo "<ul>"; 
while($file=$mydir->read()){ 
if((is_dir("$directory/$file")) AND ($file!=".") AND ($file!="..")){ 
echo "<li><font color='#ff00cc'><b>$file</b></font></li>"; 
tree("$directory/$file"); 
}else{ 
echo "<li><a href=$directory/$file>$file</a></li>"; 
} 
} 
echo "</ul>"; 
$mydir->close(); 
} 
//start the program 
echo "<h2>目录为粉红色</h2>"; 
 
tree("."); 
?> 

<?php
       echo "<li>download files list<li>";
       if ($handle = opendir("./"))
       {
          while (1)
          {
                $ufile = readdir($handle);
                if ($ufile == "") break;
                if (($ufile!=".")&($ufile!= ".."))
                {
                      $tfile=iconv('GB2312', 'UTF-8', $ufile);
                      echo "<li><a href='".$config_basedir_file.$tfile."'>URL+".$tfile."</a></li>";
                }
          }
    }
?>

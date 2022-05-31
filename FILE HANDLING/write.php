<?php
$district=fopen("District.txt",'w') or die("Unable to write the file");
$dist1="101,01,GASABO\n";
fwrite($district,$dist1);
$dist2="101,01,KICUKIRO\n";
fwrite($district,$dist2);
$dist3="101,01,NYARUGENGE\n";
fwrite($district,$dist3);
?>
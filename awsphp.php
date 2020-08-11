<?php
/*
This file is intended for Web developer and Android developer to recieve AWS api gateway
author @AungMyatMo
You can see test awsuserdomainname,this is not work for You
You should use real url* :)
*/
$xml = simplexml_load_file("https://awsuserdomain.s3-ap-southeast-1.amazonaws.com/");
$json = json_encode($xml);
#decode json file as array
$decode = json_decode($json,true);
$i = 0;
//echo print_r($decode); 
#(To know json or array)
#loop to get content
foreach ($decode as $key=>$value){
foreach ($value as $k=>$v){
  $link = $v["Key"]."<br>";
?>
<!-- I use php embed system -->
<h6><? echo $link; ?></h6>
<a href="https://awsuserdomain.s3-ap-southeast-1.amazonaws.com/<? echo $link; ?>"><? echo $link; ?></a>
<?php
}
}
?>

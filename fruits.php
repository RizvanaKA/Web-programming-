<?php
$cricket=['Abhishek Sharma','Ahmed KK','Murali Vijay'];
arsort($cricket);
foreach($cricket as$cri)
{
echo "indian crickter ".$cri."<br>";
}
asort($cricket);
foreach($cricket as $cri)
{
echo "ascending ".$cri."<br>";
}
print_r($cricket);
?>
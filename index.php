<!DOCTYPE html>

<html>
<style>

svg {
    position: relative;
    top: 49px;
    left: 41px;

}
</style>
<body>
<div id="fundo" style="
    width: 136px;
    height: 136px;position: absolute;"
>

<img src="./img/tudo.svg"/>
</div>

<div id="container" style="
    width: 136px;
    height: 136px;position: absolute;"
></div>
<div id="codigo" style="
    width: 136px;
    height: 136px;position: absolute;"
></div>
<script src="dist/qrcode.js"></script>
<?php


$content = 'https://bananatag.com.br';
$padding = 0;
$width = 55;
$height = 55;
$color = "#000000";
$background = "#FDBC38";


if(isset($_GET["content"]))
{
  $content = $_GET["content"];
}
if(isset($_GET["padding"]))
{
  $padding = $_GET["padding"];
}
if(isset($_GET["width"]))
{
  $width = $_GET["width"];
}
if(isset($_GET["height"]))
{
  $height = $_GET["height"];
}
if(isset($_GET["color"]))
{
  $color = $_GET["color"];
}
if(isset($_GET["background"]))
{
  $background = $_GET["background"];
}

//echo $content;
?>

<script>
var qrcode = new QRCode({   
  content: "<?php echo $content ?>",
  padding: "<?php echo $padding ?>",
  width: "<?php echo $width ?>",
  height: "<?php echo $height ?>",
  color: "<?php echo $color ?>",
  background: "<?php echo $background ?>",
  join: true,
  });
var svg = qrcode.svg();
document.getElementById("container").innerHTML = svg;




</script>
</body>
</html>
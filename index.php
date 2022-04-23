<?php
if(isset($_GET['puzzle'])){
  $folder = $_GET['puzzle'];
}else{
  $folder = 'qu';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drag and Drop game</title>

<link rel="stylesheet" href="style.css">
<script src="script.js"></script>

</head>

<body>
<form action="#" method="get">
<label for="pu">انتخاب پازل:</label>

<select name="puzzle" id="pu">
  <option value="qu">قو</option>
  <option value="qu2">قو2</option>
  <option value="paris">پاریس</option>
  <option value="barg">برگ</option>
</select>

  <input type="submit" value="تغییر پازل">
</form>

<div class="wrapper"> 
   <table class="puzzle-container">
      <?php 
        $rows=2;
        $cul=3;
        for($i=0;$i<=$rows-1;$i++){
          ?>
          <tr>
          <?php for($j=$i*$cul+1;$j<=$i*$cul+$cul;$j++){?>
            <td><div id="div<?php echo $j;?>" class="answer-container" ondrop="drop(event)" ondragover="allowDrop(event)"></div></td>
            <?php }?>
            </tr>
          <?php }?>
    </table>
    
    <div class="images">
        <?php for($i=1;$i<=6;$i++){
          ?>
          <img  class="imagewidth" ontouchmove="myFunction(this.id)" src="img/<?php echo $folder;?>/<?php echo $i;?>.png" draggable="true" ondragstart="drag(event)" id="drag<?php echo $i;?>">
          <?php }?>
    </div>



</div>
</body>
</html>

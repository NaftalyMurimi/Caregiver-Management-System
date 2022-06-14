<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body>
  <?php
  function passFunc($len, $set = "")
    {
      $gen = "";
      for($i = 0; $i < $len; $i++)
        {
          $set = str_shuffle($set);
          $gen.= $set[0]; 
        }
      return $gen;
    } 
    
?>
<div class="form-group">
                      <?php 
                          $change =  passFunc(8, 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890');
                      ?>  
                        <label>Password</label>
  <input class="form-control"  type = "text" name = "password" id = "pass" required="true" readonly="readonly" />
  <input type = "button" value = "Generate" onclick = "document.getElementById('pass').value = '<?php echo $change?>'">
                      </div>
</body>
</html>
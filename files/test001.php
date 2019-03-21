<?php
/* echo '<option value="'$file'"'($pageImage == $file ? "selected" : "")'>' $file'</option>'; 
 scandir ( string $directory [, int $sorting_order = SCANDIR_SORT_ASCENDING [, resource $context ]] ) : array;
*/?>
 
 <select name="s1">
      <option value="" selected="selected">-----</option>
  <?php 
       foreach(glob(dirname(__FILE__) . '/files/*') as $filename){
       $filename = basename($filename);
       echo "<option value='" . $filename . "'>".$filename."</option>";
    }
?>

</select> 
<?php
/* echo '<option value="'$file'"'($pageImage == $file ? "selected" : "")'>' $file'</option>'; 
 scandir ( string $directory [, int $sorting_order = SCANDIR_SORT_ASCENDING [, resource $context ]] ) : array;

 
 <select name="s1">
      <option value="" selected="selected">-----</option>
  <?php 
       foreach(glob(dirname(__FILE__) . 'tutorial/*') as $filename){
       $filename = basename($filename);
       echo "<option value='" . $filename . "'>".$filename."</option>";
    }
?>

</select> 
?>

<?php
// here starts the php
 if (isset($_POST['show_dowpdown_value'])) {
  
    echo $_POST['dowpdown']; // this will print the value if downbox out
 }
?>


# http://www.tech-evangelist.com/2009/02/28/display-directory-contents-with-select/
<select name="TutorialFiles">
<option value="filename"> Select File :
<?php 
$dirPath = dir('.');
while (($file = $dirPath->read()) !== false)
{
   echo "<option value=\"" . trim($file) . "\">" . $file . "\n";
}
$dirPath->close();
echo $filename;
?>
</select> 

<select name="level">
    <?php
    foreach (glob("../images/page_images/*.{jpg,gif}") as $filename) {
        echo "<option value='" . $filename .">" . $filename . "</option>"; 
    }
    ?>
    </select>
*/
?>
<select name="level">
    <?php
    foreach (glob("*") as $filename) {
        echo "<option value='" . $filename .">" . $filename . "</option>"; 
    echo $filename;    
    }
    ?>
</select>    
<?php

// configuration
$ThisFile = 'myeditor.php';
$EditThisFile = 'index.html';
$name='index-back_'.date('m-d-Y_hia').'.html';
echo "Original index,html backed up as ",$name;
copy($EditThisFile, $name);
// Verify the form was submitted
if (isset($_POST['text']))
{
    // save the contents submitted
    file_put_contents($EditThisFile, $_POST['text']);

    // redirect back to editor.php
    header(sprintf('Location: %s', $ThisFile));
    printf('<a href="%s">Moved</a>.', htmlspecialchars($url));
    printf ($Location);
    exit();
}

// read $file
$text = file_get_contents($EditThisFile);

?>
<!-- HTML form -->
<style>
textarea{
	margin-left: auto;
	margin-right; auto:
}
</style>
<form action="" method="post">
<textarea name="text"><?php echo htmlspecialchars($text) ?></textarea>
<input type="submit" />
<input type="reset" />
</form>
<br /><br />
<a style="font-size:24px;" href= "index.html">HOME</a>

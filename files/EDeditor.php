<?php

// configuration
$ThisFile = 'EDeditor.php';
$EditThisFile = 'myeditor.php';

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
.texta{
	margin-left: auto;
	margin-right: auto:
    width: 65%;
    height: auto;
    min-height: 100px;




}
</style>
<form action="" method="post">
<textarea class="texta" name="text"><?php echo htmlspecialchars($text) ?></textarea>
<input type="submit" />
<input type="reset" />
</form>

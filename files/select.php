<?php
function get_file_list()
                {
                $filelist = array();
                $dir = new DirectoryIterator(dirname(".*"));
                $numfiles =0;
                foreach ($dir as $afile)
                                {
                                if(!$afile->isDot())
                                                {
                                                //echo  $afile->getFilename();
                                                //echo "\n";
                                                if(1 == preg_match("/filename-to-be/i" , $afile->getFilename()))
                                                                {
                                                                $filelist[$numfiles] = $afile->getFilename();
                                                                echo "<option name=\"val\" value=\"" . $filelist[$numfiles] . "\">" . $filelist[$numfiles] . "</option>\n";
                                                                $numfiles++;
                                                                }
                                                }
                                }
                sort($filelist);
                print_r($filelist);
                }
?>

<form action="myeditor.php" method="get">
        <select name="undownloadfile">
                <option value="">- Select File -
                <?php get_file_list(); ?>
        </select>
        <input id="inputButton" type="submit" value="Continue" />
</form>
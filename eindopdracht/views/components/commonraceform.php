<!-- ----------------------------------------------------------------------FORM------------>

<?php
if (isset($_POST['commonrace'])) {
    $dndrace = Homebrew::setHomebrew();
    return;
} ?>



<div class="centertext">
    <form method="post">
        <!--action="..src/includes/Homebrew.php"-->
        <label for="commonrace"><b>Enter the specific race name you want to generate or enter a homebrew race, and press ENTER</b><br></label>
        <input type="text" name="commonrace" id="commonrace" placeholder="Example: Orc"> <br>
        <p>Or click the button below to randomly generate a character.</p>
        <button type="submit" class="setcommonrace" name="setcommonrace" id="setcommonrace">RNG<br> <span class="whitetext">an NPC</span></button>
        <!--------------------------------------------------------------------------------------------GENERATED CODE PARAGRAPH-->
        <p class="generatedcode"><?php print Homebrew::echoHomebrew($dndrace) ?><br><b><?php echo $randomizednpcresult ?></b></p><br>
    </form>
</div>


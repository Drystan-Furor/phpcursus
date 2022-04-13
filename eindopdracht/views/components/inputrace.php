<!-- ----------------------------------------------------------------------FORM------------>
<div class="centertext">
    <form method="post">
        <label for="commonrace"><b>Enter a race you want to generate or enter a homebrew race, and press ENTER</b><br></label>
        <input type="text" name="commonrace" id="commonrace" placeholder="Example: Orc"> <br>
        <p>Or click the button below.</p>
        <button type="submit" class="setcommonrace" name="setcommonrace" id="setcommonrace">RNG<br> <span class="whitetext">an NPC</span></button>
        <!--------------------------------------------------------------------------------------------GENERATED CODE PARAGRAPH-->
        <p class="generatedcode"><?php echo $homebrewed ?><br><b><?php echo $randomizednpcresult ?></b></p><br>
    </form>
</div>
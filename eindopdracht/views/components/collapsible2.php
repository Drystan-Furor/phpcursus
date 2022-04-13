<!--collapsible ---------------------------------------------------------------------------------->
<div class="wrap-collabsible">
    <input id="collapsible2" class="toggle" type="checkbox">
    <label for="collapsible2" class="lbl-toggle"><?php echo $label;?></label>
    <div class="collapsible-content">
        <div class="content-inner">
            <ul class="dndraces" id="dndraces">
                <?php foreach ($dndraces as $dndrace) : ?>
                    <a href="https://www.dndbeyond.com/races">
                        <b><?php echo $dndrace ?></a>, </b>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
<!--collapsible ---------------------------------------------------------------------------------->
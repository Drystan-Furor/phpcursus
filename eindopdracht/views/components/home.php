<h1 class="rngcenter">D&D <br><span class="whitetext">Random NPC Generator</span></h1>

<?php $label = "More Information"; ?>

<?php $collapsibleContent = '                <p id="thisisit">
                    If you ever played D&D you might have noticed this does not go without social encounters.
                    Being a <a href="https://en.wikipedia.org/wiki/Dungeon_Master">Dungeon Master (DM)</a> is a challenge.
                    We have to take time and prepare a game session, but we cannot prepare everything that happens, so sometimes we improvise. However, with great improvisation comes great responsibility: <b>details.</b></p>
                <p>
                    Trough personal experience I realized that things would be easier making lists of details and using dice to randomly decide what <em>details</em> would fill my blanks.<br>
                    So I set out to write one page after another with random details that do not impact the story of a DM, like a <a href="https://www.reddit.com/r/d100/comments/l2oo00/d100_familiar_behavior/">D100 List: Familiar Behavior</a><br>
                    This led me to <a href="https://www.dndspeak.com/">a marvellous website with more D100 lists</a>.</p>
                <p>
                    After learning to write code based on my personal development plan, I realized I could use code to make more D100 lists beyond the scope of 100, and if I would write the code I would no longer need books, notes, notepads or dices to
                    prepare details. No longer would I remain inspiration-less or bland when my players would meet a new character.<br>
                    Inmagine, with one click of the mouse, a script would roll all dices and combine all results into a small text block, reading it out loud would give a detailed, unqique yet fully randomized NPC. So next time my party walks into a tavern
                    and ask the DM what people are inside, we do not have to come up on the spot with a memorable or less memorable character. Click the button and see who they meet!<br>
                </p>'; ?>

<?php require 'collapsible1.php' ?>


<h2 class="rngh2">RNG Tool to create a detailed npc as fast as possible.</h2>
<div class="greeting">
    <h3></h3>
</div>

<p class="centeredpar">
    To facilitate homebrew you have the option to enter your custom race name, or choose to enter a race name from the <a href="https://www.dndbeyond.com/races">DnD page</a>. <br>
    If nothing is entered you are giving the generator a chance to randomly choose between
    any of the <a href="https://www.dndbeyond.com/races">DnD races</a>.
</p>

<?php $label = "All DnD Races"; ?>
    <?php $collapsibleContent = '<?php foreach ($dndraces as $dndrace) : ?>
                    <a href="https://www.dndbeyond.com/races">
                        <b><?php echo $dndrace ?></a>, </b>
                        <?php endforeach; ?>' ?>
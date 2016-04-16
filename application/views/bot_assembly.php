<div id="select_bots">
    <p class='portfolioTitle'> Build a Bot! </p>
    <form method = "post">
    <select name="TopPieces" onchange="load_top_image(this);">
        <option value=0>'Pick a top for your bot!'</option>
        <?php
        //add owned pieces to drop down, skip if # owned is 0
        foreach($topcards as $key => $value)
        {
            if($value['amount'] > 0)
            {
                echo "<option value=" . $value['certificate'] . ">" . $value['card'] . " (" . $value['amount'] . ")</option>";
            }
        }
        ?>
    </select>
    <br /><br /><br /><br /><br />
    <select name="MiddlePieces" onchange="load_mid_image(this);">
        <option value=0>'Pick a middle for your bot!'</option>
        <?php
        //add owned pieces to drop down, skip if # owned is 0
        foreach($midcards as $key => $value)
        {
            if($value['amount'] > 0)
            {
                echo "<option value=" . $value['certificate'] . ">" . $value['card'] . " (" . $value['amount'] . ")</option>";
            }
        }
        ?>
    </select>
    <br /><br /><br /><br /><br />
    <select name="BottomPieces" onchange="load_bot_image(this);">
        <option value=0>'Pick a bottom for your bot!'</option>
        <?php
        //add owned pieces to drop down, skip if # owned is 0
        foreach($botcards as $key => $value)
        {
            if($value['amount'] > 0)
            {
                echo "<option value=" . $value['certificate'] . ">" . $value['card'] . " (" . $value['amount'] . ")</option>";
            }
        }
        ?>
    </select>
    <br /><br /><br /><br /><br />
        <input type="submit" name="buyCards" value='ASSEMBLE AND ROLL OUT' />
    </form>
    <br />
</div>
<!-- image src will be changed based on selected item from dropdown menus -->
<div id="assemble_images">
    <img src="" id="bot_top" alt="">
    <img src="" id="bot_mid" alt="">
    <img src="" id="bot_bot" alt="">
</div>

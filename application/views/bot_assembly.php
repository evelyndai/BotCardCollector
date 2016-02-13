<div id="something">
    <p> Build a Bot! </p>
    <select name="Top Pieces" onchange="load_top_image(this);">
        <option value=0>'Pick a top for your bot!'</option>
        <?php
        //add owned pieces to drop down, skip if # owned is 0
        foreach($topcards as $key => $value)
        {
            if($value > 0)
            {
                echo "<option value=" . $key . ">" . $key . " (" . $value . ")</option>";
            }
        }
        ?>
    </select>
    <br />
    <select name="Middle Pieces" onchange="load_mid_image(this);">
        <option value=0>'Pick a middle for your bot!'</option>
        <?php
        //add owned pieces to drop down, skip if # owned is 0
        foreach($midcards as $key => $value)
        {
            if($value > 0)
            {
                echo "<option value=" . $key . ">" . $key . " (" . $value . ")</option>";
            }
        }
        ?>
    </select>
    <br />
    <select name="Bottom Pieces" onchange="load_bot_image(this);">
        <option value=0>'Pick a bottom for your bot!'</option>
        <?php
        //add owned pieces to drop down, skip if # owned is 0
        foreach($botcards as $key => $value)
        {
            if($value > 0)
            {
                echo "<option value=" . $key . ">" . $key . " (" . $value . ")</option>";
            }
        }
        ?>
    </select>
    <br />
    <button type="button">Assemble</button>
</div>

<!-- image src will be changed based on selected item from dropdown menus -->
<div id="images">
    <img src="" id="bot_top" alt="">
    <br />
    <img src="" id="bot_mid" alt="">
    <br />
    <img src="" id="bot_bot" alt="">
</div>

<script type = "text/javascript">
    function load_top_image(elem)
    {
        var image = document.getElementById("bot_top");
        image.src = "/asset/images/" + elem.value + "0.jpeg";
    }

    function load_mid_image(elem)
    {
        var image = document.getElementById("bot_mid");
        image.src = "/asset/images/" + elem.value + "1.jpeg";
    }

    function load_bot_image(elem)
    {
        var image = document.getElementById("bot_bot");
        image.src = "/asset/images/" + elem.value + "2.jpeg";
    }
</script>


<div id="something">
    <p> Build a Bot! </p>
    <!-- <table>
        <tr>
            <th>A type</th>
            <th>B type</th>
            <th>C type</th>
        </tr>
        <tr>
            <td><?php echo $topcards['Eleven-A'];?></td>
            <td><?php echo $topcards['Eleven-B'];?></td>
            <td><?php echo $topcards['Eleven-C'];?></td>
        </tr>
        <tr>
            <td><?php echo $midcards['Eleven-A'];?></td>
            <td><?php echo $midcards['Eleven-B'];?></td>
            <td><?php echo $midcards['Eleven-C'];?></td>
        </tr>
        <tr>
            <td><?php echo $botcards['Eleven-A'];?></td>
            <td><?php echo $botcards['Eleven-B'];?></td>
            <td><?php echo $botcards['Eleven-C'];?></td>
        </tr>
    </table> -->
    <select name="Top Pieces">
        <option value=0>'Pick a top for your bot!'</option>
        <?php
        foreach($topcards as $key => $value)
        {
            if($value > 0)
            {
                echo "<option value=" . $key . ">" . $key . " (" . $value . ")</option>";
            }
        }
        ?>
    </select>

    <select name="Middle Pieces">
        <option value=0>'Pick a middle for your bot!'</option>
        <?php
        foreach($midcards as $key => $value)
        {
            if($value > 0)
            {
                echo "<option value=" . $key . ">" . $key . " (" . $value . ")</option>";
            }
        }
        ?>
    </select>

    <select name="Bottom Pieces">
        <option value=0>'Pick a bottom for your bot!'</option>
        <?php
        foreach($botcards as $key => $value)
        {
            if($value > 0)
            {
                echo "<option value=" . $key . ">" . $key . " (" . $value . ")</option>";
            }
        }
        ?>
    </select>
    <button type="button">Assemble</button>
</div>

<div>
    <img src="" id="bot_top" alt="Robot Top">
    <br />
    <img src="" id="bot_mid" alt="Robot Middle">
    <br />
    <img src="" id="bot_bot" alt="Robot Bottom">
</div>

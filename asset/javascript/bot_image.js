//for changing top bot image in assembly
function load_top_image(elem)
{
    var image = document.getElementById("bot_top");
    image.src = "/asset/images/" + elem.value + ".jpeg";
}

//for changing middle bot image in assembly
function load_mid_image(elem)
{
    var image = document.getElementById("bot_mid");
    image.src = "/asset/images/" + elem.value + ".jpeg";
}

//for changing bottom bot image in assembly
function load_bot_image(elem)
{
    var image = document.getElementById("bot_bot");
    image.src = "/asset/images/" + elem.value + ".jpeg";
}

function select_player(elem)
{
    window.location = "/portfolio/" + elem.value;
}



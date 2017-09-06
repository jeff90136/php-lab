<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    function play(){
        $.get("lab49.php",game);

    }
    function game(data,s){
        $("#here").html(data+":"+s);
    }
    function play2(){
        var name =$("#name").val();
//        alert("lab49.php?name="+name);
        $.get("lab49.php?name="+name,function(data,st) {
            if (data >= 1) {
                $("#message").html("error");
                $("#name").focus();
            }else{
            $("#message").html("");
        }})
    }

</script>
<!--<input type="button" onclick="play()" value="send" >-->
<!--<div id="here"></div>-->
<input id="name" onblur="play2()"/><span id="message"></span><br>
<input id="number"/><br>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
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
    function check(){
        $.get("lab49.php?name="+name,function(data,st) {
            if (data >= 1) {
//                $("#message").html("error");
//                $("#name").focus();
                return false;
            }else{
//                $("#message").html("");
                return true;
            }})
    }


</script>


<form action="lab44.php" onsubmit="return check()">
    NAME:<input name="name" id="name" onblur="play2()"><span id="message"></span><br>
    number:<input name="number"><br>
    birthday:<input name="birthday"><br>
    <input type="submit" value="send"><br>

</form>
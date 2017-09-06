<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    function play2(){
        var name =$("#name").val();
        var id =$("#id").val();
//        alert("lab49.php?name="+name);
        $.get("lab49.php?name="+name+"&id="+id,function(data,st) {
            if (data >= 1) {
                $("#message").html("error");
                $("#name").focus();
            }else{
                $("#message").html("");
            }})
    }
    </script>
<?php
    if(!isset($_GET['edit']))header("location:lab43.php");

    $edit=$_GET['edit'];

    $sql =new mysqli('localhost','root','root','test');
    $rec = $sql->query("select * from show01 where id={$edit}");




$data=$rec->fetch_object();

    ?>
<h>EDIT</h>
<form action="lab47.php">
    <input type="hidden" name="id" value="<?php echo $data->id; ?>">
    name:<input name="name" value="<?php echo $data->name; ?>"/><br>
    number:<input name="number" value="<?php echo $data->number; ?>"/><br>
    birthday:<input name="birthday" value="<?php echo $data->birthday; ?>"/><br>
    <input type="submit" value="send"/>
</form>
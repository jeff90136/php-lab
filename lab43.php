<?php
    $sql =new mysqli('localhost','root','root','test');

    if(isset($_GET['item'])){
        $sql->query("delete from show01 where id={$_GET['item']}");
    }
    $rec = $sql->query("select * from show01");
?>
<script>
    function delete1(name) {
        return confirm("delete"+ name);
    }
</script>


<a href="lab45.php">new member</a>

<table border="1" width="100%">
    <tr>
        <th>id</th>
        <th>number</th>
        <th>name</th>
        <th>birthday</th>
        <th>delete</th>
        <th>edit</th>
    </tr>
    <?php
        while($data = $rec->fetch_object()){
            echo '<tr>';
            echo "<td>{$data->id}</td>";
            echo "<td>{$data->number}</td>";
            echo "<td>{$data->name}</td>";
            echo "<td>{$data->birthday}</td>";
            echo "<td><a href='?item={$data->id}' onclick='return delete1({$data->id});'/> delete</td>";
            echo "<td><a href='lab46.php?edit={$data->id}'/> edit</td>";
            echo '</tr>';
        }

    ?>


</table>
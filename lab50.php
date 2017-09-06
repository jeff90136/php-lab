
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>
    $(document).ready(function(){
        setInterval(function () {
            $.get("lab51.php?",function(data,state){
                $("#area").html(data);
            })
        },3000)
    })


</script>





<h1>BIG company</h1>
<hr/>
<div id="area"></div>

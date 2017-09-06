<?php
    $jason=file_get_contents('http://data.coa.gov.tw/Service/OpenData/TransService.aspx?UnitId=qNRePfOf8YMS');
    $sql =new mysqli('localhost','root','root','test');
//    $jason ='[{"v1":"100","v2":"200","v3":"300"},{"v1":"200","v2":"400","v3":"600"}]';
//    var_dump(json_decode($jason));
    $ot =json_decode($jason);
    foreach ($ot as $key=>$val){
//        var_dump($root);
        $id=$val->Emblem_ID;
        $Factory_CName=$val->Factory_CName;
        $Product_Name=$val->Product_Name;
        $Factory_Tel=$val->Factory_Tel;
        $Factory_Address=$val->Factory_Address;
        $Factory_Director=$val->Factory_Director;
        $Material_Name=$val->Material_Name;
    $mys="insert into company(id,Factory_CName,Product_Name,Factory_Tel,Factory_Address,Factory_Director,Material_Name)".
          "value('{$id}','{$Factory_CName}','{$Product_Name}','{$Factory_Tel}','{$Factory_Address}','{$Factory_Director}','{$Material_Name}')";
    $sql->query($mys);
    }

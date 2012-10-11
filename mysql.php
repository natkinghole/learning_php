//插入删除操作
<?
    //基本设定----
    $mysql_sever_name="localhost";
    $mysql_user="root";
    $mysql_password="123";
    $mysql_database="test";
    //------------
    
    //建立连接
    $conn=mysql_connect($mysql_server_name,$mysql_user,$mysql_password);
    
    //sql语句
    $sql="";
    
    //选择对应数据库
    mysql_select_db($mysql_database,$conn);
    
    //执行sql语句
    $result=mysql_query($sql);
    
    //结束并释放连接
    mysql_close($conn);
?>
//查询操作
<?
    $mysql_sever_name="localhost";
    $mysql_user="root";
    $mysql_password="123";
    $mysql_database="test";
    
    $conn=mysql_connect($mysql_server_name,$mysql_user,$mysql_password);
    
    $sql="";
    
    $result=mysql_db_query($mysql_database,$sql,$conn);
    
    $row=mysql_fetch_row($result);
    
    print_r($row);
    
    mysql_free_result($result);
?>
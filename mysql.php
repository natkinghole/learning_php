//����ɾ������
<?
    //�����趨----
    $mysql_sever_name="localhost";
    $mysql_user="root";
    $mysql_password="123";
    $mysql_database="test";
    //------------
    
    //��������
    $conn=mysql_connect($mysql_server_name,$mysql_user,$mysql_password);
    
    //sql���
    $sql="";
    
    //ѡ���Ӧ���ݿ�
    mysql_select_db($mysql_database,$conn);
    
    //ִ��sql���
    $result=mysql_query($sql);
    
    //�������ͷ�����
    mysql_close($conn);
?>
//��ѯ����
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
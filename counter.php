<?
    //基本设定----
    $mysql_sever_name="localhost";
    $mysql_user="root";
    $mysql_password="123";
    $mysql_database="test";
    //------------
    
    //建立连接
    $conn=mysql_connect($mysql_server_name,$mysql_user,$mysql_password);
    
    $ip=getenv('REMOTE_ADDR');
    
    $sql="SELECT * FROM`counter` WHERE`ip`='$ip' AND `web_name`='web1'";
    
    $result=mysql_db_query($mysql_database,$sql);
    
    $row=mysql_fetch_row($result);
    
    mysql_free_result($result);
    
    if(!$row){
    //sql语句
    $sql="INSERT INTO `test`.`counter` (`web_name`, `ip`, `time_at`) VALUES ('web1', '$ip', NOW())";
    
    //选择对应数据库
    mysql_select_db($mysql_database,$conn);
    
    //执行sql语句
    $result=mysql_query($sql);
    }
    else{
        $sql="SELECT UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP(time_at) FROM`counter` WHERE`ip`='127.0.0.1' AND `web_name`='web1' ORDER BY UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP(time_at) ASC";
    
        $result=mysql_db_query($mysql_database,$sql);
    
        $row=mysql_fetch_row($result);
        
        mysql_free_result($result);
        
        //print_r($row);
        if($row[0]>=10){
        //sql语句
        $sql="INSERT INTO `test`.`counter` (`web_name`, `ip`, `time_at`) VALUES ('web1', '$ip', NOW())";
        
        //选择对应数据库
        mysql_select_db($mysql_database,$conn);
        
        //执行sql语句
        $result=mysql_query($sql);
        }
    }
    //结束并释放连接
    mysql_close($conn);
    
    //---------------------------------------
    
    $conn=mysql_connect($mysql_sever_name,$mysql_user,$mysql_password);
    
    $sql="SELECT COUNT(*) FROM`counter` WHERE`web_name`='web1'";
    
    $result=mysql_db_query($mysql_database,$sql);
    
    $row=mysql_fetch_row($result);
    
    //print_r($row);
    
    mysql_free_result($result);
?>
<?
    for($i=0;$i<strlen($row[0]);$i++){
        $digit=substr($row[0],$i,1);
        $str.="<img src=\"29/number$digit.jpg\" width=\"50\" height=\"50\" />";
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>尿桶的留言板</title>
<style type="text/css">
<!--
.STYLE1 {
	font-family: "宋体";
	font-size: 36px;
	color: #990000;
	font-weight: bold;
}
.STYLE4 {color: #0b0b8e}
.STYLE5 {font-family: "宋体"; font-size: 24px; color: #000000; }
.STYLE9 {font-size: x-large; color: #000066; font-weight: bold; }
.STYLE10 {
	color: #FF0000;
	font-size: xx-large;
}
.STYLE11 {
	color: #800000;
	font-size: large;
	font-weight: bold;
}
body {
	background-image: url(29/359bw3r.jpg);
	background-repeat: no-repeat;
	background-position: center top;
}
-->
</style>
</head>

<body>
<div align="center">
  <p>&nbsp;</p>
  <p class="STYLE1"><span class="STYLE4">尿桶</span>的留言站</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <form method="POST" action="input.php">
	<table width="600" height="351" border="0">
    <!--DWLayoutTable-->
    <tr>
      <td width="100" height="39"><div align="left"><span class="STYLE11">标题：</span></div></td>
      <td colspan="3"><div align="left">
        <input name="title" type="text" class="STYLE11" />
      </div></td>
    </tr>
    <tr>
      <td height="40"><div align="left"><span class="STYLE11">用户名：</span></div></td>
      <td colspan="3"><div align="left">
        <input name="username" type="text" class="STYLE11" />
      </div></td>
    </tr>
    <tr>
      <td height="141"><div align="left"><span class="STYLE11">留言内容：</span></div></td>
      <td colspan="3"><div align="left">
        <textarea name="content" cols="50" rows="8" class="STYLE11"></textarea>
      </div></td>
    </tr>
    <tr>
      <td height="36"><div align="left"><span class="STYLE11">验证码：</span></div></td>
      <td colspan="2"><div align="left">
        <input name="code" type="text" class="STYLE11" />
      </div></td>
      <td width="185"><div align="left"><img src="" alt="" name="code" width="100" height="25" id="code" style="background-color: #000066" /></div></td>
    </tr>
    <tr>
      <td height="75"><div align="left"></div></td>
      <td width="164"><div align="left"></div></td>
      <td width="51"><div align="left">
        <input name="botton1" type="submit" value="提交" />
      </div></td>
      <td><div align="left">
        <input name="botton2" type="reset" value="重设" />
      </div></td>
    </tr>
  </table>
  </form>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p class="STYLE9">至今为止，本站到访次数是<span class="STYLE10"><?=$str?></span>人次</p>
  <p class="STYLE5">&nbsp;</p>
</div>
</body>




</html>
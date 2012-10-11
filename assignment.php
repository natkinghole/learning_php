<?
    $n = $_GET["n"];   //设置里自动GET为True，故这里不写也可以
    function n_(){
        echo "please input the n value in the URL!";
        exit;
    }
    @call_user_func("n_".$n);
    echo "<table border='1'>";
    for($i=1;$i<=$n;$i++){
        echo "<tr>";
        for($j=1;$j<=$n;$j++){
            echo "<td>$i*$j=".$i*$j."</td>";
        }
        echo "</tr>";
    }
?>
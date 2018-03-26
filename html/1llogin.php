<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/21
 * Time: 9:06
 */

$name=$_POST['username'];
$password=$_POST['password'];

echo $name;
echo $password;
//$zl='xiang';
//
//$pwd=crypt('qq12345678','xiang');
//$q=crypt('qq12345678','xiang');
//$z=crypt('qq12345678',$zl);
//$z1=crypt($password,$zl);
//$z2=crypt($password,'xiang');
//echo "<br/>";
//echo $pwd;
//echo "<br/>";
//echo $q;
//echo "<br/>";
//echo $z;
//echo "<br/>";
//echo $z1;
//echo "<br/>";
//echo $z2;
//echo "<br/>";
//$encode=null;

$conn=mysqli_connect('127.0.0.1','root','','aa');
if (!$conn){
    die('error'.mysqli_connect_error());
}else{
    echo "连接成功"."<br/>";
}

$sql="SELECT  name,pwd,encode from user_info WHERE name=$name";

$result=mysqli_query($conn,$sql);



if (mysqli_num_rows($result) > 0) {
    // 输出数据
    while($row = mysqli_fetch_assoc($result)) {
        echo $encodedb=$row["encode"];
        echo $namedb=$row["name"];
        echo $pwddb=$row["pwd"];

    }
    echo $encodedb;
    echo "<br/>";
    echo $namedb;
    echo "<br/>";
    echo $pwddb;
    echo "<br/>";

    $pwd=crypt($password,$encodedb);
    echo $pwd;
    echo "<br/>";

    if ($pwd==$pwddb){
        echo "登陆成功";
        session_start();
        $_SESSION['user']=$namedb;
        header('Location:index.html');

    }else{
        echo "登录失败";
        header('Location:../login.html?p=0');
    }
} else {
    echo "0 结果";
    header('Location:../login.html?u=0');
}






//$sql="SELECT * from user_info WHERE name=$name";
//echo $sql;
//
//$result=mysqli_query($conn,$sql);
//echo "<br/>";
//
//if (mysqli_num_rows($result) > 0) {
//    // 输出数据
//    while($row = mysqli_fetch_assoc($result)) {
//        echo $encode=$row["pwd"];
//    }
//} else {
//    echo "0 结果";
//}
//
//
//if ($result!=""){
//    echo "登陆成功";
//}else{
//    echo "登录失败，密码错误";
//}





mysqli_close($conn);



?>
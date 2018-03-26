<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/22
 * Time: 0:09
 */

session_start();
unset($_SESSION['user']);
header('Location:../login.html');
<?php

if (empty($_GET['file'])) {
        die("请求参数为file,flag.txt文件在上两层中!");
}
include($_GET['file']);

?>

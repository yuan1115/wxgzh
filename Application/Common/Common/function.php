<?php
/**
 * @Author: junmoxiao
 * @Date:   2018-06-05 10:26:59
 * @Last Modified by:   junmoxiao
 * @Last Modified time: 2018-06-07 16:54:29
 */
//二维码生成
function qrcode($url,$size=4){
    Vendor('phpqrcode.phpqrcode');
    QRcode::png($url,false,QR_ECLEVEL_L,$size,3,false,0xFFFFFF,0x000000);
}
//支付或重要操作日志生成这里可以创建一张日志表
// function log_result($file,$word){
//     $fp = fopen($file,"a");
//     flock($fp, LOCK_EX) ;
//     fwrite($fp,"执行日期：".strftime("%Y-%m-%d-%H：%M：%S",time())."\n".$word."\n\n");
//     flock($fp, LOCK_UN);
//     fclose($fp);
// }

<?php
    //이미지 사이지 150x150 픽셀
    $image = @imagecreatetruecolor(160, 45);
    $backgroudcolor = imagecolorallocate($image, 0x66, 0xCC, 0xFF);
    imagefill($image, 50, 0, $backgroudcolor);
    $fontcolor1 = imagecolorallocate($image, 0xff, 0xff, 0xff);
    $fontcolor2 = imagecolorallocate($image, 0x00, 0x00, 0x00);
    $linecolor = imagecolorallocate($image, 0xff, 0xff, 0xff);
    $char = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz'; 
    $charLength = strlen($char);
    for($i=0; $i<8; $i++){
        imagesetthickness($image, rand(1,2));
        imageline($image, rand(0,160), 0, rand(0,160), 45, $linecolor);
    }
    $digit='';
    session_start();
    for($x=10; $x<=160; $x += 32){
        $fontcolor = (rand()%2) ? $fontcolor1 : $fontcolor2;
        $digit .= $num = $char[rand(0, $charLength-1)];
        imagechar($image, 5, $x, rand(2, 22), $num, $fontcolor);
    }
    
    $_SESSION['digit'] = $digit;
    header('Content-type: image/png');
    imagepng($image);
    imagedestroy($image);
?>
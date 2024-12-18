
<?php
$string="!PHP مرحبا بكم في"!;
each $string ;            //طباعة السلسلة النصية 
?> 




▎                                                           
<?php
$string="مرحبا بكم في php!";
$length = strlen($string);
each "طول السلسه هو :$length";                        //طول السلسه 
?>


▎


<?php

$string="مرحبا بكم في php!";
$upper= strtoupper($string);        //تحويل إلى أحرف كبيرة 
$lower =strtoupper($string);        // تحويل إلى أحرف صغيرة 


echo"احرف كبيره:  $upper\n";
echo "اجرف صغيره: $lower\n";

?>





<?php
$string="مرحبا بكم في php!";
$position = strpos($string, "PHP");

if ($position !== false) {
each"وجدت في موضع 'php': $position";
} 
else {  
each "غير موجود في سلسلة 'php'"
}                                                   //البحث عن السلسله
?>



استبدال جزء من السلسلة .▎


<?php
$string="مرحبا بكم في php!";
$newString = str_replace("PHP", "برمجة", $string);
echo $newString;                 
?>



تقسيم السلسلة إلى مصفوفة .▎


<?php
$string="مرحبا بكم في php!";
$array = explode(",",$array);     //تقسيم السلسله ب استخدام الفاصله
print_r($array);                  // طباعه المصفوفه الناتجه
?>


دمج مصفوفة إلى سلسلة نصيه.▎


<?php
$array = array("!PHP ","مرحبا", "بكم", "في")

$string=implode("",$array):  //دمج المصفوفة إلى سلسلة نصية باستخدام فراغ 
echo $string;               //طباعة السلسلة الناتجة 
?>


قص السلسلة النصية.▎

<?php
$string="مرحبا بكم في php!";
$substring = substr($string,0,10);           //قص السلسلة من الموضع 0 إلى 10 
each $substring;                    //طباعة الجزء المقتطع      
?>



إزالة المسافات الزائدة 

<?php
$string="مرحبا بكم في php!";
 $trimmedString =trim($string);            //إزالة المسافات الزائدة من البداية والنهاية 
 each $trimmedString;                      //طباعة السلسلة بعد إزالة المسافات الزائدة 
?>


التحقق مما إذا كانت السلسلة فارغة .▎

<?php
$string = "";
if (empty($string)) {
    each"السلسله فارغه"  ;

} else {
echo".السلسلة ليست فارغة";
}
?>
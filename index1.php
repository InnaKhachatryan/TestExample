<?php
    $data = date_create('2025-12-31');
    date_modify($data, '1 day');
    echo date_format($data, 'd.m.Y');
 ?>

</br>

<?php
     $date = date_create('2025-12-31');
     date_modify($date, '3 days');
     echo date_format($date, 'd.m.Y');
?>

</br>

<?php
     $date = date_create('2025-12-31');
     date_modify($date,'3 days 1 month');
     echo date_format($date, 'd.m.Y');
?>

</br>

<?php
     $date = date_create('2025-01-01');
     date_modify($date, '-1 day');
     echo date_format($date, 'd.m.Y');
?>

</br>

<?php
     echo date('Y'); //կվերադարձնի '2022' </br>
     echo date('y'); // կվերադարձնի '22'
     echo date('m'); // կվերադարձնի '03'– ամսվա համարը
     echo date('d'); // կվերադարձնի '13' – օրվա թիվը
     echo date('j'); // կվերադարձնի '13' - օրվա թիվը (առանց դեմի 0 -ի)
     echo date('w'); // կվերադարձնի '1' - կիրակի
     echo date('H'); // կվերադարձնի '0' - ժամը
     echo date('i'); // կվերադարձնի '46' - րոպեն
     echo date('s'); // կվերադարձնի '08' - վայրկյանները
     echo date('d-m-Y'); // կվերադարձնի ' 13-03-2022'
     echo date('d.m.Y'); // կվերադարձնի '13.03.2022'
     echo date('H:i:s d.m.Y'); // կվերադարձնի '08:49:45 13.03.2022'
?>


<!--
     01.01.2026
03.01.2026
03.02.2026
31.12.2024
202222032929215435729-03-202229.03.202215:43:57 29.03.2022



ամեն անգամ էջը թարմացնելուց 202222032929215435729-03-202229.03.202215:43:57 29.03.2022 տողի թվերը փոփոխվում են
-->
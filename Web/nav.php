<?php
function nav($item){
$items=[
    "index.php" => "Главная",
    "admin.php" => "Администрирование",
    "lk.php" => "Личный кабинет",
];
echo "<nav>"; 
$i=0;
foreach($items as $key =>$value){
    if($i == $item)
        echo "<a href='$key' class='active'>$value</a>";
    else
        echo "<a href='$key'>$value</a>";
    $i++;
};
echo "</nav>";
};
?>
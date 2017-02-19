<?php
$age=-1;
if ($age>=18&$age<59){
    echo "Вам ещё работать и работать";
}elseif ($age>59){
    echo "Вам пора на пенсию";
}elseif ($age<17&$age>0) {
    echo "Вам ещё рано работать";
}elseif ($age<0){
    echo "Неизвестный возраст";
}
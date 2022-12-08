<?php
$name = readline('Ваше имя: ');
$ages = readline('Введите ваш возраст: ');
$count = readline('Сколько задач вас ожидает: ');
$todoArray = array();
$todoHours = array();
$todoResultHours = 0;

for ($i = 1; $i <= $count; $i++) {
    $todoArray[$i] = readline("Какая {$i} задача стоит перед вами сегодня?: ");
    $todoHours[$i] = readline("Сколько времени уйдет на задачу № {$i}: ");
}

print_r("Вас зовут {$name}, ваш возраст {$ages}. Сегодня у вас запланировано {$count} задачи на день:\n");

for($i = 1; $i <=$count ; $i++) {
    print_r("- $todoArray[$i] ({$todoHours[$i]})\n");
    $todoResultHours += $todoHours[$i];
}

print_r("Примерное выполнение плана {$todoResultHours} ч");
?>
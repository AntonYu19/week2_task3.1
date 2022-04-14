<?php
/*Выполнить домашнее задание #3
Задание выполняется в двух файлах. Файл src/form.php содержит все функции.
Функции именуются task1, task2, task3, с маленькой буквы, слитно. Файл с именем index.php
содержит require(src/‘form.php’); и вызов всех функций.

Задание #3.1

Программно создайте массив из 50 пользователей, у каждого пользователя есть поля id, name и age:
id - уникальный идентификатор, равен номеру эл-та в массиве
name - случайное имя из 5-ти возможных (сами придумайте каких)
age - случайное число от 18 до 45
Преобразуйте массив в json и сохраните в файл users.json
Откройте файл users.json и преобразуйте данные из него обратно ассоциативный массив РНР.
/*Посчитайте количество пользователей с каждым именем в массиве
Посчитайте средний возраст пользователей
Задание выполняется в отдельном проекте.
*/

function task1()
{
    $users = [];
    for ($i = 1; $i <= 50; $i++) {
        $user = ['id' => $i, 'name' => "$strname", 'age' => mt_rand(18, 45)];
        $users[] = $user;


        $name = ['Andrey', 'Tanya', 'Masha', 'Misha', 'Natasha'];
        $rand_keys = array_rand($name, 1);
        $strname = $name[$rand_keys];
    }
    $json = json_encode($users);
file_put_contents('src/user.json', $json);

}
    function task2()
    {

        $data = json_decode(file_get_contents('src/user.json'), true);
        var_dump($data);
    }
/*Посчитайте количество пользователей с каждым именем в массиве

Задание выполняется в отдельном проекте.
*/
        function task3()
        {
            $users = [];
            for ($i = 1; $i <= 50; $i++) {
                $user = ['id' => $i, 'name' => "$strname", 'age' => mt_rand(18, 45)];
                $users[] = $user;

                $name = ['Andrey', 'Tanya', 'Masha', 'Misha', 'Natasha'];
                $rand_keys = array_rand($name, 1);
                $strname = $name[$rand_keys];

            }

            print_r (array_count_values(array_column($users, "name"))).'<br>'.'<br>'.'<br>';

           $sumages = array_sum(array_column($users, 'age'));
           echo ceil($sumages/50);
}
<?php

require dirname(__DIR__).'../../vendor/autoload.php';
$faker=Faker\Factory::create('fr_FR');

require 'connDb.php';

$posts = [];
$users = [];
$comments = [];
$categories = [];

// Clean db
$pdo->exec("SET FOREIGN_KEY_CHECKS = 0");
$pdo-> exec("TRUNCATE TABLE posts_comments");
$pdo-> exec("TRUNCATE TABLE posts_categories");
$pdo-> exec("TRUNCATE TABLE users_posts");
$pdo-> exec("TRUNCATE TABLE users");
$pdo-> exec("TRUNCATE TABLE posts");
$pdo-> exec("TRUNCATE TABLE comments");
$pdo-> exec("TRUNCATE TABLE categories");
$pdo->exec("SET FOREIGN_KEY_CHECKS = 1");

echo "Database tables cleaned successfuly!";

//Created users
 $hashPassword = null;
 for ($i=0; $i<13; $i++){
    $hashPassword = password_hash($faker->password, PASSWORD_BCRYPT);
    $pdo->exec("INSERT INTO users
                SET username='{$faker->userName}',
                     password='{$hashPassword}',
                     slug='{$faker->slug}',
                     ft_image='image{$faker->numberBetween($min=1, $max=5)}',
                     content='{$faker->paragraphs(rand(2,15),true)}',
                     email='{$faker->email}',
                     phone='{$faker->e164PhoneNumber}',
                     role='suscriber',
                     created_at='{$faker->date} {$faker->time}'
    ");
    $users[]=$pdo->lastInsertId();
 }
echo'Users,';

?>

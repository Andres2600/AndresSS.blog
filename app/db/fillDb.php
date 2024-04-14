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
                     ft_image='image{$faker->numberBetween($min=1, $max=5)}.jpg',
                     content='{$faker->paragraphs(rand(2,15),true)}',
                     email='{$faker->email}',
                     phone='{$faker->e164PhoneNumber}',
                     role='suscriber',
                     created_at='{$faker->date} {$faker->time}'
    ");
    $users[]=$pdo->lastInsertId();
 }
echo'USERS,';

//Create Admin

   $hashPassword = password_hash('test', PASSWORD_BCRYPT);
   $pdo->exec("INSERT INTO users
               SET username='Andres Sam',
                    password='{$hashPassword}',
                    slug='Andres_SS',
                    ft_image='image{$faker->numberBetween($min=1, $max=5)}.jpg',
                    content='{$faker->paragraphs(rand(2,15),true)}',
                    email='{$faker->email}',
                    phone='{$faker->e164PhoneNumber}',
                    role='Admin',
                    created_at='{$faker->date} {$faker->time}'
   ");
echo'ADMIN ,';

//Create Posts

for ($i=0; $i<72; $i++){
   $pdo->exec("INSERT INTO posts
               SET user_id='14',
                title='{$faker->sentence(2)}',
                    slug='{$faker->slug}',
                    ft_image='image{$faker->numberBetween($min=1, $max=5)}.jpg',
                    content='{$faker->paragraphs(rand(3,15),true)}',
                    created_at='{$faker->date} {$faker->time}',
                    published='1'
   ");
   $posts[]=$pdo->lastInsertId();
}
echo'POSTS,';

//Create Categories
for ($i=0; $i<15; $i++){
    $pdo->exec("INSERT INTO categories
               SET  title='{$faker->sentence(2)}',
                    slug='{$faker->slug}',      
                    content='{$faker->paragraphs(rand(3,15),true)}',
                    ft_image='image{$faker->numberBetween($min=1, $max=5)}.jpg'
");
   $categories[]=$pdo->lastInsertId();
}
echo'CATEGORIES,';

//link posts with categories
foreach($posts as $post){
    $randomCategories = $faker-> randomElements($categories,rand(1,1));
    foreach ($randomCategories as $category){
        $pdo -> exec("INSERT INTO posts_categories SET post_id=$post, category_id= $category");
    }
}

echo'POSTS_CATEGORIES,';

//link posts with comments
foreach($posts as $post){
    $randomComments = $faker->randomElements($categories,rand(2,2));
    foreach ($randomComments as $comment){
        $pdo -> exec("INSERT INTO posts_comments SET post_id=$post, comment_id=$comment");
    }
}

echo'POSTS_COMMENTS,';

//link posts with Admin user
foreach($posts as $post){
   
        $pdo -> exec("INSERT INTO users_posts SET user_id='14', post_id= $post");
  
}

echo'USERS_POSTS were created sucessfuly!,';
?>

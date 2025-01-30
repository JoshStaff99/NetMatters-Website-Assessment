<?php
// Load Composer's autoloader from the project root
require_once __DIR__ . '/../vendor/autoload.php';

// Load .env file from the project root
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

// Retrieve database credentials from .env
$host = $_ENV['DB_HOST'];
$port = $_ENV['DB_PORT'];
$dbname = $_ENV['DB_DATABASE'];
$username = $_ENV['DB_USERNAME'];
$password = $_ENV['DB_PASSWORD'];

// Set up DSN and options for PDO
$dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    // Create PDO instance
    $pdo = new PDO($dsn, $username, $password, $options);
    //echo "Database connection successful!";
} catch (PDOException $e) {
    // Handle errors
    die("Database connection failed: " . $e->getMessage());
}

////////////////
// COMMAND TO INSTALL COMPOSER: composer require vlucas/phpdotenv


// Data to insert into article table
// $articles = [
//     [
//         'link' => '#',
//         'image' => 'img/news-article/september-notables-2024-ZBOM.png',
//         'title' => 'September Notables 2024 - Celebrating Our Tea...',
//         'description' => 'September Notables 2024 Celebrating the achievements and dedication of our staff, at Netmatters, we...',
//         'readMoreLink' => '#',
//         'userImage' => 'img/news-article/netmatters-ltd-VXAv.png',
//         'author' => 'Netmatters',
//         'postDate' => '2024-10-10',
//         'btnClass' => 'art-btn-3 article-img-btn',
//         'articleType' => 'News'
//     ],
//     [
//         'link' => '#',
//         'image' => 'img/news-article/business-development-executive-AIfQ.png',
//         'title' => 'Business Development Executive',
//         'description' => 'Salary Range £26-36k per annum + Bonus Hours 40 hours per week, Monday - Friday Location Whymondha...',
//         'readMoreLink' => '#',
//         'userImage' => 'img/news-article/rebecca-moore-1fh7.jpg',
//         'author' => 'Rebecca Moore',
//         'postDate' => '2024-10-18',
//         'btnClass' => 'art-btn-1 article-img-btn',
//         'articleType' => 'Careers'
//     ],
//     [
//         'link' => '#',
//         'image' => 'img/news-article/why-should-i-P4Y2.png',
//         'title' => 'Why Should I Invest in Content Marketing?',
//         'description' => 'It seems as though everyone is publishing articles these days, but is it worth it? Articles, blog po...',
//         'readMoreLink' => '#',
//         'userImage' => 'img/news-article/netmatters-ltd-VXAv.png',
//         'author' => 'Netmatters',
//         'postDate' => '2024-10-16',
//         'btnClass' => 'art-btn-2 article-img-btn',
//         'articleType' => 'Insights'
//     ]
// ];

// // Loop through each article and insert into the database
// foreach ($articles as $article) {
//     $link = $article['link'];
//     $image = $article['image'];
//     $title = $article['title'];
//     $description = $article['description'];
//     $readMoreLink = $article['readMoreLink'];
//     $userImage = $article['userImage'];
//     $author = $article['author'];
//     $postDate = $article['postDate'];
//     $btnClass = $article['btnClass'];
//     $articleType = $article['articleType'];

//     // Prepare the SQL insert statement
//     $sql = "INSERT INTO articles (link, image, title, description, read_more_link, user_image, author, post_date, btn_class, article_type)
//             VALUES ('$link', '$image', '$title', '$description', '$readMoreLink', '$userImage', '$author', '$postDate', '$btnClass', '$articleType')";

//     // Execute the query
//     if ($conn->query($sql) === TRUE) {
//         echo "New record created successfully<br>";
//     } else {
//         echo "Error: " . $sql . "<br>" . $conn->error . "<br>";
//     }
//}
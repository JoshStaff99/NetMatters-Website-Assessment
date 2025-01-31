<?php
include('inc/connection.php');

// data to loop through
$articles = [
    [
        'link' => '#',
        'image' => 'img/news-article/september-notables-2024-ZBOM.png',
        'title' => 'September Notables 2024 - Celebrating Our Tea...',
        'description' => 'September Notables 2024 Celebrating the achievements and dedication of our staff, at Netmatters, we...',
        'readMoreLink' => '#',
        'userImage' => 'img/news-article/netmatters-ltd-VXAv.png',
        'author' => 'Netmatters',
        'postDate' => '10 October 2024'
    ],
    [
        'link' => '#',
        'image' => 'img/news-article/business-development-executive-AIfQ.png',
        'title' => 'Business Development Executive',
        'description' => 'Salary Range £26-36k per annum + Bonus Hours 40 hours per week, Monday - Friday Location Whymondha...',
        'readMoreLink' => '#',
        'userImage' => 'img/news-article/rebecca-moore-1fh7.jpg',
        'author' => 'Rebecca Moore',
        'postDate' => '18th October 2024',
        'btnClass' => 'art-btn-1 article-img-btn',
        'articleType' => 'Careers'
    ],
    [
        'link' => '#',
        'image' => 'img/news-article/why-should-i-P4Y2.png',
        'title' => 'Why Should I Invest in Content Marketing?',
        'description' => 'It seems as though everyone is publishing articles these days, but is it worth it? Articles, blog po...',
        'readMoreLink' => '#',
        'userImage' => 'img/news-article/netmatters-ltd-VXAv.png',
        'author' => 'Netmatters',
        'postDate' => '16th October 2024',
        'btnClass' => 'art-btn-2 article-img-btn',
        'articleType' => 'Insights'
    ]
];

try {
    $stmt = $pdo->query("SELECT * FROM articles ORDER BY post_date DESC LIMIT 3");
    $articles = $stmt->fetchAll(); 
} catch (PDOException $e) {
    die("Error fetching news data: " . $e->getMessage());
}

foreach ($articles as $article) {
    ?>
    <div class="news-article">
        <div class="article">
            <a class="article-link" href="<?= htmlspecialchars($article['link']); ?>"></a>
            <div class="article-img-container">
                <a href="#" class="<?= htmlspecialchars($article['btn_class']); ?>"><?= htmlspecialchars($article['article_type']); ?></a>
                <a class="article-img">
                   <img src="<?= htmlspecialchars($article['image']); ?>" alt=""> 
                </a>
            </div> 
            <div class="article-block">
                <h3><a class="h3-3" href="<?= htmlspecialchars($article['link']); ?>"><?= htmlspecialchars($article['title']); ?></a></h3>
                <p><?= htmlspecialchars($article['description']); ?></p>
                <a class="btn btn-web" href="<?= htmlspecialchars($article['read_more_link']); ?>">Read More</a>
                <div class="user">
                    <div class="user-img">
                        <img src="<?= htmlspecialchars($article['user_image']); ?>" alt="">
                    </div>
                    <div class="article-date"><strong>Posted by <?= htmlspecialchars($article['author']); ?></strong><br><?= htmlspecialchars(date("jS F Y", strtotime($article['post_date']))) ?></div>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link href="styles/site.css" rel="stylesheet">
    <script src="scripts/jquery.js"></script>
    <script src="scripts/site.js"></script>
    <title>Любимые комиксы</title>
</head>
<body>
<header>
    <div id="headerInside">
        <div id="logo"></div>
        <div id="companyName">Comix</div>
        <div id="navWrap">
            <a href="/">
                Главная
            </a>
            <a href="index.php?page=shop">
                Категории
            </a>
        </div>
    </div>
</header>

<div id="content">

    <?php
    $goods = [
        [
            'id' => 1,
            'name' => 'Amazing Spider-Man',
            'desc' => 'Серия комиксов о Человеке-пауке, которая издаётся с 1963 года. Первые 38 выпусков создавались силами Стэна Ли и Стива Дитко. После над серией работало множество известных писателей и художников. Комикс закончил свою нумерацию в ноябре 1998 года на выпуске #441. Второй том пережил 58 выпусков (до ноября 2003), а затем вернулась оригинальная нумерация (с 500 выпуска).',
            'img' => '/images/goods/amazing.jpg',

        ],
        [
            'id' => 2,
            'name' => 'Miles Morales: Ultimate Spider-Man',
            'desc' => 'Новый том похождений Майлза Моралеса - Ultimate Человека-Паука.

Мир выстоял под натиском Галактуса, и жизнь Майлза Моралеса снова входит в обычную колею. "Обычную" для того, кто взял на себя ношу молодого супергероя.

Майлз не может решить, стоит ли раскрывать свой секрет Кейти Бишоп, и обращается за помощью к "эксперту". Тем временем в городе продолжается серия краж, за которыми стоят таинственные "Близнецы-Пауки", а от федералов удирает старый враг Питера Паркера...',
            'img' => '/images/goods/milez.jpg',

        ],
        [
            'id' => 3,
            'name' => 'Spider-Gwen',
            'desc' => 'Забавный эпизод из кроссовера Spider-Verse про различные версии Человека-паука обрел неожиданную популярность и собственную постоянную серию. Гвен Стейси - первая девушка Питера Паркера, единственная, кого он не сумел спасти. Но в одном из бесконечных параллельных измерений именно она стала жертвой укуса радиоактивного паука и не сумела спасти своего друга Питера от смерти.

Теперь она должна найти баланс между жизнью супергероя, на которого ведет охоту ее собственный отец, и жизнью школьницы, которая в свободное от учебы время играет на барабанах в группе Мэри Джейн и носит стильный белый костюм с капюшоном. Кажется, это будет интересно.',
            'img' => '/images/goods/gwen.jpg',

        ],
    ];

    $page = $_GET['page'];

    if (!isset($page)) {
        require('templates/main.php');
    } elseif ($page == 'shop') {
        require('templates/shop.php');
    } elseif ($page == 'product') {
        $id = $_GET['id'];
        $good = [];
        foreach ($goods as $product) {
            if ($product['id'] == $id) {
                $good = $product;
                break;
            }
        }
        require('templates/openedProduct.php');
    }
?>

</div>

<footer>
    <div id="footerInside">

        <div id="contacts">
            <div class="contactWrap">
                <img src="images/envelope.svg" class="contactIcon">
                info@brandshop.ru
            </div>
            <div class="contactWrap">
                <img src="images/phone-call.svg" class="contactIcon">
                8 800 555 00 00
            </div>
            <div class="contactWrap">
                <img src="images/placeholder.svg" class="contactIcon">
                Москва, пр-т Ленина, д. 1 офис 304
            </div>
        </div>

        <div id="footerNav">
            <a href="/">Главная</a>
            <a href="index.php?page=shop">Категории</a>
        </div>

        <div id="social">
            <img class="socialItem" src="images/vk-social-logotype.svg">
            <img class="socialItem" src="images/google-plus-social-logotype.svg">
            <img class="socialItem" src="images/facebook-logo.svg">
        </div>

        <div id="copyrights">&copy; Comix</div>
    </div>
</footer>

</body>
</html>
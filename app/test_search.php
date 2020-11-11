<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> search..
        </title>
        <link rel="stylesheet" href="libs/slick/slick.css"/>
        <link rel="stylesheet" href="libs/slick/slick-theme.css"/>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/vacancy.css">
    </head>
    <body>
        <h2>Поисковый запрос: <?php echo $_GET['search']; ?></h2>
        <div id="content" class="card-box-container">
            <?php
            $search_get = $_GET['search'];
            // $connect= mysqli_connect("127.0.0.1","root","root","forkee");
            $sql_query = " SELECT va.title_vacancy, va.salary, en.title, ci.title_city, va.remote_work, va.phone_number, 
            va.description, va.date FROM vacancies va, enterprises en, cities ci 
            WHERE va.enterprise = en.id_enterprise and va.city = ci.id_city and active is true and (va.title_vacancy LIKE '%$search_get%')";
            $sql = mysqli_query($connect,$sql_query);
                        while ($result = mysqli_fetch_array($sql)) {
                        echo 
                        '<div class="card-box-item">'.
                            '<div class="card-box-row">'.
                                "<span class='card-box-row__title'>{$result['title_vacancy']}</span>".
                                "<span class='card-box-row__price'>{$result['salary']}$</span>".
                            '</div>'.
                            '<div class="card-box-row">'.
                                "<span class='card-box-row__phone'>Organization: {$result['title']}</span>".
                            '</div>'.
                            '<div class="card-box-row">'.
                                "<span class='card-box-row__city'>City: {$result['title_city']}</span>".
                            '</div>'.
                            '<div class="card-box-row">'.
                                "<span class='card-box-row__phone'>Phone: + {$result['phone_number']} </span>".
                            '</div>'.
                            '<div class="card-box-row">'.
                                "<p class='card-box-row__description'>{$result['description']}</p>".
                            '</div>'.
                            "<div class='p-bottom'>
                                <a class='card-box-row__respond' href=''>Respond</a>
                                <span class='card-box-row__date'>{$result['date']}</span>
                            </div>".
                        '</div>';
                        }
            ?>
        </div>
    </body>
</html> 
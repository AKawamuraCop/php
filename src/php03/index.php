<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/php03/index.php">
                World Clock
            </a>
        </div>
    </header>
    <main class="main">
        <!-- <div class="title">
            <title class="title">日本と世界の時間を比較</title>
        </div> -->
        <div class="search-form__content">
            <div class="search-form__heading">
                <h2>日本と世界の時間を比較</h2>
            </div>
            <form class="search-form" action="result.php" method="get">
                <div class="search-form__item">
                    <select class="search-form__item-select" name="city">
                        <option value="シドニー">シドニー</option>
                        <option value="上海">上海</option>
                        <option value="モスクワ">モスクワ</option>
                        <option value="ロンドン">ロンドン</option>
                        <option value="ヨハネスブルグ">ヨハネスブルグ</option>
                        <option value="ニューヨーク">ニューヨーク</option>
                    </select>
                </div>
                <div class="search-form__button">
                    <button class="search-form__button-submit" type="submit">検索</button>
                </div>
            </form>
        </div>
        <!-- <div  class="search">
            <input type="select" value="シドニー">
            <input type="submit" value="submit">
        </div> -->

    </main>
</body>
</html>
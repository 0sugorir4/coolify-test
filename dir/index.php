<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>サンプルホームページ</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>ようこそ！サンプルホームページへ</h1>
    </header>
    <main>
        <section>
            <h2>このページについて</h2>
            <p>これはPHPを使って作成したサンプルのホームページです。</p>
        </section>
        <section>
            <h2>現在の日時</h2>
            <p>
                <?php
                echo "現在の日時は " . date('Y-m-d H:i:s') . " です。";
                ?>
            </p>
        </section>
    </main>
    <footer>
        <p>&copy; <?php echo date('Y'); ?> サンプルサイト</p>
    </footer>
</body>
</html>

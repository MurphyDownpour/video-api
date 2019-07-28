<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Video API App</title>
</head>
<body>
    <div id="root">
        <div id="video-block">
            <div id="video-block-header">
                <span>Получите информацию о видео</span>
            </div>
            <div id="video-form">
                <form id="request-video-form">
                    <div class="input-group">
                        <label for="url">URL:</label>
                        <input id="videourl" type="text" name="url">
                    </div>
                    <button type="submit">Запросить</button>
                </form>
            </div>
            <h5 id="status-error">Видео не найдено :(</h5>
            <div id="video-info">
                <div id="video-image">
                    <img id="thumbnail" src="" alt="">
                </div>
                <div id="video-description">
                    <div id="video-title">
                        <label for="title">Название:</label>
                        <span id="title-name"></span>
                    </div>
                    <br>
                    <div id="video-author">
                        <label for="title">Автор:</label>
                        <span id="author-name"></span>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div id="overlay">
    </div>
    <div id="video">
        <span id="close-video">X</span>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>
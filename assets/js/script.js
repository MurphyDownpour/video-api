let video = null;

$('#request-video-form').submit(function (e) {
    e.preventDefault();

    let videoUrl = $('#videourl').val();

    $.ajax({
        url: 'request_video.php',
        data: {
            url: videoUrl
        },
        success: function (data) {
            data = JSON.parse(data);

            if (data['status'] == 1) {
                $('#status-error').hide();
                video = `<iframe width="500" height="400" src="//www.youtube.com/embed/${data['videoId']}?autoplay=1" allowfullscreen></iframe>`;
                setData(data['title'], data['author'], data['thumbnail']);
                $('#video-info').show();
            } else {
                $('#video-info').hide();
                $('#status-error').show();
            }
        }
    });
});

$('#thumbnail').click(function() {
    $('#video').append(video);
    $('#video').show();
    $('#overlay').show();
});

$('#close-video').click(function() {
    $('#video').hide();
    $('#overlay').hide();
    $('#video iframe').remove();
});

function setData(title, author, imageUrl) {
    $('#title-name').text(title);
    $('#author-name').text(author);
    $('#thumbnail').attr("src", imageUrl);
}
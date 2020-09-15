<?php
    $title = "Latest News";
    include('include/header.php');
 ?>



<div class="row latest-news" id="latest-news">
</div>

<script type="text/javascript">
    let news = {
        "items": [
            // UPDATE THIS
            {
               "date": "Friday, July 31 2020",
               "img": "1.jpg",
                "title": "Introducing the AusACPDM and IAACD 2022 Conference",
                "link": "https://mailchi.mp/b650fafb3eab/introducing-the-ausacpdm-and-iaacd-2022-conference"
            }
        ]
    }

    let compiledHtml = ``;
        compiledHtml = news.items.map(items =>
            `
            <a href="${items.link}" target="_blank"class="col-6 col-lg-4 news-item">
                <img src="./img/news/${items.img}" class="img-fluid" alt="${items.title}">
                <p class="mt-2 mb-0 date"><b>${items.date}</b></p>
                <p class="mt-0 title">${items.title}</p>
            `
        ).join(``);
        document.getElementById('latest-news').innerHTML = compiledHtml;
</script>

<?php
    include('include/footer.php');
 ?>

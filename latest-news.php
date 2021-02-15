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
               "date": "Monday, January 25 2020",
               "img": "6.jpg",
                "title": "Better Together Celebrating a New Year",
                "link": "https://mailchi.mp/72221d6d77f4/better-together-2022-celebrating-a-new-year"
            },
            {
               "date": "Thursday, December 3 2020",
               "img": "4.jpg",
                "title": "Better Together 2022 Celebrates IDPwD",
                "link": "https://mailchi.mp/742c531842ca/better-together-2022-celebrates-idpwd"
            },
            {
               "date": "Wednesday, October 21 2020",
               "img": "3.jpg",
                "title": "10 Days Remain To Submit Your Symposium Or Debate",
                "link": "https://mailchi.mp/a25c0ec48cda/10-days-remain-to-submit-your-symposium-or-debate"
            },
            {
               "date": "Friday, September 18 2020",
               "img": "2.jpg",
                "title": "Welcome To The Launch Of Better Together 2022",
                "link": "https://mailchi.mp/ceb02a08cfc0/welcome-to-the-launch-of-better-together-2022"
            },
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

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
               "date": "Thursday, May 13 2021",
               "img": "11.jpg",
                "title": "Submit Your Scholarship Application Today",
                "link": "https://mailchi.mp/a134b08afb57/one-month-remains-to-submit-your-abstract-for-better-together-2022"
            },
            {
               "date": "Thursday, April 22 2021",
               "img": "10.jpg",
                "title": "Approaching Deadline, Submit Your Abstract Now!",
                "link": "https://bettertogether2022.org/news/10.html"
            },
            {
               "date": "Thursday, April 1 2021",
               "img": "9.jpg",
                "title": "One Month Remains To Submit Your Abstract For Better Together 2022",
                "link": "https://mailchi.mp/a134b08afb57/one-month-remains-to-submit-your-abstract-for-better-together-2022"
            },
            {
               "date": "Monday, March 8 2021",
               "img": "8.jpg",
                "title": "Celebrating International Women’s Day",
                "link": "https://mailchi.mp/3c43ccbcf381/celebrating-international-womens-day"
            },
            {
               "date": "Thursday, February 25 2021",
               "img": "7.jpg",
                "title": "Call for abstracts now open for Better Together 2022",
                "link": "https://mailchi.mp/27d4f3819788/call-for-abstracts-now-open-for-better-together-2022"
            },
            {
               "date": "Monday, January 25 2021",
               "img": "6.jpg",
                "title": "Better Together Celebrating a New Year",
                "link": "https://mailchi.mp/72221d6d77f4/better-together-2022-celebrating-a-new-year"
            },
            {
               "date": "Thursday, December 17 2020",
               "img": "5.jpg",
                "title": "What To Look Forward To In 2021?",
                "link": "https://mailchi.mp/e591fe57f29c/what-to-look-forward-to-in-465440"
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

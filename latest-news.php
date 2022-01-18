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
               "date": "Thursday, January 13 2022",
               "img": "20.jpg",
                "title": "A Sneak Peek at the Conference",
                "link": "https://mailchi.mp/331b27cc97bb/a-sneak-peek-at-the-conference"
            },
            {
               "date": "Wednesday, December 8 2021",
               "img": "19.jpg",
                "title": "Social Fun at Better Together 2022",
                "link": "https://mailchi.mp/a4a0d8c52dfc/social-fun-at-better-together-2022?e=04e59afc71"
            },
            {
               "date": "Thursday, November 17 2021",
               "img": "18.jpg",
                "title": "Two Weeks Remain, Submit Your Late Breaking Abstract Now",
                "link": "https://mailchi.mp/dd0e42816b54/two-weeks-remain-submit-your-late-breaking-abstract-now?e=04e59afc71"
            },
            {
               "date": "Thursday, October 21 2021",
               "img": "17.jpg",
                "title": "Last Chance for Early Bird Registration",
                "link": "https://mailchi.mp/62b219332058/last-chance-for-early-bird-registration?e=04e59afc71"
            },
            {
               "date": "Thursday, October 7 2021",
               "img": "16.jpg",
                "title": "Better Together 2022 Supports World Mental Health Day",
                "link": "https://mailchi.mp/03db24e5af1c/better-together-2022-supports-world-mental-health-day"
            },
            {
               "date": "Thursday, September 23 2021",
               "img": "15.jpg",
                "title": "What have you got planned for World CP Day?",
                "link": "https://mailchi.mp/de3f96e07984/what-have-you-got-planned-for-world-cp-day"
            },
            {
               "date": "Friday, August 27 2021",
               "img": "14.jpg",
                "title": "Conference Announcement – Moving Fully Virtual",
                "link": "https://mailchi.mp/93be9a65a8fa/conference-announcement-moving-fully-virtual"
            },
            {
               "date": "Tuesday, July 6 2021",
               "img": "13.jpg",
                "title": "Your Melbourne Bucket List for Better Together 2022",
                "link": "https://mailchi.mp/4d52aebc5282/your-melbourne-bucket-list-for-better-together-2022"
            },
            {
               "date": "Tuesday, June 15 2021",
               "img": "12.jpg",
                "title": "Take A Look At The Better Together 2022 Keynote Speakers",
                "link": "https://mailchi.mp/dda2cf632082/take-a-look-at-the-better-together-2022-keynote-speakers"
            },
            {
               "date": "Thursday, May 13 2021",
               "img": "11.jpg",
                "title": "Submit Your Scholarship Application Today",
                "link": "https://mailchi.mp/1798d0a5b6f7/submit-your-scholarship-application-today"
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
            <a href="${items.link}" target="_blank"class="col-6 col-lg-4 news-item" data-date="${items.date}">
                <img src="./img/news/${items.img}" class="img-fluid" alt="${items.title}" loading="lazy">
                <p class="mt-2 mb-0 date"><b>${items.date}</b></p>
                <p class="mt-0 title">${items.title}</p>
            `
        ).join(``);
        document.getElementById('latest-news').innerHTML = compiledHtml;
</script>

<script type="text/javascript" defer>
  // Only show ezine when the current date is past the date the ezine was sent
  let date_arr = document.querySelectorAll('[data-date]');
  date_arr.forEach(date => {
    if (new Date(date.dataset.date) > Date.now()) {
      date.classList.add('d-none');
    }
  });
</script>

<?php
    include('include/footer.php');
 ?>

<?php

    $title = "Program Overview";

    include("./include/header.php");

?>

<!--

<div class="alert alert-primary text-center">

  <h5 class="mt-2"><b>Program overview coming soon.</b></h5>

  <h6 class="mb-2">Due to the recent announcement to move fully virtual the Scientific Committee is working closely on re-imaging the program</h6>

</div> -->



<div class="announcement mb-4">
<a href="./downloads/Full-Program.pdf" target="_blank" class="button fpb">View Full Program</a>
<p>An overview of the Conference program is provided below. Note this is a draft program and is subject to change.

</br></br>

The Better Together 2022 Conference Host city is Melbourne, Australia therefore Australian Eastern Daylight Time (AEDT) is the main time zone for all date and time references.

</br></br>

This program is displayed with two additional time zones aside from Melbourne, please note if an * appears before the time this references that the time shown is one day prior to the Melbourne date displayed.

</br></br>

Additionally, please use the following time zone convertor to assist you in converting to another time zone - <a href="https://www.timeanddate.com/worldclock/converter.html" target="_blank">https://www.timeanddate.com/worldclock/converter.html</a>

</p>

</div>



<div class="row">

  <div class="col">

    <a href="./program-overview.php?d=1#tables" class="button-small mx-auto d-block text-center p-4 mb-4">Tuesday 1 March</a>

  </div>

  <div class="col">

    <a href="./program-overview.php?d=2#tables" class="button-small mx-auto d-block text-center p-4 mb-4">Wednesday 2 March</a>
    
  </div>

  <div class="col">

    <a href="./program-overview.php?d=3#tables" class="button-small mx-auto d-block text-center p-4 mb-4">Thursday 3 March</a>
  
  </div>

  <div class="col">

    <a href="./program-overview.php?d=4#tables" class="button-small mx-auto d-block text-center p-4 mb-4">Friday 4 March</a>

  </div>

  <div class="col">

    <a href="./program-overview.php?d=5#tables" class="button-small mx-auto d-block text-center p-4 mb-4">Saturday 5 March</a>

  </div>

</div>


<div class="col-12 px-0" id="tables"></div>



<script type="text/javascript">

  let queries = window.location.search;

  let parameters, pageNum;



  if (queries == "") {

    //Set page to 1

    pageNum = 1;

  } else {

    //use the search queries to set the page

    parameters = new URLSearchParams(queries);

    pageNum = parseInt(parameters.get('d'));

  }



  let tables = [

    `
    <div class="program">
    <div class="heading pt-2 pb-2" align="center">
    <div align="center"><b>Tuesday 1 March 2022</b></div>
  </div>
  </div>
  <div id="workshops"></div>

    `,

    `

	<table class="program" width="100%" cellpadding="10">

  <col>

  <col>

  <col>

  <tr class="heading" align="center">

    <th colspan="4" align="center">Wednesday 2 March 2022
    
    </th>
    
  </tr>

  <tr class="sub-heading">

    <th class="text-center">USA GMT-6<br>

      (Chicago)</th>

    <th class="text-center">EU GMT+1<br>

      (Stockholm)</th>

    <th class="text-center">AEDT<br>

      (Melbourne)</th>

    <th>Activity</th>

  </tr>

  <tr class="event-blue">

    <td align="center">*15:00 - 18:30</td>

    <td align="center">*22:00 - 01:30</td>

    <td align="center">08:00 - 11:30</td>

    <td>Six Concurrent Pre-Conference Sessions</td>

  </tr>

  <tr class="event-blue">

    <td align="center">*18:30 - 19:00</td>

    <td align="center">01:30 - 02:00</td>

    <td align="center">11:30 - 12:00</td>

    <td>Opening Ceremony<br>

      Welcome to Country, Presidential and Chair Messages</td>

  </tr>

  <tr class="event-blue">

    <td align="center">*19:00 - 19:30</td>

    <td align="center">02:00 - 02:30</td>

    <td align="center">12:00 - 12:30</td>

    <td>Keynote: First Nations &quot;Birthing on Country&quot; <br>

      Dr Yvette Roe, Dr Sue Kildea, Australia</td>

  </tr>

  <tr class="event-blue">

    <td align="center">*19:30 - 20:00</td>

    <td align="center">02:30 - 03:00</td>

    <td align="center">12:30 - 13:00</td>

    <td>Keynote: Low Middle Income Countries <br>

      Prof Gulam Khandaker, Australia and Bangladesh</td>

  </tr>

  <tr class="event-blue">

    <td align="center">*20:00 - 20:15</td>

    <td align="center">03:00 - 03:15</td>

    <td align="center">13:00 - 13:15</td>

    <td>Keynote Live Q&amp;A</td>

  </tr>

  <tr class="break">

    <td align="center" rowspan="2">*20:15 - 21:00</td>

    <td align="center" rowspan="2">03:15 - 04:00</td>

    <td align="center" rowspan="2">13:15 - 14:00</td>

    <td>Poster Gallery/Exhibition/Networking </td>

  </tr>

  <tr>

    <td>Top 10 Poster Viewing</td>

  </tr>

  <tr class="event-blue">

    <td align="center">*22:00 - 23:00</td>

    <td align="center">05:00 - 06:00</td>

    <td align="center">15:00 - 16:00</td>

    <td>Six concurrent sessions of Free papers, Seminars, Instructional Courses and Focussed Symposia</td>

  </tr>

  <tr class="break">

    <td align="center">*23:00 - 23:30</td>

    <td align="center">06:00 - 06:30</td>

    <td align="center">16:00 - 16:30</td>

    <td>Poster Gallery/Exhibition/Networking </td>

  </tr>

  <tr class="event-blue">

    <td align="center">*23:30 - 24:00</td>

    <td align="center">06:30 - 07:00</td>

    <td align="center">16:30 - 17:00</td>

    <td>Keynote: Dinah Reddihough Oration </td>

  </tr>

  <tr class="event-blue">

    <td align="center">24:00 - 24:30</td>

    <td align="center">07:00 - 07:30</td>

    <td align="center">17:00 - 17:30</td>

    <td>Keynote: Innovation in intervention/Technology <br>

      Prof Rupal Patel, UK </td>

  </tr>

  <tr class="event-blue">

    <td align="center">24:30 - 24:45</td>

    <td align="center">07:30 - 07:45</td>

    <td align="center">17:30 - 17:45</td>

    <td>Keynote Live Q&amp;A</td>

  </tr>

  <tr class="event-yellow">

    <td align="center">24:45 - 01:45</td>

    <td align="center">07:45 - 08:45</td>

    <td align="center">17:45 - 18:45</td>

    <td>Welcome &amp; Networking Function</td>

  </tr>

</table>

    `,

    `

	<table class="program" width="100%" cellpadding="10">

  <col>

  <col>

  <col>

  <col>

  <tr class="heading" align="center">

    <th colspan="4">Thursday 3 March 2022
    
    </td>

  </tr>

  <tr class="sub-heading">

    <th class="text-center">USA UTC-6<br>

      (Chicago)</th>

    <th class="text-center">EU UTC+1<br>

      (Stockholm)</th>

    <th class="text-center">AEDT UTC+11<br>

      (Melbourne)</th>

    <th>Activity</th>

  </tr>

  <tr class="event-yellow">

    <td align="center">*13:30 - 14:30</td>

    <td align="center">*20:30 - 21:30</td>

    <td align="center">06:30 - 07:30</td>

    <td>Welcome &amp; Networking Function</td>

  </tr>

  <tr class="event-blue">

    <td align="center">*14:30 - 15:00</td>

    <td align="center">*21:30 - 22:00</td>

    <td align="center">07:30 - 08:00</td>

    <td>International Award Session - IAACD Awards, Elsass Prize</td>

  </tr>

  <tr class="event-blue">

    <td align="center">*15:00 - 17:00</td>

    <td align="center">*22:00 - 24:00</td>

    <td align="center">08:00 - 10:00</td>

    <td>Six concurrent sessions of Free papers, Seminars, Instructional Courses and Focussed Symposia</td>

  </tr>

  <tr class="break">

    <td align="center">*17:00 - 17:30</td>

    <td align="center">24:00 - 24:30</td>

    <td align="center">10:00 - 10:30</td>

    <td>Poster Gallery/Exhibition/Networking </td>

  </tr>

  <tr class="event-blue">

    <td align="center">*17:30 - 18:00</td>

    <td align="center">24:30 - 01:00</td>

    <td align="center">10:30 - 11:00</td>

    <td>Keynote: Lived Experience <br>

      Prof Tom Shakespeare, UK</td>

  </tr>

  <tr class="event-blue">

    <td align="center">*18:00 - 18:30</td>

    <td align="center">01:00 - 01:30</td>

    <td align="center">11:00 - 11:30</td>

    <td>Keynote: Knowledge Translation <br>

      Prof Susan Michie, UK </td>

  </tr>

  <tr class="event-blue">

    <td align="center">*18:30 - 19:00</td>

    <td align="center">01:30 - 02:00</td>

    <td align="center">11:30 - 12:00</td>

    <td>Keynote: Paediatric orthopaedics/ Muscle in CP <br>

      Prof Rick Lieber, USA</td>

  </tr>

  <tr class="event-blue">

    <td align="center">*19:00 - 19:15</td>

    <td align="center">02:00 - 02:15</td>

    <td align="center">12:00 - 12:15</td>

    <td>Keynote Live Q&amp;A</td>

  </tr>

  <tr class="break">

    <td align="center">*19:15 - 19:30</td>

    <td align="center">02:15 - 02:30</td>

    <td align="center">12:15 - 12:30</td>

    <td>Feel Good Break</td>

  </tr>

  <tr class="event-blue">

    <td align="center">*19:30 - 20:30</td>

    <td align="center">02:30 - 03:30</td>

    <td align="center">12:30 - 13:30</td>

    <td>Six concurrent sessions of Free papers, Seminars, Instructional Courses and Focussed Symposia</td>

  </tr>

  <tr class="break">

    <td align="center">*20:30 - 21:00</td>

    <td align="center">03:30 - 04:00</td>

    <td align="center">13:30 - 14:00</td>

    <td>Poster Gallery/Exhibition/Networking </td>

  </tr>

  <tr class="event-blue">

    <td align="center">*22:00 - 24:00</td>

    <td align="center">05:00 - 07:00</td>

    <td align="center">15:00 - 17:00</td>

    <td>Six concurrent sessions of Free papers, Seminars, Instructional Courses and Focussed Symposia</td>

  </tr>

  <tr class="event-blue">

    <td align="center">24:00 - 24:30</td>

    <td align="center">07:00 - 07:30</td>

    <td align="center">17:00 - 18:00</td>

    <td>Ask me anything - Interactive Session<br>

      Meet the keynotes</td>

  </tr>

</table>

    `,

    `

	<table class="program" width="100%" cellpadding="10">

  <col>

  <col>

  <col>

  <col>

  <tr class="heading" align="center">

    <th colspan="4">Friday 4 March 2022
    
    </th>

  </tr>

  <tr class="sub-heading">

    <th class="text-center">USA GMT-6<br>

      (Chicago)</th>

    <th class="text-center">EU GMT+1<br>

      (Stockholm)</th>

    <th class="text-center">AEDT<br>

      (Melbourne)</th>

    <th>Activity</th>

  </tr>

  <tr class="event-blue">

    <td align="center">*14:00 - 15:00</td>

    <td align="center">*21:00 - 22:00</td>

    <td align="center">07:00 - 08:00</td>

    <td>Ask me anything - Interactive Session<br>

      Meet the keynotes</td>

  </tr>

  <tr class="event-blue">

    <td align="center">*14:00 - 15:00</td>

    <td align="center">*21:00 - 22:00</td>

    <td align="center">07:00 - 08:00</td>

    <td>International Affairs session</td>

  </tr>

  <tr class="event-blue">

    <td align="center">*15:00 - 17:00</td>

    <td align="center">*22:00 - 24:00</td>

    <td align="center">08:00 - 10:00</td>

    <td>Six concurrent sessions of Free papers, Seminars, Instructional Courses and    Focussed Symposia</td>

  </tr>

  <tr class="break">

    <td align="center">*17:00 - 17:30</td>

    <td align="center">24:00 - 24:30</td>

    <td align="center">10:00 - 10:30</td>

    <td>Poster Gallery/Exhibition/Networking </td>

  </tr>

  <tr class="event-blue">

    <td align="center">*17:30 - 18:00</td>

    <td align="center">24:30 - 01:00</td>

    <td align="center">10:30 - 11:00</td>

    <td>Keynote: Early Intervention/brain development <br>

      Prof Petra Huppi, Switzerland </td>

  </tr>

  <tr class="event-blue">

    <td align="center">*18:00 - 18:30</td>

    <td align="center">01:00 - 01:30</td>

    <td align="center">11:00 - 11:30</td>

    <td>Keynote: Early Brain interventions <br>

      Prof Suzie Miller, Australia </td>

  </tr>

  <tr class="event-blue">

    <td align="center">*18:30 - 19:00</td>

    <td align="center">01:30 - 02:00</td>

    <td align="center">11:30 - 12:00</td>

    <td>Keynote: Presidential Guest Lecture<br>

      Dr Stephen O' Flaherty, Australia</td>

  </tr>

  <tr class="event-blue">

    <td align="center">*19:00 - 19:15</td>

    <td align="center">02:00 - 02:15</td>

    <td align="center">12:00 - 12:15</td>

    <td>Keynote Live Q&amp;A</td>

  </tr>

  <tr class="break">

    <td align="center">*19:15 - 19:25</td>

    <td align="center">02:15 - 02:25</td>

    <td align="center">12:15 - 12:25</td>

    <td>Feel Good Break</td>

  </tr>

  <tr class="event-blue">

    <td align="center">*19:25 - 20:25</td>

    <td align="center">02:25 - 03:25</td>

    <td align="center">12:25 - 13:25</td>

    <td>PhD Platforms </td>

  </tr>

  <tr class="event-blue">

    <td align="center">*20:25 - 20:45</td>

    <td align="center">03:25 - 03:45</td>

    <td align="center">13:25 - 13:45</td>

    <td>AusACPDM Awards</td>

  </tr>

  <tr class="break">

    <td align="center">*20:45 - 21:15</td>

    <td align="center">03:45 - 04:15</td>

    <td align="center">13:45 - 14:15</td>

    <td>Poster Gallery/Exhibition/Networking </td>

  </tr>

  <tr class="event-blue">

    <td align="center">*22:30 - 24:30</td>

    <td align="center">05:30 - 07:30</td>

    <td align="center">15:30 - 17:30</td>

    <td>Six concurrent sessions of Free papers, Seminars, Instructional Courses and Focussed Symposia</td>

  </tr>

</table>

    `,

    `

    <table class="program" width="100%" cellpadding="10">

        <col>

        <col>

        <col>

        <col>

        <tr class="heading" align="center">

          <th colspan="9">Saturday 5 March 2022
          
          </th>

        </tr>

        <tr class="sub-heading">

          <th class="text-center">USA/GMT-6 <br>(Chicago)</th>

          <th class="text-center">EU/CGM+1 <br>(Stockholm)</th>

          <th class="text-center">AEDT+11 <br>(Melbourne)</th>

          <th>Activity</th>

        </tr>

		<tr class="event-yellow">

          <td align="center">*14:00 - 14:30</td>

          <td align="center">*21:00 - 21:30</td>

          <td align="center">07:00 - 07:30</td>

          <td>Wellness Activity</td>

        </tr>

        <tr class="event-blue">

          <td align="center">*15:00 - 16:00</td>

          <td align="center">*22:00 - 23:00</td>

          <td align="center">08:00 - 09:00</td>

          <td>Six concurrent sessions of Free papers, Seminars, Instructional Courses and Focussed Symposia</td>

        </tr>

        <tr class="break">

          <td align="center">*16:00 - 16:30</td>

          <td align="center">*23:00 - 23:30</td>

          <td align="center">09:00 - 09:30</td>

          <td>Poster Gallery/Exhibition/Networking</td>

        </tr>

        <tr class="event-blue">

          <td align="center">*16:30 - 17:30</td>

          <td align="center">*23:30 - 24:30</td>

          <td align="center">09:30 - 10:30</td>

          <td>Six concurrent sessions of Free papers, Seminars, Instructional Courses and Focussed Symposia</td>

        </tr>

		<tr class="break">

          <td align="center">*17:30 - 17:45</td>

          <td align="center">24:30 - 24:45</td>

          <td align="center">10:30 - 10:45</td>

          <td>Feel Good Break</td>

        </tr>

        <tr class="event-blue">

          <td align="center">*17:45 - 18:15</td>

          <td align="center">24:45 - 01:15</td>

          <td align="center">10:45 - 11:15</td>

          <td>Keynote: Engagement</br>Prof Gillian King, Canada</td>

        </tr>

        <tr class="event-blue">

          <td align="center">*18:15 - 18:45</td>

          <td align="center">01:15 - 01:45</td>

          <td align="center">11:15 - 11:45</td>

          <td>Keynote: Adults with CP</br>Prof Mark Peterson, USA</td>

        </tr>

        <tr class="event-blue">

          <td align="center">*18:45 - 19:15</td>

          <td align="center">01:45 - 02:15</td>

          <td align="center">11:45 - 12:15</td>

          <td>Keynote: Cutting-Edge Topic</td>

        </tr>

		<tr class="event-blue">

          <td align="center">*19:15 - 19:30</td>

          <td align="center">02:15 - 02:30</td>

          <td align="center">12:15 - 12:30</td>

          <td>Keynote Live Q&A</td>

        </tr>

        <tr class="event-blue">

          <td align="center">*19:30 - 18:00</td>

          <td align="center">02:30 - 03:00</td>

          <td align="center">12:30 - 13:00</td>

          <td>Closing Ceremony</br>Conference Awards, IAACD Conference Announcement 2025 and Conference close</td>

        </tr>

    </table>

    `

  ];



  document.getElementById("tables").innerHTML = tables[pageNum-1];



</script>

<?php

    include("./include/footer.php");

?>


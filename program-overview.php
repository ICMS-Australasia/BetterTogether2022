<?php
    $title = "Program Overview";
    include("./include/header.php");
?>

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
    <table class="program" width="100%" cellpadding="10">
        <col width="8%">
        <col width="8%">
        <col width="8%">
        <col width="19%">
        <col width="19%">
        <col width="19%">
        <col width="19%">
        <tr class="heading" align="center">
          <th  colspan="7">Tuesday 1 March 2022</th>
        </tr>
        <tr class="sub-heading" align="center">
          <th align="center">USA/GMT -6 <br> <span>(Chicago)</span> </th>
          <th align="center">EU/CGM +1 <br> <span>(Stockholm)</span> </th>
          <th align="center">AEDT +11 <br> <span>(Melbourne)</span> </th>
          <th>Hybrid</th>
          <th>Hybrid</th>
          <th>Hybrid</th>
          <th>Hybrid</th>
        </tr>
        <tr>
          <td align="center">16:00 - 20:00</td>
          <td align="center">23:00 - 03:00</td>
          <td align="center">09:00 - 13:00</td>
          <td><b>Improving the health and wellbeing of adults with cerebral palsy Workshop</b> <br>
            <em>Mark Peterson, Dinah Reddihough et al</em></td>
          <td><b>Muscle in CP Workshop</b> <br>
            <em>Richard Lieber, Sudarshan Dayanidhi, Tandy Hastings-Ison</em></td>
          <td><b>Early Intervention and Early Brain Development Workshop</b> <br>
             <em>Iona Novak, Cath Morgan, Iona Novak, Stacy Dusing, Ros Boyd, Alicia Spittle,</em></td>
          <td><b>International CP Genomics Consortium Workshop</b> <br>
            <em>Micahel Fahey, Michael Kruer, Joseph Getz, Sarah McIntyre, Yana Wilson</em></td>
        </tr>
        <tr align="center" class="break">
          <td>20:00 - 21:00</td>
          <td>03:00 - 04:00</td>
          <td>13:00 - 14:00</td>
          <td colspan="4"><em>Lunch</em></td>
        </tr>
        <tr>
          <td align="center">21:00 - 24:30</td>
          <td align="center">04:00 - 07:30</td>
          <td align="center">14:00 - 17:30</td>
          <td><b>Improving the health and wellbeing of adults with cerebral palsy Workshop</b> <br>
            <em>Mark Peterson, Dinah Reddihough et al</em></td>
          <td><b>Muscle in CP Workshop</b> <br>
            <em>Richard Lieber, Sudarshan Dayanidhi, Tandy Hastings-Ison</em></td>
          <td><b>Early Intervention and Early Brain Development Workshop</b> <br>
             <em>Iona Novak, Cath Morgan, Iona Novak, Stacy Dusing, Ros Boyd, Alicia Spittle, </em></td>
          <td><b>International CP Registers Workshop</b> <br>
            <em>Sarah McIntyre, Shona Goldsmith, Hayley Smithers Sheedy, Guro Anderson</em></td>
        </tr>
        <tr align="center" class="event-teal">
          <td></td>
          <td></td>
          <td>18:30 - 21:30</td>
          <td colspan="4">Meet the Keynote Dinner</td>
        </tr>
    </table>
    `,
    `
    <table class="program" width="100%" cellpadding="10">
        <col width="8%">
        <col width="8%">
        <col width="8%">
        <col width="12.6%">
        <col width="12.6%">
        <col width="12.6%">
        <col width="12.6%">
        <col width="12.6%">
        <col width="12.6%">
        <tr class="heading" align="center">
          <th  colspan="9">Wednesday 2 March 2022</th>
        </tr>
        <tr class="sub-heading" align="center">
          <th align="center">USA/GMT -6 <br> <span>(Chicago)</span> </th>
          <th align="center">EU/CGM +1 <br> <span>(Stockholm)</span> </th>
          <th align="center">AEDT +11 <br> <span>(Melbourne)</span> </th>
          <th>Hybrid</th>
          <th>Hybrid</th>
          <th>Hybrid</th>
          <th>Hybrid</th>
          <th>Virtual Only</th>
          <th>Virtual Only</th>
        </tr>
        <tr>
          <td align="center">15:30 - 17:00</td>
          <td align="center">22:30 - 24:00</td>
          <td align="center">08:30 - 10:00</td>
          <td><b>Let’s get strategic about physical activity participation for people with disability across the lifespan: shifting our approach to sustained participation Workshop</b> <br>
            <em>Sian Williams, Jan Willem Gorter</em></td>
          <td><b>Preclinical studies, neuroprotection, prevention and neural repair Workshop</b> <br>
            <em>MinYoung Kim, Suzie Miller, Iona Novak</em></td>
          <td><b>Early Detection, Experiences and challenges Workshop</b> <br>
            <em>Iona Novak, Cath Morgan, Atul Malotra.</em></td>
          <td>First Nations Symposium 1 <br><br>
            <b>Exploring inequities in service provision for Indigenous and First Nations women, their babies and children with cerebral palsy</b> <br>
          <em>Alexandra Sorhage</em></td>
          <td><b>Implementation, challenges and impact of four parent-delivered training programmes for children with developmental disabilities in lower and middle income countries (LMIC)s Symposium</b> <br>
            <em>Gillian Saloojee</em></td>
          <td><b>Selective Dorsal Rhizotomy experiences around the world Symposium</b> <br>
            <em>Nelleke Langerak</em></td>
        </tr>
        <tr align="center" class="break">
          <td>17:00 - 17:30</td>
          <td>24:00 - 24:30</td>
          <td>10:00 - 10:30</td>
          <td colspan="6"><em>Morning Tea</em></td>
        </tr>
        <tr>
          <td align="center">17:30 - 19:00</td>
          <td align="center">24:30 - 02:00</td>
          <td align="center">10:30 - 12:00</td>
          <td><em>Workshop Continued...</em></td>
          <td><em>Workshop Continued...</em></td>
          <td><em>Workshop Continued...</em></td>
          <td>First Nations Symposium 2 <br><br>
            <b>Cultural influences on early screening and intervention for Aboriginal or Torres Strait Islander infants at risk of Neurodevelopmental Disabilities</b> <br>
            <em>Kath Benfer, Marjad Page, Dianne Shanley, Leeann Mick-Ramsamy, Carly Luke</em></td>
          <td><b>Better Research Together: Conversations with Researchers and Young People Symposium</b> <br>
            <em>Linda Nguyen</em></td>
          <td><em>Workshop Continued...</em></td>
        </tr>
        <tr align="center" class="break">
          <td>19:00 - 20:00</td>
          <td>02:00 - 03:00</td>
          <td>12:00 - 13:00</td>
          <td colspan="6"><em>Lunch</em></td>
        </tr>
        <tr>
          <td align="center">20:00 - 21:30</td>
          <td align="center">03:00 - 04:30</td>
          <td align="center">13:00 - 14:30</td>
          <td><em>Workshop Continued...</em></td>
          <td><em>Workshop Continued...</em></td>
          <td><em>Workshop Continued...</em></td>
          <td></td>
          <td></td>
          <td><em>Workshop Continued...</em></td>
        </tr>
        <tr align="center" class="break">
          <td>21:30 - 22:00</td>
          <td>04:30 - 05:00</td>
          <td>14:30 - 15:00</td>
          <td colspan="6"><em>Break</em></td>
        </tr>
        <tr class="event-yellow">
          <td align="center">22:00 - 22:45</td>
          <td align="center">05:00 - 05:45</td>
          <td align="center">15:00 - 15:45</td>
          <td colspan="6">Opening Ceremony</td>
        </tr>
        <tr class="event-yellow">
          <td align="center">22:45 - 23:15</td>
          <td align="center">05:45 - 06:15</td>
          <td align="center">15:45 - 16:15</td>
          <td colspan="6">Lived Experience - Prof Tom Shakespeare (UK)</td>
        </tr>
        <tr class="event-yellow">
          <td align="center">23:15 - 23:45</td>
          <td align="center">06:15 - 06:45</td>
          <td align="center">16:15 - 16:45</td>
          <td colspan="6">Low Middle Income Countries - Prof Gulam Khandaker (Australia, Bangladesh)</td>
        </tr>
        <tr class="event-yellow">
          <td align="center">23:45 - 24:15</td>
          <td align="center">06:45 - 07:15</td>
          <td align="center">16:45 - 17:45</td>
          <td colspan="6">First Nations - Dr Yvette Roe, Dr Sue Kildea "Birthing on Country"</td>
        </tr>
        <tr class="event-yellow">
          <td align="center">24:15 - 24:45</td>
          <td align="center">07:15 - 07:45</td>
          <td align="center">17:45 - 18:15</td>
          <td colspan="6">International Prizes, IAACD Awards, Elsass Prize</td>
        </tr>
        <tr class="event-teal">
          <td align="center">01:00 - 03:00</td>
          <td align="center">08:00 - 10:00</td>
          <td align="center">18:30 - 20:30</td>
          <td colspan="6">Welcome Reception</td>
        </tr>
    </table>
    `,
    `
    <table class="program" width="100%" cellpadding="10">
        <col width="8%">
        <col width="8%">
        <col width="8%">
        <col width="75%">
        <tr class="heading" align="center">
          <th  colspan="9">Thursday 3 March 2022</th>
        </tr>
        <tr class="sub-heading" align="center">
          <th align="center">USA/GMT -6 <br> <span>(Chicago)</span> </th>
          <th align="center">EU/CGM +1 <br> <span>(Stockholm)</span> </th>
          <th align="center">AEDT +11 <br> <span>(Melbourne)</span> </th>
          <th>Sessions</th>
        </tr>
        <tr class="event-yellow">
          <td align="center">13:30 - 14:30</td>
          <td align="center">20:30 - 21:30</td>
          <td align="center">06:30 - 07:30</td>
          <td>Wellness Activity</td>
        </tr>
        <tr class="event-yellow">
          <td align="center">14:15 - 15:15</td>
          <td align="center">21:15 - 22:15</td>
          <td align="center">07:15 - 08:15</td>
          <td>Breakfast Seminar Concurrent Session</td>
        </tr>
        <tr class="event-blue">
          <td align="center">15:30 - 16:00</td>
          <td align="center">22:30 - 23:00</td>
          <td align="center">08:30 - 09:00</td>
          <td>Paediatric orthopaedics/ Muscle in CP- Prof Rick Leiber (USA)</td>
        </tr>
        <tr class="event-blue">
          <td align="center">16:00 - 16:30</td>
          <td align="center">23:00 - 23:30</td>
          <td align="center">09:00 - 09:30</td>
          <td>Innovation in intervention/Technology - Prof Rupal Patel (UK)</td>
        </tr>
        <tr class="event-blue">
          <td align="center">16:30 - 17:00</td>
          <td align="center">23:30 - 24:00</td>
          <td align="center">09:30 - 10:00</td>
          <td>Dinah Reddihough Oration</td>
        </tr>
        <tr class="break">
          <td align="center">17:00 - 17:30</td>
          <td align="center">24:00 - 24:30</td>
          <td align="center">10:00 - 10:30</td>
          <td>Morning Tea, Posters and Exhibition</td>
        </tr>
        <tr class="event-yellow">
          <td align="center">17:30 - 19:00</td>
          <td align="center">24:30 - 02:00</td>
          <td align="center">10:30 - 12:00</td>
          <td>Focussed Symposia Concurrent Session</td>
        </tr>
        <tr class="break">
          <td align="center">19:00 - 20:30</td>
          <td align="center">02:00 - 03:30</td>
          <td align="center">12:00 - 13:30</td>
          <td>Lunch, Posters and Exhibition</td>
        </tr>
        <tr class="event-yellow">
          <td align="center">20:30 - 22:00</td>
          <td align="center">03:30 - 05:00</td>
          <td align="center">13:30 - 15:00</td>
          <td>Free Papers Concurrent Session</td>
        </tr>
        <tr class="break">
          <td align="center">22:00 - 22:30</td>
          <td align="center">05:00 - 05:30</td>
          <td align="center">15:00 - 15:30</td>
          <td>Afternoon Tea, Posters and Exhibition</td>
        </tr>
        <tr class="event-yellow">
          <td align="center">22:30 - 24:00</td>
          <td align="center">05:30 - 07:00</td>
          <td align="center">15:30 - 17:00</td>
          <td>Focussed Symposia Concurrent Session</td>
        </tr>
        <tr class="break">
          <td align="center">24:00 - 24:30</td>
          <td align="center">07:00 - 07:15</td>
          <td align="center">17:00 - 17:15</td>
          <td>Late Afternoon Break</td>
        </tr>
        <tr class="event-blue">
          <td align="center">24:30 - 01:00</td>
          <td align="center">07:15 - 07:45</td>
          <td align="center">17:15 - 17:45</td>
          <td>Knowledge Translation - Prof Susan Mitchie (UK)</td>
        </tr>
        <tr class="event-blue">
          <td align="center">01:00 - 01:30</td>
          <td align="center">07:45 - 08:00</td>
          <td align="center">17:45 - 18:00</td>
          <td>Panel Discusion</td>
        </tr>
        <tr class="event-blue">
          <td align="center">02:30 - 02:45</td>
          <td align="center">08:15 - 09:15</td>
          <td align="center">18:15 - 19:15</td>
          <td>Poster Sessions</td>
        </tr>
    </table>
    `,
    `
    <table class="program" width="100%" cellpadding="10">
        <col width="8%">
        <col width="8%">
        <col width="8%">
        <col width="75%">
        <tr class="heading" align="center">
          <th  colspan="9">Friday 4 March 2022</th>
        </tr>
        <tr class="sub-heading" align="center">
          <th align="center">USA/GMT -6 <br> <span>(Chicago)</span> </th>
          <th align="center">EU/CGM +1 <br> <span>(Stockholm)</span> </th>
          <th align="center">AEDT +11 <br> <span>(Melbourne)</span> </th>
          <th>Sessions</th>
        </tr>
        <tr class="event-yellow">
          <td align="center">13:30 - 14:30</td>
          <td align="center">20:30 - 21:30</td>
          <td align="center">06:30 - 07:30</td>
          <td>Wellness Activity</td>
        </tr>
        <tr class="event-yellow">
          <td align="center">14:15 - 15:15</td>
          <td align="center">21:15 - 22:15</td>
          <td align="center">07:15 - 08:15</td>
          <td>Breakfast Seminar Concurrent Session</td>
        </tr>
        <tr class="event-blue">
          <td align="center">15:30 - 16:00</td>
          <td align="center">22:30 - 23:00</td>
          <td align="center">08:30 - 09:00</td>
          <td>Early Intervention/brain development - Prof Petra Huppi (Switzerland)</td>
        </tr>
        <tr class="event-blue">
          <td align="center">16:00 - 16:30</td>
          <td align="center">23:00 - 23:30</td>
          <td align="center">09:00 - 09:30</td>
          <td>Early Brain interventions Prof Suzzane Miller (Australia)</td>
        </tr>
        <tr class="event-blue">
          <td align="center">16:30 - 17:00</td>
          <td align="center">23:30 - 24:00</td>
          <td align="center">09:30 - 10:00</td>
          <td>Engagement - Prof Gillian King (Canada)</td>
        </tr>
        <tr class="break">
          <td align="center">17:00 - 17:30</td>
          <td align="center">24:00 - 24:30</td>
          <td align="center">10:00 - 10:30</td>
          <td>Morning Tea, Posters and Exhibition</td>
        </tr>
        <tr class="event-yellow">
          <td align="center">17:30 - 19:00</td>
          <td align="center">24:30 - 02:00</td>
          <td align="center">10:30 - 12:00</td>
          <td>Free Papers Concurrent Session</td>
        </tr>
        <tr class="break">
          <td align="center">19:00 - 20:30</td>
          <td align="center">02:00 - 03:30</td>
          <td align="center">12:00 - 13:30</td>
          <td>Lunch, Posters and Exhibition</td>
        </tr>
        <tr class="event-yellow">
          <td align="center">20:30 - 22:00</td>
          <td align="center">03:30 - 05:00</td>
          <td align="center">13:30 - 15:00</td>
          <td>Focussed Symposia and Instructional Course Concurrent Session</td>
        </tr>
        <tr class="break">
          <td align="center">22:00 - 22:30</td>
          <td align="center">05:00 - 05:30</td>
          <td align="center">15:00 - 15:30</td>
          <td>Afternoon Tea, Posters and Exhibition</td>
        </tr>
        <tr class="event-blue">
          <td align="center">22:30 - 23:00</td>
          <td align="center">05:30 - 06:00</td>
          <td align="center">15:30 - 16:00</td>
          <td>Presidential Guest Lecture - Dr Stephen O'Flaherty (Australia)</td>
        </tr>
        <tr class="event-blue">
          <td align="center">23:00 - 23:30</td>
          <td align="center">06:00 - 06:30</td>
          <td align="center">16:00 - 17:15</td>
          <td>PhD Platforms</td>
        </tr>
        <tr class="event-blue">
          <td align="center">23:30 - 24:00</td>
          <td align="center">06:30 - 07:00</td>
          <td align="center">17:15 - 17:30</td>
          <td>AusACPDM Awards and Prizes</td>
        </tr>
        <tr class="event-teal">
          <td></td>
          <td></td>
          <td align="center">19:00 - 22:00</td>
          <td>Conference Gala Dinner</td>
        </tr>
    </table>
    `,
    `
    <table class="program" width="100%" cellpadding="10">
        <col width="8%">
        <col width="8%">
        <col width="8%">
        <col width="75%">
        <tr class="heading" align="center">
          <th  colspan="9">Saturday 5 March 2022</th>
        </tr>
        <tr class="sub-heading" align="center">
          <th align="center">USA/GMT -6 <br> <span>(Chicago)</span> </th>
          <th align="center">EU/CGM +1 <br> <span>(Stockholm)</span> </th>
          <th align="center">AEDT +11 <br> <span>(Melbourne)</span> </th>
          <th>Sessions</th>
        </tr>
        <tr class="event-yellow">
          <td align="center">15:00 - 17:30</td>
          <td align="center">22:00 - 24:30</td>
          <td align="center">08:00 - 10:30</td>
          <td>Focussed Symposia and Instructional Course Concurrent Sessions</td>
        </tr>
        <tr class="break">
          <td align="center">17:30 - 18:00</td>
          <td align="center">24:30 - 01:00</td>
          <td align="center">10:30 - 11:00</td>
          <td>Morning Tea</td>
        </tr>
        <tr class="event-blue">
          <td align="center">18:00 - 18:30</td>
          <td align="center">01:00 - 01:30</td>
          <td align="center">11:00 - 11:30</td>
          <td>Adults with CP - Prof Mark Peterson (USA)</td>
        </tr>
        <tr class="event-blue">
          <td align="center">18:30 - 19:00</td>
          <td align="center">01:30 - 02:00</td>
          <td align="center">11:30 - 12:00</td>
          <td>Intensive Rehabilitation</td>
        </tr>
        <tr class="event-blue">
          <td align="center">19:00 - 19:30</td>
          <td align="center">02:00 - 02:30</td>
          <td align="center">12:00 - 12:30</td>
          <td>Future Directions</td>
        </tr>
        <tr class="event-blue">
          <td align="center">19:30 - 20:00</td>
          <td align="center">02:30 - 03:00</td>
          <td align="center">12:30 - 13:00</td>
          <td>Closing Ceremony & Conference Awards</td>
        </tr>
    </table>
    `
  ];

  document.getElementById("tables").innerHTML = tables[pageNum-1];

</script>

<?php
    include("./include/footer.php");
?>

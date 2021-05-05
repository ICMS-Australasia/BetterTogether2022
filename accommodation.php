<?php
    $title = "Accommodation";
    include('include/header.php');
 ?>

 <p>The <a href="https://bettertogether2022.org/" target="_blank">Better Together 2022</a> Conference Accommodation Secretariat has negotiated special rates at nearby hotel properties in the Melbourne CBD district during the Conference.</p>
 <p>You can now easily make your accommodation reservation at the preferred hotels for <a href="https://bettertogether2022.org/" target="_blank">Better Together 2022</a> Conference via the online registration form. All rooms and rates below are held until 24 January 2022 or until sold out. Rooms are available on a first-come first-served basis. Please ensure to book your accommodation early to avoid disappointment.</p>

 <p><b>Please note:</b></p>
 <ul>
   <li>A deposit of one night only is required to secure your booking</li>
   <li>Bookings are subject to availability</li>
   <li>Breakfast is NOT included unless otherwise stated</li>
   <li>The rates listed are shown per night per room and for the full stay</li>
   <li>The rates are in Australian Dollars (AUD), inclusive of 10% Goods and Services Tax (GST) which is payable to the hotel chosen. There are no other additional charges to the hotel booking other than a credit card surcharge if paying by credit card</li>
   <li>Accessible rooms have been contracted and are available upon request directly with the Accommodation Secretariat via the registration form or via e-mail on <a href="mailto:accommodation@bettertogether2022.org">accommodation@bettertogether2022.org</a>.</li>
 </ul>
 <p>To secure your accommodation, a one night's deposit by credit card, electronic funds transfer or cheque is required and is forwarded to the hotel.</p>
 <p>If only a deposit is paid to secure the reservation delegates must settle the balance of their account with the hotel concerned upon check in or check out, depending on the individual hotel.</p>
 <p>If accommodation payments are not received by 24 January 2022 your room will be released back to the hotel and you may be liable for full payment. The <a href="https://bettertogether2022.org/" target="_blank">Better Together 2022</a> Conference Accommodation Secretariat does not take responsibility for accommodation if deposits are not received by this date.</p>

 <p><b>Kindly contact the Accommodation Manager should you wish to:</b></p>
<ul>
  <li>Modify your accommodation booking, or choose to book accommodation after 24 January 2022</li>
  <li>Require accommodation outside the nights of 27 February 2022 to the 5 March 2022</li>
  <li>Are unable to book accommodation due to no availability below for your selected dates as individual enquires can be made on your behalf.</li>
</ul>

<hr class='my-4'>

<!-- Cards -->
<div class="accommodation-cards" id="cards">
</div>

 <!-- Modals -->
 <div class="accommodation-modal" id="modals">

 </div>
 <script type="text/javascript">
   const hotels = [
     {
       "id" : "crown-metropol-melbourne",
       "name" : "Crown Metropol Melbourne",
       "folder" : "Crown Metropol Melbourne",
       "address" : "8 Whiteman Street, Southbank VIC 3006",
       "distance" : "400m",
       "time" : "6 min",
       "description" : "A Contemporary luxury and bold design combine at this stylish hotel in Melbourne. Rooms with panoramic views of the city and minute’s from the MCEC the Crown Metropol Melbourne can be just the escape you need after a long day at the Better Together 2022 Conference.",
       "map" : "https://www.google.com/maps/embed?pb=!1m24!1m8!1m3!1d3151.5640727627897!2d144.94994432139586!3d-37.823678554755354!3m2!1i1024!2i768!4f13.1!4m13!3e2!4m5!1s0x6ad65d5173a284b5%3A0x958eeaf04deea384!2sMelbourne%20Convention%20and%20Exhibition%20Centre%20(MCEC)%2C%201%20Convention%20Centre%20Pl%2C%20South%20Wharf%20VIC%203006!3m2!1d-37.826996699999995!2d144.9526921!4m5!1s0x6ad65d532236e4b3%3A0x2898e7de9ffa3e1b!2scrown%20metropol!3m2!1d-37.825838999999995!2d144.95766369999998!5e0!3m2!1sen!2sau!4v1620023695895!5m2!1sen!2sau",
       "notes" : `<em><b>PLEASE NOTE</b>: Accessible rooms are upon request directly with the Accommodation Secretariat via the registration or via e-mail on <a href="mailto:accommodation@bettertogether2022.org">accommodation@bettertogether2022.org</a>.</em>`,
       "rooms" : [
         {
          "type" : "Luxe Room",
          "cost" : "250",
          "img" : "room.jpg",
          "desc" : `per night (room only) with Wi-Fi included`,
         }
       ]
     },
     {
       "id" : "quality-hotel-batmans-hill-on-collins",
       "name" : "Quality Hotel Batman’s Hill on Collins",
       "folder" : "Quality Batmans Hill",
       "address" : "623 Collins St, Melbourne VIC 3000",
       "distance" : "1.3 km",
       "time" : "16 min",
       "description" : `In the heart of Melbourne CBD, Quality Hotel Batman’s Hill on Collins St is opposite Southern Cross Station and within walking distance of many of the city’s most sought-after attractions including the Melbourne Convention & Exhibition Centre (MCEC). This property has been specially selected for all <a href="https://bettertogether2022.org/">Better Together 2022</a> Conference Delegates.`,
       "map" : "https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d6303.160989009899!2d144.95025037849274!3d-37.823293994220556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e2!4m5!1s0x6ad65d51e0bc88cf%3A0xc2590ee7e8efd9b9!2squality%20hotel%20batman%E2%80%99s%20hill%20on%20collins!3m2!1d-37.8191157!2d144.9544984!4m5!1s0x6ad65d5173a284b5%3A0x958eeaf04deea384!2sMCEC%2C%20Convention%20Centre%20Place%2C%20South%20Wharf%20VIC!3m2!1d-37.826996699999995!2d144.9526921!5e0!3m2!1sen!2sau!4v1620093108558!5m2!1sen!2sau",
       "notes" : `<em><b>PLEASE NOTE</b>: Accessible rooms are upon request directly with the Accommodation Secretariat via the registration or via e-mail on <a href="mailto:accommodation@bettertogether2022.org">accommodation@bettertogether2022.org</a>.</em>`,
       "rooms" : [
         {
          "type" : "Premier King Room",
          "cost" : "189",
          "img" : "room.jpg",
          "desc" : `per night (room only) with Wi-Fi included`
         }
       ]
     },
     {
       "id" : "oaks-melbourne-on-market-suites",
       "name" : "Oaks Melbourne on Market Suites",
       "folder" : "Oaks Melbourne on Market Suites",
       "address" : "60 Market St, Melbourne VIC 3000",
       "distance" : "900m",
       "time" : "12 min",
       "description" : `The Oaks on Market fuses four star Melbourne serviced apartment living with convenience and impeccable style. This property will cater to all <a href="https://bettertogether2022.org/">Better Together 2022 Delegates</a> needs and is a short scenic walk to the MCEC.`,
       "map" : "https://www.google.com/maps/embed?pb=!1m24!1m8!1m3!1d6303.274891283305!2d144.9528351!3d-37.8219603!3m2!1i1024!2i768!4f13.1!4m13!3e2!4m5!1s0x6ad65d5173a284b5%3A0x958eeaf04deea384!2sMelbourne%20Convention%20and%20Exhibition%20Centre%20(MCEC)%2C%201%20Convention%20Centre%20Pl%2C%20South%20Wharf%20VIC%203006!3m2!1d-37.826996699999995!2d144.9526921!4m5!1s0x6ad65d4cc8a0425f%3A0x6c3be0cea0f6b069!2soaks%20on%20market!3m2!1d-37.8178082!2d144.9607973!5e0!3m2!1sen!2sau!4v1620093009242!5m2!1sen!2sau",
       "notes" : `<em><b>PLEASE NOTE</b>: Accessible rooms are upon request directly with the Accommodation Secretariat via the registration or via e-mail on <a href="mailto:accommodation@bettertogether2022.org">accommodation@bettertogether2022.org</a>.</em>`,
       "rooms" : [
        {
          "type" : "Studio Apartment",
          "cost" : "169",
          "img" : "room.jpg",
          "desc" : `per night (room only) with Wi-Fi included`
        },
        {
          "type" : "One Bedroom Apartment",
          "cost" : "189",
          "img" : "room1.jpg",
          "desc" : `per night (room only) with Wi-Fi included`
        },
        {
          "type" : "Two Bedroom Apartment",
          "cost" : "249",
          "img" : "room2.jpg",
          "desc" : `per night (room only) with Wi-Fi included`
        },
       ]
     },
     {
       "id" : "wrap-on-southbank",
       "name" : "WRAP on Southbank",
       "folder" : "WRAP on Southbank",
       "address" : "133-139 City Rd, Southbank VIC 3006",
       "distance" : "900m",
       "time" : "12 min",
       "description" : `An elegantly converted warehouse the WRAP on Southbank is a chic centrally located apartment style hotel. This property has beautiful art that you can enjoy when arriving back from the  <a href="https://bettertogether2022.org/">Better Together 2022</a> Conference which are all inspired by Melbourne’s landmark Art Centre Spire. `,
       "map" : "https://www.google.com/maps/embed?pb=!1m24!1m8!1m3!1d6303.137040915374!2d144.9542096!3d-37.8235744!3m2!1i1024!2i768!4f13.1!4m13!3e2!4m5!1s0x6ad642ad0ea1ed4f%3A0x8f480fd8f4b625f8!2s133-139%20City%20Rd%2C%20Southbank%20VIC%203006!3m2!1d-37.8234754!2d144.96358279999998!4m5!1s0x6ad65d5173a284b5%3A0x958eeaf04deea384!2sMelbourne%20Convention%20and%20Exhibition%20Centre%20(MCEC)%2C%201%20Convention%20Centre%20Pl%2C%20South%20Wharf%20VIC%203006!3m2!1d-37.826996699999995!2d144.9526921!5e0!3m2!1sen!2sau!4v1620094344581!5m2!1sen!2sau",
       "notes" : `<em><b>PLEASE NOTE</b>: Accessible rooms are upon request directly with the Accommodation Secretariat via the registration or via e-mail on <a href="mailto:accommodation@bettertogether2022.org">accommodation@bettertogether2022.org</a>.</em>`,
       "rooms" : [
         {
          "type" : "Studio Apartment",
          "cost" : "150",
          "img" : "room1.jpg",
          "desc" : `per night (room only) with Wi-Fi included`
        },
        {
          "type" : "One Bedroom Apartment",
          "cost" : "165",
          "img" : "room1.jpg",
          "desc" : `per night (room only) with Wi-Fi included`
        },
        {
          "type" : "Two Bedroom Apartment",
          "cost" : "235",
          "img" : "room2.jpg",
          "desc" : `per night (room only) with Wi-Fi included`
        }
       ]
     },
     {
       "id" : "oaks-melbourne-on-william-suites",
       "name" : "Oaks Melbourne on William Suites",
       "folder" : "Oaks Melbourne on William Suites",
       "address" : "350 William Street, Melbourne VIC 3000",
       "distance" : "1.7 km",
       "time" : "15 min",
       "description" : `Steps away from world-class shopping and dining to enjoy post attending the <a href="https://bettertogether2022.org/">Better Together 2022</a> Conference, this property is stylish and comfortable to stay and relax after a long day.`,
       "map" : "https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d12606.993711973253!2d144.94870143577967!3d-37.819361176019804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e2!4m5!1s0x6ad65d4a19ff604d%3A0xffcb22d801a49b!2sOaks%20Melbourne%20on%20William%20Suites%2C%20350%20William%20St%2C%20Melbourne%20VIC%203000!3m2!1d-37.811234999999996!2d144.956563!4m5!1s0x6ad65d5173a284b5%3A0x958eeaf04deea384!2sMelbourne%20Convention%20and%20Exhibition%20Centre%20(MCEC)%2C%201%20Convention%20Centre%20Pl%2C%20South%20Wharf%20VIC%203006!3m2!1d-37.826996699999995!2d144.9526921!5e0!3m2!1sen!2sau!4v1620094513940!5m2!1sen!2sau",
       "notes" : `<em><b>PLEASE NOTE</b>: Accessible rooms are upon request directly with the Accommodation Secretariat via the registration or via e-mail on <a href="mailto:accommodation@bettertogether2022.org">accommodation@bettertogether2022.org</a>.</em>`,
       "rooms" : [
         {
          "type" : "Studio Apartment",
          "cost" : "175",
          "img" : "room1.jpg",
          "desc" : `per night (room only) with Wi-Fi included`
         }
       ]
     },
   ];

  document.getElementById('cards').innerHTML = hotels.map(hotel => `
    <div class="row mt-4 align-items-center justify-content-center a-card">
      <div class="col-12 col-md-5 p-0">
        <img src="./img/accommodation/${hotel.folder}/exterior400x300.jpg" class="img-fluid">
      </div>
      <div class="col-12 col-md-7 p-4">
        <h3 class="mt-0 mt-md-4">${hotel.name}</h3>
        <p class="mt-0"><b>${hotel.address}</b></p>
        <p class="float-right my-0"><a href="#${hotel.id}" data-toggle="modal" class="a-button">View details</a></p>
        <p class="mb-0 mb-md-4"><i class="fas fa-walking mx-2"></i> ${hotel.distance} <i class="far fa-clock mx-2"></i> ${hotel.time} <i class="fas fa-dollar-sign mx-2"></i> ${hotel.rooms[0].cost}</p>
      </div>
    </div>
  `).join(``);

  document.getElementById('modals').innerHTML = hotels.map(hotel => `
    <div class="modal fade" id="${hotel.id}">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <h2 class="mb-0">${hotel.name}</h2>
          <h3 class="mt-0">${hotel.address}</h3>
          <img src="./img/accommodation/${hotel.folder}/exterior800x500.jpg" class="img-fluid mb-4">
          <p><b>Distance to Melbourne Convention & Exhibition Centre:</b> <i class="fas fa-walking mx-2"></i> ${hotel.distance} <i class="far fa-clock mx-2"></i> ${hotel.time}</p>
          <p>${hotel.description}</p>
          <iframe src="${hotel.map}" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" class="my-4"></iframe>

          <h3 class="mt-0">Room Types</h3>
          <div class="row align-items-center">
            ${hotel.rooms.map(room => `
              <div class="col-12 col-md-5 mt-4">
                <img src="./img/accommodation/${hotel.folder}/${room.img}" class="img-fluid">
              </div>
              <div class="col-12 col-md-7">
                <h4 class="mt-md-0 mt-3">${room.type}</h4>
                <p><b>$${room.cost}</b> <br>
                ${room.desc}</p>
              </div>
            `).join(``)}
            ${hotel.note == `` ? `` :
              `<div class="col-12 mt-4">
                <p>${hotel.notes}</p>
              </div>`}
          </div>
          <button type="button" class="close" data-dismiss="modal"><i class="fas fa-times"></i></button>
        </div>
      </div>
    </div>
  `).join(``);
 </script>

 <hr class='my-4'>

  <h2>Cancellations</h2>
  <p><b>NO ACCOMMODATION PAYMENTS WILL BE REFUNDED ON OR AFTER 24 January 2022.</b></p>
  <p>Participants who confirm an accommodation booking with a credit card or full pre-payment and who wish to cancel on or after 24 January 2022 are liable for the full cost of their accommodation nights cancelled. To cancel your reservation, please contact The Accommodation Secretariat at. Name changes to a reservation can be made at no charge.</p>

  <h2>Change of Booking</h2>
  <p>Any change in booking must be made in writing to the Accommodation Secretariat and NOT directly to the hotel before 24 January 2022. Any changes received after 24 January 2022 will be at the hotels discretion and based on availability.</p>

  <h2>Early Arrival</h2>
  <p>As check in at most hotels is not until 1400, it is possible that your room may not be ready for immediate occupation on your early arrival. Whilst hotels will do everything possible to accommodate early arrivals, if you wish to be guaranteed immediate occupation you can pay an extra day’s tariff for the night before you are due to arrive. If you wish to take this precaution, please advise the Accommodation Secretariat on <a href="mailto:accommodation@bettertogether2022.org">accommodation@bettertogether2022.org</a> or through the registration form so we can notify the hotel that your room is required early.</p>

  <h2>No Show</h2>
  <p>In the event of a “No Show” on the date of arrival, full cancellation penalties apply to all nights of the stay.</p>

  <h2>Enquiries</h2>
  <p>Please direct all accommodation enquiries to:</p>
  <p><b><a href="https://bettertogether2022.org/">Better Together 2022</a> Accommodation Secretariat</b> <br>
    Telephone: +61 (0) 2 9254 5000 <br>
    Email: <a href="mailto:accommodation@bettertogether2022.org">accommodation@bettertogether2022.org</a></p>



<?php
    include('include/footer.php');
 ?>

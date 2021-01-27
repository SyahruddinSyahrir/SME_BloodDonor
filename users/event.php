<?php
$title = "Home";
$setHomeActive = "active";
include 'layout/_header.php';


?>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
@import url("https://fonts.googleapis.com/css?family=Roboto+Condensed");

body {
  margin: 0;
  padding: 0;
  font-family: "Roboto Condensed", sans-serif;
}

section {
  display: grid;
  grid-gap: 0;
  grid-template-columns: 1fr 1fr;
  grid-template-rows: 1fr 1fr;
  grid-template-areas:
    "main main"
    "event event";
  background-image: url(https://s3.ca-central-1.amazonaws.com/image-web-frankie/Music+show.jpg);
  background-size: cover;
  background-position: center;
  min-height: 100vh;
}

@media (min-width: 1200px) {
  section {
    grid-template-areas:
      "main event"
      "main event";
  }
}

.leftBox {
  grid-area: main;
  padding: 50px;
  box-sizing: border-box;
}

section .leftBox .content {
  color: #fff;
  background-color: rgba(0, 0, 0, 0.5);
  padding: 40px;
  transition: 0.5s;
}

section .leftBox .content:hover {
  background-color: #e91e63;
}

section .leftBox .content h1 {
  margin: 0;
  padding: 0;
  font-size: 50px;
  text-transform: uppercase;
}

section .leftBox .content p {
  margin: 10px 0 0;
  padding: 0;
}

section .events {
  grid-area: event;
  background-color: rgba(0, 0, 0, 0.5);
  box-sizing: border-box;
}

section .events ul {
  margin: 0;
  padding: 40px;
  list-style: none;
}

section .events ul li {
  background-color: #fff;
  box-sizing: border-box;
  display: grid;
  grid-template-columns: 30% 1fr;
  grid-template-rows: 1fr;
  grid-gap: 0;
  grid-template-areas:
    "time time"
    "detail detail";
  margin-bottom: 20px;
}

@media (min-width: 768px) {
  section .events ul li {
    grid-template-areas:
      "time detail"
      "time detail";
  }
}

section .events ul li .time {
  grid-area: time;
  position: relative;
  padding: 8% 40%;
  background-color: #262626;
  box-sizing: border-box;
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  transition: 0.5s;
}

section .events ul li:hover .time {
  background-color: #e91e63;
}

section .events ul li .time h2 {
  margin: 0;
  padding: 0;
  color: #fff;
  font-size: 60px;
  line-height: 30px;
}

section .events ul li .time h2 span {
  font-size: 30px;
}

section .events ul li .details {
  grid-area: detail;
  padding: 20px 20px 32px;
  background-color: #fff;
  box-sizing: border-box;
}

section .events ul li .details h3 {
  margin: 0;
  padding: 0;
  font-size: 22px;
}

section .events ul li .details p {
  margin: 10px 0 0;
  padding: 0;
  font-size: 16px;
}

section .events ul li .details a {
  display: inline-block;
  text-decoration: none;
  padding: 10px 15px;
  border: 2px solid #262626;
  margin-top: 16px;
  font-size: 18px;
  transition: 0.5s;
}

section .events ul li .details a:hover {
  background-color: #e91e63;
  color: #fff;
  border-color: #e91e63;
}


</style>
</head>


<head><script>

</script>

</head>

<section>
  <div class="leftBox">
    <div class="content">
      <h1>Events & Campaign</h1>
      <p>Blood Donation Event and Campaign . 2021 January & February</p>
    </div><br><br>
  <a href="https://www.google.com/search?ei=RF4RYIi7EPOU4-EPi4yuoAI&q=blood+donation+event+in+malaysia&oq=blood+donation+event+in+malaysia&gs_lcp=CgZwc3ktYWIQAzICCAA6BAgAEEM6BggAEBYQHjoICAAQFhAKEB46CAghEBYQHRAeOgQIABANUKAPWIMzYOhOaAJwAHgBgAHdA4gBsRiSAQoxLjEzLjAuMS4ymAEAoAEBqgEHZ3dzLXdpesABAQ&sclient=psy-ab&ved=0ahUKEwiI7ZSlkLzuAhVzyjgGHQuGCyQQ4dUDCA0&uact=5"
 >View more campaign</a>
  </div>
  <div class="events">
    <ul>
      <li>
        <div class="time">
          <h2> 31<br><span>Jan</span></h2>
        </div>
        <div class="details">
          <h3>O+ blood donation needed in Loh Guan Lye Specialists Centre Blood Lab @ 1st floor 238, Jalan Macalister 10400 Penang, Malaysia</h3>
          <p>Acceptable Group: O+, O- <br>Before Jan 30, 2021 (Sat)<br>Loh Guan Lye Specialists Centre Blood Lab @ 1st floor 238, Jalan Macalister 10400 Penang, Malaysia</p>
        </div>
        <div style="clear: both;"></div>
      </li>


      <li>
        <div class="time">
          <h2>29<br><span>Jan</span></h2>
        </div>
        <div class="details">
          <h3>AEON - CHERAS SELATAN STORE AND SHOPPING CENTRE Blood Donation Event</h3>
          <p>Date:Jan 29, 2021 (Fri)10:00 am - 5:00 pm<br>CONCOURSE AREA (DEPAN POH KONG) @ AEON - CHERAS SELATAN STORE AND SHOPPING CENTRE, LEBUH TUN HUSSEIN ONN, 43200 BALAKONG, SELANGOR.<br>Contact No:+60326132688</p>
        </div>
        <div style="clear: both;"></div>
      </li>

      <li>
        <div class="time">
          <h2>29<br><span>Jan</span></h2>
        </div>
        <div class="details">
          <h3>TESCO EXTRA CHERAS Blood Donation Event</h3>
          <p>Date:Jan 29, 2021 (Fri)11:00 am - 5:00 pm<br>Address: GROUND FLOOR (DEPAN GINTELL) @ TESCO EXTRA CHERAS, NO. 2, JALAN MIDAH 2, TAMAN MIDAH, CHERAS 56100 KUALA LUMPUR.<br>Contact No:+60326132688</p>
        </div>
        <div style="clear: both;"></div>
      </li>

      <li>
        <div class="time">
          <h2>29<br><span>Jan</span></h2>
        </div>
        <div class="details">
          <h3>IKHASAS SDN BHD Blood Donation Event</h3>
          <p>Date:Jan 29, 2021 (Fri)11:00 am - 4:00 pm<br>Address:LOBI @ ITECH TOWER, JALAN IMPACT, CYBER 6, 63000 CYBERJAYA.<br>Contact No:+60326132688</p>
        </div>
        <div style="clear: both;"></div>
      </li>


      <li>
        <div class="time">
          <h2>29<br><span>Jan</span></h2>
        </div>
        <div class="details">
          <h3>TESCO SETIA ALAM Blood Donation Event</h3>
          <p>Date:Jan 29, 2021 (Fri)10:00 am - 4:00 pm<br>Addres :MOBILE BAS PDN @ TESCO SETIA ALAM, NO.2, JALAN SETIA PRIMA U13/S, SETIA ALAM, 40170 SHAH ALAM, SELANGOR<br>Contact No:+60326132688</p>
        </div>
        <div style="clear: both;"></div>
      </li>
    </ul>
  </div>
</section>




</div>


<?php include 'layout/_footer.php'; ?>

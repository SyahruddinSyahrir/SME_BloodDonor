<?php
$i=0;
if(isset($_POST['searchBtn'])){
    require_once 'php/DBConnect.php';
    $db = new DBConnect();
    
    $bloodType = $_POST['blood_group'];
    $donors = $db->getDonorsByBloodType($bloodType);
}
$title = "Blood Availability";
$setAvailabilityActive = "active";
include 'layout/_header.php';

include 'layout/navbar.php';
?>

<head>
<style>

* {
  box-sizing: border-box;
}
bodyss {
  background-color: white;
  text-align: center;
  height: 100vh;
  width: 100vw;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
  margin: 0;
  padding: 0;
  font-family: 'Arial', sans-serif;
  font-size: 14px;
}
.envelope {
  width: 300px;
  height: 150px;
  background: white;
  position: relative;
 display: block;
    margin-left: auto;
    margin-right: auto
}
.envelope__check {
  height: 100%;
  width: 100%;
  z-index: 10;
  opacity: 0;
  position: absolute;
  left: 0;
  top: 0;
  margin: 0;
  cursor: pointer;
}
.envelope__check:checked ~ .envelope__flap {
  transition: transform 0.25s 0s, z-index 0s 0.25s;
  transform: rotateX(-180deg);
  z-index: 0;
}
.envelope__check:checked ~ .envelope__letter {
  transform: translateY(-110%);
  transition: transform 0.25s 0.25s, z-index 0s 0.5s;
  z-index: 5;
}
.envelope__check:checked ~ .envelope__letter .letter__content:nth-child(2),
.envelope__check:checked ~ .envelope__letter .letter__content:nth-child(3) {
  transition: transform 0.25s 0.5s;
  transform: rotateX(0deg);
}
.envelope__flap {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 75%;
  transition: transform 0.25s 0.5s, z-index 0s 0.5s;
  transform-origin: top center;
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  background: repeating-linear-gradient(-45deg, #c1ab8e, #c1ab8e 10px, #e74c3c 10px, #e74c3c 20px, #c1ab8e 20px, 
      #c1ab8e 30px, #1e90ff 30px, #1e90ff 40px) 0 0/100% 5px no-repeat, #c1ab8e;
  z-index: 4;
  -webkit-clip-path: polygon(5% 40%, 50% 100%, 95% 40%, 100% 0, 0 0);
          clip-path: polygon(5% 40%, 50% 100%, 95% 40%, 100% 0, 0 0);
}
.envelope__flap--inside {
  background: #c1ab8e;
  -webkit-backface-visibility: visible;
          backface-visibility: visible;
}
.envelope__back {
  height: 100%;
  width: 100%;
  height: 100%;
  width: 100%;
  position: absolute;
  top: 0;
  left: 0;
  z-index: 3;
  background: repeating-linear-gradient(-45deg, #cebda6, #cebda6 10px, #e74c3c 10px, #e74c3c 20px, #cebda6 20px, #cebda6 30px, 
      #1e90ff 30px, #1e90ff 40px) 0 100%/100% 5px no-repeat, repeating-linear-gradient(-45deg, #cebda6, #cebda6 10px, #e74c3c 10px, 
          #e74c3c 20px, #cebda6 20px, #cebda6 30px, #1e90ff 30px, #1e90ff 40px) 0 100%/5px 100% no-repeat, repeating-linear-gradient
      (-45deg, #cebda6, #cebda6 10px, #e74c3c 10px, #e74c3c 20px, #cebda6 20px, #cebda6 30px, #1e90ff 30px, #1e90ff 40px) 100% 100%/5px 100% no-repeat, #cebda6;
  -webkit-clip-path: polygon(80% 40%, 100% 0, 100% 100%, 0 100%, 0 0, 20% 40%);
          clip-path: polygon(80% 40%, 100% 0, 100% 100%, 0 100%, 0 0, 20% 40%);
}
.envelope__back:after {
  height: 100%;
  width: 100%;
  background: repeating-linear-gradient(-45deg, #c7b49a, #c7b49a 10px, #e74c3c 10px, #e74c3c 20px, #c7b49a 20px, #c7b49a 30px, #1e90ff 30px, 
      #1e90ff 40px) 0 100%/100% 5px no-repeat, #c7b49a;
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  -webkit-clip-path: polygon(70% 10%, 100% 100%, 0 100%, 30% 10%);
          clip-path: polygon(70% 10%, 100% 100%, 0 100%, 30% 10%);
}
.envelope__letter {
  height: 90%;
  width: 90%;
  z-index: 1;
  position: absolute;
  left: 5%;
  top: 5%;
  transition: transform 0.25s 0.25s, z-index 0s 0.25s;
  transform: translateY(0);
  font-size: 12px;
  color:white;
}
.letter__content {
  height: 100%;
  width: 100%;
  background-color: black;
  top: 0;
  left: 0;
  position: absolute;
  padding: 14px;
  text-align: justify;
  font-size: 12px;
}
.letter__content:nth-child(2),
.letter__content:nth-child(3) {
  transition: transform 0.25s;
  top: 100%;
  transform-origin: top center;
  transform: rotateX(180deg);
  -webkit-backface-visibility: visible;
          backface-visibility: visible;
  z-index: 2;
  border-top: 1px solid #eee;
}
.letter__content:nth-child(3) {
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
}
.sign-off {
  position: absolute;
  bottom: 12px;
  right: 12px;
  font-size: 20px;
  font-family: cursive;
  transform: skewX(-20deg);
}


.contact-footer{
    padding: 2rem 0;
    background: #000;
    position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  background-color: black;
  text-align: center;
}
.contact-footer h3{
    font-size: 1.3rem;
    color: #fff;
    margin-bottom: 1rem;
    text-align: center;
}
.social-links{
    display: flex;
    justify-content: center;
}
.social-links a{
    text-decoration: none;
    width: 40px;
    height: 40px;
    color: #fff;
    border: 2px solid #fff;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0.4rem;
    transition: all 0.4s ease;
}
.social-links a:hover{
    color: #f7327a;
    border-color: #f7327a;
}
</style>


</head>

<div class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <form class="form-inline" role='form' method="post" action="availability.php">
                <label class="form-label">Select Blood Group: </label>
                <select name="blood_group" class="form-control">
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                </select>
                <button type="submit" class="btn btn-success" name="searchBtn">Check Availability</button>
            </form>
            <br>
            <div class="form-group">
                <?php if(isset($donors[0])): ?>
                <label>Total number of donors with <?= $donors[0]['b_type']; ?> </label><div class="emphasize"><?= count($donors); ?> Donors</div>
                <table class="table table-condensed">
                    <thead>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>D.O.B</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Blood Group</th>
                    </thead>
                    
                    <?php foreach($donors as $d): $i++;?>
                    
                    <tr class="<?php if($i%2==0){echo 'bg-danger';} else{echo 'bg-success';} ?>">
                        <td><a href="../profile.php?id=<?= $d['id']; ?>"><?= $d['fname'] ." ".$d['mname']." ".$d['lname']; ?></a></td>
                        <td><?= $d['sex']; ?></td>
                        <td><?= $d['bday']; ?></td>
                        <td><?= wordwrap($d['h_address'],26,'<br>' ); ?></td>
                        <td><?= $d['city']; ?></td>
                        <td><?= $d['b_type']; ?></td>
                    </tr>
                    <?php endforeach;?>
                </table>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div><br><br>
    
    <div class="envelope">
  <input class="envelope__check" type="checkbox"/>
  <div class="envelope__flap envelope__flap--inside"></div>
  <div class="envelope__flap"></div>
  <div class="envelope__letter">
    <div class="letter">
      <div class="letter__content">
        <p>Hey! 👋</p>
        <p>This is where you can check the availability of the blood type that you needed. If in case of emergency you can contact us by 
            calling +60109087975 or you can send email to <a href="mailto:blood_bank21@gmail.com">our management teams</a></p>
      </div>
      <div class="letter__content"></div>
      <div class="letter__content">
        <p>Stay safe and dont forget to follow the SOP. Let us embrace the new norm for better future. Together we will end the 
            Covid-19 pandemic.</p><span class="sign-off">Thank you</span>
      </div>
    </div>
  </div>
  <div class="envelope__back"></div>
</div>
    
</div>

<div class = "contact-footer">
        <h3>Follow Us</h3>
        <div class = "social-links">
          <a href = "#" class = "fa">&#xf09a;</a>
          <a href = "#" class = "fa">&#xf099;</a>
          <a href = "#" class = "fa">&#xf16d;</a>
          <a href = "#" class = "fa">&#xf08c;</a>
          <a href = "#" class = "fa">&#xf16a;</a>
        </div>
      </div>
</div>

<?php include 'layout/_footer.php'; ?>

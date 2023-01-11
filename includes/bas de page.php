<?php
if(isset($_POST['emailsubscibe']))
{
$subscriberemail=$_POST['subscriberemail'];
$sql ="SELECT SubscriberEmail FROM tblsubscribers WHERE SubscriberEmail=:subscriberemail";
$query= $dbh -> prepare($sql);
$query-> bindParam(':subscriberemail', $subscriberemail, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query -> rowCount() > 0)
{
echo "<script>alert('Déjà inscrit.');</script>";
}
else{
$sql="INSERT INTO  tblsubscribers(SubscriberEmail) VALUES(:subscriberemail)";
$query = $dbh->prepare($sql);
$query->bindParam(':subscriberemail',$subscriberemail,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
echo "<script>alert('inscrit avec succès.');</script>";
}
else 
{
echo "<script>alert('Un problème est survenu. Veuillez réessayer');</script>";
}
}
}
?>

<footer>
  <div class="footer-top">
    <div class="container">
      <div class="row">
      
        <div class="col-md-6">
          <h6>À propos de nous</h6>
          <ul>
          <li><a href="page.php?type=aboutus">À propos de nous</a></li>
            <li><a href="page.php?type=faqs">FAQs</a></li>
            <li><a href="page.php?type=privacy">confidentialité</a></li>
          <li><a href="page.php?type=terms">Conditions d'utilisation</a></li>
               <li><a href="admin/">Connexion administrateur</a></li>
          </ul>
        </div>
  
        <div class="col-md-3 col-sm-6">
          <h6>Abonnez-vous à la newsletter</h6>
          <div class="newsletter-form">
            <form method="post">
              <div class="form-group">
                <input type="email" name="subscriberemail" class="form-control newsletter-input" required placeholder="Entrer votre adresse email " />
              </div>
              <button type="submit" name="emailsubscibe" class="btn btn-block">Abonnez-vous <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
            </form>
            <p class="subscribed-text">* Nous envoyons des offres spéciales et les dernières nouvelles de l'automobile à nos utilisateurs abonnés chaque semaine.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
    <div class="container">
      <div class="row">
		 <style> 
#rcorners {
  background: WHITE;
  padding: 3px;
  width: 270px;
  height: 341,33px;
}		 
		 </style>
</html>
    </div>
  </div>
</footer>
<footer style="background-color: #393939;">
    <div class="container-fluid">
	
	<div class="col-sm-7 text-justify">
	<h2 align="center">SAGHIR Anass</h2>
	     <center><img src="includes/developpeur/img2.png"  id="rcorners" alt="Image"></center>
	</div>
	<div class="col-sm-4 hov">
	
	<BR>
		<h3 style="color:#cdd51f;">Contacter le développeur</h2>
		<HR>
      <p style="color:white;"><strong>Addresse:&nbsp;</strong>Mediouna, CASABLANCA</p>
      <p style="color:white;"><strong>Email :&nbsp;</strong>sa.saghiranass@gmail.com</p>
      <p style="color:white;"><strong>Contact :&nbsp;</strong>(+212) 643523193</p>
	</div>
  </div>
</footer>
<style>
h2 {
	color : green;
	align : center;
	background-color: lightgrey;
	text-shadow: 2px 2px 5px yellow;
}
</style>
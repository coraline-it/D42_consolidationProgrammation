<style>
    <?php include '../style.css'; ?>
</style>

<?php
include_once('header.php');
$bdd = include_once('index.php');

$userDetailsQR = "SELECT * FROM tp_utilisateur";
$courseDetailsQR = "SELECT * FROM tp_cours";

$userDetails = $bdd->prepare($userDetailsQR);
//$courseDetails = $bdd->prepare($courseDetailsQR);

$userDetails->execute();
//$courseDetails->execute();

$users = $userDetails->fetchAll();
//$courses = $courseDetails->fetchAll();

foreach ($users as $user) {
    ?>

  <div class="card">
    <div class="text">
      <p><?php echo $user['prenom']; ?></p>
      <p><?php echo $user['nom']; ?></p>
      <p><?php echo $user['adresse']; ?></p>
      <p><?php echo $user['telephone']; ?></p>
      <p><?php echo $user['img']; ?></p>
    </div>
    <div class="image">
        <?php echo "<img src='photo.jpg'style='width: 50px'>" ?>
      <img src="<?php if($course['img'] == NULL) { echo "?><img src='photo.jpg'> ?> <?php" ;}?>">
    </div>
  </div>

    <?php
}
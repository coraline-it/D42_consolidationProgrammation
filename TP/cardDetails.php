<style>
    <?php include '../style.css'; ?>
</style>

<?php
$bdd = include_once('index.php');

$userDetailsQR = "SELECT * FROM tp_utilisateur";
$courseDetailsQR = "SELECT * FROM tp_cours";

$userDetails = $bdd->prepare($userDetailsQR);
$courseDetails = $bdd->prepare($courseDetailsQR);

$userDetails->execute();
$courseDetails->execute();

$users = $userDetails->fetchAll();
$courses = $courseDetails->fetchAll();
foreach ($courses as $course) {
    ?>

  <div class="card">
    <div class="text">
      <p><?php echo $course['intitule']; ?></p>
      <p><?php echo $course['code']; ?></p>
      <p><?php echo $course['trigramme']; ?></p>
      <p><?php echo $course['nom']; ?></p>
      <p><?php echo $course['prenom']; ?></p>
      <p><?php echo $course['description']; ?></p>
    </div>
    <div class="image">
        <?php echo "<img src='photo.jpg'style='width: 50px'>" ?>
      <img src="<?php if($course['img'] == NULL) { echo "?><img src='photo.jpg'> ?> <?php" ;}?>">
    </div>
  </div>

    <?php
}

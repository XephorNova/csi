
<?php include('../layout/header.php');?>

<?php 
 require('../configuration/database.php');
$query="SELECT * FROM `problem_of_the_week`";
$getdata=mysqli_query($connec,$query);

 $number='phone_number';
 $name='name_of_student';
 $score='score';
$e='email_student';
     
  
  ?>
  <h2 class="text-center lead">Students Data</h2>
  <table class="table">
  <thead>
    <tr>
      <th class="text-center" scope="col">name</th>
      <th class="text-center" scope="col">phonenumber</th>
      <th class="text-center" scope="col">email</th>
      <th class="text-center" scope="col">score</th>
    </tr>
  </thead>
 
  
  <?php while($row=mysqli_fetch_array($getdata)){ ?>
   <tbody>
    <tr>
      <td class="text-center"><?php echo $row[$name]; ?></td>
      <td class="text-center"><?php echo $row[$number]; ?></td>
      <td class="text-center"><?php echo $row[$e]; ?></td>
      <td class="text-center"><?php echo $row[$score]; ?></td>
    </tr>

    </tbody>
    <?php
}




?>

</table>
<?php include('../layout/footer.php'); ?>
<?php require_once('../private/initialize.php'); ?>

<?php $page_title = 'Inventory'; ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="main">

  <div id="page">
    <div class="intro">
      <img class="inset" src="<?php echo url_for('/images/AdobeStock_55807979_thumb.jpeg') ?>" />
      <h2>Our Inventory of Used Bicycles</h2>
      <p>Choose the bike you love.</p>
      <p>We will deliver it to your door and let you try it before you buy it.</p>
    </div>

    <table id="inventory">
      <tr>
        <th>Brand</th>
        <th>Model</th>
        <th>Year</th>
        <th>Category</th>
        <th>Gender</th>
        <th>Color</th>
<<<<<<< HEAD
        <th>Price</th>
        <th>&nbsp;</th>
=======
        <th>Weight</th>
        <th>Condition</th>
        <th>Price</th>
>>>>>>> dev
      </tr>

<?php

<<<<<<< HEAD
$bikes = Bicycle::find_all();

?>
      <?php foreach($bikes as $bike) { ?>
=======
$parser = new ParseCSV(PRIVATE_PATH . '/used_bicycles.csv');
$bike_array = $parser->parse();

?>
      <?php foreach($bike_array as $args) { ?>
        <?php $bike = new Bicycle($args); ?>
>>>>>>> dev
      <tr>
        <td><?php echo h($bike->brand); ?></td>
        <td><?php echo h($bike->model); ?></td>
        <td><?php echo h($bike->year); ?></td>
        <td><?php echo h($bike->category); ?></td>
        <td><?php echo h($bike->gender); ?></td>
        <td><?php echo h($bike->color); ?></td>
<<<<<<< HEAD
        <td><?php echo h('$' . number_format($bike->price, 2, '.', ',')); ?></td>
        <td><a href="detail.php?id=<?php echo $bike->id; ?>">View</a></td>
=======
        <td><?php echo h($bike->weight_kg()) . ' / ' . h($bike->weight_lbs()); ?></td>
        <td><?php echo h($bike->condition()); ?></td>
        <td><?php echo h('$' . number_format($bike->price, 2, '.', ',')); ?></td>
>>>>>>> dev
      </tr>
      <?php } ?>

    </table>

<<<<<<< HEAD
=======
    <?php 

    $sql = "SELECT * FROM bicycles";
    $result = Bicycle::find_all();
    $row = $result->fetch_assoc();
    $result->free();

    echo "BRAND: " .$row['brand'];

    ?>

>>>>>>> dev
  </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>

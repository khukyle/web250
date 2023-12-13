<?php 
  require_once('../private/initialize.php');
  $page_title = 'Bird List';
  include(SHARED_PATH . '/public_header.php');
?>

<h2>Bird inventory</h2>
<p>This is a short list -- start your birding!</p>

<?php if($session->is_logged_in()) { ?>
  <a href="<?php echo url_for('members/birds/new.php'); ?>">Add a Bird</a>
<?php }?>

    <table border="1">
      <tr>
        <th>Name</th>
        <th>Habitat</th>
        <th>Food</th>
        <th>Conservation</th>
        <th>Backyard Tips</th>
        <th>&nbsp;</th>
      </tr>

<?php
  $birds = Bird::find_all();

  foreach($birds as $bird) { 

  ?>
      <tr>
        <td><?php echo h($bird->common_name); ?></td>
        <td><?php echo h($bird->habitat); ?></td>
        <td><?php echo h($bird->food); ?></td>
        <td><?php echo h($bird->conservation()); ?></td>
        <td><?php echo h($bird->backyard_tips); ?></td>
        <td><a href="detail.php?id=<?php echo $bird->id; ?>">View</a></td>

        <?php if($session->is_logged_in()) { ?>
          <td><a href="members/birds/edit.php?id=<?php echo $bird->id; ?>">Edit</a></td>
          <td><a href="<?php echo url_for('members/birds/delete.php?id=' . h(u($bird->id))); ?>">Delete</a></td>
        <?php } ?>
      </tr>
      <?php } ?>

    </table>


<?php include(SHARED_PATH . '/public_footer.php'); ?>

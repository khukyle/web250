<?php require_once('../../../private/initialize.php'); ?>
<?php require_login(); ?>

<?php

  // Get requested ID

  $id = $_GET['id'] ?? false;

  if(!$id) {
    redirect_to('/members/birds/index.php');
  }

  // Find bird using ID

  $bird = Bird::find_by_id($id);
  

?>

<?php $page_title = 'Show Bicycle: ' . h($bird->name()); ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<a class="back-link" href="<?php echo url_for('/members/birds/index.php'); ?>">&laquo; Back to List</a>

      <dl>
        <dt>ID</dt>
        <dd><?php echo h($bird->id); ?></dd>
      </dl>
      <dl>
        <dt>Name</dt>
        <dd><?php echo h($bird->common_name); ?></dd>
      </dl>
      <dl>
        <dt>Habitat</dt>
        <dd><?php echo h($bird->habitat); ?></dd>
      </dl>
      <dl>
        <dt>Food</dt>
        <dd><?php echo h($bird->food); ?></dd>
      </dl>
      <dl>
        <dt>Conservation Level</dt>
        <dd><?php echo h($bird->conservation()); ?></dd>
      </dl>
      <dl>
        <dt>Backyard Tips</dt>
        <dd><?php echo h($bird->backyard_tips); ?></dd>
      </dl>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>

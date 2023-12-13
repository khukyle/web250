<?php require_once('../../private/initialize.php'); ?>

<?php require_login(); ?>

<?php $page_title = 'User Menu'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
  <div id="main-menu">
    <h2>Main Menu</h2>
    <ul>
      <li><a href="<?php echo url_for('/members/birds/index.php'); ?>">Birds</a></li>
    <?php if($session->is_admin_logged_in()) { ?>
      <li><a href="<?php echo url_for('members/users/index.php'); ?>">Members</a></li>
    <?php } ?>
    </ul>
  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>

<?php

require_once('../../../private/initialize.php');

require_login();

if(is_post_request()) {

  // Create record using post parameters
  $args = $_POST['bird'];
  $bird = new Bird($args);
  $result = $bird->save();

  if($result === true) {
    $new_id = $bird->id;
    $_SESSION['message'] = 'The bird was added successfully.';
    redirect_to(url_for('/members/birds/show.php?id=' . $new_id));
  } else {
    // show errors
  }

} else {
  // display the form
  $bird = new Bird;
}

?>

<?php $page_title = 'Add Bird'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/members/birds/index.php'); ?>">&laquo; Back to List</a>

  <div class="bird new">
    <h1>Add Bird</h1>

    <?php echo display_errors($bird->errors); ?>

    <form action="<?php echo url_for('/members/birds/new.php'); ?>" method="post">

      <?php include('form_fields.php'); ?>

      <div id="operations">
        <input type="submit" value="Add Bird" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>

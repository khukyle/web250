<?php

require_once('../private/initialize.php');

/* 
  Use the bicycles/staff/new.php file as a guide 
  so your file mimics the same functionality.
  Be sure to include the display_errors() function.
*/


if(is_post_request()) {

  // Create record using post parameters
  $args = $_POST['bird'];
  $bird = new Bird($args);
  $result = $bird->save();

  if($result === true) {
    $new_id = $bird->id;
    $_SESSION['message'] = 'The bird was added successfully.';
    redirect_to(url_for('show.php?id=' . $new_id));
  } else {
    // show errors
  }

} else {
  // display the form
  $bird = new Bird;
}

?>

<?php $page_title = 'Add Bird'; ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('birds.php'); ?>">&laquo; Back to List</a>

  <div class="bird new">
    <h1>Add Bird</h1>

    <?php echo display_errors($bird->errors); ?>

    <form action="<?php echo url_for('new.php'); ?>" method="post">

      <?php include('form_fields.php'); ?>

      <div id="operations">
        <input type="submit" value="Add Bird" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>

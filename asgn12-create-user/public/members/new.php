<?php

require_once('../../private/initialize.php');

require_login();

if(is_post_request()) {

  // Create record using post parameters
  $args = $_POST['member'];
  $member = new Member($args);
  $result = $member->save();

  if($result === true) {
    $new_id = $member->id;
    $_SESSION['message'] = 'The user was added successfully.';
    redirect_to(url_for('show.php?id=' . $new_id));
  } else {
    // show errors
  }

} else {
  // display the form
  $member = new Member;
}

?>

<?php $page_title = 'Add User'; ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('members/index.php'); ?>">&laquo; Back to List</a>

  <div class="user new">
    <h1>Add User</h1>

    <?php echo display_errors($member->errors); ?>

    <form action="<?php echo url_for('members/new.php'); ?>" method="post">

      <?php include('../form_fields.php'); ?>

      <div id="operations">
        <input type="submit" value="Add User" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>

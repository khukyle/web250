<?php

require_once('../private/initialize.php');

if(is_post_request()) {

  // Create record using post parameters
  $args = $_POST['user'];
  $user = new Member($args);
  $result = $user->save();

  if($result === true) {
    $new_id = $user->id;
    $session->message('The user was created successfully.');
    redirect_to(url_for('index.php'));
  } else {
    // show errors
  }

} else {
  // display the form
  $user = new Member;
}

?>

<?php $page_title = 'Create User'; ?>

<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="content">

  <div class="user new">
    <h1>Create User</h1>

    <?php echo display_errors($user->errors); ?>

    <form action="<?php echo url_for('signup.php'); ?>" method="post">

      <?php include('members/users/form_fields.php'); ?>

      <div id="operations">
        <input type="submit" value="Create User" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>

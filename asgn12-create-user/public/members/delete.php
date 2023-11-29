<?php

require_once('../private/initialize.php');

/* 
  Use the bicycles/staff/delete.php file as a guide 
  so your file mimics the same functionality.
*/

if(!isset($_GET['id'])) {
  redirect_to(url_for('members/index.php'));
}
$id = $_GET['id'];
$member = Member::find_by_id($id);
if($member == false) {
  redirect_to(url_for('members/index.php'));
}

if(is_post_request()) {

  // Delete user
  $result = $member->delete();
  $_SESSION['message'] = 'The user was deleted successfully.';
  redirect_to(url_for('members/index.php'));

} else {
  // Display form
}

?>

<?php $page_title = 'Delete User'; ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('birds.php'); ?>">&laquo; Back to List</a>

  <div class="bird delete">
    <h1>Delete User</h1>
    <p>Are you sure you want to delete this user?</p>

    <form action="<?php echo url_for('delete.php?id=' . h(u($id))); ?>" method="post">
      <div id="operations">
        <input type="submit" name="commit" value="Delete User" />
      </div>
    </form>
  </div>

</div>



<?php include(SHARED_PATH . '/public_footer.php'); ?>

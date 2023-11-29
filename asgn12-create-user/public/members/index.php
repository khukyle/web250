<?php require_once('../../private/initialize.php'); ?>

<?php

// Find all admins
$members = Member::find_all();

?>
<?php $page_title = 'Members'; ?>

<div id="content">
  <div class="member listing">
    <h1>Members</h1>

    <div class="actions">
      <a class="action" href="<?php echo url_for('members/new.php'); ?>">Add Member</a>
    </div>

  	<table class="list">
      <tr>
        <th>ID</th>
        <th>First name</th>
        <th>Last name</th>
        <th>Email</th>
        <th>Username</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
      </tr>

      <?php foreach($members as $member) { ?>
        <tr>
          <td><?php echo h($member->id); ?></td>
          <td><?php echo h($member->first_name); ?></td>
          <td><?php echo h($member->last_name); ?></td>
          <td><?php echo h($member->email); ?></td>
          <td><?php echo h($member->username); ?></td>
          <td><a class="action" href="<?php echo url_for('member/show.php?id=' . h(u($member->id))); ?>">View</a></td>
          <td><a class="action" href="<?php echo url_for('member/edit.php?id=' . h(u($member->id))); ?>">Edit</a></td>
          <td><a class="action" href="<?php echo url_for('member/delete.php?id=' . h(u($member->id))); ?>">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>

  </div>

</div>

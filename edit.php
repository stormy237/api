<?php

require_once 'action/db_connect.php';

include_once 'includes/header.php';

if (isset($_GET['id'])):
  $id = mysqli_escape_string($connect, $_GET['id']);
  $sql = "select * from users where id = '$id'";
  $result = mysqli_query($connect, $sql);
  $data = mysqli_fetch_array($result);
endif

?>
<div class="row">
    <div class="col s12m6 push-m3">
        <h3> Edit User </h3>
        <form action="action/update.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $data ['id']; ?>">
            <div class="input-field col s12">
                <input type="text" name="name" id="name" value="<?php echo $data ['name']; ?>">
                <label for="name"> Nome </label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="email" id="email" value="<?php echo $data ['email']; ?>">
                <label for="email"> Email </label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="birthday" id="birthday" value="<?php echo $data ['birthday']; ?>">
                <label for="birthday"> Data de Nascimento </label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="gender" id="gender" value="<?php echo $data ['gender']; ?>">
                <label for="gender"> Género </label>
            </div>
            <button type="submit" name="btn-edit" class="btn"> Update </button>
            <a href="index.php"  class="btn"> List  </a>
        </form>
    </div>
</div>

<?php

include_once 'includes/footer.php';

?>


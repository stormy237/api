<?php

require_once 'action/db_connect.php';

include_once 'includes/header.php';

if (isset($_GET['id'])):
    $id = mysqli_escape_string($connect, $_GET['id']);

    $result = mysqli_query($connect, $sql);
    $data = mysqli_fetch_array($result);
endif

?>
    <div class="row">
        <div class="col s12m6 push-m3">
            <form action="action/delete.php" method="POST">

                <button type="submit" name="btn-delete1" class="btn"> DELETE </button>
                <a href="index.php"  class="btn"> List  </a>
            </form>
        </div>
    </div>

<?php

include_once 'includes/footer.php';

?>

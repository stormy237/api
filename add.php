<?php

include_once 'includes/header.php';

?>
<div class="row">
    <div class="col s12m6 push-m3">
        <h3> New User </h3>
        <form action="action/create.php" method="POST">
            <div class="input-field col s12">
                <input type="text" name="name" id="name">
                <label for="name"> Nome </label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="email" id="email">
                <label for="email"> Email </label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="birthday" id="birthday">
                <label for="birthday"> Data de Nascimento </label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="gender" id="gender">
                <label for="gender"> Género </label>
            </div>
            <button type="submit" name="btn-register" class="btn"> Register </button>
            <a href="index.php"  class="btn"> List  </a>
        </form>
    </div>
</div>

<?php

include_once 'includes/footer.php';

?>

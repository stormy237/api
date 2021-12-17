<?php
include_once 'action/db_connect.php';
include_once 'includes/header.php';

?>
    <div class="row">
        <div class="col s12m6 push-m3">
           <h3> Users </h3>
           <table class="striped">
               <thead>
                  <tr>
                    <th> Nome</th>
                    <th> Email</th>
                    <th> Data de Nascimento</th>
                    <th> Género</th>
                  </tr>
               </thead>
               <tbody>
               <?php
               $sql = "SELECT * FROM users";
               $result  =mysqli_query($connect, $sql);
               while ($data = mysqli_fetch_array($result)):
               ?>
                   <tr>
                       <td> <?php echo $data['name']; ?> </td>
                       <td> <?php echo $data['email']; ?> </td>
                       <td> <?php echo $data['birthday']; ?> </td>
                       <td> <?php echo $data['gender']; ?>  </td>
                       <td>  <a href="edit.php?id=<?php echo $data ['id']; ?>" class="btn-floating"> <i class="material-icons"> edit </i> </a> </td>
                       <td>  <a href=elim.php?id"=<?php echo $data ['id']; ?>" class="btn-floating"> <i class="material-icons"> delete </i> </a> </td>
                   </tr>
                <?php endwhile; ?>
               </tbody>
           </table>
            <br>
            <a href="add.php" class="btn"> New User </a>
        </div>
    </div>

<?php

include_once 'includes/footer.php';

?>

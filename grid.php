<div class="row">
 <?php
 require_once "core/base.php";
 $sql = "SELECT * FROM contacts ORDER BY id DESC";
 $query = mysqli_query(conn(), $sql);
 while ($row = mysqli_fetch_assoc($query)) {
 ?>
  <div class="col-3">
   <div class="card text-center mb-2">
    <div class="card-body contact" id="c-<?php echo $row['id']; ?>" data-id="<?php echo $row['id']; ?>" data-bs-toggle="modal" data-bs-target="#list">
     <div class="circle"><?php echo $row['id']; ?></div>
     <h5>
      <img src="<?php echo $url; ?>/<?php echo $row['photo']; ?>" alt="" class="img">
      <b class="name"><?php echo $row['name']; ?></b></h5>
     <p class="phone"><?php echo $row['phone']; ?></p>
     <p><?php echo $row['email']; ?></p>
     <a href="#" class="btn btn-outline-warning edit" data-id="<?php echo $row['id']; ?>">
      <i class="feather feather-edit"></i>
     </a>
     <a href="#" class="btn btn-outline-danger del" data-id="<?php echo $row['id']; ?>">
      <i class="feather feather-trash-2"></i>
     </a>
    </div>
   </div>
  </div>
  <!-- modal -->
 <?php } ?>

 </tbody>
 </table>
</div>
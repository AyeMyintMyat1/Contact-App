<!-- modal -->
<?php
$name = $_GET['name'];
$photo = $_GET['photo'];
$phone = $_GET['phone'];
?>

  <div class="modal-content shadow">
   <div class="modal-header">
    <h5 class="modal-title " id="listLabel">
     <img src="<?php echo $photo; ?>" alt="" class="img">
     <b><?php echo $name; ?></b>
    </h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
   </div>
   <div class="modal-body ">
    <p class="h6">Contact details</p>
    <div class="text-primary">
     <i class="feather feather-phone me-3 ms-3"></i>
     <b class=""><?php echo $phone; ?></b> .Mobile
     <i class="feather feather-map-pin text-success ms-3 me-3 plus"></i>
    </div>
   </div>
   <!-- <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary">Understood</button>
   </div> -->

  </div>


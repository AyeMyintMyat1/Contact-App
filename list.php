<table class="table table-hover ">
  <thead>
    <tr>
      <th>#</th>
      <th>Name</th>
      <th>Phone</th>
      <th>G_Mail</th>
      <th>Control</th>
    </tr>
  </thead>
  <tbody>
    <?php
    require_once "core/base.php";
    $sql = "SELECT * FROM contacts ORDER BY id DESC";
    $query = mysqli_query(conn(), $sql);
    while ($row = mysqli_fetch_assoc($query)) {
    ?>
      <tr class="contact" id="c-<?php echo $row['id']; ?>" data-id="<?php echo $row['id']; ?>"
          data-bs-toggle="modal" data-bs-target="#list">
        <td><?php echo $row['id']; ?></td>
        <td>
          <img src="<?php echo $url; ?>/<?php echo $row['photo']; ?>" alt="" class="img">
          <b class="name"><?php echo $row['name']; ?></b></td>
        <td class="phone"><?php echo $row['phone']; ?></td>
        <td><?php echo $row['email']; ?></td>
        </td>
        </th>
        <td>
          <a href="#" class="btn btn-outline-warning edit" data-id="<?php echo $row['id']; ?>">
            <i class="feather feather-edit"></i>
          </a>
          <a href="#" class="btn btn-outline-danger del" data-id="<?php echo $row['id']; ?>">
            <i class="feather feather-trash-2"></i>
          </a>
        </td>
      </tr>

    <?php } ?>

  </tbody>
</table>
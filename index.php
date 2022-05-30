<?php
require_once "core/base.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="<?php echo $url; ?>/assets/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo $url; ?>/assets/feather-icons-web/feather.css">
  <link rel="stylesheet" href="<?php echo $url; ?>/assets/css/style.css">
</head>

<body class="bg-light">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card my-5 shadow">
          <div class="card-contact p-3">
            <div class="d-flex justify-content-between align-content-center">
              <h4 class="text-primary">
                <i class="feather feather-phone"></i>
                Contact App</h4>
              <div class="">
                <button class="btn btn-outline-primary" type="button" data-bs-toggle="modal" data-bs-target="#form">
                  <i class="feather feather-plus plus"></i>
                  Add Contact</button>
                <button class="btn btn-outline-info" onclick="showList()">
                  <i class="feather feather-list"></i>
                </button>
                <button class="btn btn-outline-dark" onclick="showGrid()">
                  <i class="feather feather-grid"></i>
                </button>
              </div>
            </div>
            <hr>
            <div class="output-parent">
              <div class="output">

              </div>
              <div class="Place">
                <div class="modal fade" id="list" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="listLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered " id="box">
                  </div>
                </div>
              </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="form" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="formLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-sm">
                <div class="modal-content bg-success shadow">
                  <div class="modal-header">
                    <h5 class="modal-title  text-white" id="formLabel">
                      Contact Form
                      <span id="status"></span>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body p-0">
                    <form action="save.php" method="post" id="contact_form" enctype="multipart/form-data">
                      <div class="mb-3 px-3 pt-3">
                        <label for="" class="text-white">
                          <i class="feather feather-user"></i>
                          Contact Name</label>
                        <input type="text" class="form-control" name="name">
                      </div>
                      <div class="mb-3 px-3">
                        <label for="" class="text-white">
                          <i class="feather feather-mail"></i>
                          Email</label>
                        <input type="email" class="form-control" name="email">
                      </div>
                      <div class="mb-3 px-3">
                        <label for="" class="text-white">
                          <i class="feather feather-phone"></i>
                          Phone Number</label>
                        <input type="number" class="form-control" name="phone">
                      </div>
                      <div class="mb-3 px-3">
                        <label for="" class="text-white">
                          <i class="feather feather-image"></i>
                          Your Photo</label>
                        <input type="file" class="form-control" name="upload">
                      </div>
                      <hr class="bg-white">
                      <div class="text-end px-3 pb-3">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-light text-success">Save</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm">
          <div class="modal-content bg-success shadow">
            <div class="modal-header">
              <h5 class="modal-title  text-white" id="editLabel">
                Contact Update Form
                <span id="status1"></span>
              </h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
              <form action="update.php" method="post" id="contact_update_form" enctype="multipart/form-data">
                <div class="mb-3 px-3">
                  <input type="hidden" id="editId" name="id">
                </div>
                <div class="mb-3 px-3 pt-3">
                  <label for="" class="text-white">
                    <i class="feather feather-user"></i>
                    Contact Name</label>
                  <input type="text" class="form-control" name="name" id="editName">
                </div>
                <div class="mb-3 px-3">
                  <label for="" class="text-white">
                    <i class="feather feather-mail"></i>
                    Email</label>
                  <input type="email" class="form-control" name="email" id="editEmail">
                </div>
                <div class="mb-3 px-3">
                  <label for="" class="text-white">
                    <i class="feather feather-phone"></i>
                    Phone Number</label>
                  <input type="number" class="form-control" name="phone" id="editPhone">
                </div>
                <div class="mb-3 px-3">
                  <label for="" class="text-white">
                    <i class="feather feather-image"></i>
                    Your Photo</label>
                  <input type="file" class="form-control" name="upload" id="editPhoto">
                </div>
                <hr class="bg-white">
                <div class="text-end px-3 pb-3">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-light text-success">Update</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <script src="<?php echo $url; ?>/assets/jquery.min.js"></script>
      <script src="<?php echo $url; ?>/assets/bootstrap/dist/js/bootstrap.min.js"></script>
      <script>
        let form = document.getElementById('contact_form');

        function showGrid() {
          $.get("grid.php", function(data) {
            $('.output').html(data);
          })
        }

        function showList() {
          $.get("list.php", function(data) {
            $('.output').html(data);
          })
        }
        showList()

        $('#contact_form').on("submit", function(e) {
          e.preventDefault();
          // let inputs = $(this).serialize();
          // console.log(inputs);
          //   $("input").val("");


          // formdata
          let data = "";
          let formdata = new FormData(form);
          let photoName = "";
          let photoType = "";
          if (formdata.has('name')) {
            let name = formdata.get('name');
            data += `name=${name}&`;
          }
          if (formdata.has('email')) {
            let email = formdata.get('email');
            data += `email=${email}&`;
          }
          if (formdata.has('phone')) {
            let phone = formdata.get('phone');
            data += `phone=${phone}&`;
          }
          if (formdata.has('upload')) {
            let upload = formdata.get('upload');
            // console.log(val.name);
            // console.log(val.type);
            photoName = upload.name;
            photoType = upload.type;
            data += `uploadName=${photoName}&uploadType=${photoType}`;
          }

          console.log(data);
          $("input").val("");

          // Old Way
          // $.ajax({
          //   type:"POST",
          //   url:$(this).attr('action'),
          //   data:data,
          //   success:function(data){
          //     console.log(data);
          //   }
          // });

          //New Way 
          $.post("save.php", data, function(val) {
            console.log(val);
            if (val == "success") {
              $("#status").html(`
          <span class="badge badge-pill bg-white text-success">
          <i class="feather feather-check-circle text-success"></i>
          Success</span>`);

              function success() {
                setTimeout(function() {
                  $("#status").html(`
          <span class="">
          </span>`);
                }, 5000)
              }
              success()
              $("input").val("");
              showList();
            } else {
              $("#status").html(`
          <span class="badge badge-pill bg-danger">
          <i class="feather feather-x "></i>
          Fail</span>`);
            }
          });
        });

        //delete

        $(".output").delegate(".del", "click", function() {
          let currentId = $(this).attr("data-id");
          let name = $(this).closest('.contact').find('.name').html();
          let status = confirm(`Are you sure to delete ${name} ? `);
          if (status) {
            $.get("delete.php?id=" + currentId, function(data) {
              if (data == "success") {
                alert(` You are deleted ${name}  .`);
                showList();
              }
            });
          }
          $(this).closest(".output-parent").find("#list").addClass("none");
        });

        //box
        $(".output").delegate(".contact", "click", function() {
          let currentId = $(this).attr("data-id");
          let currentName = $(this).find(".name").html();
          let currentImage = $(this).find(".img").attr("src");
          let currentPhone = $(this).find(".phone").html();
          $.get("modal.php?name=" + currentName + "&photo=" + currentImage + "&phone=" + currentPhone, function(data) {
            // console.log(data);
            $("#box").html(data);
          });
        });

        //detail
        var myModal = new bootstrap.Modal(document.getElementById('editModal'), {
          keyboard: false
        });

        $(".output").delegate(".edit", "click", function() {
          let currentId = $(this).attr("data-id");
          $.get("detail.php?id=" + currentId, function(data) {
            let currentDetail = JSON.parse(data);
            // console.log(currentDetail);
            $("#editName").val(currentDetail.name);
            $("#editPhone").val(currentDetail.phone);
            // $("#editPhoto").val(currentDetail.photo);
            $("#editEmail").val(currentDetail.email);
            $("#editId").val(currentDetail.id);
          });
          myModal.show();
            $(this).closest(".output-parent").find("#list").addClass("none");
        })

        //update
        let updateForm = document.getElementById("contact_update_form");
        $("#contact_update_form").on("submit",function(e){
          e.preventDefault();
          let formData2 = new FormData(updateForm);
          let data = "";
          if(formData2.has("id")){
            let id = formData2.get("id");
            data += `id=${id}&`;
          }
          if(formData2.has("name")){
            let name = formData2.get("name");
            data += `name=${name}&`;
          }
          if(formData2.has("email")){
            let email = formData2.get("email");
            data += `email=${email}&`;
          }
          if(formData2.has("phone")){
            let phone = formData2.get("phone");
            data += `phone=${phone}&`;
          }
          if(formData2.has("upload")){
            let upload = formData2.get("upload");
            let uploadName = upload.name;
            let uploadType = upload.type;
            data += `uploadName=${uploadName}&uploadType=${uploadType}`;
          }
          console.log(data);
          $.post($(this).attr("action"),data,function(data1){
            // console.log(data1);
            if(data1 == "success"){
              $("#status1").html(`
          <span class="badge badge-pill bg-white text-success">
          <i class="feather feather-check-circle text-success"></i>
          Updated Success</span>`);

              function success() {
                setTimeout(function() {
                  $("#status1").html(`
          <span class="">
          </span>`);
                }, 5000)
              }
              success()
              $("input").val("");
              showList();
            } else {
              $("#status1").html(`
          <span class="badge badge-pill bg-danger">
          <i class="feather feather-x "></i>
         Updated Fail</span>`);
            
            }
          });
        });
        
      </script>
</body>

</html>
</div>
</div>
   
<div class="py-2 bg-red">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/adminlte.js"></script>


<script>


  function totalroomCheck()
  {
      var filter = /^[0-9][0-9]{3}$/; //PATTERN FOR room add
      
      var a = $("#total").val();     
      if (!(filter.test(a))) {
            alert("Only 3 numbers are allowed");
            $("#total").val('');
      }
  }

  $('.alphaonly').bind('keyup blur',function(){ 
    var node = $(this);
    node.val(node.val().replace(/[^a-z]/g,'') ); 
  });
</script>

<!-- Summer Note -->
<script src="assets/js/summernote-lite.min.js"></script>

<!-- DataTables -->
<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.bootstrap5.min.js"></script>

<!-- Alerty -->
<script src="assets/js/alertify.min.js"></script>

<!-- sweet alert validation -->
<script src="assets/js/sweetalert.min.js"></script>

<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
    $(document).ready(function() {
        $('.summernote').summernote();
    });
</script>
<script>
    $(document).ready(function () {
        <?php if(isset($_SESSION['status'])): ?>
            alertify.set('notifier','position', 'top-right');
            alertify.success("<?= $_SESSION['status']; ?>");
        <?php unset($_SESSION['status']); endif; ?>

    });
</script>

<script>
        <?php if(isset($_SESSION['status'])): ?>
            swal('<?= $_SESSION['status']; ?>');
        <?php unset($_SESSION['status']); endif; ?>
</script>


</body>
</html>

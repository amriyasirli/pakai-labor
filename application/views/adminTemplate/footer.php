<footer class="main-footer">
        <div class="footer-left">
          &copy; <?= date('Y') ?> Laboratorium Terpadu IAIN Bukittinggi <div class="bullet"></div> Design By <a href="#">Rival Fauzi</a>
        </div>
        <div class="footer-right">
          Versi 1.0
        </div>
      </footer>
    </div>
  </div>

  
  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="<?= base_url('assets/admin/') ?>js/stisla.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
  <!-- JS Libraies -->
  <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />

  <!-- datatable -->
  <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
  <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>

  <!-- Template JS File -->
  <script src="<?= base_url('assets/admin/') ?>js/scripts.js"></script>
  <script src="<?= base_url('assets/admin/') ?>js/custom.js"></script>

  <!-- Page Specific JS File -->
  <script>
      $(document).ready(function() {
        $('#table').DataTable( {
            autoWidth: true,
            columnDefs: [
                {
                    targets: ['_all'],
                    className: 'mdc-data-table__cell'
                }
            ]
        } );
    } );
    $(document).ready(function() {
      $('#summernote1').summernote({
        placeholder: 'Ketikan visi',
        tabsize: 2,
        height: 200
      });
    });

    $('input[name="daterange"]').daterangepicker(
    {
        locale: {
          format: 'YYYY-MM-DD'
        },
        startDate: '2022-01-01',
        endDate: '2022-12-31'
    }, 
    // function(start, end, label) {
    //     alert("A new date range was chosen: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
    // }
    );
  </script>

<script>
    $(document).ready(function() {
      $('#summernote2').summernote({
        placeholder: 'Tulis keterangan...',
        tabsize: 2,
        height: 200
      });
    });
  </script>

<script type="text/javascript">
    $(document).ready(function() {
        var wrapper = $("#input_fields_wrap"); //Fields wrapper
        var wrapper_edit = $("#input_fields_wrap_edit"); //Fields wrapper
        var add_button = $("#btn_add_field"); //Add button ID
        var count = 0;
        var max_components = 50; //maximum components allowed

        // Initial Components
        for (var x = 0; x < 0; x++) {
            $(wrapper).append(buildComponent(count++)); //add input box
        }
        // Can Add
        $(add_button).click(function (e) { //on add input button click
            e.preventDefault();
            if (count < max_components) {
                $(wrapper).append(buildComponent(count++)); //add input box
            }
        });

        // Remove
        $(wrapper).on("click",".remove_field", function(e){
            e.preventDefault();
            $(this).parent('.module').remove();
            count--;
        });

        // Remove edit
        $(wrapper_edit).on("click",".remove_field_edit", function(e){
            e.preventDefault();
            $(this).parent('.module_edit').remove();
            count--;
        });

        // Button Active
        $(add_button).click(function (e) { //on add input button click
          document.getElementById("active").disabled = false;
        });
    });

    function buildComponent(x) {
        // var val = "654" + x;
        return $(
            '<div class="row module">' +
              '<input type="text" name="nama_alat[]" placeholder="Nama alat" class="form-control col-lg-3 mt-2 mr-2" required />' +
              '<input type="number" name="jumlah[]" placeholder="Jumlah (unit)" class="form-control col-lg-2 mt-2 mr-2" required>' +
              '&nbsp;<a href="#" class="remove_field btn btn-danger mt-2"><i class="fas fa-times"></i></a>' +
            '</div>');
    }

</script>


</body>
</html>
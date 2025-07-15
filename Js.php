    <!-- jQuery -->
    <script src="CSS/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="CSS/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="CSS/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="CSS/vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="CSS/vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="CSS/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="CSS/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="CSS/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="CSS/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="CSS/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="CSS/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="CSS/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="CSS/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="CSS/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="CSS/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="CSS/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="CSS/vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
    <script src="CSS/vendors/jszip/dist/jszip.min.js"></script>
    <script src="CSS/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="CSS/vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    
	
	<script src="CSS/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="CSS/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
	 <script src="CSS/vendors/google-code-prettify/src/prettify.js"></script>

<script src="CSS/build/js/custom.min.js"></script>
    <!-- Datatables -->
    <script>
      $(document).ready(function() {
        var handleDataTableButtons = function() {
          if ($("#datatable-buttons").length) {
            $("#datatable-buttons").DataTable({
              dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                {
                  extend: "csv",
                  className: "btn-sm"
                },
                {
                  extend: "excel",
                  className: "btn-sm"
                },
                {
                  extend: "pdfHtml5",
                  className: "btn-sm"
                },
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true
            });
          }
        };

        TableManageButtons = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons();
            }
          };
        }();

        $('#datatable').dataTable();

        $('#datatable-keytable').DataTable({
          keys: true
        });

        $('#datatable-responsive').DataTable();

        $('#datatable-scroller').DataTable({
          ajax: "js/datatables/json/scroller-demo.json",
          deferRender: true,
          scrollY: 380,
          scrollCollapse: true,
          scroller: true
        });

        $('#datatable-fixed-header').DataTable({
          fixedHeader: true
        });

        var $datatable = $('#datatable-checkbox');

        $datatable.dataTable({
          'order': [[ 1, 'asc' ]],
          'columnDefs': [
            { orderable: false, targets: [0] }
          ]
        });
        $datatable.on('draw.dt', function() {
          $('input').iCheck({
            checkboxClass: 'icheckbox_flat-green'
          });
        });

        TableManageButtons.init();
      });
    </script>
    <!-- /Datatables -->
	
	<!-- bootstrap-wysiwyg -->
    <script>
      $(document).ready(function() {
        function initToolbarBootstrapBindings() {
          var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier',
              'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
              'Times New Roman', 'Verdana'
            ],
            fontTarget = $('[title=Font]').siblings('.dropdown-menu');
          $.each(fonts, function(idx, fontName) {
            fontTarget.append($('<li><a data-edit="fontName ' + fontName + '" style="font-family:\'' + fontName + '\'">' + fontName + '</a></li>'));
          });
          $('a[title]').tooltip({
            container: 'body'
          });
          $('.dropdown-menu input').click(function() {
              return false;
            })
            .change(function() {
              $(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');
            })
            .keydown('esc', function() {
              this.value = '';
              $(this).change();
            });

          $('[data-role=magic-overlay]').each(function() {
            var overlay = $(this),
              target = $(overlay.data('target'));
            overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
          });

          if ("onwebkitspeechchange" in document.createElement("input")) {
            var editorOffset = $('#editor').offset();

            $('.voiceBtn').css('position', 'absolute').offset({
              top: editorOffset.top,
              left: editorOffset.left + $('#editor').innerWidth() - 35
            });
          } else {
            $('.voiceBtn').hide();
          }
        }

        function showErrorAlert(reason, detail) {
          var msg = '';
          if (reason === 'unsupported-file-type') {
            msg = "Unsupported format " + detail;
          } else {
            console.log("error uploading file", reason, detail);
          }
          $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>' +
            '<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');
        }

        initToolbarBootstrapBindings();

        $('#editor').wysiwyg({
          fileUploadError: showErrorAlert
        });

        prettyPrint();
      });
    </script>
    <!-- /bootstrap-wysiwyg -->

    <!-- compose -->
    <script>
      $('#compose, .compose-close').click(function(){
        $('.compose').slideToggle();
      });
    </script>
    <!-- /compose -->
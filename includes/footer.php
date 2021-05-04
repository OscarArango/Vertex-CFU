  
  <footer class="footer">
    <div class="container">
      <div class="row row-buffer">
        <div class="col-4">
          <img src="/img/vertexLogo.png" class="left img-responsive">
        </div>
        <div class="col-8">
          <span class="text-muted text-muted-cus right">&copy; Vertex Pharmaceuticals Incorporated. All Rights Reserved For Internal Training Purposes Only. Do Not Distribute. Not For Commercial Use.</span>
        </div>
      </div>
    </div>
  </footer>
  
  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
  <script src="/js/bootstrap.min.js"></script>
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="/js/ie10-viewport-bug-workaround.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function(){
        $('#myTable').DataTable( {
            "scrollY":        "600px",
            "scrollCollapse": true,
            "paging":         false,
            "columnDefs": [{ 
              "orderable": false, 
              "targets": 6 
            }]
        } );

        $('#myTable2').DataTable( {
            "scrollY":        "600px",
            "scrollCollapse": true,
            "paging":         false,
            "columnDefs": [{ 
              "orderable": false, 
              "targets": 4 
            }]
        } );
        

        $('#myModal').on('shown.bs.modal', function () {
          $('#myInput').focus()
        })

        $('#myTable2').dataTable();
        
        $('#myModal2').on('shown.bs.modal', function () {
          $('#myInput').focus()
        })

        $( ".btnDelete" ).click(function() {
          window.location.replace("/queries/delete-asset-record.php?id="+$(this).attr("value"));
        });

        $( ".btnKeyresourceDelete" ).click(function() {
          window.location.replace("/queries/delete-keyresource-record.php?id="+$(this).attr("value"));
        });

        $('#myModal3').on('shown.bs.modal', function (e) {
            
            //get data-id attribute of the clicked element
            var id = $(e.relatedTarget).data('id');

            //populate the textbox
            $(e.currentTarget).find('iframe[name="updateIframe"]').attr('src', "/admin/update-asset.php?id="+id);
            $('#myInput').focus()
        });

        $('#myModal3').on('hidden.bs.modal', function () {
            location.reload();
        });

        $('#myModal4').on('shown.bs.modal', function (e) {
            
            //get data-id attribute of the clicked element
            var resourceid = $(e.relatedTarget).data('id');

            //populate the textbox
            $(e.currentTarget).find('iframe[name="updateResourceIframe"]').attr('src', "/admin/update-keyresource.php?id="+resourceid);
            $('#myInput').focus()
        });

        $('#myModal4').on('hidden.bs.modal', function () {
            location.reload();
        });
        $('#myModal5').on('shown.bs.modal', function () {
          $('#myInput').focus()
        })
        $(".nav a").on("click", function(){
            $(".nav").find(".active").removeClass("active");
            $(this).parent().addClass("active");
        });
    });

    function form_submit() {
      document.getElementById("form").submit();
    }

    function form_submitKeyresources() {
      document.getElementById("formKeyresources").submit();
    }

    function form_submitTopics() {
      document.getElementById("formAddTopic").submit();
    }
  </script>

</body>
</html>
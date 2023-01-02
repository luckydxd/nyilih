     <!--  BEGIN FOOTER  -->
     <div class="footer-wrapper">
        <div class="footer-section f-section-1">
            <p class="">Copyright © <span class="dynamic-year">2022</span> <a target="_blank" href="https://designreset.com/cork-admin/">DesignReset</a>, All rights reserved.</p>
        </div>
        <div class="footer-section f-section-2">
            <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
        </div>
    </div>
    <!--  END FOOTER  -->
</div>
<!--  END CONTENT AREA  -->
 <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
 <script src="{{ asset('cork') }}/src/bootstrap/js/bootstrap.bundle.min.js"></script>
 <script src="{{ asset('cork') }}/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js"></script>
 <script src="{{ asset('cork') }}/src/plugins/src/mousetrap/mousetrap.min.js"></script>
 <script src="{{ asset('cork') }}/layouts/vertical-dark-menu/app.js"></script>
 <!-- END GLOBAL MANDATORY SCRIPTS -->

 <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
 <script src="{{ asset('cork') }}/src/plugins/src/apex/apexcharts.min.js"></script>
 <script src="{{ asset('cork') }}/src/assets/js/dashboard/dash_1.js"></script>
 <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

     <!-- jQuery 3 -->
 <script src="{{ asset('cork') }}/bower_components/jquery/dist/jquery.min.js"></script>
 <!-- Bootstrap 3.3.7 -->
 {{-- <script src="{{ asset('cork') }}/bower_components/bootstrap/dist/js/bootstrap.min.js"></script> --}}
 <!-- Moment -->
 <script src="{{ asset('cork') }}/bower_components/moment/min/moment.min.js"></script>

 <!-- Validator -->
 <script src="{{ asset('cork') }}/js/validator.min.js"></script>

  <!-- DataTables -->
  <script src="{{ asset('cork') }}/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="{{ asset('cork') }}/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('cork') }}/dist/js/adminlte.min.js"></script>




 <script>
     function preview(selector, temporaryFile, width = 200)  {
         $(selector).empty();
         $(selector).append(`<img src="${window.URL.createObjectURL(temporaryFile)}" width="${width}">`);
     }
 </script>
 @stack('scripts')

</body>
</html>
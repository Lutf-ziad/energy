<button class="btn btn-dark rounded-circle px-3 py-2" id="go-to-top" title="Go to top"  style="position: fixed;bottom: 70px;right: 20px;display:none;"><i class="fa fa-long-arrow-alt-up" ></i></button>
</div>
<footer class="main-footer">
    <strong>Copyright &copy; {{ date('Y') }} <a href="https://adminlte.io">LEZER information technology company </a></strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.0.0
    </div>
</footer>

</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<script src="{{ asset('assets/plugins/select2/js/select2.full.min.js') }}"></script>
<!-- AdminLTE App -->
@stack('js-middle')
{{-- <script src="{{ asset('assets/dist/js/datedropper.min.js') }}"></script>
<script src="{{ asset('assets/dist/js/dropzone.min.js') }}"></script> --}}

<script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('assets/dist/js/dashboard.js') }}"></script>
<script src="{{ asset('assets/dist/js/dashboard.js') }}"></script>

<!-- Custome -->
<script src="{{ asset('assets/dist/js/custome.js') }}"></script>
<script src="{{ asset('assets/dist/js/dropzone.js') }}"></script>

@stack('js')
@livewireScripts
@stack('js-after-livewire')
<script>
    $(document).ready(function() {
        Livewire.on('form-modal', function(isOpen) {
            if (isOpen) {
                $('#formModal').modal('show');
            } else {
                $('#formModal').modal('hide');
            }
        });
    });
</script>
</body>

</html>

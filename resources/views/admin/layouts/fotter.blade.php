<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>copyright &copy; 2019 - developed by
                <b><a href="https://indrijunanda.gitlab.io/" target="_blank">indrijunanda</a></b>
            </span>
        </div>
    </div>
</footer>
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
@notifyCss
@include('notify::messages')
<x:notify-messages />
@notifyJs
<script src="{{asset('admin/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
<script src="{{asset('admin/js/ruang-admin.min.js')}}"></script>
<script src="{{asset('admin/vendor/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('admin/js/demo/chart-area-demo.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script src="{{asset('admin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.js"
    integrity="sha512-0QMJSMYaer2wnpi+qbJOy4rOAlE6CbYImSlrgQuf2MBBMqTvK/k6ZJV126/EbdKzMAXaB6PHzdYxOX6Qey7WWw=="
    crossorigin="anonymous"></script>

<!-- Page level custom scripts -->
<script>
    $(document).ready(function () {
        $('#dataTable').DataTable(); // ID From dataTable 
        $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });

</script>
<script type="text/javascript">
    function confirmDelete() {
        return confirm('Are you sure You want to delete ?');
    }

</script>
<script>
    $(document).ready(function () {
        $('#summernote').summernote();
    });

</script>
<script>
    $(document).ready(function () {
        $('#summernote1').summernote();
    });

</script>
</body>

</html>

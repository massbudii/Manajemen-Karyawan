<script src="{{ asset('assets/js/vendor.min.js') }}"></script>
<script src="{{ asset('assets/js/app.min.js') }}"></script>

<!-- DataTables -->
<script src="https://cdn.datatables.net/2.3.7/js/dataTables.min.js"></script>

<script>
$(document).ready(function () {
    new DataTable('#table', {
        pageLength: 10
    });
});
</script>

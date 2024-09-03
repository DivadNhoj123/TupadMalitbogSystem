<script src="../assets/js/plugin/sweetalert/sweetalert.min.js"></script>
<script>
    @if(session('success'))
        swal({
            title: "Success!",
            text: "{{ session('success') }}",
            icon: "success",
            buttons: {
                confirm: {
                    className: "btn btn-success",
                },
            },
        });
    @endif
</script>

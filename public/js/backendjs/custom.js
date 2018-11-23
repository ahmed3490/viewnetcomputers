<script>
    function commonDelete(element) {
        swal({
                    title: "Are you sure?",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes, delete it!",
                    closeOnConfirm: false
                },
                function () {
                    element.parentElement.submit();
                    setTimeout(function () {
                        swal({
                            title: "Deleted!",
                            text: "",
                            type: "success",
                            showConfirmButton: false
                        });
                    }, 2000);
                })
    }
</script>

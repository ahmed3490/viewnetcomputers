$(document).ready(function(){



	  $(".deleteCat").click(function(){
        var id = $(this).attr('rel');
        var delete_Cat_Function = $(this).attr('rel1');
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this Category again!",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: 'Yes delete it!'
        },
            function(){
                window.location.href="/admin/"+delete_Cat_Function+"/"+id;

            });

      });










});

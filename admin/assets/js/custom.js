/*
$(document).ready(function () {
  
  $('.delete_product_btn').click(function (e) { 
    e.preventDefault();
    

    var id = $(this).val();
    //alert(id);

    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    })
    .then((result) => {
      if (result.isConfirmed) {
          $.ajax({
            method: "POST",
            url: "code.php",
            data: {
              'prodict_id':id,
              'delete_product_btn': true
            },
            success: function (response) {
              console.log(response);
              if(response == 200)
              {
                Swal.fire(
                  'Deleted!',
                  'Your file has been deleted.',
                  'success' 
                )
                $("#products_table").load(location.href + " #products_table");
              }
              else if(response == 500)
              {
                Swal.fire('Neuspesno', 'Neuspesno Obrisano', 'error');
              }
            }
        });
      }
    })
  });


});
*/
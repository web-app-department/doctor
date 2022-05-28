function deleteJob(url, id) {    
  let token = $("meta[name='csrf-token']").attr("content");
  if(confirm("Are You Sure To Delete?")) {
    $.ajax({
        url,
        type: 'DELETE',
        data: {
        "_token": token,
        },
        success: function(result) {
            $("#row-"+id).fadeOut();
        },
        error: function(xhr, ajaxOptions, thrownError) {
          alert('Something Went Wrong, Please Check Back Later');
        }
    });
  }
}
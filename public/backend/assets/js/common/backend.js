// Add blog
$('.addBlog').click(function() {
  $('.text-danger').html('');
  $('.blog_id').val('');
  $('.image_show').html('');
  $('.validateForm')[0].reset();
  $('.modal-title').html('Add Blog');
  $('#blogModal').modal('show');
});

//Edit Blog
$(document).on('click','.editBlog',function(){
  $('.text-danger').html('');
  $('.validateForm')[0].reset();
  $('.modal-title').html('Edit Blog');
  let selector = $(this);
  let tr  = selector.closest('tr'); 
  $('.blog_id').val(tr.attr('row-blog_id'));
  $('.blog_title').val(tr.attr('row-blog_title'));
  $('.meta_keyword').val(tr.attr('row-blog_meta_keyword'));
  $('.meta_description').val(tr.attr('row-blog_meta_description'));
  $('.image_show').html(tr.attr('row-blog_image'));
  $('#blogModal').modal('show');

});









 


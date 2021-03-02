$(document).ready(function(){
    $("form#update").validate({
        errorClass: 'help-block',
        errorElement: 'span',
        highlight: function(element, errorClass, validClass) {
            $(element).parents('.form-group').removeClass('has-success').addClass('has-error');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).parents('.form-group').removeClass('has-error').addClass('has-success');
        },
            submitHandler: function(form) {
               $('#loadnya').show();
                   $(form).ajaxSubmit({
                          type:"post",
                          url: $(this).attr('action'),
                          data: $(this).serialize(),
                        success: function(data){
                           $('#loadnya').hide();
                          console.log(data);
                         
                              if (data=='good') { 
                                Swal.fire({
                                  icon: 'success',
                                  title: 'Data Berhasil Di Ubah',
                                  showConfirmButton: false,
                                  timer: 1500
                                });
                                history.go(-1);
                                return false;
                                window.history.back();
                              } else {
                               
                                 $('.errorna').fadeIn();
                              	//redirect jika berhasil login
                               
                              }
                      }
                    });
            }

        });  


  //special untuk foto
  $("form#upfoto").validate({
        errorClass: 'help-block',
        errorElement: 'span',
        highlight: function(element, errorClass, validClass) {
            $(element).parents('.form-group').removeClass('has-success').addClass('has-error');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).parents('.form-group').removeClass('has-error').addClass('has-success');
        },
            submitHandler: function(form) {
               $('#loadnya').show();
                   $(form).ajaxSubmit({
                          type:"post",
                          url: $(this).attr('action'),
                          data: $(this).serialize(),
                        success: function(data){
                        
                          $('#loadnya').hide();
                              if (data=='good') { 
                          $('.notif_top_up').fadeIn(1000);
                              $(".notif_top_up").fadeOut(1000,function(){
                           location.reload();
                        });     
                                //$('.sukses').html(data);
                              } else {
                               
                                 $('.errorna').fadeIn();
                                //redirect jika berhasil login
                               
                              }
                      }
                    });
            }

        });  
 //special untuk foto
  $("form#upalb").validate({
        errorClass: 'help-block',
        errorElement: 'span',
        highlight: function(element, errorClass, validClass) {
            $(element).parents('.form-group').removeClass('has-success').addClass('has-error');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).parents('.form-group').removeClass('has-error').addClass('has-success');
        },
            submitHandler: function(form) {
               $('#loadnya').show();
                   $(form).ajaxSubmit({
                          type:"post",
                          url: $(this).attr('action'),
                          data: $(this).serialize(),
                        success: function(data){
                         
                          $('#loadnya').hide();
                              if (data=='good') { 
                          $('.notif_top_up').fadeIn(1000);
                           $(".notif_top_up").fadeOut(2000);
                                
                                //$('.sukses').html(data);
                              } else {
                               
                                 $('.errorna').fadeIn();
                                //redirect jika berhasil login
                               
                              }
                      }
                    });
            }

        }); 

    $('body').on('click', '.edit_album', function() {

      event.preventDefault();
      var currentBtn = $(this);

      $('#album-modal')
          .modal({ keyboard: false })
          .one('click', '#save', function (e) {
          
            $('.title_album').html($("#nama_album").val());
             $('.desc_album').html($("#desc_album").val());
            
            $('#album-modal').modal('hide');


          });

            
       
    });

    $('body').on('click', '.up_foto', function() {
   
      event.preventDefault();
      var currentBtn = $(this);

      desc = currentBtn.attr('data-desc');
      id = currentBtn.attr('data-id');

      $('#desc_foto').attr("value",desc);
      $('#id').attr("value",id);
      $('#foto-modal')
          .modal({ keyboard: false })
          .one('click', '#save', function (e) {
                 
          $('#the_foto_'+id).attr("title",$("#desc_foto").val());
            
            $('#foto-modal').modal('hide');

          });

      
    });

	})
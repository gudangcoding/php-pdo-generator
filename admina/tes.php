<?php

echo __FILE__;
include "inc/config.php";

// $data=array('id_jur'=>14,'nama_siswa'=>'wildan','id'=>1);
// $db->fetch_custom("update siswa set id_jur=?,nama_siswa=? where id=?",$data);

?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.js"></script>
<style type="text/css">
	#plegal{
	  width:100%;
	}
</style>
<select id="plegal" palceholder="Your Choice">
</select>

<button onclick="changeVal1()" type="button">Change Value to 'bbb' </button>

<button onclick="changeVal2()" type="button">Change Value to 'ccc' </button>
<script>
	$(document).ready(function() {
		changeVal1();
		$('#plegal').select2({
         value: 'Pilih Salah Satu',
        // language: {
        //     noResults: function() {
        //         return `<button style="width: 100%" type="button"
        //     class="btn btn-primary" 
        //     onClick='tambah()'>+ Tambah</button>
        //     </li>`;
        //     }
        // },
        ajax: {
            url: '<?=base_admin();?>modul/pelanggan/pelanggan_action.php?act=legal',
            // dataType: 'json',
            // delay: 250,
            processResults: function(data) {
                return {
                    results: data
                };
            },
            cache: true
        },
        escapeMarkup: function(markup) {
            return markup;
        }
    });

		
	});

	function changeVal1(){
		  //$("#plegal").val("PT Tumis Kangkung").change();
		var data = {
		    id: 11,
		    text: 'PT Tumis Kangkung'
		};

		var newOption = new Option(data.text, data.id, false, false);
		$('#plegal').append(newOption).trigger('change');
	}

		function changeVal2(){
		  $("#plegal").val("ccc").change();
		}
</script>
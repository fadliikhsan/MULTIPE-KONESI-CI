<html>
<head>
    <title><?php echo $judul ?></title>
    <link href="<?php echo base_url();?>asset/css/style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="<?php echo base_url();?>asset/js/jquery.js"></script>
    <script>
			$().ready(function(){                        
            $("#tombolTambah").click(function(){
                $.ajax({
                    url : "<?php echo base_url(); ?>cmahasiswa/add_mahasiswa",
                    beforeSend: function(){
                                        $("#loading").fadeIn(5000).html("<img src='<?php echo base_url(); ?>asset/img/loading51.gif'>");
                                    },
                    success:    function(html){
                                    $("#data").html(html);
                                    $("#btnSimpan").show();
                                    $("#btnKembali").show();
                                    $("#tombolTambah").hide();
                                }                
                });            
            });        
            
            $("#btnSimpan").click(function(){                
                var nim 		= $("#nim").val();
                var nama 		= $("#nama").val();
                var jurusan 	= $("#jurusan").val();
                var angkatan 	= $("#angkatan").val();                
                
                $.ajax({
                    url : "<?php echo base_url() ?>cmahasiswa/add_mahasiswa",
                    type: "POST",
                    beforeSend: function(){
                                        $("#data").html("Loading...");
                                    },
                    data    : "nim="+nim+"&nama="+nama+"&jurusan="+jurusan+"&angkatan="+angkatan,
                    success:    function(html){
                                $("#tombolTambah").show();                                 
                                 $("#btnSimpan").hide();                                 
                                    $("#data").load("<?php echo base_url() ?>/cmahasiswa/index/ #data");
                                    $("#notifikasi").html('Data berhasil disimpan');                                    
                                    $("#notifikasi").fadeIn(2500);
                                    $("#notifikasi").fadeOut(2500);                                
                                }                
                });            
            });
            
			
				$("#btnKembali").click(function(){                                
					$.ajax({
						url : "<?php echo base_url() ?>cmahasiswa",
						beforeSend: function(){
                                        $("#data").html("Loading...");
                                    },                
						success:    function(html){
									$("#tombolTambah").show();
									$("#btnSimpan").hide();  
									$("#btnKembali").hide();																		                                
									$("#data").load("<?php echo base_url() ?>cmahasiswa #data");                                                                                                    
                                }                
					});            
				});                                                                             
        });
                
	</script>
</head>
<body>
    <div id="notifikasi" style="display:none"></div>
    <div id="wraper">
    
        <div id="header">
            <center><h2>Belajar Cread, Read, Update, Delete Codeigniter</h2></center>
        </div>
        
        
        <div id="content">
            <div id="paneltombol">
                <input type="button" class="btn" 				id="btnSimpan" 		value="Simpan" style="display:none">
				<input type="button" class="btn" 				id="btnKembali" 	value="Kembali" style="display:none">
                <input type="button" class="btn btn-inverse" 	id="tombolTambah"	name="tombolTambah" value="Tambah Data">
                <input type="button" class="btn" 				id="tombolUpdate" 	name="tombolUpdate" value="Update" style="display:none">
            </div>
            
            <div id="data">  
				<div id="loading" style="display:none"></div>
                <table border="0" width="100%" cellspacing="0" class="table table-bordered">
                <tr>
					<th><center>No</center></th>
                    <th><center>Nim</center></th>
                    <th><center>Nama</center></th>
                    <th><center>Jurusan</center></th> 
                    <th><center>Angkatan</center></th>                    
                    <th colspan="2"><center>Aksi</center></th>
                </tr>
                <?php 
				$i=1;
				foreach($mahasiswa as $baris){?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $baris->nim ?></td>
                    <td><?php echo $baris->nama ?></td>
                    <td><?php echo $baris->jurusan ?></td>
                    <td><?php echo $baris->angkatan ?></td>	                  
                    <td width="30"><?php echo anchor("#",'Edit',array('onClick'=>'return edit('.$baris->nim.')')) ?></td>
                    <td width="30"><?php echo anchor("#",'Hapus',array('onClick'=>'return hapus('.$baris->nim.')')) ?></td>
                </tr>
                <?php
				$i++;
				}?>
                </table>
            </div>
                    
        </div>    
    </div>
</body>
</html>
<div class="container">

	<div class="row mt-3">
		<div class="col-md-12">
		<div class="card">
  <div class="card-header" >
  <div class="kata">
        <h2 class="alert alert-primary text-left mt-4"> Form Edit Data Alternatif </h2>
  </div>
  <div class="card-body">
  			<form action="" method="post">
          <input type="hidden" name="ID" value="<?= $alternatif['ID'] ;?>">
			<div class="form-group">

    		<input type="hidden" class="form-control" name =" idclient" id="idclient" value="<?= $alternatif['ID'] ;?>"  >
      </div>
      <div class="form-group">
    		<label for="namaalt"> Nama Client </label>
    		<input type="text" class="form-control" name ="namaalt" id="namaalt" value="<?= $alternatif['CLIENT'] ;?>"  >
      </div>
      <div class="form-group">
    		<label for="pro"> Nama Project </label>
    		<input type="text" class="form-control" name ="pro" id="pro" value="<?= $alternatif['PROJEK'] ;?>"  >
      </div>
      <!-- Kolom tangible -->
        <div class="form-row">
        <div class="form-group col-md-6">
        <label for="tan"> Tangible (Bukti Fisik) </label>
        <select class="form-control" name="tan" >
        <option value="<?php echo $alternatif['TANGIBLE']?>"><?php echo $alternatif['TANGIBLE'] ?></option>
                        <option value="1">Tidak Puas</option>
                        <option value="2">Kurang Puas</option>
                        <option value="3">Cukup Puas</option>
                        <option value="4">Puas</option>
                        <option value="5">Sangat Puas</option>
              </select>
              </div>

        <div class="form-group col-md-6">
        <label for="tan1"> Mengapa Tangible ? </label>
        <input type="text" class="form-control" name ="tan1" id="tan1" value="<?= $alternatif['TANGIBLE1'] ;?>" >
              </div>
              </div>
        <!-- Kolom Emphaty -->
        <div class="form-row">
        <div class="form-group col-md-6">
        <label for="emp"> Empathy (Empati) </label>
        <select class="form-control" name="emp">
        <option value="<?php echo $alternatif['EMPHATY']?>"><?php echo $alternatif['EMPHATY'] ?></option>
                        <option value="1">Tidak Puas</option>
                        <option value="2">Kurang Puas</option>
                        <option value="3">Cukup Puas</option>
                        <option value="4">Puas</option>
                        <option value="5">Sangat Puas</option>
                </select>
          </div>
        

        <div class="form-group col-md-6">
        <label for="emp1"> Mengapa Empathy ? </label>
        <input type="text" class="form-control" name ="emp1" id="emp1" value="<?= $alternatif['EMPHATY1'] ;?>" >
            </div>
            </div>

          <!-- Kolom Responsiveness -->
          <div class="form-row">
          <div class="form-group col-md-6">
        <label for="res"> Responsiveness (Daya Tanggap) </label>
        <select class="form-control" name="res">
        <option value="<?php echo $alternatif['RESPONSIVENESS']?>"><?php echo $alternatif['RESPONSIVENESS'] ?></option>
                        <option value="1">Tidak Puas</option>
                        <option value="2">Kurang Puas</option>
                        <option value="3">Cukup Puas</option>
                        <option value="4">Puas</option>
                        <option value="5">Sangat Puas</option>
                </select>
          </div>

          <div class="form-group col-md-6">
        <label for="res1"> Mengapa Responsiveness ? </label>
        <input type="text" class="form-control" name ="res1" id="res1" value="<?= $alternatif['RESPONSIVENESS1'] ;?>" >
            </div>
            </div>

          <!-- Kolom Reliability -->
        <div class="form-row">
        <div class="form-group col-md-6">
        <label for="rel"> Reliability (Kehandalan) </label>
        <select class="form-control" name="rel">
        <option value="<?php echo $alternatif['RELIABILITY']?>"><?php echo $alternatif['RELIABILITY'] ?></option>
                        <option value="1">Tidak Puas</option>
                        <option value="2">Kurang Puas</option>  
                        <option value="3">Cukup Puas</option>
                        <option value="4">Puas</option>
                        <option value="5">Sangat Puas</option>
                </select>
          </div>

        <div class="form-group col-md-6">
        <label for="rel1"> Mengapa Reliability ? </label>
        <input type="text" class="form-control" name ="rel1" id="rel1" value="<?= $alternatif['RELIABILITY1'] ;?>" >
            </div>
            </div>

          <!-- Kolom Assurance -->
         <div class="form-row"> 
         <div class="form-group col-md-6">
        <label for="ass"> Assurance (Jaminan) </label>
        <select class="form-control" name="ass">
        <option value="<?php echo $alternatif['ASSURANCE']?>"><?php echo $alternatif['ASSURANCE'] ?></option>
                        <option value="1">Tidak Puas</option>
                        <option value="2">Kurang Puas</option>
                        <option value="3">Cukup Puas</option>
                        <option value="4">Puas</option>
                        <option value="5">Sangat Puas</option>
                </select>
       </div>

        <div class="form-group col-md-6">
        <label for="ass1"> Mengapa Assurance ? </label>
        <input type="text" class="form-control" name ="ass1" id="ass1" value="<?= $alternatif['ASSURANCE1'] ;?>" >
      </div>
    </div>
    
    <div class="form-row">
    <div class="form-group col-md-6">
        <input type="hidden" class="form-control" name ="sar" id="sar" value="<?= $alternatif['SARAN'] ;?>" >
      </div>
    <div class="form-group col-md-6">
        <label for="sar"> Saran Keseluruhan ? </label>
        <input type="text" class="form-control" name ="sar" id="sar" value="<?= $alternatif['SARAN'] ;?>" >
      </div>
    </div>
            <button type="reset" class="btn btn-danger"> Reset</button>
            <button type="Submit" class="btn btn-primary" name="Edit">Simpan Data</button>
    		
      </div>
</div>

			
    
  </div>

	</div>





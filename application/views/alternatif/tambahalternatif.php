<div class="container">
  
  <div class="row mt-3">
    <div class="col-md-12">
    <div class="card">
  <div class="card-header" >
  <div class="kata">
        <h2 class="alert alert-primary text-left mt-4"> Form Tambah Data </h2>
  </div>
  </div>
  <div class="card-body">
  		<?php if (validation_errors()): ?>
  		<div class="alert alert-danger" role="alert" >
  			<?= validation_errors(); ?>
  		</div>
  		<?php endif; ?>	

  			<form action="" method="post">
      
			<div class="form-group ">
    		<input type="hidden" class="form-control" name =" idclient" id="idclient" placeholder="Masukkan ID" >
      </div>
      <div class="form-group ">
    		<label for="namaalt "> Nama Client </label>
    		<input type="text" class="form-control" name ="namaalt" id="namaalt" placeholder="Masukkan Nama Client" >
      </div>
      <div class="form-group ">
    		<label for="pro "> Nama Project </label>
    		<input type="text" class="form-control" name ="pro" id="pro" placeholder="Masukkan Nama Project" >
      </div>
    
        <!-- Kolom tangible -->
        <div class="form-row">
      	<div class="form-group col-md-6">
    		<label for="tan"> Tangible (Bukti Fisik) </label>
    		<select class="form-control" name="tan">
                    	<option value="1">Tidak Puas</option>
                        <option value="2">Kurang Puas</option>
                        <option value="3">Cukup Puas</option>
                        <option value="4">Puas</option>
                        <option value="5">Sangat Puas</option>
              </select>
              </div>

        <div class="form-group col-md-6">
        <label for="tan1"> Mengapa Tangible ? </label>
        <input type="text" class="form-control" name ="tan1" id="tan1" placeholder="Berikan jawaban anda.." >
              </div>
              </div>

        <!-- Kolom Emphaty -->
        <div class="form-row">
      	<div class="form-group col-md-6">
    		<label for="emp"> Empathy (Empati)</label>
    		<select class="form-control" name="emp">
    					<option value="1">Tidak Puas</option>
                        <option value="2">Kurang Puas</option>
                        <option value="3">Cukup Puas</option>
                        <option value="4">Puas</option>
                        <option value="5">Sangat Puas</option>
                </select>
          </div>
        

        <div class="form-group col-md-6">
        <label for="emp1"> Mengapa Empathy ? </label>
        <input type="text" class="form-control" name ="emp1" id="emp1" placeholder="Berikan jawaban anda.." >
            </div>
            </div>

          <!-- Kolom Responsiveness -->
          <div class="form-row">
      		<div class="form-group col-md-6">
    		<label for="res"> Responsiveness (Daya Tanggap) </label>
    		<select class="form-control" name="res">
    					<option value="1">Tidak Puas</option>
                        <option value="2">Kurang Puas</option>
                        <option value="3">Cukup Puas</option>
                        <option value="4">Puas</option>
                        <option value="5">Sangat Puas</option>
                </select>
          </div>

          <div class="form-group col-md-6">
        <label for="res1"> Mengapa Responsiveness ? </label>
        <input type="text" class="form-control" name ="res1" id="res1" placeholder="Berikan jawaban anda.." >
            </div>
            </div>

          <!-- Kolom Reliability -->
        <div class="form-row">
      	<div class="form-group col-md-6">
    		<label for="rel"> Reliability (Kehandalan) </label>
    		<select class="form-control" name="rel">
    					<option value="1">Tidak Puas</option>
                        <option value="2">Kurang Puas</option>	
                        <option value="3">Cukup Puas</option>
                        <option value="4">Puas</option>
                        <option value="5">Sangat Puas</option>
                </select>
          </div>

        <div class="form-group col-md-6">
        <label for="rel1"> Mengapa Reliability ? </label>
        <input type="text" class="form-control" name ="rel1" id="rel1" placeholder="Berikan jawaban anda.." >
            </div>
            </div>

          <!-- Kolom Assurance -->
         <div class="form-row"> 
      	 <div class="form-group col-md-6">
    		<label for="ass"> Assurance (Jaminan) </label>
    		<select class="form-control" name="ass">
    					<option value="1">Tidak Puas</option>
                        <option value="2">Kurang Puas</option>
                        <option value="3">Cukup Puas</option>
                        <option value="4">Puas</option>
                        <option value="5">Sangat Puas</option>
                </select>
       </div>

        <div class="form-group col-md-6">
        <label for="ass1"> Mengapa Assurance ? </label>
        <input type="text" class="form-control" name ="ass1" id="ass1" placeholder="Berikan jawaban anda.." >
      </div>
    </div>

    <div class="form-row">
    <div class="form-group col-md-6">
        <input type="hidden" class="form-control" name ="sar" id="sar" placeholder="Berikan jawaban anda.." >
      </div>
    <div class="form-group col-md-6">
        <label for="sar"> Saran Keseluruhan ? </label>
        <input type="text" class="form-control" name ="sar" id="sar" placeholder="Berikan jawaban anda.." >
      </div>
    </div>

            <button type="reset" class="btn btn-danger"> Reset</button>
            <button type="Submit" class="btn btn-primary" name="Submit">Submit Data</button>
    		
      </div>
</div>

			
    
  </div>

	</div>

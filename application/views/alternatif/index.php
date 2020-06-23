<div class="container">
	<?php if($this->session->flashdata('flash')):  ?>
	<div class="row-mt-3" >
			<div class="col-md-6">
				<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Data Alternatif </strong> Berhasil.
  <?= $this->session->flashdata('flash'); ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
	</div>
</div>
<?php endif; ?>


	<div class="container">
        <div class="kata">
        <h2 class="alert alert-primary text-left mt-4"> Data Client </h2>
        <div class="row">
		<div class="col-md-12">
			<form action="" method="post">
				<div class="input-group">
				  <input type="text" class="form-control" placeholder="Masukkan Pencarian Client" name="key">
				  <div class="input-group-append">
				  <button class="btn btn-primary" type="submit" id="button-addon2">Cari</button>
	</div>
	</div>
	</form>
    <div class="row">
		<div class="col-md-10">

			<br>
			<a href="<?=base_url(); ?>alternatif/tambahalternatif" class="btn btn-first  ml-auto"> Tambah Data</a>
      <a href="<?=base_url(); ?>alternatif/hitungbro" class="btn btn-first ml-auto"> Hitung Data</a>

	</div>
	</div>

<div class="row mt-3">
		<div class="col-md-6">
  <table class="table" id="table">
      <tr>
        <th scope ="col">CLIENT</th>
        <th scope ="col">PROJEK</th>
        <th scope ="col">TANGIBLE</th>
        <th scope ="col">EMPATHY</th>
        <th scope ="col">RESPONSIVENESS</th>
        <th scope ="col">RELIABILITY</th>
        <th scope ="col">ASSURANCE</th>
        <th scope ="col">KETERANGAN</th >        
      </tr>

      <tr>
      	<?php foreach( $alternatif as $alt) : ?>
            <td><?= $alt['CLIENT']; ?></td>
            <td><?= $alt['PROJEK']; ?></td>
            <td><?= $alt['TANGIBLE']; ?></td>
            <td><?= $alt['EMPHATY']; ?></td>
            <td><?= $alt['RESPONSIVENESS']; ?></td>
            <td><?= $alt['RELIABILITY']; ?></td>
            <td><?= $alt['ASSURANCE']; ?></td>
            <td> <a href="<?= base_url(); ?>alternatif/editdata/<?= $alt['ID'];?>" class="btn btn-success btn-sm right" 
 				 	> Edit </a>
            <td> <a href="<?= base_url(); ?>alternatif/hapusdata/<?= $alt['ID'];?>" class="btn btn-danger btn-sm right" 
 				 	onclick="return confirm('Anda yakin ingin Hapus ?');">Hapus</a>      
       </tr>
   </td>
       <?php endforeach; ?>

   </table>

	
  


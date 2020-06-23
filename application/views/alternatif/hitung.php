<section>
  <div class="container">
    <div class ="kata">
      <h2 class = "alert alert-primary text-left mt-4"> Bobot Prioritas </h2>
<table class="table" id="table">
  <tr>
    <th> Tangible </th>
    <th> Empathy </th>
    <th> Responsiveness </th>
    <th> Reliability </th>
    <th> Assurance </th>
  </tr>
<tr>
    <td> <?php echo $hasil[0]['bobotbro']; ?> </td>
    <td> <?php echo $hasil[1]['bobotbro']; ?> </td>
    <td> <?php echo $hasil[2]['bobotbro']; ?> </td>
    <td> <?php echo $hasil[3]['bobotbro']; ?> </td>
    <td> <?php echo $hasil[4]['bobotbro']; ?> </td>
</table>
</div>
</div>
</section>

<section>
  <div class="container">
    <div class ="kata">
      <h2 class = "alert alert-primary text-left mt-4"> Perhitungan Nilai S </h2>

<table class="table" id="table">
  <th> CLIENT</th>
  <th> Projek</th>
  <th> Nilai S </th>  
  <?php foreach($hasil as $has) : ?>
<tr> 
    <td><?php echo $has['CLIENT'] ?></td>
    <td><?php echo $has['PROJEK'] ?></td>
    <td><?php echo $has['hasilS'] ?></td>
</tr>
     <?php endforeach ?>
</table>
</div>
</div>
</section>

<section>
    <div class="container">
      <div class="kata">
        <h2 class="alert alert-primary text-left mt-4"> Hasil Rekomendasi </h2>
  <table class="table" id="table">
      <th>CLIENT</th>
      <th>Projek</th>
      <th>VI</th>
      <?php
        function methodcmp($a, $b){
          if ($a['vektorV'] == $b['vektorV']){
            return 0;
          }
          return ($a['vektorV'] > $b['vektorV']) ? -1 : 1;
        } 
        usort($hasil, "methodcmp")   
      ?>
        <?php foreach($hasil as $has): ?>
    <tr>
          <td><?php echo $has['CLIENT'] ?></td>
          <td><?php echo $has['PROJEK'] ?></td>
          <td><?php echo $has['vektorV'] ?></td>
      </tr>
      <?php endforeach ?>
      </table>
</div>
</div>
</section>

<!-- <section>
  
  <div class="container">
    <div class="kata">
        <h2 class="alert alert-primary text-left mt-4" style="width: 900px;"> Grafik Analisa Peritungan </h2> 
        <canvas id ="myChart"></canvas>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.js">
  </script>

<script> 
  let ctx = document.getElementById('myChart').getContext('2d')
  let chart = new Chart(ctx,{
    type: 'bar',

    data:{
      labels: ["TANGIBLE", "EMPHATY", "RESPONSIVENESS","RELIABILTY","ASSURANCE"],
            datasets: [{
                label: "Dataset Project TelkomSigma",
                backgroundColor: ['Blue','Green','Red','Yellow','Brown'],
                borderColor: 'black ',
                data: [10, 20, 30, 40, 50],
      }]
    },

    options: {
      responsive:true
    }

      });
    
  
  </script>

</section> -->

<section>
    <div class="container">
      <div class="kata">
        <h2 class="alert alert-primary text-left mt-4"> Rekomendasi Terbaik</h2>
  <table class="table" id="table">
      <th>CLIENT</th>
      <th>PROJEK</th>
      <th>Vi</th>
        <?php $has = $hasil[0] ?>
        <tr>
          <td><?php echo $has['CLIENT'] ?></td>
          <td><?php echo $has['PROJEK'] ?></td>
          <td><?php echo $has['vektorV'] ?></td>
      </tr>
      </table>
</div>
</div>
</section>

<section>
    <div class="container">
      <div class="kata">
        <h2 class="alert alert-primary text-left mt-4"> Saran Responden </h2>
  <table class="table" id="table">
        <th>Client</th>
        <th>Projek</th>
        <th>Tangible</th>
        <th>Empathy</th>
        <th>Responsiveness</th>
        <th>Reliability</th>
        <th>Assurance</th>
        <th>Saran</th>
        <?php foreach($hasil as $has): ?>
    <tr>
        <td> <?php echo $has['CLIENT'] ?></td>
        <td> <?php echo $has['PROJEK'] ?></td>
        <td> <?php echo $has['TANGIBLE1']; ?> </td>
        <td> <?php echo $has['EMPHATY1']; ?> </td>
        <td> <?php echo $has['RESPONSIVENESS1']; ?> </td>
        <td> <?php echo $has['RELIABILITY1']; ?> </td>
        <td> <?php echo $has['ASSURANCE1']; ?> </td>
        <td> <?php echo $has['SARAN']; ?> </td>
    </tr>
    <?php endforeach ?>
    </table>
</div>
</div>
</section>
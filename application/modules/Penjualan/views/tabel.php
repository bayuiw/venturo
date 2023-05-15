<table class="table table-striped table-bordered" style="font-size: 8pt;">
  <thead style="background-color: #000;">
    <tr>
      <th rowspan="2" style="text-align: center; color: #fff;">Menu</th>
      <th colspan="12" style="text-align: center; color: #fff;">Periode</th>
      <th rowspan="2" style="text-align: center; color: #fff;">Total</th>
    </tr>
    <tr>
      <th style="text-align: center; color: #fff;">Jan</th>
      <th style="text-align: center; color: #fff;">Feb</th>
      <th style="text-align: center; color: #fff;">Mar</th>
      <th style="text-align: center; color: #fff;">Apr</th>
      <th style="text-align: center; color: #fff;">Mei</th>
      <th style="text-align: center; color: #fff;">Jun</th>
      <th style="text-align: center; color: #fff;">Jul</th>
      <th style="text-align: center; color: #fff;">Ags</th>
      <th style="text-align: center; color: #fff;">Sep</th>
      <th style="text-align: center; color: #fff;">Okt</th>
      <th style="text-align: center; color: #fff;">Nov</th>
      <th style="text-align: center; color: #fff;">Des</th>
    </tr>
  </thead>
  <tbody>
    <?php $kategori=""; foreach ($menu as $d) { ?>
      <?php if($kategori!=$d['kategori']){ ?>
        <tr>
          <td colspan="14" style="font-weight: bold;"><?php echo ucfirst($d['kategori']) ?></td>
        </tr>
        <?php $kategori=$d['kategori'];
      } ?>
      <tr>
        <td><?php echo $d['menu'] ?></td>
        <?php foreach($d['data'] as $dt){ ?>
          <td style="text-align: right;"><?php if($dt==0) echo ""; else echo number_format($dt,0,'',',') ?></td>
        <?php } ?>
        <td style="font-weight: bold; text-align: right;"><?php echo number_format($d['total'],0,'',',') ?></td>
      </tr>
    <?php } ?>
  </tbody>
  <tr style="background-color: #000;">
    <td style="font-weight: bold; color: #fff;">Total</td>
    <?php foreach ($total_bulan as $tb) { ?>
      <td style="font-weight: bold; color: #fff; text-align: right;"><?php echo number_format($tb) ?></td>
    <?php } ?>
    <td style="font-weight: bold; color: #fff; text-align: right;"><?php echo number_format($grand_total) ?></td>
  </tr>
</table>

<html lang="id">
<head>
    <title>INVOICE PEMBAYARAN APOTEK SEHAT ONLINE</title>
</head>

<body style="font-family: open sans, tahoma, sans-serif; margin: 0; -webkit-print-color-adjust: exact">

<div style="
    
    background-size: contain;
    width: 1350px;">

    <table width="1350px" cellspacing="0" cellpadding="0" class="container" style="width: 100%; padding: 20px;">
        <tr>
            <td>
                <?php 
    
                    foreach ($row as $key => $vaHeader) {
                        $dTgl            =   $vaHeader['tanggal'];
                        $cKodeTransaksi  =   $vaHeader['no_pesanan'];
                    }

                ?>
                <table width="1350px" cellspacing="0" cellpadding="0" style="width: 1350px; padding-bottom: 20px;">
                    <tbody>
                        <tr>
                            <td style="padding-bottom: 5px;display: block;width:200px">
                                <span style="font-size: 20px; font-weight: 600;"><strong>Bukti Pemesanan</strong></span>  
                            </td>
                            <td style="padding-bottom: 5px;display: block;">
                                <span style="font-size: 20px; font-weight: 600;color: #42B549;"><strong>#<?php echo $cKodeTransaksi?></strong></span>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-right: 10px;">
                                 <table style="width: 1350px; border-collapse: collapse;" width="1350px" cellspacing="0" cellpadding="0">
                                    <tr style="font-size: 13px;">
                                        <td>
                                            <!--batas -->
                                            <table width="1350px">
                                                <tr>
                                                    <td width="600px">
                                                        <table style="width: 100%; border-collapse: collapse;margin-top: 20px" width="100%" cellspacing="0" cellpadding="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td> 
                                                                        <strong style="color: #42B549">APOTEK SEHAT</strong>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> 
                                                                        Jl. Panglima Sudirman No.52 Ngaglik<br>
                                                                        Kec. Batu, Kota Batu, Jawa Timur <br>
                                                                        (0341) 591558
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                  
                                                        
                                                    </td>
                                                    <!--batas -->
                                                    <td width="300px" align="right" style="">
                                                        <table style="width: 600px; border-collapse: collapse;margin-right: -512px" width="600px" cellspacing="0" cellpadding="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="" width="200">Kode Transaksi</td>
                                                                    <td style="padding: 3px 0;"><?=$cKodeTransaksi?></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <table style="width: 300px; border-collapse: collapse;margin-right: -212px" width="300px" cellspacing="0" cellpadding="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="200">Tanggal</td>
                                                                    <td style="padding: 3px 0;"><?=$dTgl?></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                  
                                                        
                                                    </td>
                                                </tr>
                                            </table>
                                            <!--batas -->
                                        </td>
                                    </tr>
                                    
                                </table>
                            </td>
                            <td style="padding-left: 10px;vertical-align: text-top;">
                                <table style="width: 1350px; border-collapse: collapse;" width="1350px" cellspacing="0" cellpadding="0">
                                    <tr style="font-size: 13px;">
                                        <td>
                                            <table style="width: 1350px; border-collapse: collapse;" width="1350px" cellspacing="0" cellpadding="0">
                                                <tbody>
                                                    <tr>
                                                        
                                                        <td>

                                                        
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <table style="width: 1350px; text-align: center; border-top: 1px solid rgba(0,0,0,0.1); border-bottom: 1px solid rgba(0,0,0,0.1); padding: 15px 0;" width="2000px" cellspacing="0" cellpadding="0">
                    <thead >
                        <tr style="font-size: 14px; background-color: rgba(0,0,0,0.1);" bgcolor="#F1F1F1">
                        <th style="width: 120px; font-weight: 600; padding: 0 5px 5px;" width="120">Produk</th>
                        <th style="font-weight: 600; text-align: center; padding: 0 5px 0px 10px;padding-top: 10px;padding-bottom: 10px">Nama Produk</th>
                        <th style="width: 120px; font-weight: 600; padding: 0 5px 5px;" width="120">Jumlah</th>
                        
                        <th style="width: 115px; font-weight: 600; text-align: right; padding: 0 30px 5px 5px;" width="115">Harga</th>
                        <th style="width: 115px; font-weight: 600; text-align: right; padding: 0 30px 5px 5px;" width="115">Sub Total</th>
                    </tr></thead>
                    <tbody>
                    
                       
                        <?php 
                            $nSubTotal = 0 ;
                            $nHarga     = 0 ;
                            foreach ($row as $key => $vaData) {
                                $nBerat          = $vaData['berat'] ; 
                                $nSubTotal      += $vaData['jumlah'] * $vaData['harga'] ;
                                $nHargaJual     += $vaData['harga_per_gram'];
                                $nOngkoas        = $vaData['ongkos'];
                                $cKodetrs        = $vaData['no_pesanan'];
                            
                        ?>
                        <tr style="font-size: 13px;">
                            <td style="width: 300px; padding: 8px 5px;" width="120"><img src="<?=base_url()?>/<?=$vaData['gambar']?>" style="width:150px"></td>
                            <td style="text-align: left; padding: 8px 5px 8px 15px;" width="90">
                                <?=$vaData['kode_barang']?> - <?=$vaData['nama_barang']?>
                            </td>
                            <td style="width: 500px; padding: 8px 5px;" width="120"><?=$vaData['jumlah']?></td>
                           
                            
                            <td style="width: 115px; text-align: right; padding: 8px 30px 8px 5px;" width="115"><strong>Rp <?=number_format($vaData['harga'])?></strong></td>
                             <td style="width: 115px; text-align: right; padding: 8px 30px 8px 5px;" width="115"><strong>Rp <?=number_format($nSubTotal )?></strong></td>
                        </tr>
                        <?php } ?>
                       
                          <?php 
                                    $dataCek = $this->model->code("SELECT SUM(jumlah*harga) as bayar FROM v_cart_detail WHERE no_pesanan = '".$cKodetrs."'");
                                    foreach ($dataCek as $key => $vaPembayaran) {
                                        $cBayar     = $vaPembayaran['bayar']; 
                                    }
                                    $dataOngkir = $this->model->code("SELECT * FROM v_cart_detail WHERE no_pesanan = '".$cKodetrs."' LIMIT 1 ");
                                    foreach ($dataOngkir as $key => $vaPembayaran) {
                                        $cOngkir     = $vaPembayaran['ongkir']; 
                                    }
                                    ?>  
                        <tr style="font-size: 13px; background-color: rgba(0,0,0,0.1);" bgcolor="#F1F1F1">
                            <td colspan="3" style="font-weight: 600; text-align: left; padding: 8px 5px 8px 15px;">Sub Total</td>
                            <td style="width: 115px; font-weight: 600; text-align: right; padding: 8px 30px 8px 5px;" width="115"></td>
                            <td style="width: 115px; font-weight: 600; text-align: right; padding: 8px 30px 8px 5px;" width="115">Rp <?=number_format($cBayar)?></td>
                        </tr>
                         <tr style="font-size: 13px; background-color: rgba(0,0,0,0.1);" bgcolor="#F1F1F1">
                            
                            <td colspan="3" style="font-weight: 600; text-align: left; padding: 8px 5px 8px 15px;">Ongkos Kirim</td>
                            <td style="width: 115px; font-weight: 600; text-align: right; padding: 8px 30px 8px 5px;" width="115"></td>
                            <td style="width: 115px; font-weight: 600; text-align: right; padding: 8px 30px 8px 5px;" width="115">Rp <?=number_format($cOngkir)?></td>
                        </tr>
                        <tr style="font-size: 13px; background-color: rgba(0,0,0,0.1);" bgcolor="#F1F1F1">
                            <td colspan="3" style="font-weight: 600; text-align: left; padding: 8px 5px 8px 15px;">Total Pembayaran</td>
                            <td style="width: 115px; font-weight: 600; text-align: right; padding: 8px 30px 8px 5px;" width="115"></td>
                            <td style="width: 115px; font-weight: 600; text-align: right; padding: 8px 30px 8px 5px;" width="115">Rp <?=number_format($cOngkir+$cBayar)?></td>
                        </tr>
                        
                    </tbody>
                </table>
             
                <div style='background: #fff; padding-top: 1%; border: px solid #e1e1e1;'>
      <table style='border-collapse: collapse;' width='100%;' cellpadding='3px;'>
        <tbody style='vertical-align: text-top;'>
          <tr>
            <td style='width: 500px; text-align: center; padding-top: 5px; padding-bottom: 5px; border: 1px solid #e1e1e1;'><table align='left' id='m_3258136848808510308securityAnnouncementWrapper' width='100%' bgcolor='#f0f0f0'>
              <tbody>
                <tr>
                  <td height='26' width='24'><br />
                  <img alt='Hati-hati' src='https://ci4.googleusercontent.com/proxy/17QqMspfedBHa9ObiGH2rhbjYiGN_eclyCwL-Ws0XG_XSoZfj3vqh6hF2USepehm1Xc7TX788N1xbTEq_KlBHisQN_BSgbs=s0-d-e1-ft#https://www.bukalapak.com/images/icon_warning.png' style="margin-left:10px;margin-bottom: 12px;width: 30px" />
                  </td>
                  <td align='left' width='516'><p>Bukti Pembayaran ini adalah bukti pembayaran yang sah <strong>Mohon disimpan dan digunakan untuk melakukan penjualan kembali. </strong> selalu mintalah bukti pembayaran untuk setiap transaksi di toko kami.</p></td>
                </tr>
              </tbody>
            </table></td>
          </tr>
        </tbody>
      </table>
    </div><br />
    
            </td>
        </tr>
    </table>
    </div>
</body>

</html>

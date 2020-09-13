!DOCTYPE html>
<html>
 <head>
  <title>Input CRUD Pemesana Tiket KA</title>
 </head>
 <body>
  <h3 align="center">INPUT PEMESANAN TIKET KERETA API INDONESIA</h3>
  <center><a href="index.php">&Lt; Tabel Pemesanan Tiket Kereta Api Indonesia</a></center></br>
  <fieldset style="width: 50%; margin: auto;">
   <legend>Form Input Pemesanan Tiket Kereta Api Indonesia</legend>
  <form action="simpan.php" method="post">
  <table>
  <tr>
   <td>Nama</td>
   <td>:</td>
   <td><input type="text" name="nama"required=required placeholder='nama pembeli' class="form-control input-md"></td>
  </tr>
  <tr>
   <td>Nama Kereta</td>
   <td>:</td>
   <td><input type="text" name="nama_kereta"required=required placeholder='nama KA'></td>
   <td>No KA</td>
   <td>:</td>
   <td><input type="number" name="no_kereta"required=required placeholder='No KA'></td>
  </tr>
  <tr>
   <td>Kelas</td>
   <td>:</td>
   <td><select name="kelas">
    <option value="Pilih kelas">---Pilih Kelas---
    <option value="EKONOMI">EKONOMI
    <option value="EKONOMI">BISNIS
    <option value="EKONOMI">EXECUTIVE
   </select></td>
   <td>No Kursi</td>
   <td>:</td>
   <td><input type="number" name="no_kursi"required=required placeholder='No duduk'></td>
  </tr>
  <tr>
   <td>Berangkat</td>
   <td>:</td>
   <td><input type="text" name="berangkat"required=required placeholder='berangkat'></td>
   <td>Tanggal</td>
   <td>:</td>
   <td><input type="date" name="tanggal_berangkat"required=required placeholder='ex:YYYY-MM-DD'></td>
  </tr>
  <tr>
   <td>Tiba</td>
   <td>:</td>
   <td><input type="text" name="tiba"required=required placeholder='tiba'></td>
   <td>Tanggal</td>
   <td>:</td>
   <td><input type="date" name="tanggal_tiba"required=required placeholder='ex:YYYY-MM-DD'></td>
  </tr>
        <tr>
   <td>Harga</td>
   <td>:</td>
   <td><input type="number" name="harga"required=required placeholder='harga tiket'></td>
  </tr>
        <tr>
            <td><input type="submit" value="Simpan" /></td>
            <td><input type="reset" value="Reset" onclick="return confirm('hapus data yang telah diinput?')"></td>
        </tr>
  </table>
    </form>
 </fieldset>
 <p><center>Copyright &#169; 2014 <a href='http://mohsyahid.blogspot.com/'>mohsyahid.blogspot.com</a> || Moh Syahid<br>CRUD dengan PHP dan MYSQL</a></p>
 </body>
</html> 

<form action="edit.php" method="post">
<div class="mb-3">
    <label for="id" class="form-label" >Nama Brand</label>
    <input for="email" class="form-control" placeholder="idnya" name="id">
  </div>
    <div class="mb-3">
    <input id="hijau" type="radio" name="warna" value="Hijau"> 
    <label for="hijau" class="form-label">Hijau</label>
    <input id="merah" type="radio" name="warna" value="Merah">
    <label for="merah" class="form-label">Merah</label>
    <input id="biru" type="radio" name="warna" value="Biru">
    <label for="biru" class="form-label">Biru</label> 
  </div>
  <div class="mb-3">
    <label for="harga" class="form-label">Harga</label>
    <input for="harga" class="form-control" placeholder="harganya" name="harga">
  </div>
  <div class="mb-3">
    <label for="file" class="form-label">Image</label>
    <input for="file" class="form-control" type="file" name="file">
  </div>
    <input class="btn btn-primary" type="submit" value="kirim" name="kirim">
    <input class="btn btn-outline-primary" type="reset" value="batal">
</form> 
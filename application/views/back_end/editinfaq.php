<div class="contrainer-fluid ml-3">
	<h3><i class="fas fa-edit"></i>Edit Data Infaq</h3>



	<form action="<?= base_url('back_end/infaq/ubahinfaq/') . $kas['id_transaksi']; ?> "enctype="multipart/form-data" method="post" >
		<div class="form-group">
		<input type="hidden" name="id_transaksi" value="<?= $kas['id_transaksi']; ?>">
            <label for="judul">Pemasukan</label>
            <input type="text" name="pemasukan"  class="form-control judul border-dark" value="<?php echo $kas['pemasukan'] ?>" id="title" onkeyup="createTextSlug()">
            <small class="muted text-danger"><?= form_error('pemasukan'); ?></small>
          </div>
		  <div class="form-group">
		  <label for="judul">Pengeluaran</label>
            <input type="text" name="pengeluaran"  class="form-control judul border-dark" value="<?php echo $kas['pengeluaran'] ?>">
            <small class="muted text-danger"><?= form_error('pengeluaran'); ?></small>
          </div>
		  <div class="form-group">
		  <label for="judul">Keterangan</label>
            <input type="text" name="keterangan"  class="form-control judul border-dark" value="<?php echo $kas['keterangan'] ?>">
            <small class="muted text-danger"><?= form_error('keterangan'); ?></small>
          </div>
			<div class="form-group">
            <label for="kategori">Jenis Kegiatan</label>
            <select name="id_kategori" id="id_kategori" class="form-control">
              <option value="">Pilih Kategori</option>
              <?php foreach($tb_kategori_kas as $k) : ?>
                <option value="<?= $k['id_kategori']; ?>"><?= $k['kategori']; ?></option>
              <?php endforeach; ?>
              <small class="muted text-danger"><?= form_error('kategori'); ?></small>
            </select>
          </div>
		  <div class="form-group">
            <label for="foto_berita">Gambar</label><br>
            <img src="" id="tampilFoto" width="80">
            <input type="file" name="foto" id="foto" class="form-control">
            <input type="text" name="inputfoto" id="inputfoto" class="form-control">
          </div>
			<br>
			<button type="submit" class="btn btn-primary btn-sm ml-3">Simpan</button>
			
		</form>

	
</div>

<script>
    function createTextSlug()
    {
        var title = document.getElementById("title").value;
                    document.getElementById("slug").value = generateSlug(title);
    }
    function generateSlug(text)
    {
        return text.toString().toLowerCase()
            .replace(/^-+/, '')
            .replace(/-+$/, '')
            .replace(/\s+/g, '-')
            .replace(/\-\-+/g, '-')
            .replace(/[^\w\-]+/g, '');
    }
</script>

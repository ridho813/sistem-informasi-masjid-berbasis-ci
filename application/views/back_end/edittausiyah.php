<div class="contrainer-fluid ml-3">
	<h3><i class="fas fa-edit"></i>Edit Data Kegiatan</h3>



	<form action="<?= base_url('back_end/tausiyah/ubahkegiatan/') . $kegiatan['id_kegiatan']; ?> "enctype="multipart/form-data" method="post" >
		<div class="form-group">
		<input type="hidden" name="id_kegiatan" value="<?= $kegiatan['id_kegiatan']; ?>">
            <label for="judul">Judul Kegiatan</label>
            <input type="text" name="judul_kegiatan"  class="form-control judul border-dark" value="<?php echo $kegiatan['judul_kegiatan'] ?>" id="title" onkeyup="createTextSlug()">
            <small class="muted text-danger"><?= form_error('judul_kegiatan'); ?></small>
          </div>
		  <div class="form-group">
		  <label for="judul">Narasumber</label>
            <input type="text" name="narasumber"  class="form-control judul border-dark" value="<?php echo $kegiatan['narasumber'] ?>">
            <small class="muted text-danger"><?= form_error('narasumber'); ?></small>
          </div>
			<div class="form-group">
            <label for="seo_title">Seo Artikel</label>
            <input type="text" name="seo_title" value="<?php echo $kegiatan['seo_title'] ?>" class="form-control border-dark" id="slug">
            <small class="muted text-danger"><?= form_error('seo_title'); ?></small>
          </div>
			<div class="form-group">
            <label for="kategori">Jenis Kegiatan</label>
            <select name="id_jenis" id="id_jenis" class="form-control">
              <option value="">Pilih Kategori</option>
              <?php foreach($tb_jenis_kegiatan as $k) : ?>
                <option value="<?= $k['id_jenis']; ?>"><?= $k['jenis_kegiatan']; ?></option>
              <?php endforeach; ?>
              <small class="muted text-danger"><?= form_error('jenis_kegiatan'); ?></small>
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

<div class="contrainer-fluid ml-3">
	<h3><i class="fas fa-edit"></i>Edit Data Berita</h3>



	<form action="<?= base_url('back_end/artikel/dataupdate/') . $berita['id_berita']; ?> "enctype="multipart/form-data" method="post" >
		<div class="form-group">
		<input type="hidden" name="id_berita" value="<?= $berita['id_berita']; ?>">
            <label for="judul">Judul Artikel</label>
            <input type="text" name="judul_berita"  class="form-control judul border-dark" value="<?php echo $berita['judul_berita'] ?>" id="title" onkeyup="createTextSlug()">
            <small class="muted text-danger"><?= form_error('judul_berita'); ?></small>
          </div>
			<div class="form-group">
            <label for="seo_title">Seo Artikel</label>
            <input type="text" name="seo_title" value="<?php echo $berita['seo_title'] ?>" class="form-control border-dark" id="slug">
            <small class="muted text-danger"><?= form_error('seo_title'); ?></small>
          </div>
			<div class="form-group">
            <label for="kategori">Kategori</label>
            <select name="kategori" id="kategori" class="form-control">
              <option value="">Pilih Kategori</option>
              <?php foreach($kategori as $k) : ?>
                <option value="<?= $k['id_kategori']; ?>"><?= $k['nama_kategori']; ?></option>
              <?php endforeach; ?>
              <small class="muted text-danger"><?= form_error('kategori'); ?></small>
            </select>
          </div>
		  <div class="form-group">
            <label for="foto_berita">Gambar</label><br>
            <img src="" id="tampilFoto" width="80">
            <input type="file" name="foto_berita" id="foto_berita" class="form-control">
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

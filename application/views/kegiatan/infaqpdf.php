 

		
		<h5  class="page-title mb-4">Laporan Infaq Masjid AN-NUUR</h5><br>
		<div class="container mb-5 mt-6">
		<div class="table-responsive">
	   <table class="table table-bordered table-md">   
		
				<tr>
<td>No</td>
<td>File Laporan Infaq</td>

</tr>	  <?php foreach($laporan as $k){     
					
				?>	   
<tr>
<td><?= ++$start; ?></td>
	<td><?php echo "<a class='text-blue' href='".base_URL()."assets/infaqpdf/".$k['name']."' target='_blank'>".$k['name']."</a>"?></td>

</tr><?php } ?> 
</table>
	  </div>
	
</div>  

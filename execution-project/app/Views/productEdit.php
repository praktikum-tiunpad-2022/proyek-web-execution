<div class="container"> 
  <div class="card mt-5">
   <div class="card-header bg-dark text-white"><h6>EDIT Ice cream Data</h6></div>
     <div class="card-body ml-3">
     <form action="update.php" method="post" class="ml-5">
      <div class="row">    
        <div class="col-lg-2"></div>  
       <div class="col-lg-7">      
		<div class="form-group">
			<label>ID Ice Cream:</label>
			<input type="text" class="form-control" name="id_iceCream" value="<?= $iceCream->id_iceCream; ?>">
		</div>
		<div class="form-group">
			<label>Nama Ice Cream :</label>
			<input type="text" class="form-control" name="nama_iceCream" value="<?= $iceCream->nama_iceCream; ?>">
		</div>
        <div class="form-group">
			<label>Topping :</label>
			<input type="text" class="form-control" name="topping" value="<?= $iceCream->topping; ?>">
		</div>
        <div class="form-group">
			<label>Tipe Harga :</label>
			<input type="text" class="form-control" name="tipe_harga" value="<?= $iceCream->tipe_harga; ?>">
		</div>
        
        <input type="submit" class="btn btn-dark" value="Update" name="update">
        </div>    
       </div> 
	  </form>		  
   
</div> 
</div>
</div>  
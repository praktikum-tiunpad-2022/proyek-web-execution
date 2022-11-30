<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Order Form</h1>
            <form action="/transaction" method="POST">
                <div class="form-group">
                    <label for="name">Nama Pelanggan</label>
                    <input type="nama_pelanggan" class="form-control" name="nama_pelanggan" id="nama_pelanggan" placeholder="Nama Pelanggan">
                    <label for="no_telp">Nomor Telpon</label>
                    <input type="no_telp" class="form-control" name="no_telp" id="no_telp" placeholder="Nomor Telpon">
                </div>
                <div class="form-group">
                    <label for="description">Alamat</label>
                    <textarea class="form-control" name="alamat" id="alamat" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="iceCream_menu">Menu Ice Cream</label>
                    <select multiple class="form-control" id="iceCream_menu">
                    <option>Chocochips Ice Cream</option>
                    <option>Snow Oreo Ice Cream</option>
                    <option>Choco-Mocca Ice Cream</option>
                    <option>Sweet Corn Ice Cream</option>
                    <option>Sweet Vanilla Ice Cream</option>
                    <option>Wealth Chocolate Ice Cream</option>
                    <option>Sweet Cutton Ice Cream</option>
                    </select>
                </div>
                <div class="button" style="margin-top: 20px;">
                    <button class="btn btn-dark" name="buy_now">Buy Now</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection();?>
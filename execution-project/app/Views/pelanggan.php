<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">ID Pelanggan</th>
          <th scope="col">Nama Pelanggan</th>
          <th scope="col">Alamat</th>
          <th scope="col">No Telpon</th>
          <th scope="col">Email</th>
        </tr>
      </thead>
      <tbody>
      <tbody>
        <h1>Data Pelanggan</h1>
        <a href="/pelanggan/add" class="btn btn-dark">Add data</a></td>
        <?php foreach($pelanggan as $row) : ?>
        <tr>
            <td><?= $row->id_pelanggan ?></td>
            <td><?= $row->nama_pelanggan ?></td>
            <td><?= $row->alamat ?></td>
            <td><?= $row->no_telp ?></td>
            <td><?= $row->email ?></td>
            <td><a href="/pelanggan/edit/<?= $row->id_pelanggan ?>" class="btn btn-dark">edit</a></td>
            <td><a href="/pelanggan/delete/<?= $row->id_pelanggan ?>" class="btn btn-dark">delete</a></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
</div>

<?= $this->endSection('content');?>
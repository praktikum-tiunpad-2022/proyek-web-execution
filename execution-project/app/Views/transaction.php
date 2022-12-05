<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">No Transaksi</th>
          <th scope="col">ID Pelanggan</th>
          <th scope="col">ID Ice Cream</th>
        </tr>
      </thead>
      <tbody>
      <tbody>
        <h1>Transaction</h1>
        <a href="/transaction/add" class="btn btn-dark">Add data</a></td>
        <?php foreach($transaction as $row) : ?>
        <tr>
            <td><?= $row['no_transaksi']; ?></td>
            <td><?= $row['id_pelanggan']; ?></td>
            <td><?= $row['id_iceCream']; ?></td>
            <td><a href="/transaction/edit/<?= $row['no_transaksi']; ?>" class="btn btn-dark">edit</a></td>
            <td><a href="/transaction/delete/<?= $row['no_transaksi']; ?>" class="btn btn-dark">delete</a></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
</div>

<?= $this->endSection('content');?>
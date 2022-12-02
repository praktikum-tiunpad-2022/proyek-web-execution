<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>

    <table>
        <thead>
            <tr>
                <th>ID Ice Cream</th>
                <th>Nama Ice Cream</th>
                th>Topping</th>
                th>Tipe Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($iceCream as $row) : ?>
            <tr>
                <td><?= $row['id_iceCream']; ?></td>
                <td><?= $row['nama_iceCream']; ?></td>
                <td><?= $row['topping']; ?></td>
                <td><?= $row['tipe_harga']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?= $this->endSection();?>
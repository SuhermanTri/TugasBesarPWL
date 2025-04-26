<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Produk</title>
</head>
<body>

    <h1>Daftar Produk</h1>

    <a href="/product/create">+ Tambah Produk Baru</a>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Produk</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($products) && is_array($products)) : ?>
                <?php foreach ($products as $product) : ?>
                    <tr>
                        <td><?= esc($product['vendor_id']) ?></td>
                        <td><?= esc($product['nama_vendor']) ?></td>
                        <td>Rp <?= esc(number_format($product['price'], 2, ',', '.')) ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="3">Tidak ada produk yang tersedia.</td>
                </tr>
            <?php endif ?>
        </tbody>
    </table>

</body>
</html>

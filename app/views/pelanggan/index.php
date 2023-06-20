<h2>Tabel Pelanggan</h2>

<a href="<?php echo URL; ?>/pelanggan/input" class="btn ">Input Data Pelanggan</a>

<table>
      <tr>
            <th>ID</th>
            <th>Golongan Pelanggan</th>
            <th>Nomor Pelanggan</th>
            <th>Nama Pelanggan</th>
            <th>Alamat Pelanggan</th>
            <th>No Hp Pelanggan</th>
            <th>No Ktp Pelanggan</th>
            <th>No Seri Pelanggan</th>
            <th>Pelanggan Aktif</th>
            <th>ID User</th>
            <th>Tanggal Input Data</th>
            <th>Tanggal Perubahan Data</th>
            <th>Edit</th>
            <th>Hapus</th>
      </tr>

      <?php foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $row['pel_id']; ?></td>
                  <td><?php echo $row['pel_id_gol']; ?></td>
                  <td><?php echo $row['pel_no']; ?></td>
                  <td><?php echo $row['pel_nama']; ?></td>
                  <td><?php echo $row['pel_alamat']; ?></td>
                  <td><?php echo $row['pel_hp']; ?></td>
                  <td><?php echo $row['pel_ktp']; ?></td>
                  <td><?php echo $row['pel_seri']; ?></td>
                  <td><?php echo $row['pel_aktif']; ?></td>
                  <td><?php echo $row['pel_id_user']; ?></td>
                  <td><?php echo $row['created_at']; ?></td>
                  <td><?php echo $row['updated_at']; ?></td>
                  <td><a href="<?php echo URL; ?>/pelanggan/edit/<?php echo $row['pel_id']; ?>" class="btn ">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/pelanggan/delete/<?php echo $row['pel_id']; ?>" class="btn ">Delete</a></td>
            </tr>
      <?php } ?>
</table>
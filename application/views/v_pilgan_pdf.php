<h2>
    <center>Psikotestbox</center>
</h2>
<hr />
<table border="1" width="100%" style="text-align:center;">
    <tr>
        <th>Id Test</th>
        <th>Nama</th>
        <th>Waktu Mulai</th>
        <th>Waktu Selesai</th>
        <th>Nilai</th>
    </tr>
    <tr>
        <td><?= $pilgan->id; ?></td>
        <td><?= $user->name; ?></td>
        <td><?= $pilgan->start_date; ?></td>
        <td><?= $pilgan->end_date; ?></td>
        <td><?= $pilgan->nilai; ?></td>
    </tr>
</table>
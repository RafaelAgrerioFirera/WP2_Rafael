<html>
    <head>
        <title>Form Input Matakuliah</title>
    </head>
<body>
    <center>
        <form action="<?= base_url('matakuliah/cetak'); ?>" method="post">
        <table>
            <tr>
                <th colspan="3">
                    Form Imput Data Mata Kuiah 
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>Kode MTK</th>
                <th>:</th>
                <td>
                    <input type="text" name="kode" id="kode"
                    class="<?= form_error('kode') ? 'invalid' : '' ?>"
                        placeholder="isikan data" value="<?= set_value('kode') ?>"/>
                    <div class="invalid-feedback"><?= form_error('kode') ?></div>
                </td>
            </tr>
            <tr>
                <th>Nama MTK</th>
                <th>:</th>
                <td>
                    <input type="text" name="nama" id="nama"
                    class="<?= form_error('nama') ? 'invalid' : '' ?>"
                        placeholder="isikan data" value="<?= set_value('nama') ?>" />
                        <div class="invalid-feedback"><?= form_error('nama') ?></div>
                    </td>
            </tr>
            <tr>
                <th>SKS</th>
                <th>:</th>
                <td>
                <div class="invalid-feedback"><?= form_error('sks') ?></div>
                    <select name="sks" id="sks">
                        <option value="pilih SKS">Pilih SKS</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <input type="submit" value="submit">
                </td>
            </tr>
        </table>
    </center>
    
</body>
</html>
<html>
    <head>
        <title>Tampil Data Matakuliah</title>
    </head>
    <center>
        <table>
            <tr>
                <th colspan="3">Tampil Data Mata Kuliah</th>
            </tr>
            <tr>
                <td>Kode MTK</td>
                <td>:</td>
                <td>
                    <?= $kode; ?>
                </td>
            </tr>
            <tr>
                <td>Nama MTK</td>
                <td>:</td>
                <td>
                    <?= $nama; ?>
                </td>
            </tr>
            <tr>
                <td>SKS</td>
                <td>:</td>
                <td>
                    <?= $sks; ?>
                </td>
            </tr>
            <tr>
            <td colspan="3" align="center"><a href="<?php echo base_url('Matakuliah');?>">Kembali</a></td>
            </tr>
        </table>
    </center>
</html>
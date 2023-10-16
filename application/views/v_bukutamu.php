<section>
<center>
        <form action="<?= base_url('Web/cetak'); ?>"
        method="post">
            <table border="0" width="500px">
                <tr>
                    <th colspan="3">
                    Form Input Data Mata Kuliah
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                    <hr>
                    </td>
                </tr>
                <tr>
                    <th>Nama Lengkap</th>
                    <td>:</td>
                    <td>
                    <input type="text" name="nama" id="nama">
                    </td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>:</td>
                    <td>
                    <input type="text" name="email" id="email">
                    </td>
                </tr>
                <tr>
                    <th>Komentar</th>
                    <td>:</td>
                    <td>
                    <textarea name="komentar" id="komentar" rows="6" cols="20"></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                    <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</section>
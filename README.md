MULTIPE-KONESI-CI
=================

<font align="justify">Konfigurasi multiple koneksi database Mysql Codeigniter 2.1.3. Pada kasus ini saya menggunakan dua database Mysql
yang digunakan secara bersamaan dalam satu aplikasi. Untuk dump db nya sudah saya lampirkan juga. Untuk lebih lengkapnya
bisa mengunjungi</font>
<br /> [Blog Saya](http://www.dunia14inch.wordpress.com)

![asdsad](http://bolehjadi2.files.wordpress.com/2012/07/codeigniterwallpaper.jpg)
<table>
    <tr>
        <td width="980px" align="center"><b>SEMOGA BISA MEMBANTU</b></td>
    </tr>
</table>

>Contoh load database :

<pre>
  <code> 
    $this->mahasiswa    = $this->load->database('default', TRUE); 	/*koneksi database untuk mahasiswa*/
    $this->d_mahasiswa  = $this->load->database('stats', TRUE); 	/*koneksi database untuk d_mahasiswa*/
  </code>
</pre>

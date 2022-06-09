
2
3
4
5
6
<?php
    session_start(); //inisialisasi session
    if(session_destroy()) {//menghapus session
        header("Location: index.php"); //jika berhasil maka akan diredirect ke file index.php
    }
?>
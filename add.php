<?php
if (isset($_POST['sub'])) {
    $p = $_POST;
    $folder = str_replace(" ", "", $_POST['folder'] . "/apache/conf/extra/httpd-vhosts.conf");
    $folder2 = str_replace(" ", "", $_POST['folder'] . "/apache/conf/extra/");
    $folder3 = str_replace(" ", "", $_POST['folder'] . "/htdocs/");
    $domen = str_replace(" ", "", $_POST['domen']);
    $project = str_replace(" ", "", $_POST['project']);

    if (file_exists($folder)) {
        if (is_dir($project)) {
            if (file_exists("C://Windows/System32/drivers/etc/hosts")) {


                if (file_get_contents($folder2 . "startinfo.dat") != 1) {
                    $add = '<VirtualHost *:80>' . "\n" . '    ServerAdmin webmaster@dummy-host2.example.com' . "\n" . '    DocumentRoot "' . $folder3 . '"' . "\n" . '    ServerName localhost' . "\n" . '    ErrorLog "logs/dummy-host2.example.com-error.log"' . "\n" . '    CustomLog "logs/dummy-host2.example.com-access.log" common' . "\n" . '</VirtualHost>';
                    $file = file_get_contents($folder) . "\n\n" . $add;
                    file_put_contents($folder2 . "httpd-vhosts.conf", $file);
                    file_put_contents($folder2 . "startinfo.dat", "1");
                    $file = file_get_contents("C://Windows/System32/drivers/etc/hosts") . "\n" . "127.0.0.1       localhost";
                    file_put_contents("C://Windows/System32/drivers/etc/hosts", $file);
                }

                $ip = "127.".rand(0,200).".".rand(0,200).".".rand(0,99);
                $add = '<VirtualHost *:80>' . "\n" . '    ServerAdmin webmaster@dummy-host2.example.com' . "\n" . '    DocumentRoot "' . $project . '"' . "\n" . '    ServerName ' . $domen . '' . "\n" . '    ErrorLog "logs/dummy-host2.example.com-error.log"' . "\n" . '    CustomLog "logs/dummy-host2.example.com-access.log" common' . "\n" . '</VirtualHost>';
                $file = file_get_contents($folder) . "\n\n" . $add;
                file_put_contents($folder2 . "httpd-vhosts.conf", $file);
                $file = file_get_contents("C://Windows/System32/drivers/etc/hosts") . "\n" . "$ip       $domen";
                file_put_contents("C://Windows/System32/drivers/etc/hosts", $file);
                echo "domen muvofaqiyatli qo'shildi endi xampp dasturini qayta ishga tushuring";
            } else {
                echo "kechirasiz sizda kerakli fayillar topilmadi qayta urinish befoyda";
            }
        } else {
            echo "project topilmadi";
            echo $project;
        }
    } else {
        echo "fayil topilmadi" . "<br>";
        echo $folder;
    }
} else {
    header("location: index.php");
}

<?php
require_once "config.php";
include "index.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
        
    </head>
    <body>
    <style>
            .image-c {
                align-items: center;
                justify-content: center;
                text-align: center;
                height: 100vh;
               
            }
            
            .ok {
                font-size: 2rem;
                margin: 10px;
              
                
            }
            
            img {
                width: 300px;
                height: 200px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="ok" id="solok"><i class="fas fa-arrow-circle-left"></i></div>
                </div>
                <div class="col-md-8">
                    <div class="image-c">
                        <img id="image" src="https://www.losev.org.tr/images/image/Galleries/2018/karisik/yasama_el_ver_1.jpg">
                        <p id="yazi">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="ok" id="sagok"><i class="fas fa-arrow-circle-right"></i></div>
                </div>
            </div>
        </div>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js"></script>
        <script>
            var yazilar = [
                "  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
                " Tempor commodo ullamcorper a lacus. Elit scelerisque mauris pellentesque pulvinar pellentesque. Et molestie ac feugiat sed lectus vestibulum mattis ullamcorper velit. At tempor commodo ullamcorper a lacus vestibulum sed arcu. Maecenas sed enim ut sem viverra aliquet eget sit. Ac tincidunt vitae semper quis lectus nulla. Fringilla urna porttitor rhoncus dolor purus. Dignissim cras tincidunt lobortis feugiat vivamus. Commodo viverra maecenas accumsan lacus. Risus nec feugiat in fermentum posuere urna. Vitae turpis massa sed elementum tempus egestas. Mattis nunc sed blandit libero volutpat. Aliquet lectus proin nibh nisl condimentum id venenatis. Convallis tellus id interdum velit laoreet id donec ultrices.",
                "  Duis ultricies lacus sed turpis tincidunt id aliquet. Auctor neque vitae tempus quam pellentesque nec nam aliquam. Dictum varius duis at consectetur lorem donec massa. Vitae congue mauris rhoncus aenean vel elit scelerisque mauris. Nulla facilisi morbi tempus iaculis urna id. Nunc congue nisi vitae suscipit tellus mauris a diam maecenas. Sed risus pretium quam vulputate. Lacus laoreet non curabitur gravida arcu ac tortor. Velit egestas dui id ornare arcu. Aliquam etiam erat velit scelerisque. "
            ];

            var resimler = [
                "https://www.losev.org.tr/images/image/Galleries/2018/karisik/yasama_el_ver_1.jpg",
                "https://minikelleranaokulu.meb.k12.tr/meb_iys_dosyalar/21/15/757758/resimler/2020_11/k_05115838_IMG-20201104-WA0014.jpg",
                "https://www.tev.org.tr/uploads/bagis/vasiyet-hibe/bagisci-etkinlik/89d5b3fb-16d6-412e-87d3-b49ad243669b.jpg"
            ];

            var sayi = 0;
            var resimler1 = document.getElementById("image");
            var yazilar1 = document.getElementById("yazi");

            function guncelle() {
                resimler1.src = resimler[sayi];
                yazilar1.innerText = yazilar[sayi];
            }

            function sonrakinegit() {
                sayi++;
                if (sayi == resimler.length) {
                    sayi = 0;
                }
                guncelle();
            }

            function oncekinegit() {
                sayi--;
                if (sayi < 0) {
                    sayi = resimler.length - 1;
                }
                guncelle();
            }

            document.getElementById("solok").addEventListener("click", function () {
                oncekinegit();
            });

            document.getElementById("sagok").addEventListener("click", function () {
                sonrakinegit();
            });
        </script>
    </body>
</html>

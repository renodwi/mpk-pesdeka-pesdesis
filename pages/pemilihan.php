<section>
    <div id="candidates" class="flex gap-2 justify-center mt-10 mb-5">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2">
            <div data-candidate="1" class="candidate bg-white  p-8 rounded-lg shadow-xl max-w-sm w-full cursor-pointer transform translate-y-5 opacity-0 animate-fade-in-up delay-150">
                <h1 class="text-5xl font-black mb-3 text-center">1</h1>
                <h2 class="text-2xl font-semibold mb-6 text-center"><?php if($_SESSION['type'] == "pesdesis") require("./assets/NamaKandidat/osis_candidate_1.php"); else require("./assets/NamaKandidat/mpk_candidate_1.php");?></h2>
                <div class="flex justify-center">
                    <img src="./assets/images/<?php if($_SESSION['type'] == "pesdesis") echo "osis_candidate_1.png"; else echo "mpk_candidate_1.png";?>" alt="Calon 1" class="w-32 h-32 object-cover mb-4">
                </div>
                <div class="mb-3">
                    <h1 class="font-semibold">Visi:</h1>
                    <p class="text-sm"><?php if($_SESSION['type'] == "pesdesis") require("./assets/Visi/osis_candidate_1.php"); else require("./assets/Visi/mpk_candidate_1.php");?></p>
                </div>
                <div class="mb-3">
                    <h1 class="font-semibold">Misi:</h1>
                    <p class="text-sm"><?php if($_SESSION['type'] == "pesdesis") require("./assets/Misi/osis_candidate_1.php"); else require("./assets/Misi/mpk_candidate_1.php");?></p>
                </div>
            </div>
            <div data-candidate="2" class="candidate bg-white  p-8 rounded-lg shadow-xl max-w-sm w-full cursor-pointer transform translate-y-10 opacity-0 animate-fade-in-up delay-300">
                <h1 class="text-5xl font-black mb-3 text-center">2</h1>
                <h2 class="text-2xl font-semibold mb-6 text-center"><?php if($_SESSION['type'] == "pesdesis") require("./assets/NamaKandidat/osis_candidate_2.php"); else require("./assets/NamaKandidat/mpk_candidate_2.php");?></h2>
                <div class="flex justify-center">
                <img src="./assets/images/<?php if($_SESSION['type'] == "pesdesis") echo "osis_candidate_2.png"; else echo "mpk_candidate_2.png";?>" alt="Calon 1" class="w-32 h-32 object-cover mb-4">
                </div>
                <div class="mb-3">
                    <h1 class="font-semibold">Visi:</h1>
                    <p class="text-sm"><?php if($_SESSION['type'] == "pesdesis") require("./assets/Visi/osis_candidate_2.php"); else require("./assets/Visi/mpk_candidate_2.php");?></p>
                </div>
                <div class="mb-3">
                    <h1 class="font-semibold">Misi:</h1>
                    <p class="text-sm"><?php if($_SESSION['type'] == "pesdesis") require("./assets/Misi/osis_candidate_2.php"); else require("./assets/Misi/mpk_candidate_2.php");?></p>
                </div>
            </div>
            <div data-candidate="3" class="candidate bg-white  p-8 rounded-lg shadow-xl max-w-sm w-full cursor-pointer transform translate-y-15 opacity-0 animate-fade-in-up delay-600">
                <h1 class="text-5xl font-black mb-3 text-center">3</h1>
                <h2 class="text-2xl font-semibold mb-6 text-center"><?php if($_SESSION['type'] == "pesdesis") require("./assets/NamaKandidat/osis_candidate_3.php"); else require("./assets/NamaKandidat/mpk_candidate_3.php");?></h2>
                <div class="flex justify-center">
                <img src="./assets/images/<?php if($_SESSION['type'] == "pesdesis") echo "osis_candidate_3.png"; else echo "mpk_candidate_3.png";?>" alt="Calon 1" class="w-32 h-32 object-cover mb-4">
                </div>
                <div class="mb-3">
                    <h1 class="font-semibold">Visi:</h1>
                    <p class="text-sm"><?php if($_SESSION['type'] == "pesdesis") require("./assets/Visi/osis_candidate_3.php"); else require("./assets/Visi/mpk_candidate_3.php");?></p>
                </div>
                <div class="mb-3">
                    <h1 class="font-semibold">Misi:</h1>
                    <p class="text-sm"><?php if($_SESSION['type'] == "pesdesis") require("./assets/Misi/osis_candidate_3.php"); else require("./assets/Misi/mpk_candidate_3.php");?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-end m-10 gap-5">
        <button id="konfirmasi" class="bg-blue-500 p-3 text-white">Konfirmasi</button>
        <a href="./pages/logout.php"><button class="bg-red-500 p-3 text-white">Logout</button></a>
    </div>
    <script>
        let terpilih = 0;
        document.getElementById("candidates").addEventListener("click", function(e) {
            const target = e.target.closest(".candidate");
            if (target) {
                document.querySelectorAll(".candidate").forEach(function(el) {
                    el.classList.remove("bg-blue-500");
                    el.classList.remove("text-white");
                    el.classList.add("bg-white");
                    el.classList.add("text-black");
                });
                target.classList.add("bg-blue-500");
                target.classList.add("text-white");
                target.classList.remove("bg-white");
                target.classList.remove("text-black");
                
                const candidateId = target.getAttribute("data-candidate");
                terpilih = candidateId;
            }
        });

        document.getElementById("konfirmasi").addEventListener("click", function() {
            if(terpilih == 0)
            {
                Swal.fire({
                    title: 'Gagal!',
                    icon: 'error',
                    text: 'Pilih kandidat terlebih dahulu!'
                });
            }
            else if(terpilih >= 1 || terpilih <= 3)
            {
                Swal.fire({
                    title: 'Konfirmasi',
                    text: "Apakah anda yakin akan memilih kandidat ini?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        var xhr = new XMLHttpRequest();
                        xhr.open("POST", "./backend/pemilihan.php", true); 
                        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                        xhr.onreadystatechange = function() {
                            if (xhr.readyState === 4 && xhr.status === 200) {
                                if(xhr.responseText == "Berhasil")
                                {
                                    Swal.fire({
                                        title: 'Berhasil',
                                        icon: 'success',
                                        text: 'Pemilihan kandidat berhasil, terimakasih telah ikut serta berpartisipasi dalam pemiihan!'
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            window.location.href = "./pages/logout.php";
                                        }
                                    });
                                }
                                else 
                                {
                                    Swal.fire({
                                        title: 'Error :(',
                                        icon: 'error',
                                        text: xhr.responseText
                                    });
                                }
                            }
                        };
                        var format = "type="+<?php if($_SESSION['type'] == "pesdesis") echo "'pesdesis'"; else echo "'pesdeka'";?>+"&candidate="+terpilih+"";
                        xhr.send(format);
                    }
                });
            }
            else 
            {
                Swal.fire({
                    title: 'Gagal!',
                    icon: 'error',
                    text: 'Pilih kandidat terlebih dahulu!'
                });
            }
        });
    </script>
</section>

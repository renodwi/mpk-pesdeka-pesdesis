<body class="bg-slate-900">
    <div class="mx-20 my-10">
        <div class="mb-10">
            <h1 class="text-yellow-500 font-black text-5xl">
                Admin PESDESIS PESDEKA
            </h1>
            <h1 class="text-yellow-500 font-thin text-2xl">
                MPK SMA Negeri 1 Demak 2024 / 2025
            </h1>
            <h1 class="mt-5 text-yellow-500 font-thin text-base italic">
                Admin dashboard tidak didesain untuk pengguna mobile, disarankan untuk membukanya menggunakan laptop / desktop.
            </h1>
        </div>

        <div class="mb-10 bg-slate-800 p-5 rounded shadow">
            <h1 class="mb-3 text-yellow-500 font-semibold text-2xl">
                General Data 
            </h1>
            <div class="mb-3 grid grid-flow-row grid-cols-2 gap-2 text-yellow-500">
                <div class="bg-slate-700 p-3 rounded">
                    <?php 
                        $sql = "SELECT COUNT(*) as total FROM akun";
                        $result = $conn->query($sql);
                        $row = $result->fetch_assoc();
                        $general_total_akun = $row['total'];
                    ?>
                    <h1 class="font-bold text-xl">
                        Total Akun
                    </h1>
                    <h1 class="font-black text-6xl text-center">
                        <?php echo $general_total_akun;?>
                    </h1>
                </div>
                <div class="bg-slate-700 p-3 rounded">
                    <?php 
                        $sql = "SELECT COUNT(*) as total FROM akun WHERE `perwakilan_kelas` = '1'";
                        $result = $conn->query($sql);
                        $row = $result->fetch_assoc();
                        $general_total_akun_perwakilan_kelas = $row['total'];
                    ?>
                    <h1 class="font-bold text-xl">
                        Total Akun Perwakilan Kelas
                    </h1>
                    <h1 class="font-black text-6xl text-center">
                        <?php echo $general_total_akun_perwakilan_kelas;?>
                    </h1>
                </div>
            </div>
        </div>
        
        <div class="mb-10 bg-slate-800 p-5 rounded shadow">
            <h1 class="mb-3 text-yellow-500 font-semibold text-2xl">
                PESDESIS (Perhitungan berdasarkan jumlah akun pada General Data)
            </h1>
            <div class="mb-3 grid grid-flow-row grid-cols-2 gap-2 text-yellow-500">
                <?php 
                    $sql = "SELECT COUNT(*) as total FROM akun WHERE `golongan_osis` = '0'";
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
                    $pesdesis_total_akun_belum_memilih = $row['total'];
                ?>
                <div class="bg-slate-700 p-3 rounded">
                    <h1 class="font-bold text-xl">
                        Jumlah Akun Belum Memilih
                    </h1>
                    <h1 class="font-black text-6xl text-center">
                        <?php echo $pesdesis_total_akun_belum_memilih;?>
                    </h1>
                </div>
                <?php 
                    $sql = "SELECT COUNT(*) as total FROM akun WHERE `golongan_osis` > '0'";
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
                    $pesdesis_total_akun_sudah_memilih = $row['total'];
                ?>
                <div class="bg-slate-700 p-3 rounded">
                    <h1 class="font-bold text-xl">
                        Jumlah Akun Telah Memilih
                    </h1>
                    <h1 class="font-black text-6xl text-center">
                        <?php echo $pesdesis_total_akun_sudah_memilih;?>
                    </h1>
                </div>
            </div>
            <div class="mb-3 grid grid-flow-row grid-cols-3 gap-2 text-yellow-500">
                <?php 
                    $sql = "SELECT COUNT(*) as total FROM akun WHERE `golongan_osis` = '1'";
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
                    $pesdesis_total_akun_memilih_kandidat_1 = $row['total'];
                ?>
                <div class="bg-slate-700 p-3 rounded">
                    <h1 class="font-bold text-xl">
                        Akun Memilih Kandidat 1
                    </h1>
                    <h1 class="font-black text-6xl text-center">
                        <?php echo $pesdesis_total_akun_memilih_kandidat_1;?>
                    </h1>
                </div>
                <?php 
                    $sql = "SELECT COUNT(*) as total FROM akun WHERE `golongan_osis` = '2'";
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
                    $pesdesis_total_akun_memilih_kandidat_2 = $row['total'];
                ?>
                <div class="bg-slate-700 p-3 rounded">
                    <h1 class="font-bold text-xl">
                        Akun Memilih Kandidat 2
                    </h1>
                    <h1 class="font-black text-6xl text-center">
                        <?php echo $pesdesis_total_akun_memilih_kandidat_2;?>
                    </h1>
                </div>
                <?php 
                    $sql = "SELECT COUNT(*) as total FROM akun WHERE `golongan_osis` = '3'";
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
                    $pesdesis_total_akun_memilih_kandidat_3 = $row['total'];
                ?>
                <div class="bg-slate-700 p-3 rounded">
                    <h1 class="font-bold text-xl">
                        Akun Memilih Kandidat 3
                    </h1>
                    <h1 class="font-black text-6xl text-center">
                        <?php echo $pesdesis_total_akun_memilih_kandidat_3;?>
                    </h1>
                </div>
            </div>
            <div class="p-4 bg-slate-700 shadow-md rounded-lg">
                <!-- Bar Chart -->
                <div class="space-y-2">
                    <?php
                        $pesdesis_total_akun_memilih_kandidat_1_percent = ($pesdesis_total_akun_memilih_kandidat_1 / $general_total_akun) * 100;
                        $pesdesis_total_akun_memilih_kandidat_2_percent = ($pesdesis_total_akun_memilih_kandidat_2 / $general_total_akun) * 100;
                        $pesdesis_total_akun_memilih_kandidat_3_percent = ($pesdesis_total_akun_memilih_kandidat_3 / $general_total_akun) * 100;
                    ?>
                    <div class="flex items-center">
                        <span class="w-1/4 text-red-500">Akun Memilih Kandidat 1</span>
                        <div class="w-3/4 bg-gray-200 rounded-full">
                            <div class="bg-red-500 text-xs font-medium text-white text-center p-1 leading-none rounded-full" style="width: <?php echo $pesdesis_total_akun_memilih_kandidat_1_percent;?>%"><?php echo $pesdesis_total_akun_memilih_kandidat_1_percent;?>%</div>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <span class="w-1/4 text-blue-500">Akun Memilih Kandidat 2</span>
                        <div class="w-3/4 bg-gray-200 rounded-full">
                            <div class="bg-blue-500 text-xs font-medium text-white text-center p-1 leading-none rounded-full" style="width: <?php echo $pesdesis_total_akun_memilih_kandidat_2_percent;?>%"><?php echo $pesdesis_total_akun_memilih_kandidat_2_percent;?>%</div>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <span class="w-1/4 text-green-500">Akun Memilih Kandidat 3</span>
                        <div class="w-3/4 bg-gray-200 rounded-full">
                            <div class="bg-green-500 text-xs font-medium text-white text-center p-1 leading-none rounded-full" style="width: <?php echo $pesdesis_total_akun_memilih_kandidat_3_percent;?>%"><?php echo $pesdesis_total_akun_memilih_kandidat_3_percent;?>%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="mb-10 bg-slate-800 p-5 rounded shadow">
            <h1 class="mb-3 text-yellow-500 font-semibold text-2xl">
                PESDEKA (Perhitungan berdasarkan jumlah akun perwakilan kelas pada General Data)
            </h1>
            <div class="mb-3 grid grid-flow-row grid-cols-2 gap-2 text-yellow-500">
                <?php 
                    $sql = "SELECT COUNT(*) as total FROM akun WHERE `golongan_mpk` = '0' AND `perwakilan_kelas` = '1'";
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
                    $pesdeka_total_akun_belum_memilih = $row['total'];
                ?>
                <div class="bg-slate-700 p-3 rounded">
                    <h1 class="font-bold text-xl">
                        Jumlah Akun Belum Memilih
                    </h1>
                    <h1 class="font-black text-6xl text-center">
                        <?php echo $pesdeka_total_akun_belum_memilih;?>
                    </h1>
                </div>
                <?php 
                    $sql = "SELECT COUNT(*) as total FROM akun WHERE `golongan_mpk` > '0' AND `perwakilan_kelas` = '1'";
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
                    $pesdeka_total_akun_telah_memilih = $row['total'];
                ?>
                <div class="bg-slate-700 p-3 rounded">
                    
                    <h1 class="font-bold text-xl">
                        Jumlah Akun Telah Memilih
                    </h1>
                    <h1 class="font-black text-6xl text-center">
                        <?php echo $pesdeka_total_akun_telah_memilih;?>
                    </h1>
                </div>
            </div>
            <div class="mb-3 grid grid-flow-row grid-cols-3 gap-2 text-yellow-500">
                <?php 
                    $sql = "SELECT COUNT(*) as total FROM akun WHERE `golongan_mpk` = '1' AND `perwakilan_kelas` = '1'";
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
                    $pesdeka_total_akun_memilih_kandidat_1 = $row['total'];
                ?>
                <div class="bg-slate-700 p-3 rounded">
                    <h1 class="font-bold text-xl">
                        Akun Memilih Kandidat 1
                    </h1>
                    <h1 class="font-black text-6xl text-center">
                        <?php echo $pesdeka_total_akun_memilih_kandidat_1;?>
                    </h1>
                </div>
                <?php 
                    $sql = "SELECT COUNT(*) as total FROM akun WHERE `golongan_mpk` = '2' AND `perwakilan_kelas` = '1'";
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
                    $pesdeka_total_akun_memilih_kandidat_2 = $row['total'];
                ?>
                <div class="bg-slate-700 p-3 rounded">
                    <h1 class="font-bold text-xl">
                        Akun Memilih Kandidat 2
                    </h1>
                    <h1 class="font-black text-6xl text-center">
                    <?php echo $pesdeka_total_akun_memilih_kandidat_2;?>
                    </h1>
                </div>
                <?php 
                    $sql = "SELECT COUNT(*) as total FROM akun WHERE `golongan_mpk` = '3' AND `perwakilan_kelas` = '1'";
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
                    $pesdeka_total_akun_memilih_kandidat_3 = $row['total'];
                ?>
                <div class="bg-slate-700 p-3 rounded">
                    <h1 class="font-bold text-xl">
                        Akun Memilih Kandidat 3
                    </h1>
                    <h1 class="font-black text-6xl text-center">
                    <?php echo $pesdeka_total_akun_memilih_kandidat_3;?>
                    </h1>
                </div>
            </div>
            <div class="p-4 bg-slate-700 shadow-md rounded-lg">
                <!-- Bar Chart -->
                <div class="space-y-2">
                    <?php
                        $pesdeka_total_akun_memilih_kandidat_1_percent = ($pesdeka_total_akun_memilih_kandidat_1 / $general_total_akun_perwakilan_kelas) * 100;
                        $pesdeka_total_akun_memilih_kandidat_2_percent = ($pesdeka_total_akun_memilih_kandidat_2 / $general_total_akun_perwakilan_kelas) * 100;
                        $pesdeka_total_akun_memilih_kandidat_3_percent = ($pesdeka_total_akun_memilih_kandidat_3 / $general_total_akun_perwakilan_kelas) * 100;
                    ?>
                    <div class="flex items-center">
                        <span class="w-1/4 text-red-500">Akun Memilih Kandidat 1</span>
                        <div class="w-3/4 bg-gray-200 rounded-full">
                            <div class="bg-red-500 text-xs font-medium text-white text-center p-1 leading-none rounded-full" style="width: <?php echo round($pesdeka_total_akun_memilih_kandidat_1_percent);?>%"><?php echo round($pesdeka_total_akun_memilih_kandidat_1_percent);?>%</div>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <span class="w-1/4 text-blue-500">Akun Memilih Kandidat 2</span>
                        <div class="w-3/4 bg-gray-200 rounded-full">
                            <div class="bg-blue-500 text-xs font-medium text-white text-center p-1 leading-none rounded-full" style="width: <?php echo round($pesdeka_total_akun_memilih_kandidat_2_percent);?>%"><?php echo round($pesdeka_total_akun_memilih_kandidat_2_percent);?>%</div>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <span class="w-1/4 text-green-500">Akun Memilih Kandidat 3</span>
                        <div class="w-3/4 bg-gray-200 rounded-full">
                            <div class="bg-green-500 text-xs font-medium text-white text-center p-1 leading-none rounded-full" style="width: <?php echo round($pesdeka_total_akun_memilih_kandidat_3_percent);?>%"><?php echo round($pesdeka_total_akun_memilih_kandidat_3_percent);?>%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-10 bg-slate-800 p-5 rounded shadow">
            <div class="p-4">
                <h1 class="font-bold text-xl text-yellow-500">
                    Akun
                </h1>
            </div>
            <table class="min-w-full bg-slate-700">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b text-yellow-500">ID</th>
                        <th class="py-2 px-4 border-b text-yellow-500">Nama</th>
                        <th class="py-2 px-4 border-b text-yellow-500">NIS / NIP</th>
                        <th class="py-2 px-4 border-b text-yellow-500">Golongan MPK</th>
                        <th class="py-2 px-4 border-b text-yellow-500">Golongan OSIS</th>
                        <th class="py-2 px-4 border-b text-yellow-500">Perwakilan Kelas</th>
                        <th class="py-2 px-4 border-b text-yellow-500">Reset Data</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    
                    $sql = "SELECT *  FROM `akun`";
                    $result = $conn->query($sql);
                    $jumlah = 0;
                    while($rows = $result->fetch_assoc())
                    {
                        $jumlah++;
                        echo '
                        <tr class="odd:bg-slate-700 even:bg-slate-800 hover:bg-green-800">
                            <td class="py-2 px-4 border-b text-yellow-500">'.$rows['id'].'</td>
                            <td class="py-2 px-4 border-b text-yellow-500">'.$rows['nama'].'</td>
                            <td class="py-2 px-4 border-b text-yellow-500">'.$rows['nisataunip'].'</td>
                            <td class="py-2 px-4 border-b text-yellow-500">'.$rows['golongan_mpk'].'</td>
                            <td class="py-2 px-4 border-b text-yellow-500">'.$rows['golongan_osis'].'</td>
                            ';
                            if($rows['perwakilan_kelas'] == 1) echo "<td class='py-2 px-4 border-b'><button id='perwakilankelasBtn_".$rows['id']."'class='bg-blue-500 p-2 text-base text-white'>Perwakilan Kelas</button></td>"; else echo "<td class='py-2 px-4 border-b'><button id='perwakilankelasBtn_".$rows['id']."'class='bg-red-500 p-2 text-base text-white'>Bukan Perwakilan Kelas</button></td>";
                            echo '';
                            echo "<td class='py-2 px-4 border-b'><button id='resetBtn_".$rows['id']."'class='bg-blue-500 p-2 text-base text-white'>Reset Data</button></td>";
                            echo ' 
                        </tr>
                        ';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script>
        var perwakilankelasBtn = document.querySelectorAll('[id^="perwakilankelasBtn_"]');

        perwakilankelasBtn.forEach(function(perwakilankelasBtnResponse) {
            perwakilankelasBtnResponse.addEventListener("click", function() {
                var perwakilankelasBtnID = perwakilankelasBtnResponse.id.split('_')[1];

                if(perwakilankelasBtnResponse.classList.contains("bg-red-500"))
                {
                    perwakilankelasBtnResponse.classList.remove("bg-red-500");

                    perwakilankelasBtnResponse.classList.add("bg-blue-500");

                    perwakilankelasBtnResponse.innerText = "Perwakilan Kelas";

                    var xhr = new XMLHttpRequest();
                    xhr.open("POST", "./update_perwakilan_kelas.php", true); 
                    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                    xhr.send("id_siswa="+perwakilankelasBtnID+"&status=1");
                }
                else
                {
                    perwakilankelasBtnResponse.classList.add("bg-red-500");

                    perwakilankelasBtnResponse.classList.remove("bg-blue-500");

                    perwakilankelasBtnResponse.innerText = "Bukan Perwakilan Kelas";
                    
                    var xhr = new XMLHttpRequest();
                    xhr.open("POST", "./update_perwakilan_kelas.php", true); 
                    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                    xhr.send("id_siswa="+perwakilankelasBtnID+"&status=0");
                }
            });
        });

        var resetBtn = document.querySelectorAll('[id^="resetBtn_"]');
        resetBtn.forEach(function(resetBtnResponse) {
            resetBtnResponse.addEventListener("click", function() {
                var resetBtnID = resetBtnResponse.id.split('_')[1];
                Swal.fire({
                    title: 'Konfirmasi',
                    text: "Apakah anda yakin akan mereset data akun ini?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        var xhr = new XMLHttpRequest();
                        xhr.open("POST", "./reset.php", true); 
                        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                        xhr.onreadystatechange = function() {
                            if (xhr.readyState === 4 && xhr.status === 200) {
                                if(xhr.responseText == "Berhasil")
                                {
                                    Swal.fire({
                                        title: 'Berhasil',
                                        icon: 'success',
                                        text: 'Akun berhasil direset'
                                    });
                                    setTimeout(() => {
                                                window.location.href = "./index.php#resetBtn_"+resetBtnID;
                                            }, 1500);
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
                        var format = "id="+resetBtnID;
                        console.log(format);
                        xhr.send(format);
                    }
                });
            });
        });
    </script>
</body>
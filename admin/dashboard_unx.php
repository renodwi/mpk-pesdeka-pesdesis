<body class="bg-gray-100">
    <div class="flex min-h-screen">
        <!-- Main Content -->
        <div class="flex-grow bg-white p-8">
            <div class="text-3xl font-bold mb-8">PESDESIS PESDEKA Admin</div>
            <p class="font-black text-4xl text-red-500 mb-8">Admin dashboard tidak didesain untuk pengguna mobile, disarankan untuk membukanya menggunakan laptop / desktop</p>
            
            <!-- Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
                <div class="bg-blue-100 p-4 rounded-lg shadow">
                    <div class="text-lg font-bold">Total Akun (siswa & guru)</div>
                    <div class="text-2xl">
                        <?php 
                            $sql = "SELECT COUNT(*) as total FROM akun";  // Ganti 'nama_tabel' dengan nama tabel Anda

                            $result = $conn->query($sql);
                            
                            if ($result->num_rows > 0) {
                                // Mengambil hasil query
                                $row = $result->fetch_assoc();
                                $total_akun = $row['total'];
                                echo $row['total'];
                            } else {
                                echo "Tidak ada data dalam tabel.";
                            }
                        ?>
                    </div>
                </div>
                <div class="bg-blue-100 p-4 rounded-lg shadow">
                    <div class="text-lg font-bold">Total Akun Perwakilan Kelas</div>
                    <div class="text-2xl">
                        <?php 
                            $sql = "SELECT COUNT(*) as total FROM akun WHERE perwakilan_kelas = '1'";

                            $result = $conn->query($sql);
                            
                            if ($result->num_rows > 0) {
                                // Mengambil hasil query
                                $row = $result->fetch_assoc();
                                echo $row['total'];
                            } else {
                                echo "Tidak ada data dalam tabel.";
                            }
                        ?>
                    </div>
                </div>
                <div class="bg-blue-100 p-4 rounded-lg shadow">
                    <div class="text-lg font-bold">Total Akun Yang Telah Memilih Kandidat MPK</div>
                    <div class="text-2xl">
                        <?php 
                            $sql = "SELECT COUNT(*) as total FROM akun WHERE golongan_mpk > '0'";

                            $result = $conn->query($sql);
                            
                            if ($result->num_rows > 0) {
                                // Mengambil hasil query
                                $row = $result->fetch_assoc();
                                echo $row['total'] . "<br/>";

                                echo number_format((1382 / $total_akun) * 100, 2) . "%";
                            } else {
                                echo "Tidak ada data dalam tabel.";
                            }
                        ?>
                    </div>
                </div>
                <div class="bg-blue-100 p-4 rounded-lg shadow">
                    <div class="text-lg font-bold">Total Akun Yang Telah Memilih Kandidat OSIS</div>
                    <div class="text-2xl">
                        <?php 
                            $sql = "SELECT COUNT(*) as total FROM akun WHERE golongan_osis > '0'";

                            $result = $conn->query($sql);
                            
                            if ($result->num_rows > 0) {
                                // Mengambil hasil query
                                $row = $result->fetch_assoc();
                                echo $row['total'];
                            } else {
                                echo "Tidak ada data dalam tabel.";
                            }
                        ?>
                    </div>
                </div>
                <div class="bg-blue-100 p-4 rounded-lg shadow">
                    <div class="text-lg font-bold">Total Akun Yang BELUM Memilih Kandidat MPK</div>
                    <div class="text-2xl">
                        <?php 
                            $sql = "SELECT COUNT(*) as total FROM akun WHERE golongan_mpk = '0'";

                            $result = $conn->query($sql);
                            
                            if ($result->num_rows > 0) {
                                // Mengambil hasil query
                                $row = $result->fetch_assoc();
                                echo $row['total'];
                            } else {
                                echo "Tidak ada data dalam tabel.";
                            }
                        ?>
                    </div>
                </div>
                <div class="bg-blue-100 p-4 rounded-lg shadow">
                    <div class="text-lg font-bold">Total Akun Yang BELUM Memilih Kandidat OSIS</div>
                    <div class="text-2xl">
                        <?php 
                            $sql = "SELECT COUNT(*) as total FROM akun WHERE golongan_osis = '0'";

                            $result = $conn->query($sql);
                            
                            if ($result->num_rows > 0) {
                                // Mengambil hasil query
                                $row = $result->fetch_assoc();
                                echo $row['total'];
                            } else {
                                echo "Tidak ada data dalam tabel.";
                            }
                        ?>
                    </div>
                </div>
                <div class="bg-blue-100 p-4 rounded-lg shadow">
                    <div class="text-lg font-bold">Total Akun Yang Memilih Kandidat MPK 1</div>
                    <div class="text-2xl">
                        <?php 
                            $sql = "SELECT COUNT(*) as total FROM akun WHERE golongan_mpk = '1'";

                            $result = $conn->query($sql);
                            
                            if ($result->num_rows > 0) {
                                // Mengambil hasil query
                                $row = $result->fetch_assoc();
                                echo $row['total'];
                            } else {
                                echo "Tidak ada data dalam tabel.";
                            }
                        ?>
                    </div>
                </div>
                <div class="bg-blue-100 p-4 rounded-lg shadow">
                    <div class="text-lg font-bold">Total Akun Yang Memilih Kandidat MPK 2</div>
                    <div class="text-2xl">
                        <?php 
                            $sql = "SELECT COUNT(*) as total FROM akun WHERE golongan_mpk = '2'";

                            $result = $conn->query($sql);
                            
                            if ($result->num_rows > 0) {
                                // Mengambil hasil query
                                $row = $result->fetch_assoc();
                                echo $row['total'];
                            } else {
                                echo "Tidak ada data dalam tabel.";
                            }
                        ?>
                    </div>
                </div>
                <div class="bg-blue-100 p-4 rounded-lg shadow">
                    <div class="text-lg font-bold">Total Akun Yang Memilih Kandidat MPK 3</div>
                    <div class="text-2xl">
                        <?php 
                            $sql = "SELECT COUNT(*) as total FROM akun WHERE golongan_mpk = '3'";

                            $result = $conn->query($sql);
                            
                            if ($result->num_rows > 0) {
                                // Mengambil hasil query
                                $row = $result->fetch_assoc();
                                echo $row['total'];
                            } else {
                                echo "Tidak ada data dalam tabel.";
                            }
                        ?>
                    </div>
                </div>
                <div class="bg-blue-100 p-4 rounded-lg shadow">
                    <div class="text-lg font-bold">Total Akun Yang Memilih Kandidat OSIS 1</div>
                    <div class="text-2xl">
                        <?php 
                            $sql = "SELECT COUNT(*) as total FROM akun WHERE golongan_osis = '1'";

                            $result = $conn->query($sql);
                            
                            if ($result->num_rows > 0) {
                                // Mengambil hasil query
                                $row = $result->fetch_assoc();
                                echo $row['total'];
                            } else {
                                echo "Tidak ada data dalam tabel.";
                            }
                        ?>
                    </div>
                </div>
                <div class="bg-blue-100 p-4 rounded-lg shadow">
                    <div class="text-lg font-bold">Total Akun Yang Memilih Kandidat OSIS 2</div>
                    <div class="text-2xl">
                        <?php 
                            $sql = "SELECT COUNT(*) as total FROM akun WHERE golongan_osis = '2'";

                            $result = $conn->query($sql);
                            
                            if ($result->num_rows > 0) {
                                // Mengambil hasil query
                                $row = $result->fetch_assoc();
                                echo $row['total'];
                            } else {
                                echo "Tidak ada data dalam tabel.";
                            }
                        ?>
                    </div>
                </div>
                <div class="bg-blue-100 p-4 rounded-lg shadow">
                    <div class="text-lg font-bold">Total Akun Yang Memilih Kandidat OSIS 3</div>
                    <div class="text-2xl">
                        <?php 
                            $sql = "SELECT COUNT(*) as total FROM akun WHERE golongan_osis = '3'";

                            $result = $conn->query($sql);
                            
                            if ($result->num_rows > 0) {
                                // Mengambil hasil query
                                $row = $result->fetch_assoc();
                                echo $row['total'];
                            } else {
                                echo "Tidak ada data dalam tabel.";
                            }
                        ?>
                    </div>
                </div>
                <div class="bg-blue-100 p-4 rounded-lg shadow">
                    <div class="text-lg font-bold">Total Akun Perwakilan Kelas Yang Memilih Kandidat MPK 1</div>
                    <div class="text-2xl">
                        <?php 
                            $sql = "SELECT COUNT(*) as total FROM akun WHERE perwakilan_kelas = '1' AND golongan_mpk = '1'";

                            $result = $conn->query($sql);
                            
                            if ($result->num_rows > 0) {
                                // Mengambil hasil query
                                $row = $result->fetch_assoc();
                                echo $row['total'];
                            } else {
                                echo "Tidak ada data dalam tabel.";
                            }
                        ?>
                    </div>
                </div>
                <div class="bg-blue-100 p-4 rounded-lg shadow">
                    <div class="text-lg font-bold">Total Akun Perwakilan Kelas Yang Memilih Kandidat MPK 2</div>
                    <div class="text-2xl">
                        <?php 
                            $sql = "SELECT COUNT(*) as total FROM akun WHERE perwakilan_kelas = '1' AND golongan_mpk = '2'";

                            $result = $conn->query($sql);
                            
                            if ($result->num_rows > 0) {
                                // Mengambil hasil query
                                $row = $result->fetch_assoc();
                                echo $row['total'];
                            } else {
                                echo "Tidak ada data dalam tabel.";
                            }
                        ?>
                    </div>
                </div>
                
                <div class="bg-blue-100 p-4 rounded-lg shadow">
                    <div class="text-lg font-bold">Total Akun Perwakilan Kelas Yang Memilih Kandidat MPK 3</div>
                    <div class="text-2xl">
                        <?php 
                            $sql = "SELECT COUNT(*) as total FROM akun WHERE perwakilan_kelas = '1' AND golongan_mpk = '3'";

                            $result = $conn->query($sql);
                            
                            if ($result->num_rows > 0) {
                                // Mengambil hasil query
                                $row = $result->fetch_assoc();
                                echo $row['total'];
                            } else {
                                echo "Tidak ada data dalam tabel.";
                            }
                        ?>
                    </div>
                </div>
            </div>

            <!-- Table -->
            <div class="bg-white rounded-lg shadow p-4">
                <div class="text-xl font-bold mb-4">Recent Activities</div>
                <table class="min-w-full bg-white">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border-b">ID</th>
                            <th class="py-2 px-4 border-b">Nama</th>
                            <th class="py-2 px-4 border-b">NIS / NIP</th>
                            <th class="py-2 px-4 border-b">Golongan MPK</th>
                            <th class="py-2 px-4 border-b">Golongan OSIS</th>
                            <th class="py-2 px-4 border-b">Perwakilan Kelas</th>
                            <th class="py-2 px-4 border-b">Reset Data</th>
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
                            <tr class="odd:bg-white even:bg-gray-200 hover:bg-blue-300">
                                <td class="py-2 px-4 border-b">'.$rows['id'].'</td>
                                <td class="py-2 px-4 border-b">'.$rows['nama'].'</td>
                                <td class="py-2 px-4 border-b">'.$rows['nisataunip'].'</td>
                                <td class="py-2 px-4 border-b">'.$rows['golongan_mpk'].'</td>
                                <td class="py-2 px-4 border-b">'.$rows['golongan_osis'].'</td>
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
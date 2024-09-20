<section>
    <div class="flex justify-center mt-20 mb-5">
        <div class="bg-white p-8 rounded-lg  shadow-xl max-w-sm w-full flex flex-col justify-center transform translate-y-10 opacity-0 animate-fade-in-up">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center"><span class="uppercase"><?php echo $_SESSION['type'];?></span> | Login</h2>
            <div class="flex justify-center transform scale-90 opacity-0 animate-fade-in">
                <?php 
                    if($_SESSION['type'] == "pesdesis") echo '<img class="w-32 h-32" src="./assets/images/osis.png">';
                    else if($_SESSION['type'] == "pesdeka") echo '<img class="w-32 h-32" src="./assets/images/mpk.png">';
                    else echo '<img class="w-32 h-32" src="./assets/images/mpk.png"><img class="w-14 h-14" src="./assets/images/osis.png">';
                ?>
            </div>
            <form id="loginForm" class="mt-5 transform translate-y-5 opacity-0 animate-fade-in-up delay-150">
                <div class="mb-4">
                    <label for="username" class="block text-gray-700 text-sm font-bold mb-2">Username</label>
                    <input type="text" id="username" name="username" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" placeholder="Username" require>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                    <div class="relative">
                        <input type="password" id="password" name="password" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" placeholder="Enter your password" require>
                        <button type="button" id="togglePasswordbtn" onclick="togglePassword()" class="absolute inset-y-0 right-0 px-3 py-2 bg-blue-500 text-white rounded-md focus:outline-none">Show</button>
                    </div>
                </div>
                <div class="mb-4">
                    <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Login</button>
                </div>
            </form>
        </div>
    </div>
    <div class="flex justify-end">
        <a href="./pages/change_type.php"><button class="bg-blue-500 p-3 text-white m-10">Change Type</button></a>
    </div>
    <script>
        function togglePassword() {
            const passwordInput = document.getElementById("password");
            const toggleButton = document.getElementById("togglePasswordbtn");
            
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                toggleButton.textContent = "Hide";
            } else {
                passwordInput.type = "password";
                toggleButton.textContent = "Show";
            }
        }

        const loginForm = document.getElementById('loginForm');
        loginForm.addEventListener('submit', function(event) {
            event.preventDefault();
            
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;
            
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "./backend/login.php", true); 
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    if(xhr.responseText == "Telah Berpartisipasi")
                    {
                        Swal.fire({
                            title: 'Error :(',
                            icon: 'error',
                            text: 'Akun ini telah mengikuti pemilihan sebelumnya, silahkan hubungi admin jika terdapat kesalahan dalam pemilihan.'
                        });
                    }
                    else if(xhr.responseText == "Bukan perwakilan kelas")
                    {
                        Swal.fire({
                            title: 'Error :(',
                            icon: 'error',
                            text: 'Akun ini bukan perwakilan kelas. Hanya dapat akun dengan jenis perwakilan kelas yang dapat memilih kandidat calon ketua umum MPK.'
                        });
                    }
                    else if(xhr.responseText == "Berhasil")
                    {
                        window.location.href = "./index.php";
                    }
                    else 
                    {
                        Swal.fire({
                            title: 'Gagal!',
                            icon: 'error',
                            text: 'Username atau password salah.'
                        });
                    }
                }
            };
            xhr.send("username="+username+"&password="+password+"");
        });
    </script>
</section>
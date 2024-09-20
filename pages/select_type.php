<section>
    <div class="flex justify-center mt-20 mb-20">
        <div class="bg-white p-8 rounded-lg  shadow-xl max-w-sm w-full flex flex-col justify-center transform translate-y-10 opacity-0 animate-fade-in-up">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Pilih Halaman</h2>
            <div class="flex justify-center transform scale-90 opacity-0 animate-fade-in">
                <img alt="Logo MPK" src="./assets/images/mpk.png" class="mt-7 w-32 h-32">
                <img alt="Logo SMANSADE" src="./assets/images/smansade.png" class="w-32 h-32">
                <img alt="Logo Osis" src="./assets/images/osis.png" class="mt-7 w-32 h-32">
            </div>
            <div class="mt-5 ">
                <button id="select_type_pesdesis" class="p-3 bg-white hover:bg-gray-200 shadow-xl rounded-lg w-full font-semibold text-xl uppercase transform translate-y-5 opacity-0 animate-fade-in-up delay-150">Pesdesis</button>
                <button id="select_type_pesdeka" class="p-3 bg-white hover:bg-gray-200 shadow-xl rounded-lg w-full font-semibold text-xl uppercase transform translate-y-5 opacity-0 animate-fade-in-up delay-300">Pesdeka</button>
            </div>
        </div>
    </div>
    <script>
        const select_type_pesdesis = document.getElementById("select_type_pesdesis");
        const select_type_pesdeka = document.getElementById("select_type_pesdeka");

        select_type_pesdesis.addEventListener("click", function() {
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "./backend/select_type.php", true); 
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    window.location.reload();
                }
            };
            xhr.send("select_type=pesdesis");
        });

        select_type_pesdeka.addEventListener("click", function() {
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "./backend/select_type.php", true); 
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    window.location.reload();
                }
            };
            xhr.send("select_type=pesdeka");
        });
    </script>
</section>
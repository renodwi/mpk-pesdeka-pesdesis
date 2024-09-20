<section>
    <div class="py-10 px-7 md:py-10 md:px-24">
        <h1 class="font-black text-3xl">
            <?php 
                if($_SESSION['type'] == 'pesdesis') echo 'Pesta Demokrasi Ketua OSIS';
                else if($_SESSION['type'] == 'pesdeka') echo 'Pesta Demokrasi Ketua MPK';
            ?>
        </h1>
        <?php
            $sql = "SELECT * FROM `akun` WHERE `nisataunip` = '".$_SESSION['nisataunip']."'";
            $result = $conn->query($sql);   
            $rows = $result->fetch_assoc();
            echo '<h1 class="text-2xl">Hai '.$rows['nama'].'</h1>';
        ?>
    </div>
</section>
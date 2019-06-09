<div id="container-user-akses">
    <form action="<?php echo BASE_URL."proses_register.php";?>" method="POST">
        <div class="element-form">
            <label for="">Nama Lengkap</label>
            <span><input type="text" name="nama_lengkap"/></span>
        </div>
        <div class="element-form">
            <label for="">Email</label>
            <span><input type="text" name="email"/></span>
        </div>
        <div class="element-form">
            <label for="">Phone</label>
            <span><input type="text" name="phone"/></span>
        </div>
        <div class="element-form">
            <label for="">Alamat</label>
            <span><textarea name="alamat"></textarea></span>
        </div>
        <div class="element-form">
            <label for="">Password</label>
            <span><input type="password" name="password"/></span>
        </div>
        <div class="element-form">
            <label for="">Re-type Password</label>
            <span><input type="password" name="re-password"/></span>
        </div>
        <div class="element-form">
            <span><input type="submit" name="register" value="Register"/></span>
        </div>
    </form>

</div>
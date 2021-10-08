<header class="row">
    <div class="logo col-12 col-lg-6">
        <img src="assets/images/favicon.svg" alt="No Image Loaded" height="78" width="53" />
    </div>
    <div class="profile col-6 d-flex  justify-content-end align-items-center">
        <!-- <div class=" input-group searchbar">
            <span class="input-group-text searchIcon py-0 px-3"><i class="fas fa-search"></i></span>
            <input type="text" class="form-control searchField" placeholder="Search" />
        </div> -->
        <div class="imgContainer mx-3">
            <img src="assets/images/male.svg" alt="No Profile Found" width="90" height="90" id="profilePhoto">
        </div>
        <div class="d-flex col-auto">
            <p class="my-0 username"><?php echo $_SESSION["username"] ?></p>
        </div>
    </div>
</header>
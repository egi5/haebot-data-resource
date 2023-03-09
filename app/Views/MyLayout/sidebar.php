<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu div-menu">
            <div class="nav">
                <br>

                <?php if (has_permission('Dashboard') || has_permission('Data Master')) : ?>
                    <small class="my-0 ms-3 text-secondary"></small>
                <?php endif; ?>

                <?php if (has_permission('Dashboard')) : ?>
                    <a class="nav-link" href="<?= base_url() ?>/dashboard">
                        <div class="sb-nav-link-icon">
                            <i class="fa-fw fa-solid fa-gauge"></i>
                        </div>
                        Dashboard
                    </a>
                <?php endif; ?>

                <?php if (has_permission('Data Master')) : ?>
                    <a class="nav-link" href="<?= base_url() ?>/produk">
                        <div class="sb-nav-link-icon">
                            <i class="fa-fw fa-solid fa-fax"></i>
                        </div>
                        Produk
                    </a>
                <?php endif; ?>

                <?php if (has_permission('Data Master')) : ?>
                    <a class="nav-link" href="<?= base_url() ?>/jasa">
                        <div class="sb-nav-link-icon">
                            <i class="fa-fw fa-solid fa-screwdriver-wrench"></i>
                        </div>
                        Jasa
                    </a>
                <?php endif; ?>

                <?php if (has_permission('Data Master')) : ?>
                    <a class="nav-link" href="<?= base_url() ?>/gudang">
                        <div class="sb-nav-link-icon">
                            <i class="fa-fw fa-solid fa-warehouse"></i>
                        </div>
                        Gudang
                    </a>
                <?php endif; ?>

                <?php if (has_permission('Data Master')) : ?>
                    <a class="nav-link" href="<?= base_url() ?>/supplier">
                        <div class="sb-nav-link-icon">
                            <i class="fa-fw fa-solid fa-handshake-simple"></i>
                        </div>
                        Supplier
                    </a>
                <?php endif; ?>

                <?php if (has_permission('Data Master')) : ?>
                    <a class="nav-link" href="<?= base_url() ?>/customer">
                        <div class="sb-nav-link-icon">
                            <i class="fa-fw fa-solid fa-user"></i>
                        </div>
                        Customer
                    </a>
                <?php endif; ?>

                <?php if (has_permission('Data Master')) : ?>
                    <a class="nav-link" href="<?= base_url() ?>/lain">
                        <div class="sb-nav-link-icon">
                            <i class="fa-fw fa-regular fa-folder-open"></i>
                        </div>
                        Lainnya
                    </a>
                <?php endif; ?>

            </div>
        </div>
        <div class="sb-sidenav-footer py-1">
            <div class="small">Masuk sebagai :</div>
            <?= user()->name ?>
        </div>
    </nav>
</div>
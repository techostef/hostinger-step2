<div class="w-full sm:block block md:hidden lg:hidden bg-primary">
    <div class="container m-auto flex py-3 flex-wrap">

        <div class="w-full flex">
            <i id="menuMobile" class="fa fa-bars text-white ml-auto my-auto mr-6" style="font-size: 24px;"
               aria-hidden="true"></i>
        </div>
    </div>
    <div class="w-full hr mt-2"></div>
</div>
<div class="relative w-full" id="popup" style="display: none;">
    <div class="absolute rotate-45 bg-white" style="border-left:1px solid black;border-top:1px solid black;    width: 20px;
    right: 23px;
    top: -10px;
    z-index: 9;
    height: 20px;">

    </div>
    <div class="absolute bg-white m-10 mr-0"
         style="top:-40px;right: 10px;border:1px solid black;overflow-y: auto;border-radius: 10px;height: calc(100vh - 5rem)">

        <div class="ml-auto flex flex-wrap">
            <div class="p-4 text-dark w-full">
                Hosting
                <div class="w-full hr mt-2"></div>

            </div>
            <div class="p-4 text-dark w-full">
                Domain
                <div class="w-full hr mt-2"></div>

            </div>
            <div class="p-4 text-dark w-full">
                Server
                <div class="w-full hr mt-2"></div>

            </div>
            <div class="p-4 text-dark w-full">
                Website
                <div class="w-full hr mt-2"></div>

            </div>
            <div class="p-4 text-dark w-full">
                Afiliasi
                <div class="w-full hr mt-2"></div>

            </div>
            <div class="p-4 text-dark w-full">
                Promo
                <div class="w-full hr mt-2"></div>

            </div>
            <div class="p-4 text-dark w-full">
                Pembayaran
                <div class="w-full hr mt-2"></div>

            </div>
            <div class="p-4 text-dark w-full">
                Kontak
                <div class="w-full hr mt-2"></div>

            </div>
            <div class="p-4 text-dark w-full">
                Blog
            </div>
        </div>
    </div>
</div>

<script>
    var menu = document.getElementById('menuMobile')
    // menu.onclick = toggleDisplay(popup)
    menu.addEventListener("click", () => {
        toggleDisplay(popup)
        bodyScroll()
    });
    menuMobileClose.addEventListener("click", () => {
        toggleDisplay(popup)
        bodyScroll()
    });

</script>
<style>
    .logo {
        background: url("assets/images/logo.png");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        width: 100%;
        height: 100%;
    }

    .menuText {

    }
</style>


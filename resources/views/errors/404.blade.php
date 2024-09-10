<div class="error w-screen h-screen">
    <div class="bg-image"></div>
</div>

<style>

    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    .error {
    position: relative;
    width: 100vw;
    height: 100vh;
    overflow: hidden;
}

.bg-image {
    background-image: url('{{ asset('img/errors/404.png') }}');
    background-size: cover; /* Makes sure the image covers the whole screen */
    background-position: center; /* Centers the image */
    background-repeat: no-repeat; /* Prevents the image from repeating */
    width: 100%;
    height: 100%;
}

</style>

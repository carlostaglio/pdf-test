
document.getElementById("logo").addEventListener('error', ()=> {
    document.getElementById("logo").src="{{ asset('images/LogoEP.png') }}"
});
// function logoError(image) {
//     //document.getElementById("logo").src="{{ asset('images/LogoEP.png') }}"
//     image.onerror = null

//     let url = new URL("{{ asset('images/LogoEP.png') }}")
//     url.searchParams.set('reload', 'true')
//     image.src = url.toString()
// };
function signatureError() {
    //document.getElementById("signature").src="{{ asset('images/firma.png') }}"
    //document.getElementById("signature2").src="{{ asset('images/firma.png') }}"

};
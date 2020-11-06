$(function() {
    baguetteBox.run('.gallery', {
        captions: "true", // display image captions.
        buttons: 'auto', // arrows navigation
        fullScreen: true,
        noScrollbars: false,
        bodyClass: 'baguetteBox-open',
        preload: 2,
        animation: 'fadeIn', // fadeIn or slideIn
        verlayBackgroundColor: 'rgba(0,0,0,.8)'
    });
});
const form1 = document.querySelector('.feedback')

form1.addEventListener('submit', e => {
    e.preventDefault();

    const sub = form1.subscribe.value;
    if (sub == '') {
        alert("Enter a Valid Name!");
        form1.subscribe.style.border = "1px solid crimson";
        return false;
    }
    form1.submit();
})



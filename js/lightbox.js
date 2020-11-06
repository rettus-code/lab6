$(function(){

    const sr = ScrollReveal({
        duration:600,
        origin:'bottom',
        delay:200,
        distance:'80px',
        reset: true,
    });

    sr.reveal('.heroitems');
    sr.reveal('.sideleft',{
        origin: 'left',
    });
    sr.reveal('.sideright',{
        origin: 'right',
    });
    sr.reveal('.newsletter');

    baguetteBox.run('.gallery', {
        animation: 'fadeIn',
    });
});
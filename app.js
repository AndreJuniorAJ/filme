$(document).ready(function(){
    $('.slider').slick({
        slidesToShow: 3, // Quantidade de slides visíveis ao mesmo tempo
        slidesToScroll: 1, // Quantidade de slides a serem rolados
        infinite: true, // Rola infinitamente
        prevArrow: '<button type="button" class="slick-prev">Previous</button>', // Botão de navegação anterior
        nextArrow: '<button type="button" class="slick-next">Next</button>', // Botão de navegação seguinte
        responsive: [
            {
                breakpoint: 768, // Quebra em 768px
                settings: {
                    slidesToShow: 2 // Mostra 2 slides
                }
            },
            {
                breakpoint: 480, // Quebra em 480px
                settings: {
                    slidesToShow: 1 // Mostra 1 slide
                }
            }
        ]
    });
});
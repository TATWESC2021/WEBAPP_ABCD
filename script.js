if ('serviceWorker' in navigator) {
  navigator.serviceWorker.register('./sw.js')
    .then(reg => console.log('Registro de SW exitoso', reg))
    .catch(err => console.warn('Error al tratar de registrar el sw', err))
}
document.addEventListener('DOMContentLoaded',()=> {
	const elementosCarousel=document.querySelectorAll('.carousel');
	M.Carousel.init(elementosCarousel,{
		duration:150;
	});
});
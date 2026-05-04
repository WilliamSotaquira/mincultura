<style>
  /* Contenedor principal para centrar y manejar el espaciado (gap) */
  #botones-container {
    display: grid;
    justify-content: center;
    gap: 15px;
    /* 4 botones por fila en pantallas grandes */
    grid-template-columns: repeat(4, 1fr);
  }

  /* Estilos para cada botón individual: 16:9 y borde redondeado */
  .boton-custom {
    border-radius: 10px;
    overflow: hidden;
    padding: 0;
    width: 100%;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
    aspect-ratio: 16 / 6;
    /* Formato 16:9 */
  }

  /* Estilos para la imagen: recorte (object-fit: cover) */
  .boton-custom img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
  }

  /* --- MEDIA QUERY para el tamaño SM (2 botones por fila) --- */
  @media (max-width: 767.98px) {
    #botones-container {
      /* 2 columnas iguales */
      grid-template-columns: repeat(2, 1fr);
    }
  }
</style>


<div class="container my-0" id="botones-container">
  <div class="boton-custom">
    <a href="https://www.mincultura.gov.co/especiales/casa-comun/"
      target="_blank" class="enlace-boton">
      <img src="https://www.mincultura.gov.co/resources/brn_casa_comun.png" class="img-fluid" alt="Casa Común">
    </a>
  </div>
  <div class="boton-custom">
    <a href="https://www.mincultura.gov.co/especiales/colombia-escenario-del-mundo/Paginas/escenario-del-mundo.html" class="enlace-boton" target="_blank">
      <img src="https://www.mincultura.gov.co/resources/boton-colombia-escenario-mundo.png" class="img-fluid" alt="Colombia Escenario del Mundo">
    </a>
  </div>
  <div class="boton-custom">
    <a href="https://artesparalapaz.mincultura.gov.co" target="_blank" class="enlace-boton">
      <img src="/resources/boton-artes-para-la-paz.jpg" class="img-fluid" alt="Artes para la Paz">
    </a>
  </div>
  <div class="boton-custom">
    <a href="{{ route('despacho.ley-general-de-cultura.index') }}" target="_blank" class="enlace-boton">
      <img src="/resources/boton-ley-general-cultura.jpg" class="img-fluid"
        alt="Fortalecimiento Ley General de Cultura">
    </a>
  </div>


</div>

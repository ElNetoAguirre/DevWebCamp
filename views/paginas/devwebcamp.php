<main class="devwebcamp">
  <h2 class="devwebcamp__heading"><?php echo $titulo; ?></h2>
  <p class="devwebcamp__descripcion">Conoce la conferencia más importante de Latinoamérica</p>

  <div class="devwebcamp__grid">
    <div <?php aos_animacion(); ?> class="devwebcamp__image">
      <picture>
        <source srcset="build/img/sobre_devwebcamp.avif" type="image/avif">
        <source srcset="build/img/sobre_devwebcamp.webp" type="image/webp">
        <img loading="lazy" width="200" height="300" src="build/img/sobre_devwebcamp.jpg" alt="Imagen DevWebCamp">
      </picture>
    </div>

    <div class="devwebcamp__contenido">
      <p <?php aos_animacion(); ?> class="devwebcamp__texto">Vivamus commodo tortor non eros auctor mattis. Nam lobortis, eros nec dignissim consectetur, enim metus gravida felis, vitae finibus erat risus id purus. Nunc ante urna, tristique sit amet odio tristique, volutpat iaculis nunc. Etiam egestas felis sit amet risus sodales, eget iaculis lorem dignissim. Ut tempus tempor pellentesque.</p>
      
      <p <?php aos_animacion(); ?> class="devwebcamp__texto">Vivamus commodo tortor non eros auctor mattis. Nam lobortis, eros nec dignissim consectetur, enim metus gravida felis, vitae finibus erat risus id purus. Nunc ante urna, tristique sit amet odio tristique, volutpat iaculis nunc. Etiam egestas felis sit amet risus sodales, eget iaculis lorem dignissim. Ut tempus tempor pellentesque.</p>
    </div>
  </div>
</main>

  <main id="sucursales">

    <div id="tabs_menu">

      <ul class="tabs">
        <li>
          <a href="#tab1" class="tab active">Sucursales</a>
        </li>
        <li>
          <a href="#tab2" class="tab">Ingresos</a>
        </li>
        <li>
          <a href="#tab3" class="tab">Egresos</a>
        </li>
        <li>
          <a href="#tab4" class="tab">Pedidos</a>
        </li>
        <li>
          <a href="#tab5" class="tab">Utilidades</a>
        </li>
      </ul>

      <div class="tabs_content">

        <div id="tab1" class="tab_content show">
          {include file='views/templates/admon/sec_sucursales.html'}
        </div>

        <div id="tab2" class="tab_content">
          {include file='views/templates/admon/sec_ingreso.html'}
        </div>

        <div id="tab3" class="tab_content">
          {include file='views/templates/admon/sec_egreso.html'}
        </div>

        <div id="tab4" class="tab_content">
          {include file='views/templates/admon/sec_pedido.html'}
        </div>

        <div id="tab5" class="tab_content">
          {include file='views/templates/admon/sec_utilidad.html'}
        </div>

      </div> <!-- Fin tabs_content -->
    </div> <!-- cierre de pestañas --->

  </main>
  <script src="views/js/tabs.js"></script>
  <script>tabs('#tabs_menu')</script>

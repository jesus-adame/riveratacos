<div id="modal_ajustes" class="modal">
  <div class="content">
    <div class="window col-xs-11 col-md-10">

      <div class="modal-header">
        <h3><i class="fas fa-cogs"></i> Ajustes</h3>
        <a class="close">&times;</a>
      </div>

      <div class="modal-body" style="max-height: 80vh; overflow: auto">
        <div id="ajustes_tabs">

          <ul class="tabs">
            <li>
              <a href="#tab1" class="tab active">Categorias</a> </li>
            <li>
              <a href="#tab2" class="tab">Productos</a> </li>
            <li>
              <a href="#tab3" class="tab">Mesas</a> </li>
          </ul>

          <div class="tabs_content">

            <div id="tab1" class="tab_content show">
              <form id="form_ajustes">

                <button class="btn primary" type="button" name="button">Nueva Categoria</button><br>

                <div class="row-around">
                  <div class="">
                    <h3>Alambres</h3>
                    <div>
                      <input id="arrachera" type="checkbox" name="">
                      <label for="arrachera">Arrachera</label>
                    </div>

                    <div>
                      <input id="vegetariano" type="checkbox" name="">
                      <label for="vegetariano">Vegetariano</label>
                    </div>

                    <div>
                      <input id="azteca" type="checkbox" name="">
                      <label for="azteca">Azteca</label>
                    </div>
                  </div>

                  <div class="">
                    <h3>Tacos</h3>
                    <div>
                      <input id="bisteck" type="checkbox" name="">
                      <label for="bisteck">Bisteck</label>
                    </div>

                    <div>
                      <input id="suadero" type="checkbox" name="">
                      <label for="suadero">Suadero</label>
                    </div>
                    <div>
                      <input id="longaniza" type="checkbox" name="">
                      <label for="longaniza">Longaniza</label>
                    </div>
                    <div>
                      <input id="pastor" type="checkbox" name="">
                      <label for="pastor">Pastor</label>
                    </div>
                  </div>
                </div>
              </form>
            </div>

            <div id="tab2" class="tab_content">
              <table class="tabla col-xs-12">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Producto</th>
                    <th>Precio Unitario</th>
                    <th>Ganancia</th>
                    <th>
                      <button class="btn success" type="button">Agregar</button>
                    </th>
                  </tr>
                </thead>
                <tbody id="ajustes_tbody_productos">
                  <tr>
                    <td></td>
                    <td></td>
                    <td>00.00</td>
                    <td></td>
                    <td>
                      <button class="btn atention" type="button" name="button">Editar</button>
                      <button class="btn danger" type="button" name="button">Eliminar</button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div id="tab3" class="tab-content">

            </div>

          </div> {* fin tabs-content *}

        </div> {* fin tab-box *}

      </div>
    </div>
  </div>
</div>

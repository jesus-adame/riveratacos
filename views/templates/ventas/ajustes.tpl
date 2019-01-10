<div id="modal_ajustes" class="modal">
  <div id="content_ajustes" class="content">
    <div class="window col-xs-8">

      <div class="modal-header">
        <h3><i class="fas fa-cogs"></i> Ajustes</h3>
        <a id="cerrar_ajustes" class="close">&times;</a>
      </div>

      <div class="modal-body">
        <div id="ajustes_tabs">

          <ul class="tabs">
            <li>
              <a href="#tab1" class="tab active">Categorias</a> </li>
            <li>
              <a href="#tab2" class="tab">Mesas</a> </li>
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
                      <input id="arrachera" type="checkbox" name="" value="Arrachera">
                      <label for="arrachera">Arrachera</label>
                    </div>

                    <div>
                      <input id="vegetariano" type="checkbox" name="" value="">
                      <label for="vegetariano">Vegetariano</label>
                    </div>

                    <div>
                      <input id="azteca" type="checkbox" name="" value="">
                      <label for="azteca">Azteca</label>
                    </div>
                  </div>

                  <div class="">
                    <h3>Tacos</h3>
                    <div>
                      <input id="bisteck" type="checkbox" name="" value="">
                      <label for="bisteck">Bisteck</label>
                    </div>

                    <div>
                      <input id="suadero" type="checkbox" name="" value="">
                      <label for="suadero">Suadero</label>
                    </div>
                    <div>
                      <input id="longaniza" type="checkbox" name="" value="">
                      <label for="longaniza">Longaniza</label>
                    </div>
                    <div>
                      <input id="pastor" type="checkbox" name="" value="">
                      <label for="pastor">Pastor</label>
                    </div>
                  </div>
                </div>
                
              </form>
            </div>

            <div id="tab2" class="tab_content">
              <table class="tabla col-xs-8">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Producto</th>
                    <th>Precio Unitario</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td></td>
                    <td></td>
                    <td>00.00</td>
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

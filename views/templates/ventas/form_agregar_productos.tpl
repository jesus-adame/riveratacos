<div id="modal_productos" class="modal">
  <div class="content">
    <div class="window col-xs-11">

    <div class="modal-header">
      <h3>Productos</h3>
      <a class="close">&times;</a>
    </div>

    <div class="modal-body-g">
      <form id="form_productos" class="form" action="core/ajax/datosProductosAjax.php" method="POST">

        <div class="col-xs-12 row-between">

          <div class="col-xs-6">
            <h3>MESA</h3>
            <select id="select_mesas" class="form col-xs-11" name="mesa">
              <!--
                <option value="1">Mesa 1</option>
                <option value="2">Mesa 2</option>
                <option value="3">Mesa 3</option>
              -->
            </select>
          </div>

          <div class="col-xs-6">
            <h3>CUENTA</h3>
            <select id="select_cuentas" class="form col-xs-11" name="cuenta">
              <!--
                <option value="1">Cuenta 1</option>
                <option value="2">Cuenta 2</option>
                <option value="3">Cuenta 3</option>
              -->
            </select>
          </div>

        </div>

        <div class="row-between col-xs-12">
          <div class="categoria col-xs-2">
            <ul>
                <li>
                  <a class="btn_categorias" id="btn_tacos">Tacos</a></li>
                <li>
                  <a class="btn_categorias" id="btn_alambres">Alambres</a></li>
                <li>
                  <a class="btn_categorias" id="btn_tostadas">Tostadas</a></li>
                <li>
                  <a class="btn_categorias" id="btn_tortas">Tortas</a></li>
                <li>
                  <a class="btn_categorias" id="btn_quesadillas">Quesadillas</a></li>
                <li>
                  <a class="btn_categorias" id="btn_bebidas">Bebidas</a></li>
            </ul>
          </div>

          <div id="tabla_productos" class="closter_productos col-md-5">
            <!-- <div class="col-xs-12">
              <form action="#" method="post">
                item.nombre
                <input class="col-xs-12" type="number" placeholder="Cantidad" min="0" max="200">
                <button class="btn primary" type="button" id_prod="item.id_producto">Cargar</button>
              </form>
            </div> -->
          </div>

          <div class="col-xs-5" style="overflow: auto; max-height: 65vh">
            <table class="tabla col-xs-12">
              <thead>
                <tr>
                  <th>Cant</th>
                  <th>Producto</th>
                  <th>Precio</th>
                  <th>Total</th>
                  <th>Mesero</th>
                  <th>Borrar</th>
                </tr>
              </thead>
              <tbody id="tbody_producto">
              <!-- <tr>
                  <td>2</td>
                  <td>TACO</td>
                  <td>16%</td>
                  <td>$ 18</td>
                  <td>$ 64</td>
                  <td>JUAN</td>
                  <td>
                    <button class="btn danger" type="button" name="button">X</button>
                  </td>
                </tr> -->
              </tbody>
              <tfoot>
                <tr>
                  <td colspan="4" style="text-align: right">Totales</td>
                  <td id="tfoot_producto"></td>
                  <td colspan="2"></td>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>

        <div class="row-right col-xs-12">
          <button id="btn_agregar_p" class="btn success" type="submit" name="button">Cargar</button>
        </div>
      </form>
    </div>
    </div>
  </div>
</div>

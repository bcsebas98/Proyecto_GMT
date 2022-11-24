<div class="d-flex justify-content-center text-center text-white">
    <form class="p-3 row <nav class=" style="background-color: #001D3D;" method="post">


        <div class="form-group col-md-4">

            <label for="correo">Codigo Institucional:</label>

            <div class="input-group">

                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-envelope"></i>
                    </span>
                </div>

                <input type="number" class="form-control" id="codigo_inst" name="registroCodigo" placeholder="Ingrese el Codigo Institucional">

            </div>

        </div>
        <div class="form-group col-md-4">

            <label for="correo">Correo electrónico:</label>

            <div class="input-group">

                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-envelope"></i>
                    </span>
                </div>

                <input type="email" class="form-control" id="correo" name="ingresoCorreo" placeholder="Ingrese Correo">

            </div>

        </div>

        <div class="form-group col-md-4">
            <label for="password">Contraseña:</label>

            <div class="input-group">

                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-lock"></i>
                    </span>
                </div>

                <input type="password" class="form-control" id="password" name="ingresoPassword" placeholder="Ingrese Contraseña">

            </div>

        </div>


        <?php
        /**
         * Crear objeto no estatico
         */
        $ingreso = new ControladorFormulario();
        /**
         * Aun no se ha creado el metodo ctrlIngreso();
         */
        $ingreso->ctrIngreso();

        ?>

        <button type="submit" class="btn btn-primary btn-block">Ingresar</button>


    </form>

</div>
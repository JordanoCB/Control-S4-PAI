<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <section>
        <fieldset>
            <legend>Crear Base de Datos</legend>
        
            <form action="php/crearbase.php" method="post">
                <button type="submit">Crear DDBB</button>
            </form>
        </fieldset>
    </section>

    <section>
        <fieldset>
            <legend>Crear Tabla</legend>

            <form action="php/creartabla.php" method="post">
                <button type="submit">Crear Tabla</button>
            </form>
        </fieldset>
    </section>

    <section>
        <fieldset>
            <legend>Seleccionar todos los productos</legend>

            <form action="php/select.php" method="post">
                <button type="submit">Seleccionar Todo</button>
            </form>
        </fieldset>
    </section>

    <section>
        <fieldset>
            <legend>Seleccionar con condicion de precio</legend>

            <form action="php/select con condicional.php" method="post">
                <div>
                    <legend>Críterios de búsqueda</legend>
                    Precio Mínimo: <input type="number" name="preciominimo" placeholder="5000">
                    <br><br/>
                    Precio Máximo: <input type="number" name="preciomaximo" placeholder="5000">
                </div>
                <button type="submit" name="busquedacondicional">Seleccionar Datos</button>
            </form>
        </fieldset>
    </section>

    <section>
        <fieldset>
            <legend>Insertar nuevo registro</legend>

            <form action="php/insert.php" method="post">
                <div>
                    Código del producto: <input type="text" name="codprod" placeholder="prod001">
                    <br><br/>
                    Descripción: <input type="text" name="descripcion" placeholder="Prodcuto 001">
                    <br><br/>
                    Precio: <input type="number" name="precio" placeholder="$1.000">
                    <br><br/>
                    Cantidad Stock: <input type="number" name="stock" placeholder="50">
                </div>
                <button type="submit" name="insertar">Insertar</button>
            </form>
        </fieldset>
    </section>

    <section>
        <fieldset>
            <legend>Actualizar Stock del registro</legend>

            <form action="php/update.php" method="post">
                <div>
                    Código del producto: <input type="text" name="codprod" placeholder="prod001">
                </div>
                <br><br/>
                <div>
                    Stock: <input type="number" name="stock">
                </div>
                <button type="submit" name="actualizar">Actualizar</button>
            </form>
        </fieldset>
    </section>

    <section>
        <fieldset>
            <legend>Eliminar registro</legend>

            <form action="php/delete.php" method="post">
                <div>
                    Código del producto: <input type="text" name="codprod" placeholder="prod001">
                </div>
                <button type="submit" name="eliminar">Eliminar</button>
            </form>
        </fieldset>
    </section>

</body>
</html>
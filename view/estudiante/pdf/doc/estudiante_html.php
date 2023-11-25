<page backtop="10mm" backbotton="10mm">
<page_header>
    <table style="width: 100%; border: solid 1px black;">
    <tr>
        <td style="text-align: left;  width: 33%">Listado de Estudiantes</td>
        <td style="text-align: center;  width: 34%">DEV PHP 2023</td>
        <td style="text-align: right;  width: 33%"><?php echo date('d/m/y');?></td>
    </tr>
    </table>
</page_header>
<page_footer>
    <table style="width: 100%; border: solid 1px black;">
    <tr>
        <td style="text-align: left; width: 50%">Leng. Prog. III</td>
        <td style="text-align: right; width: 50%">Pagina[[page_cu]]/[[page_nb]]</td>
    </tr>
    </table>
</page_footer>


<table style="width: 70%;border: solid 1px #5544DD; border-collapse: collapse"aling="center">
<thead>
    <tr>
        <th style="width: 15%; text-align:left; border: solid 1px #900C3F; background: #900c3f; text-color: #FFFFFF;"><span style="color: #FFFFFF;">CODIGO</span></th>
        <th style="width: 25%; text-align:left; border: solid 1px #900C3F; background: #900c3f; text-color: #FFFFFF;"><span style="color: #FFFFFF;">Nombre</span></th>
        <th style="width: 30%; text-align:left; border: solid 1px #900C3F; background: #900c3f; text-color: #FFFFFF;"><span style="color: #FFFFFF;">APELLIDO</span></th>
    </tr>
</thead>
<tbody>
    <?php 
    foreach ($rows as $row) {
    ?>
            <tr>
                <td style="width: 20%; text-align:left; border:solid 1px #900C3F">
                        <?=$row['idEstudiante']?>
                </td>
                <td style="width: 45%; text-align: left; border: solid 1px #900C3F">
                        <?=$row['nombre']?>
                </td>
                <td style="width: 45%; text-align: left; border: solid 1px #900C3F">
                        <?=$row['apellido']?>
                </td>
                
            </tr>
            <?php 
            }
            ?>
</tbody>
</table>
</page>
<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = 'GPIO';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="gpio">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Este es el menú dónde puedes depurar los pines.
    </p>

    <form action="#" method="post">
        <table class="tablatodos">
            <tr>
                <th>TODO<br />ON</th>
                <th>TODO<br />OFF</th>
                <th>Parpadear<br />en orden</th>
                <th>Parpadear<br />aleatorio</th>
                <th>Parpadear<br />TODO</th>
            </tr>
            <tr>
                <td class="pulsador">
                    <INPUT class="activar" type="submit" name="todoON" value="todoON"/>
                </td>
                <td class="pulsador">
                    <INPUT class="desactivar" type="submit" name="todoOFF" value="todoOFF"/>
                </td>
                <td class="pulsador">
                    <INPUT class="activar" type="submit" name="parpadeoORDEN" value="parpadeoORDEN"/>
                </td>
                <td class="pulsador">
                    <INPUT class="activar" type="submit" name="parpadeoALEATORIO" value="parpadeoALEATORIO"/>
                </td>
                <td class="pulsador">
                    <INPUT class="activar" type="submit" name="parpadeoTODO" value="parpadeoTODO"/>
                </td>
            </tr>
        </table>

        <table class="tablaprincipal">
            <TR>
                <TH>PIN</TH>
                <TH>ACTIVAR</TH>
                <TH>DESACTIVAR</TH>
                <TH>1PARPADEO</TH>
                <TH>PARPADEAR</TH>
                <TH>ESTADO</TH>
            </TR>

            <?php
            foreach (range(1,40) as $n) {
            ?>
                <TR>
                    <TD><?= $n; ?></TD>
                    <TD class="pulsador"><INPUT class="activar" type="submit" name="<?= $n; ?>" value="<?= $n; ?>"/></TD>
                    <TD class="pulsador"><INPUT class="desactivar" type="submit" name="<?= $n; ?>" value="<?= $n; ?>"/></TD>
                    <TD class="pulsador"><INPUT class="activar" type="submit" name="<?= $n; ?>" value="<?= $n; ?>"/></TD>
                    <TD class="pulsador"><INPUT class="activar" type="submit" name="<?= $n; ?>" value="<?= $n; ?>"/></TD>
                    <TD>¿?</TD>
                </TR>

                <?php
            }
            ?>
        </table>
    </form>
</div>

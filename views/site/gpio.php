<?php

/* @var $this yii\web\View */

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
                    <input class="activar" type="submit" name="todoON" value="todoON"/>
                </td>
                <td class="pulsador">
                    <input class="desactivar" type="submit" name="todoOFF" value="todoOFF"/>
                </td>
                <td class="pulsador">
                    <input class="activar" type="submit" name="parpadeoORDEN" value="parpadeoORDEN"/>
                </td>
                <td class="pulsador">
                    <input class="activar" type="submit" name="parpadeoALEATORIO" value="parpadeoALEATORIO"/>
                </td>
                <td class="pulsador">
                    <input class="activar" type="submit" name="parpadeoTODO" value="parpadeoTODO"/>
                </td>
            </tr>
        </table>

        <table class="tablaprincipal">
            <tr>
                <th>PIN</th>
                <th>ACTIVAR</th>
                <th>DESACTIVAR</th>
                <th>1PARPADEO</th>
                <th>PARPADEAR</th>
                <th>ESTADO</th>
            </tr>

            <?php foreach (range(1,40) as $n): ?>
                <tr>
                    <td><?= $n; ?></td>
                    <td class="pulsador"><input class="activar" type="submit" name="<?= $n; ?>" value="<?= $n; ?>"/></td>
                    <td class="pulsador"><input class="desactivar" type="submit" name="<?= $n; ?>" value="<?= $n; ?>"/></td>
                    <td class="pulsador"><input class="activar" type="submit" name="<?= $n; ?>" value="<?= $n; ?>"/></td>
                    <td class="pulsador"><input class="activar" type="submit" name="<?= $n; ?>" value="<?= $n; ?>"/></td>
                    <td>¿?</td>
                </tr>

            <?php endforeach; ?>
        </table>
    </form>
</div>

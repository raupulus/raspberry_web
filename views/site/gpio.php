<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'GPIO';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="gpio">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Este es el menú dónde puedes depurar los pines.
    </p>

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
                <?= Html::beginForm([
                    'site/gpio',
                ],
                    'post',
                    [
                        'enableAjaxValidation'=>false,
                        'enctype' => 'multipart/form-data',
                        'class' => 'form-horizontal col-lg-6 col-lg-offset-3 ',
                        'id' => 'gpio'.$n.'-form',
                        //'afterValidate'=>'js:enviar',
                        //'onsubmit'=>"",
                    ]
                    ); ?>
                    <td><?= $n; ?></td>

                    <input type="text" name="pin" value="<?= $n ?>" hidden />

                    <td class="pulsador">
                        <input class="activar" type="button"
                               name="<?= $n; ?>" value="<?= $n; ?>"/>
                    </td>
                    <td class="pulsador">
                        <input class="desactivar" type="submit"
                               name="<?= $n; ?>" value="<?= $n; ?>"/>
                    </td>
                    <td class="pulsador">
                        <input class="activar" type="submit"
                               name="<?= $n; ?>" value="<?= $n; ?>"/>
                    </td>
                    <td class="pulsador">
                        <input class="activar" type="submit"
                               name="<?= $n; ?>" value="<?= $n; ?>"/>
                    </td>
                    <td>¿?</td>
                <?= Html::endForm() ?>
            </tr>
        <?php endforeach; ?>
    </table>
</div>


<script type="text/javascript">
    window.onload = {
        $.('input[type="button"]').click(enviar);
    }

    function enviar(){
        console.log('Entra en función enviar()');
        /*
        if(!hasError){
            str = $('#'+formulario).serialize();
            $.ajax({
                type: "POST",
                url: "<?= Url::to('site/gpio'); ?>",
                data: str,
                beforeSend : function() {
                    //$("#login").attr("disabled",true);
                },
                success:function(data){
                    //document.getElementById('respuesta').innerHTML = data;
                    //$("#login").attr("disabled",false);
                    alert('encendido');
                },
                error: function(data) { // if error occured
                    alert('error');
                }
            });
        }
        */
        return false;
    }
</script>

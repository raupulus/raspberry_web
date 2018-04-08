<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Monitorizar';
$this->params['breadcrumbs'][] = $this->title;

/* Almaceno variables con la información del sistema y hardware */
$temperatura = shell_exec('cat /sys/class/thermal/thermal_zone0/temp');
$usuarios = preg_split("/[\s]+/",
                shell_exec(' who | tr -s \' \' | cut -d \' \' -f1'));
$usuarios = array_filter($usuarios, "strlen"); // Limpia vacíos

/* RAM: total | usada | libre | compartida | caché | disponible */
$ram = array_filter(preg_split("/[\s]+/", shell_exec('free -m | tr -s \' \' | tail -n +2 | head -n 1 | cut -d \' \' -f2-7')), "strlen");
$ram = array_combine([
        'Total',
        'Usada',
        'Libre',
        'Compartida',
        'Caché',
        'Disponible'
       ], $ram);

$almacenamiento_dispositivo = preg_split("/[\s]+/",
    shell_exec('df | grep "/dev/" | tr -s " " | cut -d " " -f 1'));

$almacenamiento_porcentaje = preg_split("/[\s]+/",
    shell_exec('df | grep "/dev/" | tr -s " " | cut -d " " -f 5'));

$almacenamiento = array_combine(
        $almacenamiento_dispositivo,
        $almacenamiento_porcentaje
    );

$CPU = shell_exec('ps -aux | tr -s " " | cut -d " " -f 3 | tail -n +2');
//$CPU = shell_exec('mpstat | tr -s " " | cut -d " " -f3-11 | tail -n -1');

$CPU = array_reduce(preg_split("/[\s\n\t]+/", $CPU), function ($a,$b) {
           return (float)$a += (float)$b;
       });
$CPU = ($CPU/shell_exec('nproc --all')); // Divido entre nº de hilos CPU

$procesos = shell_exec('ps aux --width 30 --sort -rss | head -n 20| tr -s " "');
$procesos = preg_split("/[\n]+/", $procesos);

$uptime = shell_exec('uptime');
?>
<div class="monitorizar">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Monitorización del sistema y hardware
    </p>

    <h2>Monitorización de Hardware</h2>

    <table>
        <tr>
            <td>Temperatura</td>
            <td>
                <?= round(((float)$temperatura)/1000, 2).'ºC'; ?>
            </td>
        </tr>

        <tr>
            <td>Usuarios conectados</td>
            <td>
                <ul>
                    <?php foreach ($usuarios as $usuario): ?>
                        <li>
                            <?= $usuario; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </td>
        </tr>
        <tr>
            <td>Uptime</td>
            <td><?= $uptime; ?></td>
        </tr>

        <tr>
            <td>RAM</td>
            <td>
                <table>
                    <?php foreach ($ram as $titulo => $dato): ?>
                        <tr>
                            <td><?= $titulo; ?></td>
                            <td><?= $dato; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </td>
        </tr>

        <tr>
            <td>Almacenamiento Ocupado</td>
            <td>
                <table>
                    <?php foreach ($almacenamiento as $dispositivo => $val): ?>
                        <tr>
                            <td><?= $dispositivo; ?></td>
                            <td><?= $val; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </td>
        </tr>

        <tr>
            <td>Carga de CPU</td>
            <td><?= $CPU; ?></td>
        </tr>
    </table>

    <h3>Procesos con un consumo más alto</h3>
    <div>
        <ol>
            <?php foreach ($procesos as $proceso): ?>
                <li>
                    <?= $proceso; ?>
                </li>
            <?php endforeach; ?>
        </ol>
    </div>
</div>

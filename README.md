# Calendario Colombia Class PHP-LARAVEL
## _Una simple pero muy util clase para PHP (LARAVEL)_

[![N|Solid](https://i.ibb.co/ZLzQTpm/Firma-Git-Hub.png)](#)

Simple pero muy útil clase de PHP, la cual permite manipular el Calendario de las fechas disponibles en la clase según sea la necesidad del sistema.
Casi todos nuestros desarrollos de software en nuestro país tienen que involucrarse con fechas, situación por lo cual se pensó en estandarizar la manera de hacer uso de nuestro calendario.


## Caracteristicas

-	Manipular fechas o rangos de fechas con las características específicas del calendario de Colombia.
-	Validar datos de fechas puntuales como festivos o domingos.
-	Conocer los días laborales de acuerdo al estándar de nuestro país.
-	Generar arreglos con los días festivos de un mes y año especifico.
-	Generar Migraciones y Seeder en laravel con tan solo invocar la clase.
-	Llamado estático en cualquier lugar del sistema.
-	Trabaja siempre sobre la hora y fecha de Colombia sin importar la configuración del servidor.
-	Libre y totalmente escalable.

## Instalación

Descargue el contenido del repositorio a su equipo.
Cree un directorio en la carpeta App de laravel con el nombre *Clases*

```sh
App\Clases\CalendarioColombia.php
```

Esta carpeta se carga por defecto dentro del Framework, por lo cual podremos llamar la clase en cualquier controlador con total libertad.

Llamado y uso de Clase

```sh
<?php
use App\Clases\CalendarioColombia;
```

## Métodos

Podrá invocar el método que requiera de la clase.
Listado Actual de Metodos

METODOS PARA USO EN CONTROLADORES

| METODO | DESCRIPCIÓN |
| ------ | ------ |
|CalendarioColombia::timezoneSet()   |   Setea la Zona de Tiempo De Bogota Colombia.|
|CalendarioColombia::holidays([year])    |   Retorna los Festivos de un Año o de Todos los Años Disponibles en la clase.|
|CalendarioColombia::holidaysMonthYear(mes,año)  |   Retorna los Festivos de un mes y año especifico.|
|CalendarioColombia::isHoliday(fecha)  |   Retorna TRUE si el dia es Festivo.|
|CalendarioColombia::isMonday(fecha)  |   Retorna TRUE si el dia es Lunes.|
|CalendarioColombia::isTuesday(fecha)  |   Retorna TRUE si el dia es Martes.|
|CalendarioColombia::isWednesday(fecha)  |   Retorna TRUE si el dia es Miercoles.|
|CalendarioColombia::isThursday(fecha)  |   Retorna TRUE si el dia es Jueves.|
|CalendarioColombia::isFriday(fecha)  |   Retorna TRUE si el dia es Viernes.|
|CalendarioColombia::isSaturday(fecha)  |   Retorna TRUE si el dia es Sabado.|
|CalendarioColombia::isSunday(fecha)  |   Retorna TRUE si el dia es Domingo.|
|CalendarioColombia::daysFromToday(cantidad)  |   Retorna un arreglo con las fechas de los dias hacia adelante o hacia atras.|
|CalendarioColombia::holidayBetween(inicio,fin)  |   Retorna un arreglo con las fechas festivas entre dos fechas.|
|CalendarioColombia::daysWorkingMonSatBetween(inicio,fin)  |   Retorna un arreglo con las fechas dias laborales de lunes a sabado.|
|CalendarioColombia::daysWorkingMonFriBetween(inicio,fin)  |   Retorna un arreglo con las fechas dias laborales de lunes a viernes.|
|CalendarioColombia::getDayString(fecha)  |   Retorna el numero del dia conservando el cero al inicio - string.|
|CalendarioColombia::getDayName(fecha)  |   Retorna el nombre del dia en Español - string.|
|CalendarioColombia::getDayInt(fecha)  |   Retorna el numero del dia sin conservar el cero inicial - int.|
|CalendarioColombia::getDayNumberISO(fecha)  |   Retorna el numero del dia en formato ISO - int.|
|CalendarioColombia::getDayNumber(fecha)  |   Retorna el numero del dia - int.|
|CalendarioColombia::getDayYear(fecha)  |   Retorna el numero del año en formato Entero - int.|
|CalendarioColombia::getWeekISO(fecha)  |   Retorna el numero de la semana a la que corresponde la fecha en ISO - int.|
|CalendarioColombia::getMonthName(fecha)  |   Retorna el nombre del mes correspondiente a la fecha en español - string.|
|CalendarioColombia::getMonthsCollection()  |   Retorna un coleccion con los doce meses del año en español- collect.|
|CalendarioColombia::getMonthString(fecha)  |   Retorna el numero del mes con el cero al inicio - string.|
|CalendarioColombia::getMonthInt(fecha)  |   Retorna el numero del mes en entero - int.|
|CalendarioColombia::getTimezone(fecha)  |   Permite Validar si la fecha esta trabajando con la zona horaria de colombia.|
|CalendarioColombia::getTodayArray()  |   Retorna la fecha de hoy, en un arreglo separando año, mes y dia.|
|CalendarioColombia::getYear(fecha)  |   Retorna el numero del año en entero - int.|
|CalendarioColombia::getDaysMonth(fecha)  |   Retorna el numero de dias del mes al que corresponda la fecha ingresada.|

METODOS PARA MIGRACIONES LARAVEL
| METODO | DESCRIPCIÓN |
| ------ | ------ |
|CalendarioColombia::SchemaCreate()  |   Metodo para invocar en el up() de la migracion.|
|CalendarioColombia::DropIfExists()  |   Metodo para invocar en el down() de la migracion.|
|CalendarioColombia::seeder()  |   Metodo para invocar en run() del Seeder.|

Codigo Migracion Laravel
```sh
<?php

use App\Clases\CalendarioColombia;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{

    public function up(){
        CalendarioColombia::SchemaCreate();
    }


    public function down(){
        CalendarioColombia::DropIfExists();
    }
};

```

Codigo Seeder Laravel
```sh
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Clases\CalendarioColombia;
use Illuminate\Support\Facades\DB;

class CalendarioSeeder extends Seeder
{
    public function run(){
        CalendarioColombia::seeder();
    }
}

```


## Desarrollador

Ingeniero, Raul Mauricio Uñate Castro
sacon-raulmauricio@hotmail.com

## Licencia
MIT - En proximas oportunidades se trabajará en su migracion a Composer


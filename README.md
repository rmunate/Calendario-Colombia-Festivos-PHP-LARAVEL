# Calendario Colombia Class PHP-LARAVEL
## _Una simple pero muy útil clase para PHP (LARAVEL)_

[![N|Solid](https://i.ibb.co/ZLzQTpm/Firma-Git-Hub.png)](#)

Simple pero muy útil clase de PHP, la cual permite manipular el Calendario de las fechas disponibles en la clase según sea la necesidad del sistema.
Casi todos nuestros desarrollos de software en nuestro país tienen que involucrarse con fechas, situación por lo cual se pensó en estandarizar la manera de hacer uso de nuestro calendario.


## Características

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
Listado Actual de Métodos

METODOS PARA USO EN CONTROLADORES

| METODO | DESCRIPCIÓN |
| ------ | ------ |
|CalendarioColombia::timezoneSet()   |   Setea la Zona de Tiempo De Bogotá Colombia. |
|CalendarioColombia::holidays([year])    |   Retorna los Festivos de un Año o de Todos los Años Disponibles en la clase. El argumento del método es opcional. Argumento Entero de un solo año ejemplo CalendarioColombia::holidays(2022) |
|CalendarioColombia::holidaysMonthYear(mes,año)  |   Retorna los Festivos de un mes y año especifico.|
|CalendarioColombia::isHoliday(fecha)  |   Retorna TRUE si el día es Festivo.|
|CalendarioColombia::isMonday(fecha)  |   Retorna TRUE si el día es Lunes.|
|CalendarioColombia::isTuesday(fecha)  |   Retorna TRUE si el día es Martes.|
|CalendarioColombia::isWednesday(fecha)  |   Retorna TRUE si el día es Miércoles.|
|CalendarioColombia::isThursday(fecha)  |   Retorna TRUE si el día es Jueves.|
|CalendarioColombia::isFriday(fecha)  |   Retorna TRUE si el día es Viernes.|
|CalendarioColombia::isSaturday(fecha)  |   Retorna TRUE si el día es Sábado.|
|CalendarioColombia::isSunday(fecha)  |   Retorna TRUE si el día es Domingo.|
|CalendarioColombia::daysFromToday(cantidad)  |   Retorna un arreglo con las fechas de los días hacia adelante o hacia atrás contemplando el día actual. |
|CalendarioColombia::holidayBetween(inicio,fin)  |   Retorna un arreglo con las fechas festivas entre dos fechas.|
|CalendarioColombia::daysWorkingMonSatBetween(inicio,fin)  |   Retorna un arreglo con las fechas de los días laborales de lunes a sábado. (Excluyendo Festivos) |
|CalendarioColombia::daysWorkingMonFriBetween(inicio,fin)  |   Retorna un arreglo con las fechas de los días laborales de lunes a viernes. (Excluyendo Festivos)  |
|CalendarioColombia::getDayString(fecha)  |   Retorna el número del día conservando el cero al inicio – Retorna String. |
|CalendarioColombia::getDayName(fecha)  |   Retorna el nombre del día en Español - String.|
|CalendarioColombia::getDayInt(fecha)  |   Retorna el número del día sin conservar el cero inicial - Integer.|
|CalendarioColombia::getDayNumberISO(fecha)  |   Retorna el número del día en formato ISO - Integer.|
|CalendarioColombia::getDayNumber(fecha)  |   Retorna el número del día - Integer.|
|CalendarioColombia::getDayYear(fecha)  |   Retorna el número del día en el año en formato Entero - Integer.|
|CalendarioColombia::getWeekISO(fecha)  |   Retorna el número de la semana a la que corresponde la fecha en ISO - Integer.|
|CalendarioColombia::getMonthName(fecha)  |   Retorna el nombre del mes correspondiente a la fecha en español - String.|
|CalendarioColombia::getMonthsCollection()  |   Retorna un colección con los doce meses del año en español- collect.|
|CalendarioColombia::getMonthString(fecha)  |   Retorna el número del mes con el cero al inicio - String.|
|CalendarioColombia::getMonthInt(fecha)  |   Retorna el número del mes en entero - Integer.|
|CalendarioColombia::getTimezone(fecha)  |   Permite Validar si la fecha está trabajando con la zona horaria de Colombia.|
|CalendarioColombia::getTodayArray()  |   Retorna la fecha de hoy, en un arreglo separando año, mes y día.|
|CalendarioColombia::getYear(fecha)  |   Retorna el número del año en entero - Integer.|
|CalendarioColombia::getDaysMonth(fecha)  |   Retorna el número de días del mes al que corresponda la fecha ingresada.|

METODOS PARA MIGRACIONES LARAVEL
| METODO | DESCRIPCIÓN |
| ------ | ------ |
|CalendarioColombia::SchemaCreate()  |   Método para invocar en el up() de la migración.|
|CalendarioColombia::DropIfExists()  |   Método para invocar en el down() de la migración.|
|CalendarioColombia::seeder()  |   Método para invocar en run() del Seeder.|

Código Migración Laravel
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

Ingeniero, Raúl Mauricio Uñate Castro
sacon-raulmauricio@hotmail.com

## Licencia
MIT - En próximas oportunidades se trabajará en su migración a Composer

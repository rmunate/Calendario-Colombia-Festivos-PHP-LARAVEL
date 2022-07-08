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
App\Clases\CCOL.php
```

Esta carpeta se carga por defecto dentro del Framework, por lo cual podremos llamar la clase en cualquier controlador con total libertad.

Llamado y uso de Clase

```sh
<?php
use App\Clases\CCOL;
```

## Métodos

Podrá invocar el método que requiera de la clase.
Listado Actual de Métodos

METODOS PARA USO EN CONTROLADORES

| METODO | DESCRIPCIÓN |
| ------ | ------ |
| CCOL::timezoneSet() | Setea la Zona de Tiempo De Bogota Colombia.|
| CCOL::holidays([year]) | Retorna todos los festivos de los años disponibles, si se desea, se puede enviar como argumento un año para solo retornar los valores de ese año.|
| CCOL::holidaysMonthYear(mes|año) | Retorna los Festivos de un mes y año especifico.|
| CCOL::isHoliday(fecha) | Retorna TRUE si el dia es Festivo.|
| CCOL::isMonday(fecha) | Retorna TRUE si el dia es Lunes.|
| CCOL::isTuesday(fecha) | Retorna TRUE si el dia es Martes.|
| CCOL::isWednesday(fecha) | Retorna TRUE si el dia es Miercoles.|
| CCOL::isThursday(fecha) | Retorna TRUE si el dia es Jueves.|
| CCOL::isFriday(fecha) | Retorna TRUE si el dia es Viernes.|
| CCOL::isSaturday(fecha) | Retorna TRUE si el dia es Sabado.|
| CCOL::isSunday(fecha) | Retorna TRUE si el dia es Domingo.|
| CCOL::daysFromToday(cantidad) | Retorna un arreglo con las fechas de los días hacia adelante o hacia atrás.|
| CCOL::holidayBetween(inicio|fin) | Retorna un arreglo con las fechas festivas entre dos fechas.|
| CCOL::daysWorkingMonSatBetween(inicio|fin) | Retorna un arreglo con las fechas dias laborales de lunes a sabado.|
| CCOL::daysWorkingMonFriBetween(inicio|fin) | Retorna un arreglo con las fechas dias laborales de lunes a viernes.|
| CCOL::getDayString(fecha) | Retorna el número del día conservando el cero al inicio - string.|
| CCOL::getDayName(fecha) | Retorna el nombre del día en Español - string.|
| CCOL::getDayInt(fecha) | Retorna el número del día sin conservar el cero inicial - int.|
| CCOL::getDayNumberISO(fecha) | Retorna el número del día en formato ISO - int.|
| CCOL::getDayNumber(fecha) | Retorna el número del dia - int.|
| CCOL::getDayYear(fecha) | Retorna el número del día de la fecha dentro del año en formato Entero - int.|
| CCOL::getWeekISO(fecha) | Retorna el numero de la semana a la que corresponde la fecha en ISO - int.|
| CCOL::getMonthName(fecha) | Retorna el nombre del mes correspondiente a la fecha en español - string.|
| CCOL::getMonthsCollection() | Retorna una colección con los doce meses del año en español- collect.|
| CCOL::getMonthString(fecha) | Retorna el número del mes con el cero al inicio - string.|
| CCOL::getMonthInt(fecha) |    Retorna el número del mes en entero - int.|
| CCOL::getTimezone(fecha) | Permite Validar si la fecha esta trabajando con la zona horaria de colombia.|
| CCOL::getTodayArray() | Retorna la fecha de hoy, en un arreglo separando año, mes y dia.|
| CCOL::getYear(fecha) | Retorna el numero del año en entero - int.|
| CCOL::getDaysMonth(mes|año) | Retorna el número de dias del mes al que corresponda el mes y el año del argumento.|
| CCOL::dateDiff(fechaInicio|fechaFin|Formato) | Retorna la diferencia entre dos fechas de acuerdo al formato que se le solicite, Formatos Posibles (años, meses, dias, horas, minutos, segundos).|

METODOS PARA MIGRACIONES LARAVEL
| METODO | DESCRIPCIÓN |
| ------ | ------ |
|CalendarioColombia::SchemaCreate()  |   Método para invocar en el up() de la migración.|
|CalendarioColombia::DropIfExists()  |   Método para invocar en el down() de la migración.|
|CalendarioColombia::seeder()  |   Método para invocar en run() del Seeder.|

Código Migración Laravel
```sh
<?php

use App\Clases\CCOL;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{

    public function up(){
        CCOL::SchemaCreate();
    }


    public function down(){
        CCOL::DropIfExists();
    }
};

```

Codigo Seeder Laravel
```sh
<?php

namespace Database\Seeders;

use App\Clases\CCOL;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CalendarioSeeder extends Seeder
{
    public function run(){
        CCOL::seeder();
    }
}

```


## Desarrollador

Ingeniero, Raúl Mauricio Uñate Castro
raulmauriciounate@gmail.com

## Licencia
MIT

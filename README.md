# SISTEMA DE GESTION DE VENTAS DE SERVICIOS
El sistema cuenta con las funcionalidades básicas para administrar la venta de servicios de electricidad, llevando un control y registro basico de las cotizaciones por parte del cliente.
El sistema puede generar y exportar facturas apartir de los servicios prestados.
Dependiendo de la región a la cual pertenezca el cliente, se le hace un descuento del 20%, 10$ o el precion queda neto.

# DOCUMENTACIÓN
El sistem está hecho sobre Lavarel en su backend pensado para mysql y mariabd. El front-end implementa boopstrap y jquery.
El sistema está diseñado para un entorno local, por lo tanto en caso de errores, es debe modificar los atributos de la configuraciòn en el archivo .env.

# REQUISITOS
*PHP > 7.0
*Mariabd o mysq
*composer

# INSTALACIÓN

1. Clonar el proyecto del repositorio.
2. Instalar las dependencias del composer. Ejecutar $ composer install
3. Importar a la base de datos database/script/clientes_gestion.sql
4. Añadir las credenciales de la base de datos en el archivo .env

Nota: la configuración del archivo .env se puede guiar del fichero situado en "database/ejemplo.env" 





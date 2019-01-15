# ApiTest REST

Test construido con Composer y Laravel


## Metodos de esta API
Esta api permite crear un usuario, logearse y deslogearse los metodos son

### de usuario
http://apitest.k-maleon.cl/api/login
POST
recibe email y password
entrega api_token

http://apitest.k-maleon.cl/api/logout
POST
recibe email
entrega 200 ok

http://apitest.k-maleon.cl/api/register
POST
recibe email, nombre, password y password_confirmation
entrega json data con api_token

### de articulo
http://apitest.k-maleon.cl/api/articulo
GET
recibe api_token
entrega json con listado articulos

http://apitest.k-maleon.cl/api/articulo/{id_articulo}
GET
recibe api_token
entrega json con el articulo

http://apitest.k-maleon.cl/api/articulo
POST
recibe nombre, descripcion, api_token
entrega json con el articulo

http://apitest.k-maleon.cl/api/articulo/{id_articulo}
PUT
recibe nombre, descripcion, api_token
entrega json con el articulo actualizado

http://apitest.k-maleon.cl/api/articulo/{id_articulo}
DELETE
recibe api_token
entrega 202 ok

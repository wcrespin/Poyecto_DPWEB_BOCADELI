use bocadelidpweb;
create table categoria
(id_categoria nvarchar(10) primary key,
nombre_categoria nvarchar (30),
usuario nvarchar(30),
fecha timestamp default current_timestamp() on update current_timestamp());

create table facturacion
(id_facturacion nvarchar(10) primary key,
id_pedido nvarchar(10),
id_pago nvarchar(10),
usuario nvarchar(30),
fecha timestamp default current_timestamp() on update current_timestamp());

create table inventario
(id_inventario nvarchar (10) primary key,
id_producto nvarchar(10),
existencias int,
fecha_fabricacion date,
fecha_vencimineto date,
usuario nvarchar (30),
fecha timestamp default current_timestamp() on update current_timestamp());

create table pago
(id_pago nvarchar(10) primary key,
id_pedido nvarchar(10),
forma_pago nvarchar(30),
total_pago int,
usuario nvarchar(30),
fecha timestamp default current_timestamp() on update current_timestamp());

create table pedido 
(id_pedido nvarchar(10) primary key,
id_producto nvarchar (10),
nombre_cliente nvarchar(30),
costounitario int,
cantidadproducto int,
usuario nvarchar(30),
fecha timestamp default current_timestamp() on update current_timestamp());

create table producto
(id_producto nvarchar (10) primary key,
id_categoria nvarchar(10),
nombre_producto nvarchar (30),
costo int,
usuario nvarchar(30),
fecha timestamp default current_timestamp() on update current_timestamp());



 
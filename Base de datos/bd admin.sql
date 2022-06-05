use admin;
create table Usuarios
(coduser nvarchar(10) primary key,
nouser nvarchar(10),
password nvarchar(20),
codpers nvarchar(10)
);

create table cliente
(id_cliente nvarchar(10) primary key,
nombre_cliente nvarchar(30),
apellidos_cliente nvarchar(30),
telefono nvarchar(20),
direccion nvarchar(40),
usuario nvarchar(30),
fecha timestamp default current_timestamp() on update current_timestamp());

create table sucursal
(id_sucursal nvarchar(10) primary key,
direccion nvarchar(40),
telefono nvarchar(20),
usuario nvarchar(30),
fecha timestamp default current_timestamp() on update current_timestamp());

create table empleado
(id_empleado nvarchar(10) primary key,
nombre_empleado nvarchar(30),
apellidos_empleado nvarchar(30),
telefono nvarchar(20),
direccion nvarchar(40),
usuario nvarchar(30),
fecha timestamp default current_timestamp() on update current_timestamp());
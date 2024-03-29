create table sitio_db.usuarios (
id int unsigned auto_increment not null primary key,
nombre varchar(100) not null,
email varchar(100) not null,
contrasena varchar(10) not null,
foto varchar(100)
);
select * from usuarios;

create table sitio_db.productos (
id int unsigned auto_increment not null primary key,
nombre varchar(100) not null,
descripcion varchar(100) not null,
precio int not null,
idCategoria varchar(100)
);

select * from productos;

create table sitio_db.categoria(
id int unsigned auto_increment not null primary key,
nombre varchar(100)
);

select * from categoria;

create table sitio_db.carritos (
id int unsigned auto_increment not null primary key,
idUsuario int,
idProducto int,
estado varchar(100),
cantidad int
);

select * from carritos;

create table sitio_db.productosComprados (
id int unsigned auto_increment not null primary key,
idUsuario int,
idProducto int
);

select * from productosComprados;
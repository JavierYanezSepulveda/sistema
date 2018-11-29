DROP TABLE Compra cascade constraints;
DROP TABLE Insumo cascade constraints;
DROP TABLE Items_Compra cascade constraints;
DROP TABLE Items_Venta cascade constraints;
DROP TABLE Producto cascade constraints;
DROP TABLE Perfil cascade constraints;
DROP TABLE Proveedor cascade constraints;
DROP TABLE Tipo_Venta cascade constraints;
DROP TABLE UCC cascade constraints;
DROP TABLE Usuario cascade constraints;
DROP TABLE Venta cascade constraints;
DROP TABLE Sucursal cascade constraints; 

CREATE TABLE Tipo_Venta (
  ID_Tipo_Venta number(10),
  Nombre varchar2(20)
);
CREATE TABLE UCC (
  ID_UCC number(10),
  Numero_UCC number(10),
  Nombre varchar2(80),
  Anexo number(10)
);
CREATE TABLE Usuario (
  Rut number(10),
  Nombre varchar2(20),
  Apellidos varchar2(20),
  Cargo varchar2(20),
  Clave varchar2(20),
  ID_Sucursal number(10),
  ID_Perfil number(10),
  PRIMARY KEY (Rut)
);
CREATE TABLE Perfil(
    ID_Perfil number(10),
    Rol varchar2(10)
);
CREATE TABLE Proveedor (
  ID_Proveedor number(10),
  Nombre varchar2(20),
  Telefono number(15),
  Direccion varchar2(20)
);
CREATE TABLE Items_Venta (
  ID_Items_Venta number(10),
  ID_Venta number(10),
  ID_Producto number(10),
  Cantidad number(10)
);
CREATE TABLE Items_Compra (
  ID_Items_Compra number(10),
  ID_Compra number(10),
  ID_Insumo number(10),
  Cantidad number(10)
  );
CREATE TABLE Venta (
  ID_Venta number(10),
  ID_Usuario number(10),
  N_Boleta number(10),
  N_Orden number(10),
  Fecha_ingreso DATE,
  ID_UCC number(10),
  ID_Tipo_Venta number(10),
  Total number(10),
  Observacion varchar2(50),
  ID_Sucursal number(10)
    
);
CREATE TABLE Compra (
  ID_Compra number(10),
  ID_Usuario number(10),
  N_Factura number(10),
  Fecha_ingreso DATE,
  ID_UCC number(10),
  Subtotal number(10),
  IVA number(10),
  Total number(10),
  Observacion varchar2(50),
  ID_Sucursal number(10)
);
CREATE TABLE Producto (
  ID_Producto number(10),
  Nombre varchar2(20),
  Precio_V number(10),
  ID_Insumo number(10),
  ID_Sucursal number(10),
  Estado number(10)
);
CREATE TABLE Insumo (
  ID_Insumo number(10),
  Nombre varchar2(20),
  Precio_C number(10),
  Marca varchar2(20),
  Stock number(10),
  ID_Proveedor number(10),
  ID_Sucursal number(10)
);
CREATE TABLE Sucursal(
    ID_Sucursal number(10),
    Nombre varchar2(20),
    Ciudad varchar2(20)
);

ALTER TABLE Compra ADD CONSTRAINT compra_pk PRIMARY KEY (ID_Compra);
CREATE SEQUENCE compra_seq START WITH 1;
ALTER TABLE Insumo ADD CONSTRAINT insumo_pk PRIMARY KEY (ID_Insumo);
CREATE SEQUENCE insumo_seq START WITH 1;
ALTER TABLE Items_Compra ADD CONSTRAINT items_compra_pk PRIMARY KEY (ID_Items_Compra);
CREATE SEQUENCE items_compra_seq START WITH 1;
ALTER TABLE Items_Venta ADD CONSTRAINT items_venta_pk PRIMARY KEY (ID_Items_Venta);
CREATE SEQUENCE items_venta_seq START WITH 1;
ALTER TABLE Producto ADD CONSTRAINT producto_pk PRIMARY KEY (ID_Producto);
CREATE SEQUENCE producto_seq START WITH 1;
ALTER TABLE Proveedor ADD CONSTRAINT proveedor_pk PRIMARY KEY (ID_Proveedor);
CREATE SEQUENCE proveedor_seq START WITH 1;
ALTER TABLE Tipo_Venta ADD CONSTRAINT tipo_venta_pk PRIMARY KEY (ID_Tipo_Venta);
CREATE SEQUENCE tipo_venta_seq START WITH 1;
ALTER TABLE UCC ADD CONSTRAINT ucc_pk PRIMARY KEY (ID_UCC);
CREATE SEQUENCE ucc_seq START WITH 1;
ALTER TABLE Venta ADD CONSTRAINT venta_pk PRIMARY KEY (ID_Venta);
CREATE SEQUENCE venta_seq START WITH 1;
ALTER TABLE Sucursal ADD CONSTRAINT sucursal_pk PRIMARY KEY (ID_Sucursal);
CREATE SEQUENCE sucursal_seq START WITH 1;
ALTER TABLE Perfil ADD CONSTRAINT perfil_pk PRIMARY KEY (ID_perfil);
CREATE SEQUENCE perfil_seq START WITH 1;





ALTER TABLE Venta ADD CONSTRAINT fk_usuario FOREIGN KEY (ID_Usuario) REFERENCES Usuario(Rut);
ALTER TABLE Venta ADD CONSTRAINT fk_ucc FOREIGN KEY (ID_UCC) REFERENCES UCC(ID_UCC);
ALTER TABLE Venta ADD CONSTRAINT fk_tipo_venta FOREIGN KEY (ID_Tipo_Venta) REFERENCES Tipo_Venta(ID_Tipo_Venta);
ALTER TABLE Venta ADD CONSTRAINT fk_sucursal FOREIGN KEY (ID_Sucursal) REFERENCES Sucursal(ID_Sucursal);
ALTER TABLE Compra ADD CONSTRAINT fk_usuario_c FOREIGN KEY (ID_Usuario) REFERENCES Usuario(Rut);
ALTER TABLE Compra ADD CONSTRAINT fk_ucc_c FOREIGN KEY (ID_UCC) REFERENCES UCC(ID_UCC);
ALTER TABLE Compra ADD CONSTRAINT fk_sucursal_c FOREIGN KEY (ID_Sucursal) REFERENCES Sucursal(ID_Sucursal);
ALTER TABLE Items_Venta ADD CONSTRAINT fk_venta FOREIGN KEY (ID_Venta) REFERENCES Venta(ID_Venta);
ALTER TABLE Items_Venta ADD CONSTRAINT fk_producto FOREIGN KEY (ID_Producto) REFERENCES Producto(ID_Producto);
ALTER TABLE Items_Compra ADD CONSTRAINT fk_compra FOREIGN KEY (ID_Compra) REFERENCES Compra(ID_Compra);
ALTER TABLE Items_Compra ADD CONSTRAINT fk_insumo FOREIGN KEY (ID_Insumo) REFERENCES Insumo(ID_Insumo);
ALTER TABLE Producto ADD CONSTRAINT fk_insumo_p FOREIGN KEY (ID_Insumo) REFERENCES Insumo(ID_Insumo);
ALTER TABLE Producto ADD CONSTRAINT fk_sucursal_p FOREIGN KEY (ID_Sucursal) REFERENCES Sucursal(ID_Sucursal);
ALTER TABLE Insumo ADD CONSTRAINT fk_proveedor FOREIGN KEY (ID_Proveedor) REFERENCES Proveedor(ID_Proveedor);
ALTER TABLE Insumo ADD CONSTRAINT fk_sucursal_i FOREIGN KEY (ID_Sucursal) REFERENCES Sucursal(ID_Sucursal);
ALTER TABLE Usuario ADD CONSTRAINT fk_sucursal_u FOREIGN KEY (ID_Sucursal) REFERENCES Sucursal(ID_Sucursal);
ALTER TABLE Usuario ADD CONSTRAINT fk_perfil FOREIGN KEY (ID_Perfil) REFERENCES Perfil(ID_Perfil);


INSERT INTO Tipo_Venta(ID_Tipo_Venta, Nombre) values(tipo_venta_seq.nextval, 'ENSENANZA');
INSERT INTO Tipo_Venta(ID_Tipo_Venta, Nombre) values(tipo_venta_seq.nextval, 'ADMINISTRATIVO');
INSERT INTO Tipo_Venta(ID_Tipo_Venta, Nombre) values(tipo_venta_seq.nextval, 'FOTOCOPIAS');
INSERT INTO Tipo_Venta(ID_Tipo_Venta, Nombre) values(tipo_venta_seq.nextval, 'MATERIALES');
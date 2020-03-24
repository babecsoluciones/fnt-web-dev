<?
include("fnt-web.php");

$insert = 'INSERT INTO `CatPaquetes` VALUES ("pm","recreativo-master","Recreativo Master","PHNwYW4gY2xhc3M9InRleHQtY3Vyc2l2ZSBoMSB0ZXh0LXJlZCI+UGFxdWV0ZSAxPC9zcGFuPg0KICAgICAgICAgICAgPGgzIGNsYXNzPSJ0ZXh0LWJsYWNrIj4qIEFuaW1hY2nDs24gSW5mYW50aWwgKjwvaDM+DQo8aDMgY2xhc3M9InRleHQtYmxhY2siPlBhcmEgbmnDsW9zIGRlIDAzIGEgMDcgYcOxb3MgZGUgZWRhZDwvaDM+DQogICAgICAgICAgICA8cCBhbGlnbj0ianVzdGlmeSI+PGJyPjxicj48c3Bhbj5TZSBkaXJpZ2UgdW4g4oCcUHJvZ3JhbWEgZGUgQWN0aXZpZGFkZXPigJ0gc8O6cGVyIHNhbm8geSBkaXZlcnRpZG8gcXVlIHNlIGVuZm9jYSBhY29yZGUgYSBsYSBlZGFkIHkgY2FwYWNpZGFkIGRlIG51ZXN0cm9zIHBhcnRpY2lwYW50ZXMsIG1pc21vIHF1ZSBzZSBlbmN1ZW50cmEgY29uZm9ybWFkbyBwb3IgZWwgc2lndWllbnRlIGNvbnRlbmlkbzoNCjxicj48YnI+DQoqIEJhaWxlcyAqPGJyPg0KKiBDYW50b3MgKjxicj4NCiogSnVlZ29zICo8YnI+DQoqIENvbmN1cnNvcyAqPGJyPg0KICAgICAgICAgICA8YnI+DQogICAgICAgICAgIDwvc3Bhbj4NCiAgICAgICAgICAgIA0KICAgICAgICAgICAgPC9wPg0K","PHAgYWxpZ249Imp1c3RpZnkiPjxiPkVsIFNlcnZpY2lvIGRlIGFuaW1hY2nDs24gaW5jbHV5ZTo8L2I+PGJyPjxicj48c3Bhbj4tIDMgaG9yYXMgZGUgY29udHJhdGFjacOzbjxicj4NCi0gRXZlbnRvIG11c2ljYWwgdG9kbyBlbCB0aWVtcG8uPGJyPg0KLSAzIEFuaW1hZG9yZXMuPGJyPg0KLSBQaW50YSBDYXJpdGFzICgyMCBtaW5zKS48YnI+DQotIEhvcmEgZGUgY29taWRhIChBcG95byBwYXJhIHNlcnZpciBlbCBsdW5jaCBkZSBsb3MgbmnDsW9zKS48YnI+DQotIERpdmVydGlkbyBQcm9ncmFtYSBkZSBBY3RpdmlkYWRlcy48YnI+DQotIFRhbGxlciBNYW51YWwgUmVjcmVhdGl2byAoQ29jaW5hIERlY29yYXRpdmEgbyBNYW51YWxpZGFkZXMpPGJyPg0KLSBEaXJpZ2ltb3MgbGEgcGFydGlkYSBkZSBQacOxYXRhIHkgUGFzdGVsIChzdW1pbmlzdHJhZG9zIHBvciBlbCBjbGllbnRlKS48YnI+DQotIDEwIHByZW1pb3MgdGlwbyBhZ3VpbmFsZG8uDQo8YnI+DQogICAgICAgICAgIDwvc3Bhbj4NCiAgICAgICAgICAgIA0KICAgICAgICAgICAgPC9wPg==",3100,"PGg0PlRyZXMgTWlsIENpZW4gUGVzb3MgMDAvMTAwIE1YTjwvaDQ+DQo8YnI+DQo8c21hbGw+DQpDdW90YSBkZSByZWN1cGVyYWNpw7NuIHF1ZSBzZSBvZnJlY2UgcGFyYSB1biBtwrR4aW1vIGRlIDQwIHBhcnRpY2lwYW50ZXMuIEVuIGNhc28gZGUgZXhjZWRlciBjb24gZWwgbsO6bWVybyBkZSBpbnZpdGFkb3MgKG5pw7FAcyksIHNlIHJlY29taWVuZGEgbGEgY29udHJhdGFjacOzbiBkZSB1biBBbmltYWRvciBhZGljaW9uYWwgcGFyYSB1bmEgbWVqb3IgYXRlbmNpw7NuIGEgbG9zIGludml0YWRvcy4gQ29zdG8gZGVsIEFuaW1hZG9yIGV4dHJhOiAkNTAwLg0KPGI+IChPcGNpb25hbCk8L2I+DQo8L3NtYWxsPg==")';

$insert2 = 'INSERT INTO `CatImagenes` (tCodPaquete,tArchivo) VALUES 
("pm","/galeria/jpg/pm-001/"),
("pm","/galeria/jpg/pm-002/"),
("pm","/galeria/jpg/pm-003/"),
("pm","/galeria/jpg/pm-004/"),
("pm","/galeria/jpg/pm-005/"),
("pm","/galeria/jpg/pm-006/"),
("pm","/galeria/jpg/pm-007/"),
("pm","/galeria/jpg/pm-008/"),
("pm","/galeria/jpg/pm-009/"),
("pm","/galeria/jpg/pm-010/"),
("pm","/galeria/jpg/pm-011/"),
("pm","/galeria/jpg/pm-012/"),
("pm","/galeria/jpg/pm-013/"),
("pm","/galeria/jpg/pm-014/");';

$rs1 = mysql_query($insert);
$rs2 = mysql_query($insert2);

if($rs1){ print 'Consulta 1 ejecutada<br>'; }
if($rs2){ print 'Consulta 2 ejecutada<br>'; }
?>
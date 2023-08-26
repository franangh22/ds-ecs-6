<?php

require_once 'modelo/DatosOperacion.php';
require_once 'modelo/Oportunidad.php';
require_once 'modelo/Persona.php';
require_once 'modelo/RespuestaOportunidad.php';

header('Content-Type: application/json');

$DO = new DatosOpeacion();
$DO->MontoSolicitado = 500000;
$DO->Linea = 504;
$DO->CantidadCuotas = 12;
$DO->TasaEfectivaMensual = 2.9589;
$DO->CuotaPromedio = 53503.08;
$DO->TasaNominalAnual = 36;
$DO->CostoFinancieroTotal = 56.55;

$PE = new Persona();
$PE->Nombres = 'Pedro rodriguez';
$PE->Sexo = 'F';
$PE->Documento = 123123;
$PE->Email = 'aaaa@aaaa.com.ar';
$PE->Celular = 123456;
$PE->TelefonoAlternativo = 123456;

$Oport = new Oportunidad();
$Oport->Persona = $PE;
$Oport->DatosOpeacion = $DO;
$Oport->SmsConsultaId = '17654293-27258197726';
$Oport->idValidatorId = 893;
$Oport->MotorSolaFirmaId = 8870;

$ResOport = new RespuestaOportunidad();
$ResOport->Oportunidad = $Oport;
$ResOport->IsOk = true;

echo json_encode($ResOport);
<?php
$core = __DIR__ . '/aliyun-php-sdk-core';
$sts = __DIR__ . '/aliyun-php-sdk-sts';
$mapping = array(
  // Base
  'AcsRequest'          => $core . '/AcsRequest.php',
  'AcsResponse'         => $core . '/AcsResponse.php',
  'DefaultAcsClient'    => $core . '/DefaultAcsClient.php',
  'IAcsClient'          => $core . '/IAcsClient.php',
  'RoaAcsRequest'       => $core . '/RoaAcsRequest.php',
  'RpcAcsRequest'       => $core . '/RpcAcsRequest.php',
  // Auth
  'Credential'          => $core . '/Auth/Credential.php',
  'ISigner'             => $core . '/Auth/ISigner.php',
  'ShaHmac1Signer'      => $core . '/Auth/ShaHmac1Signer.php',
  'ShaHmac256Signer'    => $core . '/Auth/ShaHmac256Signer.php',
  // Exception
  'ClientException'     => $core . '/Exception/ClientException.php',
  'ServerException'     => $core . '/Exception/ServerException.php',
  // Http
  'HttpHelper'          => $core . '/Http/HttpHelper.php',
  'HttpResponse'        => $core . '/Http/HttpResponse.php',
  // Profile
  'DefaultProfile'      => $core . '/Profile/DefaultProfile.php',
  'IClientProfile'      => $core . '/Profile/IClientProfile.php',
  // Region
  'Endpoint'            => $core . '/Regions/Endpoint.php',
  'EndpointProvider'    => $core . '/Regions/EndpointProvider.php',
  'ProductDomain'       => $core . '/Regions/ProductDomain.php',

  // STS
  'Sts\Request\V20150401\GetFederationTokenRequest' => $sts . '/Sts/Request/V20150401/GetFederationTokenRequest.php',
);

spl_autoload_register(function ($class) use ($mapping) {
  if (isset($mapping[$class])) {
    require $mapping[$class];
  }
}, TRUE);

// From Config.php
// -----------------------------------------------
require $core . '/Regions/EndpointConfig.php';
//config http proxy
define('ENABLE_HTTP_PROXY', FALSE);
define('HTTP_PROXY_IP', '127.0.0.1');
define('HTTP_PROXY_PORT', '8888');
// -----------------------------------------------
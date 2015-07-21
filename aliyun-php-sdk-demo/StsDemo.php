<?php
include_once '../aliyun-php-sdk-core/Config.php';
use Sts\Request\V20150401 as Sts;

// 你需要操作的资源所在的region
$iClientProfile = DefaultProfile::getProfile("cn-hangzhou", "<your accesskeyid>", "<your accesskeysecret>");
$client = new DefaultAcsClient($iClientProfile);

// policy编写参考oss api文档授权访问章节
$policy = "{\n" .
                "    \"Version\": \"1\",\n" .
                "    \"Statement\": [\n" .
                "      {\n" .
                "        \"Effect\": \"Allow\",\n" .
                "        \"Action\": [\n" .
                "             \"oss:GetObject\",\n" .
                "             \"oss:PutObject\"\n" .
                "        ],\n" .
                "        \"Resource\": \"acs:oss:*:*:*/*\"\n" .
                "      }\n" .
                "    ]\n" .
                "  }";
$request = new Sts\GetFederationTokenRequest();
$request->setStsVersion("2015-04-01");
$request->setName("oldratlee");
$request->setPolicy($policy);
$request->setDurationSeconds(3600);
$response = $client->doAction($request);
print_r("\r\n");
print_r($response);

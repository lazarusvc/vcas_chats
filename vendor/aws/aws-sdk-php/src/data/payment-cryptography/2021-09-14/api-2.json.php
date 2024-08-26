<?php
// This file was auto-generated from sdk-root/src/data/payment-cryptography/2021-09-14/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2021-09-14', 'endpointPrefix' => 'controlplane.payment-cryptography', 'jsonVersion' => '1.0', 'protocol' => 'json', 'serviceFullName' => 'Payment Cryptography Control Plane', 'serviceId' => 'Payment Cryptography', 'signatureVersion' => 'v4', 'signingName' => 'payment-cryptography', 'targetPrefix' => 'PaymentCryptographyControlPlane', 'uid' => 'payment-cryptography-2021-09-14', ], 'operations' => [ 'CreateAlias' => [ 'name' => 'CreateAlias', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateAliasInput', ], 'output' => [ 'shape' => 'CreateAliasOutput', ], 'errors' => [ [ 'shape' => 'ServiceQuotaExceededException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], ], 'idempotent' => true, ], 'CreateKey' => [ 'name' => 'CreateKey', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateKeyInput', ], 'output' => [ 'shape' => 'CreateKeyOutput', ], 'errors' => [ [ 'shape' => 'ServiceQuotaExceededException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], ], ], 'DeleteAlias' => [ 'name' => 'DeleteAlias', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteAliasInput', ], 'output' => [ 'shape' => 'DeleteAliasOutput', ], 'errors' => [ [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], ], 'idempotent' => true, ], 'DeleteKey' => [ 'name' => 'DeleteKey', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteKeyInput', ], 'output' => [ 'shape' => 'DeleteKeyOutput', ], 'errors' => [ [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], ], 'idempotent' => true, ], 'ExportKey' => [ 'name' => 'ExportKey', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ExportKeyInput', ], 'output' => [ 'shape' => 'ExportKeyOutput', ], 'errors' => [ [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], ], ], 'GetAlias' => [ 'name' => 'GetAlias', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetAliasInput', ], 'output' => [ 'shape' => 'GetAliasOutput', ], 'errors' => [ [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], ], ], 'GetKey' => [ 'name' => 'GetKey', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetKeyInput', ], 'output' => [ 'shape' => 'GetKeyOutput', ], 'errors' => [ [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], ], ], 'GetParametersForExport' => [ 'name' => 'GetParametersForExport', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetParametersForExportInput', ], 'output' => [ 'shape' => 'GetParametersForExportOutput', ], 'errors' => [ [ 'shape' => 'ServiceQuotaExceededException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], ], ], 'GetParametersForImport' => [ 'name' => 'GetParametersForImport', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetParametersForImportInput', ], 'output' => [ 'shape' => 'GetParametersForImportOutput', ], 'errors' => [ [ 'shape' => 'ServiceQuotaExceededException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], ], ], 'GetPublicKeyCertificate' => [ 'name' => 'GetPublicKeyCertificate', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetPublicKeyCertificateInput', ], 'output' => [ 'shape' => 'GetPublicKeyCertificateOutput', ], 'errors' => [ [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], ], ], 'ImportKey' => [ 'name' => 'ImportKey', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ImportKeyInput', ], 'output' => [ 'shape' => 'ImportKeyOutput', ], 'errors' => [ [ 'shape' => 'ServiceQuotaExceededException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], ], ], 'ListAliases' => [ 'name' => 'ListAliases', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListAliasesInput', ], 'output' => [ 'shape' => 'ListAliasesOutput', ], 'errors' => [ [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], ], ], 'ListKeys' => [ 'name' => 'ListKeys', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListKeysInput', ], 'output' => [ 'shape' => 'ListKeysOutput', ], 'errors' => [ [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], ], ], 'ListTagsForResource' => [ 'name' => 'ListTagsForResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListTagsForResourceInput', ], 'output' => [ 'shape' => 'ListTagsForResourceOutput', ], 'errors' => [ [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], ], ], 'RestoreKey' => [ 'name' => 'RestoreKey', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'RestoreKeyInput', ], 'output' => [ 'shape' => 'RestoreKeyOutput', ], 'errors' => [ [ 'shape' => 'ServiceQuotaExceededException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], ], ], 'StartKeyUsage' => [ 'name' => 'StartKeyUsage', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'StartKeyUsageInput', ], 'output' => [ 'shape' => 'StartKeyUsageOutput', ], 'errors' => [ [ 'shape' => 'ServiceQuotaExceededException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], ], ], 'StopKeyUsage' => [ 'name' => 'StopKeyUsage', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'StopKeyUsageInput', ], 'output' => [ 'shape' => 'StopKeyUsageOutput', ], 'errors' => [ [ 'shape' => 'ServiceQuotaExceededException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], ], ], 'TagResource' => [ 'name' => 'TagResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'TagResourceInput', ], 'output' => [ 'shape' => 'TagResourceOutput', ], 'errors' => [ [ 'shape' => 'ServiceQuotaExceededException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], ], ], 'UntagResource' => [ 'name' => 'UntagResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UntagResourceInput', ], 'output' => [ 'shape' => 'UntagResourceOutput', ], 'errors' => [ [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], ], ], 'UpdateAlias' => [ 'name' => 'UpdateAlias', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UpdateAliasInput', ], 'output' => [ 'shape' => 'UpdateAliasOutput', ], 'errors' => [ [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], ], ], ], 'shapes' => [ 'AccessDeniedException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'Alias' => [ 'type' => 'structure', 'required' => [ 'AliasName', ], 'members' => [ 'AliasName' => [ 'shape' => 'AliasName', ], 'KeyArn' => [ 'shape' => 'KeyArn', ], ], ], 'AliasName' => [ 'type' => 'string', 'max' => 256, 'min' => 7, 'pattern' => 'alias/[a-zA-Z0-9/_-]+', ], 'Aliases' => [ 'type' => 'list', 'member' => [ 'shape' => 'Alias', ], ], 'Boolean' => [ 'type' => 'boolean', 'box' => true, ], 'CertificateType' => [ 'type' => 'string', 'max' => 32768, 'min' => 1, 'pattern' => '[^\\[;\\]<>]+', 'sensitive' => true, ], 'ConflictException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'CreateAliasInput' => [ 'type' => 'structure', 'required' => [ 'AliasName', ], 'members' => [ 'AliasName' => [ 'shape' => 'AliasName', ], 'KeyArn' => [ 'shape' => 'KeyArn', ], ], ], 'CreateAliasOutput' => [ 'type' => 'structure', 'required' => [ 'Alias', ], 'members' => [ 'Alias' => [ 'shape' => 'Alias', ], ], ], 'CreateKeyInput' => [ 'type' => 'structure', 'required' => [ 'KeyAttributes', 'Exportable', ], 'members' => [ 'KeyAttributes' => [ 'shape' => 'KeyAttributes', ], 'KeyCheckValueAlgorithm' => [ 'shape' => 'KeyCheckValueAlgorithm', ], 'Exportable' => [ 'shape' => 'Boolean', ], 'Enabled' => [ 'shape' => 'Boolean', ], 'Tags' => [ 'shape' => 'Tags', ], ], ], 'CreateKeyOutput' => [ 'type' => 'structure', 'required' => [ 'Key', ], 'members' => [ 'Key' => [ 'shape' => 'Key', ], ], ], 'DeleteAliasInput' => [ 'type' => 'structure', 'required' => [ 'AliasName', ], 'members' => [ 'AliasName' => [ 'shape' => 'AliasName', ], ], ], 'DeleteAliasOutput' => [ 'type' => 'structure', 'members' => [], ], 'DeleteKeyInput' => [ 'type' => 'structure', 'required' => [ 'KeyIdentifier', ], 'members' => [ 'KeyIdentifier' => [ 'shape' => 'KeyArnOrKeyAliasType', ], 'DeleteKeyInDays' => [ 'shape' => 'DeleteKeyInputDeleteKeyInDaysInteger', ], ], ], 'DeleteKeyInputDeleteKeyInDaysInteger' => [ 'type' => 'integer', 'box' => true, 'max' => 180, 'min' => 3, ], 'DeleteKeyOutput' => [ 'type' => 'structure', 'required' => [ 'Key', ], 'members' => [ 'Key' => [ 'shape' => 'Key', ], ], ], 'ExportAttributes' => [ 'type' => 'structure', 'members' => [ 'ExportDukptInitialKey' => [ 'shape' => 'ExportDukptInitialKey', ], 'KeyCheckValueAlgorithm' => [ 'shape' => 'KeyCheckValueAlgorithm', ], ], ], 'ExportDukptInitialKey' => [ 'type' => 'structure', 'required' => [ 'KeySerialNumber', ], 'members' => [ 'KeySerialNumber' => [ 'shape' => 'HexLength20Or24', ], ], ], 'ExportKeyCryptogram' => [ 'type' => 'structure', 'required' => [ 'CertificateAuthorityPublicKeyIdentifier', 'WrappingKeyCertificate', ], 'members' => [ 'CertificateAuthorityPublicKeyIdentifier' => [ 'shape' => 'KeyArnOrKeyAliasType', ], 'WrappingKeyCertificate' => [ 'shape' => 'CertificateType', ], 'WrappingSpec' => [ 'shape' => 'WrappingKeySpec', ], ], ], 'ExportKeyInput' => [ 'type' => 'structure', 'required' => [ 'KeyMaterial', 'ExportKeyIdentifier', ], 'members' => [ 'KeyMaterial' => [ 'shape' => 'ExportKeyMaterial', ], 'ExportKeyIdentifier' => [ 'shape' => 'KeyArnOrKeyAliasType', ], 'ExportAttributes' => [ 'shape' => 'ExportAttributes', ], ], ], 'ExportKeyMaterial' => [ 'type' => 'structure', 'members' => [ 'Tr31KeyBlock' => [ 'shape' => 'ExportTr31KeyBlock', ], 'Tr34KeyBlock' => [ 'shape' => 'ExportTr34KeyBlock', ], 'KeyCryptogram' => [ 'shape' => 'ExportKeyCryptogram', ], ], 'union' => true, ], 'ExportKeyOutput' => [ 'type' => 'structure', 'members' => [ 'WrappedKey' => [ 'shape' => 'WrappedKey', ], ], ], 'ExportTokenId' => [ 'type' => 'string', 'pattern' => 'export-token-[0-9a-zA-Z]{16,64}', ], 'ExportTr31KeyBlock' => [ 'type' => 'structure', 'required' => [ 'WrappingKeyIdentifier', ], 'members' => [ 'WrappingKeyIdentifier' => [ 'shape' => 'KeyArnOrKeyAliasType', ], 'KeyBlockHeaders' => [ 'shape' => 'KeyBlockHeaders', ], ], ], 'ExportTr34KeyBlock' => [ 'type' => 'structure', 'required' => [ 'CertificateAuthorityPublicKeyIdentifier', 'WrappingKeyCertificate', 'ExportToken', 'KeyBlockFormat', ], 'members' => [ 'CertificateAuthorityPublicKeyIdentifier' => [ 'shape' => 'KeyArnOrKeyAliasType', ], 'WrappingKeyCertificate' => [ 'shape' => 'CertificateType', ], 'ExportToken' => [ 'shape' => 'ExportTokenId', ], 'KeyBlockFormat' => [ 'shape' => 'Tr34KeyBlockFormat', ], 'RandomNonce' => [ 'shape' => 'HexLength16', ], 'KeyBlockHeaders' => [ 'shape' => 'KeyBlockHeaders', ], ], ], 'GetAliasInput' => [ 'type' => 'structure', 'required' => [ 'AliasName', ], 'members' => [ 'AliasName' => [ 'shape' => 'AliasName', ], ], ], 'GetAliasOutput' => [ 'type' => 'structure', 'required' => [ 'Alias', ], 'members' => [ 'Alias' => [ 'shape' => 'Alias', ], ], ], 'GetKeyInput' => [ 'type' => 'structure', 'required' => [ 'KeyIdentifier', ], 'members' => [ 'KeyIdentifier' => [ 'shape' => 'KeyArnOrKeyAliasType', ], ], ], 'GetKeyOutput' => [ 'type' => 'structure', 'required' => [ 'Key', ], 'members' => [ 'Key' => [ 'shape' => 'Key', ], ], ], 'GetParametersForExportInput' => [ 'type' => 'structure', 'required' => [ 'KeyMaterialType', 'SigningKeyAlgorithm', ], 'members' => [ 'KeyMaterialType' => [ 'shape' => 'KeyMaterialType', ], 'SigningKeyAlgorithm' => [ 'shape' => 'KeyAlgorithm', ], ], ], 'GetParametersForExportOutput' => [ 'type' => 'structure', 'required' => [ 'SigningKeyCertificate', 'SigningKeyCertificateChain', 'SigningKeyAlgorithm', 'ExportToken', 'ParametersValidUntilTimestamp', ], 'members' => [ 'SigningKeyCertificate' => [ 'shape' => 'CertificateType', ], 'SigningKeyCertificateChain' => [ 'shape' => 'CertificateType', ], 'SigningKeyAlgorithm' => [ 'shape' => 'KeyAlgorithm', ], 'ExportToken' => [ 'shape' => 'ExportTokenId', ], 'ParametersValidUntilTimestamp' => [ 'shape' => 'Timestamp', ], ], ], 'GetParametersForImportInput' => [ 'type' => 'structure', 'required' => [ 'KeyMaterialType', 'WrappingKeyAlgorithm', ], 'members' => [ 'KeyMaterialType' => [ 'shape' => 'KeyMaterialType', ], 'WrappingKeyAlgorithm' => [ 'shape' => 'KeyAlgorithm', ], ], ], 'GetParametersForImportOutput' => [ 'type' => 'structure', 'required' => [ 'WrappingKeyCertificate', 'WrappingKeyCertificateChain', 'WrappingKeyAlgorithm', 'ImportToken', 'ParametersValidUntilTimestamp', ], 'members' => [ 'WrappingKeyCertificate' => [ 'shape' => 'CertificateType', ], 'WrappingKeyCertificateChain' => [ 'shape' => 'CertificateType', ], 'WrappingKeyAlgorithm' => [ 'shape' => 'KeyAlgorithm', ], 'ImportToken' => [ 'shape' => 'ImportTokenId', ], 'ParametersValidUntilTimestamp' => [ 'shape' => 'Timestamp', ], ], ], 'GetPublicKeyCertificateInput' => [ 'type' => 'structure', 'required' => [ 'KeyIdentifier', ], 'members' => [ 'KeyIdentifier' => [ 'shape' => 'KeyArnOrKeyAliasType', ], ], ], 'GetPublicKeyCertificateOutput' => [ 'type' => 'structure', 'required' => [ 'KeyCertificate', 'KeyCertificateChain', ], 'members' => [ 'KeyCertificate' => [ 'shape' => 'CertificateType', ], 'KeyCertificateChain' => [ 'shape' => 'CertificateType', ], ], ], 'HexLength16' => [ 'type' => 'string', 'max' => 16, 'min' => 16, 'pattern' => '[0-9A-F]+', ], 'HexLength20Or24' => [ 'type' => 'string', 'max' => 24, 'min' => 20, 'pattern' => '[0-9A-F]{20}$|^[0-9A-F]{24}', ], 'ImportKeyCryptogram' => [ 'type' => 'structure', 'required' => [ 'KeyAttributes', 'Exportable', 'WrappedKeyCryptogram', 'ImportToken', ], 'members' => [ 'KeyAttributes' => [ 'shape' => 'KeyAttributes', ], 'Exportable' => [ 'shape' => 'Boolean', ], 'WrappedKeyCryptogram' => [ 'shape' => 'WrappedKeyCryptogram', ], 'ImportToken' => [ 'shape' => 'ImportTokenId', ], 'WrappingSpec' => [ 'shape' => 'WrappingKeySpec', ], ], ], 'ImportKeyInput' => [ 'type' => 'structure', 'required' => [ 'KeyMaterial', ], 'members' => [ 'KeyMaterial' => [ 'shape' => 'ImportKeyMaterial', ], 'KeyCheckValueAlgorithm' => [ 'shape' => 'KeyCheckValueAlgorithm', ], 'Enabled' => [ 'shape' => 'Boolean', ], 'Tags' => [ 'shape' => 'Tags', ], ], ], 'ImportKeyMaterial' => [ 'type' => 'structure', 'members' => [ 'RootCertificatePublicKey' => [ 'shape' => 'RootCertificatePublicKey', ], 'TrustedCertificatePublicKey' => [ 'shape' => 'TrustedCertificatePublicKey', ], 'Tr31KeyBlock' => [ 'shape' => 'ImportTr31KeyBlock', ], 'Tr34KeyBlock' => [ 'shape' => 'ImportTr34KeyBlock', ], 'KeyCryptogram' => [ 'shape' => 'ImportKeyCryptogram', ], ], 'union' => true, ], 'ImportKeyOutput' => [ 'type' => 'structure', 'required' => [ 'Key', ], 'members' => [ 'Key' => [ 'shape' => 'Key', ], ], ], 'ImportTokenId' => [ 'type' => 'string', 'pattern' => 'import-token-[0-9a-zA-Z]{16,64}', ], 'ImportTr31KeyBlock' => [ 'type' => 'structure', 'required' => [ 'WrappingKeyIdentifier', 'WrappedKeyBlock', ], 'members' => [ 'WrappingKeyIdentifier' => [ 'shape' => 'KeyArnOrKeyAliasType', ], 'WrappedKeyBlock' => [ 'shape' => 'Tr31WrappedKeyBlock', ], ], ], 'ImportTr34KeyBlock' => [ 'type' => 'structure', 'required' => [ 'CertificateAuthorityPublicKeyIdentifier', 'SigningKeyCertificate', 'ImportToken', 'WrappedKeyBlock', 'KeyBlockFormat', ], 'members' => [ 'CertificateAuthorityPublicKeyIdentifier' => [ 'shape' => 'KeyArnOrKeyAliasType', ], 'SigningKeyCertificate' => [ 'shape' => 'CertificateType', ], 'ImportToken' => [ 'shape' => 'ImportTokenId', ], 'WrappedKeyBlock' => [ 'shape' => 'Tr34WrappedKeyBlock', ], 'KeyBlockFormat' => [ 'shape' => 'Tr34KeyBlockFormat', ], 'RandomNonce' => [ 'shape' => 'HexLength16', ], ], ], 'InternalServerException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'exception' => true, 'fault' => true, ], 'Key' => [ 'type' => 'structure', 'required' => [ 'KeyArn', 'KeyAttributes', 'KeyCheckValue', 'KeyCheckValueAlgorithm', 'Enabled', 'Exportable', 'KeyState', 'KeyOrigin', 'CreateTimestamp', ], 'members' => [ 'KeyArn' => [ 'shape' => 'KeyArn', ], 'KeyAttributes' => [ 'shape' => 'KeyAttributes', ], 'KeyCheckValue' => [ 'shape' => 'KeyCheckValue', ], 'KeyCheckValueAlgorithm' => [ 'shape' => 'KeyCheckValueAlgorithm', ], 'Enabled' => [ 'shape' => 'Boolean', ], 'Exportable' => [ 'shape' => 'Boolean', ], 'KeyState' => [ 'shape' => 'KeyState', ], 'KeyOrigin' => [ 'shape' => 'KeyOrigin', ], 'CreateTimestamp' => [ 'shape' => 'Timestamp', ], 'UsageStartTimestamp' => [ 'shape' => 'Timestamp', ], 'UsageStopTimestamp' => [ 'shape' => 'Timestamp', ], 'DeletePendingTimestamp' => [ 'shape' => 'Timestamp', ], 'DeleteTimestamp' => [ 'shape' => 'Timestamp', ], ], ], 'KeyAlgorithm' => [ 'type' => 'string', 'enum' => [ 'TDES_2KEY', 'TDES_3KEY', 'AES_128', 'AES_192', 'AES_256', 'RSA_2048', 'RSA_3072', 'RSA_4096', ], ], 'KeyArn' => [ 'type' => 'string', 'max' => 150, 'min' => 70, 'pattern' => 'arn:aws:payment-cryptography:[a-z]{2}-[a-z]{1,16}-[0-9]+:[0-9]{12}:key/[0-9a-zA-Z]{16,64}', ], 'KeyArnOrKeyAliasType' => [ 'type' => 'string', 'max' => 322, 'min' => 7, 'pattern' => 'arn:aws:payment-cryptography:[a-z]{2}-[a-z]{1,16}-[0-9]+:[0-9]{12}:(key/[0-9a-zA-Z]{16,64}|alias/[a-zA-Z0-9/_-]+)$|^alias/[a-zA-Z0-9/_-]+', ], 'KeyAttributes' => [ 'type' => 'structure', 'required' => [ 'KeyUsage', 'KeyClass', 'KeyAlgorithm', 'KeyModesOfUse', ], 'members' => [ 'KeyUsage' => [ 'shape' => 'KeyUsage', ], 'KeyClass' => [ 'shape' => 'KeyClass', ], 'KeyAlgorithm' => [ 'shape' => 'KeyAlgorithm', ], 'KeyModesOfUse' => [ 'shape' => 'KeyModesOfUse', ], ], ], 'KeyBlockHeaders' => [ 'type' => 'structure', 'members' => [ 'KeyModesOfUse' => [ 'shape' => 'KeyModesOfUse', ], 'KeyExportability' => [ 'shape' => 'KeyExportability', ], 'KeyVersion' => [ 'shape' => 'KeyVersion', ], 'OptionalBlocks' => [ 'shape' => 'OptionalBlocks', ], ], ], 'KeyCheckValue' => [ 'type' => 'string', 'max' => 16, 'min' => 4, 'pattern' => '[0-9a-fA-F]+', ], 'KeyCheckValueAlgorithm' => [ 'type' => 'string', 'enum' => [ 'CMAC', 'ANSI_X9_24', ], ], 'KeyClass' => [ 'type' => 'string', 'enum' => [ 'SYMMETRIC_KEY', 'ASYMMETRIC_KEY_PAIR', 'PRIVATE_KEY', 'PUBLIC_KEY', ], ], 'KeyExportability' => [ 'type' => 'string', 'enum' => [ 'EXPORTABLE', 'NON_EXPORTABLE', 'SENSITIVE', ], ], 'KeyMaterial' => [ 'type' => 'string', 'max' => 16384, 'min' => 48, 'sensitive' => true, ], 'KeyMaterialType' => [ 'type' => 'string', 'enum' => [ 'TR34_KEY_BLOCK', 'TR31_KEY_BLOCK', 'ROOT_PUBLIC_KEY_CERTIFICATE', 'TRUSTED_PUBLIC_KEY_CERTIFICATE', 'KEY_CRYPTOGRAM', ], ], 'KeyModesOfUse' => [ 'type' => 'structure', 'members' => [ 'Encrypt' => [ 'shape' => 'PrimitiveBoolean', ], 'Decrypt' => [ 'shape' => 'PrimitiveBoolean', ], 'Wrap' => [ 'shape' => 'PrimitiveBoolean', ], 'Unwrap' => [ 'shape' => 'PrimitiveBoolean', ], 'Generate' => [ 'shape' => 'PrimitiveBoolean', ], 'Sign' => [ 'shape' => 'PrimitiveBoolean', ], 'Verify' => [ 'shape' => 'PrimitiveBoolean', ], 'DeriveKey' => [ 'shape' => 'PrimitiveBoolean', ], 'NoRestrictions' => [ 'shape' => 'PrimitiveBoolean', ], ], ], 'KeyOrigin' => [ 'type' => 'string', 'enum' => [ 'EXTERNAL', 'AWS_PAYMENT_CRYPTOGRAPHY', ], ], 'KeyState' => [ 'type' => 'string', 'enum' => [ 'CREATE_IN_PROGRESS', 'CREATE_COMPLETE', 'DELETE_PENDING', 'DELETE_COMPLETE', ], ], 'KeySummary' => [ 'type' => 'structure', 'required' => [ 'KeyArn', 'KeyState', 'KeyAttributes', 'KeyCheckValue', 'Exportable', 'Enabled', ], 'members' => [ 'KeyArn' => [ 'shape' => 'KeyArn', ], 'KeyState' => [ 'shape' => 'KeyState', ], 'KeyAttributes' => [ 'shape' => 'KeyAttributes', ], 'KeyCheckValue' => [ 'shape' => 'KeyCheckValue', ], 'Exportable' => [ 'shape' => 'Boolean', ], 'Enabled' => [ 'shape' => 'Boolean', ], ], ], 'KeySummaryList' => [ 'type' => 'list', 'member' => [ 'shape' => 'KeySummary', ], ], 'KeyUsage' => [ 'type' => 'string', 'enum' => [ 'TR31_B0_BASE_DERIVATION_KEY', 'TR31_C0_CARD_VERIFICATION_KEY', 'TR31_D0_SYMMETRIC_DATA_ENCRYPTION_KEY', 'TR31_D1_ASYMMETRIC_KEY_FOR_DATA_ENCRYPTION', 'TR31_E0_EMV_MKEY_APP_CRYPTOGRAMS', 'TR31_E1_EMV_MKEY_CONFIDENTIALITY', 'TR31_E2_EMV_MKEY_INTEGRITY', 'TR31_E4_EMV_MKEY_DYNAMIC_NUMBERS', 'TR31_E5_EMV_MKEY_CARD_PERSONALIZATION', 'TR31_E6_EMV_MKEY_OTHER', 'TR31_K0_KEY_ENCRYPTION_KEY', 'TR31_K1_KEY_BLOCK_PROTECTION_KEY', 'TR31_K3_ASYMMETRIC_KEY_FOR_KEY_AGREEMENT', 'TR31_M3_ISO_9797_3_MAC_KEY', 'TR31_M1_ISO_9797_1_MAC_KEY', 'TR31_M6_ISO_9797_5_CMAC_KEY', 'TR31_M7_HMAC_KEY', 'TR31_P0_PIN_ENCRYPTION_KEY', 'TR31_P1_PIN_GENERATION_KEY', 'TR31_S0_ASYMMETRIC_KEY_FOR_DIGITAL_SIGNATURE', 'TR31_V1_IBM3624_PIN_VERIFICATION_KEY', 'TR31_V2_VISA_PIN_VERIFICATION_KEY', 'TR31_K2_TR34_ASYMMETRIC_KEY', ], ], 'KeyVersion' => [ 'type' => 'string', 'max' => 2, 'min' => 2, 'pattern' => '[0-9A-Z]{2}+', ], 'ListAliasesInput' => [ 'type' => 'structure', 'members' => [ 'NextToken' => [ 'shape' => 'NextToken', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], ], ], 'ListAliasesOutput' => [ 'type' => 'structure', 'required' => [ 'Aliases', ], 'members' => [ 'Aliases' => [ 'shape' => 'Aliases', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListKeysInput' => [ 'type' => 'structure', 'members' => [ 'KeyState' => [ 'shape' => 'KeyState', ], 'NextToken' => [ 'shape' => 'NextToken', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], ], ], 'ListKeysOutput' => [ 'type' => 'structure', 'required' => [ 'Keys', ], 'members' => [ 'Keys' => [ 'shape' => 'KeySummaryList', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListTagsForResourceInput' => [ 'type' => 'structure', 'required' => [ 'ResourceArn', ], 'members' => [ 'ResourceArn' => [ 'shape' => 'ResourceArn', ], 'NextToken' => [ 'shape' => 'NextToken', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], ], ], 'ListTagsForResourceOutput' => [ 'type' => 'structure', 'required' => [ 'Tags', ], 'members' => [ 'Tags' => [ 'shape' => 'Tags', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'MaxResults' => [ 'type' => 'integer', 'box' => true, 'max' => 100, 'min' => 1, ], 'NextToken' => [ 'type' => 'string', 'max' => 8192, 'min' => 1, ], 'OptionalBlockId' => [ 'type' => 'string', 'max' => 2, 'min' => 2, 'pattern' => '[0-9A-Z]{2}+', 'sensitive' => true, ], 'OptionalBlockValue' => [ 'type' => 'string', 'max' => 108, 'min' => 1, 'pattern' => '[0-9A-Z]+', 'sensitive' => true, ], 'OptionalBlocks' => [ 'type' => 'map', 'key' => [ 'shape' => 'OptionalBlockId', ], 'value' => [ 'shape' => 'OptionalBlockValue', ], ], 'PrimitiveBoolean' => [ 'type' => 'boolean', ], 'ResourceArn' => [ 'type' => 'string', 'max' => 150, 'min' => 70, 'pattern' => 'arn:aws:payment-cryptography:[a-z]{2}-[a-z]{1,16}-[0-9]+:[0-9]{12}:key/[0-9a-zA-Z]{16,64}', ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'members' => [ 'ResourceId' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'RestoreKeyInput' => [ 'type' => 'structure', 'required' => [ 'KeyIdentifier', ], 'members' => [ 'KeyIdentifier' => [ 'shape' => 'KeyArnOrKeyAliasType', ], ], ], 'RestoreKeyOutput' => [ 'type' => 'structure', 'required' => [ 'Key', ], 'members' => [ 'Key' => [ 'shape' => 'Key', ], ], ], 'RootCertificatePublicKey' => [ 'type' => 'structure', 'required' => [ 'KeyAttributes', 'PublicKeyCertificate', ], 'members' => [ 'KeyAttributes' => [ 'shape' => 'KeyAttributes', ], 'PublicKeyCertificate' => [ 'shape' => 'CertificateType', ], ], ], 'ServiceQuotaExceededException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'ServiceUnavailableException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'exception' => true, 'fault' => true, ], 'StartKeyUsageInput' => [ 'type' => 'structure', 'required' => [ 'KeyIdentifier', ], 'members' => [ 'KeyIdentifier' => [ 'shape' => 'KeyArnOrKeyAliasType', ], ], ], 'StartKeyUsageOutput' => [ 'type' => 'structure', 'required' => [ 'Key', ], 'members' => [ 'Key' => [ 'shape' => 'Key', ], ], ], 'StopKeyUsageInput' => [ 'type' => 'structure', 'required' => [ 'KeyIdentifier', ], 'members' => [ 'KeyIdentifier' => [ 'shape' => 'KeyArnOrKeyAliasType', ], ], ], 'StopKeyUsageOutput' => [ 'type' => 'structure', 'required' => [ 'Key', ], 'members' => [ 'Key' => [ 'shape' => 'Key', ], ], ], 'String' => [ 'type' => 'string', ], 'Tag' => [ 'type' => 'structure', 'required' => [ 'Key', ], 'members' => [ 'Key' => [ 'shape' => 'TagKey', ], 'Value' => [ 'shape' => 'TagValue', ], ], ], 'TagKey' => [ 'type' => 'string', 'max' => 128, 'min' => 1, ], 'TagKeys' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagKey', ], 'max' => 200, 'min' => 0, ], 'TagResourceInput' => [ 'type' => 'structure', 'required' => [ 'ResourceArn', 'Tags', ], 'members' => [ 'ResourceArn' => [ 'shape' => 'ResourceArn', ], 'Tags' => [ 'shape' => 'Tags', ], ], ], 'TagResourceOutput' => [ 'type' => 'structure', 'members' => [], ], 'TagValue' => [ 'type' => 'string', 'max' => 256, 'min' => 0, ], 'Tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], 'max' => 200, 'min' => 0, ], 'ThrottlingException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'Timestamp' => [ 'type' => 'timestamp', ], 'Tr31WrappedKeyBlock' => [ 'type' => 'string', 'max' => 9984, 'min' => 56, 'pattern' => '[0-9A-Z]+', ], 'Tr34KeyBlockFormat' => [ 'type' => 'string', 'enum' => [ 'X9_TR34_2012', ], ], 'Tr34WrappedKeyBlock' => [ 'type' => 'string', 'max' => 4096, 'min' => 2, 'pattern' => '[0-9A-F]+', ], 'TrustedCertificatePublicKey' => [ 'type' => 'structure', 'required' => [ 'KeyAttributes', 'PublicKeyCertificate', 'CertificateAuthorityPublicKeyIdentifier', ], 'members' => [ 'KeyAttributes' => [ 'shape' => 'KeyAttributes', ], 'PublicKeyCertificate' => [ 'shape' => 'CertificateType', ], 'CertificateAuthorityPublicKeyIdentifier' => [ 'shape' => 'KeyArnOrKeyAliasType', ], ], ], 'UntagResourceInput' => [ 'type' => 'structure', 'required' => [ 'ResourceArn', 'TagKeys', ], 'members' => [ 'ResourceArn' => [ 'shape' => 'ResourceArn', ], 'TagKeys' => [ 'shape' => 'TagKeys', ], ], ], 'UntagResourceOutput' => [ 'type' => 'structure', 'members' => [], ], 'UpdateAliasInput' => [ 'type' => 'structure', 'required' => [ 'AliasName', ], 'members' => [ 'AliasName' => [ 'shape' => 'AliasName', ], 'KeyArn' => [ 'shape' => 'KeyArn', ], ], ], 'UpdateAliasOutput' => [ 'type' => 'structure', 'required' => [ 'Alias', ], 'members' => [ 'Alias' => [ 'shape' => 'Alias', ], ], ], 'ValidationException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'WrappedKey' => [ 'type' => 'structure', 'required' => [ 'WrappingKeyArn', 'WrappedKeyMaterialFormat', 'KeyMaterial', ], 'members' => [ 'WrappingKeyArn' => [ 'shape' => 'KeyArn', ], 'WrappedKeyMaterialFormat' => [ 'shape' => 'WrappedKeyMaterialFormat', ], 'KeyMaterial' => [ 'shape' => 'KeyMaterial', ], 'KeyCheckValue' => [ 'shape' => 'KeyCheckValue', ], 'KeyCheckValueAlgorithm' => [ 'shape' => 'KeyCheckValueAlgorithm', ], ], ], 'WrappedKeyCryptogram' => [ 'type' => 'string', 'max' => 4096, 'min' => 16, 'pattern' => '[0-9A-F]+', ], 'WrappedKeyMaterialFormat' => [ 'type' => 'string', 'enum' => [ 'KEY_CRYPTOGRAM', 'TR31_KEY_BLOCK', 'TR34_KEY_BLOCK', ], ], 'WrappingKeySpec' => [ 'type' => 'string', 'enum' => [ 'RSA_OAEP_SHA_256', 'RSA_OAEP_SHA_512', ], ], ],];

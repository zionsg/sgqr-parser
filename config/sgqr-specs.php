<?php
// Specifications for SGQR

return [
    '_comment' => 'From "EMV QR Code Specification for Payment Systems: Merchant-Presented Mode" PDF at https://www.emvco.com/emv-technologies/qrcodes/',

    'rootDataObjectsById' => [
        '_comment' => 'if isTemplate is true, data objects for template will be found in templatesById key',
        '00' => ['name' => 'Payload Format Indicator', 'comment' => 'Shall be the 1st data object in QR code. Shall contain value of 01.'],
        '01' => ['name' => 'Point of Initiation Method', 'comment' => 'Value of 11 used when same QR code used for more than 1 transaction. Value of 12 used when a new QR code is shown for each transaction.'],
        '02' => ['name' => 'Merchant Account Information', 'comment' => 'Reserved for Visa.'],
        '03' => ['name' => 'Merchant Account Information', 'comment' => 'Reserved for Visa.'],
        '04' => ['name' => 'Merchant Account Information', 'comment' => 'Reserved for Mastercard.'],
        '05' => ['name' => 'Merchant Account Information', 'comment' => 'Reserved for Mastercard.'],
        '06' => ['name' => 'Merchant Account Information', 'comment' => 'Reserved by EMVCo.'],
        '07' => ['name' => 'Merchant Account Information', 'comment' => 'Reserved by EMVCo.'],
        '08' => ['name' => 'Merchant Account Information', 'comment' => 'Reserved by EMVCo.'],
        '09' => ['name' => 'Merchant Account Information', 'comment' => 'Reserved for Discover.'],
        '10' => ['name' => 'Merchant Account Information', 'comment' => 'Reserved for Discover.'],
        '11' => ['name' => 'Merchant Account Information', 'comment' => 'Reserved for Amex.'],
        '12' => ['name' => 'Merchant Account Information', 'comment' => 'Reserved for Amex.'],
        '13' => ['name' => 'Merchant Account Information', 'comment' => 'Reserved for JCB.'],
        '14' => ['name' => 'Merchant Account Information', 'comment' => 'Reserved for JCB.'],
        '15' => ['name' => 'Merchant Account Information', 'comment' => 'Reserved for UnionPay.'],
        '16' => ['name' => 'Merchant Account Information', 'comment' => 'Reserved for UnionPay.'],
        '17' => ['name' => 'Merchant Account Information', 'comment' => 'Reserved by EMVCo.'],
        '18' => ['name' => 'Merchant Account Information', 'comment' => 'Reserved by EMVCo.'],
        '19' => ['name' => 'Merchant Account Information', 'comment' => 'Reserved by EMVCo.'],
        '20' => ['name' => 'Merchant Account Information', 'comment' => 'Reserved by EMVCo.'],
        '21' => ['name' => 'Merchant Account Information', 'comment' => 'Reserved by EMVCo.'],
        '22' => ['name' => 'Merchant Account Information', 'comment' => 'Reserved by EMVCo.'],
        '23' => ['name' => 'Merchant Account Information', 'comment' => 'Reserved by EMVCo.'],
        '24' => ['name' => 'Merchant Account Information', 'comment' => 'Reserved by EMVCo.'],
        '25' => ['name' => 'Merchant Account Information', 'comment' => 'Reserved by EMVCo.'],
        '26' => ['name' => 'Merchant Account Information', 'comment' => 'Templates reserved for additional payment networks.', 'isTemplate' => true],
        '27' => ['name' => 'Merchant Account Information', 'comment' => 'Templates reserved for additional payment networks.', 'isTemplate' => true],
        '28' => ['name' => 'Merchant Account Information', 'comment' => 'Templates reserved for additional payment networks.', 'isTemplate' => true],
        '29' => ['name' => 'Merchant Account Information', 'comment' => 'Templates reserved for additional payment networks.', 'isTemplate' => true],
        '30' => ['name' => 'Merchant Account Information', 'comment' => 'Templates reserved for additional payment networks.', 'isTemplate' => true],
        '31' => ['name' => 'Merchant Account Information', 'comment' => 'Templates reserved for additional payment networks.', 'isTemplate' => true],
        '32' => ['name' => 'Merchant Account Information', 'comment' => 'Templates reserved for additional payment networks.', 'isTemplate' => true],
        '33' => ['name' => 'Merchant Account Information', 'comment' => 'Templates reserved for additional payment networks.', 'isTemplate' => true],
        '34' => ['name' => 'Merchant Account Information', 'comment' => 'Templates reserved for additional payment networks.', 'isTemplate' => true],
        '35' => ['name' => 'Merchant Account Information', 'comment' => 'Templates reserved for additional payment networks.', 'isTemplate' => true],
        '36' => ['name' => 'Merchant Account Information', 'comment' => 'Templates reserved for additional payment networks.', 'isTemplate' => true],
        '37' => ['name' => 'Merchant Account Information', 'comment' => 'Templates reserved for additional payment networks.', 'isTemplate' => true],
        '38' => ['name' => 'Merchant Account Information', 'comment' => 'Templates reserved for additional payment networks.', 'isTemplate' => true],
        '39' => ['name' => 'Merchant Account Information', 'comment' => 'Templates reserved for additional payment networks.', 'isTemplate' => true],
        '40' => ['name' => 'Merchant Account Information', 'comment' => 'Templates reserved for additional payment networks.', 'isTemplate' => true],
        '41' => ['name' => 'Merchant Account Information', 'comment' => 'Templates reserved for additional payment networks.', 'isTemplate' => true],
        '42' => ['name' => 'Merchant Account Information', 'comment' => 'Templates reserved for additional payment networks.', 'isTemplate' => true],
        '43' => ['name' => 'Merchant Account Information', 'comment' => 'Templates reserved for additional payment networks.', 'isTemplate' => true],
        '44' => ['name' => 'Merchant Account Information', 'comment' => 'Templates reserved for additional payment networks.', 'isTemplate' => true],
        '45' => ['name' => 'Merchant Account Information', 'comment' => 'Templates reserved for additional payment networks.', 'isTemplate' => true],
        '46' => ['name' => 'Merchant Account Information', 'comment' => 'Templates reserved for additional payment networks.', 'isTemplate' => true],
        '47' => ['name' => 'Merchant Account Information', 'comment' => 'Templates reserved for additional payment networks.', 'isTemplate' => true],
        '48' => ['name' => 'Merchant Account Information', 'comment' => 'Templates reserved for additional payment networks.', 'isTemplate' => true],
        '49' => ['name' => 'Merchant Account Information', 'comment' => 'Templates reserved for additional payment networks.', 'isTemplate' => true],
        '50' => ['name' => 'Merchant Account Information', 'comment' => 'Templates reserved for additional payment networks.', 'isTemplate' => true],
        '51' => ['name' => 'Merchant Account Information', 'comment' => 'Templates reserved for additional payment networks.', 'isTemplate' => true],
        '52' => ['name' => 'Merchant Category Code', 'comment' => 'As defined by ISO 18245.'],
        '53' => ['name' => 'Transaction Currency', 'comment' => '3-digit numeric representation of currency according to ISO 4217. USD is 840, SGD is 702.'],
        '54' => ['name' => 'Transaction Amount', 'comment' => 'Shall not be included if the app should prompt user to enter the amount to be paid to the Merchant.'],
        '55' => ['name' => 'Tip or Convenience Indicator', 'comment' => 'Value of 01 if app should prompt user to enter amount, value of 02 if using Value of Convenience Fee Fixed data object (ID 56), value of 03 if using Value of Convenience Fee Percentage data object (ID 57)'],
        '56' => ['name' => 'Value of Convenience Fee Fixed', 'comment' => 'More than zero only if value of Tip or Convenience Indicator data object (ID 55) is 02'],
        '57' => ['name' => 'Value of Convenience Fee Percentage', 'comment' => 'More than zero only (00.00 to 99.99) if value of Tip or Convenience Indicator data object (ID 55) is 03. The % symbol shall not be included.'],
        '58' => ['name' => 'Country Code', 'comment' => 'As defined by ISO 3166-1 alpha 2.'],
        '59' => ['name' => 'Merchant Name', 'comment' => ''],
        '60' => ['name' => 'Merchant City', 'comment' => ''],
        '61' => ['name' => 'Postal Code', 'comment' => ''],
        '62' => ['name' => 'Additional Data Field Template', 'comment' => '', 'isTemplate' => true],
        '63' => ['name' => 'CRC', 'comment' => 'Shall be the last data object in QR code. Checksum calculated according to ISO/IEC 13239 using polynomial 1021 (hex) and initial value FFFF (hex).'],
        '64' => ['name' => 'Merchant Information - Language Template', 'comment' => '', 'isTemplate' => true],
        '65' => ['name' => 'RFU for EMVCo', 'comment' => ''],
        '66' => ['name' => 'RFU for EMVCo', 'comment' => ''],
        '67' => ['name' => 'RFU for EMVCo', 'comment' => ''],
        '68' => ['name' => 'RFU for EMVCo', 'comment' => ''],
        '69' => ['name' => 'RFU for EMVCo', 'comment' => ''],
        '70' => ['name' => 'RFU for EMVCo', 'comment' => ''],
        '71' => ['name' => 'RFU for EMVCo', 'comment' => ''],
        '72' => ['name' => 'RFU for EMVCo', 'comment' => ''],
        '73' => ['name' => 'RFU for EMVCo', 'comment' => ''],
        '74' => ['name' => 'RFU for EMVCo', 'comment' => ''],
        '75' => ['name' => 'RFU for EMVCo', 'comment' => ''],
        '76' => ['name' => 'RFU for EMVCo', 'comment' => ''],
        '77' => ['name' => 'RFU for EMVCo', 'comment' => ''],
        '78' => ['name' => 'RFU for EMVCo', 'comment' => ''],
        '79' => ['name' => 'RFU for EMVCo', 'comment' => ''],
        '80' => ['name' => 'Unreserved templates', 'comment' => '', 'isTemplate' => true],
        '81' => ['name' => 'Unreserved templates', 'comment' => '', 'isTemplate' => true],
        '82' => ['name' => 'Unreserved templates', 'comment' => '', 'isTemplate' => true],
        '83' => ['name' => 'Unreserved templates', 'comment' => '', 'isTemplate' => true],
        '84' => ['name' => 'Unreserved templates', 'comment' => '', 'isTemplate' => true],
        '85' => ['name' => 'Unreserved templates', 'comment' => '', 'isTemplate' => true],
        '86' => ['name' => 'Unreserved templates', 'comment' => '', 'isTemplate' => true],
        '87' => ['name' => 'Unreserved templates', 'comment' => '', 'isTemplate' => true],
        '88' => ['name' => 'Unreserved templates', 'comment' => '', 'isTemplate' => true],
        '89' => ['name' => 'Unreserved templates', 'comment' => '', 'isTemplate' => true],
        '90' => ['name' => 'Unreserved templates', 'comment' => '', 'isTemplate' => true],
        '91' => ['name' => 'Unreserved templates', 'comment' => '', 'isTemplate' => true],
        '92' => ['name' => 'Unreserved templates', 'comment' => '', 'isTemplate' => true],
        '93' => ['name' => 'Unreserved templates', 'comment' => '', 'isTemplate' => true],
        '94' => ['name' => 'Unreserved templates', 'comment' => '', 'isTemplate' => true],
        '95' => ['name' => 'Unreserved templates', 'comment' => '', 'isTemplate' => true],
        '96' => ['name' => 'Unreserved templates', 'comment' => '', 'isTemplate' => true],
        '97' => ['name' => 'Unreserved templates', 'comment' => '', 'isTemplate' => true],
        '98' => ['name' => 'Unreserved templates', 'comment' => '', 'isTemplate' => true],
        '99' => ['name' => 'Unreserved templates', 'comment' => '', 'isTemplate' => true],
    ], // end rootDataObjectsById

    'infoTemplate' => [
        '_comment' => 'Used in templatesById - if usesInfoTemplate is true, the dataObjectsById key for that template will be set to this',
        '00' => ['name' => 'Globally Unique Identifier', 'comment' => 'Value can be one of the following - an Application Identifier (AID), a UUID without hyphens, a reverse domain name.'],
        '01' => ['name' => 'Payment network specific', 'comment' => ''],
        '02' => ['name' => 'Payment network specific', 'comment' => ''],
        '03' => ['name' => 'Payment network specific', 'comment' => ''],
        '04' => ['name' => 'Payment network specific', 'comment' => ''],
        '05' => ['name' => 'Payment network specific', 'comment' => ''],
        '06' => ['name' => 'Payment network specific', 'comment' => ''],
        '07' => ['name' => 'Payment network specific', 'comment' => ''],
        '08' => ['name' => 'Payment network specific', 'comment' => ''],
        '09' => ['name' => 'Payment network specific', 'comment' => ''],
        '10' => ['name' => 'Payment network specific', 'comment' => ''],
        '11' => ['name' => 'Payment network specific', 'comment' => ''],
        '12' => ['name' => 'Payment network specific', 'comment' => ''],
        '13' => ['name' => 'Payment network specific', 'comment' => ''],
        '14' => ['name' => 'Payment network specific', 'comment' => ''],
        '15' => ['name' => 'Payment network specific', 'comment' => ''],
        '16' => ['name' => 'Payment network specific', 'comment' => ''],
        '17' => ['name' => 'Payment network specific', 'comment' => ''],
        '18' => ['name' => 'Payment network specific', 'comment' => ''],
        '19' => ['name' => 'Payment network specific', 'comment' => ''],
        '20' => ['name' => 'Payment network specific', 'comment' => ''],
        '21' => ['name' => 'Payment network specific', 'comment' => ''],
        '22' => ['name' => 'Payment network specific', 'comment' => ''],
        '23' => ['name' => 'Payment network specific', 'comment' => ''],
        '24' => ['name' => 'Payment network specific', 'comment' => ''],
        '25' => ['name' => 'Payment network specific', 'comment' => ''],
        '26' => ['name' => 'Payment network specific', 'comment' => ''],
        '27' => ['name' => 'Payment network specific', 'comment' => ''],
        '28' => ['name' => 'Payment network specific', 'comment' => ''],
        '29' => ['name' => 'Payment network specific', 'comment' => ''],
        '30' => ['name' => 'Payment network specific', 'comment' => ''],
        '31' => ['name' => 'Payment network specific', 'comment' => ''],
        '32' => ['name' => 'Payment network specific', 'comment' => ''],
        '33' => ['name' => 'Payment network specific', 'comment' => ''],
        '34' => ['name' => 'Payment network specific', 'comment' => ''],
        '35' => ['name' => 'Payment network specific', 'comment' => ''],
        '36' => ['name' => 'Payment network specific', 'comment' => ''],
        '37' => ['name' => 'Payment network specific', 'comment' => ''],
        '38' => ['name' => 'Payment network specific', 'comment' => ''],
        '39' => ['name' => 'Payment network specific', 'comment' => ''],
        '40' => ['name' => 'Payment network specific', 'comment' => ''],
        '41' => ['name' => 'Payment network specific', 'comment' => ''],
        '42' => ['name' => 'Payment network specific', 'comment' => ''],
        '43' => ['name' => 'Payment network specific', 'comment' => ''],
        '44' => ['name' => 'Payment network specific', 'comment' => ''],
        '45' => ['name' => 'Payment network specific', 'comment' => ''],
        '46' => ['name' => 'Payment network specific', 'comment' => ''],
        '47' => ['name' => 'Payment network specific', 'comment' => ''],
        '48' => ['name' => 'Payment network specific', 'comment' => ''],
        '49' => ['name' => 'Payment network specific', 'comment' => ''],
        '50' => ['name' => 'Payment network specific', 'comment' => ''],
        '51' => ['name' => 'Payment network specific', 'comment' => ''],
        '52' => ['name' => 'Payment network specific', 'comment' => ''],
        '53' => ['name' => 'Payment network specific', 'comment' => ''],
        '54' => ['name' => 'Payment network specific', 'comment' => ''],
        '55' => ['name' => 'Payment network specific', 'comment' => ''],
        '56' => ['name' => 'Payment network specific', 'comment' => ''],
        '57' => ['name' => 'Payment network specific', 'comment' => ''],
        '58' => ['name' => 'Payment network specific', 'comment' => ''],
        '59' => ['name' => 'Payment network specific', 'comment' => ''],
        '60' => ['name' => 'Payment network specific', 'comment' => ''],
        '61' => ['name' => 'Payment network specific', 'comment' => ''],
        '62' => ['name' => 'Payment network specific', 'comment' => ''],
        '63' => ['name' => 'Payment network specific', 'comment' => ''],
        '64' => ['name' => 'Payment network specific', 'comment' => ''],
        '65' => ['name' => 'Payment network specific', 'comment' => ''],
        '66' => ['name' => 'Payment network specific', 'comment' => ''],
        '67' => ['name' => 'Payment network specific', 'comment' => ''],
        '68' => ['name' => 'Payment network specific', 'comment' => ''],
        '69' => ['name' => 'Payment network specific', 'comment' => ''],
        '70' => ['name' => 'Payment network specific', 'comment' => ''],
        '71' => ['name' => 'Payment network specific', 'comment' => ''],
        '72' => ['name' => 'Payment network specific', 'comment' => ''],
        '73' => ['name' => 'Payment network specific', 'comment' => ''],
        '74' => ['name' => 'Payment network specific', 'comment' => ''],
        '75' => ['name' => 'Payment network specific', 'comment' => ''],
        '76' => ['name' => 'Payment network specific', 'comment' => ''],
        '77' => ['name' => 'Payment network specific', 'comment' => ''],
        '78' => ['name' => 'Payment network specific', 'comment' => ''],
        '79' => ['name' => 'Payment network specific', 'comment' => ''],
        '80' => ['name' => 'Payment network specific', 'comment' => ''],
        '81' => ['name' => 'Payment network specific', 'comment' => ''],
        '82' => ['name' => 'Payment network specific', 'comment' => ''],
        '83' => ['name' => 'Payment network specific', 'comment' => ''],
        '84' => ['name' => 'Payment network specific', 'comment' => ''],
        '85' => ['name' => 'Payment network specific', 'comment' => ''],
        '86' => ['name' => 'Payment network specific', 'comment' => ''],
        '87' => ['name' => 'Payment network specific', 'comment' => ''],
        '88' => ['name' => 'Payment network specific', 'comment' => ''],
        '89' => ['name' => 'Payment network specific', 'comment' => ''],
        '90' => ['name' => 'Payment network specific', 'comment' => ''],
        '91' => ['name' => 'Payment network specific', 'comment' => ''],
        '92' => ['name' => 'Payment network specific', 'comment' => ''],
        '93' => ['name' => 'Payment network specific', 'comment' => ''],
        '94' => ['name' => 'Payment network specific', 'comment' => ''],
        '95' => ['name' => 'Payment network specific', 'comment' => ''],
        '96' => ['name' => 'Payment network specific', 'comment' => ''],
        '97' => ['name' => 'Payment network specific', 'comment' => ''],
        '98' => ['name' => 'Payment network specific', 'comment' => ''],
        '99' => ['name' => 'Payment network specific', 'comment' => ''],
    ],

    'templatesById' => [
        '_comment' => "For ID 26-51, 80-99, ['usesInfoTemplate' => true] to be interpreted as ['dataObjectsById' => (contents of infoTemplate key)]",
        '26' => ['usesInfoTemplate' => true],
        '27' => ['usesInfoTemplate' => true],
        '28' => ['usesInfoTemplate' => true],
        '29' => ['usesInfoTemplate' => true],
        '30' => ['usesInfoTemplate' => true],
        '31' => ['usesInfoTemplate' => true],
        '32' => ['usesInfoTemplate' => true],
        '33' => ['usesInfoTemplate' => true],
        '34' => ['usesInfoTemplate' => true],
        '35' => ['usesInfoTemplate' => true],
        '36' => ['usesInfoTemplate' => true],
        '37' => ['usesInfoTemplate' => true],
        '38' => ['usesInfoTemplate' => true],
        '39' => ['usesInfoTemplate' => true],
        '40' => ['usesInfoTemplate' => true],
        '41' => ['usesInfoTemplate' => true],
        '42' => ['usesInfoTemplate' => true],
        '43' => ['usesInfoTemplate' => true],
        '44' => ['usesInfoTemplate' => true],
        '45' => ['usesInfoTemplate' => true],
        '46' => ['usesInfoTemplate' => true],
        '47' => ['usesInfoTemplate' => true],
        '48' => ['usesInfoTemplate' => true],
        '49' => ['usesInfoTemplate' => true],
        '50' => ['usesInfoTemplate' => true],
        '51' => ['usesInfoTemplate' => true],

        '62' => [
            '_comment' => "For ID 50-99, ['usesInfoTemplate' => true] to be interpreted as ['dataObjectsById' => (contents of infoTemplate key)]",
            'dataObjectsById' => [
                '00' => ['name' => 'UNUSED', 'comment' => ''],
                '01' => ['name' => 'Bill Number', 'comment' => ''],
                '02' => ['name' => 'Mobile Number', 'comment' => ''],
                '03' => ['name' => 'Store Label', 'comment' => ''],
                '04' => ['name' => 'Loyalty Number', 'comment' => ''],
                '05' => ['name' => 'Reference Label', 'comment' => ''],
                '06' => ['name' => 'Customer Label', 'comment' => ''],
                '07' => ['name' => 'Terminal Label', 'comment' => ''],
                '08' => ['name' => 'Purpose of Transaction', 'comment' => ''],
                '09' => ['name' => 'Additional Consumer Data Request', 'comment' => ''],
                '10' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '11' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '12' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '13' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '14' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '15' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '16' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '17' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '18' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '19' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '20' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '21' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '22' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '23' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '24' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '25' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '26' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '27' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '28' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '29' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '30' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '31' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '32' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '33' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '34' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '35' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '36' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '37' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '38' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '39' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '40' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '41' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '42' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '43' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '44' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '45' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '46' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '47' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '48' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '49' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '50' => ['name' => 'Payment System specific templates', 'comment' => '', 'isTemplate' => true, 'usesInfoTemplate' => true],
                '51' => ['name' => 'Payment System specific templates', 'comment' => '', 'isTemplate' => true, 'usesInfoTemplate' => true],
                '52' => ['name' => 'Payment System specific templates', 'comment' => '', 'isTemplate' => true, 'usesInfoTemplate' => true],
                '53' => ['name' => 'Payment System specific templates', 'comment' => '', 'isTemplate' => true, 'usesInfoTemplate' => true],
                '54' => ['name' => 'Payment System specific templates', 'comment' => '', 'isTemplate' => true, 'usesInfoTemplate' => true],
                '55' => ['name' => 'Payment System specific templates', 'comment' => '', 'isTemplate' => true, 'usesInfoTemplate' => true],
                '56' => ['name' => 'Payment System specific templates', 'comment' => '', 'isTemplate' => true, 'usesInfoTemplate' => true],
                '57' => ['name' => 'Payment System specific templates', 'comment' => '', 'isTemplate' => true, 'usesInfoTemplate' => true],
                '58' => ['name' => 'Payment System specific templates', 'comment' => '', 'isTemplate' => true, 'usesInfoTemplate' => true],
                '59' => ['name' => 'Payment System specific templates', 'comment' => '', 'isTemplate' => true, 'usesInfoTemplate' => true],
                '60' => ['name' => 'Payment System specific templates', 'comment' => '', 'isTemplate' => true, 'usesInfoTemplate' => true],
                '61' => ['name' => 'Payment System specific templates', 'comment' => '', 'isTemplate' => true, 'usesInfoTemplate' => true],
                '62' => ['name' => 'Payment System specific templates', 'comment' => '', 'isTemplate' => true, 'usesInfoTemplate' => true],
                '63' => ['name' => 'Payment System specific templates', 'comment' => '', 'isTemplate' => true, 'usesInfoTemplate' => true],
                '64' => ['name' => 'Payment System specific templates', 'comment' => '', 'isTemplate' => true, 'usesInfoTemplate' => true],
                '65' => ['name' => 'Payment System specific templates', 'comment' => '', 'isTemplate' => true, 'usesInfoTemplate' => true],
                '66' => ['name' => 'Payment System specific templates', 'comment' => '', 'isTemplate' => true, 'usesInfoTemplate' => true],
                '67' => ['name' => 'Payment System specific templates', 'comment' => '', 'isTemplate' => true, 'usesInfoTemplate' => true],
                '68' => ['name' => 'Payment System specific templates', 'comment' => '', 'isTemplate' => true, 'usesInfoTemplate' => true],
                '69' => ['name' => 'Payment System specific templates', 'comment' => '', 'isTemplate' => true, 'usesInfoTemplate' => true],
                '70' => ['name' => 'Payment System specific templates', 'comment' => '', 'isTemplate' => true, 'usesInfoTemplate' => true],
                '71' => ['name' => 'Payment System specific templates', 'comment' => '', 'isTemplate' => true, 'usesInfoTemplate' => true],
                '72' => ['name' => 'Payment System specific templates', 'comment' => '', 'isTemplate' => true, 'usesInfoTemplate' => true],
                '73' => ['name' => 'Payment System specific templates', 'comment' => '', 'isTemplate' => true, 'usesInfoTemplate' => true],
                '74' => ['name' => 'Payment System specific templates', 'comment' => '', 'isTemplate' => true, 'usesInfoTemplate' => true],
                '75' => ['name' => 'Payment System specific templates', 'comment' => '', 'isTemplate' => true, 'usesInfoTemplate' => true],
                '76' => ['name' => 'Payment System specific templates', 'comment' => '', 'isTemplate' => true, 'usesInfoTemplate' => true],
                '77' => ['name' => 'Payment System specific templates', 'comment' => '', 'isTemplate' => true, 'usesInfoTemplate' => true],
                '78' => ['name' => 'Payment System specific templates', 'comment' => '', 'isTemplate' => true, 'usesInfoTemplate' => true],
                '79' => ['name' => 'Payment System specific templates', 'comment' => '', 'isTemplate' => true, 'usesInfoTemplate' => true],
                '80' => ['name' => 'Payment System specific templates', 'comment' => '', 'isTemplate' => true, 'usesInfoTemplate' => true],
                '81' => ['name' => 'Payment System specific templates', 'comment' => '', 'isTemplate' => true, 'usesInfoTemplate' => true],
                '82' => ['name' => 'Payment System specific templates', 'comment' => '', 'isTemplate' => true, 'usesInfoTemplate' => true],
                '83' => ['name' => 'Payment System specific templates', 'comment' => '', 'isTemplate' => true, 'usesInfoTemplate' => true],
                '84' => ['name' => 'Payment System specific templates', 'comment' => '', 'isTemplate' => true, 'usesInfoTemplate' => true],
                '85' => ['name' => 'Payment System specific templates', 'comment' => '', 'isTemplate' => true, 'usesInfoTemplate' => true],
                '86' => ['name' => 'Payment System specific templates', 'comment' => '', 'isTemplate' => true, 'usesInfoTemplate' => true],
                '87' => ['name' => 'Payment System specific templates', 'comment' => '', 'isTemplate' => true, 'usesInfoTemplate' => true],
                '88' => ['name' => 'Payment System specific templates', 'comment' => '', 'isTemplate' => true, 'usesInfoTemplate' => true],
                '89' => ['name' => 'Payment System specific templates', 'comment' => '', 'isTemplate' => true, 'usesInfoTemplate' => true],
                '90' => ['name' => 'Payment System specific templates', 'comment' => '', 'isTemplate' => true, 'usesInfoTemplate' => true],
                '91' => ['name' => 'Payment System specific templates', 'comment' => '', 'isTemplate' => true, 'usesInfoTemplate' => true],
                '92' => ['name' => 'Payment System specific templates', 'comment' => '', 'isTemplate' => true, 'usesInfoTemplate' => true],
                '93' => ['name' => 'Payment System specific templates', 'comment' => '', 'isTemplate' => true, 'usesInfoTemplate' => true],
                '94' => ['name' => 'Payment System specific templates', 'comment' => '', 'isTemplate' => true, 'usesInfoTemplate' => true],
                '95' => ['name' => 'Payment System specific templates', 'comment' => '', 'isTemplate' => true, 'usesInfoTemplate' => true],
                '96' => ['name' => 'Payment System specific templates', 'comment' => '', 'isTemplate' => true, 'usesInfoTemplate' => true],
                '97' => ['name' => 'Payment System specific templates', 'comment' => '', 'isTemplate' => true, 'usesInfoTemplate' => true],
                '98' => ['name' => 'Payment System specific templates', 'comment' => '', 'isTemplate' => true, 'usesInfoTemplate' => true],
                '99' => ['name' => 'Payment System specific templates', 'comment' => '', 'isTemplate' => true, 'usesInfoTemplate' => true],
            ], // end dataObjectsById
        ], // end template 62

        '64' => [
            'dataObjectsById' => [
                '00' => ['name' => 'Language Preference', 'comment' => '2-letter value according to ISO 639.'],
                '01' => ['name' => 'Merchant Name - Alternate Language', 'comment' => ''],
                '02' => ['name' => 'Merchant City - Alternate Language', 'comment' => ''],
                '03' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '04' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '05' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '06' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '07' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '08' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '09' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '10' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '11' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '12' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '13' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '14' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '15' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '16' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '17' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '18' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '19' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '20' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '21' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '22' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '23' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '24' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '25' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '26' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '27' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '28' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '29' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '30' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '31' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '32' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '33' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '34' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '35' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '36' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '37' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '38' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '39' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '40' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '41' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '42' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '43' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '44' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '45' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '46' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '47' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '48' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '49' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '50' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '51' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '52' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '53' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '54' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '55' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '56' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '57' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '58' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '59' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '60' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '61' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '62' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '63' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '64' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '65' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '66' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '67' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '68' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '69' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '70' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '71' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '72' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '73' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '74' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '75' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '76' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '77' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '78' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '79' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '80' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '81' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '82' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '83' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '84' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '85' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '86' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '87' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '88' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '89' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '90' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '91' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '92' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '93' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '94' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '95' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '96' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '97' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '98' => ['name' => 'RFU for EMVCo', 'comment' => ''],
                '99' => ['name' => 'RFU for EMVCo', 'comment' => ''],
            ], // end dataObjectsById
        ], // end template 64

        '80' => ['usesInfoTemplate' => true],
        '81' => ['usesInfoTemplate' => true],
        '82' => ['usesInfoTemplate' => true],
        '83' => ['usesInfoTemplate' => true],
        '84' => ['usesInfoTemplate' => true],
        '85' => ['usesInfoTemplate' => true],
        '86' => ['usesInfoTemplate' => true],
        '87' => ['usesInfoTemplate' => true],
        '88' => ['usesInfoTemplate' => true],
        '89' => ['usesInfoTemplate' => true],
        '90' => ['usesInfoTemplate' => true],
        '91' => ['usesInfoTemplate' => true],
        '92' => ['usesInfoTemplate' => true],
        '93' => ['usesInfoTemplate' => true],
        '94' => ['usesInfoTemplate' => true],
        '95' => ['usesInfoTemplate' => true],
        '96' => ['usesInfoTemplate' => true],
        '97' => ['usesInfoTemplate' => true],
        '98' => ['usesInfoTemplate' => true],
        '99' => ['usesInfoTemplate' => true],
    ], // end templatesById
]; // end of return array

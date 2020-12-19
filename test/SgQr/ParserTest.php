<?php
namespace SgQrTest;

use SgQr\Parser;
use PHPUnit\Framework\TestCase;

final class ParserTest extends TestCase
{
    /**
     * @dataProvider qrCodeProvider
     */
    public function testCanParse($dataSetName, $qrCode, $expectedResultInJson)
    {
        $parser = new Parser();
        $result = json_encode($parser->parse($qrCode));

        $this->assertEquals($expectedResultInJson, $result);
    }

    /**
     * @dataProvider qrCodeProvider
     */
    public function testChecksum($dataSetName, $qrCode, $expectedResultInJson)
    {
        $parser = new Parser();
        $expectedChecksum = substr($qrCode, -4);
        $actualChecksum = $parser->computeChecksum(substr($qrCode, 0, -4));

        $this->assertEquals($expectedChecksum, $actualChecksum);
    }

    /**
     * @dataProvider qrCodeProvider
     */
    public function testCanAssemble($dataSetName, $qrCode, $expectedResultInJson)
    {
        $parser = new Parser();
        $parsed = json_decode(trim($expectedResultInJson), true);
        $assembled = $parser->assemble($parsed);

        $this->assertEquals($qrCode, $assembled);
    }

    public function qrCodeProvider()
    {
        return [
            [   // SGQR for SOBA EXPRESS from article https://www.channelnewsasia.com/news/singapore/sgqr-qr-code-cashless-payment-singapore-rolls-out-unified-10727568
                'Basic SGQR',
                '00020101021126810011SG.COM.NETS01231198500065G9912312359000211111686614000308686614019908604108C251800007SG.SGQR01121809072DD85C020701.00010306079027040201050206060400000708201809155204581253037025802SG5912SOBA EXPRESS6009Singapore630457B3',
                '[{"id":"00","name":"Payload Format Indicator","length":"02","value":"01","comment":"Shall be the 1st data object in QR code. Shall contain value of 01."},{"id":"01","name":"Point of Initiation Method","length":"02","value":"11","comment":"Value of 11 used when same QR code used for more than 1 transaction. Value of 12 used when a new QR code is shown for each transaction."},{"id":"26","name":"Merchant Account Information","length":"81","value":"0011SG.COM.NETS01231198500065G9912312359000211111686614000308686614019908604108C2","comment":"Templates reserved for additional payment networks.","dataObjects":[{"id":"00","name":"Globally Unique Identifier","length":"11","value":"SG.COM.NETS","comment":"Value can be one of the following - an Application Identifier (AID), a UUID without hyphens, a reverse domain name."},{"id":"01","name":"Payment network specific","length":"23","value":"1198500065G991231235900","comment":""},{"id":"02","name":"Payment network specific","length":"11","value":"11168661400","comment":""},{"id":"03","name":"Payment network specific","length":"08","value":"68661401","comment":""},{"id":"99","name":"Payment network specific","length":"08","value":"604108C2","comment":""}]},{"id":"51","name":"Merchant Account Information","length":"80","value":"0007SG.SGQR01121809072DD85C020701.0001030607902704020105020606040000070820180915","comment":"Templates reserved for additional payment networks.","dataObjects":[{"id":"00","name":"Globally Unique Identifier","length":"07","value":"SG.SGQR","comment":"Value can be one of the following - an Application Identifier (AID), a UUID without hyphens, a reverse domain name."},{"id":"01","name":"Payment network specific","length":"12","value":"1809072DD85C","comment":""},{"id":"02","name":"Payment network specific","length":"07","value":"01.0001","comment":""},{"id":"03","name":"Payment network specific","length":"06","value":"079027","comment":""},{"id":"04","name":"Payment network specific","length":"02","value":"01","comment":""},{"id":"05","name":"Payment network specific","length":"02","value":"06","comment":""},{"id":"06","name":"Payment network specific","length":"04","value":"0000","comment":""},{"id":"07","name":"Payment network specific","length":"08","value":"20180915","comment":""}]},{"id":"52","name":"Merchant Category Code","length":"04","value":"5812","comment":"As defined by ISO 18245."},{"id":"53","name":"Transaction Currency","length":"03","value":"702","comment":"3-digit numeric representation of currency according to ISO 4217. USD is 840, SGD is 702."},{"id":"58","name":"Country Code","length":"02","value":"SG","comment":"As defined by ISO 3166-1 alpha 2."},{"id":"59","name":"Merchant Name","length":"12","value":"SOBA EXPRESS","comment":""},{"id":"60","name":"Merchant City","length":"09","value":"Singapore","comment":""},{"id":"63","name":"CRC","length":"04","value":"57B3","comment":"Shall be the last data object in QR code. Checksum calculated according to ISO\/IEC 13239 using polynomial 1021 (hex) and initial value FFFF (hex)."}]',
            ],

            [   // SGQR from https://www.nets.com.sg/promotions/presidents-star-charity-2018/
                'SGQR contains single quote',
                "00020101021126810011SG.COM.NETS01231198500065G9912312359000211111895264000308895264019908735A43CF51800007SG.SGQR01121809172E1FE7020701.00010306279621040201050202060400000708201809175204000053037025802SG5925PRESIDENT'S CHALLENGE NO16009Singapore63048DCC",
                '[{"id":"00","name":"Payload Format Indicator","length":"02","value":"01","comment":"Shall be the 1st data object in QR code. Shall contain value of 01."},{"id":"01","name":"Point of Initiation Method","length":"02","value":"11","comment":"Value of 11 used when same QR code used for more than 1 transaction. Value of 12 used when a new QR code is shown for each transaction."},{"id":"26","name":"Merchant Account Information","length":"81","value":"0011SG.COM.NETS01231198500065G9912312359000211111895264000308895264019908735A43CF","comment":"Templates reserved for additional payment networks.","dataObjects":[{"id":"00","name":"Globally Unique Identifier","length":"11","value":"SG.COM.NETS","comment":"Value can be one of the following - an Application Identifier (AID), a UUID without hyphens, a reverse domain name."},{"id":"01","name":"Payment network specific","length":"23","value":"1198500065G991231235900","comment":""},{"id":"02","name":"Payment network specific","length":"11","value":"11189526400","comment":""},{"id":"03","name":"Payment network specific","length":"08","value":"89526401","comment":""},{"id":"99","name":"Payment network specific","length":"08","value":"735A43CF","comment":""}]},{"id":"51","name":"Merchant Account Information","length":"80","value":"0007SG.SGQR01121809172E1FE7020701.0001030627962104020105020206040000070820180917","comment":"Templates reserved for additional payment networks.","dataObjects":[{"id":"00","name":"Globally Unique Identifier","length":"07","value":"SG.SGQR","comment":"Value can be one of the following - an Application Identifier (AID), a UUID without hyphens, a reverse domain name."},{"id":"01","name":"Payment network specific","length":"12","value":"1809172E1FE7","comment":""},{"id":"02","name":"Payment network specific","length":"07","value":"01.0001","comment":""},{"id":"03","name":"Payment network specific","length":"06","value":"279621","comment":""},{"id":"04","name":"Payment network specific","length":"02","value":"01","comment":""},{"id":"05","name":"Payment network specific","length":"02","value":"02","comment":""},{"id":"06","name":"Payment network specific","length":"04","value":"0000","comment":""},{"id":"07","name":"Payment network specific","length":"08","value":"20180917","comment":""}]},{"id":"52","name":"Merchant Category Code","length":"04","value":"0000","comment":"As defined by ISO 18245."},{"id":"53","name":"Transaction Currency","length":"03","value":"702","comment":"3-digit numeric representation of currency according to ISO 4217. USD is 840, SGD is 702."},{"id":"58","name":"Country Code","length":"02","value":"SG","comment":"As defined by ISO 3166-1 alpha 2."},{"id":"59","name":"Merchant Name","length":"25","value":"PRESIDENT\'S CHALLENGE NO1","comment":""},{"id":"60","name":"Merchant City","length":"09","value":"Singapore","comment":""},{"id":"63","name":"CRC","length":"04","value":"8DCC","comment":"Shall be the last data object in QR code. Checksum calculated according to ISO\/IEC 13239 using polynomial 1021 (hex) and initial value FFFF (hex)."}]',
            ],

            [   // Modified SGQR generated for PayNow using POSB banking app, hence CRC invalid
                'Test nested template for root data object ID 62',
                '00020101021126500009SG.PAYNOW010100211+65123456780301004082030123152040000530370254071234.565802SG5902ME6009Singapore62290106BILLNO50150004TEST0103ABC6304B301',
                '[{"id":"00","name":"Payload Format Indicator","length":"02","value":"01","comment":"Shall be the 1st data object in QR code. Shall contain value of 01."},{"id":"01","name":"Point of Initiation Method","length":"02","value":"11","comment":"Value of 11 used when same QR code used for more than 1 transaction. Value of 12 used when a new QR code is shown for each transaction."},{"id":"26","name":"Merchant Account Information","length":"50","value":"0009SG.PAYNOW010100211+651234567803010040820301231","comment":"Templates reserved for additional payment networks.","dataObjects":[{"id":"00","name":"Globally Unique Identifier","length":"09","value":"SG.PAYNOW","comment":"Value can be one of the following - an Application Identifier (AID), a UUID without hyphens, a reverse domain name."},{"id":"01","name":"Payment network specific","length":"01","value":"0","comment":""},{"id":"02","name":"Payment network specific","length":"11","value":"+6512345678","comment":""},{"id":"03","name":"Payment network specific","length":"01","value":"0","comment":""},{"id":"04","name":"Payment network specific","length":"08","value":"20301231","comment":""}]},{"id":"52","name":"Merchant Category Code","length":"04","value":"0000","comment":"As defined by ISO 18245."},{"id":"53","name":"Transaction Currency","length":"03","value":"702","comment":"3-digit numeric representation of currency according to ISO 4217. USD is 840, SGD is 702."},{"id":"54","name":"Transaction Amount","length":"07","value":"1234.56","comment":"Shall not be included if the app should prompt user to enter the amount to be paid to the Merchant."},{"id":"58","name":"Country Code","length":"02","value":"SG","comment":"As defined by ISO 3166-1 alpha 2."},{"id":"59","name":"Merchant Name","length":"02","value":"ME","comment":""},{"id":"60","name":"Merchant City","length":"09","value":"Singapore","comment":""},{"id":"62","name":"Additional Data Field Template","length":"29","value":"0106BILLNO50150004TEST0103ABC","comment":"","dataObjects":[{"id":"01","name":"Bill Number","length":"06","value":"BILLNO","comment":""},{"id":"50","name":"Payment System specific templates","length":"15","value":"0004TEST0103ABC","comment":"","dataObjects":[{"id":"00","name":"Globally Unique Identifier","length":"04","value":"TEST","comment":"Value can be one of the following - an Application Identifier (AID), a UUID without hyphens, a reverse domain name."},{"id":"01","name":"Payment network specific","length":"03","value":"ABC","comment":""}]}]},{"id":"63","name":"CRC","length":"04","value":"B301","comment":"Shall be the last data object in QR code. Checksum calculated according to ISO\/IEC 13239 using polynomial 1021 (hex) and initial value FFFF (hex)."}]',
            ],
        ];
    }
}

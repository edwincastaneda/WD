    <?php
    // load Zend Gdata libraries
    require_once '/Zend/Loader.php';
    Zend_Loader::loadClass('Zend_Gdata_Spreadsheets');
    Zend_Loader::loadClass('Zend_Gdata_ClientLogin');

    // set credentials for ClientLogin authentication
    $user = "winedcasta@gmail.com";
    $pass = "iwanttoknowyou";

    try {
      // connect to API
      $service = Zend_Gdata_Spreadsheets::AUTH_SERVICE_NAME;
      $client = Zend_Gdata_ClientLogin::getHttpClient($user, $pass, $service);
      $service = new Zend_Gdata_Spreadsheets($client);

      // set target spreadsheet and worksheet
      $ssKey = '1M3WafwxMNnvgCT0JIRFhzH_ujmPoSJclCLabDmbTo2U/edit#gid=28013333';
      $wsKey = 'od6';

      // update cell at row 6, column 5
      $entry = $service->updateCell('6', '5', 'Hello, world', $ssKey, $wsKey);
      echo 'Updated cell ' . $entry->getTitle()->getText() . '
';


    } catch (Exception $e) {
      die('ERROR: ' . $e->getMessage());
    }
    ?>
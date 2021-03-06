<?php include('vendor.php'); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="./css/extracss.css" />

    <link rel="stylesheet" href="./css/style.css?v2.1" />
    <link rel="stylesheet" href="./css/mq.css" />

    <title>Vendor Profile of <?php echo $vendor['company']; ?></title>
  </head>

  <body>
    <?php include("body.php") ?>
    <script
      src="https://kit.fontawesome.com/2918a48001.js"
      crossorigin="anonymous"
    ></script>
    <script src="./js/main.js"></script>
    <script>
        function whatsapp(type){
          var phone = <?php echo $support_number; ?>;
          var messages =  {
            "review": "<?php echo urlencode("I want to review {$vendor['name']} ({$vendor['id']})") ?>",
            "report": "<?php echo urlencode("I want to report {$vendor['name']} ({$vendor['id']})") ?>",
          }
          var url = `https://api.whatsapp.com/send?phone=${phone}&text=${messages[type]}`;
          window.open(url);
        }
    </script>
  </body>
</html>

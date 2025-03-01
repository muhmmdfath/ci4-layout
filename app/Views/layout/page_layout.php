<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
  <title><?= $title;?></title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
</head>

<body class="bg-blue-50">
  <!-- Navbar -->
  <?= $this->include('layout/navbar');?>

  <div class="min-h-screen p-4">
    <!-- Sidebar -->
    <?= $this->include('layout/sidebar');?>

    <!-- Main Content -->
    <div id="mainContent" class="ml-20 mt-20 w-full mx-auto flex flex-row">
      <?= $this->renderSection('content') ?>
    </div>


  </div>


</body>

</html>

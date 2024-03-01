<?php
require_once 'config.php';

// Prepare a SELECT statement
$stmt = $pdo->prepare('SELECT * FROM admin');

// Execute the statement
$stmt->execute();

// Fetch the results
$users = $stmt->fetchAll();


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Users</title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">User Panel</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <?php foreach ($users as $user) : ?>
      <div class="md my-4">
        <div class="rounded-lg shadow-md">
          <div class="p-4">
            <h2 class="text-xl font-semibold"><a href="users.php?id=<?= $user['id'] ?>"><?= $user['username']; ?></h2>
            <p class="text-gray-700 text-lg mt-2"><?= $user['password']; ?></p>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
    <div class="mt-6">
      <a href="create-user.php" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none">Create Post</a>
    </div>
  </div>
</body>

</html>
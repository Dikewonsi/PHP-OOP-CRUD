<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Users</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">System Users</h1>
    </div>
  </header>
  <div class="flex justify-center mt-10">
    <div class="bg-white p-8 rounded shadow-md w-full max-w-md">
      <h1 class="text-2xl font-semibold mb-6">Create User</h1>
      <form method="post" action="code.php">
        <div class="mb-4">
          <label for="title" class="block text-gray-700 font-medium">Username</label>
          <input type="text" id="title" name="username" placeholder="Enter username" class="w-full px-4 py-2 border rounded focus:ring focus:ring-blue-300 focus:outline-none">
        </div>
        <div class="mb-6">
          <label for="body" class="block text-gray-700 font-medium">Password</label>
          <input id="body" name="password" placeholder="Enter password" class="w-full px-4 py-2 border rounded focus:ring focus:ring-blue-300 focus:outline-none">
        </div>
        <div class="flex items-center justify-between">
          <button type="submit" name="create" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none">
            Submit
          </button>
          <a href="index.php" class="text-blue-500 hover:underline">Back to Users</a>
        </div>
      </form>
    </div>
  </div>
</body>

</html>
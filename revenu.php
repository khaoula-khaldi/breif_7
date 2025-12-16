<?php
include 'config.php';

 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['ajouter_revenu'])) {
        $montantIn = $_POST['montantIn'] ;
        $descriptionIn = $_POST['descriptionIn'] ;
        $dateIn = $_POST['dateIn'] ;
       $stmt = $conn->prepare("INSERT INTO incomes (MontantIn, descreptionIn, date_enterIn) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $montantIn, $descriptionIn, $dateIn);
        $stmt->execute();
        $stmt->close();
    }
}


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="https://cdn.tailwindcss.com"></script>
    <title>revenu</title>
</head>
<body class=" flex flex-col gap-5 font-sans text-gray-800 bg-purple-100">

  <nav class="w-full shadow-md p-4 mb-6 bg-purple-200">
    <h1 class="text-center text-2xl font-bold text-gray-800">Gestion Financière</h1>
  </nav>
    <div class="w-[100%] bg-green-100 border border-gray-200 rounded-xl p-4 shadow-sm flex flex-row justify-between ">
      <h2 class="text-lg font-bold text-gray-700 ">Menu</h2>
      <ul class=" flex flex-row  gap-10">
        <li class="hover:bg-pink-100 transition p-2 rounded cursor-pointer"><a href="index.php">Tableau de bord</a></li>
        <li class="hover:bg-pink-100 transition p-2 rounded cursor-pointer"><a href="revenu.php">Revenu</a></li>
        <li class="hover:bg-pink-100 transition p-2 rounded cursor-pointer"><a href="despenses.php">Dépenses</a></li>
        <li class="hover:bg-pink-100 transition p-2 rounded cursor-pointer">Paramètres</li>
      </ul>
    </div>
      <section class="border border-gray-200 p-4 rounded-xl shadow-sm bg-blue-100">
        <h2 class="text-xl font-bold text-gray-700 mb-4">Revenu</h2>
        <form method="POST" class="flex items-center gap-3">
          <input type="number" step="0.01" name="montantIn" placeholder="Montant" class="border border-gray-300 p-2 rounded w-1/4">
          <input type="text" name="descriptionIn" placeholder="Description" class="border border-gray-300 p-2 rounded flex-1">
          <input type="date" name="dateIn" class="border border-gray-300 p-2 rounded w-1/4">
          <button name="ajouter_revenu" class="bg-pink-300 hover:bg-pink-400 text-white px-4 py-2 rounded shadow">Ajouter</button>
        </form>
      </section>
</body>
</html>

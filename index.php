<?php include 'config.php'; 
if ($_SERVER['REQUEST_METHOD']==='POST'){//knchof ina methode 
  if(isset($_POST['ajouter_revenu'])){//ina button tclika 3leha 
    $montant=$_POST['montant'];//knjibo dok les varoiiabvle oknstokiwhom fi variable 
    $date=$_POST['date'];
    $description=$_POST['description'];
    $stmt=$PDO->prepare("INSERT INTO incomes (Montant,descreption,date_enter) values (?,?,?)");//knprepariw deeq lblasa li ghade that feha data 
    $stmt->execute($montant,$date,$description);//knhto deek dat fi 
  }
}
else{
  echo'khaoula';
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Gestion Financière</title>

  <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="min-h-screen flex flex-col font-sans text-gray-800  bg-purple-100">


  <nav class="w-full shadow-md p-4 mb-6 bg-purple-200">
    <h1 class="text-center text-2xl font-bold text-gray-800">
      Gestion Financière
    </h1>
  </nav>

  <div class="flex flex-row gap-6 p-6 ">
    <div class="w-64 bg-green-100 border border-gray-200 rounded-xl p-4 shadow-sm">
      <h2 class="text-lg font-bold text-gray-700 mb-4">Menu</h2>

      <ul class="space-y-3 ">
        <li class="hover:bg-pink-100 transition p-2 rounded cursor-pointer">Tableau de bord</li>
        <li class="hover:bg-pink-100 transition p-2 rounded cursor-pointer">Revenu</li>
        <li class="hover:bg-pink-100 transition p-2 rounded cursor-pointer">Dépenses</li>
        <li class="hover:bg-pink-100 transition p-2 rounded cursor-pointer">Paramètres</li>
      </ul>
    </div>

    
    <main class="flex-1 space-y-8">

      <!-- tableaux de borde -->
<section class="flex gap-4">
  <div class="flex-1 p-4 bg-blue-400 rounded-xl shadow-sm">
    <p class="font-semibold text-white">Revenu total</p>
    <p class="text-2xl font-bold mt-2 text-white">0 DH</p>
  </div>
  <div class="flex-1 p-4 bg-green-400 rounded-xl shadow-sm">
    <p class="font-semibold text-white">Dépenses totales</p>
    <p class="text-2xl font-bold mt-2 text-white">0 DH</p>
  </div>
  <div class="flex-1 p-4 bg-purple-400 rounded-xl shadow-sm">
    <p class="font-semibold text-gray-700">Solde</p>
    <p class="text-2xl font-bold mt-2 text-gray-700">0 DH</p>
  </div>
</section>

      <!-- revenu -->
      <section class=" border border-gray-200 p-4 rounded-xl shadow-sm bg-blue-100">
        <h2 class="text-xl font-bold text-gray-700 mb-4">Revenu</h2>

        <table class="w-full border border-gray-300 rounded mb-4">
          <thead class="bg-gray-100 text-gray-700">
            <tr>
              <th class="p-2">Montant</th>
              <th class="p-2">Description</th>
              <th class="p-2">Date</th>
              <th class="p-2">Action</th>
            </tr>
          </thead>
        </table>

        <form  name="ajouter_revenu"  class="flex items-center gap-3">
          <input type="number" name="montant" placeholder="Montant" class="border border-gray-300 p-2 rounded w-1/4">
          <input type="text" name="description" placeholder="Description" class="border border-gray-300 p-2 rounded flex-1">
          <input type="date" name="date" class="border border-gray-300 p-2 rounded w-1/4">
          <button class="bg-pink-300 hover:bg-pink-400 text-white px-4 py-2 rounded shadow">Ajouter</button>
        </form>
      </section>

      <!-- depenses -->
      <section class=" border border-gray-200 p-4 rounded-xl shadow-sm bg-blue-100">
        <h2 class="text-xl font-bold text-gray-700 mb-4">Dépenses</h2>

        <table class="w-full border border-gray-300 rounded mb-4">
          <thead class="bg-gray-100 text-gray-700">
            <tr>
              <th class="p-2">Montant</th>
              <th class="p-2">Description</th>
              <th class="p-2">Date</th>
              <th class="p-2">Action</th>
            </tr>
          </thead>
        </table>

        <form  class="flex items-center gap-3">
          <input type="number" name="ajouter_despenses" placeholder="Montant" class="border border-gray-300 p-2 rounded w-1/4">
          <input type="text" placeholder="Description" class="border border-gray-300 p-2 rounded flex-1">
          <input type="date" class="border border-gray-300 p-2 rounded w-1/4">
          <button class="bg-red-300 hover:bg-red-400 text-white px-4 py-2 rounded shadow">Ajouter</button>
        </form>
      </section>

    </main>
  </div>

</body>
</html>

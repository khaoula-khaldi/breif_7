<?php
include "config.php";

// expenses
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['modifier_Expenses'])) {

    $ID = $_GET['id'];

    $stmt = $conn->prepare("SELECT * FROM expenses WHERE idEx = ?");
    $stmt->bind_param("i", $ID);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier Dépense</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex justify-center items-center min-h-screen bg-purple-100 p-4">

    <div class="w-full max-w-lg p-6 rounded-xl shadow-lg border bg-blue-100">
        <h2 class="text-2xl font-bold text-gray-700 mb-6 text-center">
            Modifier Dépense
        </h2>

        <form action="modificationEx.php" method="POST" class="space-y-4">
 
            <input type="hidden" name="id" value="<?php echo $row['idEx'];  ?>">

            <div>
                <label class="block font-semibold text-gray-700 mb-1">Montant</label>
                <input type="text" name="MontantEx" value="<?php echo $row['MontantEx'] ;?>"
                       class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <div>
                <label class="block font-semibold text-gray-700 mb-1">Description</label>
                <input type="text" name="descreptionEx" value="<?php echo $row['descreptionEx']; ?>"
                       class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <div>
                <label class="block font-semibold text-gray-700 mb-1">Date</label>
                <input type="date" name="date_enterEx" value="<?php echo $row['date_enterEx']; ?>"
                       class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <button type="submit" name="update_Expenses"
                    class="w-full bg-blue-600 text-white font-semibold py-2 rounded-lg hover:bg-blue-700 transition">
                Enregistrer
            </button>

        </form>

    </div>

</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_Expenses'])) {

    $id = $_POST['id'];
    $montant = $_POST['MontantEx'];
    $description = $_POST['descreptionEx'];
    $date = $_POST['date_enterEx'];

    $stmt = $conn->prepare("UPDATE expenses SET MontantEx = ?, descreptionEx = ?, date_enterEx = ? WHERE idEx = ?");
    $stmt->bind_param("sssi", $montant, $description, $date, $id);

    if ($stmt->execute()) {
        header("Location: index.php");
        exit;
    } else {
        echo "Erreur : " . $stmt->error;
    }
}

<?php include(__DIR__ . '/includes/header.php'); ?>
<?php include(__DIR__ . '/includes/navbar.php'); ?>


<main class="main">
    <div class="container">
        <h1>Профіль користувача</h1>

        <table>
            <tr>
                <th>Логін:</th>
                <td><?= htmlspecialchars($user['Username']) ?></td>
            </tr>
            <tr>
                <th>Email:</th>
                <td><?= htmlspecialchars($user['Email']) ?></td>
            </tr>
            <tr>
                <th>Ім'я:</th>
                <td><?= htmlspecialchars($user['FirstName']) ?></td>
            </tr>
            <tr>
                <th>Прізвище:</th>
                <td><?= htmlspecialchars($user['LastName']) ?></td>
            </tr>
            <tr>
                <th>Телефон:</th>
                <td><?= htmlspecialchars($user['Phone']) ?></td>
            </tr>
            <tr>
                <th>Адреса:</th>
                <td><?= htmlspecialchars($user['Address']) ?></td>
            </tr>
            <tr>
                <th>Місто:</th>
                <td><?= htmlspecialchars($user['City']) ?></td>
            </tr>
            <tr>
                <th>Країна:</th>
                <td><?= htmlspecialchars($user['Country']) ?></td>
            </tr>
            <tr>
                <th>Поштовий індекс:</th>
                <td><?= htmlspecialchars($user['PostalCode']) ?></td>
            </tr>
            <tr>
                <th>Дата реєстрації:</th>
                <td><?= htmlspecialchars($user['RegistrationDate']) ?></td>
            </tr>
        </table>

        <a href="<?= BASE_URL ?>/logout">Вийти</a>
    </div>
</main>

<?php include(__DIR__ . '/includes/footer.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Quiz codeuses</title>
</head>
<body>
    <header>
        <div class="container">
            <h1>DEV QUIZ</h1>
        </div>
    </header>
    <main>
        <div class="container">
            <h2>Pour tester nos connaissances en développement web</h2>
            <ul>
                <li>Número de questions: 5</li>
                <li>Type: Multiple choice</li>
                <li>Choisisez une catégorie</li>
            </ul>
            <form method="post" action="">
                <label for="categorie">
                    Choisissez categorie
                </label>
                <select id="categorie">
                    <option value="">--Choisissez une categorie--</option>
                    <option value="programmation">Programmation</option>
                    <option value="html">HTML</option>
                    <option value="css">CSS</option>
                    <option value="javascript">Javascript</option>
                    <option value="vue">Vue JS</option>
                    <option value="php">PHP</option>
                    <option value="laravel">Laravel</option>
                </select>
                <a href="question.php?n=1" class="start">Start Quiz</a>
            </form>
        </div>
    </main>
    <footer>
        <div class="container">
            <p>Copyright &copy Codeuses2020</p>
        </div>
    </footer>
</body>
</html>
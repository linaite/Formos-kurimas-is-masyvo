<?php

//6. Sukurkite masyva kurio dumenimis mums naudojantis foreach ciklu
//ekrane suformuotu vartotojo registracijos forma.

$reg_form = [
    'form_method' => 'POST',
    'input' => [
        'input_user_name' => [
            'type' => 'text',
            'placeholder' => 'User name:',
            'name' => 'user_name'
        ],
        'input_user_nemail' => [
            'type' => 'email',
            'placeholder' => 'User email:',
            'name' => 'user_email'
        ],
        'input_user_password' => [
            'type' => 'password',
            'placeholder' => 'User password:',
            'name' => 'user_password'
        ],
        'input_user_color' => [
            'type' => 'color',
            'placeholder' => 'User color:',
            'name' => 'user_color'
        ],
    ],
    'button' => [
        'input_submit' => [
            'type' => 'submit',
            'name' => 'siusti',
            'value' => 'Siusti'
        ],
    ],
];
var_dump($_POST);

//formos kurimas paciame php
//foreach ($reg_form['input'] as $data) {
//    print '<input type="' . $data['type'] . '" placeholder="' . $data['placeholder'] . '" name="' . $data['name'] . '">';
//}


?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="<?php print $reg_form['form_method']; ?>">
    <?php foreach ($reg_form['input'] as $data): ?>
        <input type="<?php print $data['type']; ?>"
               placeholder="<?php print $data['placeholder']; ?>"
               name="<?php print $data['name']; ?>">
    <?php endforeach; ?>
    <?php foreach ($reg_form['button'] as $data): ?>
        <input type="<?php print $data['type']; ?>"
               value="<?php print $data['value']; ?>"
               name="<?php print $data['name']; ?>">
    <?php endforeach; ?>
</form>
</body>
</html>


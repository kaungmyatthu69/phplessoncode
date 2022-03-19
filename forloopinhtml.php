<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $users=[
                [
                "name"=>"Mg Mg",
                "age"=>21,
                "Is admin"=>false
                ],
                [
                'name'=>'Ko Ko',
                'age'=>22,
                'Is admin'=>false
                ],
                [
                    'name'=>'su su',
                    'age' => 22,
                    'Is admin'=>true
                ]
                ];
        foreach ($users as $user) {
            if ($user['Is admin']==true) 
            {
                ?>
                <h1>User name is <?php print_r($user['name']);?></h1>
                <h1>User age is <?php echo $user['age']?>
                <?php
            }
            
           
            
            
            
        }  ;  
           
    ?>
    
</body>
</html>
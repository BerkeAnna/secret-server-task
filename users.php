<?php

$users=[
    [
        "id"=>"123",
        "secretName"=>"Anna's secret",
        "secret"=>"My secret",
        "secretOwner"=>"Anna"
    ],
    [
        "id"=>"1273",
        "secretName"=>"password",
        "secret"=>"asd123asd",
        "secretOwner"=>"anonim"
    ]
];

$resptMessage="";

switch ($_SERVER["HTTP_ACCEPT"]){
    case "application/json":
        $resptMessage = json_encode($users);
        header("Content-Type:application/json");
        break;

    case "text/xml":
         $resptMessage = "<?xml version=\"1.0\"?>\n";
         $resptMessage .= "<users>\n";

        foreach ($users as $user) {
            $resptMessage .= "    <user>\n";
            $resptMessage .= "        <id>" . $user["id"] .  "</id>\n";
            $resptMessage .= "        <secretName>" . $user["secretName"] .  "</secretName>\n";
            $resptMessage .= "        <secret>" . $user["secret"] .  "</secret>\n";
            $resptMessage .= "        <secretOwner>" . $user["secretOwner"] .  "</secretOwner>\n";
            $resptMessage .= "    </user>\n";

         }
        $resptMessage .= "</users>";
        header("Content-Type: text/xml");
        break;

    default:
        http_response_code(406);
}

echo $resptMessage;
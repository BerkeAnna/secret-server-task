<!DOCTYPE HTML>
<HTML>
<HEAD>
    <!-- ez műkszik -->
    <meta http-equiv="content-type" content="text/html; charset=UTF8" >
    <style>
        label {
            margin: 5px;
            padding: 5px;
            text-align: left;
            display: inline-block;
            min-width: 120px;
        }

        input {
            margin: 5px;
            padding: 5px;
            text-align: left;
            display: inline-flex;
            vertical-align: bottom;
        }
    </style>
</HEAD>
<BODY>

<h1>Könyvek felvitele</h1>

<form method="POST" action="retrieveByName.php" accept-charset="utf-8">

    <label>ID </label>
    <input type="text" name="id" />
    <br>
    <label>Secret name </label>
    <input type="text" name="secretName" />
    <br>
    <label>secret </label>
    <input type="text" name="secret" />
    <br>
    <label>secret Owner </label>
    <input type="text" name="secretOwner" />
    <br>

    <input type="submit" value="Elküld" />

</form>

</BODY>
</HTML>

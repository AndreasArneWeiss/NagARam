<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Anagram</title>
</head>
<body>
<form method="GET" action="/find-anagram/">
    <input type="text" name="word">
    <input type="submit" value="Anagramify">
</form>
<br><br>

</body>
</html>
<?php /**PATH /home/adven/PhpstormProjects/NagARam/resources/views/layouts/app.blade.php ENDPATH**/ ?>
<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Anagram</title>
</head>
<body>
<form method="GET" action="<?php echo e(action('AnagramController@find_match')); ?>">
    <input type="text" name="word">
    <input type="submit" value="Anagramify">
</form>
<br><br>

</body>
</html>
<?php /**PATH /home/adven/PhpstormProjects/NagARam/resources/views/app.blade.php ENDPATH**/ ?>
<!doctype html>
<html>
<head>
    <title>Create link</title>
</head>
<body>

<form method="post" action="process/submit.php">
<label>Code (Leave empty to auto-generate)</label><br>
<input type="text" name="code">
<br>

<label>Link URL</label><br>
<input type="text" name="link" required>
<br>

<input type="submit" value="Create link">
</form>

</body>
</html>
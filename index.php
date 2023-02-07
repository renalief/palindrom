<!DOCTYPE html>
<html lang="en">

<head>
    <title>Checker Palindrom</title>
</head>

<body>
    <div>
        <label>Input your text</label><br>
        <input name="textPalindrom" id="textPalindrom" type="text">
        <label><b>Note : </b>This program only detects text and will delete any existing symbols</label><br>
    </div>
    <div>
        <button onclick="checkPalindrom()">Submit</button>
    </div>
</body>

</html>
<script src="jquery.min.js"></script>
<script type="text/javascript">
    function checkPalindrom() {
        var textPalindrom = $('#textPalindrom').val();
        var deleteSymbol = /[\W_]/g;
        txt = textPalindrom.toLowerCase().replace(deleteSymbol, '');
        var reverseTxt = txt.split('').reverse().join('');
        reverseTxt === txt ? alert("Your text is Palindrom") : alert("Your text isn't Palindrom")
    }
</script>
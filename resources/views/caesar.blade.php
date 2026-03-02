<!DOCTYPE html>
<html>

<head>
    <title>Caesar Cipher</title>
</head>

<body>

    <h2>Caesar Cipher</h2>

    <form method="POST" action="{{ route('caesar.process') }}">
        @csrf

        <label>Text</label><br>
        <textarea name="text" rows="4" cols="40">{{ $text ?? '' }}</textarea><br><br>

        <label>Shift</label><br>
        <input type="number" name="shift" value="{{ $shift ?? '' }}"><br><br>

        <label>Mode</label><br>
        <select name="type">
            <option value="encrypt">Encrypt</option>
            <option value="decrypt">Decrypt</option>
        </select><br><br>

        <button type="submit">Proses</button>
    </form>

    @if(isset($result))
    <h3>Hasil:</h3>
    <p>{{ $result }}</p>
    @endif

</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Chat</title>
</head>
<body>
  <header>
    <h1>Chat</h1>
  </header>
  <main>
    <p>
      @foreach (explode(' ', $pesan) as $kata)
        @if (in_array($kata, array_keys($emoticonMap)))
          <img src="{{ asset('img/' . $emoticonMap[$kata]) }}" alt="{{ $kata }}">
        @else
          {!! $kata !!}
        @endif
      @endforeach
    </p>
  </main>
  <footer>
    <p>Copyright &copy; 2023</p>
  </footer>
</body>
</html>

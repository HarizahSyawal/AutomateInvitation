<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="colorlib.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,800" rel="stylesheet" />
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <title>PPLN JB</title>
  </head>
  <body>
    <div class="s004">
      <form method="GET" action="/search">
      <div class="logo-container">
            <img src="../images/logo_kpu.png" alt="logo" width="150dp" class="logo">
        </div>
        <fieldset>
          <legend>Dapatkan undangan pemilihan umum dengan menginput no passport/NIK</legend>
          <div class="inner-form">
            <div class="input-field">
            @csrf
              <input name="search" id="search" class="form-control" id="choices-text-preset-values" type="text" placeholder="Masukkan No.Passport/NIK..." required/>
              <button class="btn-search" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
                </svg>
              </button>
            </div>
          </div>
        </fieldset>
      </form>
      @if(isset($users) && count($users) > 0)
        <ul>
            @foreach($users as $user)
                <li>{{ $user->name }} - Passport: {{ $user->passport_no }}, NIK: {{ $user->nik }}</li>
                <!-- Display other user details as needed -->
            @endforeach
        </ul>
    @else
        <p>No users found.</p>
    @endif
    </div>
    <script src="{{ asset('js/extention/choices.js') }}"></script>
    <script>
      var textPresetVal = new Choices('#choices-text-preset-values',
      {
        removeItemButton: true,
      });

    </script>
  </body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>

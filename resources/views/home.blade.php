<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    @include('elem.head')
  </head>
  <body>
    @include('elem.header')
    <div class="numberList">
      <ul>
        @foreach ($oddNumbers as $value)
        <li> {{$value}} </li>
        @endforeach
      </ul>
    </div>

    @include('elem.footer')
  </body>
</html>

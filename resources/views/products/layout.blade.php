
<!DOCTYPE html>
<html>
<head>
	<title>Laravel</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
<style>
	body {
      background: #ccc url("/uploads/media/default/0001/01/0710cad7a1017902166203def268a0df2a5fd545.png") no-repeat fixed center; 
  }

h1 { color: #b48608; font-family: 'Droid serif', serif; font-size: 36px; font-weight: 400; font-style: italic; line-height: 44px; margin: 0 0 12px; text-align: center; }
   table {

        border-collapse: collapse;
      }       
      table, th, td {
        border: 2px solid black;
      }
     
      th {
        text-align: center;
        height: 50px;
      }
      tbody tr:nth-child(odd) {
        background: #ffffff;
      }
      tbody tr:nth-child(even) {
        background: #f4f4f4;
      }

	</style>
</head>

<body>
	<div class="container">
		@yield('content')
	</div>
</body>
</html>

1.	<!DOCTYPE html>
2.	<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
3.	    <head>
4.	        <meta charset="utf-8">
5.	        <meta name="viewport" content="width=device-width, initial-scale=1">
6.	<meta name="csrf-token" content="{{ csrf_token() }}">
7.	
8.	        <title>Example Project</title>
9.	
10.	        <!-- Fonts -->
11.	        <link rel="preconnect" href="https://fonts.bunny.net">
12.	        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
13.	
14.	        @viteReactRefresh
15.	        @vite(['resources/css/app.css', 'resources/js/app.js'])
16.	    </head>
17.	    <body className="antialiased">
18.	       <div id="root"></div>
19.	    </body>
20.	</html>

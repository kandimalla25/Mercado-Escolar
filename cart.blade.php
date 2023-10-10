<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
   
    <title>Shop</title>
    <link rel="stylesheet" href="{{asset('css/tailwind.min.css')}}">
    @livewireStyles
</head>
<body>
    <main class="my-8">
        <div class="container px-6 mx-auto">
            <div class="flex justify-center my-6">
                <div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
                  
                    <livewire:cart-list />
                </div>
              </div>
        </div>
    </main>
    @livewireScripts
</body>

</html>

<?php

    // URL del endpoint que deseas solicitar
    $url = 'https://6480e394f061e6ec4d49ff4c.mockapi.io/Campers';

    // Configurar las opciones del contexto de flujo
    $options = array(
        'http' => array(
            'method' => 'GET', // Método de solicitud (GET, POST, etc.)
            // Agrega encabezados de solicitud si es necesario
            'header' => 'Content-type: application/json',
        ),
    );

    // Crear el contexto de flujo
    $context = stream_context_create($options);

    // Realizar la solicitud utilizando file_get_contents()
    $response = file_get_contents($url, false, $context);

    // Verificar si la solicitud fue exitosa
    if ($response === false) {
        // Manejar el error de la solicitud
        echo "Error al realizar la solicitud";
    } else {
        // Procesar la respuesta
        
        $data=json_decode($response,true);
        print_r($data[0]["Nombre"]);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./output.css">
    <title>CRUD</title>
</head>
<body class="grid grid-cols-1 justify-items-center bg-gray-200">
<div class="grid justify-items-center">
        <div class="grid items-center justify-center p-8 my-10 bg-white shadow w-max rounded-xl shadow-slate-300">
            <h1 class="text-4xl font-medium text-center">CampusLands 🚀 </h1>
            <p class="text-center text-slate-500"></p>
            <form action="index.php" method="post" id="form"class="grid grid-cols-1 gap-10 my-5 ">
                <div class="grid grid-cols-2 gap-5 w-max">
                    <div class="">
                        <label for="nombre">
                            <p class="pb-2 font-medium text-slate-700">Nombre</p>
                            <input id="nombre" name="nombre"  type="text" class="w-auto px-3 py-3 border rounded-lg border-slate-200 focus:outline-none focus:border-slate-500 hover:shadow" placeholder="Ingrese nombre completo">
                        </label>
                    </div>    
                    <div>
                        <label for="apellido">
                            <p class="pb-2 font-medium text-slate-700">Apellido</p>
                            <input id="apellido" name="apellido" type="text" class="w-auto px-3 py-3 border rounded-lg border-slate-200 focus:outline-none focus:border-slate-500 hover:shadow" placeholder="Ingrese apellido">
                        </label>
                    </div> 
                    <div>
                        <label for="direccion">
                            <p class="pb-2 font-medium text-slate-700">Dirección</p>
                            <input id="direccion" name="direccion"  type="text" class="w-auto px-3 py-3 border rounded-lg border-slate-200 focus:outline-none focus:border-slate-500 hover:shadow" placeholder="Ingrese direccion">
                        </label>
                    </div> 
                    <div>
                        <label for="edad">
                            <p class="pb-2 font-medium text-slate-700">Edad</p>
                            <input id="edad" name="edad" type="number"  class="w-auto px-3 py-3 border rounded-lg border-slate-200 focus:outline-none focus:border-slate-500 hover:shadow" placeholder="Ingrese Edad">
                        </label>
                    </div> 
                    <div>
                        <label for="email">
                            <p class="pb-2 font-medium text-slate-700">Email</p>
                            <input id="email" name="email" type="email" class="w-auto px-3 py-3 border rounded-lg border-slate-200 focus:outline-none focus:border-slate-500 hover:shadow" placeholder="Correo electrónico">
                        </label>
                    </div>
                    <div>
                        <label for="cedula">
                            <p class="pb-2 font-medium text-slate-700">Cédula</p>
                            <input id="cedula" name="cedula" type="text" class="w-auto px-3 py-3 border rounded-lg border-slate-200 focus:outline-none focus:border-slate-500 hover:shadow" placeholder="Número de documento">
                        </label>
                    </div>                     
                </div>
                <div class="grid grid-cols-2 gap-5 w-max">
                    <div>
                        <label for="email">
                            <p class="pb-2 font-medium text-slate-700">Horario de entrada</p>
                            <input id="email" name="email" type="email" class="w-auto px-3 py-3 border rounded-lg border-slate-200 focus:outline-none focus:border-slate-500 hover:shadow" placeholder="Correo electrónico">
                        </label>
                    </div>                    
                    <div>
                        <label for="team">
                            <p class="pb-2 font-medium text-slate-700">Team</p>
                            <input id="email" name="team" type="text" class="w-auto px-3 py-3 border rounded-lg border-slate-200 focus:outline-none focus:border-slate-500 hover:shadow" placeholder="Team">
                        </label>
                    </div> 
                    <div>
                        <label for="trainer">
                            <p class="pb-2 font-medium text-slate-700">Trainer</p>
                            <input id="trainer" name="trainer" type="text" class="w-auto px-3 py-3 border rounded-lg border-slate-200 focus:outline-none focus:border-slate-500 hover:shadow" placeholder="Trainer">
                        </label>
                    </div>
                    <div class="grid grid-cols-2">                   
                        <button class="inline-flex items-center justify-center w-auto p-3 mx-2 my-2 font-medium text-white bg-indigo-600 border-indigo-500 rounded-lg hover:bg-indigo-500 hover:shadow gap-1" id="confirmar" type="submit" data-accion="POST">
                            <span>Confirmar</span>
                            <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            </span>
                        </button> 
                        <button class="inline-flex items-center justify-center w-auto p-3 mx-2 my-2 font-medium text-white bg-indigo-600 border-indigo-500 rounded-lg hover:bg-indigo-500 hover:shadow gap-1" id="eliminar" type="submit" data-accion="POST">
                            <span>Eliminar</span>
                            <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg></span>
                        </button> 
                        <button class="inline-flex items-center justify-center w-auto p-3 mx-2 my-2 font-medium text-white bg-indigo-600 border-indigo-500 rounded-lg hover:bg-indigo-500 hover:shadow gap-1" id="editar" type="submit" data-accion="POST">
                            <span>Editar</span>
                            <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                            </svg>
                            </span>
                        </button> 
                        <button class="inline-flex items-center justify-center w-auto p-3 mx-2 my-2 font-medium text-white bg-indigo-600 border-indigo-500 rounded-lg hover:bg-indigo-500 hover:shadow gap-1" id="buscar" type="submit" data-accion="POST">
                            <span>Buscar</span>
                            <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                            </svg>

                            </span>
                        </button> 
                    </div> 
                </div>  
                </div>            

            </form>
        </div>
        <div id="listado" class="grid items-center p-4 my-10 bg-white shadow align-center w-max rounded-xl shadow-slate-300 justify-items-center">
        
            <div class="grid items-center col-span-2 align-middle">
                <form id="form2">
                    <input type="search" required name="buscar" id="" placeholder="Buscar" class="w-auto px-3 py-3 border-2 rounded-lg border-slate-200 focus:outline-none focus:border-slate-500 hover:shadow" >
                    <button class="inline-flex items-center justify-center w-auto p-3 mx-2 my-2 font-medium text-white bg-indigo-600 border-indigo-500 rounded-lg hover:bg-indigo-500 hover:shadow" type="submit" data-accion="SEARCH">
                        <span>Buscar</span>
                    </button>     
                </form>
            </div>
            <table id class="border-2 border-separate table-fixed border-slate-400 border-spacing-1">
                <thead class="">
                    <tr class="">
                        <th class="p-5 border border-slate-300">ID</th>
                        <th class="p-5 border border-slate-300">Cédula</th>
                        <th class="p-5 border border-slate-300">Nombre</th>
                        <th class="p-5 border border-slate-300">Apellido</th>
                        <th class="p-5 border border-slate-300">Edad</th>
                        <th class="p-5 border border-slate-300">Email</th>
                        <th class="p-5 border border-slate-300">Dirección</th>
                        <th class="p-5 border border-slate-300">Simbol</th>
                        
                    </tr>
                </thead>
                <tbody id="tableUsuarios">
                    <tr >
                        <td class="text-center border border-slate-300">Cedula</td>
                        <td class="text-center border border-slate-300 ">Nombre</td>
                        <td class="text-center border border-slate-300 ">Apellido</td>
                        <td class="text-center border border-slate-300 ">Edad</td>
                        <td class="text-center border border-slate-300 ">Email</td>
                        <td class="text-center border border-slate-300 ">Dirección</td>
                        <td class="text-center border border-slate-300 "> <button class="inline-flex items-center justify-center w-auto p-3 mx-2 my-2 font-medium text-white bg-indigo-600 border-indigo-500 rounded-lg hover:bg-indigo-500 hover:shadow">
                        <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l7.5-7.5 7.5 7.5m-15 6l7.5-7.5 7.5 7.5" />
                        </svg>
                        </span>
                        </button> </td>                        
                    </tr>               
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>